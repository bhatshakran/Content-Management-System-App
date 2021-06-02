module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        pacifico: ["Pacifico-Regular"],
        league: ["LeagueSpartan-Bold"],
        sofia: ["Sofia-Regular"],
        raleway: ["Raleway"],
        ralewayXB: ["Raleway-ExtraBold"],
        ralewaySB: ["Raleway-SemiBold"],
      },
    },
    debugScreens: {
      position: ["top", "right"],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require("tailwindcss-debug-screens")],
};;
