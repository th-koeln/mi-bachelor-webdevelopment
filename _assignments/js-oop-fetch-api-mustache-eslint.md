---
titel: Javascript OOP, fetch API, Mustache Templates, ESLint
tags:
  - JavaScript
published: true
---

Ausgangspunkt zur Bearbeitung der Aufgaben ist das [Classroom Assignment](https://classroom.github.com/a/3-mJ5IOS) aus dem Workshop [Javascript Basics](../fd-05-js-basics-1/)

Bitte comitten und pushen Sie ihren Code nach jedem Step.

## Step 1: Struktur von Page Navigation optimieren
Optimieren Sie die Struktur des JavaScripts für die Page Navigation, in dem Sie den Code in einer Klasse kapseln.

## Step 2: JSON via fetch API laden
Laden Sie das Comment JSON File asynchron via JavaScript über die fetchAPI nach. Nutzen Sie hierfür entweder das online bereit gestellte [Comment JSON File](https://mi-classroom.github.io/fd-2021-content/js-session-2/comments.json) oder laden Sie das [Content Pack](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frontend-development/content-pack.zip) herunter und kopieren Sie die Daten in ihr Projektverzeichnis.

## Step 3: Markup für Kommentare generieren
Erzeugen Sie Javascript Code, welches auf Basis des zuvor geladenen JSON Files, Markup für die Kommentare unterhalb des Formulares erzeugt. 

Dargestellt werden soll: 
* der Vorname und Nachame
* das Datum an dem der Kommentar verfasst wurde 
* und ein Bild von dem Verfasser. Der Basispfad für die Bilder ist `https://mi-classroom.github.io/fd-2021-content/js-session-2/avatars/`.

## Step 4: Layout von Kommentarblock anpassen
Passen Sie das Layout des Kommentarblocks so an, dass er stimmig zur restlichen Seite ist.
 
## Step 5: Markup via Mustache Templates
Binden Sie die [Mustache Template Engine via CDN](https://www.jsdelivr.com/package/npm/mustache) ein.

Das Markup für den Kommentarblock soll nun über die [Mustache Template Engine](https://github.com/janl/mustache.js) erzeugt werden.

Erstellen Sie dazu ein Mustache Template auf Basis des JSON Files für den Kommentarblock und erzeugen Sie JavaScript Code welches mit Hilfe des Templates und des nachgeladenen JSON Files das Markup für den Kommentarblock erzeugt.

## Step 6: ESLint und Airbnb einbinden und Code optimieren
[Binden Sie ESlint und die Konfiguration für den Airbnb Styleguide in ihr Projekt ein.](https://dev.to/bigyank/a-quick-guide-to-setup-eslint-with-airbnb-and-prettier-3di2)

Optimieren Sie ihren Code dahingegend, dass der Linter keine Fehler mehr anzeigt.
