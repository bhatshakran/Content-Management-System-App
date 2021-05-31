module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    debugScreens: {
      position: ["top", "right"],
    },
    extend: {
      fontFamily: {
        pacifico: ["Pacifico"],
        raleway: ["Raleway"],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require("tailwindcss-debug-screens")],
};;
