const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            
        },
    },

    theme: {
        extend: {
        colors: { 
            '00c6bb': '#00c6bb',
            'f8e483': '#f8e483',
            'd6a329': '#d6a329',
            'fbd800': '#fbd800',
            'naranja-factoria': '#FF4700',
        },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
