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
      <li class="todo-item">
        <input type="checkbox" id="todo1">
        <label for="todo1">Task 1</label>
        <div class="actions">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </div>
      </li>
      <li class="todo-item">
        <input type="checkbox" id="todo2">
        <label for="todo2">Task 2</label>
        <div class="actions">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </div>
      </li>
      <li class="todo-item">
        <input type="checkbox" id="todo3">
        <label for="todo3">Task 3</label>
        <div class="actions">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </div>
      </li>
    </ul>
    <div class="add-todo">
      <input type="text" id="newTodo" placeholder="Enter a new task">
      <button id="addButton">Add</button>
    </div>
    <div class="user-area">
      <p>Welcome, John Doe!</p>
      <button id="logoutButton">Logout</button>
    </div>
  </div>
</body>
</html>
