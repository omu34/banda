const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        screens: {
            xs: { min: "320px", max: "567" },
            sm: { min: "640px", max: "767" },
            md: { min: "768px", max: "1023" },
            lg: { min: "1024px", max: "1279" },
            xl: { min: "1280px", max: "1535" },
            "2xl": { min: "1536px" },
        },
        font: {
            "Lexend Deca": {
                "Lexend-Regular": ["Lexend-Deca-Regular.woff", 'sans', 'sans-serif'],
                "Lexend-Medium": ["Lexend-Deca-Medium.woff", 'sans', 'sans-serif'],
                "Lexend-Bold": ["Lexend-Deca-Bold.woff", 'sans', 'sans-serif']
            },
            "Hilmar": {
                "Hilmar-Regular": ["Hilmar-Regular.woff", 'sans', "sans-serif"],
                "Hilmar-Bold": ["Hilmar-Bold.woff", 'sans', "sans-serif"]
            }
        },
        extend: {
            overflow: {
                hidden: "hidden",
            },
        },
        plugins: [
            require("tailwindcss-animated"),
            require('@tailwindcss/forms'),
            require('@tailwindcss/typography'),
            require("@tailwindcss/aspect-ratio"),
            require("@tailwindcss/line-clamp"),
            require("postcss"),
            require("autoprefixer"),
            require('flowbite/plugin')
        ],



    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },
};