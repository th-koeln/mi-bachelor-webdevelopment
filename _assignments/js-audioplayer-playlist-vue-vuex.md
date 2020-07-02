---
titel: Javascript // Playlist und Audioplayer mit Vue.js und Vuex
tags: Javascript
---



Dieses Assignment baut grob auf den Ergebnissen der vergangenen Assignments und der Development-Challenge auf.

[Github Classroom Assignment](https://classroom.github.com/g/_hI1yUMF) zur Bearbeitung der Aufgaben.


Im Rahmen dieses Assignments soll der Umgang mit Vue.js als Front-End-Framework und Vuex für das Central State Management geübt werden.

Dazu soll soll die Maiwochen Page um einen zentralen Audioplayer erweitert werden. Dieser soll in Kombination mit der bereits existierenden Playlist funktionieren und als zentrale Abspiel-Komponente auch die Abspiellogik (Stop, Prev, Next) beinhalten.

Für die Audiofunktion setzen wir auch hier auf die Web Audio Library [howler.js](https://howlerjs.com/). Diese ist für Sie bereits in der `maiwoche.html` eingebunden.


Als Einstiegspunkt dient das Modul unter `scripts/main.vue.js`, wo Sie sich für den Import von Komponenten und deren Mounting in das DOM bewegen werden. Auch hier müssen Sie sich nicht um die Einbindung kümmern, da das Modul bereits in der `maiwoche.html` referenziert wird.


Styles und Markup sind gegeben, damit Sie sich komplett auf Vue.js und Vuex konzentrieren können.


## Info: Einbindung von Vue.js und Vuex
Vue.js und Vuex können sowhl als normale Scripts als auch ECMAScript-Module eingebunden werden.
In der Übungsaufgabe wurde dies bereits für Sie vorbereitet.

Dennoch hier als kleine Übersicht:

### Als ECMAScript-Modul

| Package | URL                                                          |
| ------- | ------------------------------------------------------------ |
| Vue.js  | https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.esm.browser.js |
| Vuex    | https://cdnjs.cloudflare.com/ajax/libs/vuex/3.5.1/vuex.esm.browser.js |


*Beispiel* 
```javascript
import Vue from 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.esm.browser.js';
```


### Als normales Script

| Package | URL                                                          |
| ------- | ------------------------------------------------------------ |
| Vue.js  | https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js |
| Vuex    | https://cdnjs.cloudflare.com/ajax/libs/vuex/3.5.1/vuex.js |


*Beispiel* 
```html
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js"></script>
```


## Step 1: Store um State, -Mutations und -Actions für Audioplayer ausbauen
In der `scripts/store/index.js` finden Sie eine vordefinierte Store- und State-Struktur.
Erweitern Sie die State-Struktur um sinnvolle Felder, um darüber den Audioplayer-State halten zu können.
Im selben Rahmen sind auch Mutation- und Action-Funktionen zu schreiben, um über diese den State mutieren zu können.

Überlegen Sie welche Informationen die Audioplayer-Komponente benötigt, um den Song abspielen und Song-Metadaten ausgeben zu können.


Sofern Sie sich nur auf die Audioplayer-Komponente konzentrieren möchten, finden sie eine grob ausgearbeiten Store-Struktur in unter `last-resort/store.js`.


## Step 2: Einbindung der Audioplayer-Komponente und initiale Ausarbeitung
Für die Audioplayer-Komponente soll sich im ersten Schritt darum gekümmert werden, über den Store an die aktuellen Song-Daten zu kommen.
Schreiben sie dafür entsprechende ComputedValues und binden die Daten an das Template (Artist, Titel usw.). Nutzen sie hierfür die Vue-Directives.

Vergessen Sie nicht das Audioplayer-Element in der `maiwoche.html` anzugeben und es auch zu mounten.


## Step 3: 
Nutzen sie howler.js um in der Audioplayer-Komponente einen Song abzuspielen, der über die Playlist ausgewählt wurde. (Tipp: Nutzen sie einen Watcher innerhalb des Audioplayers, um auf State-Änderungen zu reagieren)


## Step 4 (Optional): 
Implementieren Sie die restliche Funktionalität wie Prev und Next (Tipp: greifen sie im Store auf den Playlist-State zurück).
Sofern Ihnen mehr Funktionen einfallen, können Sie versuchen auch diese umzusetzen (z.B. Progress- / Seekbar).
Die howler.js [API-Dokumentation](https://github.com/goldfire/howler.js#documentation) bietet ihnen da einen guten Überblick über die Kontrollmöglichkeiten und Daten die abgefragt werden können.
