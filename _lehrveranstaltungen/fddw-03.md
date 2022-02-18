---
titel: Meilenstein 1
kuerzel: fddw
verantwortlich: db, mf
typ: fddw
pflicht: false
termine: 2022-06-02 13:00
empfohlene-voraussetzungen: 
published: true
dauer: 240
raum: zoom-fddw
info: Heute geht es um …
---

## Worum geht es?
Das Ziel des Tages ist es
- Fragen und Erkenntnisse aus dem Studium der bisherigen Literaturaufgaben in der individuellen Diskussion mit dem Dozenten vertreten haben,
- den Fortschritt bei der Erreichung der individuellen Kompetenzziele mit den Mentoren besprochen haben und die Kompetenzziele ggfs. verfeinert zu haben,
- den technischen PoC im Plenum vorgestellt und im Fachdiskurs vertreten zu haben,
- Teams gebildet zu haben,  
- Ziele und Aufgabenaufteilung für die zweite Projektphase definiert und im git dokumentiert zu haben

## Ablauf
13:00 - 15:00 Diskussion der Literatur des heutigen Termins

15:00 - 17:00 Vorstellung und Diskussion der technischen PoC im Plenum

## Aufgabe für die kommende Veranstaltung
- Erarbeiten Sie individuell aus den im Grundlagenteil vorgestellten Konzepten und aus dem unten angegebenen Artikel von Guha über Schema.org ein Verständnis von strukturierten, offenen Daten im Web. Recherchieren Sie zu dem Thema möglichst mindestens eine weitere Quelle in der Sie ebenfalls arbeiten! 
- Arbeiten Sie individuell an den den mit Ihren Mentoren identifizierten Kompetenzzielen und dokumentieren Sie Ihre Arbeit im Lernportfolio!
- Erarbeiten Sie im Team an dem architekturellen PoC!

## Problenszenarien für den architekturellen PoC

### Koordination von Reisegruppen
Nina und Paul gehören einer weit verzweigten Familie an, die jedes Jahr über das Himmelfahrtswochenende einen gemeinsamen Kurzurlaub auf einer Berghütte in den Schweizer Alpen verbringen. Diue Koordination gestaltet sich äusserst schwierig und ist ineffektiv:

- Teile der Familie leben in unterschiedlichen Städten in Deutschland, der Schweiz und Frankreich
- Sie Reisen mit unterschiedlichen Verkehrsmitteln an: Fahrgemeinschaft, Zug, Flugzeug/Mietwagen
- Sie nutzen unterschiedliche Kommunikationskanäle: manche sind in Messaging Gruppen in WhatsApp, Signal, Threema verbunden, andere nutzen nur E-Mail oder gar nur Telefon
- Informationen über Wetter, Lawinenlage, Verkehrbehinderungen (Zug, Auto, Flug), Veranstaltungen im Talort werden von Einzelnen wahrgenommen aber nur sporadisch geteilt.

Da Nina und Paul Medieninformatik an verschiedenen Hochschulen studieren, haben Sie sich vorgenommen in einem gemeinsamen Projekt einen "Kommunikationskanal zu konzipieren, der es allen Familienmitgliedern erlaubt über enen Kanal zu kommunizieren und aktuelle Informationen (zu Wetter, Verkehr, ..) zu erhalten, sofern Sie dies wünschen.
Nina und Paul möchten dieses Projekt in einer ersten Version in Github entwickeln und dabei auch eine Cousine, die noch Schülerin ist beteiligen. Später möchten Sie es zu einem Open Source GitHub Projekt machen und versuchen eine Communityy zu etablieren, die ein System entwickelt, das einen über das spezielle Familienszenarion hinaus generell die Koordination von "inhomogenen" Gruppen (Vereine, Klassentreffen, ...) ermöglicht. Nina und Paul wollen neben dem Spaß an dieser Arbeit durch dieses Projekt auch ein "Vorzeigeprojekt" für spätere Bewerbungen erreichen.

### Kolonisation des Mars

In den letzten Jahren ist das Ziel einer Kolonialisierung des Mars deutlich konkreter und realistischer geworden. Weltraumorganisationen, wie NASA oder SpaceX, planen erste bemannte Missionen ab 2030.
Für diese Kolonialisierung sind geeignete IT-Systeme notwendig. So müssen Astronauten über Änderungen bestimmter Messwerte informiert werden und zusätzliche Daten zu den eigenen Aufgaben erhalten. Außerdem müssen die Astronauten auch mit Informationen von zu Hause versorgt werden, um die eigene Moral hoch zu halten. Hinzu kommt, dass eine einfache Übertragung im Schnitt zwischen 13 und 24 Minuten dauert, was zusätzlich berücksichtigt werden muss. Darüber hinaus sollen die Astronauten auch erstmals Zugriff auf Daten aus dem Internet erhalten.
Die NASA möchte daher eine geeignete Testimplementierung für webbasierte Systeme in einer Marsstation, welche die Kommunikation von der Erde zur Station, sowie innerhalb der Station erlaubt. Da die Station aus einzelnen Modulen besteht, die untereinander kommunizieren müssen, welche aber nicht zwangsweise über eine einheitliche Schnittstelle verfügen, soll eine übergeordnete und eventbasierte Architektur implementiert werden. Diese Architektur soll eine asynchrone Kommunikation zwischen den einzelnen Modulen erlauben, sodass Astronauten Informationen über Luftdruck, Temperaturen oder andere relevante Daten erhalten können.
Hinzu kommt, dass derartige Systeme üblicherweise geschlossene Systeme sind - also ohne Verbindung zum Internet. Da auf Dauer auch ein interplanetares Internet geschaffen werden soll gilt es geeignete Services zu implementieren, welche Daten aus dem Web verwenden. Dabei verlangt die NASA die Verwendung von Open Data Portalen, um den Astronauten so viel Informationen wie möglich zukommen zu lassen.

## Leitfragen für den Grundlagenteil

1. Für welchen Zweck wurde Schema.org entwickelt?
2. Was ist die Bedeutung der Knoten und Kanten in dem Graph in Abbildung 1  (Guha)?
3. Welche Informationen finden sich in den Formaten hCalendar, FOAF?
4. Was versteht man unter einem Knowledge Graph?
5. Was ist Zweck und Aufbau von JSON-LD?
6. Was ist die Begründung für die Einführung von Polymorphismus in schema.org?
7. Was ist das Ziel des vom W3C betreuten Formats RDF?
8. Was versteht man unter exttensions in Schema.org und warum wurden sie eingeführt?

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
- Dean Allemang, Jim Hendler: Semantic Web for the Working Ontologist, Morgan Kaufman 2014
- R.V. Guha et al.: Schema.org: Evolution of Structured Data on the Web, COMMUNICATIONS OF THE ACM | FEBRUARY 2016 | VOL. 59 | NO. 2,https://doi.org/10.1145/2844544
- Tim Berners-Lee: Linked Data, W3c 2006 [Web SEite](https://www.w3.org/DesignIssues/LinkedData)
- T. Tanon et al.: From Freebase to Wikidata: The Great Migration, WWW 2016, April 11–15, 2016, Montréal, Québec, Canada.
ACM 978-1-4503-4143-1/16/04. http://dx.doi.org/10.1145/2872427.2874809
- schema.org: Getting started with Schema.org, https://schema.org/docs/gs.html Letzter Abruf: 21.4.20
- sq digital: What Is Schema Markup And How Structured Data Can Benefit Your Business, https://www.sqdigital.co.uk/insights/what-is-schema-markup-and-how-structured-data-can-benefit-your-business/ Letzter Abruf: 21.4.20
- S. Staab et al.: Structured Knowledge on the Web 7.0, WWW ’18 Companion, April 23–27, 2018, Lyon, France, https://doi.org/10.1145/3184558.3190666


