<?php
// 【第2章 - PHP実践 - 第3部 - 関数】
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function multiply($a){
  echo $a * 2;
}
echo multiply();
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

// 　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。

 function add($a, $b){
    $result = 0; 
    echo $result = $a + $b;
    return $result;
 }

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array($a,$b,$c,$d,$e){

   echo $result = $a * $b * $c * $d * $e;
    return $result;
}

echo array(1,3,5,7,9);


//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr) {
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[0];
foreach($arr as $a) {
//どうしたらいいかわからない・・・・
}

return $max_number;
}

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください

// strip_tags 
// array_push
// array_merge
// time, mktime
// date

