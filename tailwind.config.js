const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'google-icon':['Material Icons'],
                'google-icon-outlined':['Material Symbols Outlined']
            },
            colors: {
                'page':'#E5E7EB',
                'page-on':'#4B5563',
                'page-dark':'#000',
                'page-dark-on':'#fff',
                'main':'#fff',
                'main-on':'#000',
                'main-dark':'#1E1F1C',
                'main-dark-on':'#fff',
                'primary':'#111827',
                'primary-on':'#fff',
                'primary-dark':'#000',
                'primary-dark-on':'#fff',
                'secondary':'#374151',
                'secondary-dark':'#989A9C',
                'white':'#FFFFFF',
                'white-dark':'#FFFFFF',
                'success':'#22C55E',
                'success-dark':'#22C55E',
                'warning':'#EAB308',
                'warning-dark':'#EAB308',
                'danger':'#EF4444',
                'danger-dark':'#EF4444',
                'info':'#3B82F6',
                'info-dark':'#3B82F6',
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
                '26': '6.5rem',
                '30': '7.5rem',
                '128': '32rem',
            }
        },
    },

    plugins: [require('@tailwindcss/typography')],
};
