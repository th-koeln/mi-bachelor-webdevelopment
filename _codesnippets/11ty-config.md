---
titel: 11ty config
autor: cn
tags: Tools
teasertext: 11ty Konfigurationsdatei für Generated Content Aufgaben.
---

`.eleventy.js` Config Datei für unser Beispielprojekt.

```
const clearRequireCache = () => { 
  Object.keys(require.cache).forEach(function (key) {
    if (require.cache[key].filename.match(/11ty\.js/)) {
      delete require.cache[key];
    }
  });  
}

module.exports = function (eleventyConfig) {
  eleventyConfig.setUseGitIgnore(false);

  // Watch our compiled assets for changes
  eleventyConfig.addWatchTarget('./src/compiled-assets/main.css');
  eleventyConfig.addWatchTarget('./src/assets/scripts/main.js');

  // Copy src/compiled-assets to /assets
  eleventyConfig.addPassthroughCopy({ 'src/compiled-assets': 'assets' });

  // Copy all images
  eleventyConfig.addPassthroughCopy('src/images');


  // Copy all fonts
  eleventyConfig.addPassthroughCopy({ 'src/assets/fonts': 'assets/fonts' });

  // Copy assets
  eleventyConfig.addPassthroughCopy({ 'src/assets/images': 'assets/images' });
  eleventyConfig.addPassthroughCopy({ 'src/assets/json': 'assets/json' });
  eleventyConfig.addPassthroughCopy({ 'src/assets/mustache-templates': 'assets/mustache-templates' });


  // Copy Scripts
  eleventyConfig.addPassthroughCopy({ 'src/assets/scripts': 'assets/scripts' });
  eleventyConfig.addWatchTarget("./src/assets/scripts");

  /* Functions
  ########################################################################## */

  eleventyConfig.addFilter("maskEntities", (str) => {
    return str.replace(/"/g, '&#34;');
  });

  /* Maintenance
  ########################################################################## */
  
  eleventyConfig.on('eleventy.beforeWatch', async (changedFiles) => {
    clearRequireCache();
  });

  return {
    dir: {
      includes: '_components',
      input: 'src',
      layouts: '_templates',
      output: 'docs',
    },
    pathPrefix: "",
    markdownTemplateEngine: '11ty.js',
    htmlTemplateEngine: '11ty.js',
    templateFormats: [
      'md',
      'html',
      'njk',
      '11ty.js'
    ],
  };
};


```
