const { fontFamily } = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
       fontFamily: {
        ...fontFamily,
        'open-sans': ['"Open Sans"', 'cursive']
      }
    },
  },
  plugins: [],
}
