module.exports = {
  context: 'src',
  entry: {
    styles: './styles/main.scss',
    scripts: './scripts/main.js'
  },
  devtool: 'cheap-module-eval-source-map',
  outputFolder: '../assets',
  publicFolder: 'assets',
  theme: process.env.THEME_NAME,
  proxyTarget: process.env.PROXY_TARGET,
  watch: [
    '../**/*.php'
  ]
}
