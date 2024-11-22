const defaultConfig = require('@wordpress/scripts/config/webpack.config');

const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const CopyPlugin = require('copy-webpack-plugin');
const path = require('path');
const { globSync } = require('glob');

/**Process individual block stylesheets */
const blockStylesheets = () => {
	return globSync(`./src/scss/blocks/*.scss`).reduce((files, filepath) => {
		const name = path.parse(filepath).name;

		files[`css/blocks/${name}`] = path.resolve(
			process.cwd(),
			`src/scss/blocks/`,
			`${name}.scss`
		);

		return files;
	}, {});
};

module.exports = {
	...defaultConfig,
	...{
		entry: {
			...blockStylesheets(),
			'js/custom': path.resolve(process.cwd(), 'src/js', 'custom.js'),
			'js/page-home': path.resolve(
				process.cwd(),
				'src/js',
				'page-home.js'
			),
			'js/page-works': path.resolve(
				process.cwd(),
				'src/js',
				'page-works.js'
			),
			'js/page-walking': path.resolve(
				process.cwd(),
				'src/js',
				'page-walking.js'
			),
			'css/screen': path.resolve(
				process.cwd(),
				'src/scss',
				'screen.scss'
			),
			'css/editor-styles': path.resolve(
				process.cwd(),
				'src/scss/',
				'editor.scss'
			),
			'css/frontpage': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'frontpage.scss'
			),
			'css/works': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'works.scss'
			),
			'css/contact': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'contact.scss'
			),
			'css/walking': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'walking.scss'
			),
			'css/single': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'single.scss'
			),
			'css/404': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'404.scss'
			),
			'css/services': path.resolve(
				process.cwd(),
				'src/scss/pages/',
				'services.scss'
			),
		},
	},
	plugins: [
		...defaultConfig.plugins,
		new RemoveEmptyScriptsPlugin({
			stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
		}),

		new CopyPlugin({
			patterns: [
				{
					from: './src/fonts',
					to: './fonts',
				},
				{
					from: './src/images',
					to: './images',
				},
			],
		}),
	],
};
