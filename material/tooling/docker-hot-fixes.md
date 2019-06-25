# Docker Hot-Fixes 
#### Docker funktioniert nicht richtig auf deiner Maschine? Hier ein paar Fixes die du ausprobieren kannst um das Problem zu beheben.

- Sind in irgendeiner Form Leerzeichen in dem Pfad der zu deinem momentanen Projekt führt?
   - Docker läuft in einem Linux sub-system. Linux kann mit Leerzeichen in Pfaden nicht umgehen. Kopiere dein Projekt also wo anders hin oder setze “ ” um den Pfad in den Docker Befehl.
   - Zb. *docker run -it  -p 80:80 -v **“C:/Users/sebastian faust/Documents/Coding/mi-bachelor-webdevelopment”**:/var/www/html kirby*
- Machst du in irgendeiner form eine “mounting”? Also wird eine lokale directory mit einer directory im container verbunden? (erkennbar an folgender struktur *-v “directory auf deinem rechner”:”directory im container”*)
   - Überprüfe einmal ob mounting generell funktioniert mit folgendem command:
   ```bash
   docker run --rm -v c:/Users:/data alpine ls /data
   ```
   - Wenn nicht, setze einmal in docker unter settings/shared Drives die Rechte zurück und starte den Rechner neu.
   - Dann gebe die Laufwerke wieder frei.
- Hast du eine Windows maschine und verwendest die CMD?
   - Versuche mal den Command in der Powershell auszuführen.
   - Die CMD unterstützt viel neuere features nicht und soll auch auf kurz oder lang abgeschafft werden.
   - Eventuell reicht es also schon den Command einfach in der Powershell aus zu führen.

## Commands und Npm 
In unserem Modul verwenden wir häufig npm scripts um euch das Tippen von langen Docker Commands zu erleichtern. 
Normalerweise kann man in der bash/powershell pfade wie *${pwd}/scr/index.html”
verwenden um sich auf die momentane working directory zu beziehen. Npm kann pwd allerdings nicht auflösen, 
daher funktionieren solche npm scripts nicht.
Besser ist hier eine *docker-compose.yml* zu erstellen. 
In eine compose file können pfade auch mit *./* beschrieben werden.

Das Npm script sähe dann so aus (wenn die compose file in derselben directory liegt):
```npm-package
"docker": "docker-compose up"
```

Die docker-compose.yml sähe ungefär so aus:
```yml
version: "3.7"
services: 
  kirby-service:
    image: kirby
    ports:
      - 80:80
    volumes:
      - ./src:/var/www/html 
```
