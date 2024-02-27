<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai UNESA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqx61gVWgIGe33WN0YYsS537G0OnOOFYP6U679F0u3Y/ukypX+W+mD6y" crossorigin="anonymous">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Container Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Card Styles */
        .card {
            border: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Alert Styles */
        .alert {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }

        .alert-info {
            background-color: #dfe1f3;
            border-color: #cfe2f7;
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Konversi Nilai UNESA</h2>
                        <?php if (session()->has('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="/hitung">
                            <div class="form-group">
                                <label for="nilai_partisipasi">Nilai Partisipasi:</label>
                                <input type="text" class="form-control" id="nilai_partisipasi" name="nilai_partisipasi" value="<?php echo old('nilai_partisipasi'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="nilai_tugas">Nilai Tugas:</label>
                                <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas" value="<?php echo old('nilai_tugas'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="nilai_uts">Nilai UTS:</label>
                                <input type="text" class="form-control" id="nilai_uts" name="nilai_uts" value="<?php echo old('nilai_uts'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="nilai_uas">Nilai UAS:</label>
                                <input type="text" class="form-control" id="nilai_uas" name="nilai_uas" value="<?php echo old('nilai_uas'); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                        </form>
                        <?php if (isset($nilai_akhir) && isset($nilai_huruf)) : ?>
                            <div class="alert alert-success mt-3" role="alert">
                                Nilai Akhir (NA): <?php echo $nilai_akhir; ?>
                            </div>
                            <div class="alert alert-info mt-3" role="alert">
                                Nilai Huruf (NH): <?php echo $nilai_huruf; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>