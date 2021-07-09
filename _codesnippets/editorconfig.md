---
titel: Editorconfig
autor: fg
tags: Tools
teasertext: Konfiguration der IDE über mehrere Maschinen vereinheitlichen
---

Es gibt wahrscheinlich tausend Meinungen darüber, ob 2 Spaces besser sind als 4 Spaces, oder ob Tabs oder Spaces verwendet werden sollen. Manchmal hängt dies auch von der verwendeten Programmiersprache ab. Um diese Einstellung dem Editor bekannt zu machen gibt es **Editorconfig**. Diese Datei wird von vielen Entwicklungsumgebungen, wie auch GiHub, unterstützt.

[Ein kleiner offizieller Guide dazu](https://editorconfig.org/).

## Editorconfig Beispiel

Für die 4 Spaces Fraktion:

`/.editorconfig`

```editorconfig
# EditorConfig is awesome: https://EditorConfig.org

# top-most EditorConfig file
root = true

[*]
indent_style = space
indent_size = 4
end_of_line = lf
charset = utf-8
trim_trailing_whitespace = false
insert_final_newline = false

[*.{md,markdown,yml,yaml}]
indent_size = 2
```

Für die 2 Spaces Fraktion:

`/.editorconfig`

```editorconfig
# EditorConfig is awesome: https://EditorConfig.org

# top-most EditorConfig file
root = true

[*]
indent_style = space
indent_size = 2
end_of_line = lf
charset = utf-8
trim_trailing_whitespace = false
insert_final_newline = false
```


## VSCode dafür auslegen
VSCode unterstützt diese Funktion leider nicht von Haus aus. Ein [Plugin](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig) wird benötigt.

Damit andere auf dieses Plugin aufmerksam werden kann dieses Plugin empfohlen werden:

`/.vscode/extensions.json`

```json
{
    "recommendations": [
        "editorconfig.editorconfig"
    ]
}
```
