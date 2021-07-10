---
titel: SASS Refactoring
tags:
  - CSS
  - SASS
---

Diese Aufgabe baut auf [SASS Advanced Setup](../sass-02-advanced-setup/) auf.

## Step 1: Watchmode starten
Starten Sie im Terminal den Watchmode via `npm run watch`.

## Step 2: CSS in SASS überführen
Überführen Sie jetzt Ihre CSS Regeln in die SASS Dateien. Versuchen Sie alle zentralen Angaben/ Definitionen in das `_variables.scss` Partial auszulagern, z.B. Farben, Abstände, etc. Hier ein Beispiel des `_variables.scss` Partials.

```scss
/* Sizes
Using Lucas Numbers 1, 3, 4, 7, 11, 18, 29, 47, 76, 
---------------------------------------------------------------------------- */
$xs: 7px;
$s: 11px;
$m: 18px;
$l: 29px;
$xl: 47px;


/* Font Properties
---------------------------------------------------------------------------- */
$font-family-serif: PTserif;
$font-family-sans: PTsans;
$base-font-size: $m;
$font-icons: 'Material Icons';


/* Font Weights
---------------------------------------------------------------------------- */
$fw-light: 300;
$fw-normal: 400;
$fw-bold: 600;


/* Line Heights
---------------------------------------------------------------------------- */
$lh-tight: 100%;
$lh-default: 130%;
$lh-loose: 150%;

```