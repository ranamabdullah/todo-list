<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      width: 300px;
      padding: 16px;
      background-color: #fff;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    .input-group {
      margin-bottom: 16px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
    }

    .input-group input {
      width: 96%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;

    }

    .btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }

    #register {
        margin-top: 10px;
        background-color: blue;
        display: inline-block;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="post" action="login_user.php" > 
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <button type="submit" class="btn">Login</button>
      <a type="submit" href="register.php" id="register" class="btn">Register</a>
    </form>
  </div>
</body>
</html>
