<?php

#DELETE PRODUCTS

include_once '../config.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

header("Location: ./admin.php");

?>

<?php

#DELETE CATEGORY

include_once '../config.php';
$sql = "DELETE FROM categories WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);

header("Location: ./admin.php");

?>