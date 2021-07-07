---
titel: Generated Code & Content via 11ty
tags: 
  - Generated Code
  - Frontend-Development
published: true
---

## Aufgabe 1: Integration von [11ty](https://www.11ty.dev/)

Integrieren Sie den Static Page Generator 11ty in Ihre aktuelle Codebasis, entweder auf Basis des [Javascript Assignments](https://classroom.github.com/classrooms/61686333-webdev-fd-sose-2021/assignments/startercode-javascript) oder auf Basis der [Version v5.1.0 von Christian Noss](https://github.com/cnoss/fd-2021/releases/tag/v5.1.0).

Nutzen Sie die Konfigurationsdatei, die in den [Nunjucks Code Snippets](/mi-bachelor-webdevelopment/codesnippets/nunjucks-commands/) hinterlegt ist. Folgende Schritte sind erforderlich:

- `dist` Folder zu `docs` Folder umbennen und entsprechend konfigurieren, damit man das Ganze später auch mal auf GitHub Pages laufen lassen kann.
- `scripts` und `styles` sind in den `assets` Folder schieben und BuildChain entsprechend anpassen, damit das Wurzelverzeichnis etwas übersichtlicher ist.
- default-Template mit der Endung `.njk` erzeugen.
- bestehende HTML Dateien um das Markup des default-Templates reduzieren.

## Aufgabe 2: Auslagern der Navigation
- erzeugen Sie einen Ordner `_includes`
- erzeugen Sie hier eine Datei `navigation.njk`
- nutzen Sie die Schleife, die in den [Nunjucks Code Snippets](/mi-bachelor-webdevelopment/codesnippets/nunjucks-commands/)
- binden Sie die Navigation in Ihr Default Template ein


