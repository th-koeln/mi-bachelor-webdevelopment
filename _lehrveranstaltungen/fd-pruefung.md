---
titel: Prüfung // Coding Challenge
kuerzel: fd
verantwortlich: cn
typ: fd
pflicht: false
termine: 2025-09-25 09:00
empfohlene-voraussetzungen: 
published: true
dauer: 270
raum: 3.216
info: 
---


## Bewertung & Niveaustufen

Die Bewertung erfolgt entlang der folgenden Niveaustufen:

### Beste Lösung
- Features im Wert von 40 Storypoints sind vollständig umgesetzt und funktionieren
- die Änderungen für die Features sind in der Commit Historie ersichtlich und verständlich erklärt
- alle Features sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In ein sehr gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat 
- die Änderungen wurden im Sinne der Projektstruktur in den passenden Dateien gemacht
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von Nesting & Custom Properties, robustes Javascript)

### Gute Lösung
- Features im Wert von 30 Storypoints sind vollständig umgesetzt und funktionieren
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- die Änderungen wurden im Sinne der Projektstruktur in den passenden Dateien gemacht
- der erzeugte Code zeigt, dass der Verfasser\*In ein gutes Verständnis der zugrunde liegenden Technologien und Konzepte hat
- der erzeugte Code ist nachvollziehbar, selbsterklärend und effizient (semantisches HTML, Nutzung von Nesting & Custom Properties, robustes Javascript)

### Passable Lösung
- Features im Wert von 20 Storypoints sind vollständig umgesetzt und funktionieren mit kleinen Ausnahmen
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- alle Features sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In ein grundlegendes Verständnis der zugrunde liegenden Technologien und Konzepte hat

### Akzeptable Lösung
- Features im Wert von 15 Storypoints sind vollständig umgesetzt und funktionieren überwiegend
- die Änderungen für die Features sind in der Commit Historie ersichtlich
- die Änderungen sind gepusht
- der erzeugte Code zeigt, dass der Verfasser\*In die zugrunde liegenden Technologien und Konzepte in wesentlichen Teilen verstanden hat


## Hinweise zur Prüfung

Bitte beachten Sie folgende Punkte:

1. Lesen Sie die Aufgaben gründlich durch. Nicht nur kurz überfliegen, dann drauf los hacken und nachher feststellen, dass die Aufgabe ganz anders gemeint war oder gar schon einen Teil der Lösung enthielt ;)
2. Mergen Sie alle Änderungen in den *main*-Branch, denn nur den schauen wir uns an.
3. Machen Sie einen Commit pro Aufgabe. Wenn es nicht anders geht, können es auch mehrere Commits pro Aufgabe sein, aber am Besten nur einer. Die ID der Aufgabe gehört in die Commit Message.
5. Beachten Sie die Zeitschätzungen bei den Aufgaben. Diese geben Ihnen auch ein Hinweis auf die Komplexität der Aufgabe.
7. Nehmen Sie sich Zeit um die Verzeichnisstruktur und bereits gegebenen Code zu erfassen.
9. Nutzen Sie so gut es geht die bereits definierten CSS Custom Properties (variables.css).
10. Achten Sie darauf, dass der finale Code valide ist. Nutzen Sie also den [W3C Validator](https://validator.w3.org/nu/#textarea). Und achten Sie auch darauf, dass Stylelint möglichst wenig bis keine Fehler ausgibt.

## Eigenständigkeit der Leistung

Wir möchten sicherstellen, dass Sie die Prüfung bestmöglich absolvieren können, daher möchten wir einige wichtige Regeln und Richtlinien hervorheben:

1. Eigenständige Leistung
Die Coding-Prüfung erfordert, dass Sie die Features eigenständig umsetzen. Externe Hilfe von Personen in Echtzeit ist nicht gestattet. Wir legen großen Wert darauf, Ihre individuellen Fähigkeiten und Ihr Wissen zu bewerten.

2. Externe Quellen und KI-gestützte Tools
Sie dürfen externe Quellen wie Online-Dokumentationen, externe Libraries, Foren und Bücher sowie KI-gestützte Tools nutzen, um Informationen und Lösungsansätze zu finden. Wir ermutigen Sie, diese Ressourcen effektiv zu nutzen, um Ihre Lösungen zu verbessern.

3. Kennzeichnung von fremdem Code
Falls Sie Teile eines Codes von externen Quellen übernehmen, seien Sie transparent und kennzeichnen Sie diese Stellen eindeutig. Dies dient der Transparenz und ermöglicht es uns, Ihre Leistung fair zu bewerten. In der Regel erkennen wir fremden Code sehr schnell.

4. Kommunikation mit anderen Teilnehmern
Die Kommunikation mit anderen Teilnehmern während der Prüfung ist nicht gestattet. Dies schließt jegliche Form der Zusammenarbeit bei der Lösung der Features aus.

Wir vertrauen darauf, dass Sie diese Regeln respektieren und die Prüfung in Übereinstimmung mit den genannten Richtlinien absolvieren. Wir wünschen Ihnen viel Erfolg und hoffen, dass Sie Ihr Wissen und Ihre Fähigkeiten optimal präsentieren können.

Bei Fragen oder Unklarheiten stehen wir Ihnen gerne zur Verfügung.

## Material

* Texte, Daten und Bilder: im `_data` Verzeichnis
* [Layouts in Figma](https://www.figma.com/design/3KKkL5VKsVbmP7pJuF2SAc/FD----SoSe-2025----Pr%C3%BCfung?node-id=169-3628&t=75LdrdJbnTgU4paZ-1)
* Assignment auf [GitHub Classroom](https://classroom.github.com/a/Ps7_AMM9)

## Tasks

### F1: HTML auf Validität prüfen

Prüfen Sie mit dem [W3C Validator](https://validator.w3.org/nu/#textarea) ob die *index.html* valide ist. Falls nicht, passen Sie bitte die Datei entsprechend an. 

Dauer: 10 Minuten  
Storypoints: 1  
Techniken: HTML  

### F2: Stylelint Integration
Integrieren Sie Stylelint in das Projekt. Richten Sie Stylelint so ein, dass es die CSS Dateien im `assets/styles` Verzeichnis überprüft.

Dauer: 15 Minuten  
Storypoints: 2  
Techniken: Konfiguration  


### F3: CSS in der Lucas Cranach Biografie reparieren

In der Datei `/persons/biography-lucas-cranach.html` ist das CSS nicht korrekt eingebunden. Passen Sie die Datei so an, dass die Seite wieder ordnungsgemäß dargestellt wird und die Styles geladen werden.

Dauer: 5 Minten  
Storypoints: 1  
Techniken: HTML  

### F4: Schaltfläche mit Icon für Darkmode hinzufügen
Fügen Sie in der `main-header` Komponente eine Schalfläche mit Icon für den Darkmode hinzu. Die Schaltfläche soll zwischen der Lupe und dem Hambuger positioniert werden und das Material Icon `dark_mode` nutzen.

Dauer: 10 Minuten  
Storypoints: 1  
Techniken: HTML  

### F5: Wechsel zwischen Darkmode und Lightmode implementieren

Die Schaltfläche aus *F4* soll als Umschalter zum Wechsel zwischen Darkmode und Lightmode dienen. Beim Betätigen soll der Darkmode aktiviert werden und beim erneuten Betätigen soll wieder in den Lightmode gewechselt werden.

Das Icon der Schaltfläche soll dabei zwischen dem Material Icon `dark_mode` und `light_mode` wechseln.

Auf der geasamten Seite soll im Darkmode heller Text auf dunklem Hintergrund angezeigt werden. Im Lightmode soll dunkler Text auf hellem Hintergrund angezeigt werden. Der Footer soll dabei außer Acht gelassen werden.

**Hinweis:**
Zur Anpassung der Farben für die Texte und Hintergründe müssen ein Teil der Custom Properties in der `variables.css` überschrieben werden. Nutzen Sie dazu die vordefinierte Klasse `dark-mode` in selbiger Datei.

Dauer: 20 Minuten  
Storypoints: 3  
Techniken: CSS, JS

### F6: Local Storage für Darkmode / Lightmode
Beim Wechsel zwischen Darkmode und Lightmode soll der aktuelle Mode im Local Storage des Browsers gespeichert werden. Beim Laden der Seite soll die Einstellung aus dem Local Storage gelesen und der entsprechende Mode aktiviert werden.

Dokumentation zum Local Storage: [MDN Web Docs - Window.localStorage](https://developer.mozilla.org/docs/Web/API/Window/localStorage)

Dauer: 15 Minuten  
Storypoints: 3  
Techniken: JS

### F7: Info-Sektion hinzufügen
Ergänzen Sie die Startseite um die Info-Sektion unterhalb der Slideshow in der `index.html`. 

Entscheiden Sie sich dabei für Variante A oder B, oder setzen Sie beide Varianten um.

Achten Sie bei Variante B auf die Transition, wenn mit der Maus über die einzelnen Info-Karten gefahren wird.

Das Layout dazu finden Sie im Figma Projekt unter `05-info-section` und die Texte und Bilder im `_data` Verzeichnis.

Die mobilen Ansicht soll bei dieser Aufgabe sinnvoll nach eigenem Ermessen umgesetzt werden.

#### Variante A
Dauer: 40 Minuten  
Storypoints: 6  
Techniken: HTML, CSS  

#### Variante B
Dauer: 60 Minuten  
Storypoints: 8  
Techniken: HTML, CSS

### F8: Video-Text Sektion hinzufügen
Ergänzen Sie die Startseite um die Video-Text Sektion unterhalb der Info-Sektion in der `index.html`.

Das Layout dazu finden Sie im Figma Projekt unter `06-video-col-text-col` und die Texte im `_data` Verzeichnis.

Die mobilen Ansicht soll bei dieser Aufgabe sinnvoll nach eigenem Ermessen umgesetzt werden.

Die URL des Videos, welches eingebunden werden soll, ist: `https://lucascranach.org/media/cda-intro-1200.mp4`

Dokumentation zum HTML5 Video Element: [MDN Web Docs - HTML `<video>` element](https://developer.mozilla.org/docs/Web/HTML/Element/video)

Dauer: 30 Minuten  
Storypoints: 4  
Techniken: HTML, CSS


### F9: Links im Header ergänzen und stylen
Fügen Sie in der `main-header` Komponente die fehlenden Links in der Navigationsleiste hinzu. Die URLs der Links sollen auf `#` zeigen.

Farbe der Links: `var(--color-text-default)`
Hover-Farbe der Links: `var(--color-primary-600)`

Die Farbe soll über eine Transition wechseln.

Dauer: 10 Minuten  
Storypoints: 3  
Techniken: HTML, CSS


### F10: Aktuelles Seite (aktuelles) erstellen und verlinken
Erzeugen Sie eine neue Seite `aktuelles.html` im Hauptverzeichnis. Die Seite soll den gleichen Header und Footer wie die `index.html` Seite enthalten.

Fügen Sie zudem die Hauptüberschrift "Aktuelles" hinzu.

Verlinken Sie im Hauptmenu den Punkt "Aktuelles" mit der `aktuelles.html` Seite.

Dauer: 15 Minuten  
Storypoints: 3  
Techniken: HTML, CSS


### F11: Aktuelles Seite erstellen - Hauptsektion
In der `aktuelles.html` soll die Hauptsektion mit den Aktuelles-Einträgen erstellt werden. Hier gibt es zwei mögliche Varianten, Eine mit statischem HTML und Eine mit JavaScript. Entscheiden Sie sich für eine Variante.

Lassen Sie das Formular bei der Bearbeitung dieser Aufgabe außen vor.

Das Layout dazu, inklusive mobiler Ansicht, finden Sie im Figma Projekt.

Bitte validieren Sie die HTML Seite mit dem [W3C Validator](https://validator.w3.org/nu/#textarea).


#### Variante F11 A: Statischer Inhalt
Ergänzen Sie die Aktuelles-Einträge für die Jahre 2024 und 2025 um den Hauptbereich mit statischem HTML Code. Die Texte und Bilder finden Sie im `_data` Verzeichnis.

Dauer: 50 Minuten  
Storypoints: 8  
Techniken: HTML, CSS

#### Variante F11 B: Dynamischer Inhalt
Erzeugen Sie die Aktuelles-Einträge dynamisch via JavaScript. Die Daten für die Einträge finden Sie in der `news.json` im `_data` Verzeichnis.

Dauer: 60 Minuten  
Storypoints: 10  
Techniken: HTML, CSS, JS

### F12: Sektion „Neuer Aktuelles-Eintrag”
Fügen Sie in der `aktuelles.html` Seite im unteren Bereich die Sektion "Neuer Aktuelles-Eintrag" ein.

Achten Sie darauf, dass das Formular nur abgeschickt werden kann, wenn die Pflichtfelder ausgefüllt sind.

Das Layout dazu, inklusiver mobiler Ansicht, finden Sie im Figma Projekt.

Das Styling für das Formular ist weitgehend in der `form.css` Datei bereits vordefiniert, muss allerdings noch an richtiger Stelle importiert werden.


Dauer: 45 Minuten  
Storypoints: 6  
Technikn: HTML, CSS  

### F13: Aktuelles-Eintrag hinzufügen
Beim Abschicken des Formulars soll ein neuer Aktuelles-Eintrag auf Basis der Formulardaten erzeugt werden.

Zur Vereinfachung soll der neue Eintrag immer ganz oben in der Liste der Einträge eingefügt werden.

Dauer: 45 Minuten  
Storypoints: 6  
Techniken: JS  

#### Bonusaufgabe F13a: Aktuelles-Eintrag der Jahresgruppe zuordnen
Der neue Eintrag soll beim Abschicken des Formulars der Jahresgruppe zugeordnet werden, die dem Datum im Formular entspricht.

D.h. wenn der Nutzer bspw. als Datum den 10.10.2024 eingegeben hat, soll der Aktuelles-Eintrag in die Gruppe des Jahres 2024 eingefügt werden. Wenn die Jahresgruppe noch nicht existiert, soll sie neu erzeugt werden.

Dauer: 20 Minuten  
Storypoints: 5  
Techniken: JS  

### F14: Sektionen für die Jahre ein- und ausklappbar machen
Damit die Seite übersichtlicher wird, sollen die Jahres-Sektionen einklappbar sein.

Standardmäßig sollen alle Sektion, bis auf die des aktuellen Jahr, eingeklappt sein.

Tipp: Die Verwendung des Details-Elements kann hier hilfreich sein und bringt einen großen Teil der Funktionalität mit.

Dauer: 45 Minuten  
Storypoints: 6  
Techniken: HTML, CSS, JS


## Bugfixes
### F11 B
In der Datei `/_data/json/news.json` fehlt im Attribut-Wertpaar  
`"image": "cranach-in-basel",` die Dateiendung `.jpg`.

