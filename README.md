# CISC3140Lab4Task2
Creating an API server that serves data from a database

### Introduction

To complete this project I created a database - a single table of information about 5 people including their names, birth months, and hair color. I used PHP to create the server which accesses the database which then prints the JSON format of the data queried on the webpage. This project was executed through the LINUX school server public_html folder

I have created three different endpoints using the same database : 
 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/people.php: <br>
    this endpoint allows us to view all the people in the database including all their information 

    <img width="1094" alt="Screen Shot 2021-08-05 at 3 25 18 PM" src="https://user-images.githubusercontent.com/82296790/128409137-79b603f8-3095-46ab-a60f-ddaed3826b79.png">

    
 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/name.php: <br>
   this endpoint acesses only the name feilds within the database
   
   <img width="1097" alt="Screen Shot 2021-08-05 at 3 26 43 PM" src="https://user-images.githubusercontent.com/82296790/128409313-a75a5f9a-25c6-4269-b0c0-300049f709ed.png">

 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/Mike.php: <br>
   this endpoint acesses the row in the database who's name field is "Mike"
   
   <img width="1094" alt="Screen Shot 2021-08-05 at 3 26 58 PM" src="https://user-images.githubusercontent.com/82296790/128409342-e26be36f-163a-4749-a525-758a5a9a2e6b.png">
   
#### *Note*
*take a look at the comments in the .php files for elaboration*
   
### Resources Used

  - very clear and helpful [PHP documentation]( https://www.php.net/docs.php)<br>
  - https://www.w3schools.com/php/default.asp <br>
  - https://dev.to/shahbaz17/build-a-simple-rest-api-in-php-2edl <br>
  - https://betterprogramming.pub/how-to-build-a-simple-restful-api-in-php-c719f03cfa0a <br>
  - [getting-started-with-the-rest-api](https://docs.github.com/en/rest/guides/getting-started-with-the-rest-api) 
  - https://www.a2hosting.com/kb/developer-corner/sqlite/connect-to-sqlite-using-php
  
   
 
