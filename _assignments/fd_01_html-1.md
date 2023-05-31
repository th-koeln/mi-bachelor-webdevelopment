---
titel: Semantisches HTML 1
published: true
tags:
 - HTML
---

Wir werden zur Bearbeitung der Aufgaben GitHub Classroom nutzen. **Das Assignment, welches für diese Session erstellt wurde, ist über diesen [Einladungslink](https://classroom.github.com/a/1ocSJd2T) erreichbar.** Wenn Sie auf den Link klicken, wird automatisch ein Repository, auf Basis des Assignments, erstellt.

Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin. Committen und pushen Sie ihre Änderungen in kurzen Intervallen in das entferne Repository, so dass eine **aussagekräfige Commit History** entsteht.

---

## 1.1: Inhalte auszeichnen

Als Grundlage für die folgenden  dienen Inhalte von der Webseite [Chefkoch](https://www.chefkoch.de). Es geht um die Strukturierung einer Übersichts- und Rezeptseite.

Der Inhalt befindet sich in Markdown-Dateien im Verzeichneis `_data/content/` und das Layout als PDF-Seiten im Verzeichnis `_data/mockups/`.

Erstellen Sie zuerst eine `index.html` Datei im root Ordner, unterhalb des root Ordners einen Ordner mit dem Namen `recipes` und darin eine Datei mit dem Namen `spaghetti-aglio-olio-e-peperoncino.html`

Erzeugen Sie nun, auf Basis des Layouts und der Texte, semantisch sauberes Markup in den zuvor erstellten HTML-Dateien. Lassen Sie dabei noch Strukturelemente wie `div`, `section` und `header` und den Kommentarblock und das Formular außen vor.

## 1.2: Strukturelemente nutzen

Reichern Sie nun die Dokumente mit semantischen Strukturelementen an. 


## 1.3: Bilder hinzufügen

Erzeugen Sie zunächst das Verzeichnis `images` im root Ordner.

Kopieren Sie anschließend alle Bilder aus dem Verzeichnis `_data/images/` in den Ordner `images`.

Fügen Sie nun alle Bild-Elemente mit Bildunterschriften  (siehe PDF-Dokument) ein.

## 1.4.: One Page Navigation

Erstellen Sie am Anfang der Rezeptseite eine One Page Navigation mit folgenden Links:
* Inhaltsverzeichnis
* Einleitung
* Zutaten
* Rezept
* Nährwerte
* Über den Autor
* Kommentare

Dabei sollen die Links mit den entsprechenden Überschriften verknüpft werden.

## Aufgabe 1.5: Verlinkung erstellen
Verlinken Sie die Übersichtsseite an entsprechender Stelle mit der Rezeptseite über eine absolute Referenz und den Punkt „Menü” in der Hauptnavigation auf der Rezeptseite mit der Übersichtsseite.
