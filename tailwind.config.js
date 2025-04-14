/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./resources/**/*.{js,jsx,ts,tsx,vue}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.css",
  ],
  theme: {
    extend: {
      colors: {
        darkblue: "#1e2b79",
        blue: "#2b3fb8",
        sky: "#6fdbfc",
        cream: "#f3f2ec",
        red: "#ff6a6a",
        orange: "#fea91d",
        yellow: "#fcd41d",
        lime: "#c0e333",
        purple: "#c181fd",
        pink: "#ff8ecc",
        white: "#ffffff",
        darkbrown: "#47423b",
        brown: "#615849",
        lightbrown: "#837660",
      },
    },
  },
  plugins: [],
};
