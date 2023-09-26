import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins'],
                'parisienne': ['parisienne'],
            },
            colors: {
                'red': '#F0433F',
                'black': '#050304',
                'dune': '#D5C0A3',
                'white': '#F6F6F6',
                'pink' : 'F24C3D',

            },
        },
    },

    plugins: [forms, typography],
};
