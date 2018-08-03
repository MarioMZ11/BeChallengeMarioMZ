# BeChallengeMarioMZ
This is a project for the DXC Challenge

You can use the rest api with these urls in the http client Postman writing the following:

GET    http://tests.mariomendezzuiga.com/public/users/all-people 
This url show all persons register

POST	 http://tests.mariomendezzuiga.com/public/users/add-people	
This url add a new register, the perameters for add a new person are: name + value, lastname + value, ssn + value, birthdate + value

GET	    http://tests.mariomendezzuiga.com/public/users/people-by-id/1 (change the number for other register)
This url show a person info by the id register

GET	    http://tests.mariomendezzuiga.com/public/users/people-by-lastname/u (change "u" for other letter or word)
This url show a people info by the lastname register by the complete lastname or by some letters

DELETE	http://tests.mariomendezzuiga.com/public/users/delete-by-ssn/201230123 (change for other ssn if you want)
This url delete all info about one register by the ssn

GET	    http://tests.mariomendezzuiga.com/public/users/order-people-by-lastname	
This url shows all persons register but order by lastname

GET	    http://tests.mariomendezzuiga.com/public/users/people-by-ssn/604230553 (change for other ssn if you want)
This url show a people info by the ssn register

PUT	    http://tests.mariomendezzuiga.com/public/users/update-lastname-by-id/1
This url update the lastname by the id, the parameter for update a new lastname is: lastname + value

¡Enjoy! :)



