/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    screens: {
        sm: "480px",
        // md: "1024px",
        lg: "1224px",
        xl: "1440px"
      },
      extend: {
        colors:{
            fpiGreen: '#1E8449',
            footerGreen: '#145A32',
            veryLightGray: 'hsl(0, 0%, 98%)',
            darkGrayishBlue: 'hsl(227, 12%, 61%)',
            ashWhite: '#E5E7E9',
            articleColor: 'hsl(204, 51%, 95%)',
            myGold: '#F1C40F ',

        }
      },
      container:{
        center: true,
        padding:{
          // md:'2rem'
        }
      }
  },
  plugins: [],
}

