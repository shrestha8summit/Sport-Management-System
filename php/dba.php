<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/dba.css">
    <link rel="shortcut icon" type="image/x-icon" href="..\Pics\logo1.png">
</head>
<body background="https://img.freepik.com/free-vector/gradient-abstract-wireframe-background_23-2149009903.jpg?size=626&ext=jpg&ga=GA1.1.1486584256.1713417944&semt=ais" style="background-repeat:no-repeat; background-size: 100% 100%;">
    <div class="container" style="display:inline-block;">
        <h1>" Welcome SID "</h1>

        <form action="login.php" method="POST">
           
        <div id="detail">

            <fieldset>

            <legend><h2>Verify</h2></legend>

            
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <label for="uid">User ID:</label>
                    <input type="text" name="uid" required><br><br>

                    <label for="pass">Password:</label>
                    <input type="password" name="pass" required><br>

                    <button type="submit">Login</button>

                    
            </fieldset>

            
        
        </div>    
            
        </form>
        <button id="back-el" style="margin-left:1rem;"><a href="index.php">Back</a></button><br>

    </div>


</body>
</html>
