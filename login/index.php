<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="description" content="Create Page Page">
    <meta name="keywords" content="Create Page">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Create Account</title>
  <link rel="stylesheet" href="create_account.css">
</head>

<body>
<div class="container-register" id="container">
    <div class="form-container reg-container">
      <form action="sign_up.php" method="POST">
        <div class="brand-name">Create Account</div>
        <input type="email" name="email" name="email" placeholder="Email" required />
    
        <div class="password-container">
          <input type="password" name="password_1" id="password-input" placeholder="Password" required />
          <i class="show-password fas fa-eye" ></i>
        </div>
        <div class="password-container">
          <input type="password" name="password_2" id="password-input_2" placeholder="Cornfirm Password" required />
          <i class="show-password_2 fas fa-eye"></i>
        </div>

        <button type="submit" name="register">Sign Up</button>
      </form>
    </div>
  </div>

 
</body>

</html>