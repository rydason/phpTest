<?php

// == は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result); 
//=> bool(false) が表示される

// < は左項が右項より小さいか判定する

$value = 10;
$result = $value < 20;
var_dump($result);
//=> bool(true) が表示される

// > は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
//=> bool(false) が表示される

// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;
 
$result = $a == $b;    
var_dump($result);
//=> true が表示される

$result = $a === $b;
var_dump($result);

// false が表示される
// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';

echo $result;
//=> $value は 20 より小さい と表示される

// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? "$value は 20 より小さい" : "$value は 20 と等しいかまたは大きい";

echo $result;
//=> 10 は 20 より小さい と表示される

?>