module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    // Use Bootstrap's breakpoints
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
      '2xl': '1400px',
    },
    extend: {},
    zIndex: {
      '0': 0,
     '10': 10,
     '20': 20,
     '30': 30,
     '40': 40,
     '50': 50,
     // Register Bootstrap's z-index usage
     '1000': 1000,
     '1020': 1020,
     '1030': 1030,
     '1040': 1040,
     '1050': 1050,
     '1060': 1060,
     '1070': 1070,
     '1080': 1080,
     'auto': 'auto',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}