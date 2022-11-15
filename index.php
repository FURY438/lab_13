<?php
echo '<h3>Москалик Василь, СП-41 (3.11.2022)</h3>';
echo '<br>';
echo '<img src="Screenshot_1.png"/>';
echo '<br>';
$myArr=array(0,5,0,-4,0,7,8,0,-5,9);
echo "Наш масив:" ;
print_r($myArr);
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
    function newArr($n){global $minElement;return $n*$minElement ;}
        print_r(array_map('newArr',$myArr2=$myArr))
        ?>
    </div>
<div>
    <?php
    echo '<p> Координати додатніх елементів: </p>';
    function checkEl($n){ if($n>=0) return (true);}
        $positivEl=(array_filter($myArr2,"checkEl"));
    print_r($positivEl);

    echo " <br> Кількість додатніх елементів: ";
    echo $positiveCount=count($positivEl);
    $av=array_sum($positivEl)/$positiveCount;
echo " <br> Середнє значення додатніх елементів: {$av}";
    ?>
</div>
    <div>
        <?php
        $multNegativEl=array_product(array_filter($myArr2,function ($n){if($n<0) return (true);}));
        echo "<br> Добуток від'ємних елементів нового масиву: {$multNegativEl}";
        $cubeSQRT=$multNegativEl**(1/3);
        echo "<br> Корінь кубічний з добутку від'ємних елементів нового масиву: {$cubeSQRT}";
        ?>
    </div>

