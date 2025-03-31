---
titel: Kickoff Tooling
tags:
  - Tooling
published: true

---

Mit dieser kleinen Übung möchten wir Sie für die kommenden Web Development Sessions handlungsfähig machen.

---

## Übungen

### GitHub Account anlegen und konfigurieren

Legen Sie sich einen GitHub Account an.  
[GitHub Account anlegen](https://github.com/signup)

Erstellen Sie lokal auf ihrer Maschine einen SSH Key.  
[SSH Key generieren](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)

Hinterlegen Sie den Public Key auf ihrem GitHub Account.  
[SSH Key auf GitHub hinterlegen](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account)

### Assignment annehmen

Nehmen Sie folgendes GitHub Classroom Assignment an:

[GitHub Assignment](https://classroom.github.com/assignment-invitations/fe19652c9f8c2f43324ee49bb31dfe37)

### Repository erstellen, ersten Commit erstellen und pushen

* Erstellen Sie ein lokales Verzeichnis.
* Initialisieren Sie in diesem Verzeichnis ein Repository.  
  `git init`
* Erzeugen Sie darin eine `README.md` und befüllen Sie diese mit Text.  
  `echo "# tooling-session-testproject-vschaefer" >> README.md` 
* fügen Sie die Readme Datei der Staging Area hinzu.  
  `git add README.md`
* Committen Sie die Änderungen.  
  `git commit -m "first commit"`
* Verknüpfen Sie das lokale Repository mit dem Remote-Repository auf GitHub.  
  `git remote add origin git@github.com:mi-classroom/tooling-session-testproject-vschaefer.git`
* Übertragen Sie die lokalen Änderungen in das Remote-Repository.  
  `git push -u origin main`
