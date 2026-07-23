---
titel:  ESLint Setup
autor: vs
tags: Tools
teasertext: Einrichten von ES Lint
---

Dies ist ein Guide zur Einrichtung von ESLint mit dem Airbnb Style Guide.

---

## ESLint installieren

Im aktuellen Workspace muss sich eine `package.json` befinden. Das benötigte Paket wird als Dev-Depencies eingefügt.

```bash
npm install eslint --save-dev
```

## ESLint konfigurieren

Zum Konfigurieren von ESLint wird der Konfigurationsassistent aufgerufen. In diesem Zuge wird eine Konfigurationsdatei `.eslintrc.js` erstellt, welche die Konfigurationsdatei des Airbnb Styleguides einbindet.
```bash
npx eslint --init
```

Bitte die Fragen des Assistenten wie folgt beantworten:
```
? How would you like to use ESLint? …
  To check syntax only
❯ To check syntax and find problems
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
ℹ The config that you've selected requires the following dependencies:

eslint, @eslint/js, globals
? Would you like to install them now? › No / [Yes]
```


```
? Which package manager do you want to use? … 
❯ npm
  yarn
  pnpm
  bun
```

```
? What format do you want your config file to be in? …
❯ JavaScript
  YAML
  JSON
```

In der `package.json` sollten die Dependencies nun definiert sein. Um ESLint auszuführen wird der Befehl `eslint` benutzt. Dazu müssen die entsprechende Script-Befehle in der `package-json` eingefügt werden:

```json
{
"scripts": {
    "js:lint": "eslint scripts/**/*.js",
    "js:lint:fix": "eslint scripts/**/*.js --fix",
    "test": "echo \"Error: no test specified\" && exit 1"
  },
}
```

`js:lint` führt den Linter für alle Dateien mit der Endung `js` innerhalb des `scripts` Ordners und deren Unterordnern aus.

`js:lint:fix` hat die gleiche Funktion, versucht aber zudem Probleme die der Linter findet zu beheben.

## ES Lint ausführen

Über das Terminal kann der Linter nun ausgeführt werden:

```bash
npm run js:lint
```

Oder Linten mit automatischen Fixen:

```bash
npm run js:lint:fix
```

## Linting-Hinweise in VSCode

In VS Code können Linting Hinweise direkt angezeigt werden. Dazu muss folgendes Plugin installiert werden:

https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint

Um Linter Fehler automatisch beim Speichern der Datei, welche man gerade editiert, zu beheben, bitte die Konfigurationsdatei des Editors um folgende Zeilen ergänzen.

```
"editor.codeActionsOnSave": {
    "source.fixAll.eslint": true
}
```




