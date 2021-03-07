<?php require_once('app/classes/Board.class.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monopolyz</title>
</head>

<body>
  <div class="main-container">
    <div class="game-container">
      <?php include('partials/board/center.php'); ?>
      <?php include('partials/board/top-row.php'); ?>
      <?php include('partials/board/right-row.php'); ?>
      <?php include('partials/board/bottom-row.php'); ?>
      <?php include('partials/board/left-row.php'); ?>
    </div>
    <div class="sidebar">
      <button type="button" class="start-game">Start Game</button>
    </div>
  </div>
  <?php include('partials/players-creation/players-creation.php'); ?>
</body>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/config.css?v=<?= time(); ?>">
<link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/script.js?v=<?= time(); ?>"></script>

</html>