---
titel: Javascript // Touch Gesten und Fetch API
tags: Javascript
---

Die Aufgaben bauen auf die [vorangegangene JavaScript Übung](../js-02-extended-slideshow/) auf.

[Startercode](https://github.com/mi-classroom/js-aufgabe-dropdown-menu-slideshow-cnoss) zur Bearbeitung der Aufgaben.

Bitte comitten und pushen Sie ihren Code nach jedem Step.

## Step 1: Navigation über Touch Gesten
Erweitern Sie die Slideshow Klasse so, dass eine Navigation innerhalb der Slideshow über Swipe Gesten möglich ist.
Bei einem Swipe nach links soll das nächste Bild und bei einem Swipe nach rechts das vorherige Bild eingeblendet werden.

Die Erkennung der Fingergesten ist in der Klasse `Swipe` implementiert. Bitte verwenden Sie diese zur Lösung der Aufgabe.

## Step 2: Dynamische Generierung der Slides
Jetzt geht es darum die Slideshow Klasse so zu erweitern, dass die Slides dynamisch generiert werden.

Laden Sie dazu mit Hilfe der Fetch API die `content.json` aus dem JSON-Ordner vom Server.
Erzeugen Sie nun auf Basis der Response die benötigten DOM Elemente für die Slides.

## Step 3: Dynamische Generierug der Sidebar
Erweitern Sie ihren Code dahingegend, dass die Inhalte der Sidebar vollständig auf Basis der JSON Daten generiert werden.
