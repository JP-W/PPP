<?php
  /*function ping() {
  #  exec("echo ON | wall");
  }*/

  if (isset($_GET['ping'])) {
    exec("pushover -U uRnwvYnEk9FLxTLhKypJmrKx1YCJgA -T a6dvd4jkrjw7zgkmhxyrsw28cagpx8 -p 1 YOU ARE BEING ALERTED!");
  }

 ?>