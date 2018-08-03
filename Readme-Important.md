# BeChallengeMarioMZ
Made by Mario Alberto Mendez Zuñiga
This is a project for the DXC Challenge.
---------------------------------------------------------------------------------------------------------------------------------------
This repository have two folders and one .sql file:
the folders are:
Api_Rest:
in this folder i build the rest api in slim php micro framework and MySQL are here the all process for create this rest api.
In the scr folder into Api_Rest have some files they are:

dependencies.php (here create the data base conection)
routes.php (create the routes for the rest api)
settings.php (configure the parameters for do a server conection)

WebSite:

This is the website that consumes my web service, the files, index.php and process.php 
has the necessary code to establish a connection from this website to the api rest.

challenge.sql this is the file of the data base used for this project.

You can test the rest api by a local way with a local server and http client how postman or
go to: 

http://tests.mariomendezzuiga.com/public/users/all-people for example 

After /users/ you have to write the rest route for do a querie, the routes and values are:

Method	Element	Base Route	            Value
GET	    users	  /all-people	
Shows all persons register

POST	  users	  /add-people	
Add a new register the perameters for add a new person are: name + value, lastname + value, ssn + value, birthdate + value

GET	    users	  /people-by-id	          /id
Show a person info by the id register

GET	    users   /people-by-lastname	    /lastname
Show a people info by the lastname register by the complete lastname or by some letters

DELETE	users	  /delete-by-ssn	        /ssn
Delete all info about one register by the ssn

GET	    users	  /order-people-by-lastname	
Shows all persons register but order by lastname

GET	    users	  /people-by-ssn	        /ssn
Show a people info by the ssn register

PUT	    users	  /update-lastname-by-id	/id
Update a lastname by the id, the parameter for update a new lastname is: lastname + value

if you want how work my rest api go to:
https://pruebas.adimosa.com
this site consume the rest api info about users stories from my website tests.mariomendezzuiga.com.
In https://pruebas.adimosa.com you have a information about the routes and how can use it, here you can do all GET queries if you want to do POST, PUT or DELETE queries go to postman and write this url:
http://tests.mariomendezzuiga.com/public/users/all-people for explample.
---------------------------------------------------------------------------------------------------------------------------------------

I be so proud for do this project, because i never worked with api rest.
i'm so happy for get the knowledge and i want learn more and improve my skills with you! thank you so much for this challenge!

---------------------------------------------------------------------------------------------------------------------------------------

