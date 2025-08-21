<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["type"] == "application/pdf") {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES["pdfFile"]["name"]);

        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $uploadFile)) {
            echo "File uploaded successfully: <a href='$uploadFile'>View PDF</a>";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Please upload a valid PDF file.";
    }
}
?>
