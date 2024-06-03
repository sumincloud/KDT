<?php

  $str = 'Hello, World';
  $substring = 'World';

  $pos = strpos($str, $substring);

  echo $str;
  echo $pos;

  if($pos !== false){
    echo '찾은 위치 : '. $pos;
  }else{
    echo '찾을 수 없습니다.';
  }

  //strpos() 함수는 대소문자를 구분해서 문자열에 특정 문자가 포함되어 있는지를 확인하는데 매우 유용합니다.


  //2. str_contains() 함수

  if(!function_exists('str_contains')){
    function str_contains($txt1, $txt2){
      if(""===$txt2){
        return true;
      }
      return false!==strpos($txt1, $txt2);
    }
  }

  $txt1 = '반갑습니다. php함수입니다. 어려워요.';
  $txt2 = '어려워요.';

  if(str_contains($txt1, $txt2)){
    echo "<br>txt1 문자열에 " .$txt2."이 있습니다.";
  }else{
    echo "<br>txt1 문자열에". $txt2."이 없습니다.";
  }

?>