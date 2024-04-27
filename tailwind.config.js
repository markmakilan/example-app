/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#fafafa',
        'secondary': '#d4d4d8',
        'accent': '#18181b',
      },
    },
  },
  plugins: [],
}