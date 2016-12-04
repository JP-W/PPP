<?php
  if (isset($_POST['data'])) {
    exec("pushover -U PUT USER KEY HERE -T PUT API TOKEN HERE -p 1 ". $_POST['data']. "");
  }

 ?>