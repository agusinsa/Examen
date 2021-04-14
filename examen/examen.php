<?php 

$item = new stdClass();

$item->seller_id = "179571326";
$item->site_id="MLA";
foreach($item as $record) {
$item->datos= array(
   "items"=> array(
       'id'=>'id item',
       'title'=>'title item',
       'categoty_id'=>'categoria item',
       'name'=>'name item'
   )
);
}

echo json_encode($item);

?>