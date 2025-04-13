document.addEventListener('DOMContentLoaded', function() {
    // Initialize tab containers
    const tabButtons = document.querySelectorAll('.tab-button');
    const sizeSelectors = document.querySelectorAll('select[id$="-size"]');
    const dogSizeContainer = document.querySelector('#dog-size-container');
    const catSizeContainer = document.querySelector('#cat-size-container');
    
    // Set initial active state
    const activeButton = document.querySelector('.tab-button.active') || tabButtons[0];
    if (activeButton) {
        // Ensure proper styling for initial active button
        activeButton.classList.add('active', 'bg-[#FF6A6A]', 'text-white');
        activeButton.classList.remove('bg-gray-200');
        activeButton.setAttribute('aria-selected', 'true');
        
        // Hide inactive size selector
        const initialAnimal = activeButton.textContent.toLowerCase().trim();
        if (initialAnimal === 'dog') {
            dogSizeContainer?.classList.remove('hidden');
            catSizeContainer?.classList.add('hidden');
        } else {
            dogSizeContainer?.classList.add('hidden');
            catSizeContainer?.classList.remove('hidden');
        }
        
        // Update initial prices
        updatePrices(initialAnimal);
    }

    // Handle tab button clicks
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-[#FF6A6A]', 'text-white');
                btn.classList.add('bg-gray-200');
                btn.setAttribute('aria-selected', 'false');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-[#FF6A6A]', 'text-white');
            this.classList.remove('bg-gray-200');
            this.setAttribute('aria-selected', 'true');
            
            // Get the animal type from the button text
            const animal = this.textContent.toLowerCase().trim();
            
            // Show/hide size selectors
            if (animal === 'dog') {
                dogSizeContainer?.classList.remove('hidden');
                catSizeContainer?.classList.add('hidden');
            } else {
                dogSizeContainer?.classList.add('hidden');
                catSizeContainer?.classList.remove('hidden');
            }
            
            // Update prices
            updatePrices(animal);
        });
    });

    // Handle size selector changes
    sizeSelectors.forEach(selector => {
        selector.addEventListener('change', function() {
            const animal = this.id.split('-')[0];
            updatePrices(animal);
        });
    });

    // Function to update prices based on selected size and animal
    function updatePrices(animal) {
        // Get the selected size
        const sizeSelector = document.getElementById(animal + '-size');
        if (!sizeSelector) {
            console.error('Size selector not found for:', animal);
            return;
        }
        const selectedSize = sizeSelector.value;
        
        console.log('Updating prices for:', animal, 'size:', selectedSize);
        
        // Update prices in service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach((card, index) => {
            const priceElement = card.querySelector('.price');
            if (!priceElement) {
                console.error('Card', index + 1, 'is missing price element');
                return;
            }

            try {
                // Get price data from the data attribute
                const priceKey = animal + '-prices';
                const pricesData = card.getAttribute('data-' + priceKey);
                
                if (!pricesData) {
                    console.error('Card', index + 1, 'is missing', priceKey, 'data attribute');
                    priceElement.textContent = 'N/A';
                    return;
                }
                
                const prices = JSON.parse(pricesData);
                console.log('Card', index + 1, priceKey + ':', prices);
                
                if (!prices || typeof prices !== 'object') {
                    console.error('Card', index + 1, 'has invalid price data:', prices);
                    priceElement.textContent = 'Error';
                    return;
                }
                
                const price = prices[selectedSize];
                if (price === 'N/A' || price === null || price === undefined || price === '') {
                    console.log('Card', index + 1, 'has no price for size:', selectedSize);
                    priceElement.textContent = 'N/A';
                    return;
                }
                
                priceElement.textContent = '$' + price;
                
            } catch (error) {
                console.error('Error updating price for card', index + 1, ':', error);
                priceElement.textContent = 'Error';
            }
        });
    }

    // Mobile responsiveness
    function handleMobileLayout() {
        const fifthCard = document.querySelector('.service-card:nth-child(5)');
        if (window.innerWidth < 768) {
            if (fifthCard) {
                fifthCard.classList.remove('col-span-2');
            }
        } else {
            if (fifthCard) {
                fifthCard.classList.add('col-span-2');
            }
        }
    }

    // Run on load and resize
    handleMobileLayout();
    window.addEventListener('resize', handleMobileLayout);
}); 