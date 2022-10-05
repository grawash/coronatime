# Coronatime

coronatime is a project created for monitoring worldwide covid statistics.
with coronatime you can monitor total number of: new cases, recoveries and death caused by coronavirus.
also you have ability to check statistics for each countries individually and sort them by new cases, recoveries or death.
this application has two available localisation options: **English** and **Georgian**.

#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Database Diagram](#database-diagram)

#
### Prerequisites

* *PHP@7.2 and up*
* *MYSQL@8 and up*
* *npm@6 and up*
* *composer@2 and up*


#
### Tech Stack

* [Laravel@9.x](https://laravel.com/docs/9.x) - back-end framework
* [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#
### Getting Started
1\. Clone this repository using:
```sh
git clone https://github.com/RedberryInternship/dimitri-badzgaradze-coronatime.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your JS resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****



after setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

5\. Now execute in the root of you project following:
```sh
  php artisan key:generate
```
Which generates auth key.

#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

## Database diagram
You can see DB Diagram [here](https://drawsql.app/teams/grawashs-team/diagrams/coronatime).