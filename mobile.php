<?php
// mobile.php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site non compatible mobile</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background: #f5f5f5;
      color: #333;
      padding: 50px 20px;
    }
    .warning {
      background: #ffdddd;
      border: 1px solid #ff5555;
      display: inline-block;
      padding: 20px 30px;
      border-radius: 8px;
    }
    h1 {
      color: #b30000;
    }
  </style>
</head>
<body>
  <div class="warning">
    <h1>⚠️ Site non responsive</h1>
    <p>Merci de revenir depuis un ordinateur 💻</p>
    <p>Ce site n’est pas adapté aux mobiles ou tablettes.</p> 
    <p> J'ai une vie.</p>
    <!-- <button onclick="window.location.href='<?php echo BASE_URL; ?>'">Y aller quand même</button> -->
  </div>
</body>
</html>
