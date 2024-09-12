<?php
$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOk = 1;

// Check if image file is a real image
if (isset($_POST)) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check file size (limit to 5MB)
if ($_FILES["file"]["size"] > 5000000) {
    echo json_encode(['location' => '']);
    exit();
}

// Allow only certain formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo json_encode(['location' => '']);
    exit();
}

// Move the uploaded file
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $location = "/uploads/" . basename($_FILES["file"]["name"]);
        echo json_encode(['location' => $location]);
    } else {
        echo json_encode(['location' => '']);
    }
} else {
    echo json_encode(['location' => '']);
}
?>
