---
titel: Semantisches HTML 1
published: true
tags:
 - HTML
---

Wir werden zur Bearbeitung der Aufgaben GitHub Classroom nutzen. **Das Assignment, welches für diese Session erstellt wurde, ist über diesen [Einladungslink](https://classroom.github.com/a/RmdS1W08) erreichbar.** Wenn Sie auf den Link klicken, wird automatisch ein Repository, auf Basis des Assignments, erstellt.

Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin. Comitten und pushen ihre Änderungen in kurzen Intervallen in das entferne Repository, so dass eine **aussagekräfige Commit History** entsteht.

---

## HTML 1.1: Inhalte auszeichnen

Gestalterische Grundlage für diese Aufgabe ist eine Bachelorarbeit von Kephas Nguyen. Gegeben dazu ist der Inhalt als Markdown-Datei in der `_data/chapters/` und das Layout als PDF-Seiten in der `_data/mockups/`.

Erstellen Sie zuerst den Ordner `chapter` und darin eine Datei mit dem Namen `design-principles.html`.

Erzeugen Sie nun, auf Basis des Layouts und der Texte, semantisch sauberes Markup in der zuvor erstellten HTML-Datei. Lassen Sie dabei noch Strukturelemente wie `div`, `section` und `header` außen vor.

## HTML 1.2: Strukturelemente nutzen

Reichern Sie nun das Dokument mit semantischen Strukturelementen an. 


## HTML 1.3: Bild hinzufügen

Setzen sie nun den folgenden Text...

```md
![User Experience](../images/user-experience.png)
```

und fügen sie ein Bild-Element mit Bildunterschrift (siehe PDF) ein.

## HTML 1.4: Übersichtsseite und Navigation erstellen

Erzeugen Sie die Datei `index.html` im root Ordner. Fügen sie dort ein grobes Inhaltsverzeichnis mit dem Titel der Arbeit ein. 

Verlinken Sie die Kapitel-Seite `design-principles.html` den  Navigationspunkt `Design Principles` in der Datei `index.html` über eine absolute Referenz. Fügen Sie eine weitere absolute Referenz von der `design-principles.html` auf das Inhaltsverzeichnis ein.
