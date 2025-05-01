module.exports = {
  darkMode: 'class',
  content: [
    './**/*.html',
    './js/**/*.js',
    "./src/**/*.twig",
    "./src/**/*.php",
    "./resources/**/*.{js,jsx,ts,tsx,vue}",
  ],
  theme: {
    extend: {
      colors: {
        "mainWhite": "#ffffff",
        "darkBlue": "#365F92",
        "tealBlue": "#358FAD",
        "grayish": "#787F84",
        "lightSteelBlue": "#95B3D7",
        "paleBlue": "#C5D9F1",
        "lavenderGray": "#D4D2E3",
        "lightBlue": "#f5fcff",
      },
      animation: {
        'endless': 'endless 20s linear infinite',
        'shine': 'shine 5s linear 500ms infinite',
        'float': 'float 2s ease-in-out infinite',
        'infinite-scroll': 'infinite-scroll 40s linear infinite',
      },
      keyframes: {
        'endless': {
          '0%': { transform: 'translateY(0)' },
          '100%': { transform: 'translateY(-245px)' }
        },
        'shine': {
          '0%': { top: '0', transform: 'translateY(-100%) scaleY(10)', opacity: '0' },
          '2%': { opacity: '.5' },
          '40%': { top: '100%', transform: 'translateY(0) scaleY(200)', opacity: '0' },
          '100%': { top: '100%', transform: 'translateY(0) scaleY(1)', opacity: '0' },
        },
        'float': {
          '0%': { transform: 'translateY(3%)' },
          '50%': { transform: 'translateY(-3%)' },
          '100%': { transform: 'translateY(3%)' }
        },
        'infinite-scroll': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        }
      },
      screens: {
        'xs': '400px',
        'sm': '640px',
        'md': '768px',
        'pcTab': '1000px',
        'lg': '1199px',
        'xl': '1500px',
        '2xl': '1750px',
        '3xl': '2000px'
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        'uncut-sans': ['Uncut Sans', 'sans-serif'],
      },
      fontSize: {
        xs: ['0.75rem', { lineHeight: '1.5' }],
        sm: ['0.875rem', { lineHeight: '1.5715' }],
        base: ['1rem', { lineHeight: '1.5', letterSpacing: '-0.01em' }],
        lg: ['1.125rem', { lineHeight: '1.5', letterSpacing: '-0.01em' }],
        xl: ['1.25rem', { lineHeight: '1.5', letterSpacing: '-0.01em' }],
        '2xl': ['1.5rem', { lineHeight: '1.415', letterSpacing: '-0.01em' }],
        '3xl': ['1.875rem', { lineHeight: '1.333', letterSpacing: '-0.01em' }],
        '4xl': ['2.25rem', { lineHeight: '1.277', letterSpacing: '-0.01em' }],
        '5xl': ['3rem', { lineHeight: '1.2', letterSpacing: '-0.01em' }],
        '6xl': ['3.75rem', { lineHeight: '1.166', letterSpacing: '-0.01em' }],
        '7xl': ['5rem', { lineHeight: '1', letterSpacing: '-0.01em' }],
      },

      lineHeight: {
        'small': '0.5',
        'short': '0.75',
        'normal': '1',
        'semi': '1.25',
        'medium': '1.5',
        'double': '2'
      },
      letterSpacing: {
        tighter: '-0.02em',
        tight: '-0.01em',
        normal: '0',
        wide: '0.01em',
        wider: '0.02em',
        widest: '0.4em',
      },
    },
    safelist: [
      '.textBreak',
      '.mobileBreak',
    ],
  },
  plugins: [
    // eslint-disable-next-line global-require
    require('@tailwindcss/forms'),
    require('daisyui'),
  ],
};


