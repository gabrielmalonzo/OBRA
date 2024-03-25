<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @import url('https://fonts.googleapis.com/css?family=Coiny');
        
        .logo a h1 {
            font-family: Coiny, cursive;
            text-transform: uppercase;
            text-align: center;
            font-size: 60px;
            color: rgb(255, 148, 71);
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }
        .logo a{
            text-decoration: none;
        }

        nav{
            width: 100%;
            height: 15vh;
            display: flex;
            justify-content: space-around;
            box-shadow: 0px 4px 2px rgba(255, 252, 248, 0.51);
        }
        .nav_1{
            width: 30%;
            text-decoration: none;
            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
            display: flex;
            justify-content: space-around;
        }

        .text{
            font: arial, sans-serif;
            color: black;
            text-decoration: none;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-4{
            font: arial, sans-serif;
            color: black;
            text-decoration: none;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid;
            padding: 5px 15px;
            margin: 25px 0px;
            border-radius: 10px;
        }
        .text-3{
            font: arial, sans-serif;
            color: black;
            text-decoration: none;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text:hover ,.text-3:hover, .text-4:hover{
            color: blue;
        }

        /* Style The Dropdown Button */
        .dropbtn {
            margin-top: 23px; 
            padding: 16px;
            font-size: 20px;
            border: none;
            cursor: pointer;
            background: transparent;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            font-size: 13px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            color: blue;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            color: blue;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"><h1>OBRA</h1></a>
        </div> 
        <div class="nav_1">
            <div class="dropdown">
                <button class="dropbtn">how it works?</button>
                    <div class="dropdown-content">
                        <a href="for_Applicant.php">FOR APPLICANT</a>
                        <a href="for_Client">FOR CLIENT</a>
                    </div>
            </div>
            <a class="text" href="about.php" title="about this website" >about</a>    
            <a class="text-3" href="login.php">login</a>
            <a class="text-4" href="sign_up.php">sign up</a>
        </div>  
    </nav>
</body>
</html>