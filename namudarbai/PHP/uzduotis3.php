<?php
    $metai = 1774;
    $cities3 = [['Tokijas', 13.6, 1868, 'Japonija'], ['Vasingtonas', 0.6, 1790, 'JAV'], ['Maskva', 11.5, 1147, 'Rusija']];
    $cities3['Vasingtonas']=[0.6, 1790, 'JAV'];


if ($metai <= $cities3['Vasingtonas'][1]) {
    echo 'Vasingtonas yra JAV sostine' ;
} elseif ($metai == 1774) {
    echo 'JAV sostine vis dar Filadelfijoje';
} else {
    $z = $cities3['Vasingtonas'][1] - $metai;
    echo 'Liko ' .$z.  ' metai(-u) iki Vasingtono ikurimo.' ;
}
?>
