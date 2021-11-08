module.exports = {
  mode: 'jit',
  purge: [
			'./page-templates/**/*.php',
			'./template-parts/**/*.php',
			'./*.php',
			'./inc/**/*.php',
			'./inc/*.php',
			'./assets/src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
