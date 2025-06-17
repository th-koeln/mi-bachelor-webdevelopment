---
titel: JavaScript - Tab Navigation
published: true
tags:
 - CSS
 - JS
---

In dieser Übung geht es darum die Onpage Navigation dynamisch anhand der Sektionen des Hauptinhalts zu generieren.

## Step 1
Entfernen Sie die Navigationspunkte aus der Onpage Navigation.

## Step 2
Reichern Sie das Element, in das die Menüpunkte generiert werden sollen, sowie die einzelnen Sektionen des Hauptinhalts mit Data-Attributen an.

Jede Sektion muss dabei ein eindeutiges data-title-Attribut enthalten:

```
<section data-title="Lucas Cranach der Ältere"> ... </section>
<section data-title="Hans Cranach"> ... </section>
<section data-title="Lucas Cranach der Jüngere"> ... </section>

```


## Step 3
Erstellen Sie die JS Logik zur Generierung der Onpage Navigation:

* iterieren Sie mit JavaScript über alle Sektionen, die ein data-title-Attribut besitzen
* weisen Sie jeder dieser Sektionen automatisch eine eindeutige id zu (z. B. lucas-cranach-der-ältere, hans-cranach, etc.)
* erzeuge Sie für jede dieser Sektionen ein Navigationselement innerhalb der Navigation
*	die Navigationspunkte sollen den Wert des jeweiligen data-title-Attributs anzeigen und zur entsprechenden Sektion verlinken
