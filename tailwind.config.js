/** @type {import('tailwindcss').Config} */
module.exports = {

  content: ["./**/*.{php,html,js}"],
  theme: {
    fontSize: {
      'sm': '13px',
      'base': '16px',
      'lg': '20px',
      'xl': '25px'
    },
    fontFamily: {
      'poppins': ['Poppins', 'san-serif']
    },
    screens: {
      //it use min-width
      'xsm': '370px',
      'sm': '576px',
      'md': '960px',
      'lg': '1440px',
    },
    extend: {
      colors: {
        'red': {
          '50': '#db5d5d',
        },
        'green': {
          '50': '#f0f9f1',
          '100': '#d9f2da',
          '200': '#b7e3bc',
          '300': '#87ce93',
          '400': '#64b975',
          '500': '#33964a',
          '600': '#237839',
          '700': '#1c602f',
          '800': '#184d27',
          '900': '#153f22',
          '950': '#0b2313',
        },
        'brown': {
          '50': '#f7f6ef',
          '100': '#ecebd5',
          '200': '#dad7ae',
          '300': '#c5bd7f',
          '400': '#b4a65b',
          '500': '#a4934e',
          '600': '#8d7841',
          '700': '#755f38',
          '800': '#604d33',
          '900': '#54432f',
          '950': '#302318',
        },
      }
    },
  },
  plugins: [],
}

