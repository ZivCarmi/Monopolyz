<?php

if (!function_exists('dd')) {
  function dd ($value) {
    echo '<pre>';
    echo __FILE__ . ' | Line : ' . __LINE__;
    echo '<br><br><br>';
    print_r($value);
    echo '</pre>';
  }
}