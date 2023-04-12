/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      fontFamily: {
          'main': ['Montserrat'],
          'logo': ['Caveat']
      },
      extend: {
          colors: {
              "header": "#577783",
              "background" : "#4583AA",
              "footer": "#1D2B34"
          },
          width: {
              "250px": 250,
          },
          height: {
              "76px": 76,
              "250px": 250,
              "screen-minus-header": 'calc(100vh - 76px)',
          },
          minHeight: {
              "screen-minus-header": 'calc(100vh - 76px)',
              "main-page": 'calc(100vh - 125px)',
          },
      },
    },
    plugins: [],
}

