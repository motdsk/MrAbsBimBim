<?php
session_start();
if(isset($_GET['NUM'])) $NUM=$_GET['NUM'];
date_default_timezone_set("Asia/Tokyo");	
$NAME=$_SESSION["names"];
$DATE=date('Y年m月d日');
$db = new PDO("sqlite:FUCKIN.SQLITE");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
if(isset($NUM))	{
  $db->query("INSERT INTO F VALUES(null,'$NAME','$NUM','$DATE')");
}

?>
<html>
<head>
  <title>腹筋をみんなで共有したい君</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="Fstyle.css" rel="stylesheet">
  <script>
  var name = "<?php echo$DATE?>";
  console.log(name);
  </script>
  <script src="fukkinsuru.js"></script>
  </head>

  <body class="bodyc">
    
  <div class="container"> 

  <h1><div id="midasi">記録完了しました</div></h1>


  <form action=Fse3.php method=get>
    
        <div class="row">
              <div class="col-xs-offset-4 col-xs-3">
              <div class="form-group">
              
                <button type="submit" class="btn btn-primary" id="result1">OK</button>
                
              </div>
              </div>
         </div>
  </form>
    
  </div>




  </body>
  </html>