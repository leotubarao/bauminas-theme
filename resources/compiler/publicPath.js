const { theme } = require('./config');

module.exports = (folder, prefix = '') => {
  return `${prefix}/wp-content/themes/${theme}/${folder}/`;
}
