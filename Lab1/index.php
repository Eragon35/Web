<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!--favicon.ico or icon.png-->
    <title>ITMO</title>
    <style>
        /* Наследование и каскадирование стилей  */
        body{
            background-image: url(back.png);
            background-size: 20%; 
        }

        #labInfo > header{  /* использование селекторов дочерних элементов */
            font-family: "Montserrat","Open Sans", sans-serif;
            color:#fff;
            font-size: 22px;
            background-color: hsl(232, 100%, 50%, 0.8);
            border: 4px solid crimson;
            padding-top: 3px;
            padding-bottom: 3px;
            width: 420px; 
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        #description{
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            font-size: 14pt;
            background-color: rgb(248, 248, 248, 0.5);
            padding-left: 1%;
            padding-right: 1%;
        }

        #task{
            font-size: 14pt;
        }
        
        form{   /* использование селекторов элементов */
            font-family: "Montserrat","Open Sans", sans-serif;
            font-size: 17pt;
            line-height: 1px;
            padding-left: 15px; 
            margin-top: 10px;   /* задал отступы элементов ввода в пикселях*/
            margin-left: auto;
            margin-right: auto;
            color: #fff;
            width: 35%; 
            text-align: center;
            border: 2px solid rgb(205, 205, 205);
            border: 4px solid crimson;
            background-color: rgba(0, 34, 255, 0.8);
        }

        #Button{
            font-size: 100%; 
            padding:5px 10px 5px 10px; 
            margin: 10px; 
            background-color: white; 
            color: blue;
        }

        #Button:hover {            
            cursor: pointer; /* курсор — палец */
            box-shadow: 3px 3px crimson; 
        }

        #Button:disabled{
            background-color: rgb(50,50,50);
            color: gray;
        }

        .image {
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: right;
            width:50%;
            border:4px solid #02f;
            border: 6px solid crimson;
        }

        .r{ /* использование селекторов псевдоклассов*/
            font-size: 14px;
        }

        .r:active{
            color: crimson;
            box-shadow: 2px 2px crimson;
        }

        .clicked { 
            background-color: black;
            color: white;
        }

        div[id = "task"]{   /* использование селекторов атрибутов*/
            font-size: 13pt;
        }

        #table{
            margin-top: 20px;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            font-size: 14pt;
            color: crimson;
            background-color: rgb(255, 255, 255, 0.8);
            padding-left: 1%;
            padding-right: 1%;
            border:2px solid #02f;
            border-collapse: collapse;
        }
        
        td{
            border:2px solid #02f;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>

    
<body>
    <div id = "labInfo" title = "Общая информация">
        <header>Л/р по Веб-программированию №1<br>
            Антипин Арсентий Александрович<br>
            P3211 Вариант № 211001
        </header>
    </div>

    <div id = "description" title = "Задание">
        
        <img src="plot1.png" alt="график функции" class ="image" align = "right" title="График"/>
    
        <h2>Разработанная HTML-страница должна удовлетворять следующим требованиям:</h2>
        <div id = "task" class = "task">
            Для расположения текстовых и графических элементов используется блочная верстка.
            <br>
            Данные формы передаются на обработку посредством GET-запроса.
            <br>
            Таблицы стилей располагаются в самом веб-документе.
            <br>
            При работе с CSS продемонстрировано использование селекторов идентификаторов, селекторов элементов, 
            селекторов атрибутов, селекторов потомств а также такие свойства стилей CSS, как наследование и каскадирование.
            <br>
            HTML-страница имеет "шапку", содержащую ФИО студента, номер группы и новер варианта. При оформлении шапки 
            явным образом задан шрифт (sans-serif), его цвет и размер в каскадной таблице стилей.
            <br>
            Отступы элементов ввода должны задаваться в пикселях.
            <br>
            Страница содержит сценарий на языке JavaScript, осуществляющий валидацию значений, вводимых пользователем 
            в поля формы. Любые некорректные значения (например, буквы в координатах точки или отрицательный радиус) блокируются.
            <br>
        </div>
    </div>

    <div>
        <form name = "myform" action="index.php" method="get">  
            <p>Выберите X</p>
            <input type = "checkbox" name = "X" value="-5"> -5
            <input type = "checkbox" name = "X" value="-4"> -4
            <input type = "checkbox" name = "X" value="-3"> -3
            <input type = "checkbox" name = "X" value="-2"> -2
            <input type = "checkbox" name = "X" value="-1"> -1
            <input type = "checkbox" name = "X" value="0"> 0
            <input type = "checkbox" name = "X" value="1"> 1
            <input type = "checkbox" name = "X" value="2"> 2
            <input type = "checkbox" name = "X" value="3"> 3
            
            <p>Введите Y</p>
            <input type = "text" id = "inputY" name = "Y" maxlength="9"> <!-- Y можно было бы использовать type = "number" чтобы вводить только цифры -->
           
            <p>Выберите R</p>
            <input type = "button" value="1" onclick="input(this.value)">
            <input type = "button" value="2" onclick="input(this.value)">
            <input type = "button" value="3" onclick="input(this.value)">
            <input type = "button" value="4" onclick="input(this.value)">
            <input type = "button" value="5" onclick="input(this.value)"> 
            <input type = "hidden" name = "R" id = "hidden" value = "-1">
            
            <input type = "submit"  id = "Button" value = "Поднять сервер и проверить точку"> <!-- Скрытое поля для хранения R-->
           
            <p id = "answer" name = "notification">  </p> <!-- output error-->
        </form>        
    </div>

    <table id = "table">       
        <?php         
            $duration_start = microtime(true);
            if (isset($_GET['X']) && isset($_GET['Y']) && isset($_GET['R'])) {                 
                $x = (integer)htmlentities($_GET['X']); 
                $y = (double)htmlentities($_GET['Y']); 
                $r = (integer)htmlentities($_GET['R']); 
                $flag = -1;
                    if (($x < -5) or ($x > 3)) {
                        $flag = 0;
                        echo '<tr><td>Значение Х лежит вне диапазона</td></td>';
                    }
                    elseif(($y <= -3) or ($y >= 5)) {
                        $flag = 0;
                        echo '<tr><td>Значение Y лежит вне диапазона</td></td>';
                    } 
                    elseif(($r < 1) or ($r > 5)) {
                        $flag = 0;
                        echo '<tr><td>Значение R лежит вне диапазона</td></td>';
                    }  
            }          
        ?>

        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>entrance</td>
            <td>date</td>
            <td>script duration</td>
        </tr>
        
        <?php
            $history = isset($_SESSION['history']) && is_array($_SESSION['history']) ? $_SESSION['history'] : [];
            if (isset($_GET['X']) && isset($_GET['Y']) && isset($_GET['R']) && ($flag != 0)) {            
                // checking incoming request
                $inside = '+';
                if ($x < 0){
                    //when x < 0 : y ∈ [-r/2;0]
                    if (($y > 0) or ($y < -$r/2) or (-$x > $r)) { $inside = '-'; }
                }
                else {
                    //if y < 0 : then x^2 + y^2 <= r^2 
                    //if y > 0 : y <= r/2 - x/2
                    if ($y > 0) {
                        if ($y > ($r/2 - $x/2)) { $inside = '-'; }
                    }
                    elseif (($x**2 + $y**2) > $r**2) { $inside = '-'; }
                }                    
                date_default_timezone_set('Europe/Moscow');	//Etc/GMT+3
                $date = date("F j, H:i:s");
                $duration = round((microtime(true) - $duration_start) * 10 ** 3, 3);
                //echo "<br> X $x;     Y$y;    R$r <br> Inside $inside ; Date: $date; Duration $duration";
                $line = "<tr><td>" . $x . "</td><td>" . $y . "</td><td>" . $r . "</td><td>" . $inside . "</td><td>" . $date  . "</td><td>" . $duration . "</tr>";
                array_unshift($history, $line);                             
            }
            $_SESSION['history'] = $history;                
            // output: writing response            
            for($i=0;$i<count($history);$i++)
            echo $history[$i];
        ?>
    </table>
      
    <script type="text/javascript" >
        // src="https://code.jquery.com/jquery-3.4.1.js"    
        var btn = document.getElementById('Button');
        btn.disabled = true;
        var r = 0;
        var x;
        var y;
        var message = "Технические работы в ИСУ\n \nДоступ к ИСУ временно ограничен. Мы работаем над исправлением ошибок." + 
            "\n \nПриносим извинения за доставленные неудобства. ";
        var notification = document.getElementById("answer");
        function input(number){
            var btn = document.getElementById("hidden");
            btn.value = number;
            r = number;
        }
        
        function check(){
            var foo = true;
            var flag = 0;
            var input = document.getElementById("inputY").value;
            for (var i = 0; i< 9; i++) {
                if(document.myform["X"][i].checked){
                    flag ++;
                    x = document.myform["X"][i].value;                    
                }
            }
            if (flag != 1) {
                foo = false;
                notification.innerHTML = "Выберите только ОДНО значение X";
                btn.disabled = true;
            }
            else if (input.length == 0){
                foo = false;
                notification.innerHTML = "Заполним форму Y";
                btn.disabled = true;
            }
            else if (!/^[0-9 | . | -]+$/i.test(input)){
                foo = false;
                notification.innerHTML = "текст максимальной длинны который не вылезае";
                notification.innerHTML = "Допустим только ввод цифр и точки";
                btn.disabled = true;
            }
            else if ((input <= -3 || input >= 5)){
                foo = false;
                notification.innerHTML = "Значение Y должно входить в (-3;5)";
                btn.disabled = true;
            }
            else if (r == 0){
                foo = false;
                notification.innerHTML = "Выберите R";
                btn.disabled = true;
            }
            if (foo) {
                notification.innerHTML = ""; 
                btn.disabled = false;

            }
        }
        setInterval(check,100);
    </script>
</body>
</html>