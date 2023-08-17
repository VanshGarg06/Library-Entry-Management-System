<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

           .footer{
            width:calc(100% - 310px);
            display:flex;
            align-items:center;
            justify-content:space-between;
            border-radius:10px;
            box-shadow:1px 2px 5px grey;
            /* margin-left:300px; */
            float:right;
            margin-top:10px;
           }

           .copyright p{
            font-weight:600;
            font-family:'Ubuntu', sans-serif;
           }

           .copyright{
            margin-left:50px;
           }

           .creator{
            margin-right:50px;
           }

           .creator p{
            font-weight:600;
            font-family:'Ubuntu', sans-serif;
           }

           .creator p span{
            color:cornflowerblue;
           }
    </style>
</head>
<body>
    <div class="footer">
        <div class="copyright">
            <p>&copy;Copyrighted Personal System</p>
        </div>

        <div class="creator">
            <p class="creator name">Created By: <span>Vansh Garg</span></p>
        </div>
    </div>
</body>
</html>