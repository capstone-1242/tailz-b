/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './resources/**/*.{js,jsx,ts,tsx,vue}',
  ],
  theme: {
    extend: {
      colors: {
        'brand-blue': '#0F4C81',
        'brand-darkblue': '#0A2F4F',
        'brand-orange': '#FF6B35',
      },
    },
  },
  plugins: [],
} 