import random
import requests
import time

# Replace the URL with your local server XAMPP endpoint
API_ENDPOINT = "http://localhost/sensors/script.php"

while True:
    # Generate random temperature and humidity data
    temperature = random.uniform(20.0, 30.0)
    humidity = random.uniform(40.0, 60.0)

    # Prepare the data to be sent to the server
    data = {'temperature': temperature, 'humidity': humidity}

    # Send the data to the local server using POST method
    try:
        response = requests.post(API_ENDPOINT, data=data)
        print("Data sent successfully:", response.text)
    except requests.exceptions.RequestException as e:
        print("Error sending data:", e)

    # Wait for a few seconds before sending the next set of data
    time.sleep(10)

