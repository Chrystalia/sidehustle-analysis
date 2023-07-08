/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
        'cBlue': '#002559',
        'cYellow': '#F2AE29',
        'cSoftBlue' : '#698FA4',
        'white':'#FFFFFF'
    }
  },
  plugins: [],
}

