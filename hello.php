<form method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Hello, " . htmlspecialchars($_POST["name"]) . "!";
}
?>
