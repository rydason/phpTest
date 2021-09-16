<?php

// 1.引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください
// ※小数点以下は「切り捨て」にして返り値は整数で提出しましょう。

function zeikin($num){
    $result = 1.1 * $num;
 return $result;
}
 echo floor(zeikin(15));
echo "<hr>";

// 2.$name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください

function judge($age){
    $name = "成年";
    if($age < 20){
        echo"未成年";
    }else{
        return $name;
    }
}
echo "<hr>";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素の中央値を返す関数を作成してください
$arr = array(1, 3, 5 ,7, 9);
function center($arr){
    $len = count($arr);
    $index = $len/2;
    if(is_int($index)){
        echo ($arr[$index] + $arr[$index-1])/2;
    }else{
        echo $arr[$index];
    }
}
echo center($arr);
echo "<hr>";

// 4.$price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください
// ※小数点以下は「切り捨て」にして返り値は整数で提出しましょう。
$price = 2344;
$amount = 900;  

function service($price,$amount){
    $kanjyou1 = $price*$amount;
    $kanjyou2 = $price*$amount*0.8;
    if( $price * $amount < 10000){
        echo"floor($kanjyou1)";
    }else{
        echo"floor($kanjyou2)";
    }
}
echo service($price,$amount);
echo "<hr>";


// 5.【応用】次のプログラムは、配列の中で1番小さい値を返す min_array という関数を実装しようとしています
// 　途中の部分を完成させてください
$arr = array(600, 30, 5 ,7, 9);

function min_array($arr) {
    // とりあえず配列の最初の要素を1番小さい値とする
    $min_number = $arr[0];
    foreach($arr as $a) {
      //どうしたらいいかわからない・・・・
      if($min_number > $a){
        $min_number = $a;
     }
    }
    return $min_number;
  }
  echo min_array($arr);
