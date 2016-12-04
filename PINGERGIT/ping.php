<?php
if (isset($_GET['ping'])) {
    exec("pushover -U PUT USER KEY HERE -T PUT API TOKEN HERE -p 1 YOU ARE BEING ALERTED!");
}
?>

