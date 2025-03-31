/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
    "./safelist.txt"
  ],
  theme: {
    extend: {
      colors: {
        'brand-darkblue': '#1E2B79',
        'brand-blue': '#2B3FB8',
        'brand-sky': '#6FDBFC',
        'brand-cream': '#F3F2EC',
        'brand-orange': '#FEA91D',
        'brand-yellow': '#FCD41D',
        'brand-lime': '#C0E333',
        'brand-purple': '#C181FD',
        'brand-pink': '#FF8ECC',
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      fontSize: {
        'h1': ['45px', { lineHeight: '100%' }],
        'h2': ['37px', { lineHeight: '100%' }],
        'h3': ['30px', { lineHeight: '100%' }],
        'h4': ['24px', { lineHeight: '100%' }],
        'h5': ['20px', { lineHeight: '100%' }],
        'h6': ['16px', { lineHeight: '100%' }],
        'base': ['16px', { lineHeight: '1.5' }],
        'sm': ['14px', { lineHeight: '1.5' }],
        'xs': ['12px', { lineHeight: '1.5' }],
      },
    },
  },
  plugins: [],
} 