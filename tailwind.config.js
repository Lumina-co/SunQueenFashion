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
                'parisienne': ['Parisienne'],
            },
            colors: {
                'red1': '#F0433F',
                'black1': '#161616',
                'dune': '#D5C0A3',
                'white': '#F6F6F6',
                'pinki' : 'F24C3D',
            },

            // animation: {
            //     'fade-in1': 'fade-in 0.5s ease-in-out 0.5s forwards',
            //     'fade-in2': 'fade-in 0.5s ease-in-out 1s forwards',
            //   }
        },
    },

    plugins: [forms, typography],
};
