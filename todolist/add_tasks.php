<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">To Do list</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <?php if(isset($_SESSION['username'])): ?>  
        <li class="nav-item">
          <a class="nav-link" href="complete_tasks.php">Complete Tasks/a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pending_tasks">Pending Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_tasks.php">Add Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <?php else: ?>

         <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        
        <?php endif ?>
      </ul>
      
    </div>
  </div>
</nav>

<div class="register-area">
    <div class="container">
        <div class="main">
            <div id="login">
                <h2>Add Task</h2>
                <hr/>
                <form action="" method="post" name="taskform">
                    <label class="general">Task Description</label>
                    <textarea name="description" id="description" required="required"></textarea> <br><br>

                    <label class="general">Completion Date*</label>
                    <input type="date" name="due_date" id="due_date" required="required" > <br><br>

                    <input type="submit" value="add" name="submit"><br>
                </form>

                <?php require ("addtasks_script.php") ?>

            </div>
        </div>
    </div>
</div>
<div class="footer-area">
  <div class="container">
    <div class="col-md-12">
      <div class="footer"> 
          <p>Footer</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>