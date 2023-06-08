<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .todo-list {
      list-style-type: none;
      padding: 0;
    }

    .todo-item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .todo-item input[type="checkbox"] {
      margin-right: 10px;
    }

    .todo-item label {
      flex-grow: 1;
      font-weight: bold;
    }

    .todo-item .actions {
      display: flex;
      align-items: center;
    }

    .actions button {
      background-color: #4CAF50;
      color: #fff;
      padding: 4px 8px;
      border: none;
      border-radius: 4px;
      margin-left: 5px;
      cursor: pointer;
    }

    .actions button.edit {
      background-color: #2196F3;
    }

    .actions button:hover {
      background-color: #45a049;
    }

    .add-todo {
      display: flex;
      margin-top: 20px;
    }

    .add-todo input[type="text"] {
      flex-grow: 1;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .add-todo button {
      background-color: #4CAF50;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      margin-left: 10px;
      cursor: pointer;
    }

    .add-todo button:hover {
      background-color: #45a049;
    }

    .user-area {
      margin-top: 20px;
      text-align: center;
    }

    .user-area p {
      margin-bottom: 10px;
    }

    .user-area button {
      background-color: #f44336;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .user-area button:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>To-Do List</h1>
    <ul class="todo-list">
      <?php
      include "connection.php";
      $sql="SELECT *FROM task";
      $query=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($query))
      {
      ?>
      <li class="todo-item"> 
        <label for="todo1"><?= $row['name'] ?></label>
        <div class="actions">
          <button class="edit" data-name="<?= $row['name'] ?>" onclick="editBtn(this)" id=<?= $row['id'] ?>>Edit</button>
          <button class="delete" id=<?= $row['id'] ?>>Delete</button>
        </div>
      </li> 
   <?php }
   ?>
    </ul>
    <form action="add_task.php" method="POST">
    <div class="add-todo">
      <input type="text" id="newTodo" name="task" placeholder="Enter a new task">
      <button type="submit" name="btn-add" id="addButton">Add</button>
    </div>
    </form>
    <div class="user-area">
      <p>Welcome, John Doe!</p>
      <button id="logoutButton">Logout</button>
    </div>
  </div>
</body>
</html>

<script>
  function editBtn(button)
  {
id=button.id
name = button.getAttribute('data-name');
document.getElementById('newTodo').value=name
  }
</script>