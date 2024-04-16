<?php

require __DIR__ . '/data/function.php';

$symbols = ['!', '?', '&', "'", '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];

$lettersMin = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y", "z"];

$lettersMai = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"];

$numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

$password_user = '';

if (isset($_GET['p_length'])) {
    session_start();
    $getPassword = getRandomPass($_GET['p_length'], $symbols, $lettersMin, $lettersMai, $numbers);
    if ($getPassword) {
        $password_user = $getPassword;
    } else {
        $password_user = 'Nessun parametro valido inserito';
    }
    $_SESSION['pass_user'] = $password_user;
    header('Location: ./password_page.php');
}


require_once __DIR__ . '/partials/head.php';

?>

<body class="text-white">
    <section>

        <div class="container-lg m-auto">
            <div class="text-center ">
                <h1 class="mt-4 mb-1 fw-bold">Strong Password generator</h1>
                <h2 class="fw-semibold">Genera una password sicura</h2>
            </div>
            <div class="container">





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
                                <button class="btn btn-danger" type="reset">Annulla</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
</body>

</html>