/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Add your custom colors here
            },
            fontFamily: {
                body: [],
                // Add your custom font families here
            },
        },
    },
    plugins: [
        require('daisyui'),
        require('@tailwindcss/forms'),
    ],
};
