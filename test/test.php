<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" type="text/css" href="../css/gamefield.css" />
       <script src="http://code.jquery.com/jquery-latest.js"></script> 

      <style>

        .highlight { background:yellow; }
      </style>
    </head>
    <body>
    <div id="one">
      asd
    </div>
    </body>
</html>



    $("p").click(function () {
      $(this).toggleClass("highlight");
    });

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 

  <script>
  $(document).ready(function(){

    $("#one").mouseenter(function () {
      $(this).toggleClass("highlight");
    });

  });
  </script>
  <style>

  p { margin: 4px; font-size:16px; font-weight:bolder;
      cursor:pointer; }
  .blue { color:blue; }
  .highlight { background:yellow; }
  </style>
</head>
<body>
  <p class="blue">Click to toggle</p>
  <p class="blue highlight">highlight</p>

  <p class="blue">on these</p>
  <p class="blue">paragraphs</p>
</body>
</html>

Name    Type