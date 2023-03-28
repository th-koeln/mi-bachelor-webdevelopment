---
titel: Ugly Code Example
tags:
  - Tooling
published: true
---

Mit diesen Aufgaben wollen wir Ihnen einen kleinen Einblick in einige Features von VSC geben. Wir haben versucht, die Aufgaben so aufzubauen, dass wenig bis kein Verständnis von HTML, CSS und JS notwendig ist, um sie zu lösen. Bei Fragen: fragen.

---

## Vorbereitung

### Extensions in Visual Studio Code

Installieren Sie folgende Extensions in VS Code. Alternativ suchen und installieren Sie die Extensions direkt in VS Code.

- [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer)

---

## Aufgaben

### 1. SSH Key Anlegen (30 min)

1. Erstelle einen neuen SSH Key.

```bash
ssh-keygen -t ed25519 -C "your_email@example.com" 
```

2. Starte den SSH-Agenten im Hintergrund.
```bash
eval "$(ssh-agent -s)"
```

3. Überprüfe, ob eine `~/.ssh/config` Datei existiert. 
```bash
cat ~/.ssh/config
```
4. Falls die Datei nicht existiert, erstelle sie und ergänze folgende Zeilen.
```bash
Host *
  AddKeysToAgent yes
  IdentityFile ~/.ssh/id_ed25519
```

5. Hinterlege die neue Identität.
```bash
ssh-add ~/.ssh/id_ed25519
```

6. Öffne [github.com/settings/keys](https://github.com/settings/keys) und hinterlege den zuvor erstellten Key deinem Account.
```bash
cat ~/.ssh/id_ed25519.pub
```


### 2. Erste Website Erstellen (15 min)

1. Erstellen Sie einen Ordner `webdev-tooling` und öffnen Sie ihn in VS Code.
2. Erstellen Sie eine _index.html_ Datei und fügen Sie den Boilerplate Code mit dem Shortcut `!` hinzu.
3. Wenn Sie die Live Server Extension installiert und aktiviert haben, starten Sie den Server unter _Go Live_.
4. Editieren Sie den text innerhalb des `<Body>` Tags, um Änderungen in Ihrem Browser sehen zu können. Ihre Html Datei könnte anschließend so aussehen:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script>
      console.log("hello");
    </script>
    <style>
      h1 {
        color: red;
      }
    </style>
  </head>
  <body>
    <h1>Hallo, Web Dev!</h1>
  </body>
</html>
```

5. Öffnen Sie das Terminal in VS Code und fügen Sie den Node Package Manager mit `npm init` hinzu.
6. Editieren Sie die


### 3. Repository anlegen und verlinken. (15 min) 

1. Erstellen Sie ein neues Repository mit dem Namen `webdev-tooling` in GitHub. Andere Einstellungen wie das Hinzufügen einer _README_ oder  _.gitirgnore_ Datei können ignoriert werden.
2. Öffne das Terminal in VS Code und führe folgende Befehle aus. Alternativ könnt Ihr euch auch an der Anleitung in dem zuvor erstellen Github-Repo orientieren.

```bash
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:"username"/webdev-tooling2.git
git push -u origin main
```

### 4. Deployment mit GitHub Pages (10 min)

1. Öffne die Einstellungen deines zuvor erstellten Repositories in Github und navigiere zu `github.com/{username}/webdev-tooling/settings/pages`.
2. Unter _Build and deployment_ wähle den Main Branch und speichere, um den Deployment Prozess zu starten.
3. Um den Status zu beobachten, navigiere zurück zur Startseite des Repositories. Ein Oranger Punkt neben der letzten Commit Message gibt Hinweis auf den Fortschritt.
4. Unter `https://{username}.github.io/webdev-tooling/` sollte sich die Webseite nach dem Deployment aufrufen lassen.



### 5. Prettier Rc erstellen (30 min) (Bonus)

Nachdem Sie die Prettier extension installiert und aktiviert haben, fügen Sie eine `.prettierrc` Ihrem Repository hinzu und ergänzen folgende Funktionalitäten:

- Legen Sie die `tabWidth` auf _2_ fest.
- Lösche jedes Semikolon automatisch am Ende jeder Zeile.
- `singleQutes`sollen immer mit `doubleQuotes` ersetzt werden.
- Setze die `printWidth` auf _120_.
- **[BONUS]** Ergänze `.prettierrc` um ein weiteres Attribut und teste dessen Auswirkung auf den Code.


