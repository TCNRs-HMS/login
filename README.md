after downloading the file move nyo sa  C:\xampp\htdocs\project-folder  loc na to same same lng nmn loc so kahit sundan nyo na to need nasa loob ng htdocs para mag run ang local host




//for database syntax//
Create Database login_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

//for verification add na kayo ng values kayo na bahala mag edit//
INSERT INTO users (username, email, password) 
VALUES ('rey', 'rey@gmail.com', 'rey');

//PASTE NTO SA CHROME or ANY BROWSER tong mga links//
http://localhost/project-folder/register.php

//NEED PALA RUNNING NA ANG XAMPP nyo at naka open na ang ADMIN nyo

