<?php

//1. $a という変数に4を、$b という変数に5を代入して、echoを使って$a-$bの結果を表示してみましょう。
$a = 4;
$b = 5;
echo $a-$b;
echo '<hr>';


// 2. $array_day という配列に月曜日から日曜日の文字列を代入し、echoで水曜日を表示してみましょう。

$array_month = ["月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日", "日曜日"];
echo $array_month[2];
echo '<hr>';

//3.$department　という変数に ”営業部“ を $name という変数にあなたの名前を、　$keisyo という変数に　”様” を代入して、各変数を連結させて “営業部 あなたの名前 様” と表示してみましょう。

$department　= "営業部";
$name = "おおもりまさよし";
$keisyo = "様";
echo $department　. $name . $keisyo;
echo '<hr>';

//4. 次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは1つです。)


$days = [
  "Mon" => "月",
  "Tue" => "火",
  "Wed" => "水",
  "Thu" => "木",
  "Fri" => "金",
  "Sat" => "土",
  "Sun" => "日",
];
// echo  "Monの日本語表記は" + $days["Mon"];
echo  "Monの日本語表記は" . $days["Mon"];
?>