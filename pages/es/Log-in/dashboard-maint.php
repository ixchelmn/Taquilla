

<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {    session_start();
}
if ($_SESSION['role'] == 1) {
    include('admin-dashboard.php');
} else {
    include('user-dashboard.php');
}
?>