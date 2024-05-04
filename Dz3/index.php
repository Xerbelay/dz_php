<?php
/* 1 */
/* $str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
echo "<p>$str1</p>";
echo "<p>$str2</p>";
echo "<p>$str3</p>"; */

/* 2 */
/* $show = false;
echo "<div>";
for($i = 0;$i<3;$i++) {
    if($show == true){
        echo "<p>text+</p>";
    }
    else{
        echo "<p>text-</p>";
    }
}    
echo "</div>"; */

/* 3 */
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
    ],
    [
        'name' => 'user2',
        'age' => 31,
    ],
    [
        'name' => 'user3',
        'age' => 32,
    ],
];
foreach ($arr as $elem) {
    echo "<div>";
    foreach ($elem as $key1 => $elem1) {
        echo "<p>$key1: $elem1</p>";
    }
    echo "</div>";
}
    
?>