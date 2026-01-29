/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php", // Quét mọi file php trong các thư mục con
    "./*.php", // Quét file php ở thư mục gốc
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
