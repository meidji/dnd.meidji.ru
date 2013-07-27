<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="../libs/jquery.js">
            <?
                require_once('../libs/help.php');
                check();
            ?>    
        </script>
        </head>
    <style type="text/CSS">
        .table1 {
                      width: 85%;
                      background: #fc0;
             		  padding: 0px;
                      border: solid 1px black;
                      position: relative;
                      top: 40px;
                      left: 0px;
                   }
        .table2 {
                      width: 30%;
                      background: #fa0;
                      padding: 0px;
                      border: solid 1px black;
                      position: relative;
                      top: 10px;

                   }
        .table3 {
                      width: 70%;
                      background: #fa0;
                      padding: 0px;
                      border: solid 1px black;
                   }
        .table100 {
                      width: 100%;
                      background: #1a4780;
                      padding: 0px;
                      border: solid 1px black;
                      position: relative;
                    }
        </style>
    <script>
        function show() {                  //получение последних результатов
                    $.ajax({  
                        url: "ajax/results.php",  
                        cache: false,  
                        success: function(html){  
                            $("#results").html(html);
                        }  
                    });  
                };
        $(document).ready(function() {
            $("#roll").click(function(){        //выполнение комплексного броска
                $.ajax({
                    type: "get",
                    url: "ajax/hardroll.php",
                    data: "hardroll="+$("#hardroll").val(),
                    success: function(html){
                        $("#lastroll").html(html);
                    }
                });
                return false;
            });  
            show();                         //первый запуск функции отображения последних результатов
            setInterval('show()', 5000);    //зацикливаем функцию отображения ....
            $('#d4').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                   data: "d4",
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d6').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "d6",            
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d8').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "d8",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d10').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "d10",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d12').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "d12",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d20').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "d20",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#d100').click(function(){  
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                   data: "d100",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            }); 
            $('#cd4').click(function(){  //пошли броски в закрытую
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd4",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });   
            $('#cd6').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd6",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });   
            $('#cd8').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd8",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#cd10').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd10",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#cd12').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd12",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#cd20').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd20",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });  
            $('#cd100').click(function(){
                $.ajax({  
                    type: "get",
                    url: "ajax/roll.php",
                    data: "cd100",             
                    success: function(html){
                        $("#lastroll").html(html);
                    }  
                });  
            });              
        });
    </script>
<body>
    <div align=center>
        <table class="table1"> <!-- основная большая таблица -->
            <tr>                                                
                <td>       <!-- логин и приветствие -->    
                    <?
                        $roles = array("1" => "Мастер", 2 => "Игрок");
                        $playerrole = $roles[$_COOKIE['role']];
                        echo $_COOKIE['login'].", ты ".$playerrole; 
                        echo "       <a href=../kill.php>Выйти</a>";
                    ?>
                </td>
                <td> <!-- Menu -->
                    <a href=../gamefield/>Игровое поле</a>
                </td>   
            <tr>
                <td class="table2" valign="top">
                    <table class="table100"> <!-- таблица с бросками -->
                        <tr>                       
                            <td>
                                Бросить кубик: <br>
                                <form>
                                    <input id="d4" type="button" value="d4">
                                    <input id="d6" type="button" value="d6">
                                    <input id="d8" type="button" value="d8">
                                    <input id="d10" type="button" value="d10">
                                    <input id="d12" type="button" value="d12">
                                    <input id="d20" type="button" value="d20">
                                    <input id="d100" type="button" value="d100">
                                </form>
                        <tr>
                            <td>
                                Бросить кубик в закрытую:<br>
                                <form>
                                    <input id="cd4" type="button" value="d4">
                                    <input id="cd6" type="button" value="d6">
                                    <input id="cd8" type="button" value="d8">
                                    <input id="cd10" type="button" value="d10">
                                    <input id="cd12" type="button" value="d12">
                                    <input id="cd20" type="button" value="d20">
                                    <input id="cd100" type="button" value="d100">
                                </form>
                        <tr>
                            <td id="lastroll">
                                Последний бросок:<br>ничего не бросали
                    </table>
                <td class="table3">

                    <table> <!-- сложные броски и результаты -->
                        <tr>
                            <td>           
                                Сложный бросок:<br>
                                <form>
                                    <input id="hd4" type="button" value="d4">
                                    <input id="hd6" type="button" value="d6">
                                    <input id="hd8" type="button" value="d8">
                                    <input id="hd10" type="button" value="d10">
                                    <input id="hd12" type="button" value="d12">
                                    <input id="hd20" type="button" value="d20">
                                    <input id="hd100" type="button" value="d100"><br>
                                    <input id="hardroll" type="text" value="00xd4 + 00xd6 + 00xd8 + 00xd10 + 00xd12 + 00xd20 + 00xd100" size="61"><br>
                                    <input id="roll" type="button" value="Roll">
                                    <input id="hardrollreset" type="button" value="Reset">
                                    </form>
                        <tr>                            <!-- третья строка -->
                            <td id="results" class="mask">
                                Результаты последних 20 бросков:
                    </table>
        </table>
    </div>
</body>
</html>

