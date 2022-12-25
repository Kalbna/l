<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
        <div class="toppart">
            <section class="loginform">
                <div class="loginElement">
                    <form action="login_Detail.php" class="login" method="post">
                   <!--  <p class="name">JEEN WOODEN FURNITURE</p> -->
										<label for="username"></label>
										<input type="text" name="username" id="username" placeholder="username" autocomplete="on" required >

										<label for="password"></label>
										<input type="password" name="password" id="password"
										placeholder="password" required="true">
										<br>
										<button id="logein" type="submit">login</button>
											
										<a id="signup" href="signup.html">signup</a>
											
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>