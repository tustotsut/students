<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Todo List</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Todo List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <?php if(isset($_SESSION['username'])):?>
                <li class="nav-item">
                   <a class="nav-link" href="complete-tasks.php">Complete Tasks</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="pending-tasks.php">Pending Tasks</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="add-task.php">Add Task</a>
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
        <div id="main">
            <div id="login">
                <h2>Task Add</h2>
                <hr/>
                <form action="" method="post" name="taskForm">
                    <label class="general">Task Description*</label>
                    <textarea name="description" id="description" required="required" ></textarea><br/><br />

                    <label class="general">Completion Date*:</label>
                    <input type="date" name="due_date" id="due_date" required="required" /><br/><br />

                    <input type="submit" value=" Add " name="submit"/><br />
                </form>
                <?php require("./add-task_script.php") ?>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(function () {
        $("form[name='taskForm']").validate({
            // Define validation rules
            rules: {
                description: {
                    required: true,
                },
                due_date:{
                    required: true,
                }
            },
            // Specify validation error messages
            messages: {
                email: {
                    required: "Please enter your task.",
                },
                due_date: {
                    required: "Please enter task completion date."
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        })
    }); 
</script>
</body>
</html>