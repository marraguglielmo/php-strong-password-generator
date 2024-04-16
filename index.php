<?php
if (isset($_GET['p_length'])) {
    session_start();
    $_SESSION['password_length'] = $_GET['p_length'];
}


require_once __DIR__ . '/partials/head.php';

?>

<body>
    <section>

        <div class="container-lg m-auto">
            <div class="text-center ">
                <h1 class="mt-4 mb-1">Strong Password generator</h1>
                <h2>Genera una password sicura</h2>
            </div>
            <div class="container">
                <div class="row mt-4 border border-2">
                    <div class="col res-password py-4 px-3">
                        Nessun parametro valido inserito
                    </div>
                </div>
                <div class="row mt-3 border border-2 compilation">
                    <form action="index.php" method="GET">
                        <div class="col py-4 ps-3">
                            <!-- 1 -->
                            <div class="pass-length">
                                <div>
                                    <p class="fs-5">Lunghezza password:</p>
                                </div>
                                <div>
                                    <input name="p_length" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="repeat">
                                <div>
                                    <p class="fs-5">Consenti ripetizioni di uno o più caratteri:</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="radio" id="yes" name="repeat">
                                        <label for="yes" class="fs-5 ms-2">Si</label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input" type="radio" id="no" name="repeat">
                                        <label for="no" class="fs-5 ms-2">No</label>
                                    </div>
                                </div>
                            </div>
                            <!-- buttons -->
                            <div class="buttons d-block">
                                <button class="btn btn-primary" type="submit">Invia</button>
                                <button class="btn btn-danger" type="submit">Annulla</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
</body>

</html>