
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menager Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="row no-gutters mt-5">

                <div class="col-12  col-md-8 ">

                    <div class="container p-4">

                        <div class="row">

                            <div class="col">
                                <?php include('../FONT_END/component/search.php') ?>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col">
                                <?php include('../FONT_END/component/show.php') ?>
                            </div>

                        </div>
                        <div class="row">
                            <?php
                            $check = false;
                            if ($check) {
                                echo " <div class=\"col bg-light p-4 rounded shadow\">";
                                include('../FONT_END/element/view.php');
                                echo "</div>";
                            }
                            ?>
                        </div>
                        <div class="row mt-3">
                            <?php
                            $check1 = false;
                            if ($check1) {
                                echo " <div class=\"col bg-light p-4 rounded shadow\">";
                                include('../FONT_END/element/edit.php');
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-md-4 bg-light p-4 rounded shadow ">
                    <?php include('../FONT_END/component/add.php') ?>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>