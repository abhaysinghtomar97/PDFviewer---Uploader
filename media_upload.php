<?php
$dir = "pdfs/";  
$files = glob($dir . "*.pdf"); // get all pdf files
$randomFile = $files[array_rand($files)]; // pick random one
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
</head>
<body>
    <embed src="<?php $randomFile ?>" width="100%" height="600px" type="application/pdf">

    <h2>Upload a PDF</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pdfFile" accept="application/pdf" required>
        <button type="submit">Upload</button>
    </form>

</body>
</html>
