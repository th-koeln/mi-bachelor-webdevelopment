---
titel: SEO-Checkliste für Web-Frontend-Entwickler
published: true
tags:
 - HTML
 - CSS
---


## 1. Semantisches HTML
- [ ]&nbsp;Verwende semantische Tags (`<header>`, `<main>`, `<article>`, `<section>`, `<footer>`)
- [ ]&nbsp;Korrekte Verwendung von `<h1>` bis `<h6>` (nur ein `<h1>` pro Seite)
- [ ]&nbsp;Sinnvolle Dokumentstruktur ohne unnötige `<div>`-Schachtelungen
- [ ]&nbsp;Code ist valide

## 2. Meta-Tags und Head-Bereich
- [ ]&nbsp;`<title>` ist eindeutig und enthält relevante Keywords
- [ ]&nbsp;`<meta name="description">` vorhanden und beschreibt den Seiteninhalt kurz und präzise
- [ ]&nbsp;Canonical-Tag korrekt gesetzt (`<link rel="canonical" href="...">`)
- [ ]&nbsp;Optional: Open Graph & Twitter Cards für Social Media

## 3. Technische SEO
- [ ]&nbsp;Sitemap vorhanden und in `robots.txt` referenziert
- [ ]&nbsp;`robots.txt` korrekt konfiguriert
- [ ]&nbsp;hreflang-Tags bei mehrsprachigen Seiten korrekt gesetzt

## 4. Mobile-First & Responsiveness
- [ ]&nbsp;Viewport-Tag gesetzt: `<meta name="viewport" content="width=device-width, initial-scale=1">`
- [ ]&nbsp;Layout passt sich an verschiedene Bildschirmgrößen an
- [ ]&nbsp;Buttons/Links gut auf Touch-Geräten bedienbar

## 5. Performance & Core Web Vitals
- [ ]&nbsp;LCP (Largest Contentful Paint) < 2.5s
- [ ]&nbsp;FID (First Input Delay) < 100ms
- [ ]&nbsp;CLS (Cumulative Layout Shift) < 0.1
- [ ]&nbsp;Bilder optimiert (z. B. WebP, Lazy Loading)
- [ ]&nbsp;Ressourcen minifiziert und gebündelt

## 6. JavaScript & Rendering
- [ ]&nbsp;Inhalte sind auch ohne JS lesbar (Progressive Enhancement)
- [ ]&nbsp;SSR oder SSG verwenden (z. B. mit Next.js, Nuxt.js)
- [ ]&nbsp;Fallback-Inhalte bei clientseitig geladenem Content

## 7. Barrierefreiheit (Accessibility)
- [ ]&nbsp;Bilder mit sinnvollen `alt`-Attributen versehen
- [ ]&nbsp;ARIA-Roles nur wenn nötig, ansonsten native HTML-Tags
- [ ]&nbsp;Tastaturnavigation möglich
- [ ]&nbsp;Farbkontraste ausreichend

## 8. Interne Verlinkung & Navigation
- [ ]&nbsp;Navigationsstruktur mit `<nav>` und `<ul>` umgesetzt
- [ ]&nbsp;Sprechende Linktexte verwenden (nicht „hier klicken“)
- [ ]&nbsp;Kein JS-only Navigationsmenü ohne HTML-Fallback

## 9. Statuscodes & Fehlerseiten
- [ ]&nbsp;Korrekte HTTP-Statuscodes bei Weiterleitungen (301/302)
- [ ]&nbsp;Eigene 404-Seite vorhanden und benutzerfreundlich gestaltet
- [ ]&nbsp;Kein "Soft 404" (Seite sieht wie 404 aus, liefert aber 200 zurück)

## 10. Strukturierte Daten (Schema.org)
- [ ]&nbsp;JSON-LD Snippets für relevante Inhalte vorhanden (z. B. Produkte, Artikel)
- [ ]&nbsp;Mit dem Google Rich Results Test validiert

## 11. Nützliche Tools
- [ ]&nbsp;[Google Lighthouse](https://developers.google.com/web/tools/lighthouse)
- [ ]&nbsp;[PageSpeed Insights](https://pagespeed.web.dev/)
- [ ]&nbsp;[Google Search Console](https://search.google.com/search-console/)
- [ ]&nbsp;[Rich Results Test](https://search.google.com/test/rich-results)
- [ ]&nbsp;[Wave (Accessibility Tool)](https://wave.webaim.org/)
- [ ]&nbsp;[Screaming Frog SEO Spider](https://www.screamingfrog.co.uk/seo-spider/)