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

        },
      },
      fontFamily:{
        body : [],
      },
    },
    plugins: [require('daisyui')],
  }
