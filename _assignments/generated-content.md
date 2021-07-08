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

## Aufgabe 3: Generierter Content aus JSON Daten

Laden Sie die [`paintings.json`](https://mi-classroom.github.io/fd-2021-content/js-session-3/paintings.json) herunter und speichern Sie die Datein im `_data` Verzeichnis Ihres Projekts. 

Legen Sie dann eine Datei `paintings.html` im `src` Folder an. Diese sollte folgenden *Font Matter* haben

```
---
title: News
layout: default.njk
---

```

Via `paintings.items` können Sie nun auf die einzelnen Einträge zugreifen. Erzeugen Sie nun eine Übersicht der Bilder mit *title*, *subtitle* und *data*.

Im Tutorial [Generate Page Content From a Global Data File Using Eleventy](https://tannerdolby.com/writing/generate-page-content-from-a-global-data-file-using-eleventy/) gibt es noch ein paar Hilfen und Hinweise.