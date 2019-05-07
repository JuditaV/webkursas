
<?php
    $cities3 = [['Tokijas', 13.6, 1868, 'Japonija'], ['Vasingtonas', 0.6, 1790, 'JAV'], ['Maskva', 11.5, 1147, 'Rusija']];
    $cities3['Londonas']=[8.6, 43,'Anglija'];
    print_r($cities3);
?>
<ul>
    <li>
    <?php
    echo 'Gyventoju skaicius: ' .$cities3['Londonas'][0]. 'mln. <br>' ;
    echo 'Ikurtas: ' .$cities3['Londonas'][1]. ' m. <br>';
    echo 'Salis: ' .$cities3['Londonas'][2]. ' <br>';
     ?>
    </li>
</ul>
