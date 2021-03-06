<?php

$data = json_decode(file_get_contents("php://input"), true);

echo '<pre>';
print_r($data);
echo '</pre>';

if (isset($data['players']) && !empty($data['players'])) {

  // $player_pos = filter_var($data['player_pos'], FILTER_SANITIZE_STRING);
  // $player_name = filter_var($data['player_name'], FILTER_SANITIZE_STRING);
  // $allowedPlayerName = '/[a-zA-Z0-9א-ת]/';

  // if () {}

  // echo $player_pos;
  // echo $player_name;
}
