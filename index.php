<?php
// Fetch random PDF
$dir = "uploads/";
$files = glob($dir . "*.pdf");
$randomFile = $files ? $files[array_rand($files)] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart PDF Hub</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    header {
      background: #4CAF50;
      color: white;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
    }
    .container {
      margin: 20px auto;
      width: 80%;
      max-width: 900px;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    embed {
      width: 100%;
      height: 500px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 15px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      background: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: 0.3s;
    }
    .btn:hover {
      background: #45a049;
    }
    form {
      margin-top: 20px;
    }
    input[type="file"] {
      padding: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>📚 Smart PDF Hub</header>
  
  <div class="container">
     <h2>Upload Your PDF</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="pdfFile" accept="application/pdf" required><br>
      <button type="submit" class="btn">📤 Upload</button>
    </form>


    <h2>Random PDF Viewer</h2>
    <?php if ($randomFile): ?>
      <embed src="<?php echo $randomFile; ?>" type="application/pdf">
    <?php else: ?>
      <p>No PDFs uploaded yet. Upload one to get started!</p>
    <?php endif; ?>

    <a href="index.php" class="btn">🎲 Show Another PDF</a>

   
  </div>
</body>
</html>
