/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './includes/*.php',
    './pages/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      colors: {
        navy: {
          DEFAULT: '#1B3A6B',
          dark: '#0D1F3C',
          light: '#2D5F9E',
          50: '#EBF0F8',
          100: '#C5D4EC',
        },
        gold: {
          DEFAULT: '#C9A84C',
          dark: '#A8853A',
          light: '#E4C97A',
          50: '#FBF6E7',
        },
      },
      borderRadius: {
        xl: '20px',
        '2xl': '28px',
        '3xl': '40px',
      },
      boxShadow: {
        navy: '0 4px 24px rgba(27, 58, 107, 0.25)',
        gold: '0 4px 24px rgba(201, 168, 76, 0.30)',
      },
    },
  },
  plugins: [],
};
