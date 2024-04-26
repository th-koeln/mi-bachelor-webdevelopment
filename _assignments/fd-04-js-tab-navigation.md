---
titel: JavaScript - Tab Navigation
published: true
tags:
 - CSS
 - JS
---

Nutzen Sie als Basis das Markup und die Styles aus der letzten Übung.

## Step 1
Erzeugen Sie oberhalb des Main-Content Bereichs in der `index.html` eine Tab-Navigation mit den Reitern "Mein Bereich", "Über das Projekt" und "Aktuelles" und stylen Sie diese entsprechend dem vorliegenden Mockup.

## Step 2
Fügen Sie der `index.html`, neben dem Main-Content Bereich, drei Abschnitte hinzu, die den Inhalt für die jeweiligen Reiter darstellen.

Kopieren Sie in den zweite Abschnitt den Inhalt der Seite `about-the-project.html`. Fügen Sie in den dritten Abschnitt Blindtext ein.

## Step 3
Stylen Sie die Abschnitte so, dass sie übereinander liegen und nur der erste Abschnitt sichtbar ist.

Für die Anordnung der Abschnitte können Sie als Hilfestellung folgendes CSS Snippet nutzen:

```css
.tab-grid {
  display: grid;
  grid-template-columns: 1fr;

  > * {
    grid-row-start: 1;
    grid-column-start: 1;
    display: none;

    &.is-active {
      display: block;
    }
  }
}
```

## Step 4
Erzeugen Sie JavaScript Code in der `main.js`, welcher bei einem Klick auf einen Tab den dazugehörigen Abschnitt sichtbar macht und die anderen Abschnitte ausblendet und den aktiven Tab hervorhebt.
