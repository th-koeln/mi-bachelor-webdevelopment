---
titel: Workshop 2
kuerzel: fddw
verantwortlich: db
typ: fddw
pflicht: false
termine: 2021-06-10 09:00
empfohlene-voraussetzungen: 
published: true
dauer: 480
raum: zoom-fddw
info: Heute geht es um … 
---

## Worum geht es?
Das Ziel des Tages ist es
- Fragen und Erkenntnisse aus dem Studium der Literaturaufgabe in der Diskussion geklärt haben,
- den Fortschritt bei der Erreichung der individuellen Kompetenzziele mit den Mentoren besprochen haben und die Kompetenzziele ggfs. verfeinert zu haben,
- ein git repository für die Teamarbeit eingerichtet haben und über issues und backlog die anstehenden Aufgaben dokumentiert haben
- erste proof-of-concepts lauffähig vorführen zu können
- einen im git dokumentierten Plan für die Aktivitäten bis zum Beginn des nächsten Termins vorstellen

## Ablauf
14:00 - 15:00 Diskussion der Literaturaufgabe

15:00 - 15:30 Pause

15:30 - 17:00 Diskussion des Stands der individuellen Kompetenzziele, Arbeit am Projekt, individuelle Abstimmung mit Mentoren

17:00 - 18:00 Wrap-Up, Q&A

## Aufgabe für die kommende Veranstaltung
- Erarbeiten Sie individuell aus den im Grundlagenteil vorgestellten Konzepten und aus den Kapiteln 4 (Message Passing), 5 (Location Transparency) und 6 (Dive and Conquer) der Monographie von Kuhn die wesentlichen Begriffe und Zusammenhänge! Nutzen Sie dazu die Leitfragen (Link kommt noch)!
- Arbeiten Sie individuell an den den mit Ihren Mentoren identifizierten Kompetenzzielen und dokumentieren Sie Ihre Arbeit im Lernportfolio!
- Erarbeiten Sie im Team den technischen PoC, sodass er spätestens während des nächsten PoC fertiggestellt werden kann!

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
- [RabbitMQ](https://www.rabbitmq.com/) - Open Source Message Broker
- [Clients und Developer Tools für RabbitMQ](https://www.rabbitmq.com/devtools.html)
- [Apache ActiveMQ](https://github.com/apache/activemq) - Open Source Message Broker
- [Apache Kafka](http://kafka.apache.org/) - A distributed streaming plattform

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

