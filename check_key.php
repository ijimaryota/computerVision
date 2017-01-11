<?php
  echo '<pre>';
  $image_path = 'img/lock.png';
  // シェルコマンド "ls" の全ての結果を出力し、出力の最後の
  // 行を $last_line に格納します。シェルコマンドの戻り値は
  // $retval に格納されます。
  $last_line = system('ls', $retval);

  // 追加情報を表示します。
  if($retval){
    echo '<hr />key is locked   ';



  }else{
    echo '<hr />key is Unlocked';
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>サンプルページ</TITLE>
</HEAD>
<BODY>

<img src="img/lock.png" width="300" height="300">
<img src="img/unlock.png" width="300" height="300">

</BODY>
</HTML>
