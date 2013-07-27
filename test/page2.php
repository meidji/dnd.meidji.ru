
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript">
   			function bttt() {
   				document.getElementById("btt").setAttribute("border", 5)

        	}
        </script>
        <link rel="stylesheet" type="text/css" href="../css/gamefield.css" />
    </head>
    <body>
         <button type="button" onclick="bttt()" color="#FFFFFF" value="Считать кролей!">asdasdasdasdas</button>
         <div class='gamecell'>asdasdasdads</div>
         <table border = 1> <!-- сложные броски и результаты -->
                        <tr>
                            <td>           
                                <form>
                                    <input id="hd4" onclick="hard_d4()" type="button" value="d4">
                                    <input id="hd6" type="button" value="d6">
                                    <input id="hd8" type="button" value="d8">
                                    <input id="hd10" type="button" value="d10">
                                    <input id="hd12" type="button" value="d12">
                                    <input id="hd20" type="button" value="d20">
                                    <input id="hd100" type="button" value="d100"><br>
                                    <input id="hardroll" type="text" value="000xd4 + 000xd6 + 000xd8 + 000xd10 + 000xd12 + 000xd20 + 000xd100" size="61"><br>
                                    <input id="roll" type="button" value="Roll">
                                    <input id="hardrollreset" type="button" value="Reset">
                                    </form>
                        <tr>                            <!-- третья строка -->
                            <td id="results" class="mask">
                                Результаты последних 20 бросков:
                    </table>
    </body>
</html>
<?

require_once('../libs/game.php');


createGameField(5,5,"btt");

?>

