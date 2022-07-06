---
titel: Generated Code & Content via 11ty
tags: 
  - Generated Code
published: true
---

## Aufgabe 1: Integration von [11ty](https://www.11ty.dev/)

Integrieren Sie den [Static Page Generator 11ty](https://www.11ty.dev/) in das aktuelle Projekt, entweder auf Basis des [Javascript Assignments](https://classroom.github.com/a/3-mJ5IOS) oder auf Basis der [JS Lösung von Christian Noss](https://github.com/mi-classroom/js-fd2022-cnoss).

Folgende Schritte sind erforderlich:

### Step 1: Aufräumen

- Erzeugen Sie einen `assets` Folder und schieben Sie die Verzeichnisse `styles`, `scripts`, `templates` und `json` hier hinein. 
- Benennen Sie das Verzeichnis `templates` in `mustache-templates`um.
- Passen Sie Ihre Referenzen und ggf. die `package.json` an, damit das Projekt noch läuft.
- Entfernen Sie das `_data` Verzeichnis.

### Step 2: Sass Integration
Integrieren Sie Sass und bauen Sie Ihr Projekt angelehnt an die Anleitung zur [Integration von SASS](/mi-bachelor-webdevelopment/codesnippets/sass-integration/) um.

### Step 3: Stylelint Integration
Integrieren Sie Stylelint. Nutzen Sie dafür ggf. die Anleitung zur [Stylelint Integration](/mi-bachelor-webdevelopment/codesnippets/stylelint-integration/). Passen Sie Stylelint für die Nutzung mit [SASS](/mi-bachelor-webdevelopment/codesnippets/sass-integration#stylelint-erweitern) an.

### Step 3: 11ty & RImraf installieren
- installieren Sie [rimraf](https://www.npmjs.com/package/rimraf) mit dem npm Befehl `npm i -D rimraf`
- installieren Sie [11ty](https://www.11ty.dev/docs/getting-started/) mit dem npm Befehl `npm i -D @11ty/eleventy`
- Windows Nutzer sollten noch [cross-env](https://www.npmjs.com/package/cross-env) installieren: `npm i cross-env -D`

### Step 4: 11ty konfigurieren
- 11ty benötigt eine [Konfigurationsdatei](https://www.11ty.dev/docs/config/) im Wurzelverzeichnis `.eleventy.js`. Eine Beispielkonfiguration für die [11ty config](/mi-bachelor-webdevelopment/codesnippets/11ty-config/) finden Sie in den Code Snippets.

### Step 5: package.json anpassen
Ergänzen Sie den *scripts* Bereich in Ihrer `package.json` um einen *dev*, *build* und *serve* Befehl:

```

"dev": "npm-run-all --parallel watch serve:11ty",
"build": "npm-run-all del:docs del:assets dev:css build:site",
"build:site": "ELEVENTY_ENV=production npx eleventy",
"serve:11ty": "ELEVENTY_ENV=development npx eleventy --serve",
"del:docs": "rimraf ./docs",
"del:assets": "rimraf ./src/compiled-assets"

```

Windows Nutzer müssen ggf. vor den *ELEVENTY_ENV* Zuweisungen noch *cross-env* notieren:

```

"build:site": "cross-env ELEVENTY_ENV=production npx eleventy",
"serve:11ty": "cross-env ELEVENTY_ENV=development npx eleventy --serve",

```

Wir wollen später die `main.css` ins `compiled-assets` Verzeichnis generieren. Passen Sie dazu die `dev:css` und `build:css` wie folgt an:

```

"dev:css": "sass src/assets/styles/scss/main.scss:src/compiled-assets/main.css",
"build:css": "sass src/assets/styles/scss/main.scss:src/compiled-assets/main.css"

```

### Step 6: Reorganisation der Dateistruktur
- erzeugen Sie im Wurzelverzeichnis eine `src`  Verzeichnis und verschieben Sie die Verzeichnisse `assets`, `chapters` und `images` ins `src` Verzeichnis.
- legen Sie ein Verzeichnis `compiled-assets` im `src` Verzeichnis an.
- passen Sie die Pfade in den Script Aufrufen Ihrer `package.json` an
- benennen Sie das Mustache Template mit der Endung `.tpl` statt `.html` und passen Sie den Aufruf in der `main.js` entsprechend an.

### Step 7: Prüfung des Stands und kleinere Anpassungen
- wenn Sie jetzt den Devmode mit dem Befehl *npm run dev* starten sollten Sie die `theory` Datei unter folgender URL aufrufen können:

```

http://localhost:8080/chapters/theory/index.html

```

11ty liefert die Seite jetzt aus dem Verzeichnis `docs` aus. Daher müssen Sie die Referenzen auf das CSS und Javascript in Ihrem `src` Verzeichnis noch mal anpassen. Auch die Bildreferenzierungen müssen angepasst werden.

**Nehmen Sie keine Änderungen im `docs` Verzeichnis vor, denn die Dateien imd `docs` Verzeichnis werden bei jeder Änderung im `src` Verzeichnis neu generiert.**


## Aufgabe 2: Erzeugung eines Standard Templates
Erzeugen Sie einen Ordner `_templates` und legen Sie hierin eine Datei `default.11ty.js` an. Lagern Sie nun alles außer den Kindelementen des *body* Elements der `theory.html` in diese Datei aus:

```

exports.render = function (pageData) {
  const data = pageData;
  return `
  <!doctype html>
  <html lang="de">
    <head>
    …
    </head>
    <body>
      ${data.content}
    </body>
  </html>
  `;
}

```

Teilen Sie der `theory.html`nun via dem *Frontmatter* Seitenkopf mit, welches Template verwendet werden soll:

```

---
title: Theory 
layout: default.11ty.js
---

```

Wenn Sie 11ty nun via `npm run dev` laufen lassen sollte die `theory` Datei korrekt angezeigt werden. Jetzt wird sie jedoch aus dem *default*-Template und der *content* Datei zusammen gesetzt.

## Aufgabe 3: Title injizieren

Im Frontmatter Seitenkopf haben wir den Titel des Dokuments angegeben. Diesen injizieren wir jetzt im *default*-Template:

```

<title>Online Sports Communities // ${data.title}</title>

```

## Aufgabe 4: Footer auslagern

Legen Sie im `_templates` Verzeichnis ein Unterverzeichnis `partials` an und erzeugen Sie hier die Datei `footer.11ty.js`. Lagern Sie hier den Footer der `theory.html` aus.

```

exports.html = `
  <footer>
  …
  </footer>
`;

```

Akquirieren Sie den Footer via:

```

const footer = require('./partials/footer.11ty');

```

Binden Sie den Footer nun via Template String ein.

## Aufgabe 6: Header auslagern

Verfahren Sie mit dem Header nun ähnlich wie mit dem Footer.

## Aufgabe 7: Weiteren Content anlegen und Inhaltsverzeichnis erstellen

Legen Sie im Verzeichnis `chapters` weitere Dateien an, z.B. `10-ìntro.html`. Die führende Zahl hilft die Dateien später zu sortieren. Geben Sie der Datei ein Frontmatter und ein wenig Content:


```
---
title: Introduction
layout: default.11ty.js
---

Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Consequatur laborum, voluptatibus ullam iusto veniam alias 
ea quia illo fugiat dicta id vitae ut quam, repellendus 
aspernatur a officia? Quo, modi.

```

Legen Sie weitere Dateien nach ähnlichem Muster an.

Jetzt erweitern wir die `.eleventy.js` um eine *Collection*, die alle HTML-Dateien im `chapters` Verzeichnis bereit stellt:

```

eleventyConfig.addCollection('chapters', (collection) =>
  collection.getFilteredByGlob('./src/chapters/*.html').sort((a, b) => {

    if (a.fileSlug > b.fileSlug) return 1;
    else if (a.fileSlug < b.fileSlug) return -1;
    else return 0;
  })
);

```

Legen Sie nun eine `index.11ty.js` im `src` Verzeichnis an und erzeugen Sie ein Inhaltsverzeichnis:

```

exports.data = {
  layout: 'default.11ty.js',
  title: 'Home',
};

exports.render = (data) => {
  const items = data.collections.chapters.map((chapter) => `
      <li><a href="${chapter.url}">${chapter.data.title}</a></li>
    `);

  return `
    <h1>Übersicht</h1>
    <ul>
      ${items.join('')}
    </ul>
  `;
};

```

## Aufgabe 8: Deployment via GitHub Pages

Zum Deployment muss oftmals ein *pathPrefix* gesetzt werden, so auch beim Deployment via GitHub Pages. Tragen Sie in der `.eleventy.js` den Prefix ein:

````

  return {
    dir: {
      …
    },
    pathPrefix: "js-fd2022-cnoss",
    …
    templateFormats: [
      …
    ],
  };

```

Das pathPrefix ist das Unterverzeichnis, in dem die Site läuft. In meinem Beispiel ist die GitHub Page URL *https://mi-classroom.github.io/js-fd2022-cnoss/* und somit das pathPrefix *js-fd2022-cnoss*. Dieses muss nun vor alle URLs der Seite injiziert werden. Dafür nutzen wir den [url Filter](https://www.11ty.dev/docs/filters/url/) von 11ty. Hier ein Beispiel für das CSS.

```

<link rel="stylesheet" href="${this.url('/assets/main.css')}" />

```

Alternativ können die Ressourcen auch relativ verlinkt werden.

Jetzt kann die Seite via `npm run build` ausgespielt werden. Die Änderungen müssen jetzt commited und auf GitHub gepusht werden. Dann kann die Seite [via GitHub Pages veröffentlicht werden](https://docs.github.com/en/pages/getting-started-with-github-pages/configuring-a-publishing-source-for-your-github-pages-site).
