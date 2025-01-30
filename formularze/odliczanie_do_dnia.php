<!DOCTYPE html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #centered {
            display: inline-block;
            width: 60%;
            height: 60%;
        }

        form {
            margin: auto !important;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <div id="centered">
            <?php
                @$data=$_GET['data'];
                if (!empty($data)) {
                    $data_obj = date_create($data);
                    $roznica=date_diff(new DateTime(),$data_obj);
                    if ($data_obj > (new DateTime())){
                        echo "<h1 style='text-align: center; margin: 50px;'>Pozostało $roznica->y lat $roznica->m miesięcy i $roznica->d dni.</h1>";
                    } else {
                        echo "<h1 style='text-align: center; margin: 50px;'>Upłynęło $roznica->y lat $roznica->m miesięcy i $roznica->d dni.</h1>";
                    }
                }
            ?>
            <form action="odliczanie_do_dnia.php" method="get" class="col-lg-6 card">
                <div class="form-group row">
                    <label for="data" class="col-sm-5 col-form-label">Oczekiwany dzień: </label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="data">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij</button>
            </form>
        </div>
    </div>
</body>
