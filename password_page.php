<?php
require __DIR__ . '/partials/head.php';

session_start();

if (isset($_SESSION['pass_user'])) {
    $password_user = $_SESSION['pass_user'];
}

?>

<body>

    <div class="container">
        <div class="row mt-4 border border-2 rounded-3 ">
            <div class="col res-password py-4 px-3 fs-5 text-center">
                La tua password è: <span class="fw-bold"> <?php echo $password_user ?></span>
            </div>
        </div>
    </div>

</body>

</html>