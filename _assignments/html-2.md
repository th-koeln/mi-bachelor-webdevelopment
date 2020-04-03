---
titel: Semantisches HTML // Formulare, Typografie & Basislayout
tags: HTML
---

Wir werden zur Bearbeitung der Aufgaben wieder GitHub Classroom nutzen.

Verwenden Sie dazu das Repository, aus dem Workshop „HTML Basics”. 

Die Aufgaben bauen auf den Markup von den Übungen aus dem Workshop „HTML Basics”auf. Falls Sie kein Markup haben, laden Sie sich bitte folgendes [Material](../../material/frontend-development-1/session-2/lucas-cranach-archiv.zip) herunter, kopieren Sie es in das Repository und comitten Sie die Änderungen.

Erzeugen Sie nun einen neuen Branch mit dem Namen „session-2” und wechseln Sie bitte in diesen Branch.

## Aufgabe 1 - HTML // Formulare und Tabellen
Zur Verwaltung der Daten für den digitalen Museumsführer wird eine Pflegemaske benötigt. Über diese soll es möglich sein, sich alle gespeicherten Daten zu den Gemälden anzeigen zu lassen, neue Gemälde hinzuzufügen, zu löschen und zu bearbeiten.

Erstellen Sie in ihrem Repository einen Ordner `backend` und darin eine Datei `uebersicht.html`.

Erzeugen Sie für folgendes [Wireframe](../../material/frontend-development-1/session-2/aufgabe-1/pflegemaske.png) möglichst semantisch reichhaltiges Markup.

Die Daten für die Gemäldeübersicht finden Sie hier als [Markdown Datei](../../material/frontend-development-1/session-2/aufgabe-1/gemaeldedaten.md) oder als [PDF](../../material/frontend-development-1/session-2/aufgabe-1/gemaeldedaten.pdf)

## Aufgabe 2 - CSS // Typografie

Als Basis für diese und die folgenden Aufgaben dient folgende Dokumente:  
* [Styleguide](../../material/frontend-development-1/session-2/aufgabe-2/sd201819styleguideleppkoll.pdf) 
* [Layout](../../material/frontend-development-1/session-2/aufgabe-2/sd201819designkonzeptleppkollibilduebersicht01.png)

Wir konzentrieren uns  zunächst ausschließlich auf das iPad Layout.

Um ein browserübergreifend konsistentes Grundlayout zu erhalten, binden Sie zunächst eine `reset.css` oder `normalize.css` aus einem  Content Delivery Network ein.

Erzeugen Sie nun ein Verzeichnis mit der Bezeichnung `CSS` und darin eine Datei mit dem Namen `style.css`.

Binden Sie diese CSS-Datei in die Datei `tour.html`,  aus dem HTML Basics Workshop, ein.

Definieren Sie in der `style.css` folgende Regeln:

* Alle Elemente sollen die im Styleguide angegebene Schriftart verwenden. Binden Sie die Schriftart dazu bitte über [Google Fonts](https://fonts.google.com) ein.
* Die Textelemente sollen, hinsichtlich der typografischen Angaben (Schriftgröße, -schnitt, -farbe und Zeilenabstand), mit dem Styleguide im Einklang sein.

## Augabe 3 - CSS // Basislayout

Legen Sie in der `style.css` die im Styleguide definierten Hintergrundfarben für den Header und Contentbereich fest. Nutzen Sie dazu bitte class-Attribute im HTML und die dazugehörigen CSS-Selektoren.

Erzeugen Sie mit Hilfe von CSS-Grids das Grundlayout, bestehend aus Header und dem zwei spaltigen Contentbereich. Verwenden Sie dazu die Angaben unter „Grid” im Styleguide.

Mergen Sie zum Schluss den Branch `session-2` in den `master`.
