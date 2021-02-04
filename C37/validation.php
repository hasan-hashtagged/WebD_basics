<?php
  function validate($name) {
    if ( $name == ' ' ) {
      return "Please Enter a username";
    }
    if (strlen($name) < 3 ) {
      return "Username too short";
    }
    switch ($name) {
      case 'tom':
      case 'jerry':
      case 'nahid':
      return "Username already exists.";
    }
    return "VALID USERNAME..";
  }
  echo validate(trim($_REQUEST['name']));
 ?>
