<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>">
 
    <title>Login</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        
    </div>
 
    <div class="container">
        <form action="<?php echo base_url("index.php/user/proseslogin")?>" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 500;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html> 