<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finalproject2</title>
</head>
<style>
   body {
    font-family:b farhood;
    background-color: #284b63;
    padding-top:10%;
    margin: 20px; 
    display:flex;
    justify-content: center;
}

table {
    width: 100%;
    margin-top: 20px;
    background-color: #ffffff; 
    box-shadow: 0 2px 10px #353535 ;
    border:3px solid #284B63;
}

th, td {
    border: 2px solid #284B63; /* حاشیه برای سلول‌ها */
    padding: 10px; /* فاصله داخلی */
    text-align: right; /* تراز متن به سمت چپ */
}

th {
    background-color: #496195; /* رنگ پس‌زمینه برای عنوان جدول */
    color: #ffffff; /* رنگ متن عنوان */
}

tr:nth-child(even) {
    background-color: #f2f2f2; 
}

tr:hover {
    background-color:#345485 ; 
    color:white;
}

input[type="text"], input[type="number"] {
    width: 50%; 
    padding: 5px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
}

input[type="text"]:focus, input[type="number"]:focus {
    border-color: #284B63; 
    outline: none;
}
#buttons{
    background-color: #353535  ;
    color:#ffff;
    font-size:130%;
    padding:1.5%;
    border-radius: 4px;
}
#buttons:hover{
    border:2px solid #d9d9d9;
}
#divbutton{
    padding-top:5%;
    display:flex;
    justify-content: space-around;
}
</style>
<body>
    <form action="finalproject3.php" method="POST" dir="rtl">
     
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $numberofstu=$_POST['numberofstu'];
        $classnumber =$_POST['classnumber'] ;
        $classname =$_POST['classname']; 

       
        echo "<table>";
        echo "<tr><th>ردیف</th><th>نام خانوادگی</th><th>نمره</th></tr>";
      
        for( $i=1;$i<=$numberofstu;$i++)
        {
              
            echo "
            <tr>
                <td>$i</td>
                <td>
                    <span>نام خانوادگی:</span>
                    <input type='text' name='lastname[]'>
                </td>
                <td>
                    <span>نمره:</span>
                    <input type='number' name='score[]'>
                </td>
              </tr>";
        }
    } 
   
   
   
   
     echo"</table>";
   
    echo"<input type='text' hidden name='hiddeninput' id='hiddeninput' value=$numberofstu>";
    echo "<input type='text' hidden name='classnumber' value='$classnumber'>";
    echo "<input type='text' hidden name='classname' value='$classname'>";
    echo"<div id='divbutton'>";
    echo "<input type='submit' value='ثبت' id='buttons'>"; 
    echo"<input type='button' value='بازگشت' onclick='window.history.back();' id='buttons'>";
    echo"</div>";

    ?>

   </form>
     <script>
        function goback(){
            window.history.back(); 
        }

     </script>
   
</body>
</html>