<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NoteApp - Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='../CSS/mainStyles.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container-fluid d-flex justify-content-center align-items-center" id="welcomeContainer">
        <h1 id="welcomeHeaderRegister">Create your account</h1>
    </section>
    <section class="container-fluid d-flex justify-content-center align-items-center" id="formContainer">
        <form method="POST" class="form-floating" id="loginForm">
            <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="registerEmail">
                    <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="registerPassword">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" name="registerPasswordConfirm">
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
        </form>
        <h5>Already a member?<a href="../welcomePage.php"> Login!</a></h2>
    </section>
    <footer class="text-center" >
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <section class=" display-flex justify-content-center align-items-center mb-4">
          <a class="btn  btn-floating m-1" href="https://github.com/kubaczerepski" target="_blank" role="button"
          ><i class="fab fa-github"></i></a>
          <a class="btn  btn-floating m-1" href="https://www.freecodecamp.org/kubaczerepski" target="_blank" role="button"
            ><i class="fab fa-free-code-camp"></i></a>
          <a class="btn  btn-floating m-1" href="https://www.linkedin.com/in/jakub-czerepski-a9090b212/" target="_blank" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
      </section>
        © 2022 Copyright | 
        Kuba Czerepski
      </div>
    </footer>
<script src="https://kit.fontawesome.com/ff12afe838.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>