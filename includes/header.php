<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/939c1df20f.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');
header{
    width: 100%;
    height:100px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    border-radius:10px;
    box-shadow:1px 2px 10px grey;
}

header nav{
    list-style-type: none;
}

header nav li{
    display: inline-block;
}

header .dash-head h1{
    font-family: 'Ubuntu', sans-serif;
    text-shadow: 1px 2px 5px grey,1px 2px 5px grey;
    color:rgb(154, 243, 213);
    margin-left:50px;
}

header nav ul li .user-name
{
    font-family:'Ubuntu', sans-serif;
    font-weight:600;
    font-size:24px;
    margin-left:10px;
    margin-top:20px;
    color:rgb(133, 131, 131);
    position:absolute;
}

header nav ul li img{
    height:40px;
    width:40px;
    margin-top:15px;
}

.outer-options{
    position:relative;
    padding-left:0px;
    width:200px;
    margin-top:10px;
}

.outer-options > li{
    cursor:pointer;
    width:180px;
    padding-left:20px;
}

.inner-options{
    padding-left:0px;
    display:none;
}

.inner-options li{
    text-align:center;
    width:170px;
    height:50px;
    padding-top:20px;
    background-color:white;
    border-bottom:1px solid grey;
}

.inner-options li a{
    text-decoration:none;
    color:grey;
    font-size:24px;   
}

nav > ul > li:hover{
    margin-top:150px;
}

nav ul li:hover ul{
    display:block;
}


    </style>
</head>
<body>
    
    <header>
        <div class="dash-head">
          <h1>Dashboard</h1>
        </div>
        <nav>
          <ul class="outer-options">
            <li class="user-login">
              <img src="../includes/user_logo.png" alt="user" /><span class="user-name">Admin<i class="fa-solid fa-angle-down" style="margin-left:10px;"></i></span>

              <ul class="inner-options">
                <li class="Edit-button">
                    <a href="">Edit Profile</a>
                </li>
                <li class="logout-button">
                    <a href="../includes/logout.php">Log Out</a>
                </li>
            </ul>
            </li>
            
          </ul>
        </nav>
    </header>



</body>
</html>



<!-- 
<script>
    const nav_bar = document.getElementsByClassName('inner-options')[0];
    const nav_button = document.getElementsByClassName('user-login')[0];
    var counter = 0;
    nav_button.onclick = function(){
        nav_bar.style.visibility = "visible";
        setTimeout(() => {
            nav_bar.style.visibility = "hidden";
        }, 3000);
    }
</script> -->