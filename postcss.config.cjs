module.exports = {
  // Le decimos a PostCSS que use el parser SCSS
  syntax: 'postcss-scss',
  plugins: {
    tailwindcss: {},
    autoprefixer: {}
  }
}


// export default {
//   plugins: {
//     tailwindcss: {},
//     autoprefixer: {},
//   }
// }

// module.exports = {
//     plugins: [
//         require('tailwindcss'),
//         require('autoprefixer'),
//     ],
// }
