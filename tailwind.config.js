const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['Montserrat'],
                exo: ['Exo'],
            },
            colors: {
                primary: '#001B2D',
                secondary: '#69C43C',
                lightSecondary: '#68ff2c',
                warning: '#eab308',
                alert: '#dc2626',
                white: '#FFFFFF',
                black: '#000000',
                light: '#d6d6d6',
                dark: '#273444',
                sand: '#dfd2c9',
                sand_dark: '#a3958c',
            },   
            maxWidth: {
                '8xl': '1450px',
            }                
        },
    },
    darkMode: "class",
    plugins: [
                require('@tailwindcss/forms'), 
                require('@tailwindcss/typography'),
                require('tw-elements/dist/plugin.cjs'),
            ]
};
