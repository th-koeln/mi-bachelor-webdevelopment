---
titel: Semantisches HTML 1
published: true
tags:
 - HTML
---

Wir werden zur Bearbeitung der Aufgaben GitHub Classroom nutzen. **Das Assignment, welches für diese Session erstellt wurde, ist über diesen [Einladungslink](https://classroom.github.com/a/vhzxm6lR) erreichbar.** Wenn Sie auf den Link klicken, wird automatisch ein Repository, auf Basis des Assignments, erstellt.

Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin. Committen und pushen Sie ihre Änderungen in kurzen Intervallen in das entferne Repository, so dass eine **aussagekräfige Commit History** entsteht.

---

## 1.1: Inhalte auszeichnen

Als Grundlage für diese und die folgenden Aufgaben dient ein Projektergebnis, welches im Rahmen von Screendesign im letzten Semester entstanden ist. Es geht um die Strukturierung der Projektübersichtsseite und der About-Seite.

Als Ausgangspunkt für die Übersichtsseite soll das Layout in der Datei `_data/mockups/Desktop/El-Fraygui-Kellner-Desktop-02.png` dienen und für die About-Seite die die Textdatei `_data/content/abaout/about-the-project.md`.

Erstellen Sie zunächst folgende Verzechnisstruktur

```
root/
│
├── index.html
│
├── pages/
│   ├── about/
│   │   └── about-the-project.html
│
└── images/
```


Erzeugen Sie nun, auf Basis des Layouts und der Texte, semantisch sauberes Markup in den zuvor erstellten HTML-Dateien. Lassen Sie dabei noch Strukturelemente wie `div`, `section` und `header` außen vor.

## 1.2: Strukturelemente nutzen
Reichern Sie nun die Dokumente mit semantischen Strukturelementen an. 

## 1.3: Bilder hinzufügen
Kopieren Sie alle Bilder aus dem Verzeichnis `_data/assets/images` in den Ordner `images`. Fügen Sie nun die Bild-Elementen in der Übersichtsseite hinzu.

## 1.4.: One Page Navigation
Erstellen Sie am Anfang der About-Seite eine Onepage Navigation. Dabei sollen die Links mit den entsprechenden Überschriften verknüpft werden.

## Aufgabe 1.5: Verlinkung erstellen
Erstellen sie im Footer der Übersichtseite einen Link mit der Beschriftung „Über das Projekt” und verlinken sie die entsprechende Seite über eine absolute Referenz.
