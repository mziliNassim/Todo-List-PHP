# Todo List

## Introduction

Todo list web application is easy to use, help you manage tasks effectively, and work smoothly.

## Technologies

<ul>    
    <li>html / css</li>
    <li>php</li>
    <li>mySQL</li>
  </ul>

## DB Operations

<ul>
    <li>
      <span>`users` :</span>
      <ul>
        <li>Create new user "login"</li>
        <li>Check user exist "register"</li>
      </ul>
    </li>
    <li>
      <span>`tasks` :</span>
      <ul>
        <li>Create new task "INSERT"</li>
        <li>Delete exist task "DELETE"</li>
        <li>Update exist task "Update"</li>
        <li>Insert tasks in page UI "SELECT"</li>
        <li>Set task to a specific user</li>
      </ul>
    </li>
  </ul>

## Usage

1. Lance server `XAMPP` `WAMP` `MAMP` ...

2. Create Database "todo_app"
   
   ```sql
   CREATE DATABASE todo_app;
   use todo_app;
   ```

3. Create mySQL Tables `users` && `tasks`
   
   ```sql
   CREATE TABLE users(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(255) NOT NULL,
     pass VARCHAR(255) NOT NULL
   );
   
   CREATE TABLE tasks(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     user VARCHAR(255) NOT NULL,
     task VARCHAR(255) NOT NULL,
     finish BOOLEAN NOT NULL
   );
   ```

4. Config youn db connection `./db/connect.php` 
   
   ```php
   $USERNAME = "YOUR_USERNAME";    // "root"
   $PASSWORD = "YOUR_PASSWORD";    // ""
   ```

5. Lance the app in `localhost/index.php`
