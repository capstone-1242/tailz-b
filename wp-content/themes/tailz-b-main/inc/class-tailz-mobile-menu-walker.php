<?php
/**
 * Custom implementation for WordPress Mobile Menu with Tailwind
 */

class Tailz_Mobile_Menu_Walker extends Walker_Nav_Menu {
    
    /**
     * Starts the element output.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        // If this item has children, we'll create a wrapper div
        if ($has_children) {
            $output .= '<div class="flex justify-between items-center">';
        }
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        // If this item has children, add toggle button and close the wrapper
        if ($has_children) {
            // Generate a unique ID for the submenu
            $submenu_id = 'submenu-' . $item->ID;
            
            $item_output .= '<button class="mobile-submenu-toggle px-6 py-3 text-white focus:outline-none" data-target="' . $submenu_id . '">';
            $item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>';
            $item_output .= '</button>';
            $item_output .= '</div>'; // Close the flex wrapper
        }
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    /**
     * Starts the list before the elements are added.
     */
    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $parent_item_id = 'submenu-' . $this->current_item_id; // Get the current item ID
        $output .= "\n$indent<ul id=\"$parent_item_id\" class=\"sub-menu bg-[#1D2F98] pl-4\">\n";
    }
    
    // Store the current item ID
    private $current_item_id;
    
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        $this->current_item_id = $element->ID; // Store the current item ID
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
} 