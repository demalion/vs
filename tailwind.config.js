module.exports = {
  purge: { content: ['./public/**/*.html', './resources/**/*.vue'] },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'first-color': '#7FD0DB',
        'first-color-lighter': '#C2F2F9',
        'second-color': '#E02135',
        'second-color-lighter': '#FA9696',
        // css variables color customization, see app.css file
        // 'primary-color': 'var(--primary-color)',
        // 'secondary-color': 'var(--secondary-color)'        
      },
      fontFamily: {
          'sans': ['Roboto', 'Helvetica', 'Arial', 'sans-serif'],
          'violet': ['Violet'],
          'vampiro': ['Vampiro'],
      },
      opacity: {
        '90': '0.9',      
      },
      borderRadius: {
        'card': '4%/3%'
      }
    },
   
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
