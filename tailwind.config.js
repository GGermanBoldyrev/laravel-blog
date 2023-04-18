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
              "footer": "#1D2B34",
              "button-hover": "#3b7091",
          },
          width: {
              "250px": 250,
              '1175px': 1175,
              '60px': 60,
              'welcome-text-2xl': 870,
          },
          height: {
              "76px": 76,
              "250px": 250,
              "screen-minus-header": 'calc(100vh - 76px)',
              "arrow-height": 42,
              '60px': 60
          },
          minHeight: {
              "screen-minus-header": 'calc(100vh - 76px)',
              "main-page": 'calc(100vh - 125px)',
              "1000px": 10000,
          },
          translate: {
              'minus-50%': '-50%',
          },
      },
    },
    plugins: [],
}

