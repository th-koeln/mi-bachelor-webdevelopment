---
titel: SASS Advanced Setup
tags:
  - CSS
  - SASS
---

Diese Aufgabe baut auf [SASS Basic Setup](../sass-01-basic-setup/) auf.

## Step 1: Verzeichnisstruktur aufbauen
Erzeugen Sie ein `dist` und ein `src` Verzeichnis in Ihrem Projektverzeichnis. Verschieben Sie Ihre html-Dateien, das `styles` Verzeichnis, das `images` Verzeichnis und `assets` Verzeichnis in den `src` Folder. Folgende Struktur sollte resultieren:

```
dist/
node_modules/
src/
  assets/
  images/
  styles/
  index.html
csscomb.josn
package-lock.json
package.json
README.md
```

## Step 2: SASS Struktur anlegen
Legen Sie im Verzeichnis `styles/scss/` zusätzlich zur `main.scss` folgende Dateien an:
```
_base.scss
_components.scss
_fonts.scss
_icons.scss
_reset.scss
_variables.scss
```

## Step 3: Partial Import
Importieren Sie die Partials in die `main.scss`.
```
@import 'reset';
@import 'fonts';
@import 'variables';
@import 'icons';
@import 'base';
@import 'components';
```

## Step 4: package.json für Developmentumgebung anpassen
Passen Sie Ihre script Einträge in der `package.json` dahingehend an, dass die Quelldateien jetzt im `src` Folder liegen:

```
  "dev:css": "node-sass --source-map true src/styles/scss src/styles/scss/main.scss -o src/styles/",
  "watch:sass": "node-sass --source-map true --watch src/styles/scss src/styles/scss/main.scss -o src/styles/",
  "watch": "npm-run-all --parallel dev:css watch:*",
```

## Step 5: package.json für Produktionumgebung anpassen
Ergänzen Sie Ihre script Einträge in der `package.json` um folgende Einträge:

```
  "//": " --- PROD --- ",
  "build:clean": "npm run clean && npm run mkdirs",
  "build:copy": "npm run copy",
  "build:css": "node-sass --include-path src/styles/scss src/styles/scss/main.scss dist/styles/main.css --output-style compressed",
  "build": "npm run build:clean && npm run build:copy && npm run build:css",
   "//": " --- GENERIC --- ",
  "clean": "rimraf dist",
  "mkdirs": "npx mkdirp -p dist/js && npx mkdirp -p dist/styles && npx mkdirp -p dist/assets && npx mkdirp -p dist/images",
  "copy:assets": "cp -r src/assets/* dist/assets/",
  "copy:images": "cp -r src/images/* dist/images/",
  "copy:html": "node helper/copy-html.js .html",
  "copy": "npm run copy:assets && npm run copy:html && npm run copy:images"
```
## Step 6: Copy-html Helperscript integrieren
Legen Sie das Verzeichnis `helper`im Projektverzeichnis an und legen Sie folgende Datei dort hinein: [copy-html.js](https://gist.github.com/cnoss/71c00c962a9784bb8523393f06f40026)

## Step 7: Testläufe
`npm run watch` sollte jetzt nach wie vor funktionieren und mit `npm run build` sollte eine Produktivversion im `dist` Verzeichnis erzeugt werden.


---

Weiter zum [SASS Refactoring](../sass-03-refactoring/) 
