These files for the task to create 1- a circuit reading Temp and Humidity data using the ESP32 and the DHT22 sensor. 2- Creating a Get page that using the "Get" method to read the data from the ESP32.
 
In the real scenario I would having a physical ESP32 and sensor, and connecting that to my local wifi and XAMPP server. However, I don't have an ESP32 I used the Wokwi website as I did in the pervious tasks. Nevertheless, since Wokwi does not support direct HTTP requests to external APIs I created a python code that acting as the required circuit and producing Temp and Humidity (generated_data.py),  which then being received and presented by the "Get" page (get.html). 

To achieve this task I used XAMPP server.   

I attached the Wokwi project for the Circuit. Also some screenshots shows that the concept is working.   