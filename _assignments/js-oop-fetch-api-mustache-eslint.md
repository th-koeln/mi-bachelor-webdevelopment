---
titel: Javascript OOP, fetch API, Mustache Templates, ESLint
tags: JavaScript
published: true
---

Ausgangspunkt zur Bearbeitung der Aufgaben ist das [Classroom Assignment](https://classroom.github.com/a/nGvbYElN) aus dem Workshop [Javascript Basics](../fd-05-js-basics-1/)

Bitte comitten und pushen Sie ihren Code nach jedem Step.

## Step 1: Struktur von Page Navigation optimieren
Optimieren Sie die Struktur des JavaScripts für die Page Navigation, in dem Sie den Code in einer Klasse kapseln.

## Step 3: JSON via fetch API laden
Laden Sie das [Content Pack](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frontend-development/content-pack.zip) herunter und kopieren Sie die Daten in ihr Projektverzeichnis.

Laden Sie das JSON File asynchron via JavaScript über die fetchAPI nach.

## Step 4: Markup für Kommentare generieren
Erzeugen Sie Javascript Code, welches auf Basis des zuvor geladenen JSON Files, Markup für die Kommentare unterhalb des Formulares erzeugt. 

Dargestellt werden soll: 
* der Vorname und Nachame
* das Datum an dem der Kommentar verfasst wurde 
* und ein Bild von dem Verfasser.

## Step 5: Layout von Kommentarblock anpassen
Passen Sie das Layout des Kommentarblocks so an, dass er stimmig zur restlichen Seite ist.
 
## Step 6: Markup via Mustache Templates
Binden Sie die Mustache Template Engine via CDN ein.

Das Markup für den Kommentarblock soll nun über die Mustache Template Engine erzeugt werden.

Erstellen Sie dazu ein Mustache Template auf Basis des JSON Files für den Kommentarblock und erzeugen Sie JavaScript Code welches mit Hilfe des Templates und des nachgeladenen JSON Files das Markup für den Kommentarblock erzeugt.

## Step 7: ESLint und Airbnb einbinden und Code optimieren
Binden Sie ESlint und die Konfiguration für den Airbnb Styleguide in ihr Projekt ein.

Optimieren Sie ihren Code dahingegend, dass der Linter keine Fehler mehr anzeigt.