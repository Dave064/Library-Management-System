<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO books (title, author, genre) VALUES ('$title', '$author', '$genre')";
    if (mysqli_query($conn, $sql)) {
        echo "Book added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="title" placeholder="Book Title">
        <input type="text" name="author" placeholder="Author">
        <input type="text" name="genre" placeholder="Genre">
        <button type="submit">Add Book</button>
    </form>
</body>
</html>
