---
titel: CSS Basis … naja, so basic dann doch nicht.
published: true
tags:
 - HTML
 - CSS
---

Wir nutzen als Basis unser Markup von gestern. Bitte vorab noch mal alle Seiten [validieren](https://validator.w3.org) lassen.

---

## 2.1: Projektstruktur
Reorganisieren Sie Ihr Projekt wie folgt:

```
index.html
about/
  about-the-projekt.html
images/
assets/
  images/
  styles/
    reset.css
    fonts.css
    icons.css
    variables.css
    base.css
    components.css
  fonts/

```

## 2.2: Überführung der Design Tokens

Legen Sie nun wesentliche Angaben aus dem Styleguide als [Custom Properties](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties) in der `variabels.css` an: Farben, Größen, Schriften, Schriftschnitte, Zeilenabstände, etc.

## 3: Mobile First Layout

Wir versuchen in diesem Schritt möglichst nah an das mobile Layout/ Design zu kommen. Dazu gehen wir in folgenden Schritten vor und versuchen uns iterativ anzunähern:

- Schriften angleichen
- Farben angleichen
- Abstände angleichen
- Icons angleichen
- Komponenten erstellen

Versuchen Sie alle wiederkehrenden Werte als Custom Properties abzubilden.

