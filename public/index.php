<?php
session_start();
$module = isset($_GET['module']) ? $_GET['module'] : 'dashboard';
$allowed_modules = ['dashboard', 'users', 'settings'];

if (!in_array($module, $allowed_modules)) {
    $module = 'dashboard';
}
?>

<?php include '../app/views/layouts/head.php'; ?> 

<?php include '../app/views/layouts/header.php'; ?>

<div class="container">
    <?php include '../app/views/layouts/sidebar.php'; ?>

    <main class="main-content">
        <?php include "../app/modules/$module.php"; ?>
    </main>
</div>

<?php include '../app/views/layouts/footer.php'; ?>

</body>
</html>
 