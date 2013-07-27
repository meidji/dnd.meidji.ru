<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript">
            function hard_d4() {
                	var a = document.getElementById('hardroll').value
                	var b = a.indexOf('xd4')
                	var c = a.substr(b-3,3)
                	//int i = Integer.parseInt(c);
                	var d = c + 1
                	//var s = String.valueOf(d)
                	//alert(d)
                	document.getElementById('hardroll').value = d
                            }
         </script>
    </head>
    <body>
         <input type="button" onclick="count_rabbits()" value="Считать кролей!"/>
         <table> <!-- сложные броски и результаты -->
                        <tr>
                            <td>           
                                Сложный бросок:<br>
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
