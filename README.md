# Lab-Application
CPE212-Internet-Based-Programming-Lab-Application





Lab Application: Student Registration Form with Database Integration
Objective: Create a student registration form that allows users to input their information and stores it
in a MySQL database using the POST method.
Requirements:
1. Design a web page using HTML5 that includes the following form fields:
a. Full Name (text input)
b. Email Address (email input)
c. Gender (radio buttons for Male/Female)
d. Submit button
2. Connect to a MySQL database using pure PHP. Create a table named "students" with the
following columns:
a. id (auto-incrementing primary key)
b. full_name (VARCHAR)
c. email (VARCHAR)
d. gender (ENUM: 'Male', 'Female')
When the user clicks the Submit button, use the POST method to send the form data to a PHP
script that performs the following actions:
a. Validates the form data once again on the server-side.
b. If the data is valid, insert the student's information into the "students" table in the database.
c. Display a success message on the web page if the data is successfully inserted into the
database.
d. If there are any errors, display appropriate error messages on the web page.
*You do not need to use any CSS.
And finally list the information of the students registered from the database on the web
page by performing the above requirements. (You can make the listing as you wish.)
