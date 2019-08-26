<?php
require_once('config.php');
?>
<?php
if (isset($_POST)) {
    $firstname         = $_POST['firstname'];
    $lastname         = $_POST['lastname'];
    $email             = $_POST['email'];
    $phonenumber    = $_POST['phonenumber'];
    $password         = sha1($_POST['password']);
    $sql = $db->prepare("INSERT INTO app_users (firstname, lastname, email, phonenumber, password ) VALUES( ?,?,?,?,?)");
    $result = $sql->execute([$firstname,  $lastname, $email, $phonenumber, $password]);
    if ($result) {
        echo 'Successfully saved.';
    } else {
        echo 'There were erros while saving the data.';
    }
} else {
    echo 'No data';
}
