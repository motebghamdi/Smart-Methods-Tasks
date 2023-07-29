
This Task achieved the speech recognition task By combining HTML, CSS, JavaScript, PHP, and MySQL. 

HTML: shows a button labeled "Start Speaking" and two paragraphs to display status messages and captured messages.

CSS: CSS to style the button and center the content on the page.

JavaScript: JavaScript to implement speech recognition functionality. 

PHP & MySQL: the database is created using XAMPP's phpMyAdmin. The PHP script (save_message.php) handles the data received from JavaScript and insert the captured message into the database.

AJAX: I used AJAX in JavaScript to send the captured message to the PHP script (save_message.php).



To run this project, the following is needed:

1.Setting up the XAMPP
Start XAMPP control panel and ensure that the Apache and MySQL modules are running.


2. Database Table

I used following SQL statement to create the table:


CREATE TABLE captured_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL
);



3. In the PHP File, update the following line:


'YOUR_SERVER_NAME',  -> Loclhost
'YOUR_USERNAME', -> in my case (moteb)
'YOUR_PASSWORD', -> in my case (mypassward)
'YOUR_DATABASE_NAME' -> in my case (manual_dir_control_panel_db)


4. Placing the Files in XAMPP's Web Directory to allow them seen each other.

In the XAMPP installation directory on your computer. 
In my case located in /Applications/XAMPP/htdocs (macOS), place the four files in this directory.


5.
Start XAMPP.
On the web browser, open-> http://localhost/Speech_Recongintion/index.html.
Open the click on the buttons, the action will be shown, and can be verified in database page.

