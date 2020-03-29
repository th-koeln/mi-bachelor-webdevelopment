---
titel: Ugly Code Example
tags: Tooling
---

Mit diesen Aufgaben wollen wir Ihnen einen kleinen Einblick in die einige Features von VSC geben. Wir haben versucht die Aufgaben so aufzubauen, dass wenig bis kein Verständnis von HTML, CSS und JS notwendig ist um sie zu lösen. Bei Fragen: fragen.

## Vorbereitung

### Repo forken
[Ugly Code Repo](https://github.com/mi-classroom/mi-webdev-tooling-ugly-code) auf GitHub im Browser öffnen und Fork erzeugen (rechts oben).

### Repo klonen
Zu dem eben erstellten Fork wechseln und den Fork via `git clone`auf die lokale Maschine klonen. 

### Repo in VSC öffnen
```
cd mi-webdev-tooling-ugly-code
code .
```

### Seite in Live Server anschauen
Dazu mit der rechten Maustaste auf die *index.html* klicken und `Open with Live Server` klicken.


## Aufgaben

### A) Formatierung
1. Die Section "Worum geht es?" in der *index.html* ist leider sehr unleserlich. Formatieren Sie diesen Codeabschnitt bitte neu.
2. Das gleiche gilt für die JavaScript Datei *eyecandy-showcase.js*. Formatieren Sie diese ebenfalls neu. (Dies erfordert eventuell das Installieren einer Extension)

### B) IDE Tools
1. Die *020-base.css* enthält das Farbschema der Webseite. Bei dem Benennen der Variablen ist ein Rechtschreibfehler unterlaufen. Korrigieren Sie diesen bitte (Versuchen Sie die Aufgabe möglichst effizient und **ohne** find-and-replace zu lösen)

### C) Find and Replace
1. Die *accordion.js* soll eigentlich dafür sorgen, dass Teile der Webseite Ein- und ausklappbar sind. Um eine Section ausklappbar zu machen, muss man ihr die Klasse "js-accordion" zuweisen. Einige Rechtschreibfehler in der *index.html* verhindert allerdings eine Korrekte zuweisung.
   - Finden Sie die section tags in der *index.html* bei denen dieser Fehler aufgetreten ist.
   - Korrigieren Sie die Fehler an allen 3  Positionen
2. Die *viewmode-showcase.js* sollte es eigentlich Benutzern ermöglichen sich die Frameworks am unteren Ende der Webseite sowohl als Grid- als auch als Liste anzeigen zu lassen. Leider wurden alle " " Leerzeichen in der Datei durch das Wort "leerzeichen" ersetzt. Reparieren Sie dies.

## Nachbereitung

### Commit und Push
Änderungen commiten und via `push origin master` auf dem Remote bereit stellen.