<?php 
  $gpg = new gnupg();
  $info = $gpg -> import($keydata);
  print_r($info);

  $gpg = gnupg();
  $gpg -> addencryptkey("8660281B6051D071D94B5B230549F9DC851566DC");
  $enc = $gpg -> encrypt("just a test");
  echo $enc;
?>
