---
titel: KickOff, lokale Entwicklungsumgebung und Basics
kuerzel: tooling
verantwortlich: chh, cn
typ: tooling
pflicht: false
termine: 2023-03-30 10:00
empfohlene-voraussetzungen:
published: true
dauer: 120
raum: 0.505
info: Eine Einführung in Git, die Verwendung eines Terminals und die Verwendung einer IDE
---

## Worum geht es?

- VS Code Benutzeroberfläche
- Die wichtigsten Kurzbefehle
- Extensions am Beispiel von Prettier und Live Server
- Kurzer Einblick in Git und GitHub
- SSH Key Erstellung für GitHub


## Was muss ich vorbereiten?

### Code Editor

Alle sollten [Visual Studio Code](https://code.visualstudio.com/) oder einen anderen guten Code Editor auf ihrem Rechner installiert haben. Dazu gibt es weiter unten ein kleines Video (die Bootstrap Extension brauchen wir nicht) und hier noch die [offiziellen Tipps vom VSC Team](https://code.visualstudio.com/docs/getstarted/tips-and-tricks).

Es wäre gut, wenn alle die [Live Share-Erweiterung](https://visualstudio.microsoft.com/de/services/live-share/) für VSC installiert hätten. Dies ist sehr praktisch, wenn es um die parallele Entwicklung oder Hilfe bei Problemen geht. Dabei wird nicht nur der aktuelle Code live geteilt, sondern auch etwaige zugehörige Server, z.B. für Jekyll oder React.

### Versionskontrolle

Auf allen Rechnern muss [git](https://git-scm.com/downloads) installiert sein. Wir nutzen git ausschließlich via Terminal. Folgende Aktionen sollten für Sie kein Problem darstellen: Repo anlegen, Repo clonen, Commits erzeugen, Änderungen auf den Remote pushen, Änderungen vom Remote holen, Branches erstellen, Branches mergen, Branches löschen, Mergekonflikte beheben.

Die Windows nutzer sollten das [Windows Subsystem for Linux (WSL)](https://docs.microsoft.com/de-de/windows/wsl/install-win10) installiert haben und Sie sollten sich mit den Funktionalitäten vertraut gemacht haben. Kleiner Trick für WSL: wenn man in einem beliebigen Ordner mit einem „normalen“ Windows Terminal ist, kann man mit dem Befehl „wsl“ das WSL starten und ist direkt im aktuellen Ordner und kann Linux Befehle ausführen. Man kann auch in VS Code WSL als Standard-Shell festlegen, ansonsten kann man dort auch per „wsl“ das Subsystem starten und ist direkt im richtigen Ordner.

### Terminal & SSH Client

Alle brauchen auf ihrer Maschine eine Terminal Anwendung. Windows Nutzern würden wir die Preview-Version vom neuem Windows Terminal empfehlen. Hier lassen sich verschiedene Shells (CMD, WSL, PowerShell, etc.) in einem Fenster mit mehreren Tabs öffnen. Das [Terminal ist im Microsoft Store zum Download](https://www.microsoft.com/store/productId/9N0DX20HK701) verfügbar. Für alle Betriebssysteme gibt es auch eine Reihe an Alternativen, z.B. [iTerm](https://www.iterm2.com/downloads.html), [Putty](https://www.putty.org/), [Hyper](https://hyper.is/) oder [Kitty](https://sw.kovidgoyal.net/kitty/).

## Aufgabe

- [Assignment Tooling 1](/mi-bachelor-webdevelopment/assignments/tooling-1/)

## Material

- [Terminal Cheatsheet](https://github.com/th-koeln/mi-bachelor-webdevelopment/blob/master/material/tooling/TerminalCheatSheet.pdf)
- [GitHub updates RSA SSH host key](https://github.blog/2023-03-23-we-updated-our-rsa-ssh-host-key/)
- [Prettier Configuration](https://prettier.io/docs/en/configuration.html)
- [SSH Key generieren](https://docs.github.com/en/github/authenticating-to-github/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
- [gitignore.io](https://www.gitignore.io/)
- [Visual Studio Code MacOS Cheat Sheet](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-macos.pdf)
- [Visual Studio Code Windows Cheat Sheet](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf)
