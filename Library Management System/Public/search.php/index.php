<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['search'];
    $sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Books</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Search for books...">
        <button type="submit">Search</button>
    </form>
    <?php if (isset($result)): ?>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <li><?php echo $row['title'] . " by " . $row['author']; ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
