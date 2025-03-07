<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $domain = substr(strrchr($email, "@"), 1); 

    if ($password === $domain) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Informasi Tambahan</title>
            <link rel="stylesheet" href="style.css"> 
            <style>
            </style>
        </head>
        <body>
            <div class="login-container">
                <h2>Form Informasi Tambahan</h2>
                <form action="submit_info.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary:</label>
                        <textarea id="summary" name="summary" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience:</label>
                        <textarea id="experience" name="experience" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="education">Education:</label>
                        <textarea id="education" name="education" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="award">Award:</label>
                        <textarea id="award" name="award"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="capability">Capability:</label>
                        <textarea id="capability" name="capability"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="additional_info">Additional Information:</label>
                        <textarea id="additional_info" name="additional_info"></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </body>
        </html>';
    } else {
        header("Location: error.php");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>