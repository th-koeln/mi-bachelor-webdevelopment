---
titel: Semantisches HTML 1
published: true
tags:
 - HTML
---

Wir werden zur Bearbeitung der Aufgaben GitHub Classroom nutzen. **Das Assignment, welches für diese Session erstellt wurde, ist über diesen [Link folgt](#) erreichbar.** Wenn Sie auf den Link klicken, wird automatisch ein Repository, auf Basis des Assignments, erstellt.

Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin. Committen und pushen Sie ihre Änderungen in kurzen Intervallen in das entferne Repository, so dass eine **aussagekräfige Commit History** entsteht.

---

## 1.1: Basis aufbauen

Als Grundlage für diese und die folgenden Übungen dienen Projektergebnisse, welche im Rahmen von Screendesign im letzten Semester entstanden sind. 

Als Ausgangspunkt soll das Layout in der Datei `_data/mockups/biography-desktop.png` dienen 

Erstellen Sie zunächst folgende Verzechnisstruktur:

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

## 1.2: Inhalte auszeichnen
Erzeugen Sie nun, auf Basis des Layouts und der Texte, semantisch sauberes Markup in der`lucas-cranach.html`. Lassen Sie dabei noch Strukturelemente wie `div`, `section` und `header` außen vor.

## 1.3: Strukturelemente nutzen
Reichern Sie nun das Dokument mit semantischen Strukturelementen an. 

## 1.4: Bilder hinzufügen
Kopieren Sie alle Bilder aus dem Verzeichnis `_data/assets/images` in den Ordner `images`. Fügen Sie nun die Bild-Elementen hinzu.

## 1.5.: One Page Navigation
Erstellen Sie am Anfang der Seite eine Onepage Navigation. Dabei sollen die Links mit den entsprechenden Überschriften verknüpft werden.

## 1.6: Verlinkung erstellen
Verlinken Sie das Logo im Header und Footer jeweils mit der `index.html` und den Punkt „Lucas Cranach” mit der Datei `lucas-cranach.html`.
