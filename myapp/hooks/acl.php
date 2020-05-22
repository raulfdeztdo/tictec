<?php
  $allowAll = array();
  $allowOnly = array();
  $allowAll['session']['login'] = True;
  $allowAll['common']['unauthorized'] = True;
  $allowAll['session']['logout'] = True;
  // 1 → admin; 2 → usuarios registrados; 3 → usuarios profesores
  $allowOnly[2]['common']['home'] = True;
  $allowOnly[1]['common']['home'] = True;
?>
