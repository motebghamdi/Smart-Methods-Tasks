This Task is shared with Task3 in the IOT Track. In the Task 3 from the IOT track we read data from the sensors using the "Get" method and print the data on the html web page. In this Track (Task 4), we read the data from the Get page and then use the "POST" method to post the data to a database.



 
The code that responsible for the POST method is post_data.php file that post these data to database. I also have attached the get.html file and the python code that generate the sensor data.

The screenshots proof that the simulation is working. 


To run the code. We need to setup the XAMPP server. Place these files in the htdocs directory in the XAMPP. Creating database in the phpmyadmin. Run the python code in your local machine and check the results in the database by accessing the http://localhost/phpmyadmin/ database. Also the data that we retrieved cam be checked by accessing the http://localhost/get.php/ file. 