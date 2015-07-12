<?php
// JSONの場合はutf-8のみ
$db = new PDO( "sqlite:FUCKIN.SQLITE" );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
 
$rows = $db->query( "select * from F order by id desc" );
$items = array();
while( $cols = $rows->fetch() ){
  // arrayの中身を増やせば色々な情報を出力可能
  // ポイントは「名前 => 値」とすること
  $items [] = array( "name"=>$cols["NAME"], "num"=>$cols["NUM"], "date"=>$cols["DATE"] );
}
 
// JSONで出力するという事をヘッダで明示する
header( 'Content-type: application/json' );
echo json_encode($items);
?>