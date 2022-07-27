/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
  darkMode: 'class',
  content: [
    "./index.php",
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        head: [ 'Roboto', ...defaultTheme.fontFamily.sans ],
        lead: "'Poppins', sans-serif",
      },
      backgroundImage: {
        'first-hero-image': "url('/images/author-bg.png')",
        'second-hero-image': "url('/images/book-bg.png')",
        'first-hero-image-dark': "url('/images/author-bg-dark.png')",
        'second-hero-image-dark': "url('/images/book-bg-dark.png')"
      },
      dropShadow: {
        '2xl': '0px 8px 5px rgba(0, 0, 0, 1)',
        '4xl': '15px 15px 30px rgb(0, 0, 0)',
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        'gamboge': {
          DEFAULT: '#e9a022',
          '50': '#fefaf4', 
          '100': '#fdf6e9', 
          '200': '#fae7c8', 
          '300': '#f6d9a7', 
          '400': '#f0bd64', 
          '500': '#e9a022', 
          '600': '#d2901f', 
          '700': '#af781a', 
          '800': '#8c6014', 
          '900': '#724e11'
        },
        'robins-egg-blue': {
          DEFAULT: '#07e5f0',
          '50': '#f3fefe', 
          '100': '#e6fcfe', 
          '200': '#c1f9fb', 
          '300': '#9cf5f9', 
          '400': '#51edf5', 
          '500': '#07e5f0', 
          '600': '#06ced8', 
          '700': '#05acb4', 
          '800': '#048990', 
          '900': '#037076'
        },
        'minsk': {
          DEFAULT: '#3a3080',
          '50': '#f5f5f9', 
          '100': '#ebeaf2', 
          '200': '#cecbdf', 
          '300': '#b0accc', 
          '400': '#756ea6', 
          '500': '#3a3080', 
          '600': '#342b73', 
          '700': '#2c2460', 
          '800': '#231d4d', 
          '900': '#1c183f'
        },
      },
      screens: {
        'sm' : { 'max' : '425px' },
        'md' : [
          { 'min' : '768px', 'max' : '990px' },
          { 'max' : '768px'}
        ],
        'lg' : { 'max' : '1024px' }
      },
      keyframes: {
        slowShake: {
          '0%, 100%': { transform: 'rotate(0deg)' },
          '20%, 90%': { transform: 'rotate(4deg)' },
          '60%': { transform: 'rotate(7deg)' }
        },
      },
      animation: {
        'shake': 'slowShake 2s linear infinite',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
  ],
});