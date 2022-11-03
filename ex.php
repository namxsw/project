<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>Password Reset</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>
<body class="bg-gray">      

    <!-- ##### Newsletter Area Start ###### -->
    <section style="margin-top: 40px;">
         <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
               

                   <div class="admin-box-login">
    <h5 style="margin-top: 20px; text-align: center;"><strong>PASSWORD RESET</strong></h5><br>
<form class="text-center border border-light p-4" action="" method="post">
  <input type="password" name="password" id="typepass" class="form-control mb-4" placeholder="New password..."><br>
  <input type="password" name="cpassword" id="typepass2" class="form-control mb-4" placeholder="Confirm password..."> <br> 
   <input type="checkbox" style="float: left;" onclick="Toggle()"> 
   <p style="float: left; margin-left: 5px;"> Show</p><br><br>   
    <button class="btn admin-reg-btn btn-block" name="submit" type="submit">RESET</button><br>

    <p>You want to visit home page?
        <a href="#" class="loginHome">Home</a>
    </p>
</form>
<br><br>
       </div>
         </div>

          <div class="col-md-4"></div>
    </div>  
       
   </div> 
      </section>    
</body>
 <script> 
    // Change the type of input to password or text
    function Toggle(){
var pass = document.getElementById("typepass");
var pass2 = document.getElementById("typepass2");
  if (pass.type === "password") {
    pass.type = "text";
  }
    if (pass2.type === "password") {
    pass2.type = "text";
  }
  else{
    pass.type = "password";
   pass2.type = "password";

  }


    } 
  
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>