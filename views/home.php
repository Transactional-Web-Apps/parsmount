

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.jpg" type="image/x-jpg">
    <link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <?php
    echo '<link rel="stylesheet" href="'.ROOTURL.'/Resources/parsmount.css">';
    ?>   
     <!-- echo '<link rel="stylesheet" href="'.ROOTURL.'/views/style.css">';   -->
    <!-- <link rel="stylesheet" href="'.ROOTURL.'/Resources/parsmount.css"> -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <title>Parsmount Website - Home</title>
</head>

<body>

    <header>
        Parsmount
    </header>

    <nav> 
        <?php
    echo '<a href="'.ROOTURL.'/users/home/'.'">Home</a>&nbsp;&nbsp;';       
        
        echo '<a href="'.ROOTURL.'/views/event.php'.'">Event</a>&nbsp;&nbsp;';     ?>
        <!-- <a href="home.php" id="current">Home</a>&nbsp;&nbsp; -->
        <!-- <a href="event.php">Event</a>&nbsp;&nbsp;        -->
        <a href="contact.php">Contact</a>&nbsp;&nbsp;
        <a href="aboutus.php">About us</a>&nbsp;&nbsp;
		<a href="signin.php">Sign in</a>&nbsp;&nbsp;
    </nav>

    <main>
   
    <img alt=""
            class="logo-png-1"
            src="./Resources/logo.png" />
           
    <div class="wrap">
        <div class="bannertext>">
            <h1>Adventure Without Limit</h1>
            <h1>With Parsmount</h1>
        </div>
        
    </div>
    
    
    <div class="middlebanner">
    <img src="../Resources/MiddleBanner.jpeg"  Width="300" Height="300" />
        <div class="bannertext>">
            <p class="bt">
                By holding one hundred and fifty sports programs
                and nature trips with the presence of more than eight
                hundred active members, Parsmont is a symbol of unity,
                empathy and solidarity of the Canadian Farsi-speaking
                community.
            </p>
        </div>
    </div>

    <h3>Upcoming Events</h3>

    <div class="component-4">
        <div class="relative-wrapper-one">
            <p class="lorem-ipsum-is-simply-dummy-text-of-the">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry&#039;s standard dummy text ever since the
                1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
            </p>
            <div class="flex-wrapper-three">


                <img alt=""
                    class="sports-pic"
                    src="https://static.overlay-tech.com/assets/93dcc6c4-c1f1-4f8e-bca0-d781a7dc6171.png" />
            </div>
        </div>
        <div class="relative-wrapper-four">
            <p class="lorem-ipsum-is-simply-dummy-text-of-the">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry&#039;s standard dummy text ever since the
                1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
            </p>
            <div class="flex-wrapper-four">

                <img alt=""
                    class="group-of-friends-trekking-with-backpacks"
                    src="https://static.overlay-tech.com/assets/b6024f9d-ccd2-4411-9fd3-cbe40b892d2b.png" />
            </div>
        </div>
        <div class="relative-wrapper-two">
            <p class="lorem-ipsum-is-simply-dummy-text-of-the-two">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry&#039;s standard dummy text ever since the
                1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
            </p>
            <div class="flex-wrapper-one">

                <img alt=""
                    class="ready-for-the-concert-2021-08-27-15-02-3"
                    src="https://static.overlay-tech.com/assets/732b9429-b9de-4597-9bcf-cd30c9f65e38.png" />
            </div>
        </div>
        <div class="relative-wrapper-one">
            <p class="lorem-ipsum-is-simply-dummy-text-of-the">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry&#039;s standard dummy text ever since the
                1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
            </p>
            <div class="flex-wrapper-two">

                <img alt=""
                    class="well-dressed-people-celebrating-new-year"
                    src="https://static.overlay-tech.com/assets/bf022624-52a6-4d30-a86e-e48245c92c73.png" />
            </div>
        </div>
    </div>



    </main>

    <footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>
    

<?php
    class CreateHome{
        function __construct(){

        }        
    }
   ?>

</body>

</html> 