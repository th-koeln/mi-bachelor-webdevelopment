---
titel: Prüfung // Coding Challenge
kuerzel: fd
verantwortlich: cn
typ: fd
pflicht: false
termine: 2024-09-26 10:00
empfohlene-voraussetzungen: 
published: true
dauer: 240
raum: 3.216
info: 
---


## Bewertung & Niveaustufen

Die Bewertung erfolgt entlang der folgenden Niveaustufen:

### Beste Lösung
- Features im Wert von 40 Storypoints sind vollständig umgesetzt und funktionieren
- die Änderungen für die Features sind in der Commit Historie ersichtlich und verständlich erklärt
- alle Features sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In ein sehr gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat 
- die Änderungen wurden im Sinne der Projektstruktur in den passenden Dateien gemacht
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von Nesting & Custom Properties, robustes Javascript)

### Gute Lösung
- Features im Wert von 30 Storypoints sind vollständig umgesetzt und funktionieren
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- die Änderungen wurden im Sinne der Projektstruktur in den passenden Dateien gemacht
- der erzeugte Code zeigt, dass der Verfasser\*In ein gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von Nesting & Custom Properties, robustes Javascript)

### Passable Lösung
- Features im Wert von 20 Storypoints sind vollständig umgesetzt und funktionieren mit kleinen Ausnahmen
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In ein grundlegendes Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Akzeptable Lösung
- Features im Wert von 15 Storypoints sind vollständig umgesetzt und funktionieren überwiegend
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die Änderungen sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In die zugrunde liegenden Technologien und Konzepte in wesentlichen Teilen verstanden hat


## Hinweise zur Prüfung

Bitte beachten Sie folgende Punkte:

1. Lesen Sie die Aufgaben gründlich durch. Nicht nur kurz überfliegen, dann drauf los hacken und nachher feststellen, dass die Aufgabe ganz anders gemeint war oder gar schon einen Teil der Lösung enthielt ;)
2. Mergen Sie alle Änderungen in den *main*-Branch, denn nur den schauen wir uns an.
3. Machen Sie einen Commit pro Aufgabe. Wenn es nicht anders geht, können es auch mehrere Commits pro Aufgabe sein, aber am Besten nur einer. Die ID der Aufgabe gehört in die Commit Message.
5. Beachten Sie die Zeitschätzungen bei den Aufgaben. Diese geben Ihnen auch ein Hinweis auf die Komplexität der Aufgabe.
7. Nehmen Sie sich Zeit um die Verzeichnisstruktur und bereits gegebenen Code zu erfassen.
9. Nutzen Sie so gut es geht die bereits definierten CSS Custom Properties (variables.css).
10. Achten Sie darauf, dass der finale Code valide ist. Nutzen Sie also den [W3C Validator](https://validator.w3.org/nu/#textarea). Und achten Sie auch darauf, dass Stylelint möglichst wenig bis keine Fehler ausgibt.

## Eigenständigkeit der Leistung

Wir möchten sicherstellen, dass Sie die Prüfung bestmöglich absolvieren können, daher möchten wir einige wichtige Regeln und Richtlinien hervorheben:

1. Eigenständige Leistung
Die Coding-Prüfung erfordert, dass Sie die Features eigenständig umsetzen. Externe Hilfe von Personen in Echtzeit ist nicht gestattet. Wir legen großen Wert darauf, Ihre individuellen Fähigkeiten und Ihr Wissen zu bewerten.

2. Externe Quellen und KI-gestützte Tools
Sie dürfen externe Quellen wie Online-Dokumentationen, externe Libraries, Foren und Bücher sowie KI-gestützte Tools nutzen, um Informationen und Lösungsansätze zu finden. Wir ermutigen Sie, diese Ressourcen effektiv zu nutzen, um Ihre Lösungen zu verbessern.

3. Kennzeichnung von fremdem Code
Falls Sie Teile eines Codes von externen Quellen übernehmen, seien Sie transparent und kennzeichnen Sie diese Stellen eindeutig. Dies dient der Transparenz und ermöglicht es uns, Ihre Leistung fair zu bewerten. In der Regel erkennen wir fremden Code sehr schnell.

4. Kommunikation mit anderen Teilnehmern
Die Kommunikation mit anderen Teilnehmern während der Prüfung ist nicht gestattet. Dies schließt jegliche Form der Zusammenarbeit bei der Lösung der Features aus.

Wir vertrauen darauf, dass Sie diese Regeln respektieren und die Prüfung in Übereinstimmung mit den genannten Richtlinien absolvieren. Wir wünschen Ihnen viel Erfolg und hoffen, dass Sie Ihr Wissen und Ihre Fähigkeiten optimal präsentieren können.

Bei Fragen oder Unklarheiten stehen wir Ihnen gerne zur Verfügung.

## Support und Fixes

### Windows Fix
Hier bauen wir die Buildchain aus und verzichten auf *linghtningcss*. Damit ist das CSS nicht ganz so kompatibel mit einiges älteren Browsern. Aber das sollte und für die Prüfung nicht stören. Folgende Änderungen sind erforderlich.

Anpassung der package.json:

```
{
  "name": "fd-exam-2024",
  "version": "1.0.0",
  "description": "Startercode for Frontend Development exam",
  "main": "index.js",
  "scripts": {
    "server": "npx light-server -s . -w \"./**/**\"",
    "lint": "stylelint assets/styles/**/*.css",
    "lint:fix": "stylelint assets/styles/**/*.css --fix",
    "dev": "npm-run-all --parallel server lint"
  },
  "repository": {
    "type": "git",
    "url": "https://github.com/mi-classroom/fd-html-und-css-cnoss"
  },
  "author": "Christian Noss",
  "license": "ISC",
  "devDependencies": {
    "light-server": "^2.9.1",
    "npm-run-all": "^4.1.5",
    "onchange": "^7.1.0",
    "recursive-copy-cli": "^1.0.20",
    "stylelint": "^16.4.0",
    "stylelint-config-idiomatic-order": "^10.0.0",
    "stylelint-config-standard": "^36.0.0",
    "stylelint-order": "^6.0.4"
  }
}
```

Anpassung der Pfade zum CSS in folgenden Pfad:

```
/assets/styles/_combined-styles.css
```