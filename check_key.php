<?php
  // シェルコマンド "ls" の全ての結果を出力し、出力の最後の
  // 行を $last_line に格納します。シェルコマンドの戻り値は
  // $retval に格納されます。
  // $img_url1='koyama/bg.jpg';
  // $img_url2='koyama/face.jpg';
  //
  // $test = system('koyama/tempTest,koyama/bg.png,koyama/face.jpg',$img_t_f);
  // echo $img_t_f;
  // echo $test;

  echo exec('koyama/tempTest,koyama/bg.png,koyama/face.jpg');

  // 追加情報を表示します。
  if(exec('koyama/tempTest,koyama/bg.png,koyama/face.jpg')){
    // echo $img_t_f;
    // echo $test;
    echo '<hr />key is locked   ';
    echo '<img src="img/lock.png" width="300" height="300">';


  }else{
    // echo $img_t_f;
    // echo $test;
    echo '<hr />key is Unlocked';
    echo '<img src="img/unlock.png" width="350" height="300">';
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>サンプルページ</TITLE>
</HEAD>
<BODY>

<!-- <img src="img/lock.png" width="300" height="300">
<img src="img/unlock.png" width="300" height="300"> -->

</BODY>
</HTML>
