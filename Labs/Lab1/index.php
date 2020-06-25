<!DOCTYPE html>
<html lang="en">
<head>
    <!-- GET-request method -->
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
            /* filter: blur(8px); */
            /*ackdrop-filter: blur (20px)*/
        }

        #labInfo > header{  /* использование селекторов дочерних элементов */
            font-family: "Montserrat","Open Sans", sans-serif;
            color:#fff;
            font-size: 22px;
           /* text-transform: uppercase;*/
            background-color: hsl(232, 100%, 50%, 0.8);
            /*border-width: 100px;
            border:  #fff;*/
            border: 4px solid crimson; /*2px solid rgb(205, 205, 205);*/
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
            /*color:rgba(195, 0, 255);*/
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
        button{
            font-size: 100%; 
            padding:5px 10px 5px 10px; 
            margin: 10px; 
            background-color: white; 
            color: blue;
        }
        button:hover {
            /* курсор — палец */
            cursor: pointer;
            /* малиновая тень */
            box-shadow: 3px 3px crimson;
        }
        button:disabled{
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


        /* TODO add js on click*/
        .clicked { 
                /* background-color — для цвета фона */
            background-color: black;
                /* color — для цвета текста */
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
            /*color:rgba(195, 0, 255);*/
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
        <form name = "myform" action="index.php" method="get">  <!-- onsubmit -->
            <p>Выберите X</p>
            <input type = "checkbox" name = "inputX" value="-5"> -5
            <input type = "checkbox" name = "inputX" value="-4"> -4
            <input type = "checkbox" name = "inputX" value="-3"> -3
            <input type = "checkbox" name = "inputX" value="-2"> -2
            <input type = "checkbox" name = "inputX" value="-1"> -1
            <input type = "checkbox" name = "inputX" value="0"> 0
            <input type = "checkbox" name = "inputX" value="1"> 1
            <input type = "checkbox" name = "inputX" value="2"> 2
            <input type = "checkbox" name = "inputX" value="3"> 3
            
            <p>Введите Y</p>
            <input type = "text" id = "inputY" maxlength="9"> <!-- Y можно было бы использовать type = "number" чтобы вводить только цифры -->
           
            <p>Выберите R</p>
            <input type = "button" name = "inputR" value="1" class = "r" onclick="input(this.value)">
            <input type = "button" name = "inputR" value="2" class = "r" onclick="input(this.value)">
            <input type = "button" name = "inputR" value="3" class = "r" onclick="input(this.value)">
            <input type = "button" name = "inputR" value="4" class = "r" onclick="input(this.value)">
            <input type = "button" name = "inputR" value="5" class = "r" onclick="input(this.value)"> 
            <br>
            <br>
            <br>
            <button  id = "Button" >Поднять сервер и проверить точку</button>

           
            <p id = "answer" name = "notification">  </p> <!-- output error-->
        </form>
        
    </div>

    <table id = "table">
        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>entry</td>
            <td>current time</td>
            <td>script time</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1</td>
            <td>4</td>
            <td>+</td>
            <td>5:08</td>
            <td>0:01.34</td>
        </tr>
    </table>
      <!--?php ? -->
      <script type="text/javascript" >
        // src="https://code.jquery.com/jquery-3.4.1.js"
            var r = 0;
            var x;
            var y;
            var message = "Технические работы в ИСУ\n \nДоступ к ИСУ временно ограничен. Мы работаем над исправлением ошибок." + 
                "\n \nПриносим извинения за доставленные неудобства. ";
            var notification = document.getElementById("answer");
            function input(number){
                r = number;
            }
            
            function check(){
                var foo = true;
                var flag = 0;
                var input = document.getElementById("inputY").value;
                for (var i = 0; i< 9; i++) {
                    if(document.myform["inputX"][i].checked){
                        flag ++;
                        x = document.myform["inputX"][i].value;
                        
                    }
                }
                if (flag != 1) {
                    foo = false;
                    notification.innerHTML = "Выберите только ОДНО значение X";
                }
                else if (input.length == 0){
                    foo = false;
                    notification.innerHTML = "Заполним форму Y";
                }
                else if (!/^[0-9 | . | -]+$/i.test(input)){
                    foo = false;
                    notification.innerHTML = "Поле должно содержать только цифры в десятичной записи";
                }
                else if ((input <= -3 || input >= 5)){
                    foo = false;
                    notification.innerHTML = "Значение Y должно входить в (-3;5)";
                }
                else if (r == 0){
                    foo = false;
                    notification.innerHTML = "Выберите R";
                }
                
                if (foo) notification.innerHTML = ""; 

            }
            setInterval(check,100);
          </script>
</body>
</html>