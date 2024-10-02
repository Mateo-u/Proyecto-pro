/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.html',  // Ajusta la ruta según la ubicación de tus archivos HTML
    './**/*.html',
    './styles.css', // Asegúrate de incluir tu archivo CSS aquí
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

