---
titel: Prüfung // Coding Challenge
kuerzel: fd
verantwortlich: cn
typ: fd
pflicht: false
termine: 2023-09-21 10:00
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
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von SCSS & Custom Properties, robustes Javascript)

### Gute Lösung
- Features im Wert von 30 Storypoints sind vollständig umgesetzt und funktionieren
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- die Änderungen wurden im Sinne der Projektstruktur in den passenden Dateien gemacht
- der erzeugte Code zeigt, dass der Verfasser\*In ein gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von SCSS & Custom Properties, robustes Javascript)

### Passable Lösung
- Features im Wert von 25 Storypoints sind vollständig umgesetzt und funktionieren mir kleinen Ausnahmen
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In ein grundlegendes Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Akzeptable Lösung
- Features im Wert von 20 Storypoints sind vollständig umgesetzt und funktionieren überwiegend
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die Änderungen sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In die zugrunde liegenden Technologien und Konzepte in wesentlichen Teilen verstanden hat


## Hinweise zur Prüfung


Bitte beachten Sie folgende Punkte:

1. Lesen Sie die Aufgaben gründlich durch. Nicht nur kurz überfliegen, dann drauf los hacken und nachher feststellen, dass die Aufgabe ganz anders gemeint war oder gar schon einen Teil der Lösung enthielt ;)

2. Mergen Sie alle Änderungen in den *Main*-Branch, denn nur den schauen wir uns an.

3. Machen Sie einen Commit pro Aufgabe. Wenn es nicht anders geht, können es auch mehrere Commits pro Aufgabe sein, aber am Besten nur einer. Die ID der Aufgabe gehört in die Commit Message!

4. Wenn Sie Fragen haben, schreiben Sie diese in den Chat, wir gehen dann mit Ihnen in einen Breakout Room.

5. Beachten Sie die Zeitschätzungen bei den Aufgaben. Diese geben Ihnen auch ein Hinweis auf die Komplexität der Aufgabe.

6. Machen Sie KEINE Änderungen in Dateien unterhalb des **_site** Folders.

7. Nehmen Sie sich Zeit um die Verzeichnisstruktur und bereits gegebenen Code zu erfassen.

8. In der Regel sind nur Änderungen in den Layouts (_layouts Folder), Includes (_includes-Folder) oder in den Style und Script Files (alle unterhalb des asset-Folders) nötig.

9. Nutzen Sie so gut es geht die bereits definierten CSS Custom Properties (variables.css).

10. Achten Sie darauf, dass der finale Code (_sites Folder) valide ist. Nutzen Sie also den [W3C Validator](https://validator.w3.org/nu/#textarea). Und achten Sie auch darauf, dass Stylelint möglichst wenig Fehler ausgibt.

## Eigenständigkeit der Leistung

Wir möchten sicherstellen, dass Sie die Prüfung bestmöglich absolvieren können, daher möchten wir einige wichtige Regeln und Richtlinien hervorheben:

1. Eigenständige Leistung
Die Coding-Prüfung erfordert, dass Sie die Features eigenständig umsetzen. Externe Hilfe von Personen in Echtzeit ist nicht gestattet. Wir legen großen Wert darauf, Ihre individuellen Fähigkeiten und Ihr Wissen zu bewerten.

2. Externe Quellen und KI-gestützte Tools
Sie dürfen externe Quellen wie Online-Dokumentationen, Foren und Bücher sowie KI-gestützte Tools nutzen, um Informationen und Lösungsansätze zu finden. Wir ermutigen Sie, diese Ressourcen effektiv zu nutzen, um Ihre Lösungen zu verbessern.

3. Kennzeichnung von fremdem Code
Falls Sie Teile eines Codes von externen Quellen übernehmen, seien Sie transparent und kennzeichnen Sie diese Stellen eindeutig. Dies dient der Transparenz und ermöglicht es uns, Ihre Leistung fair zu bewerten.

4. Kommunikation mit anderen Teilnehmern
Die Kommunikation mit anderen Teilnehmern während der Prüfung ist nicht gestattet. Dies schließt jegliche Form der Zusammenarbeit bei der Lösung der Features aus.

Wir vertrauen darauf, dass Sie diese Regeln respektieren und die Prüfung in Übereinstimmung mit den genannten Richtlinien absolvieren. Wir wünschen Ihnen viel Erfolg und hoffen, dass Sie Ihr Wissen und Ihre Fähigkeiten optimal präsentieren können.

Bei Fragen oder Unklarheiten stehen wir Ihnen gerne zur Verfügung.


## Material

- [Mockups & Screenshots](https://th-koeln.sciebo.de/s/8McH0qe8usRfgLo)
- [Screenmovie](https://www.youtube.com/watch?v=o5Uzswz1xsU&feature=youtu.be)

---

## F1: Bilder der Keynote Speaker

Die Informationen der [Keynote Speaker](127.0.0.1:4000/freiheit-und-gleichheit-in-der-bildungsgeschichte/keynote-speaker/) sollen um das jeweile Bild ergänzt werden. Auf das jeweilige Bild können Sie mit folgender Syntax zugreifen:

```
  <img src="{{speaker.image | relative_url }}" alt="{{speaker.name}}">
```

Das HTML ändern Sie bitte in der Datei `_includes/single-speaker.html`. Das CSS in der `speaker.css`.

- Dauer: 20min
- Storypoints: 4

**CSS, HTML**

## F2: Tabelle für die Preise erstellen

Bislang sind die Preise in einer Liste hinterlegt. Nun sollen diese in eine Tabelle überführt werden. Das Design finden Sie in den Mockups & Screenshots. Die Liste ist unter `content/registrierung.html` zu finden. Versuchen Sie möglichst nach an das vorgegebene Design zu kommen.

- Dauer: 20min
- Storypoints: 3

**CSS, HTML**


## F3: Registrierungsformular integrieren

Der Link zum externen Registrierungsformular in der Datei `content/registrierung.html` soll entfernt werden. Statt dessen soll unterhalb der Preistabelle ein Registrierungsformular integriert werden. Hier muss nur die Abbildung im Frontend gelöst werden. Das Design finden Sie in den Mockups & Screenshots. Implementieren Sie hier auch die Reaktionsfähigkeit des Formulars.

- Dauer: 45min
- Storypoints: 8

**HTML & CSS**

## F4: Erweiteres Registrierungsformular

Wenn beim Feld **Status** die Option **Student:in** ausgewählt wird, muss ein zusätzliches Feld angezeigt werden, über dass ein Foto des Studierendenausweises hochgeladen werden kann. Implementieren Sie diese Funktion. 

Eine entsprechende leere Funktion mit dem Namen **observeRegistrationForm** ist bereits in der `main.js` angelegt.

Das Design finden Sie in den Mockups & Screenshots. Versuchen Sie möglichst nach an das vorgegebene Design zu kommen.

- Dauer: 25min
- Storypoints: 4

**HTML, CSS & Javascript**

## F5: Darstellungsfehler im Footer

Bei größeren Viewports gibt es einen Fehler, wenn man ganz nach unten scrollt. Der Content überdeckt dann den Footer (siehe Mockups & Screenshots). Beheben Sie diesen Fehler.

- Dauer: 10min
- Storypoints: 1

**CSS**

## F6: Schriften anpassen

Für die Headlines und die meisten kurzen Texte soll nun statt der **Atkinson** die **D-DIN** Schrift verwendet werden. Die Schrift ist bereits in der `fonts.css` eingebunden und muss nur in der `variables.css`ausgetauscht werden.

Für Mengentexte soll die **Georgia** oder eine andere Serifenschrift (aber stets eine Systemschrift) genutzt werden. Überprüfen Sie Ihre Implementierung anhand der Mockups.

- Dauer: 15min
- Storypoints: 3

**CSS**

## F7: Integration von Stylelint

Integrieren Sie *stylelint* via `package.json` in Ihre Prozesskette. Folgende Funktionen sollten integriert werden:

```
`npm run lint:css` startet stylelint.

`npm run lint:css:fix` startet stylelint und korrigiert die Fehler, sofern möglich.

```

Achten Sie darauf, dass Ihre finale Abgabe so gut wie möglich gelintet ist.

**@container Regel:**
Diese CSS Regel ist relativ neu und wird von Stylelint moniert. Daher sind hier keine Optimierungen erforderlich.

- Dauer: 15min
- Storypoints: 2

**Buildchain**

## F8: Headerbild integrieren

Im Header soll ein Hintergrundbild integriert werden. Dieses finden Sie unter `assets/images/header-konferenz.webp`. Das Design finden Sie in den Mockups & Screenshots. Versuchen Sie möglichst nach an das vorgegebene Design zu kommen.

Schauen Sie sich auch den Screenmovie an, um das Verhalten bei Änderung der Viewportgröße entsprechend implementieren zu können.

Kleiner Tipp: `background-blend-mode: multiply` liefert den passen Blendmode, so dass nur die dunklen Anteile des Bildes angezeigt werden.

Den Header finden Sie unter `_includes/header.html`.

- Dauer: 45min
- Storypoints: 8

**HTML & CSS**

## F9: Styling Search Bar 

Die Seite soll mit einer Suche nach Vorträgen ausgestattet werden. Eine Suchleiste ist bereits vorhanden. Diese gilt es nun entsprechend der Vorlage via CSS zu stylen. Legen Sie bitte unter `assets/styles/components/` eine neue CSS Datei dafür an. 

Das Design finden Sie in den Mockups & Screenshots. Versuchen Sie möglichst nach an das vorgegebene Design zu kommen.

- Dauer: 20min
- Storypoints: 3

**CSS**

## F10: Suche implementieren

Die Suche soll hier funktional implementiert werden. In der `assets/scripts/main.js` ist bereits eine (fast) leere Funktion **addSearch** vorgesehen. Sie können die Suche komplett selbst implementieren, oder ein Framework nutzen. In meinem Testlauf habe ich [LunrJS](https://lunrjs.com) benutzt. 

Als Datenbasis finden Sie in der ausgespielten Datei `_site/assets/data/list-of-presentations.json` alle Vorträge der Konferenz im JSON Format. Die Keynotes sind hier nicht enthalten. Ein Datensatz hat folgende Elemente:

| Element | Erläuterung |
| --- | --- |
| id | ID des Datensatzes, gleichzeitig URL Fragment |
| title | Titel des Vortrags. Sollte durchsuchbar sein. |
| begin | Datum und Zeit des Vortrags. Sollte durchsuchbar sein. |
| panelId | Zuordnung zum Panel. Sollte durchsuchbar sein. |
| panelTitle | Name des zugehörigen Panels. Sollte durchsuchbar sein. |
| panelVenue | Raum des zugehörigen Panels. Sollte durchsuchbar sein. |
| speaker | Sprecher. Sollte durchsuchbar sein. |
| pageUrl | URL des Panels. |

Die Suche soll als Live Suche umgesetzt sein, d.h. sobald Nutzer:in etwas in den Suchschlitz eingibt, läuft die Suche los. Die Suche ist idealerweise eine Wildcardsuche, sprich: wenn Nutzer:in `Pädago` eingibt, sucht die Suche nach allen Inhalten, wo der Suchterm enthalten ist, also `*Pädago*`.

Für dieses Teilfeature reicht eine Ausgabe der Trefferliste in der Konsole.

Zur Implementierung (via Lunr) sind folgende grobe Schritte erforderlich:
- einbinden des Suchframeworks
- Akquirieren der `list-of-presentations.json`via fetch
- Zuweisung der Daten aus der `list-of-presentations.json` an die entsprechende Lunr Variable
- Konfiguration der Suchfelder
- Eventhandler an Suchschlitz binden
- Bei Texteingabe Suchwort auf Suchraum anwenden
- Treffer in die Console ausgeben

- Dauer: 45min
- Storypoints: 9

**Javascript**

## F11: Trefferliste umsetzen

Folgende Inhalte sollen in der Trefferliste angezeigt werden:
- Speaker
- Datum & Uhrzeit
- Raum
- Titel des Vortrags

Das Design finden Sie in den Mockups & Screenshots. Versuchen Sie möglichst nach an das vorgegebene Design zu kommen. Die Trefferliste soll in die Sidebar in den Container mit der ID **search-results** injiziert werden. 

In der Treferliste soll auf die entsprechende Seite mit mehr Infos zum Vortrag verlinkt werden. Dazu ist folgende Syntax erforderlich:
`BasisURL der Seite/pageUrl/#id` z.B. `freiheit-und-gleichheit-in-der-bildungsgeschichte/parallel-talks-3/#panel-items-dollinger-rocher.

**Hinweis:** Falls Ihnen die Implementierung der Suche zu komplex ist, Sie aber die Trefferliste gestalten wollen, finden Sie in der `_includes/sidebar.html` eine auskommentierte Trefferliste. Kommentieren Sie diese einfach ein und realisieren Sie das CSS hierfür. Dann gibt es noch ein paar Extrapunkte.

- Dauer: 25min
- Storypoints: 5

**HTML, CSS & Javascript**


## F12: Gesuchtes Element hervorheben

Hier soll ein visueller Anker umgesetzt werden, der Nutzer:innen dabei unterstützt, das gesuchte Element auf der Seite zu finden. Schauen Sie sich den Screenmovie und das Mockup (fd-2023-focus-treffer.png) an. Dazu kann das URL Fragment ausgelesen werden und das HTML Element mit der entsprechenden ID via JS um eine Klasse erweitert werden, die dann via CSS entsprechend dargestellt wird. 

- Dauer: 25min
- Storypoints: 5

**HTML, CSS & Javascript**