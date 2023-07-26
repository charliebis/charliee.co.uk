import './bootstrap';

/**
 * Slides into view the given numbered testimonial
 * @param item
 */
function displayTestimonialItem(item) {
    document.getElementById('item' + item).scrollIntoView({block: 'nearest', inline: 'center'});
}

/**
 * Listens for clicks on testimonial item links and handles the moving to the chosen slide
 * @param buttonsContainer
 */
function testimonialButtonClick(buttonsContainer) {
    // Add click event listener to the buttons container
    buttonsContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('btn-testimonial')) {
            const dataTarget = event.target.getAttribute('data-target');
            event.preventDefault();
            displayTestimonialItem(dataTarget);
        }
    });
}

/**
 * This
 * @param testimonialsContainer
 */
function testimonialScroll(testimonialsContainer) {

    testimonialsContainer.addEventListener('scroll', function () {
        let visibleItem = findVisibleChildElementIndex('container-testimonials');
        const testimonialItemLinks = document.getElementsByClassName('btn-testimonial');

        if (visibleItem !== null) {
            //  Set the styles on the testimonial buttons
            for (let i = 0; i < testimonialItemLinks.length; i++) {
                testimonialItemLinks[i].classList.remove('border-secondary', 'bg-secondary', 'border-primary', 'bg-base-300');
                //  If the currently visible item
                if (i === visibleItem - 1) {
                    testimonialItemLinks[i].classList.add('border-secondary', 'bg-secondary');
                }
                else {
                    testimonialItemLinks[i].classList.add('border-primary', 'bg-base-300');
                }
            }
        }
    });
}

/**
 * Activates the theme named in the value of the themeSetting param. Will be "light" or "dark"
 */
function activateTheme(themeSetting) {
    document.firstElementChild.setAttribute('data-theme', themeSetting);

    const themeSettingLinks = document.getElementsByClassName('theme-setting');

    for (let i = 0; i < themeSettingLinks.length; i++) {
        themeSettingLinks[i].style.display = 'none';
        if (themeSettingLinks[i].getAttribute('data-theme-setting') !== themeSetting) {
            themeSettingLinks[i].style.display = 'block';
            document.getElementById('container-theme-setting').setAttribute('aria-label', themeSetting)
        }
    }
    console.log('Theme has been set to: ' + themeSetting);

    //  Record the chosen theme setting
    savePreferredTheme(themeSetting);
}

/**
 * Listens for clicks on the theme switch toggle option and handles the activation of the chosen theme
 * @param themeSwitchContainer
 */
function themeSwitchClick(themeSwitchContainer) {
    themeSwitchContainer.addEventListener('click', function (event) {
        if (event.target.closest('.theme-setting-icon')) {
            const themeSetting = event.target.getAttribute('data-theme-setting');
            event.preventDefault();
            activateTheme(themeSetting);
        }
    });
}


/**
 * Listens for changes to the system-wide preferred theme setting and activates that theme if it does change
 * while this site is showing the browser.
 */
function themeSwitchSystemChange() {
    window.matchMedia('(prefers-color-scheme: dark)')
        .addEventListener('change', ({matches: isDark}) => {
            const themeSetting = isDark ? 'dark' : 'light';
            activateTheme(themeSetting);
        });
}

/**
 * Takes then given theme and sets it into localStorage, so it can be recalled on the user's next site visit
 * @param theme
 */
function savePreferredTheme(theme) {
    localStorage.setItem(themeStorageKey, theme);
}

function findVisibleChildElementIndex(parentID) {
    const parentElement = document.getElementById(parentID);
    // Get all the child elements within the parent element
    const childElements = parentElement.children;

    // Loop through the child elements to find the one currently in view
    for (let i = 0; i < childElements.length; i++) {
        const childElement = childElements[i];
        const childElementRect = childElement.getBoundingClientRect();

        // Check if the child element is within the viewport boundaries
        if (childElementRect.left >= 0 && childElementRect.right <= (window.innerWidth || document.documentElement.clientWidth)) {
            // The child element is currently in view
            return childElement.getAttribute('data-item');
        }
    }

    // No child element is in view
    return null;
}



document.addEventListener('DOMContentLoaded', function () {
    //  Activate the theme specified in the data-theme attribute of the HTML tag
    activateTheme(document.firstElementChild.getAttribute('data-theme'));
    /**
     * Handles clicks on the actions in the testimonials
     */
    const testimonialsContainer = document.getElementById('container-testimonials');
    const buttonsContainer = document.getElementById('container-testimonials-buttons');

    if (testimonialsContainer) {
        testimonialScroll(testimonialsContainer);
    }

    if (buttonsContainer) {
        testimonialButtonClick(buttonsContainer);
    }

    /**
     * Handles clicks on the theme switching buttons
     */
    const themeSwitchContainer = document.getElementById('container-theme-setting');

    if (themeSwitchContainer) {
        //  Listen for theme change icon clicks
        themeSwitchClick(themeSwitchContainer);
        //  Listen for system-wide theme change
        themeSwitchSystemChange();
    }
});
