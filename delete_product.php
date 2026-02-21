?php
include 'config.php';

if (isset($_GET['id'])) {

    $id = (int) $_GET['id']; // segurança básica

    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>