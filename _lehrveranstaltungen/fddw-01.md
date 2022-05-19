---
titel: Workshop 1
kuerzel: fddw
verantwortlich: db, mf
typ: fddw
pflicht: false
termine: 2022-05-19 13:00
empfohlene-voraussetzungen: 
published: true
dauer: 240
raum: zoom-fddw
info: Heute geht es um Kick-Off der Veranstaltung
---

## Vorraussetzungen

* Die Inhalte von AP1, AP2 und GDW
* Die Kompetenz zur Entwicklung von webbasierten Anwendungen in JavaScript
* Die Bereitschaft und Fähigkeit zum selbstständigen Wissenserwerb

## Worum geht es?

Das Ziel des Tages ist es
- einen Überblick über die Inhalte, Anforderungen und Erfolgskriterien des Kurses erlangt zu haben,
- die Motivation und das Grundverständnis asynchroner Systemarchitekturen aus dem Modul "Grundlagen des Web" aufgefrischt zu haben,
- Individuelle auf die Workshopaufgabe ausgerichtete Kompetenzziele identifiziert haben und einen Plan zur Erreichung mit den Mentoren abgestimmt haben und im Git dokumentiert haben.
- Die Aufgabe der Erstellung eines Anwendungsbeispiels in Projektform verstanden und erste Schritte zur Realisierung unternommen haben.

## Zielkompetenz nach Abschluss

In der Lage sein fundierte Architekturentscheidung für ein webbasiertes Softwaresystem treffen zu können!

## Aufgabe für die kommende Veranstaltung

- Erarbeiten Sie die im Grundlagenteil vorgestellten Konzepten und und die Inhalte den Kapiteln 1 (Why reactive) und 2 (A walk-through of the Reactive Manifesto) der Monographie von Kuhn die wesentlichen Begriffe und Zusammenhänge! Nutzen Sie dazu die in der Folge angegebenen Leitfragen!
- Gruppen müssen sich gebildet haben
- Erste Idee für ein Projekt, um Fragen rechtzeitig zu klären. Die Wahl des richtigen Umfangs ist entscheidend und soll bereits vor Ausarbeitung eines Konzepts mit den Mentoren besprochen werden können.

## Anwendungsbeispiel als Projekt

Die Zielsetzung des Projekts lautet wie folgt:

* Anwendung die in Microservices / Komponenten aufgeteilt ist
* Asynchrone Kommunikation zwischen Microservices (bspw. durch Events)
* Anbindung mindestens eines externen (offenen) Datendienstes
* Es muss State geben! (Ohne State ist alles möglich)
* Einfache! Web-UI zur Interaktion mit der Anwendung
* Deployment der Anwendung
* Betriebskonzept
* Dokumentation und Nachvollziehbarkeit in GitHub

## Wichtige Termine

* Gruppen stehen fest (2-3 Studierende): **02.06.2022**
  * Privates Repository für Projekt anlegen: `FDDWSS22_Nachname1Nachname2Nachname3`
  * `README.md` mit Gruppenmitgliedern
  * Dirk Breuer (`code-later`) und Mario Faske (`mariofaske`) zum Repository einladen
* Vorstellung Projektkonzept: **09.06.2022**
  * Konzept als Artefakt im Repository
  * `README.md` mit Synopsis zum Projekt ergänzen
* Abgabe Projekt zum **08.09.2022**
  * Projekt vollständig in GitHub
  * Hinreichende Dokumentation im Repository vorhanden
  * Betriebskonzept im Repository vorhanden
  * Anwendung ist deployed und zugänglich
  * **Hinweis:** Um die Abnahme und Bewertung des Projekts zu erleichtern, wird die Nutzung des in [Kollaboration über Versionskontrollsysteme](https://th-koeln.github.io/mi-bachelor-webdevelopment/lehrveranstaltungen/tooling-2/) vorgeschlagenen Workflow zur Organisation vorgeschlagen (Pull-Requests mit Zusammenfassung der Änderungen und Issues zur Planung).
* Präsentation der Projekte im Plenum: **15.09.2022**
* Mündliche Prüfung: **23.09.2022**

## Ermittlung der Note

Insgesamt können 100 Punkte erreicht werden, davon 50 im Projektteil und 50 im Fachgespräch. Zum Bestehen des Moduls müssen **mindestens 48 Punkte** erzielt werden.

## Leitfragen für den Grundlagenteil

Auf dieser Seite sind einige Fragen formuliert die zum Erarbeiten eines Verständnisses der Kapitel 1 und 2 der Monographie von Kuhn genutzt werden können. Die Fragen können auch als Grundlage der Fachdiskussion in den Workshop Terminen genutzt werden.

1. Beschreiben Sie den den Einsatz von sharding anhand des von Kuhn dargestellten fiktiven E-Mail Dienstes! 
2. Aus welchen Gründen kann in einem verteilten System die Replikation von Daten sinnvoll sein?
3. Beschreiben Sie die von Kuhn genannten Replikationsansätze Active-passive, Consensus-based multiple-master und Optimistic replication with conflict detection!
4. Erklären Sie de Grundsätze (tenets) des Reactive Manifesto!
5. Was wird unter dem Ziel responsiveness verstanden und inwiefern steht dieses Ziel mit der Notwendigkeit der Verteilung von Systemkomponenten in einem Spannungsverhältnis?
6. In welcher Weise werden Pattern benutzt, um die responsiveness angesichts von Überlast- und Ausfallsituationen zu gewährleisten?
7. Wie können Non-Reactive (synchrone) Dienste in eine  Reactive Architectur integriert werden? 
8. Erklären Sie das Beispiel des Bildabrufs im Non-Reactive Fall anhand der Abbildungen 2.1 und 2.2!
9. Erklären Sie Amdahl's Law und Litttle's Law!
10. Wie kann die maximale Latenzzeit mit Hilfe von queues begrenzt werden?
11. Erklären Sie wie durch Verwendung von programmiersprachlichen Mitteln wie (composable) Futures bzw. Promises Parallelität bei der Verarbeitung von Anfragen ausgenutzt werden kann?
12. Durch welche Faktoren wird die Beschleunigung der Verarbeitung durch Parallelisierung begrenzt?
13. Erklären Sie den Begriff resilience und grenzen Sie ihn zu den Begriffen reliability und fault tolerance ab!
14. Zu welchem Zweck werden circuit-breaker eingesetzt und wie funktionieren sie?
15. Was ist die Rolle eines Supervisors in einer verteilten Service Architektur?
15. Erklären Sie das CAP Theorem!
17. Aus welchem Grund verzichtet man bei reactive systems soweit möglich auf die Forderung der strong consistency?
18. Erklären Sie die Probleme die aus network partitions entstehen anhand des hypothetischen Gmail Service!

## Material

- Das Recording zur Veranstaltung findet sich im ILIAS
- [Miro Board mit Erwartungen, Wünschen, Fragen und Terminen](https://miro.com/welcomeonboard/aXI3Y3EzUHk3TVR3Z2pod3RGR0c2UEFZekJPSUF1UHk1R01RTERmZ3dLYm15RU5ScDluZ1ZjeHA1NThlTEVmOHwzMDc0NDU3MzU0MDM1Njk1MTE0?share_link_id=991062960050)
- [Präsentation während der Veranstaltung](https://github.com/th-koeln/mi-bachelor-webdevelopment/raw/master/material/frameworks-dienste-und-daten/FDDW_Slides_01.pdf)
- [Reactive Microsystems Talk](https://www.youtube.com/watch?v=3hMtjPcU248) 
- [Microservice Patterns und Antipatterns Talk](https://www.youtube.com/watch?v=RsyOkifmamI)

## Literatur

- Edward Steel et al.: Hootsuite: In Pursuit of Reactive Systems ([Link in die ACM DL](https://dlnext.acm.org/doi/abs/10.1145/3121437.3131240))
- J. Bonér et al.: Reactive Microsystems: The Evolution of Microservices at Scale, O'Reilly (siehe auch [Seite des Unternehmens Lightbend](https://www.lightbend.com/ebooks/reactive-microsystems-evolution-of-microservices-scalability-oreilly)), [Webinar](https://on.acm.org/c/acm-learning-webinars)
- Roland Kuhn: Reactive Design Patterns, Manning 2017, Da die Bibliothek geschlossen, hier ein [Auszug für Ihren persönlichen Gebrauch](https://th-koeln.sciebo.de/s/lL0Qmu5Hq3OzNKB)
- Engineer Bainomugisha, Andoni Lombide Carreton, Tom van Cutsem, Stijn Mostinckx, and Wolfgang de Meuter. 2013. [A survey on reactive programming](http://dx.doi.org/10.1145/2501654.2501666). ACM Comput. Surv. 45, 4, Article 52 (August 2013), 34 pages
- Jack Moffitt: Professional XMPP Programming with JavaScript and JQuery, John Wiley 2010
- Saint-André et al.: XMPP - The Definitive Guide, O'Reilly 2009
- Dean Allemang, Jim Hendler: Semantic Web for the Working Ontologist, Morgan Kaufman 2014
- R.V. Guha et al.: Schema.org: Evolution of Structured Data on the Web, ACM QUEUE Vol. 13 Issue 9 2015
- Tim Berners-Lee: Linked Data, W3c 2006 [Web SEite](https://www.w3.org/DesignIssues/LinkedData)
