

This Task achieved with the creation of two html files and two php files.
"cp.html" the control panel page (front end)
"insert_action" the functionality to create a record of the inserted action in the cp.html file (back end)
"latest_actions.html" the page that update the latest action stored in the database (this used by the IOT guys) (front end)
"get_latest_actions.php"  the functionality to retrieve the updated data from the database. (backend)



To run this project, the following is needed:

1.Setting up the XAMPP
Start XAMPP control panel and ensure that the Apache and MySQL modules are running.


2. Database Table

I used following SQL statement to create the table:


CREATE TABLE actions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action_name VARCHAR(255),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

This query created a table of three columns. First column a recored of the action id. Second column for the action name (star, stop, right ...etc). The third column for the action timestamp. 
 

3. In each the PHP File, update the following line:


'YOUR_SERVER_NAME',  -> Loclhost
'YOUR_USERNAME', -> in my case (moteb)
'YOUR_PASSWORD', -> in my case (mypassward)
'YOUR_DATABASE_NAME' -> in my case (control_panel_db)


4. Placing the Files in XAMPP's Web Directory to allow them seen each other.

In the XAMPP installation directory on your computer. 
In my case located in /Applications/XAMPP/htdocs (macOS), place the four files in this directory.


5. Start the Control Panel

Start XAMPP.
On the web browser, open-> http://localhost/control_panel/control_panel.html directory.
The control panel web page will open, and the control panel can be used.
Open the click on the buttons, the action can be verified in database page.

The http://localhost/control_panel/latest_actions.html file should then show the
The latest actions retrieved from the database. 