<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($num){
      $result = 2 * $num;
   return $result;
}
   echo nibai(5);

echo "<hr>";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
// 参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
function add($a, $b){
     $result = $a + $b;
   return $result;
   }
   echo add(2,3);
   echo "<hr>";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1, 3, 5 ,7, 9);

function arr($arr){
   $result = 1;
   for ($i = 0; $i < count($arr); $i++){
       $result *= $arr[$i];
   }
   return $result;
}
echo arr($arr);
echo "<hr>";

// 4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
$data = array(1, 30, 5 ,7, 9);

function max_array($arr) {
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[0];
   foreach($arr as $a) {
      if($max_number < $a){
         $max_number = $a;
      }
      // arsort($arr);
   }
   // // print_r($arr);
   // $max_number = $arr[0];
   return $max_number;
}

echo max_array($data);

/*5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください

 1 strip_tags
 strip_tags(string $string, array|string|null $allowed_tags = null): string
 この関数は、指定した文字列 (string) から全ての NULL バイトと HTML および PHP タグを取り除きます。 この関数は、fgetss() 関数と同じタグ除去アルゴリズムを使用します。

 2 array_push
array_push(array &$array, mixed ...$values): int
array_push()は、array をスタックとして処理し、渡された変数を array の最後に加えます。配列 array の長さは渡された変数の数だけ増加します。 各 value1 毎に以下を繰り返すことと同じ効果があります。

 3 array_merge
array_merge(array ...$arrays): array
前の配列の後ろに配列を追加することにより、 ひとつまたは複数の配列の要素をマージし、得られた配列を返します。
入力配列が同じキー文字列を有していた場合、そのキーに関する後に指定された値が、 前の値を上書きします。しかし、配列が同じ添字番号を有していても 値は追記されるため、このようなことは起きません。
入力配列の中にある数値添字要素の添字の数値は、 結果の配列ではゼロから始まる連続した数値に置き換えられます。

 4 time, mktime
 現在時刻を Unix エポック (1970 年 1 月 1 日 00:00:00 GMT) からの通算秒として返します。
mktime — 日付を Unix のタイムスタンプとして取得する

 5 date
 date(string $format, ?int $timestamp = null): string
指定された引数 timestamp を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返します。 タイムスタンプが与えられない場合は、現在の時刻が使われます。 つまり timestamp はオプションであり そのデフォルト値は time() の値です。
*/