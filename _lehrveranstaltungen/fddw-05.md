---
titel: Meilenstein 2
kuerzel: fddw
verantwortlich: kf
typ: fddw
pflicht: false
termine: 2020-05-07 09:00
empfohlene-voraussetzungen: 
published: true
dauer: 480
raum: https://th-koeln.zoom.us/j/7684755654, Kennwort 116927
info: Heute geht es um …
---

## Worum geht es?
Das Ziel des Tages ist es
- Die mündliche Prüfung zum Grundlagenteil absolviert haben.
- den architekturellen PoC und die Abschlussräsentation bis 15:00 fertiggestellt zu haben
- Arbeit und Ergebnis des Projektteils  im Plenunm in 15 Minuten präsentiert haben

## Ablauf
09:00 - 13:00 Fachgespräche mit dem Dozenten zum Grubdlagenteil (20 - 30 Minuten pro Team) 
parallel Arbeit im Team, an der Fertigsellung des architekturellen PoC, individuelle Abstimmung mit Mentoren

14:00 - 17:00 Vorstellung und Diskussion des Projekteils und des architekturellen PoC im Plenum

## Bewertungskriterien für die Projektarbeit und -präsentation
Die Bewertung des Projektteils erfolgt auf Basis der Projektpräsentation und der im Repository hinterlegten Artefakte. Für die Präsentation sollte eine Folienpräsentation mit Notizen erstellt werden. Aus den Notizen sollen die Begründungen, Überlegungen und Alternativen für die Artefakte hervorgehen, die auch mündlich vorgetragen werden.

Die Bewertungskriterien sind im Folgenden aufgeführt. Jeweils sind neben den Artefakten die Begründungen und die Betrachtung von Alternativen wichtig.
1. Das System leistet etwas signifikantes für die Nutzer: eine aus dem Problermszenario abgeleitete signifikante Anwendungslogik wurde modelliert, umgesetzt und die Verteilungauf mehrere Softwarekomponenten realisiert.
2. Qualität der Modellierung der Kommunikation über Topics/Queues: insbesondere soll eime umfangreiche und dem Problemszenario angemessene Nutzung dieser Kommunikation erfolgt sein.
3. Verteilung der Anwendungslogik auf mehrere Prozesse: die Anwendungslogik muss auf mehrere Prozesse verteilt sein und die location transparency so sollte so gegeben sein, dass eine Verteilung des Systems auf mehrere Rechner möglich ist.
4. Prozess der Erarbeitung, Teamarbeit: ein iteratives Vorgehen findet sich im Repository, alle Teammitglieder liefern einen signifikanten Beitrag an der Erstellung des Systems 

Jedes der Kriterien wird mit 25 Punkten bewertet auf der Basis des Standes bei der Präsentation. Bei den Kriterien 1 und 3 können bei Nacharbeit bis spätestens 10.5. jeweils 10 Punkte erworben werden, um Mängel auszugleichen. Die Bacharbeit ist dann im Wiki des github zu dokumentieren. 


## Material
- [RabbitMQ](https://www.rabbitmq.com/) - Open Source Message Broker
- [Clients und Developer Tools für RabbitMQ](https://www.rabbitmq.com/devtools.html)
- [Apache ActiveMQ](https://github.com/apache/activemq) - Open Source Message Broker
- [Apache Kafka](http://kafka.apache.org/) - A distributed streaming plattform

## Literatur
- Edward Steel et al.: Hootsuite: In Pursuit of Reactive Systems ([Link in die ACM DL](https://dlnext.acm.org/doi/abs/10.1145/3121437.3131240))
- J. Bonér et al.: Reactive Microsystems: The Evolution of Microservices at Scale, O'Reilly (siehe auch [Seite des Unternehmens Lightbend](https://www.lightbend.com/ebooks/reactive-microsystems-evolution-of-microservices-scalability-oreilly)), [Webinar](https://on.acm.org/c/acm-learning-webinars)
- Roland Kuhn: Reactive Design Patterns, Manning 2017
- Engineer Bainomugisha, Andoni Lombide Carreton, Tom van Cutsem, Stijn Mostinckx, and Wolfgang de Meuter. 2013. [A survey on reactive programming](http://dx.doi.org/10.1145/2501654.2501666). ACM Comput. Surv. 45, 4, Article 52 (August 2013), 34 pages
- Jack Moffitt: Professional XMPP Programming with JavaScript and JQuery, John Wiley 2010
- Saint-André et al.: XMPP - The Definitive Guide, O'Reilly 2009
- Dean Allemang, Jim Hendler: Semantic Web for the Working Ontologist, Morgan Kaufman 2014
- R.V. Guha et al.: Schema.org: Evolution of Structured Data on the Web, ACM QUEUE Vol. 13 Issue 9 2015
- Tim Berners-Lee: Linked Data, W3c 2006 [Web SEite](https://www.w3.org/DesignIssues/LinkedData)
