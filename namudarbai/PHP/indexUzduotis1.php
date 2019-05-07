<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
print_r($cities);
?>
<ul>
    <li>
    <?php $cities[] = 'Tokijas';
print_r($cities); ?>
    </li>
</ul>

<ul>
    <li><?php echo $cities[1]; ?></li>
</ul>

<ul>
    <li>
    <?php
        $cities2 = ['Tokijas' => 13.6, 'Vasingtonas' => 0.6, 'Maskva' => 11.5];
        $cities2['Londonas'] = 8.6;
        print_r($cities2); ?>
    </li>
</ul>
<ul>
 <?php    foreach ($cities2 as $cities => $skaicius){
    echo "Gyventoju skaicius: $skaicius mln. <br>" ;
    }
     ?>

</ul>
