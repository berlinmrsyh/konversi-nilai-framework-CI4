<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Mahasiswa UNESA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" </head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Konversi Nilai Mahasiswa UNESA</h2>
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
