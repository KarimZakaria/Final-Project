# Graduation Project 
###  Applying Jobs And Offline Courses Introduced By Centers Or Companies Interships  
-----------------------------------------------

## About Project 

## A MultiSystem Project, 
First for System That Support Companies Or Institutions That Need Workers So They Have To Upload There Opourtuinity For Applyers So They Can Easiely Applied For The Appropriate Job  
## Second For That Centers Or Companies
 That Introduce Offline Courses They Can Publish There Courses With The Trainers Of Any One They Have So Students Or Trainees Can Apply And Join It  
## language in used =>
### HTML CSS JS BOOTSTRAP and Jquery as Front End 
### PHP and MYSQL for Backend for First Project [Applying Jobs Project] 
### Model View Controller [MVC] Laravel Framework used for Second Project [Offline Courses]
### MVC Concept :
Instead Of Using Languages Diretcley All The Code Written In The Same Page So We Use MVC To Separate  All Contents
    •   The Model Which Deals with Data Base So We Can Get Data We need from it This Part which deal with Back End We Cant See It
    •   View Which Deals With What We See at our pages only
    •   Then The Controller Which Deals with The Logic That We Write In Our Code And Run it For The Project . 
 
### How To Use
#### 1- Make Sure You Have Composer, Laravel, Mysql On Your Deviece
    •   download and setup xampp https://www.apachefriends.org/download.html 
    •   download and setup composer
    •   run apachi and mysql in xampp
    •   go to http://localhost/phpmyadmin in your browser
    •   create new database name [Database You Named] with utf-8-general-ci
#### 2- Download Project or Clone It
#### 3- create .env file from .env.example and set database name [Your DB Name] 
#### __  and username [root] , with blank password '' .
#### 4- in Project folder U Can Open UR CMD and  run this comands 
    •	$ composer install
    •	$ php artisan key:generate
    •	$ php artisan migrate
    •	$ php artisan db:seed
    •	$ php artisan serve

    ## Project structure:
### Project will contain 10 Models With Its Controller And Views
#### 1)	Admin 
#### 2)	Student
#### 3)	Course
#### 4)	Categroy 
#### 5)	Message
#### 6)	Newsletter
#### 7)	Setting
#### 8)	SiteContent
#### 9)	Trainer
    