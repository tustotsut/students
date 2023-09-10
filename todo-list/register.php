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
            <li class="nav-item">
               <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
</nav> 
<div class="register-area">  
    <div class="container"> 
        <div id="main">
            <div id="login">
                <h2>Register Form</h2>
                <hr/>
                <form action="" method="post" name="registrationForm">
                    <label class="general">Name*:</label>
                    <input type="text" name="name" id="name"  placeholder="Please Enter Name"/><br /><br />
                    <label class="general">Contact Number*:</label>
                    <input type="number" name="phone" id="phone" required="required" placeholder="+880.........."/><br/><br />
                    <label class="general">Email*:</label>
                    <input type="email" name="email" id="email" required="required" placeholder="admin@gmail.com"/><br/><br />
                    <label class="general">Date of Birth*:</label>
                    <input type="date" name="dob" id="dob" required="required" placeholder="Please Enter date of birth"/><br/><br />
                    <label class="general">Address*:</label>
                    <textarea name="address" id="address" required="required" ></textarea><br/><br />
                    <label class="general">Password*:</label>
                    <input type="password" name="password" id="password" required="required" placeholder="******"/><br/><br />
                    <label class="general">Confirm Password*:</label>
                    <input type="password" name="c_password" id="c_password" required="required" placeholder="******"/><br/><br />
                    <input type="submit" value=" Submit " name="submit"/><br />
                </form>
                <?php require("./register_script.php") ?>
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
        $("form[name='registrationForm']").validate({
            // Define validation rules
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                    number: true
                },
                dob: {
                    required: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                },
                address: {
                    required: true
                },
                password:{
                    minlength: 6,
                },
                c_password:{
                    minlength: 6,
                    equalTo: "#password"
                }
            },
            // Specify validation error messages
            messages: {
                name: "Please provide a valid name.",
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                phone: {
                    required: "Please provide a phone number",
                    minlength: "Phone number must be min 11 characters long",
                    maxlength: "Phone number must not be more than 11 characters long"
                },
                dob: "Please enter your date of birth.",
                address: "Please enter your address.",
                password: {
                    minlength: "Password must be 6 characters long."
                },
                c_password: {
                    minlength: "Password must be 6 characters long.",
                    equalTo: "Password & confirm password doesn't match."
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }); 
</script>
</body>
</html>