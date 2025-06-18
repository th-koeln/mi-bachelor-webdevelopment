---
titel: JavaScript - Onpage Navigation
published: true
tags:
 - CSS
 - JS
---

In dieser Übung geht es darum die Onpage Navigation dynamisch anhand der Sektionen des Hauptinhalts zu generieren.

## Step 1
Entfernen Sie die Navigationspunkte aus der Onpage Navigation.

## Step 2
Reichern Sie das Element, in das die Menüpunkte generiert werden sollen, sowie die einzelnen Sektionen des Hauptinhalts mit data-Attributen an.

Jede Sektion muss dabei ein eindeutiges data-Attribut enthalten:

```
<ul data-js-page-navigation-menu=""> ... </ul>

<section data-js-page-navigation-section=""> ... </section>
```


## Step 3
Erstellen Sie die JavaScript-Logik zur automatischen Generierung einer Onpage-Navigation basierend auf den Sektionen der Seite:

* Iterieren Sie über alle Elemente, die das Attribut data-js-page-navigation-section besitzen.
* Selektieren Sie innerhalb jeder Sektion die erste Überschrift.
* Weisen Sie jeder Sektion eine eindeutige ID zu (z. B. lucas-cranach-der-aeltere, hans-cranach, etc.).
* Erzeugen Sie für jede dieser Sektionen ein entsprechendes Navigationselement innerhalb der vorgesehenen Navigationsstruktur.
* Die Navigationspunkte sollen:
  *	den Text der jeweiligen Überschrift anzeigen.
	*	als Link zur zugehörigen Sektion funktionieren (mittels `href="#sektion-id"`).
