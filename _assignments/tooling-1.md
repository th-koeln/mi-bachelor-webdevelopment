---
titel: Kickoff Tooling
tags:
  - Tooling
published: true
---

Mit diesen Aufgaben wollen wir Ihnen einen kleinen Einblick in einige Features von VSC geben. Wir haben versucht, die Aufgaben so aufzubauen, dass wenig bis kein Verständnis von HTML, CSS und JS notwendig ist, um sie zu lösen. Bei Fragen: fragen.

---

## Vorbereitung

### Gitlab Account freischalten

Schalten Sie Ihren Gitlab Account unter [git-ce.rwth-aachen.de](https://git-ce.rwth-aachen.de/) frei. Nutzen Sie dazu ihre Campus-Id Anmelde Daten.

### Extensions in Visual Studio Code

Installieren Sie folgende Extensions in VS Code. Alternativ suche und installiere die Extensions direkt in VS Code.

- [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer)

Optional

- [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [Live Share](https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare)
- [Live Preview](https://marketplace.visualstudio.com/items?itemName=ms-vscode.live-server)
- [Custom Properties](https://marketplace.visualstudio.com/items?itemName=Tock.vscode-css-custom-properties)
- [PlatformIO IDE](https://marketplace.visualstudio.com/items?itemName=platformio.platformio-ide)
- [Git Graph](https://marketplace.visualstudio.com/items?itemName=mhutchie.git-graph)

---

## Aufgaben

### 1. SSH Key Anlegen (30 min)

- [SSH Key Generieren](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent?platform=mac)

Öffnen Sie das Terminal und führen Sie die folgenden Befehle aus. Unter Windows können Sie alternativ auch Git Bash verwenden. Eine Passphrase muss nicht gesetzt werden.

1. Erstellen einen neuen SSH Key. Ko

```bash
ssh-keygen -t ed25519 -C "<comment>"
```

2. Starte den SSH-Agenten im Hintergrund.

```bash
# macOS
eval "$(ssh-agent -s)"
```

```powershell
# windows
Get-Service -Name ssh-agent | Set-Service -StartupType Manual
Start-Service ssh-agent
```

3. Überprüfe, ob eine `~/.ssh/config` Datei existiert.

```bash
vim ~/.ssh/config
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

6. Öffne [git-ce.rwth-aachen.de/-/profile/keys](https://git-ce.rwth-aachen.de/-/profile/keys) und hinterlege den zuvor erstellten Key deinem Account.

```bash
cat ~/.ssh/id_ed25519.pub
```

### 2. Repository in Gitlab forken. (15 min)

1. Forken Sie folgendes Repository [git-ce.rwth-aachen.de/micgn/webdev/frontend-development/kickofff](https://git-ce.rwth-aachen.de/micgn/webdev/frontend-development/kickoff) und fügen Sie es ihrem Gitlab Namespace hinzu.
   Alle anderen Einstellungen können Sie auf den Standardwerten belassen. Anschließend clonen Sie das Repository und öffnen Sie es in VS Code.

2. Navigieren Sie in ein gewünschtes Verzeichnis und führen Sie folgenden Befehle aus, um das Repository zu clonen und anschließend in VS Code zu öffnen.

```bash
# Beispiel
cd Desktop # Navigiere in das Desktop Verzeichnis
git clone git@git-ce.rwth-aachen.de:{username}/kickoff.git
cd kickoff
code . # Shell Command um VS Code zu öffnen
```

3. Erstellen Sie einen neuen Branch, um spätere Änderungen zu speichern.

```bash
git checkout -b kickoff
```

### 3. Änderungen auf Gitlab pushen (15 min)

1. Öffnen Sie die `index.html` und ergänzen Sie folgende Zeile dem Body Tag in Zeile 15, um die `main.js` Datei mit dem HTML Dokument zu verknüpfen.

```html
<script type="text/javascript" src="main.js"></script>
```

2. Ändern Sie den Wert der `myName` Variable in der `main.js` Datei in einen beliebigen neuen Wert.

```javascript
// Beispiel
const myName = "Hello, World!";
```

3. Bestätigen Sie Ihre Änderungen im Browser, indem Sie den Live Server starten. Sind Sie mit Ihren Änderungen zufrieden, überprüfen Sie den Status Ihres Repositories und pushen Sie anschließend Ihre Änderungen ins Remote Repository auf Gitlab

```bash
# Beispiel
git status
git add .
git commit -m "[FEATURE] link main.js to index.html"
git push origin kickoff
```

4. Der Branch `kickoff` sollte nun auf Gitlab sichtbar sein. Öffnen Sie das Repository auf Gitlab und erstellen Sie einen Merge Request. Der Branch `kickoff` kann anschließend lokal gelöscht werden.

```bash
git checkout main
git branch -D kickoff
```
