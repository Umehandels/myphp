
<?php

$email = "";
$comments = "";
$message = "";
$uploadMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Receive form data
    $email = $_POST['email'] ?? "";
    $comments = $_POST['comments'] ?? "";

    // Server-side email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    } else {

        printf(
            "<p>Received email: %s and comments: %s</p>",
            htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($comments, ENT_QUOTES, 'UTF-8')
        );

    }

    // Handle file upload
    if (isset($_FILES['uploaded_file'])) {

        $file = $_FILES['uploaded_file'];

        if ($file['error'] === UPLOAD_ERR_NO_FILE) {

            $uploadMessage = "No file was uploaded.";

        } elseif ($file['error'] !== UPLOAD_ERR_OK) {

            $uploadMessage = "There was an error uploading your file.";

        } elseif ($file['size'] > 2 * 1024 * 1024) {

            $uploadMessage = "File is too large. Maximum size is 2MB.";

        } else {

            // Check the actual file MIME type
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($file['tmp_name']);

            // Allowed file types
            $allowedTypes = [
                'image/jpeg' => 'jpg',
                'image/png'  => 'png',
                'application/pdf' => 'pdf'
            ];

            if (!array_key_exists($mimeType, $allowedTypes)) {

                $uploadMessage = "Only JPG, PNG and PDF files are allowed.";

            } else {

                // Create uploads directory if it doesn't exist
                $uploadDirectory = __DIR__ . '/uploads/';

                if (!is_dir($uploadDirectory)) {
                    mkdir($uploadDirectory, 0755, true);
                }

                // Generate a random filename
                $newFileName = bin2hex(random_bytes(16))
                             . '.' . $allowedTypes[$mimeType];

                $destination = $uploadDirectory . $newFileName;

                // Move uploaded file
                if (move_uploaded_file($file['tmp_name'], $destination)) {

                    $uploadMessage = "File uploaded successfully!";

                } else {

                    $uploadMessage = "Failed to save uploaded file.";

                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using form for example</title>
</head>

<body>

    <h3>Contact Form</h3>

    <?php if ($message !== ""): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <?php if ($uploadMessage !== ""): ?>
        <p><?= htmlspecialchars($uploadMessage) ?></p>
    <?php endif; ?>

    <form name="Contact_form"
          method="POST"
          action="index.php"
          enctype="multipart/form-data">

        <label for="email">Email Address</label>
        <input type="email"
               id="email"
               name="email"
               value="<?= htmlspecialchars($email) ?>"
               required>

        <br><br>

        <label for="comments">Comments</label>
        <textarea name="comments"
                  id="comments"><?= htmlspecialchars($comments) ?></textarea>

        <br><br>

        <label for="uploaded_file">Upload File:</label>
        <input type="file"
               id="uploaded_file"
               name="uploaded_file"
               accept=".jpg,.jpeg,.png,.pdf">

        <br><br>

        <input type="submit" value="Send">

    </form>

</body>
</html>
