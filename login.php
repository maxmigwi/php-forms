<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user login and regestration</title>
    <link rel="stylesheet" type="type/css"
    href="https://stackpath.bootstrapcdn.com/bootsrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<style>
body{
    background-color:(rgb(0 , 0 ,  50 , 0.5),rgba(0, 0,  50, 0.5)) ;
    background-image:url("https://i.pinimg.com/564x/54/58/78/545878d503b758b9507719cd354504d8.jpg");
    background-size:cover;
    background-position:center;
}

    .login-box{
max-width:700px;
float:none;
margin:150px auto;

    }
    
.login-left{
    background:rgba(211,211,211,0.5);
    padding:30px;

}
.login-right{
    background:#fff;
    padding:30px;

}
form-control{
    background-color:transparent ! important;

}
</style>

<div class="container">
   <div class="row">
   <div class="login-box">
     <div class="col-md-6 login-right">

                <h2>login here</h2>
                <form  method="POST" action="register.php">
                <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>

               <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
             
                <button type="submit" class="btn btn-primary"  >login</button>
                    </form>
            </div>
        <div class="col-md-6 login-left">
            <h2>register here</h2>
            <form  method="POST" action="register.php">
            <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
            <label>password</label>
            <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">register</button>

    
    
           </form>
           </div>

           </div>
        </div>   
      </div>
    </div>
    
</body>
</html> 








