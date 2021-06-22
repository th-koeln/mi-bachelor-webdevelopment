---
titel: Javascript Page Navigation und ESLint
tags: Javascript
published: true
---

Ausgangspunkt zur Bearbeitung der Aufgaben ist wieder der Code aus der [CSS Grid Aufgabe](/mi-bachelor-webdevelopment/assignments/css-grid/). Legen Sie zunächsten einen neuen Zweig mit der Bezeichnung `m-page-navigation` an.


## Step 1: Hauptmenü überarbeiten
Tauschen Sie die Links im Hauptmenü durch folgende Navigationspunkte aus
* User Experience Design
* Community-Centered Design
* Human-Centered Design
* Four different phases in HCD
* Design Thinking

Verknüpfen Sie die einzelnen Navigationspunkte über IDs mit den gleichnamigen Headlines.

## Step 2: JavaScript Datei erzeugen und einbinden
Erzeugen Sie einen `scripts` Ordner in ihrem Projektordner und darin eine Datei `main.js`.
Binden Sie anschließend die JavaScript Datei am Ende der `theory.html` ein.
 
## Step 3: Interaktion Navigations-Element
Erzeugen Sie Javascript Code in der `main.js`, welcher bei einem Klick auf den ersten Link in der Navigation den Content des Navigations Elements auf der Konsole ausgibt.

## Step 4: Interaktion Navigations-Elemente
Erweitern Sie Ihr JavaScript dahingegend, dass der Eventhandler aus der vorherigen Aufgabe für alle Links in der Navigation greift.

## Step 5: Highlighting Navigations-Elemente
Erweitern Sie den Eventhandler dahingegend, dass dem Navigations-Element, auf welches geklickt wurde, das Attribut-Wert-Paar `[data-state='active']` angehangen wird.

Fügen Sie eine CSS Regel hinzu, welche das angeklickte Element visuell hervorhebt.

## Step 6: Intersection Observer
Entwickeln Sie nun, mit Hilfe des Intersection Observers, einen Scrollspy für die Page Navigation.  
Dabei soll beim Scrollen der Seite immer das Element hervorgehoben werden, das zu der Sektion gehört, welche sich gerade im Viewport befindet. Nutzen Sie zum Highlighten der Navigations Elemente wieder das Data Attribut.
