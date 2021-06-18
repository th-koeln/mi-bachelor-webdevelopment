---
titel: CSS Refactoring mit SASS, Integration von Stylelint
tags: CSS, SASS
published: true
---

Wir nutzen als Startercode wieder das Repo aus der [Aufgabe CSS Grid](/mi-bachelor-webdevelopment/assignments/css-grid/). Sie werden Ihren bisherigen Stand weiter entwickeln. Legen Sie dafür einen neuen Zweig `m-sass-refactoring` an.

## Aufgabe 1: Integration von Stylelint
Integrieren Sie *Stylelint*, wie in der [Aufgabe StyleLint Setup](/mi-bachelor-webdevelopment/assignments/tooling-stylelint/) beschrieben.

Fügen Sie hier noch ein Stylelint-Plugin für SCSS hinzu: [stylelint-scss](https://github.com/kristerkari/stylelint-scss)

## Aufgabe 2: Überführen in eine SASS Struktur
Klonen Sie das Repo [SASS Startercode](https://github.com/cnoss/sass-startercode) und übertragen Sie die Struktur in Ihr CSS-Grid Repo:

- Alle Inhalte wandern in die `src`Folder
- `package.json` wird überführt
- die bestehenden CSS Dateien werden in SASS Dateien überführt
- `main.css` ersetzt die bestehenden CSS Dateien in der `index.html`
- lesen Sie die [Readme Datei des SASS Startercode Repos](https://github.com/cnoss/sass-startercode/blob/master/README.md) und prüfen Sie, ob alles erwartungskonform läuft

## Aufgabe 3: Refactoring
Nehmen Sie sich *20 min* um den bestehenden Code Mithilfe von SASS zu überarbeiten, um ihn flexibler, kompakter und übersichtlicher zu machen.

## Aufgabe 4: Layout inkl. Transition umsetzen

Setzen Sie nun das Layout wie im Filmchen gezeigt um. Die Idee zum Effekt stammt aus diesem Codepen [CSS Flexbox Transition](https://codepen.io/thomas-eilermann/pen/grjEjE).

<iframe width="560" height="315" src="https://www.youtube.com/embed/43zxrJ4qmfc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

