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
                laporan_bg: "#0EB29A",
                laporan_txt: "#FDFDFD",
                laporan_bg2: "#FFD24C",
                laporan_bg3: "#D42B40"
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
