---
titel:  Stylelint Integration
autor: fg
tags: Tools
teasertext: Wie bekomme ich Stylelint ans laufen?
---

Das ist ein Guide, um den Linter für CSS (hier [StyleLint](https://stylelint.io/)) ans laufen zu kriegen.

---

## Prenote: Gitignore

Wir arbeiten ab jetzt mit Abhängigkeiten, die wir nicht alle in unserer Git-History haben wollen. Um dies zu verhinden sind `.gitignore` Dateien sehr wertvoll. Dort können Dateien und ganze Ordner ignoriert werden. [Hier ist auch eine Anleitung von uns.](../gitignore/)

## Abhängigkeiten klären

In dem Workspace muss sich eine `package.json` befinden. Alle benötigten NPM-Pakete weden als Dev-Depencies eingefügt (Befehl: `npm install -D <PACKETNAME>`):

- [stylelint](https://stylelint.io/)
- [stylelint-order](https://github.com/hudochenkov/stylelint-order)
- [stylelint-config-standard](https://github.com/stylelint/stylelint-config-standard)
- [stylelint-config-idiomatic-order](https://github.com/ream88/stylelint-config-idiomatic-order)

In der `package.json` sollten die Dependencies drin stehen. Um StyleLint auszuführen nutzen wir den Befehl `stylelint`. Dazu fügen wir einen eigenen Script-Befehl ein:

`package.json`
```json

{
    "name": "webdev-fd",
    "version": "1.0.0",
    "description": "Eine schöne Beschreibung für das gesamte Projekt sollte sich hier befinden.",
    "main": "index.js",
    "scripts": {
        "lint": "stylelint styles/**/*.css",
        "lint:fix": "stylelint styles/**/*.css --fix",
        "test": "echo \"Error: no test specified\" && exit 1"
    },
    "devDependencies": {
        "stylelint": "^15.9.0",
        "stylelint-config-idiomatic-order": "^9.0.0",
        "stylelint-config-standard": "^33.0.0",
        "stylelint-order": "^6.0.3"
    }
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
    ]
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
