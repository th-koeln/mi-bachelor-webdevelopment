---
titel: JavaScript - Mobile Navigation
published: true
tags:
 - CSS
 - JS
---

Nutzen Sie als Basis das Markup und die Styles aus der letzten Übung.

## Step 1
Falls noch nicht vorhanden, fügen Sie die Hauptnavigation und eine Schaltfläche mit einem Hamburger Icon in Ihr Markup der `index.html` ein und stylen Sie diese entsprechend der Abbildung für die mobile Ansicht. Als Hilfestellung können Sie folgende Code Snippets nutzen.

### Abbildung mobile Navigation

![Abbildung mobile Navigation](/mi-bachelor-webdevelopment/assignments/images/mobile-navigation.png)

### Code Snippets - mobile Ansicht Hauptnavigation

HTML
```html
<ul class="main-menu">
  <li><a href="./news.html">News</a></li>
  <li><a href="./pages/about/about-the-lecturers.html">Barrierefreiheit</a></li>
  <li><a href="./login.html">Login</a></li>
  <li><a href="#">DE</a></li>
</ul>
```

CSS
```css
.main-menu {
  display: flex;
  gap: var(--l);
  flex-direction: column;
  position: fixed;
  padding: var(--xl);
  background-color: var(--color-grey);
  height: calc(100vh - var(--xl) * 2);
  width: 200px;
  top: 0;
  left: 0;
  z-index: 10;
  transform: translateX(-100%);
  transition: transform var(--tr-normal);

  &.is-active{
    transform: translateX(0);
  }
}
```
## Step 2

Erzeugen Sie einen `scripts` Ordner in ihrem Projekt und darin eine Datei `main.js`.

Binden Sie anschließend die JavaScript Datei in ihre `index.html` ein.

## Step 3

Erzeugen Sie nun JavaScript Code in der `main.js`, welcher bei einem Klick auf den Hamburger Button die Hauptnavigation von der linken Seite des Viewports aus reinfährt und im gleichen Zug das Hamburger Icon durch ein X austauscht.

Bei einem weiteren Klick auf den Hamburger Button soll das Hauptmenu wieder nach links rausfahren und das Burger Icon angezeigt werden.





