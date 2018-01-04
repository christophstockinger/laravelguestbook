# Gästebuch mit Laravel erstellen
Präsentation des PHP-Frameworks Laravel in meinem Studienfach "Spezialthemen der Medieninformatik".

## Vorbereitungen
### Composer
(1) Prüfen, ob Composer bereists instaliert
```
composer -v
```
(2) Installation *(nicht vorhanden)*

(2.1) Installationsbefehle/ -datei
(2.1.1) MacOS:
```
curl -sS https://getcomposer.org/installer | php
```
(2.1.2) Windows:
Instalation erfolgt über einee [http://getcomposer.org/Composer-Setup.exe](http://getcomposer.org/Composer-Setup.exe)

(2.2) Installation überprüfen
```
composer about
```

(3) Aktualiseren *(bereits vorhanden)*
```
composer self-update
```


### NodeJS
Herunterzuladen auf [https://nodejs.org/de/download/](https://nodejs.org/de/download/)

Datei einfach installieren und den Anweisungen des Installers folgen.


### Laravel Projekt namens laravelguestbook 
(1) Laravel Projekt initialisieren
```
composer create-project laravel/laravel laravelguestbook --prefer-dist
```

(2) Projektverzeichnis betreten
```
cd laravelguestbook
```

(3) Laravel Server starten und Projekt im Browser öffnen
```
php artisan serve
```
    Anschließend die angezeigte URL im Browser öffnen


### NPM
(1) Prüfen, ob bereis vorhanden
```
npm -v
```

(2) Installation *(nicht vorhanden)*
```
npm install
```

(3) Aktualisieren *(vorhanden)*
```
npm update -g
```
