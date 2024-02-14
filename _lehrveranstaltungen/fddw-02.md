---
titel: Workshop 1
kuerzel: fddw
verantwortlich: hvn, mf
typ: fddw
pflicht: false
termine: 2024-06-20 10:00
empfohlene-voraussetzungen: 
published: true
dauer: 420
raum: fddw-vor-ort
info: Heute geht es um Fragen zur Konzepterstellung
---

## Worum geht es?

Das Ziel des Tages ist es:
* Gruppen stehen fest
* Arbeitsweise für Projektarbeit ist bekannt
* Anforderungen an das Konzept sind bekannt
* Grundverständnis über das "Schneiden" einer Anwendung wurde gelegt


## Bildung der Gruppen

* Gruppen mit 2-3 Studierenden im [Ilias eintragen](https://ilias.th-koeln.de/goto.php?target=wiki_1928167_TEAMS_SS22)
  * Privates Repository für Projekt anlegen: `FDDWSS22_Nachname1Nachname2Nachname3`
  * `README.md` mit Gruppenmitgliedern
  * Dirk Breuer (`code-later`) und Mario Faske (`mariofaske**) zum Repository einladen
  
## Arbeitsweise für Projektarbeit

**Ziel** Nachvollziehbarkeit der Einzelleistungen zur Bewertung des Projektteils.

Die Empfehlungen zur Arbeitsweise orientieren sich an den Inhalten der Veranstaltung [Kollaboration über Versionskontrollsysteme](https://th-koeln.github.io/mi-bachelor-webdevelopment/lehrveranstaltungen/tooling-2/) und fördern die Nachvollziehbarkeit und trainieren professionell genutzte Formen der Zusammenarbeit.

Empfehlungen:

* [Branch Protection aktivieren](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frameworks-dienste-und-daten/github_settings_branch_protection.jpg)
* [Squash Commits nutzen](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frameworks-dienste-und-daten/github_settings_pull_requests.jpg)
* Issues für Arbeitspakete (optional auch als Projekt verwalten)
  * Issue-Template für einheitliche Struktur (siehe Beispiel)
* Pull-Request zu jedem Issue
* Branchnamen: `ISSUE_NUMER_short_description`
* Monorepo um Komplexität der Code-Struktur zu verringern (siehe Beispiel)
* Code-Review auf jedem Pull-Request (siehe Folien für Details)
* GitHub-Flow
  1. Branch erstellen
  1. Commits hinzufügen
  1. Pull Request erstellen
  1. Review / Diskussion
  1. Ship it!
  1. Merge in `main`

### Beispielhafte Struktur eines Monorepo

```
sample_application ❯
├── _doc/
│   └── Concept.md
├── authentication_service/
├── game_service/
├── table_service/
├── user_service/
│   └── Dockerfile
├── LICENSE
├── README.md
└── docker-compose.yml
```

### Beispiel für Issue-Template

* Lebt in `.github/ISSUE_TEMPLATE.md`
* Aussagekräftig und kurze Beschreibung als **Titel**
* Art des Issues (Feature oder Bug) - auch als Label möglich
* **Definition of Done**: Beschreibung welche Persona welches Ziel im System verfolgt und wie dieses Ziel zu erreichen ist
* Technische Details als einzelne Tasks auflisten
* **Merke**: Es kann mehrere Pull-Requests zu einem Issue geben!

```
## Feature / Bug

Als Nutzer:in möchte ich [Aufgabe] mi dem Ziel [Zielzustand]. Falls [Fehler], dann möchte ich [Ausnahmezustand].

## Tasks

- [ ] Task 1
- [ ] Task 2
- [ ] Task 3
```

## Anforderungen an das Konzept

* Ziel ist die klare Definition der Anwendung
* Welches Problem soll gelöst werden?
* Welche fachlichen Domänen existieren in der Anwendung?
* Welche Entitäten gibt es in der Anwendung?
* Welche Kommunikationswege finden sich in der Anwendung?
* Welche Events werden in der Anwendung erzeugt?
* Welche Daten müssen gespeichert werden?
* An welchen Stellen kann die Anwendung in Services geschnitten werden?
* Welche externen Dienste werden angebunden?

### Inhaltliche Umsetzung

* Textuelle Beschreibung
* Mockups
* Pseudo-Code (für Event-Struktur)
* Verschiedene Diagramme zu
  * Domain Model (fachliche Entitäten und ihre Beziehungen)
  * Datenstruktur
  * Kommunikationsfluss
  
Hier ist keine wissenschaftliche Ausarbeitung gefordert. Die fachliche und technische Auseinandersetzung mit dem Thema steht im Vordergrund. Es ist dient zur Abschätzung des Umfangs und der Ableitung konkreter Arbeitspakete.

## Aufgabe für die kommende Veranstaltung

* Nächster Termin **09.06.2022**
* Von 10:00 bis 17:00
* Arbeitsziele:
  * Konzept als Artefakt im Repository
  * `README.md` mit Synopsis zum Projekt ergänzen
  * Konzept im Plenum vorstellen

### Vorbereitungen für kommenden Workshop-Sessions

* [git installiert](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
* GitHub eingerichtet und Repository bereit
* [Code-Editor](https://code.visualstudio.com/) installiert
* [NodeJS installiert](https://nodejs.org/en/download/)
* [Docker installiert](https://docs.docker.com/get-docker/)

## Leitfragen für den Grundlagenteil

Auf dieser Seite sind einige Fragen formuliert die zum Erarbeiten eines Verständnisses der Kapitel 4, 5 und 6 der Monographie von Kuhn genutzt werden können. Die Fragen können auch als Grundlage der Fachdiskussion in den Workshop Terminen genutzt werden.

1. Was versteht man unter den Begriffen horizintal und vertical scalability?
2. Wie charakterisiert Kuhn die Funktionsweise von klassischen Event-basierten Systemen, die mit Callbacks arbeiten?
3. Wie werden im Kontrast Message-basierte Systeme charakterisiert?
4. Wie ist der Unterschied von synchroner und asynchroner Interaktion von producer und consumer einer Nachricht charakterisiert?
5. Welche Vorteile der Kommunikation von Objekten über das Zusenden von Nachrichten gegenüber einer Aufruf-orientierten Kommunikation klassischer Programmiersprachen werden genannt?
6. Welche Möglichkeiten der Flow-Control bei Queuing Systemenwerden genannt?
7. Welche Abwägungen sind in verteilten Systemen bzgl. message-delivery guarantees anzustellen?
8. Welche Alternativen gibt es für delivery guarantees?
9. Wie kann der Begriff *location transparency* definiert werden?
10. Wie wird *location transparency* von *transparent remoting* abgegrenzt?
11. Welche Gründe sprechen dafür, nicht die gleiche Erwartung an die *Semantik von lokaler und entfernter Interaktion* zu haben?
12. Warum kann es sinnvoll sein *location transpsarency nur für auf grob garanularen Komponenten der Architektur* (higher levels of abstraction) anzustreben?
13. Welchen Nutzen bringt das *circuit breaker pattern* in dem Szenario der Abbildungen 5.2 und 5.3?
14. Wie kann die *horizontal scalability* bei rechenzeitintensiven Komponenten wie den Szenario in Abbildung 5.4 eingesetzt werden?
15. Inwiefern erleichtert die konsequente Umsetzung von location transparency das Testen?
16. Was ist die ERklärung für die Aussage von Kuhn, dass Module, die höher in der Hierarchie angeordnet sind spezifischer auf den Use Case ausgerichtet sind als Module, die niedriger in der Hierarchie sind?
17. Was ist der UnterUnterschied zwischen den Modulbeziehungen "Dependence" und "Hierarchy (descendent)"?
18. Was spricht gegen eine an einer TEchnologie-orientierten Organisation ausgerichtete Modulisierung (e.g. Frontend, application, database)?
19. Was versteht Kuhn unter "testability-driven design?

## Material

- [Aufzeichnung der Veranstaltung](https://ilias.th-koeln.de/goto.php?target=file_2257096_download&client_id=ILIAS_FH_Koeln)
- [Folien zur Veranstaltung](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frameworks-dienste-und-daten/FDDW_Slides_02.pdf)

## Literatur

- Edward Steel et al.: Hootsuite: In Pursuit of Reactive Systems ([Link in die ACM DL](https://dlnext.acm.org/doi/abs/10.1145/3121437.3131240))
- J. Bonér et al.: Reactive Microsystems: The Evolution of Microservices at Scale, O'Reilly (siehe auch [Seite des Unternehmens Lightbend](https://www.lightbend.com/ebooks/reactive-microsystems-evolution-of-microservices-scalability-oreilly)), [Webinar](https://on.acm.org/c/acm-learning-webinars)
- Roland Kuhn: Reactive Design Patterns, Manning 2017; wegen Schließung der Bibliothek [hier der o.a. Teil](https://th-koeln.sciebo.de/s/MvfTB3OMKzlOsG9)
- Engineer Bainomugisha, Andoni Lombide Carreton, Tom van Cutsem, Stijn Mostinckx, and Wolfgang de Meuter. 2013. [A survey on reactive programming](http://dx.doi.org/10.1145/2501654.2501666). ACM Comput. Surv. 45, 4, Article 52 (August 2013), 34 pages
- Jack Moffitt: Professional XMPP Programming with JavaScript and JQuery, John Wiley 2010
- Saint-André et al.: XMPP - The Definitive Guide, O'Reilly 2009
- Dean Allemang, Jim Hendler: Semantic Web for the Working Ontologist, Morgan Kaufman 2014
- R.V. Guha et al.: Schema.org: Evolution of Structured Data on the Web, ACM QUEUE Vol. 13 Issue 9 2015
- Tim Berners-Lee: Linked Data, W3c 2006 [Web SEite](https://www.w3.org/DesignIssues/LinkedData)

