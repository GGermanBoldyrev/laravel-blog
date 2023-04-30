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
              "footer": "#403F4C",
              "button-hover": "#3b7091",
              "chat": "#5c7d8a",
              "header-hover": "#496571",
          },
          height: {
              "screen-minus-header": 'calc(100vh - 76px)',
          },
          minHeight: {
              "screen-minus-header": 'calc(100vh - 76px)',
              "main-page": 'calc(100vh - 125px)',
          },
          translate: {
              'minus-50%': '-50%',
          },
      },
    },
    plugins: [
        require('tailwind-scrollbar-hide')
    ],
}

