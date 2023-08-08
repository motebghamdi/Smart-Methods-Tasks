import json
import random
import time

data = []

for _ in range(24):  # Generating 24 data points for 24 hours
    temperature = random.uniform(20, 30)  # Random temperature between 20 and 30 Celsius
    humidity = random.uniform(40, 60)  # Random humidity between 40% and 60%
    timestamp = int(time.time())  # Unix timestamp

    data.append({"timestamp": timestamp, "temperature": temperature, "humidity": humidity})

with open("data.json", "w") as json_file:
    json.dump(data, json_file)
