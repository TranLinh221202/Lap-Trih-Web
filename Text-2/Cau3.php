
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <style>
      .wrapper{
        padding: 10px;
        height: 400px;
        width: 450px;
        justify-content: center;
        text-align: center;
        margin-left: 35%;
        margin-top: 1%;
     
      }
      #fname{
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: 35px;
      }
      #lname{
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: 35px;
       
      }

      label{
        font-size: 20px;
        padding: 10px;
        margin-right: 35px;

      }
     #check{
        margin: 20px;
        margin-left: 45px;
        
     }
     a{
        font-size: 20px;
        text-decoration: none;
        margin-left: 100px;  
        margin-right: 40px;
     }
    #login{
        padding: 15px;
        border-radius: 10px;
        background-color: rgb(13, 111, 185);
        margin-top: 70px;
        margin-right: 30px;
    }
    </style>

    <div class="wrapper">
        <h2>Tính Diện Tích Hình Chữ Nhật</h2>
        <form action="">
        <label for="fname">Chiều Dài</label>
        <input type="text" id="fname" name="fname" ><br>

        <label for="lname">Chiều Rộng </label>
        <input type="text" id="lname" name="lname"> <br>

        <input id="login" type="submit" value="Diện Tích">  <input type="text" id="fname" name="fname"><br>
        <a href=""> Thông Báo Hệ Thống Lỗi Nếu Có </a>
        </form> 
    </div>
</body>
</html>