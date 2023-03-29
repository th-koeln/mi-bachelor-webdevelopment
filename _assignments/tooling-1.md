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

Installiere folgende Extensions in VS Code. Alternativ suche und installiere die Extensions direkt in VS Code.

- [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer)

---

## Aufgaben

### 1. SSH Key Anlegen (30 min)

1. Erstellen einen neuen SSH Key.
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

### 2. Repository in GitHub anlegen. (15 min) 

1. Erstelle ein neues Repository mit dem Namen `webdev-tooling` in GitHub. Andere Einstellungen wie das Hinzufügen einer _README_ oder  _.gitignore_ Datei können ignoriert werden.
2. Öffne das Terminal in VS Code und führe folgende Befehle aus. Alternativ kann sich auch an der Anleitung in dem zuvor erstellen Github-Repo orientieren.

```bash
echo "# webdev-tooling" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:"username"/webdev-tooling.git
git push -u origin main
```

### 3. Erste Website Erstellen (15 min)

1. Lade das zuvor erstellte Repository über SSH mit `git clone git@github.com:"username"/webdev-tooling.git` herunter.
2. Erstelle eine _index.html_ Datei und füge den Boilerplate Code mit dem Shortcut `!` hinzu.
3. Wenn die Live Server Extension installiert und aktiviert ist, starte den Server unter _Go Live_.
4. Editiere den Text innerhalb des `<Body>` Tags, um Änderungen im Browser sehen zu können. Die Html Datei könnte anschließend so aussehen:

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
5. Pushe die Änderungen in das Remote Repository auf Github.

### 4. Deployment mit GitHub Pages (10 min)

1. Öffne die Einstellungen deines zuvor erstellten Repositories in Github und navigiere zu `github.com/{username}/webdev-tooling/settings/pages`.
2. Unter _Build and deployment_ wähle den Main Branch und speichere, um den Deployment Prozess zu starten.
3. Um den Status zu beobachten, navigiere zurück zur Startseite des Repositories. Ein Oranger Punkt neben der letzten Commit Message gibt Hinweis auf den Fortschritt.
4. Unter `https://{username}.github.io/webdev-tooling/` sollte sich die Webseite nach dem Deployment aufrufen lassen.



### 5. Prettier Rc erstellen (30 min) (Bonus)

Nachdem Sie die Prettier extension installiert und aktiviert haben, fügen Sie eine `.prettierrc` Ihrem Repository hinzu und ergänzen folgende Funktionalitäten:

- Legen Sie die `tabWidth` auf _2_ fest.
- Setze am Ende jeder Zeile ein Semikolon.
- Ersetze `singleQutes` mit `doubleQuotes`.
- Setze die `printWidth` auf _120_.
- **[BONUS]** Ergänze `.prettierrc` um ein weiteres Attribut und teste dessen Auswirkung auf den Code.


