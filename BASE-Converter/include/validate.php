<?php
  // function for clearing the inputs 
  function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // validation 
  $number = $curBase = $conBase = $convertedNum = "" ; 
  $numberERR = $curERR = $conERR = "";

  if (isset($_POST['submit'])){
    // give error message if value is empty 
    if (empty($_POST['number'])){
      $numberERR = '* this field cannot be empty';
    } else {
      $number = ($_POST['number']);
      if (!filter_var($number, FILTER_SANITIZE_NUMBER_INT)){
         $numberERR = '* only numbers are allowed';
      }
     
    }
  }
  if (isset($_POST['curBase'])){
    $curBase = ($_POST['curBase']);
    if ($curBase == 'default') {
      $curERR = '* please select a value';
    } else {
      $curBase = (int)$curBase;
    }
  }

  if (isset($_POST['conBase'])){
    $conBase = ($_POST['conBase']);

    if ($conBase == 'default') {
      $conERR = '* please select a value';
    } else {
      $conBase = (int)$conBase;
    }
  
  }// end of checks
    $convertedNum ='';
    // takes the user inputs and runs them through PHP base_convert function 
    function baseconverter($number, $curBase, $conBase){
      $convertedNumber = base_convert($number, $curBase, $conBase);
      echo $convertedNumber;
    }

   ?>