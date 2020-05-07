---
titel: SASS Basic Setup
tags: CSS, SASS
---

Bitte *forken* Sie folgenden [SASS Startercode](https://github.com/cnoss/sass-startercode) und klonen dann das Repo auf Ihren lokalen Rechner. 

## Step 1: NPM initialisieren und Pakete installieren
Initialisieren Sie npm via `npm init` und installieren Sie die folgenden Pakete jeweils mit der `--save-dev` Option:
- [node-sass](https://www.npmjs.com/package/node-sass)
- [npm-run-all](https://www.npmjs.com/package/npm-run-all)
- [rimraf](https://www.npmjs.com/package/rimraf)

## Step 2: SASS Datei zum Testen anlegen
Legen Sie im Verzeichnis `styles/` ein neues Verzeichnis `scss` an und erzeugen dort die Datei `main.scss`mit folgendem Inhalt an:

```
$darkest: hsla(0,0,0,100);
$lightest: hsla(0,0,100,100);

body{
  background-color: $darkest;
  color: $lightest;
}
```

## Step 3: package.json anpassen
Ergänzen Sie Ihre `package.json` in der Sektion `scripts` um die folgenden Einträge:

```
"dev:css": "node-sass --source-map true styles/scss/main.scss -o styles/",
"watch:sass": "node-sass --source-map true --watch styles/scss/main.scss -o styles/",
"watch": "npm-run-all --parallel dev:css watch:*"
```

## Step 4: Testlauf
Starten Sie im Terminal das npm script via `npm run watch`. Jetzt sollte im Verzeichnis `styles` eine Datei `main.css` mit folgendem Inhalt erscheinen:

```
body {
  background-color: rgba(0, 0, 0, 0);
  color: rgba(255, 255, 255, 0); }

/*# sourceMappingURL=main.css.map */
```

## Step 5: Referenzierung main.css
Passen Sie die Referenzierung zur CSS Datei in der `index.html` an, so dass jetzt nur noch die `main.css` referenziert wird:

```
<link rel="stylesheet" href="./styles/main.css">
```

---

Weiter zum [SASS Advanced Setup](../sass-02-advanced-setup/) 