<?php

session_start();

// session_unset();

// session_destroy();

unset($_SESSION['user_id']);
// session_destroy();
?>
<script>
    window.location.href = "index.php";
</script>
<?php
// header('location:../Risotto Login-Register.php');
// exit();


?>