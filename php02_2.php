<?php
//1. $number に数字を代入し、 if文で $number が偶数だったら 「偶数です」、もし違ったら「奇数です」と表示するように実装してください
$number = 10;
if ($number%2 == 0){
    echo "偶数です";
}else{
    echo "奇数です";
}
echo '<hr>';

//2. 【応用】$animals に配列で好きな動物を5種類代入し、for文で逆番に出力してください
$animals = ["dog", "cat", "monky", "lion", "bird"];

for ($i = count($animals)-1;$i > -1;$i--){
    echo $animals[$i] . '&nbsp;';
    }
echo '<hr>';

//3. 【応用】 for文を使って、下記のような九九の結果を表させてください
    // 1 * 1 は 1です
    // 1 * 2 は 2です
    // ~省略~
    // 9 * 8 は 72です
    // 9 * 9 は 81です

    for ($i = 1;$i <=9;$i++){
        for($j = 1;$j <= 9;$j++){
            echo "$i * $j" . "は" . $i*$j . "です";
            echo '<br>';
        }  
    }
    
?>