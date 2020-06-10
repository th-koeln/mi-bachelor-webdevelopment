---
titel: Javascript // extended Slideshow
tags: Javascript
---

Die Aufgaben bauen auf die [vorangegangene JavaScript Übung](../js-01-dropdown-menu-slideshow/) auf.

[Startercode](https://github.com/mi-classroom/js-aufgabe-dropdown-menu-slideshow-cnoss) zur Bearbeitung der Aufgaben.

Bitte comitten und pushen Sie ihren Code nach jedem Step.

## Step 1: Vollbildmodus
Erzeugen Sie JavaScript Code, welcher bei einem Mausklick das angezeigte Bild im Vollbildmodus darstellt. Bei einem weiteren Klick soll der Vollbildmodus wieder verlassen werden. 

[Dokumentation zur Fullscreen API](https://developer.mozilla.org/de/docs/Web/API/Vollbild_API)

## Step 2: Slideshow Modus über Konfigurationsobjekt einstellen
Füllen Sie zunächst in der `index.html` das Dataattribut `data-slide-show` mit folgendem JSON Objekt:  
`data-slide-show'{ "wrapAround": true }'`

Erweitern Sie nun ihren Javascript Code dahingehend, dass bei Initialisierung der Slideshow das JSON Objekt aus dem data-Attribut ausgelesen wird.
Auf Basis des Wertes in `wrapAround`, soll die Slideshow unterschiedlich konfiguriert werden.

`"wrapAround": true`: "Unendliches" Durchschalten der Slides. D.h., wenn der letzte Slide angezeigt wird und es wird ein Slide weitergeschaltet, soll der erste Slide eingeblendet werden und umgekehrt.

`"wrapAround": false`: "Anschläge" am Anfang und Ende der Slideshow. Ein unendliches Durschalten der Slides soll nicht möglich sein.

## Step 3: Dot Navigation
Bitte erstellen Sie eine Dot Navigation unterhalb der Slides. Die dazugehörigen HTML Elemente sollen via JavaScript dynamisch erzeugt und dem DOM hinzufügt werden. Beim durchschalten der Slides soll der Dot hervorgehoben werden, welchem dem aktuellen Bild zugeordnet ist. Zudem soll die Slideshow über die Dots steuerbar sein.

CSS Regeln zum Stylen der Dot Navigation:
```
.dot-navigation {
  margin: 0 0 0 0;
  padding: 0 0 $s 0;
  line-height: 1;
  list-style: none;
  text-align: center;
  width: 100%;

  &__dot {
    border: $border-width $darker solid;
    border-radius: 50%;
    cursor: pointer;
    display: inline-block;
    height: $xxs;
    margin: 0 $xxs;
    width: $xxs;
  }

  &__dot--active {
    background-color: $darker;
  }
}
```
