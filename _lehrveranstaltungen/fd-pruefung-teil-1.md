---
titel: Kick-Off Miniprojekt Frontend Development // Prüfungsteil 1
kuerzel: fd2
verantwortlich: cn
typ: fd2
pflicht: false
termine: 2020-07-17 10:00
empfohlene-voraussetzungen: 
published: true
dauer: 90
raum: https://th-koeln.zoom.us/j/94618201125 (Zugangscode webdev)
info: 
---

Heute wird die Aufgabe für das Miniprojekt im Teilmodul Frontend Development herausgegeben. Ihre Lösung bildet (voraussichtlich) die Basis für den zweiten Prüfungsteil, die [Coding Challenge](/mi-bachelor-webdevelopment/lehrveranstaltungen/fd-pruefung-teil-2).

Die Aufgabe muss selbstständig und alleine bearbeitet werden. Jeder Teilnehmer hat die Möglichkeit Feedback im Rahmen eines Beratungstermins und eines Codereviews durch uns zu bekommen. 

## Aufgabe

Setzen Sie auf Basis der bereitgestellten Daten (JSON & Markdown) den mitgelieferten Entwurf mit folgenden Screens/ Funktionen um:

### Gemäldeübersicht für jeweils ein Jahr (Dating)

Sie finden die Datierung im Feld dating/dated. Die Datierung kann teilweise nicht eindeutig zugeordnet werden. Nutzen Sie bei mehreren Einträgen den jeweils ersten Eintrag.

Die quadratische Darstellung der Bilder ist nicht so einfach, ggf. hilft dieser [Implementierungsansatz](https://css-tricks.com/aspect-ratios-grid-items/). Hier könnte auch die [object-fit Eigenschaft](https://css-tricks.com/almanac/properties/o/object-fit/#:~:text=contain%20%3A%20increases%20or%20decreases%20the,the%20image%20in%20the%20process.) helfen.

Die Gemäldeübersicht kann zur Laufzeit via Javascript erzeugt werden, oder zur Buildtime mit Hilfe eines Static Page Generators.

### Detailansicht

Beim Klick/ Tap auf ein Bild wird die Detailansicht geöffnet. Hierbei gibt es folgende Varianten:
- Öffnen auf einer eigenen Seite
- Öffnen im Overlay

### Funktionen

- Navigation in der Detailansicht: wenn die Detailansicht geöffnet ist, soll der User mit Hilfe der Pfeilnavigation zum vorherigen und nächsten Gemälde wechseln können.
- Sprachwechsler: Wenn der User den Sprachwähler betätigt, sollen die Inhalte in der jeweils anderen Sprache angezeigt werden
- Akkordeon: mit Klick auf den schwarzen Balken, bzw. das Icon sollen die Bilder innerhalb des zugehörigen Jahres ein- und ausgeblendet werden können.
- GUI Element, mit dem auf kleinen Viewports alle Bilder in der Bildübersicht ausgeblendet werden können, so dass nur die schwarzen Balken mit den Jahreszahlen sichtbar sind.

### Deployment

Die Site muss via GitHub Pages ausgeliefert werden.

## Abgabetermin
31. August 2020
Ende August 2020

## Material
- [Content Pack](https://github.com/mi-classroom/content-pack-wd-miniprojekt-2020)

## Hinweis
Bitte betreiben Sie kein *Overengineering* … falls Sie zusätzliche Features implementieren möchten, sprechen Sie das bitte vorab via Slack ab :)

## Niveaustufen

Die Bewertung erfolgt mit Hilfe des [Niveaustufenmodells](https://www.th-koeln.de/mam/downloads/deutsch/hochschule/profil/lehre/steckbrief_niveaustufen.pdf).

### Beste Lösung
- Layout oder Features wurden, ggf. im Sinne des Projekts optimiert/ angepasst
- zu wesentlichen Elementen und Entscheidungen gibt es Erläuterungen in der *Readme.md*
- die Features sind vollständig umgesetzt und funktionieren
- die Commits und die Commithistorie sind gut lesbar und verständlich
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die Implementierung bildet die vorgegebenen Layouts sehr gut ab
- Verzeichnis- und Codestruktur sind sauber und greifen die Lerninhalte des Moduls auf 
- Website läuft auf GitHub Pages
- Code ist valide
- der Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von SCSS, robustes Javascript)
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein tiefes Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Gute Lösung
- zu wesentlichen Elementen und Entscheidungen gibt es Erläuterungen in der *Readme.md*
- die Features sind vollständig umgesetzt und funktionieren
- die Commits und die Commithistorie sind gut lesbar und verständlich
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die Implementierung bildet die vorgegebenen Layouts gut ab
- Verzeichnis- und Codestruktur sind sauber und greifen die Lerninhalte des Moduls auf 
- Website läuft auf GitHub Pages
- Code ist valide
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Passable Lösung
- zu wesentlichen Elementen und Entscheidungen gibt es Erläuterungen in der *Readme.md*
- die Features sind vollständig umgesetzt und funktionieren mir kleinen Ausnahmen
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die vorgegebenen Layouts sind erkennbar
- Verzeichnis- und Codestruktur sind recht sauber und greifen die Lerninhalte des Moduls auf 
- Website läuft auf GitHub Pages
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein basales Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Akzeptable Lösung
- Website läuft auf GitHub Pages
- Layouts und Features sind in wesentlichen Teilen implementiert
- der erzeugte Code zeigt, dass der/ die Verfasser\*In die zugrunde liegenden Technologien und Konzepte in wesentlichen Teilen verstanden hat

---

<div class="notification is-danger is-light">
Nutzen Sie das [Miniprojekt Assignment](https://classroom.github.com/a/fRD_jdPR) für das Projekt und fügen Sie der finalen Abgabe unbedingt eine ausgefüllte *Eidesstattliche Erklärung* bei.
</div>


