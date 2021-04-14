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


//DOCUMENTACION

CREAMOS UNA CLASE Y LA DEFINIMOS COMO ITEM

EL CUAL TIENE ATRIBUTOS SELLER_ID(ID DE VENDEDOR) SITE_ID(MLA)
LUEGO A PARTIR DE ESTOS ATRIBUTOS RECORREMOS UN VECTOR CON LOS ITEM QUE TIENE ESTE VENDEDOR EN EL SITE MLA

EL CUAL NOS DA COMO OUTPUT
{"seller_id":"179571326","site_id":"MLA","datos":{"items":{"id":"id item","title":"title item","categoty_id":"categoria item","name":"name item"}}}
