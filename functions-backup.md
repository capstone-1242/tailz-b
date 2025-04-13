# Functions.php Backup
This is a backup of the working functions.php file that uses hardcoded page IDs.

## Carbon Fields Initialization
```php
add_action('after_setup_theme', 'crb_load');
function crb_load() {
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
```

## Page IDs Reference
- Grooming: 17
- Training: 27
- Daycare: 38
- Hotel: 19
- Exercise: 13

## Grooming Services Fields
```php
add_action('carbon_fields_register_fields', 'crb_attach_grooming_fields');
function crb_attach_grooming_fields() {
    Container::make('post_meta', 'Grooming Services')
        ->where('post_id', '=', 17) // Grooming page ID
        ->add_fields(array(
            // ... rest of the fields
        ));
}
```

## Training Options Fields
```php
add_action('carbon_fields_register_fields', 'crb_training_options');
function crb_training_options() {
    Container::make('post_meta', 'Training Options')
        ->where('post_id', '=', 27) // Training page ID
        ->add_fields(array(
            // ... rest of the fields
        ));
}
```

## Daycare Services Fields
```php
add_action('carbon_fields_register_fields', 'crb_attach_daycare_fields');
function crb_attach_daycare_fields() {
    Container::make('post_meta', 'Daycare Services')
        ->where('post_id', '=', 38) // Daycare page ID
        ->add_fields(array(
            // ... rest of the fields
        ));
}
```

## Hotel Packages Fields
```php
add_action('carbon_fields_register_fields', 'crb_attach_hotel_fields');
function crb_attach_hotel_fields() {
    Container::make('post_meta', 'Hotel Packages')
        ->where('post_id', '=', 19) // Hotel page ID
        ->add_fields(array(
            // ... rest of the fields
        ));
}
```

## Exercise Options Fields
```php
add_action('carbon_fields_register_fields', 'crb_exercise_options');
function crb_exercise_options() {
    Container::make('post_meta', 'Exercise Options')
        ->where('post_id', '=', 13) // Exercise page ID
        ->add_fields(array(
            // ... rest of the fields
        ));
}
``` 