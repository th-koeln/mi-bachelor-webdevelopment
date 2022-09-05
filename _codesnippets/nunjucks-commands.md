---
titel: Nunjucks Befehle
autor: cn
tags: Tools
teasertext: Befehle & Codesnippets für die Generated Content Aufgaben.
---

`.eleventy.js` Config Datei für unser Beispielprojekt.

```
const htmlmin = require('html-minifier');


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

  // Copy asset images
  eleventyConfig.addPassthroughCopy({ 'src/assets/images': 'assets/images' });

  // Copy Scripts
  eleventyConfig.addPassthroughCopy({ 'src/assets/scripts': 'assets/scripts' });
  eleventyConfig.addWatchTarget("./src/assets/scripts");

  eleventyConfig.addCollection("chapters", (collection) =>
    collection.getFilteredByGlob("./src/chapters/*.html").sort((a, b) => {

      if (a.fileSlug > b.fileSlug) return 1;
      else if (a.fileSlug < b.fileSlug) return -1;
      else return 0;
    })
  );

  eleventyConfig.addCollection("myCollectionName", function(collectionApi) {
    // get unsorted items
    return collectionApi.getAll();
  });

  if (process.env.ELEVENTY_ENV === 'production') {
    eleventyConfig.addTransform('htmlmin', (content, outputPath) => {
      if (outputPath.endsWith('.html')) {
        const minified = htmlmin.minify(content, {
          collapseInlineTagWhitespace: false,
          collapseWhitespace: true,
          removeComments: true,
          sortClassName: true,
          useShortDoctype: true,
        });

        return minified;
      }

      return content;
    });
  }

  return {
    dir: {
      includes: '_components',
      input: 'src',
      layouts: '_layouts',
      output: 'docs',
    },
    pathPrefix: "",
    markdownTemplateEngine: 'njk',
    htmlTemplateEngine: 'njk',
    templateFormats: [
      'md',
      'html',
      'njk'
    ],
  };
};

```

Loop für die Navigation

```
{% raw %}
    {%- for post in collections.chapters -%}
       <li class="navbar__item" data-js-navitem>
        <a href="{{ post.url }}">{{post.data.title}}</a></li>
      </li>
    {%- endfor -%}
{% endraw %}
```