/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme  : {
        extend: {},
    },
    darkMode: 'media', // or 'media'
    daisyui: {
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: false, // Shows info about daisyUI version and used config in the console when building your CSS
        themes: [
            {
                light: {
                    "primary": "#FFFFFF",
                    "secondary": "#02427B",
                    "accent": "#1FB2A6",
                    "neutral": "#2A323C",
                    "base-100": "#F6F4F5",
                    "info": "#3ABFF8",
                    "success": "#36D399",
                    "warning": "#FBBD23",
                    "error": "#F87272",
                },
                dark: {
                    "primary": "#0A1930",
                    "secondary": "#02427B",
                    "accent": "#1FB2A6",
                    "neutral": "#2A323C",
                    "base-100": "#1D232A",
                    "info": "#3ABFF8",
                    "success": "#36D399",
                    "warning": "#FBBD23",
                    "error": "#F87272",
                },
            },
        ],
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
}

