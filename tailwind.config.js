/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        'quicksand': ['Quicksand'],
        'montserrat': ['Montserrat'],
        'poppins': ['Poppins']
      },
      textColor:{
        'dark-orange': '#cf5225',
        'dark-blue': '#1D1F4E'
      },
      backgroundColor:{
        'pale-yellow': '#FAFAF2',
        'rb-light-orange': '#FB8D66',
        'rb-dark-orange': '#cf5225',
        'pale-orange': '#FB8D66',
        'primary-dark-blue': '#1D1F4E',
      },
      borderColor: {
        'rb-light-orange': '#FB8D66',
      },
      backgroundImage: {
        'jumbotron-home': "url('/img/illustrations/compressed/jumbotron-home.png');", 
        'hero-procounseling': "url('/img/illustrations/compressed/hero-professional-counseling.png');",
        'hero-sg': "url('/img/illustrations/compressed/hero-support-group.png');",
        'hero-peercounseling': "url('/img/illustrations/compressed/hero-peer-counseling.jpg');",
        'hero-login': "url('img/illustrations/login.png')"
      },
      animation: {
        'bounce-slow': 'bounce 3s infinite',
      },
      colors: {
        'dark-blue': '#1D1F4E',
        'dark-primary-orange': '#EB6536'
      },
      screens: {
        'xs': {'max': '640px'},
        'sm': {'min': '640px', 'max': '767px'},
        'md': {'min': '768px', 'max': '1023px'},
        'lg': {'min': '1024px'},
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/line-clamp')
  ],
  corePlugins: {
    preflight: false,
  }
}
