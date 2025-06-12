---
titel: Semantisches HTML 1
published: true
tags:
 - HTML
---

Wir werden zur Bearbeitung der Aufgaben GitHub Classroom nutzen. **Das Assignment, welches für diese Session erstellt wurde, ist über diesen [Link](https://classroom.github.com/a/IHOmgQ50) erreichbar.** Wenn Sie auf den Link klicken, wird automatisch ein Repository, auf Basis des Assignments, erstellt.

Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin. Committen und pushen Sie ihre Änderungen in kurzen Intervallen in das entferne Repository, so dass eine **aussagekräfige Commit History** entsteht.

---

## 1.1: Basis aufbauen

Als Grundlage für diese und die folgenden Übungen dienen Projektergebnisse, welche im Rahmen von Screendesign im letzten Semester entstanden sind. 

Als Ausgangspunkt soll das Layout aus dem [Figma File](https://www.figma.com/design/l6l8mAzypybBocowkfVwfH/FD----SoSe-2025?node-id=186-1382&m=dev&t=KsDdZQaVAYlqhZ98-1) dienen.

Erstellen Sie zuerst folgende Verzechnisstruktur:

```
root/
│
├── index.html
│
├── persons/
│   └── lucas-cranach.html
│
└── assets/
    └── images/
```

Zunächst geht es um die Strukturierung der Biografie Seite `lucas-cranach.html` von Lucas Cranach der Ältere, Hans Cranach und Lucas Cranach der Jüngere.  
Der Startseite `index.html` werden wir uns zu einem späteren Zeitpunkt widmen. Fügen Sie deshalb in der `index.html` nur das HTML Grundgerüst ein.

Bitte validieren Sie die HTML Datei mit dem [W3C Markup Validation Service](https://validator.w3.org).

## 1.2: Inhalte auszeichnen
Erzeugen Sie nun, auf Basis des Layouts und der Texte, semantisch sauberes Markup in der`lucas-cranach.html`. Lassen Sie dabei noch Strukturelemente wie `div`, `section` und `header` außen vor.

## 1.3: Strukturelemente nutzen
Reichern Sie nun das Dokument mit semantischen Strukturelementen an. 

## 1.4: Bilder hinzufügen
Kopieren Sie alle Bilder aus dem Verzeichnis `_data/assets/images` in den Ordner `images`. Fügen Sie nun die Bild-Elemente hinzu.

## 1.5: Onpage Navigation
Erstellen Sie am Anfang der Seite eine Onpage Navigation. Dabei sollen die Links mit den entsprechenden Überschriften verknüpft werden.

## 1.6: Verlinkung erstellen
Verlinken Sie das Logo im Header und Footer jeweils mit der `index.html` und den Punkt „Lucas Cranach” mit der Datei `lucas-cranach.html`.
