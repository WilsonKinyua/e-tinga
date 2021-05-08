# E-tinga - Hire Farm Machinery

<img src="./screenshots/1.png" alt="screenshot" />
<img src="./screenshots/2.png" alt="screenshot" />
<img src="./screenshots/3.png" alt="screenshot" />
<img src="./screenshots/4.png" alt="screenshot" />
<img src="./screenshots/5.png" alt="screenshot" />
<img src="./screenshots/6.png" alt="screenshot" />
<img src="./screenshots/7.png" alt="screenshot" />
<img src="./screenshots/8.png" alt="screenshot" />
<img src="./screenshots/9.png" alt="screenshot" />
<img src="./screenshots/10.png" alt="screenshot" />
<img src="./screenshots/11.png" alt="screenshot" />
<img src="./screenshots/12.png" alt="screenshot" />
<img src="./screenshots/13.png" alt="screenshot" />
<img src="./screenshots/14.png" alt="screenshot" />
<img src="./screenshots/15.png" alt="screenshot" />

# Getting started

## Installation

>Install all the dependencies using <a href="https://getcomposer.org/download/">composer</a>

    composer update

>Run this command to copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

>Open the env file and edit these database fields

    DB_DATABASE=etinga
    DB_USERNAME=root
    DB_PASSWORD=

>Run this command to link the storage folder with the public folder

    php artisan storage:link

>Login details

    username/email: admin@admin.com
    password: password

>Then create the database you provided above

>Run this command to generate a new application key (**in the application root directory**)

    php artisan key:generate

>Import database <a href="etinga.sql">Etinga</a>



>Start the local development server

    php artisan serve

>To allow sending of sms to newely booked farmers, copy and edit your api/secret key from Africastalking and also the app name etc.....

> You can now access the server at http://localhost:8000

# Happy Coding
