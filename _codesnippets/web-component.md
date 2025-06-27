---
titel:  Einfache Web Component, z.B. für Navigation und Footer
autor: cn
tags: HTML, Javascript
teasertext: Wie kann ich Elemente auslagern, die sich häufig wiederholen?
---

Web Components sind ein moderner Standard für die Entwicklung wiederverwendbarer UI-Bausteine im Web. Sie ermöglichen es, eigene HTML-Elemente mit gekapseltem Styling und Verhalten zu erstellen – unabhängig von Frameworks wie React oder Angular. Durch die Nutzung von Technologien wie Custom Elements, Shadow DOM und HTML Templates lassen sich modulare, wartbare und vielseitig einsetzbare Komponenten entwickeln, die in jeder modernen Webanwendung verwendet werden können.

## Step 1: Web Component anlegen

Wir nutzen dafür das Verzeichnis `assets/components` und legen hier die Datei `main-header.js` an.

```
class MainHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <!-- unser html code -->
    `;
  }
}
customElements.define('main-header', MainHeader);
```

## Step 2: Web Component einbinden

In unseren HTML Dateien binden wir jetzt die neue Web Component ein:

```
<head>
  …
  <script src="/assets/components/main-header.js"></script>
</head>
```

## Step 2: Web Component nutzen

Jetzt können wir die Web Component im Code nutzen:

```
<body>
  <main-header></main-header>
  …
</body>
```