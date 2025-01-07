import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#FFFEF0",
          100: "#FFFAC2",
          200: "#FFF299",
          300: "#FFE766", 
          400: "#FFDB33",
          500: "#FFCC00",
          600: "#FFB700",
          700: "#FF9F00",
          800: "#E68A00",
          900: "#B36B00",
        },
      },
      fontFamily: {
        sans: ['Share Tech', ...defaultTheme.fontFamily.sans],
        header: ['Archivo Black', 'sans-serif'],
      },
    },
  },
  
  plugins: [],
};
