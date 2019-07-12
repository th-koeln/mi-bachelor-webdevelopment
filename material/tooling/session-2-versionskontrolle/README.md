# Tooling Session 2 - Versionskontrolle

## Material

* [Git Objekte ohne git erstellen](manual-git.rb)
* [Verschiedene Befehle während der Demos](git-basics.org)

## Übersicht der behandelten Themen

### Social Coding

### Warum wird Kollaboration immer wichtiger?

### Welche Anforderungen an das Tooling gibt es?

### Was ist Versionskontrolle?

#### Wie man es nicht macht. Stichwort: Dateien mit "Versionsnamen"

#### Welche Fragen sollen damit beantwortet werden?

#### Kurzer Abriss von damals bis heute.

### Checkliste

- git installiert?
- SSH Client installiert?
- SSH Key?
- SSH Key based Authentifizierung zur ADVM1?
- SSH Agent?
- vim?

### git

#### Was ist git?

#### Basiskommandos von git

#### Wie funktioniert git (High Level)

#### Was passiert in `.git` Verzeichnis?

- Objekte inspizieren
	- `git cat-file`
- Objekte manuell hinzufügen
	- Mit Ruby
	- `git hash-object`
- Was ist diese Working Copy?
- Was ist "das Repository"?
- `git clone --bare`

#### Hands-On (Basics)

- Repo erstellen
- gitignore
- Commits hinzufügen
	- `git add`
	- `git add -p`
	- Was ist mit Verzeichnissen?
- Commits bearbeiten
	- `git commit --amend`
	- `git revert`
- Historie einsehen
	- `git log`
		- Einige Optionen
	- `git show`
	- Was ist der `HEAD`

#### Wie kann ich effektiver arbeiten?

- Branches!
- Hands-On (Branches)
	- Branch erstellen
	- Mehrere Branches haben
	- Branch zurückführen
	- `git reset --hard`
	- `git reset --soft`
	- Unterschied `merge` und `rebase`
	- `git rebase --interactive`
	- `git reflog`
	- Die Verwendung des Stashes

#### Gemeinsam an einer Code-Base arbeiten

- lokale Änderungen anderen zukommen lassen
- Via Email
- Via anderem (dezentralem) Repo
- Signieren von Commits

#### Hands-On (Sharing)

- `git format-patch`
- `git init --bare REPO_NAME.git`
- `git am`
- `git send-email`
- `git clone`
	- Lokal
	- Remote
- `git daemon`
	- Zugriff via SSH **nur** auf das Repo
- `git request-pull`
- `git blame`
- GPG Key erstellen und Commits signieren
- `git instaweb`
- Hooks \o/
	- Sind nicht Teil des Codes und werden daher auch nicht verteilt

- **Aufgabe**
	- Pull Request als Dateien ablegen (erstellt durch `git request-pull`)
	- Dateien als Markdown mit YAML Frontmatter
	- Automatische Release Notes nach dem ein Branch gemerged wurde
	- Issues (in Form von Dateien) `#fixes 201` schließen

#### Geht das auch komfortabler?

- Git Forges
- Was gibt es neben GitHub noch?
- Vorteile
- Einige Features
- Magische Dateien

#### Workflows mit git

- GitHub Workflow

#### Hands-On (GitHub)

- GitHub Pages

#### Hands-On (Workflows)

- `git tag` als erster Ausblick Richtung Release

