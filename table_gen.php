<?php
    $rowspan = $_GET['row_num'];
    $colspan = $_GET['col_num'];
    $gender =$_GET['gender'];
    $dept = $_GET['dept'];
    $msg = $_GET['message'];

    echo'表格大小: '. $rowspan . '列, ' . $colspan. '行'; 
    echo'性別:'.$gender ."。" ;
    echo'科系:'.$dept ."。" ;
    echo'留言:'.$msg ."。" ;

    echo '<table border=\"1\">';
    
    
    for ($i=0;$i <$rowspan; $i++){
           echo'<tr>';
         for ($j= 0; $j<$colspan; $j++){
           echo'<td>行'. ($i+1).'列'.($j+1).'</td>';
         }
         echo '</tr>';
    }
    echo '</table>';

?>