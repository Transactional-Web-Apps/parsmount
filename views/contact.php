
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.jpg" type="image/x-jpg">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="../Resources/parsmount.css">
	<title>Parsmount Website - Contact</title>
    <style>
        div {
            margin-left: 30px;
        }

        input[type="text"] {
            width: 320px;
        
        }

       
        input[type="email"] {
            width: 320px;
       
        }

       
        input[type="submit"] {
            margin-left: 100px;
        }

        textarea {
            width: 320px;        
        }
        
        label { 
            float: left;
            width: 120px; 
          
        }


    </style>
</head>

<body>

    <header>Parsmount</header>

    <nav>
    <a href="home.php">Home</a>&nbsp;&nbsp;
        <a href="event.php">Event</a>&nbsp;&nbsp;       
        <a href="contact.php" id="current">Contact</a>&nbsp;&nbsp;
        <a href="aboutus.php">About us</a>&nbsp;&nbsp;
		<a href="signin.php">Sign in</a>&nbsp;&nbsp;
    </nav>
    <div>
        <main>
           
            
            <br>
            <h3><span style="color:rgb(37, 88, 37)">Contact us Today!</span></h3><br>

            <form>
                <label for="fname">* First Name </label> <input type="text" name="fname" id="fname" required="true">
                <br><br>
                <label for="lname">* Last Name </label> <input type="text" name="lname" id="lname" required="true">
                <br><br>
                <label for="email">* E-mail </label><input type="email" name="email" id="email" required="true"><br><br>
                <label for="phone">Phone </label><input
                    type="text" name="phone" id="phone"> <br><br>
                <label for="comment">* Comment: </label><textarea rows="2" cols="20" name="comment" id="comment"
                    required="true"></textarea><br><br>
                &nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" class="btn btn-primary"><br><br>
            </form>
            <br><br>
            <h3>Contact information</h3>
            1234 Parsmount Website<br>
            Montreal CA<br>
            H1R 2N3 <br><br>
            514-123-4567
        </main>
    </div>
    <footer>
        <p><i>
                Copyright &copy; 2022 Parsmount Website <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>

</body>

</html>