<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <style>
body{
	background: #e0dae0;
	padding-top: 25vh;	
}
form{
	background: #fff;
}
.form-container{
	border-radius: 10px;
	padding: 30px;
}
 </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
        <form action="userloginaction.php" class="form-container" method="POST">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login </h4>
          <label for="InputEmail1">Email Address</label>
           <input type="email" name="email" class="form-control" id="RegisterEmail" aria-describeby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="RegisterPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block" id="registerBtn">Submit</button>
        <div class="form-footer">
          <p> Don't have an account? <a href="userregistration.php" id="signup-link">Sign Up</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    const signupLink = document.getElementById("signup-link");
    const formContainer = document.querySelector(".form-container");

    signupLink.addEventListener("click", function(event) {
        event.preventDefault();
        formContainer.innerHTML = `
            <h4 class="text-center font-weight-bold"> Register </h4>
            <label for="RegisterEmail">Email Address</label>
            <input type="email" class="form-control" id="RegisterEmail" placeholder="Enter email">
            <label for="RegisterPassword">Password</label>
            <input type="password" class="form-control" id="RegisterPassword" placeholder="Password">
            <button type="button" class="btn btn-primary btn-block" id="registerBtn">Register</button>
        `;

        const registerBtn = document.getElementById("registerBtn");
        registerBtn.addEventListener("click", function() {
            const registerEmail = document.getElementById("RegisterEmail").value;
            const registerPassword = document.getElementById("RegisterPassword").value;

            // Send a request to check if the user exists or not
            $.ajax({
                type: "POST",
                url: "check_user.php", // PHP script to check if user exists
                data: { email: registerEmail },
                success: function(response) {
                    const registrationMessage = document.getElementById("registrationMessage");
                    if (response === "exists") {
                        registrationMessage.innerHTML = "User already exists. Please log in.";
                    } else {
                        // User doesn't exist, proceed with registration
                        registrationMessage.innerHTML = "";
                        const registerPassword = document.getElementById("RegisterPassword").value;
                        
                    }
                }
            });
            
        });
    });
});
</script>

</body>
</html>