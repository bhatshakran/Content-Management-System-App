module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        pacifico: ["Pacifico"],
        raleway: ["Raleway"],
      },
    },
    debugScreens: {
      position: ["top", "right"],
    }
   
  },
  variants: {
    extend: {},
  },
  plugins: [require("tailwindcss-debug-screens")],
};;
