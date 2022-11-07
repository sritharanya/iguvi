<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="C:\xampp\htdocs\iguvi\css\register.css">
        <script src="C:\xampp\htdocs\iguvi\js\register.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
<title>
    Register
</title>
<script>
  function fun()
  {
    window.alert("Registered Succesfully!");
  }
</script>
    </head>
    <body>
        <div class="jumbotron">
<center><div class="container" width="100%">
   <h1>Register</h1>
</div>
<marquee>***********************************************************************************************************************************************************************************</marquee>
<hr width="20">

<img src="C:\xampp\htdocs\iguvi\assets\business.svg" alt="Have a great day" width="300" height="300">
</center>
<center>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label class="control-label col-md-4" for="email"><b>Email Id:</b></label>
      <div class="col-sm-10">
        <input type="email " class="form-control" id="email" placeholder="Enter your email" required>
      </div>
    </div>
    <hr width="20">
    <div class="form-group">
      <label class="control-label col-md-4" for="pwd"><b>Password:</b></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <hr width="20">
        <button onclick="fun()" type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>&nbsp;
      </div>
    </div>
    <p>Don't want to Register?<a href="index.html"> Back</a></p>
    </div>

  </form>
</center></body>&nbsp;<footer>&copy;done by Sri tharanya G</footer>
</html>




