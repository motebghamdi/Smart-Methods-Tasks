Since Wokwi website don't allows post data to my local host XAMPP. I have simulated the generation of temp and humidity data using a python code. The random_temp_huumidity.py code generate data simulated data act as the real data that we would retrieved from the robot sensors in the real scenario. 

After generating the data using the python code. I have a script.php file that post these data to database. I also have attached another php file called "i" that get the temperature and humidity data from the database and present them on a webpage. 

The screenshots proof that the simulation is working. 


To run the code. We need to setup the XAMPP server. Place these three files in the htdocs directory in the XAMPP. Creating database in the phpmyadmin. Run the python code in your local machine and check the results in the database by accessing the http://localhost/phpmyadmin/ database. Also the data that we retrieved cam be checked by accessing the http://localhost/i.php/ file. 