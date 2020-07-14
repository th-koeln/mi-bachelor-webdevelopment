---
layout: home
titel: Projektaufgabe für BPO3 Wechsler
---

# Projektaufgabe 2020 für BPO3 Wechsler

Die Aufgabe gliedert sich in einen Frontend und einen Backend Teil. Die Frontend Aufgabe entspricht dem [Miniprojekt für das Teilmodul Frontend Development](https://th-koeln.github.io/mi-bachelor-webdevelopment/lehrveranstaltungen/fd-pruefung-teil-1/). Allerdings müssen hier die Daten zur Laufzeit von einer Rest-API akquiriert werden. Und diese Rest-API ist der Backendteil der Aufgabe.

## Rest-API Backend
Die Rest-API muss die folgenden Anforderungen erfüllen:
- Repräsentation: JSON
- HTTP Methode: GET
- Ressourcen: /paintings und /paintings/:id
- Paginierung: /paintings/?from (Offset, ausgehend vom ersten Datensatz) und /paintings/?size (Anzahl der Datensätze, die zurückgegeben werden sollen)
- Sortierung: /paintings/?date.asc, /paintings/?date.desc, /paintings/?title.asc, /paintings/?title.desc
- Absicherung gegen nicht authorisierte Zugriffe von außen
- Möglichkeit zur Versionierung

## Dokumentation & Deployment
Dokumentieren Sie alle notwendigen Entscheidungen kurz und verständlich in einem Decision Log (Decisions.md). Nutzen Sie ggf. [Architecture decision record](https://github.com/joelparkerhenderson/architecture_decision_record) als Schablone. Stellen Sie darüber hinaus Ihren Konsumenten ein «Getting Started» in der Readme.md bereit.

Die API muss über einen Server im Internet, z.B. Heroku erreichbar sein.

## Daten
Es müssen nicht alle Datenfelder aus den JSON Files ausgeliefert werden, sondern nur diejenigen, die für die Frontend Aufgabe erforderlich sind.

## Niveaustufen

### Beste Lösung
- Datenstrukturen sind optimiert und bilden weitere Use-Cases ab
- zu wesentlichen Elementen und Entscheidungen gibt es professionelle Erläuterungen in der *Readme.md*
- *Readme.md* ist verständlich und macht einen professionellen Eindruck
- die Commits und die Commithistorie sind gut lesbar und verständlich
- Verzeichnis- und Codestruktur sind sauber
- Repo und Code sind gut strukturiert und aufgeräumt
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein tiefes Verständnis der zugrunde liegenden Technologien und Konzepte hat
- alle Anforderungen sind erfüllt
- erforderliche Ressourcen werden bereit gestellt
- API läuft auf einem Server im Internet

### Gute Lösung
- zu wesentlichen Elementen und Entscheidungen gibt es Erläuterungen in der *Decisions.md*
- *Readme.md* ist verständlich und macht einen professionellen Eindruck
- die Commits und die Commithistorie sind gut lesbar und verständlich
- Verzeichnis- und Codestruktur sind sauber
- Repo und Code sind gut strukturiert und aufgeräumt
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat
- fast alle Anforderungen sind erfüllt
- erforderliche Ressourcen werden bereit gestellt
- API läuft auf einem Server im Internet

### Passable Lösung
- zu wesentlichen Elementen und Entscheidungen gibt es Erläuterungen in der *Decisions.md*
- Verzeichnis- und Codestruktur sind recht sauber
- der erzeugte Code zeigt, dass der/ die Verfasser\*In ein basales Verständnis der zugrunde liegenden Technologien und Konzepte hat
- fast alle Anforderungen sind erfüllt
- erforderliche Ressourcen werden bereit gestellt
- API läuft auf einem Server im Internet


### Akzeptable Lösung
- wesentliche Anforderungen sind erfüllt
- erforderliche Ressourcen werden bereit gestellt
- API läuft auf einem Server im Internet
