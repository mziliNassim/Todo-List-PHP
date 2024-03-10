<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo Liste</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background: #eee;
    }

    header {
      background: gray;
      padding: 10px 50px;
      display: flex;
      align-items: center;
      color: #FFF;
      justify-content: space-around;
    }

    header h2 {
      font-size: 30px;
      text-transform: uppercase;
    }

    header a {
      text-decoration: none;
      padding: 5px 20px;
      border: 1px solid #000;
      background-color: #CCC;
      margin-left: 30px;
      border-radius: 10px;
      color: #000;
    }

    .container {
      margin-top: 50px;
      min-height: 60vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
    }

    form {
      /* background: red; */
      width: 800px;
      padding: 20px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      border: 1px solid black;
    }

    form input {
      width: 100%;
      padding: 10px;
      outline: none;
      font-size: 20px;
      font-weight: 500;
    }

    form input[type="submit"] {
      font-weight: 600;
      width: 200px;
      border-radius: 10px;
      border: 3px solid #FFF;
      background: blue;
      color: #FFF;
      cursor: pointer;
      transition: 0.3s;
    }

    form input[type="submit"]:hover {
      background: transparent;
      border-color: blue;
      color: blue;
    }

    .tasks {
      padding: 40px 50px;
      width: 800px;
      max-height: 70vh;
      overflow-y: auto;
    }

    .tasks ul {
      display: flex;
      align-items: start;
      flex-direction: column;
      justify-content: start;
      gap: 40px;
    }

    .tasks ul li {
      border-bottom: 1px solid #000;
      padding: 10px 0;
      text-transform: capitalize;
      width: 100%;
      list-style: "🔗";
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .tasks ul li span {
      width: 85%;
    }

    .tasks .events a {
      text-decoration: none;
      font-size: 20px;
      border: none;
      margin: auto 5px;
      cursor: pointer;
    }

    .finish {
      text-decoration: line-through;
    }

    /* ===== sign ===== */
    .sign {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .sign form {
      flex-direction: column;
      width: 500px;
      padding: 50px;
    }

    .sign form p {
      margin: 20px auto;
      padding: 10px;
      background-color: red;
      font-size: 18px;
      font-weight: 600;
      width: 100%;
      text-align: center;
      border-radius: 5px;
    }

    .sign form div {
      width: 100%;
    }

    .sign form div label {
      /* background: red; */
      padding: 10px 0;
    }

    .sign form div input {
      border-radius: 5px;
      margin: 10px 0;
      outline: none;
      border: 1px solid gray;
    }

    .sign form .submit {
      display: flex;
      justify-content: center;
    }

    .sign form hr {
      color: #000;
      width: 100%;
      height: 2px;
    }

    .sign form .form-footer {
      text-align: center;
    }
  </style>
</head>