# Tooling Session 4 - Deployment

## Material

* [Installation von Cloud Server](install-cloud-server)
  * https://www.digitalocean.com/
  * **Wichtig** Es muss eine eigene Domain verwendet werden, die Domain `todo-demo.codelater.de` kann nicht genutzt werden.
* Express.js Demo App (inkl. Historie): https://github.com/code-later/todo-demo.codelater.de

## Übersicht der behandelten Themen

### Was ist ein Release

### Was ist "Deployment"?

- Inbetriebsetzung

### Unterschiedliche Release Methode / Spezifika für unterschiedliche Art Software

- Fokus auf Web-Anwendungen

### Aspekte einer Umgebung

- Performance
- Sicherheit
- Abhängigkeiten
- Monitoring
- Updates
- Datenbank
- usw.

### Unterschiedliche Arten von Umgebungen

- Entwicklung
- Staging
- Production
- beliebige / nötige weitere Umgebungen

### Unterschiedliche Schwerpunkte bei den Umgebungen

- Zielkonflikte zwischen Entwicklung und Betrieb
- DevOps

### Unterschiedliche Abstraktionsebenen von Umgebungen

- Bare Metal
- VMs in der Cloud
- Heroku
- k8s (Kubernetes)
- Kein "richtig" oder "falsch", kein goldener Weg
	- Abhängig von
		- Anforderungen der Software
		- Anforderungen des Produkts
		- Möglichkeiten im Team
		- **Wichtig** Entscheidung nicht "aus Versehen" treffen
- Hands-On
	- Ziel
		- Was wird abstrahiert?
	- Beispiel-App
		- Node.js
		- Web-App
		- Mit DB (ohne Persistenz ist alles trivial)
	- VM provisionieren (fast wie Bare Metal)
	- Heroku nutzen

### Weiterführung von CI -> CD

### Gute QA im voraus

### Jede Änderung an die Kunden ausliefern

### Gutes Monitoring nötig

- Logging
- Application Performance Monitoring (APM)
- Exception Tracking
- Real User Monitoring (RUM)
- Hands-On
  - Web-App von vorhin via CD deployen
  - Diese Punkte haben wir nichht mehr behandelt
    - Monitoring einrichten
    - Monitoring anschauen
    - Dinge zerstören
    - Recovery

