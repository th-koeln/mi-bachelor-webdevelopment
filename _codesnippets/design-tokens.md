---
titel:  Design Tokens
autor: cn
tags: Tools
teasertext: Wie benenne ich Custom Properties
---

Kleiner Vorschlag für die Benamung vom Custom Properties in der `variables.css`.


```
  --bfs: Basefont Size
  --half: calc(var(--bfs) / 2); // halbes geviert
  --quat: calc(var(--bfs) / 4); // viertel geviert
  --xxs: calc(var(--bfs) * 0.4);
  --xs: calc(var(--bfs) * 0.6);
  --s: calc(var(--bfs) * 0.8);
  --m: calc(var(--bfs) * 1);
  --l: calc(var(--bfs) * 1.2);
  --xl: calc(var(--bfs) * 1.5);
  --xxl: calc(var(--bfs) * 1.9);
  --xxxl: calc(var(--bfs) * 2.4);
  --xxxxl: calc(var(--bfs) * 3);

  --fluid-space-xs: calc(var(--xs) + 0.25vw);
  --fluid-space-s: calc(var(--s) + 0.5vw);
  --fluid-space-m: calc(var(--m) + 1vw);
  --fluid-space-l: calc(var(--l) + 1.5vw);
  --fluid-space-xl: calc(var(--xl) + 2vw);

  --max-width-content: calc(var(--m) * 50);
  --max-width-table: calc(var(--m) * 80);
  --max-width-card: calc(var(--m) * 20);
  --max-width-image-s: calc(var(--m) * 5);
  --max-width-image: calc(var(--m) * 10);
  --max-width-image-l: calc(var(--m) * 15);
  --max-width-navigation: calc(var(--m) * 20);
  --max-width-aside: calc(var(--m) * 20);

  --light: #ccc;
  --lighter: #eee;
  --lightest: #fff;
  --lighten: rgb(255 255 255 / 50%);
  --lighten-strong: rgb(255 255 255 / 80%);

  --dark: rgb(0 0 0 / 60%);
  --darker: rgb(0 0 0 / 80%);
  --darkest: rgb(0 0 0 / 100%);
  --darken: rgb(0 0 0 / 10%);
  --darken-strong: rgb(0 0 0 / 20%);
  --darken-light: rgb(0 0 0 / 5%);

  --color-text: var(--darker);
  --color-headline: var(--darkest);
  --color-accent: var(--mi-pink);
  --color-highlight: var(--mi-lila);
  --color-decoration: var(--dark);
  --color-background: var(--lighter);
  
  /* Schriftarten */
  --ff-normal: ibmplex, sans-serif;
  --ff-serif: ibmplex, serif;
  --ff-code: ibmplex, monospace;
  --ff-headline: ibmplex, monospace;
  --ff-icons: "MaterialIcons", serif;

  /* Schriftgewicht - Font weight */
  --fw-normal: 300;
  --fw-medium: 500;
  --fw-bold: 600;

  /* Zeilenabstand - Line height */
  --lh-normal: 140%;
  --lh-tight: 115%;
  --lh-semi-tight: 110%;
  --lh-loose: 150%;

  /* Transition */
  --tr-fast: 0.2s;
  --tr-slow: 0.6s;
  --tr-delay: 1.2s;

  /* Opacity */
  --op-low: 0.4;
  --op-medium: 0.6;

  /* Schatten */
  --shadow-l: 0 0 var(--xs) rgb(0 0 0 / 20%);
  --shadow-l-light: 0 0 var(--xs) rgb(0 0 0 / 5%);
  --shadow-xl: var(--half) var(--half) var(--m) rgb(0 0 0 / 30%);
  --shadow-xl-light: var(--half) var(--half) var(--m) rgb(0 0 0 / 10%);

  /* Rahmen */
  --border-width-s: 1px;
  --border-width-m: 3px;
  --border-width-l: 6px;
  --border-radius-s: 3px;
  --border-radius-m: 0.5ch;

  /* Z-Index */
  --z-level-front: 10;
  --z-level-middle: 5;
  --z-level-back: 0;
  ```