# Imkers Leiden

Wij moesten voor de klant een nieuwe website maken voor imkers leiden.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

* [Composer](https://getcomposer.org/download/) - nodig voor laravel installeren
* [XAMPP](https://www.apachefriends.org/index.html) - nodig voor het hosten van de website en de database
* [NodeJS](https://nodejs.org/en/) - nodig voor npm en vue.js
* [Github](https://github.com/) - nodig voor het clonen van het project 

### Installing

A step by step series of examples that tells you how to get a development env running

Project installeren:

1. In de project map, open een command line en run daarin het volgende:
```
composer install
```

2. Als dit process klaar is moet je de .env.example file naam veranderen naar .env
3. Als je dit hebt gedaan moet je een key generaten
```
php artisan key:generate
```

Als dit allemaal gedaan is gaan we de database gereed maken.

4. Dit doen we door de volgende commands te runnen:
```
php artisan db:create imkersleidenDB

php artisan migrate

php artisan db:seed
```

Nadat we de database gereed hebben gemaakt moeten we nog 2 dingen gereed maken voordat we het project kunnen gebruiken en de website kunnen gebruiken.

5. Om Vue.js werkend te krijgen moeten wij nog 2 commands in de command line runnen:
```
npm install && npm run watch
```

Om de website te kunnen gebruiken moeten we wel nog het volgende commando runnen:
```
php artisan serve
```

Nu is de website gereed om te gebruiken en kun je alles gebruiken wat de website heeft.

## Built With

* [Laravel](https://laravel.com/) - The PHP framework mostly for the backend
* [Vue.js](https://vuejs.org/) - The JS framework that we used for the frontend
* [SCSS](https://sass-lang.com/) - Used to style the website 
* [Bootstrap](https://getbootstrap.com/) - Used to style the website 


## Authors

* **Christiaan van Haasteren** - *Most of the backend in Laravel and some parts of the frontend with bootstrap* - [VindicatorHQ](https://github.com/vindicatorhq)
* **Tim Blommestein** - *Most of the frontend and Vue.js, SASS and Bootstrap little parts of the backend* - [da-tokkies](https://github.com/da-tokkies)
* **Noah Elstgeest** - *Frontend with bootstrap* - [NoahElstgeest](https://github.com/NoahElstgeest)

See also the list of [contributors](https://github.com/Project-8-8AMO12/8AMO2_Groep4/graphs/contributors) who participated in this project.

