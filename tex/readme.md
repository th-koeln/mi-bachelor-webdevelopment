Es gibt nun einen Branch `hydeMD`, in dem im Ordner `tex/hydeMD` das kleine Script `hydeMD.php` liegt.

Funktioniert wie folgt:

```cli
php hydeMD.php ../../_selbstbericht Selbstbericht
```

`../../_selbstbericht` kann ein Ordner (rekursive Suche nach Markdown-Files) oder auch ein Markdown-File sein.
`Selbstbericht` ist der Title-Wert, der überall im Template-File eingetragen wird, wo der dazugehörige `title`-Platzhalter vorliegt (`<| title |>`).

Im Ordner `output` wird dann ein neuer Ordner mit allen notwendigen Latex-Files (und dem zusammengestellten Markdown-File aus den einzelnen Selbsbericht-Files) erstellt.
Momentan liegt schon eine Version des Selbstberichts drin. Wie man aber sehen kann, gibt es hier und da noch kleinere Probleme mit den Tabellen und SVG-Files, die per `includegraphic` eingebunden werden. Aber die Fußnoten scheinen schon mal zu funktionieren.

Dein Template für den Selbstbericht `tex/selbstbericht/selbstbericht.tex` habe ich übernommen, und etwas angepasst (`snippets/header.tex` ins Hauptfile gezogen, wegen Schwierigkeiten mit der Referenzierung).
Es bildet die Basis für alle Latex-Files (`default.tex`). Gäbe es ein `selbstbericht.tex`-Templatefile, würde das im oberen Beispiel anstelle von `default.tex` genommen werden.


## Mehrere Docs auf dem Mac zusammenfügen:

```
"/System/Library/Automator/Combine PDF Pages.action/Contents/Resources/join.py" -o medieninformatik-anhaenge-sonstige.pdf sonstige/*.pdf
```

## Cover erzeugen

`php hydeMDCoverCreator.php modulbeschreibungen-bachelor.tex title=Titel`

Er sucht standardmäßig im `templates/coversheet`-Ordner nach dem Template.
Wenn alles reibungslos ablief, sollte in `output/_coversheets` ein neuer Ordner mit dem Latex-Dokument liegen.

Möchte man mehrere Ersetzungs-Parameter mitgeben, dann sollte das so aussehen:

`...  "title=Title;date=2017-02-23" `