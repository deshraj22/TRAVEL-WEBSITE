<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul li{
    display: inline-block;
    position: relative;
    line-height: 21px;
}
ul li a{
    text-decoration: none;
    list-style: none;
    font-size: 19px;
    font-weight: 800;
    margin-left: 70px;
    color: #fff;
}
ul li ul li{
    display: block;
    position: absolute;
    margin-left: 50px;
}
.childdiv{
    margin-top: 8px;
    margin-left: -90px;
    width: 250px;
    display: none;
}
ul li:hover .childdiv{
display: block;
}
    </style>
</head>
<body>
<ul style="margin-left: 100px;">
        <li><a href="">HOME</a>
        <ul>
            <li>
                <div class="childdiv">
                   <a href="">HOME 2</a>
                   
                </div>
           
            </li>
        </ul>
        </li>
        <li><a href="">TOUR</a>
            <ul class="childdiv">
                <li>
                    <!-- <div class="childdiv"> -->
                       <a href="">HOME 2</a>
                </li>
              <li></li>
                
            </ul>
        </li>
        <li><a href="">PAGES</a></li>
      </ul>
</body>
</html>