<?php
  echo '<pre>';

  // シェルコマンド "ls" の全ての結果を出力し、出力の最後の
  // 行を $last_line に格納します。シェルコマンドの戻り値は
  // $retval に格納されます。
  $last_line = system('ls', $retval);

  // 追加情報を表示します。
  if($retval){
    echo '
    <hr />key is locked   ';
  }else{
    echo '
    <hr />key is Unlocked';
  }
?>
