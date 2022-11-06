<?php
echo '<h3>Москалик Василь, СП-41 (3.11.2022)</h3>';
echo '<br>';
echo '<img src="Screenshot_1.png"/>';
echo '<br>';
$myArr=array(0,5,0,-4,0,7,8,0,-5,9);
echo '<h4>Наш масив: </h4>';
foreach ($myArr as $row){
    echo "{$row}; " ;
}
echo '<br>';
?>
<div>
    <?php

    echo '<p> Мінімальний від\'мний елемент: </p>';
    $minElement=min($myArr);
    if($minElement<0)echo $minElement;
    else echo '<p>В даному масиві немає від\'ємних елементів</p>';
    ?>
    </div>
<div>
    <?php
    echo '<p> Його координати: </p>';
    $keyMinElement=array_keys($myArr,min($myArr))[0];
    echo $keyMinElement;
    ?>
</div>
    <div>
        <?php
    echo '<h4> Новий масив: </h4>';
    $myArr2=array();
    $temp=null;
    foreach ($myArr as $row){
        $temp=$row*$minElement;
        $myArr2[]=$temp;
        echo  "{$temp}; ";
    }
        ?>
    </div>
<div>
    <?php
    echo '<p> Координати додатніх елементів: </p>';
    $positiveCountEl=0;
    $sumaPositiveEl=0;
    foreach ($myArr2 as $key => $value){
        if($value >= 0){
            echo "{$key};";
            $positiveCountEl++;
            $sumaPositiveEl=+$value;
        }
    }
    echo " <br> Кількість додатніх елементів: {$positiveCountEl}";
    $avereageValue=$sumaPositiveEl/$positiveCountEl;
echo " <br> Середнє значення додатніх елементів: {$avereageValue}";
    ?>
</div>
    <div>
        <?php
        $multNegativEl=-1;
        foreach ($myArr2 as  $value){
            if($value < 0){
            $multNegativEl*=$value;
            }
        }
        function cubeRoot($value){
            if($value<0){
                $result=pow(abs($value),1/3);
                return -$result;
            }
            else
                return $result=pow($value,1/3);
        }
        echo "<br> Добуток від'ємних елементів нового масиву: {$multNegativEl}";
        $cubeSQRT= cubeRoot($multNegativEl);
        echo "<br> Корінь кубічний з добутку від'ємних елементів нового масиву: {$cubeSQRT}";
        ?>
    </div>

