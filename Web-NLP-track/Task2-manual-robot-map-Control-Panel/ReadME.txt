
This Task achieved with the creation visualized manual map. Two html files and two php files are created for this purpose. 

"control_panel.html" the control panel page (front end which shows the direction by drawing an arrows). Note: the HTML5 Canvas API is used to draw the arrows on the control panel with the use of JavaScript to manipulate and update the canvas based on user actions.


"insert_action.php" the functionality to create a record of the inserted action in the control_panel.html file (back end).

"view_action.html" the page that update the latest action stored in the database (this used by the IOT guys) (front end).

"get_latest_action.php"  the functionality to retrieve the updated data from the database. (backend.



To run this project, the following is needed:

1.Setting up the XAMPP
Start XAMPP control panel and ensure that the Apache and MySQL modules are running.


2. Database Table

I used following SQL statement to create the table:


CREATE TABLE actions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  direction VARCHAR(255),
  distance INT
);



This query created a table of three columns. First column a recored of the action id. Second column for the action direction ( left, right ...etc). The third column for the direction distance. 
 

3. In each the PHP File, update the following line:


'YOUR_SERVER_NAME',  -> Loclhost
'YOUR_USERNAME', -> in my case (moteb)
'YOUR_PASSWORD', -> in my case (mypassward)
'YOUR_DATABASE_NAME' -> in my case (manual_dir_control_panel_db)


4. Placing the Files in XAMPP's Web Directory to allow them seen each other.

In the XAMPP installation directory on your computer. 
In my case located in /Applications/XAMPP/htdocs (macOS), place the four files in this directory.


5. Start the Control Panel

Start XAMPP.
On the web browser, open-> http://localhost/control_panel/control_panel.html directory.
The control panel web page for the manual map will open, and can be used.
Open the click on the buttons, the action direction will be drown, and can be verified in database page.

The http://localhost/control_panel/view_actions.html file should then show the
The latest actions retrieved from the database. 