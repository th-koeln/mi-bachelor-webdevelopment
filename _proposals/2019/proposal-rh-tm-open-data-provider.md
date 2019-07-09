---
title: CDA to JSON Backend
team: <a href="https://github.com/Snapstromegon">Raphael Höser</a>, <a href="https://github.com/Madoka03">Tim Missal</a>
field: Lucas Cranach Archiv
type: Dive Deep
repo: https://github.com/Snapstromegon/TH-SS19-WD-Projekt
---

## Idee

Einen API Endpunkt bereitstellen, welcher als Open Data Provider für das Cranach Archiv agiert und die Daten über einen Web Crawler/Scraper entweder vorbezieht oder bei Anfragen direkt parsed.
Zudem kann der Endpunkt Vorschläge für ähnliche Bilder liefern.

## Besonderheit

Besonderer Wert wird hier auf eine klare Übersetzung der CDA Seite in eine REST(ful) API und deren Dokumentation gelegt.
Die Vorschlagsfunktion soll Metainformationen der Bilder analysieren und z.B. ähnliche Datierung oder Zuordnung und Ausstellungen evaluieren und entsprechend 
ähnliche Bilder vorschlagen können.
