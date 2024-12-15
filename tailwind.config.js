/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./docs/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'ubuntu-light': ['Ubuntu', 'sans-serif'], // Adding Ubuntu Light font
      },
      fontWeight: {
        light: 300, // Mapping a custom 'light' font weight
      },
    },
  },
  plugins: [],
}
