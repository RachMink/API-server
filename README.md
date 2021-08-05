# CISC3140Lab4Task2
Creating an API server that serves data from a database

To complete this project I created a database of a single table of information about 5 people - including their names, birth months, and hair color. I used PHP to create the server which accesses the database which  then prints the JSON format of the data queried on the webpage.

I have creates three different endpoints using the same database : 
 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/people.php: <br>
    this endpoint allows us to view all the people in the data base including all their information 
    
 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/name.php: <br>
   this endpoint acesses only the name feilds within the data base
  
 - http://acc6.its.brooklyn.cuny.edu/~rminkowi/Mike.php: <br>
   this endpoint acesses the row in the data base who's name field is "Mike"
   
 
