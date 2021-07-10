---
titel: ESLint Setup
tags:
 - Tooling
 - JavaScript
published: true
---

Das ist ein Guide, zur Einrichtung von ESLint mit dem Airbnb Style Guide.

---

## ESLint installieren

In dem Workspace muss sich eine `package.json` befinden. Das benötigte Paket wird als Dev-Depencies eingefügt.

`npm install eslint --save-dev`

## ESLint konfigurieren

Zum Konfigurieren von ESLint wird der Konfigurationsassistent aufgerufen. In diesem Zuge wird eine die Konfigurationsdatei `.eslintrc.js`, welche die Konfigurationsdatei des Airbnb Styleguides einbindet.
`npx eslint --init`

Bitte die Fragen wie folgt beantworten:
```
? How would you like to use ESLint? …
  To check syntax only
  To check syntax and find problems
❯ To check syntax, find problems, and enforce code style
```

```
? What type of modules does your project use? …
  JavaScript modules (import/export)
  CommonJS (require/exports)
❯ None of these
```

```
? Which framework does your project use? …
  React
  Vue.js
❯ None of these
```

```
Does your project use TypeScript? › [No] / Yes
```

```
? Where does your code run?
✔ Browser
  Node
```

```
? How would you like to define a style for your project? …
❯ Use a popular style guide
  Answer questions about your style
  Inspect your JavaScript file(s)
```

```
? Which style guide do you want to follow? …
❯ Airbnb: https://github.com/airbnb/javascript
  Standard: https://github.com/standard/standard
  Google: https://github.com/google/eslint-config-google
  XO: https://github.com/xojs/eslint-config-xo
```

```
? What format do you want your config file to be in? …
❯ JavaScript
  YAML
  JSON
```

In der `package.json` sollten die Dependencies drin stehen. Um StyleLint auszuführen nutzen wir den Befehl `eslint`. Dazu fügen wir entsprechende Script-Befehle in der `package-json` ein:

`package.json`
```json

{
    ...
    "scripts": {
        "js:lint": "eslint scripts/**/*.js",
        "js:lint:fix": "eslint scripts/**/*.js --fix",
        "test": "echo \"Error: no test specified\" && exit 1"
    },
    ...
}
```

## Konfigurieren

Damit StyleLint weiß wonach er Linten soll benötigen wir eine Konfigurations-Datei. Da gibt es mehrere zur Auswahl (siehe [StyleLint-Doku](https://stylelint.io/user-guide/configure)). In dieser Datei gibt es die Möglichkeit mit Plugins weitere Regeln hinzuzufügen, bereits bestehende Regelausprägungen zu erweitern oder Regeln mit eigenen werten zu besetzen. Für unser Setup nutzen wir das Order-Plugin, um die Reihenfolge der Properties bestimmen zu können und die Standard und Idiomatic Order Regelsätze, um vorgefertigte Regeln zu haben.

`.stylelintrc.json`
```json
{
    "plugin": "stylelint-order",
    "extends": [
        "stylelint-config-standard",
        "stylelint-config-idiomatic-order"
    ],
    "rules": {
        "indentation": 4
    }
}
```
Ich (der Autor dieser Aufgabe) bevorzuge eine Einrückung von 4 (und nicht 2) Spaces. Über die rules kann ich dieses Verhalten dem CSS-Linter mitteilen.

## Linten

Jetzt können wir über die Command-Line den Linter ausführen:

```bash
npm run lint
```

Oder Linten mit automatischen Fixen:

```bash
npm run lint:fix
```

### Linting-Hinweise in VSCode

Es gibt ein nettes VSCode Plugin, welches automatisch Hinweise für Linting Fehler gibt:

- [https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)

Wenn man möchte, dass VSCode beim Speichern automatisch der Linting-Fixer läuft, braucht man eine Settings-Datei:

`.vscode/settings.json`
```json
{
    "editor.codeActionsOnSave": {
        "source.fixAll.stylelint": true
    }
}
```
