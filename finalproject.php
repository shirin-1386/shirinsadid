 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>score report</title>
    <link rel="stylesheet" href="../finalproject.css">
</head>
<style>
.button {
    display: inline-block;
    background-color: #353535; /* رنگ پس‌زمینه */
    color: white;
    padding: 10px 15px;
    border-radius: 4px;
    text-decoration: none; /* حذف زیرخط */
    margin: 10px 5px; /* فاصله بین دکمه‌ها */
}
body {
            font-family: Arial, sans-serif;
            background-color: #d9d9d9; /* رنگ پس‌زمینه */
            margin: 0;
            padding: 20px;
        }

        /* استایل برای فرم */
        form {
            background: #ffffff; /* رنگ پس‌زمینه فرم */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        /* استایل برای عناوین */
        span {
            font-weight: bold;
            color: #284b63; /* رنگ عناوین */
            display: block;
            margin: 10px 0 5px;
        }

        /* استایل برای ورودی‌ها */
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #3c6e71; /* رنگ حاشیه */
            border-radius: 4px;
            font-size: 20px;
        }
        #numberofstu{
            width: 95%;
        }
        /* استایل برای دکمه ثبت */
        button {
            background-color: #353535; /* رنگ پس‌زمینه دکمه */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3c6e71; 
        }

        /* استایل برای پیام‌های خطا */
        p.error {
            color: red;
            text-align: center;
        }
        .button:hover {
    background-color: #3c6e71; /* تغییر رنگ در حالت hover */
}
    </style>
</style>

<body>
    <form id="form" action="finalproject2.php" method="POST" onsubmit="checknumber(event)">
        <span>شماره کلاس:</span>
    <select name="classnumber" id="">
        <option value="201">201</option>
        <option value="202">202</option>
        <option value="203">203</option>
    </select><br>
    <span>نام درس:</span>
    <select name="classname" id="">
        <option value="شبکه">شبکه</option>
        <option value="طراحی صفحات وب">طراحی صفحات وب</option>
        <option value="توسعه">توسعه</option>
    </select><br>
    <span>تعداد انش آموزان:</span>
    <input type="number" id="numberofstu" name="numberofstu" required> 
     <button type="submit">ثبت اطلاعات</button>
    </form>
    <script>
       
        function checknumber(event)
        {
         event.preventDefault();

         var numberofstu=document.getElementById("numberofstu").value;
         numberofstu = Number(numberofstu);
         if (numberofstu>=1 && numberofstu<=10)
         {
            alert("welcome😊");
           document.getElementById("form").submit();
         }
         else
        {
             alert("لطفا عددی بین 1 تا 10 وارد کنید");  
        }
    }
    </script>
    <?php
    
    
    
    ?>
</body>
</html>

<!-- 353535 -->
<!-- 3c6e71 -->
<!-- ffffff -->
<!-- d9d9d9 -->
<!-- 284b63 -->