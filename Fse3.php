<?php
session_start();

if(isset($_GET["sNAME"])){
  $_SESSION["names"]=$_GET["sNAME"];
}
?>





<html>
<head>
  <title>腹筋をみんなで共有したい君</title><meta charset="UTF-8">
  <script src="jquery-2.1.3.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="Fstyle.css" rel="stylesheet">
  <script>
  $(function(){

    $.ajax({
      url: "api.php",
      dataType: "json",
      success: function(data){
        var sam= Number(0);
        var name = "<?php echo$_SESSION["names"]?>";
        console.log(name);
        for(var i=0;i<data.length;i++)
          if(data[i].name==name){
            $("#a").append("<tr><td>"+data[i].date+"</td><td>"+data[i].num+" 回</td></tr>");
            sam += Number(data[i].num);
          }
          $("#sam").append(""+sam+"回");
        },
        error: function(xhr, status, err){
        }
      });

    });
    </script>
</head>
<body class="bodyc">
<div class="container">



  <form action=Fes1.php  method=get>


    <?php
    if(isset($_SESSION["names"])){
      echo "<h2><div id='midasi'>".$_SESSION["names"]." 様、こんにちわ</div></h2>";
    }
    ?>

    </form>

    <div class="row">
    <div class="col-xs-offset-4 col-xs-4">
    <h2><div id="midasis">これまでの記録</div></h2>

    <div  class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="active">
        <th class="info">日時</th>
        <th class="info">回数</th>
      </tr>
    </thead>
    <tbody id="a">

    </tbody>
    </table>
    </div>


    <h2><div id="midasiT">合計回数<h1 id="sam"></h1></div></h2>

  <form action=Fnum.php method=get>

    <div class="form-group">

                <label class="sr-only" for="exampleInputAmount"></label>
                <button type="submit" class="btn btn-primary">今日も腹筋する</button>
      </div>
</form>
</div>
</div>
</div>
</body>
</html>
