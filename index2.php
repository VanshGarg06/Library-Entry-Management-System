<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Refresh" content="30">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/939c1df20f.js" crossorigin="anonymous"></script>
        <title>Document</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap'); 
*
{
    margin:0;
    padding:0;
}

header nav
{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-direction:row;
    background-color: whitesmoke;
    box-sizing:border-box;
    height:70px;
    box-shadow:2px 10px 20px grey;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.logo img
{
    width:60px;
    height:60px;
    margin-left:30px;
}

.special-button
{
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-direction:row;
    margin-right:40px;
}

.special-button form input
{
    height:30px;
    width:200px;
    border-radius:5px;
    outline:none;
    border:none;
    box-shadow:2px 8px 18px rgb(159, 157, 157);
    padding-left:10px;
    font-size:16px;
}

.special-button form button a
{
    color:rgb(237, 145, 160);
    text-decoration:none;
    font-weight:600;
    font-size:18px;
    
}

.special-button form button
{
    height:30px;
    width:100px;
    border:none;
    box-shadow:2px 8px 25px rgb(159, 157, 157); 
    margin-left:10px;
    border-radius:10px;
}


.special-button button a
{
    color:rgb(141, 222, 19);
    text-decoration:none;
    font-weight:600;
    font-size:18px;
}

.special-button button
{
    height:30px;
    width:100px;
    border:none;
    box-shadow:2px 8px 25px rgb(159, 157, 157); 
    margin-left:10px;
    border-radius:10px;
}


.circle1
{
    background-color:rgb(248, 197, 102);
    width:200px;
    height:200px;
    border-radius:50%;
    transition:3s;
    transform:translateY(-400px);
    animation-name: shining;
    animation-timing-function: ease-in-out;
    animation-duration: 2s;
    animation-delay: 0.2s;
    animation-iteration-count: 1;
    /* margin-top:500px; */
}


.circle2
{
    background-color:rgb(125, 225, 125);
    width:170px;
    height:170px;
    border-radius:50%;
    transition:3s;
    transform:translateY(-200px);
    animation-name: shining1;
    animation-timing-function: ease-in-out;
    animation-duration: 2s;
    animation-delay: 0.2s;
    animation-iteration-count: 1;
    /* margin-top:500px; */
}

.circle3
{
    background-color:rgb(86, 190, 238);
    width:190px;
    height:190px;
    border-radius:50%;
    transition:3s;
    transform:translateY(-250px);
    animation-name: shining2;
    animation-timing-function: ease-in-out;
    animation-duration: 2s;
    animation-delay: 0.2s;
    animation-iteration-count: 1;
    /* margin-top:500px; */
}

.circle4
{
    background-color:rgb(208, 159, 255);
    width:170px;
    height:170px;
    border-radius:50%;
    transition:3s;
    transform:translateY(-150px);
    animation-name: shining3;
    animation-timing-function: ease-in-out;
    animation-duration: 2s;
    animation-delay: 0.2s;
    animation-iteration-count: 1;
    /* margin-top:500px; */
}

.logo-head{
    margin-left:40px;
    font-family:'Ubuntu', sans-serif;
    font-weight:700;
    color:grey;
}

.circle5
{
    background-color:antiquewhite;
    width:200px;
    height:200px;
    border-radius:50%;
    transition:3s;
    transform:translateY(-450px);
    animation-name: shining4;
    animation-timing-function: ease-in-out;
    animation-duration: 2s;
    animation-delay: 0.2s;
    animation-iteration-count: 1;
    /* margin-top:500px; */
}

.circles
{
    display:flex;
    flex-direction:row;
    justify-content:space-evenly;
    align-items:flex-end;
    position:absolute;
    width:100%;
    z-index:-1;
    bottom:0;
    height:100%;
    border:1px solid black;
}



/* @keyframes first-circle {
    from{
        opacity:0;
        padding:
    }
} */

@keyframes shining
{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(-400px);
    }
}


@keyframes shining1
{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(-200px);
    }
}

@keyframes shining2
{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(-250px);
    }
}

@keyframes shining3
{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(-150px);
    }
}

@keyframes shining4
{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(-450px);
    }
}

.profile-image{
    width:300px;
    height:300px;
}
.main-options{
    display:flex;
    align-items:center;
    justify-content:space-evenly;
    margin-top:50px;
}

.student-button .student_attendance{
    border-radius:20px;
    border:none;
    outline:none;
    box-shadow:1px 2px 10px grey;
    background-color:white;
    padding:10px;
}


.teacher-button .teacher_attendance{
    border-radius:20px;
    border:none;
    outline:none;
    box-shadow:1px 2px 10px grey;
    background-color:white;
    padding:10px;
}

.student-button .student_attendance .option-header{
    color:white;
    text-shadow:1px 2px 10px rgb(238, 44, 77);
    font-size:24px;
    font-weight:600;
}

.student-button .student_attendance a{
    text-decoration:none;
}

.teacher-button .teacher_attendance .option-header{
    color:white;
    text-shadow:1px 2px 10px rgb(238, 44, 77);
    font-size:24px;
    font-weight:600;
}

.teacher-button .teacher_attendance a{
    text-decoration:none;
}


.outer-wrapper{
    z-index:110;
    display:flex;
    align-items:center;
    justify-content: center;
    margin-top:50px;
}


.wrapper{
    display:inline-flex;
}

.wrapper .static-text{
    font-size:60px;
    color:black;
    font-weight:400;
}

.wrapper .dynamic-text{
    margin-left:15px;
    height:80px;
    line-height:90px;
    /* background:red; */
    overflow:hidden;
}

.dynamic-text li{
    list-style:none;
    font-size:60px;
    color:#FC6D6D;
    font-weight:500;
    position:relative;
    top:0;
    animation: slide 6s steps(4) infinite;
}

@keyframes slide{
    100%{
        top:-360px;
    }
}

.dynamic-text li span{
    position:relative;
    text-align:center;
}

.dynamic-text li span::after{
    content:'';
    position:absolute;
    left:0;
    height:120%;
    width:100%;
    background:white;
    border-left:2px solid #FC6D6D;
    animation-timing-function: ease-in-out;
    animation: typing 1.5s steps(10) infinite;
}

.special-button p{
    color:grey;
    font-weight:500;
    font-size:24px;
    text-transform: uppercase;
}
@keyframes typing{
    100%{
        left:200%;
        margin: 0 -35px 0 35px;
    }
}



        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <h1 class="logo-head">Recounter</h1>
                </div>
                <div class="special-button">
                    <p><?php echo $_SESSION["user-data"]; ?></p>
                    <button type="button" class="Login"><a href="./login.php">Log In</a></button>
                </div>
            </nav>  
        </header>

        <div class="outer-wrapper">
            <div class="wrapper">
                <div class="static-text">
                </div>
                <ul class="dynamic-text">
                    <li><span>Welcome to Attende Manager</span></li>
                    <li><span>Choose your profile designation</span></li>
                    <li><span>Welcome to Attende Manager</span></li>
                    <li><span>Choose your profile designation</span></li>
                </ul>
            </div>
        </div>

        <main>
            <div class="main-options">
                <div class="student-button">
                    <button type="button" class="student_attendance"><a href="./student_panel.php">
                        <img src="./Student.png" alt="Student Profile" class="profile-image">
                        <h2 class="option-header">Student</h2>
                    </a></button>
                </div>

                <div class="teacher-button">
                    <button type="button" class="teacher_attendance"><a href="./employee_panel.php">
                        <img src="./teacher.png" alt="Teacher Profile" class="profile-image">
                        <h2 class="option-header">Teacher</h2>
                    </a></button>
                </div>
                
            </div>
        </main>

        <div class="circles">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div>
        </div>
    </body>
</html>