
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="../css/gamefield.css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script> 
        <script type="text/javascript">
   			function bttt() {
   				document.getElementById("btt").setAttribute("border", 5)

        	}
            jQuery(document).ready(function(){
                $("#table_5425").mouseenter(function(){
                    $("#card").toggleClass("hidden", false);
                })
                    
                    
                    
                
                    $("#table_5425").mouseleave(function(e){
                    $("#card").toggleClass("hidden", true);
                });
                });
        </script>
        
    </head>
    <body>
        <div id="table_5425" class="table" style="left: 234px; top: 253px; background-color: #00FF00; border-color: #00FF00; background-image: url(img/phone-icon.png); background-position: center;" onClick="ShowConfirmPopup('5425')">
                            <img src="http://center.yandex-team.ru/api/v1/user/bockra/photo/42/square.jpg">
                    </div>
        <div id="card" class="hidden" style="position: absolute; z-index: 1010;" >
    <table width="100%">
        <tr>
            <td colspan="2" align="center">
                <div id="card-name">Ололоша Дерпович</div>
            </td>
            
        </tr>
        <tr>
            <td width="50px">
                Номер
            </td>
            <td style="font-weight: bold;">
                <span id="card-phone">1488</span>
            </td>
        </tr>
        <tr>
            <td width="50px">
                Очередь
            </td>
            <td style="font-weight: bold;">
                <span id="card-role">income</span>
            </td>
        </tr>
        <tr>
            <td width="50px">
                Стол
            </td>
            <td style="font-weight: bold;">
                <span id="card-table">1488</span>
            </td>
        </tr>
        <tr>
            <td width="50px">
                Сел
            </td>
            <td style="font-weight: bold;">
                <span id="card-time">2012-01-22 00:00:00</span>
            </td>
        </tr>
    </table>
</div>

    </body>
</html>
<?
require_once('../libs/game.php');
createGameField(5,5,"btt");


?>

