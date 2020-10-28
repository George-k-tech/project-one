<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="login.css">
        </head>

            <body>
                <h2>login page</h2>
                <div class = "login">
                    <form id="login" method="POST" action="processregister.php">

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="type your email"  required>

                            <label for="password">Password</label>
                            <input type="password" id="password  " name="password" class="form-control" placeholder="type your password"  required>

                        <input type="button" name="login" id="log" value="Log In Here">       
                        <br><br>    
                        <input type="checkbox" id="check">    
                        <span>Remember me</span>    
                        <br><br>    
                        Forgot <a href="#">Password</a>  
                        <br>
                        <br>
                        <a href="register.php">Register today!!!</a>
                    </form>
                </div>


            </body>
    </html>