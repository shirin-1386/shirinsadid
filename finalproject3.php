<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>score result</title>
</head>
<style>
  body {
            font-family: Arial, sans-serif;
            background-color: #d9d9d9; 
            color: #353535; 
            margin: 0;
            padding: 20px;
            width:40%;
            padding-right:20%;
           
        }

        h1, h2, h3 {
            color: #284b63; 
        }

        .container {
            background-color:  # d9d9d9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px; 
            margin: auto;
            
        }

        p {
            margin: 10px 0;
        }

        
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #d9d9d9;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        p,th, td {
            border: 1px solid  #d9d9d9;
            padding: 8px;
            text-align: left;
        }
        #p{
            width:20%;
            margin-top:10%;
            padding:5%;
            margin-left:35%;
            background-color:#284b63;
            color:white;
            text-align:center;
            font-size:20px;
            border-radius:15px;
            transition: transform 0.5s ease-in-out, background-color 0.5s ease-in-out;
        }
       
        #p:hover{
            border:3px solid #353535 ;
            transform: scale(1.05); 
            background-color: #353535; 
        }
        #res{
            width:20%;
            /* margin-top:10%;
            padding:5%;
            margin-left:35%; */
            background-color:#284b63;
            color:white;
            text-align:center;
            font-size:20px;
            border-radius:15px;
         
        }
        #res:hover{
            border:3px solid #353535 ;
           
        }
        th {
            background-color: #d9d9d9;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #d9d9d9;
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

<body dir="rtl">
<form action="finalproject.php" method="POST" dir="rtl">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hiddeninput = $_POST['hiddeninput'];
    $lastname = $_POST['lastname'];
    $score = $_POST['score'];
    $classnumber = $_POST['classnumber'];
    $classname = $_POST['classname'] ;
    $sumscore = 0;
    $results=[];
}
    for ($i = 0; $i < $hiddeninput; $i++) {
        if (empty($lastname[$i])) { 
            echo "<p id='p'>Please complete all lastname fields!!!!</p>";
            return;
        }
        if (empty($score[$i])) { 
            echo "<p  id='p'>Please complete all score fields!!!!</p>";
            return;
        }
       
        if ($score[$i] < 0 || $score[$i] > 20) {
            echo "<p  id='p'>Please input scores between 0 and 20.</p>";
            return;
        }
        if($score[$i]<12){
           $sta= "<p id='res'>تجدید پودمان</p>";
        }
        else
        $sta= "<p id='res'>قبولی پودمان</p>";

        $results[] = [
            'lastname' => $lastname[$i],
            'score' => $score[$i],
            'status' => $sta // فقط مقدار $sta را اضافه کنید
        ];
        $sumscore += $score[$i]; 
      
    }
    
    $average = $sumscore / $hiddeninput;
   
    echo "<h2>نتایج</h2>";
    echo "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>";
    echo "<tr>
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #284b63; color: white;'>فامیل</th>
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #284b63; color: white;'>نمره</th>
            <th style='border: 1px solid #ddd; padding: 8px; background-color: #284b63; color: white;'>وضعیت</th>
          </tr>";

    foreach ($results as $result) {
        echo "<tr>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$result['lastname']}</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$result['score']}</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$result['status']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<div class='average' style='background-color: #284b63; color: #ffffff; padding: 10px; border-radius: 5px; text-align: center; margin-top: 20px; font-size: 1.2em;'>معدل: $average</div>";
    echo "<div class='classname' style='background-color: #284b63; color: #ffffff; padding: 10px; border-radius: 5px; text-align: center; margin-top: 10px; font-size: 1.2em;'>اسم کلاس: $classname</div>";
    echo "<div class='classname' style='background-color: #284b63; color: #ffffff; padding: 10px; border-radius: 5px; text-align: center; margin-top: 10px; font-size: 1.2em;'>نام کلاس: $classnumber</div>";
    echo"<div id='divbutton'>";
    echo "<input type='submit' value='تهیه گزارش جدید' id='buttons'>"; 
    echo"<input type='button' value='ویرایش اطلاعات' onclick='window.history.back();' id='buttons'>";
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