---
titel: Workshop 1
kuerzel: fddw
verantwortlich: kf
typ: fddw
pflicht: false
termine: 2020-04-02 13:00
empfohlene-voraussetzungen: 
published: true
dauer: 240
raum: 
info: Heute geht es um …
---
Die Veranstaltung findet online statt, der virtuelle Raum wird rechtzeitig bekannt gegeben.

## Worum geht es?
Das Ziel des Tages ist es
- einen Überblick über die Inhalte, Anforderungen und Erfolgskriterien des Kurses erlangt zu haben,
- die Motivation und das Grundverständnis asynchroner Systemarchitekturen aus dem Modul "Grundlagen des Web" aufgefrischt zu haben,
- Im Rahmen des Self Assessment geprüft haben inwieweit eine erfolgreiche Teilnahme an der Veranstaltung möglich erscheint
- Individuelle auf die Workshopaufgabe ausgerichtete Kompetenzziele identifiziert haben und einen Plan zur Erreichung mit den Mentoren abgestimmt haben und im Git dokumentiert haben

## Ablauf
13:00 - 14:15 Intro und Inputvorlesung /Grundlagen

14:30 - 15:00 Vorstellung Workshopaufgabe und Organisation

15:00 - 17:00 Arbeit am Projekt, individuelle Abstimmung mit Mentoren

## Aufgabe für die kommende Veranstaltung
- Erarbeiten Sie die im Grundlagenteil vorgestellten Konzepten und und die Inhalte den Kapiteln 1 (Why reactive) und 2 (A walk-through of the Reactive Manifesto) der Monographie von Kuhn die wesentlichen Begriffe und Zusammenhänge! Nutzen Sie dazu die [LeitfragenKuhn1](https://ilias.th-koeln.de/goto.php?target=wiki_1245621_LeitfragenKuhn1)!
- Arbeiten Sie individuell an den den mit Ihren Mentoren identifizierten Kompetenzzielen und dokumentieren Sie den Fortschritt im Wiki des Repositories.
- Arbeiten Sie an des abgesprochenen Zielen des technischen PoC!

## Leitfragen für den Grundlagenteil
Auf dieser Seite sind einige Fragen formuliert die zum Erarbeiten eines Verständnisses der Kapitel 1 und 2 der Monographie von Kuhn genutzt werden können. Die Fragen können auchals Grundlage der Fachdiskussion in den Workshop Terminen genutzt werden.  
1. Beschreiben Sie den den Einsatz von sharding anhand des von Kuhn dargestellten fiktiven E-Mail Dienstes! 
2. Aus welchen Gründen kann in einem verteilten System die Replikation von Daten sinnvoll sein?
3. Beschreiben Sie die von Kuhn genannten Replikationsansätze Active-passive, Consensus-based multiple-master und Optimistic replication with conflict detection!
4. Erklären Sie de Grundsätze (tenets) des Reactive Manifesto!
5. Was wird unter dem Ziel responsiveness verstanden und inwiefern steht dieses Ziel mit der Notwendigkeit der Verteilung von Systemkomponenten in einem Spannungsverhältnis?
6. In welcher Weise werden Pattern benutzt, um die responsiveness angesichts von Überlast- und Ausfallsituationen zu gewährleisten?
7. Wie können Non-Reactive (synchrone) Dienste in eine  Reactive Architectur integriert werden? 
8. Erklären Sie das Beispiel des Bildabrufs im Non-Reactive Fall anhand der Abbildungen 2.1 und 2.2!
9. Erklären Sie Amdahl's Law und Litttle's Law!
9. Wie kann die maximale Latenzzeit mit Hilfe von queues begrenzt werden?
9. Erklären Sie wie durch Verwendung von programmiersprachlichen Mitteln wie (composable) Futures bzw. Promises Parallelität bei der Verarbeitung von Anfragen ausgenutzt werden kann?
9. Durch welche Faktoren wird die Beschleunigung der Verarbeitung durch Parallelisierung begrenzt?
9. Erklären Sie den Begriff resilience und grenzen Sie ihn zu den Begriffen reliability und fault tolerance ab!
9. Zu welchem Zweck werden circuit-breaker eingesetzt und wie funktionieren sie?
9. Was ist die Rolle eines Supervisors in einer verteilten Service Architektur?
Erklären Sie das CAP Theorem!
9. Aus welchem Grund verzichtet man bei reactive systems soweit möglich auf die Forderung der strong consistency?
9. Erklären Sie die Probleme die aus network partitions entstehen anhand des hypothetischen Gmail Service!

## Tecchnisches Proof of Concept
Im Rahmen des technischen PoC soll sowohl eine sinnvolle Nutzung von externe Datenquellen als auch eine nicht-triviale zwischen Anwendungskomponentwen getestet werden. Dazu mag auch ein Szenarioals Anregung dienen:

Es solle eine Anwendung entwickelt werden, die für einige mögliche Ausflusziele eines Nutzers sowohl die Wetterbedingungungen als auch die Verkehrsverhältnisse für die Anreise überwacht und den Nutzer über signifikante Änderungen (Ereignisse) informiert. Für den Technischen PoC kommt es dabei nicht auf ausgefeilte Anwendungslogik an sondern im Wesentlichen auf den Informationsfluss zwischen den Softwarekomponenten. 

Ein mögliches ARchitekturdiagramm für das technische PoC (https://th-koeln.sciebo.de/s/ZKm6kp2VY40nZ4c)

## Material
- [Präsentation während der Veranstaltung](https://th-koeln.sciebo.de/s/kB6hDZKngecitEE)
- [RabbitMQ](https://www.rabbitmq.com/) - Open Source Message Broker
- [Clients und Developer Tools für RabbitMQ](https://www.rabbitmq.com/devtools.html)
- [Apache ActiveMQ](https://github.com/apache/activemq) - Open Source Message Broker
- [Apache Kafka](http://kafka.apache.org/) - A distributed streaming plattform

## Literatur
- Edward Steel et al.: Hootsuite: In Pursuit of Reactive Systems ([Link in die ACM DL](https://dlnext.acm.org/doi/abs/10.1145/3121437.3131240))
- J. Bonér et al.: Reactive Microsystems: The Evolution of Microservices at Scale, O'Reilly (siehe auch [Seite des Unternehmens Lightbend](https://www.lightbend.com/ebooks/reactive-microsystems-evolution-of-microservices-scalability-oreilly)), [Webinar](https://on.acm.org/c/acm-learning-webinars)
- Roland Kuhn: Reactive Design Patterns, Manning 2017, Da die Bibliothek geschlossen, hier ein Auszug für Ihren persönlichen Gebrauch (https://th-koeln.sciebo.de/s/lL0Qmu5Hq3OzNKB)
- Engineer Bainomugisha, Andoni Lombide Carreton, Tom van Cutsem, Stijn Mostinckx, and Wolfgang de Meuter. 2013. [A survey on reactive programming](http://dx.doi.org/10.1145/2501654.2501666). ACM Comput. Surv. 45, 4, Article 52 (August 2013), 34 pages
- Jack Moffitt: Professional XMPP Programming with JavaScript and JQuery, John Wiley 2010
- Saint-André et al.: XMPP - The Definitive Guide, O'Reilly 2009
- Dean Allemang, Jim Hendler: Semantic Web for the Working Ontologist, Morgan Kaufman 2014
- R.V. Guha et al.: Schema.org: Evolution of Structured Data on the Web, ACM QUEUE Vol. 13 Issue 9 2015
- Tim Berners-Lee: Linked Data, W3c 2006 [Web SEite](https://www.w3.org/DesignIssues/LinkedData)
