###Scraper avec Nodejs

##Définition: 
Extraction de données
Utilisation de Node.js pour créer un extracteur puissant souple/polyvalent et gratuit.
Il existe 2 modules qui simplifient l'extraction : Request et Cheerio.

## NPM pour installer Bower.
Pendant que Node.js fournit des methodes pour télécharger les data d'internet via les interfaces  HTTP et HTTPS, il faut manipuler séparement ces données.
Pour cela,inclure les dépendances suivantes: Express, Request et Cheerio.
**Request** module propose  de télécharger ce module  directement dans la mémoire.

**Installer : > npm install request**


**Cheerio** capable de télécharger les données en utilisant jQuery.
**Installer : > nmp install cheerio**

**ExpressJS**

Le package.json doit comprendre les dépendences dont on aura besoin : 

`{
  "name"         : "node-web-scrape",
  "version"      : "0.0.1",
  "description"  : "Scrape le web.",
  "main"         : "server.js",
  "author"       : "Scotch",
  "dependencies" : {
    "express"    : "latest",
    "request"    : "latest",
    "cheerio"    : "latest"
  }
}`

un fois package.json installé > **npm install**


Une fois, l'installation faite, il faut appeler les 2 modules nécessaires et le site à partir duquel on veut récupérer les datas: 

`var request = require ("request"),
cheerio = require ("cheerio"),
url = "http://www..." ;`

ou encore 

`var express = require('express');
var fs = require('fs');
var request = require('request');
var cheerio = require('cheerio');
var app     = express();`

##Procedure :

**In Your Browser**
aller sur la page sur laquelle vous voulez extraire les données, et enregistrer l'url.
trouver le ou les élements ou sont les données qui vous intéressent et déterminer un selecteur Jquery pour eux.

**In your code**
utiliser Request pour télécharger la page (url choisi)
transmettre les datas récupérés dans Cheerio pour avoir une interface type jQuery.
Utiliser le selecteur écrit précedemment pour récupérer les datas de la page.

1. scrapper les données Tisseo / 11. 12 . 52


    Launch web server
    Visit a URL on our server that activates the web scraper
    The scraper will make a request to the website we want to scrape
    The request will capture the HTML of the website and pass it along to our server
    We will traverse the DOM and extract the information we want
    Next, we will format the extracted data into a format we need
    Finally, we will save this formatted data into a JSON file on our machine

https://www.tisseo.fr/sites/default/files/ligne11.html
https://www.tisseo.fr/sites/default/files/ligne12.html
https://www.tisseo.fr/sites/default/files/ligne52.html
    

