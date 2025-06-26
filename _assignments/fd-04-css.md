---
titel: CSS Layouts
published: true
tags:
 - HTML
 - CSS
---

Wir werden zur Bearbeitung der Aufgaben wieder GitHub Classroom nutzen. Das Assignment, welches für diese Session erstellt wurde, ist über diesen Einladungslink erreichbar.

Wenn Sie auf den Link klicken, wird automatisch ein Repository, mit dem Startcode des Assignments, erstellt. Klonen Sie bitte anschließend das Repository auf ihren Rechner und bearbeiten Sie die Aufgaben darin.

## Ausgangspunkt & Zielsetzung

Der Ausgangspunkt ist der Code des Projekts aus der vergangenen Woche. Sie verfügen damit bereits über gut strukturiertes, vollständiges und semantisches HTML. Auch grundlegende Styles wurden bereits umgesetzt: Im Sinne eines Mobile-First-Ansatzes ist das Layout bisher eindimensional gestaltet – hauptsächlich entlang der vertikalen Achse (Y-Achse). Schriftgrößen und vertikale Abstände sind bereits sinnvoll definiert.

In dieser Einheit geht es darum, das Layout auch in die horizontale Richtung (X-Achse) zu erweitern und sich dabei möglichst genau am vorliegenden Figma-Entwurf zu orientieren. Hierfür kommen verschiedene Konzepte zum Einsatz, insbesondere CSS Flexbox und CSS Grid.

Dabei werden Sie feststellen – wie es auch im Berufsalltag von Frontend-Entwickler*innen üblich ist – dass trotz eines gut ausgearbeiteten Designs immer wieder Gestaltungslücken entstehen. Diese gilt es eigenständig und sinnvoll zu schließen.

## Material
- [Entwurf in Figma](https://www.figma.com/design/l6l8mAzypybBocowkfVwfH/FD----SoSe-2025?node-id=186-1382&m=dev&t=KsDdZQaVAYlqhZ98-1)
- [Github Classroom Assignment](https://classroom.github.com/a/uxxpp1lQ)

## Step 1: Navigation
Zunächst kümmern wir uns um die Navigation – ein Thema, das eigentlich bereits in der letzten Woche auf der Agenda stand. Ich habe es jedoch bewusst zurückgestellt.

Nun wollen wir die einzelnen Navigationselemente sinnvoll entlang der X-Achse verteilen. Dabei schauen wir uns gemeinsam an, wie sich dies am besten und strukturiert umsetzen lässt.

## Step 2: Fluides Layout
Im ersten Schritt realisieren wir ein sogenanntes Fluid Layout. Bei dieser Layoutform passt sich die Breite des Inhalts dynamisch an die Breite der Anzeigefläche an – idealerweise bis zu einem bestimmten Maximalwert.

Wenn wir uns das Layout genauer ansehen, erkennen wir Optimierungspotenzial: Beispielsweise sollen Bilder nur bis zu einem bestimmten Punkt mitwachsen oder sich in ihrer Größe begrenzen lassen.

Um dies umzusetzen, nutzen wir im Kern die CSS-Eigenschaft max-width.

## Step 3: Zweispaltiges Layout für Content und On-Page Navigation
Nun erzeugen wir für große Viewports ein zweispaltiges Layout wie im Entwurf vorgesehen. Hierfür nutzen wir vorzugsweise CSS Grid. CSS Flex würde auch funktionieren. 

## Step 4: Darstellung Lebenslauf und zweispaltige Bilder implementieren

Im zweiten Schritt optimieren Sie die Darstellung des Lebenslaufs sowie der zweispaltigen Bild-Layouts. Dabei stellt sich die Frage, ob Flexbox oder CSS Grid das jeweils geeignetere Layoutkonzept ist.

Genau diesen Vergleich werden wir gemeinsam anstellen: Sie setzen beide Ansätze um und analysieren deren Vor- und Nachteile anhand konkreter Anwendungsszenarien.

## Step 5: Navigation

Jetzt widmen wir uns der Navigation. Es gibt zwei Varianten: eine On-Page-Navigation und eine Hauptnavigation. Beide müssen bei zunehmender Anzeigefläche sinnvoll platziert und übersichtlich angeordnet werden.

## Step 6: Footer
Last but not least kümmern wir uns um den Footer. Dieser sollte selbstverständlich ebenfalls sauber gestaltet und strukturiert sein – idealerweise so, dass er sich harmonisch in das Raster einfügt. Genau das setzen wir jetzt um.