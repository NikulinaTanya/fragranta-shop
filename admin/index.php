<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/generator/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fragranta. Администрирование.</title>

    <link rel="stylesheet" href="../styles/font-awesome.min.css" />
    <link rel="stylesheet" href="../styles/font-face.css" />
    <link rel="stylesheet" href="../fonts/stroke-gap-icons.min.css" />
    <link rel="stylesheet" href="../fonts/OpenSans.css" />
    <link rel="stylesheet" href="../styles/jquery-ui.css" />
    <link rel="stylesheet" href="../styles/setting.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/admin.css" />

    <script src="../js/jQuery.js"></script>
    <script src="../js/jQueryUI.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['admin_online']) && $_SESSION['admin_online'] == 1){
    include($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/template_admin_logout.php");
} else {
    include($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/template_admin.php");
}
?>

<script src="../js/fragranta.js"></script>
</body>
</html>