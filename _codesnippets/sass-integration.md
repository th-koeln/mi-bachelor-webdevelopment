---
titel:  Integration von SASS
autor: cn
tags: Tools, SASS
teasertext: Wie erweitere ich meine Projektstruktur für die Nutzung von SASS?
---

[SASS](https://sass-lang.com/) ist eine Stylesheet-Sprache, die als CSS-Präprozessor mit Variablen, Schleifen und vielen anderen Funktionen, die Erstellung von CSS vereinfacht und die Pflege großer Stylesheets erleichtert. 

## Installation

Wir arbeiten hier mit Abhängigkeiten, die wir nicht alle in unserer Git-History haben wollen. Um dies zu verhinden sind `.gitignore` Dateien sehr wertvoll. Dort können Dateien und ganze Ordner ignoriert werden. [Hier ist auch eine Anleitung von uns.](../gitignore/)

### Pakete installieren

In dem Workspace muss sich eine `package.json` befinden. Alle benötigten NPM-Pakete weden als Dev-Depencies eingefügt (Befehl: `npm install -D <PACKETNAME>`):

- [npm-run-all](https://github.com/mysticatea/npm-run-all)
- [SASS](https://www.npmjs.com/package/sass)

### NPM Script konfigurieren

In der `package.json` sollten nun die Dependencies enthalten sein. Um SASS sinnvoll ausführen zu können, erweitern wir die *scripts* Sektion in unserer `package.json` Datei.

```json

{
  …
  "scripts": {
    …
    "dev:css": "sass styles/scss/main.scss:styles/main.css",
    "watch:sass": "sass --watch styles/scss styles/scss/main.scss:styles/main.css",
    "watch": "npm-run-all --parallel dev:css watch:*"
  },
  …
}
```

## Projektstruktur anpassen

Alle *CSS Dateien* sollten in einem `scss` Verzeichnis zusammen gefasst sein und mit dem Prefix `_` und dem Suffix `.scss` ausgestattet werden. Damit erkennt Sass sie als [Partials](https://sass-lang.com/guide#Partials). Zusätzlich wird eine *zentrale* SCSS Datei benötigt, welche die einzelnen *SCSS Dateien* importiert und somit zusammen fasst. Eine beispielhafte Verzeichnisstruktur könnte wie folgt aussehen:

```
…
assets/
  styles/
    scss/
      _base.scss
      _components.scss
      _fonts.scss
      _layout.scss
      _reset.scss
      _variables.scss
      main.scss
```

Die `main.scss`für obiges Beispiel sähe wie folgt aus:

```scss
@import 'reset';
@import 'variables';
@import 'fonts';
@import 'base';
@import 'layout';
@import 'components';

```

Hieraus generiert SASS mit Hilfe unserer npm Script Konfiguration eine *CSS Datei* mit dem Namen `main.css` und legt diese im *styles* Verzeichnis ab. Dazu nutzen wir folgenden npm Script Aufruf:

```
npm run dev:css
```

Nach jeder Änderung einer *SASS Datei* **muss** die `main.css` neu kompiliert werden. Damit wir dies beim Entwickeln nicht immer händisch machen müssen, nutzen wir folgenden npm Script Aufruf:

```
npm run watch
```

Damit wird, entsprechend unserer Konfiguration, das Verzeichnis `styles/scss` und die die Datei `styles/scss/main.scss` überwacht und bei Änderungen wird die `main.css` neu erzeugt.


## Referenzierung anpassen

Statt der einzelnen *CSS Dateien* referenzieren wir jetzt nur noch die `main.css` in unseren *HTML Dateien*. 

```html
<link rel="stylesheet" href="./styles/main.css" />
```

## Stylelint erweitern

Damit Stylelint auch *SASS Dateien* linten kann, sind einige zusätzliche Pakete und Konfigurationserweiterungen erforderlich. Folgende Pakete müssen installiert werden (Befehl: `npm install -D <PACKETNAME>`):
- [stylelint-scss](https://github.com/kristerkari/stylelint-scss)
- [stylelint-config-recommended-scss](https://www.npmjs.com/package/stylelint-config-recommended-scss)
- [stylelint-order](https://www.npmjs.com/package/stylelint-order)

Die Konfiguration via `.stylelintrc.json` muss wie folgt erweitert werden:

```json
{
  …

  "plugin":  [
    …
    "stylelint-scss"
  ],
  "extends": [
      …
      "stylelint-config-recommended-scss"
  ],
  …
}
```

Außerdem müssen unsere npm Scripts angepasst werden, denn jetzt sollen nur noch die *SASS Dateien* gelintet werden. Daher muss die Dateiendung von `.css`auf `.scss` angepasst werden:

```
  "lint": "stylelint styles/**/*.scss",
  "lint:fix": "stylelint styles/**/*.scss --fix",
```

## VS Code Konfiguration erweitern

Damit VSCode beim Speichern automatisch die SASS Files lintet sind folgende Anpassungen an der Settings Datei erforderlich:

`.vscode/settings.json`
```json
{
  …
  "stylelint.enable": true,
  "stylelint.validate": [
    "scss"
  ]
}
```
