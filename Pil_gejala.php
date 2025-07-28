<?php include 'koneksi.php'; ?>

<center>
    <form class="col-6" method="POST" action="proses.php">
    <h2>Silahkan</h2>
    <h2>Pilih Gejala Di Bawah</h2>
    <div style="overflow: scroll; height: 467px;">
            <?php
            $qry = "SELECT * FROM tb_gejala";
            $data = mysqli_query($kon, $qry);

            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Text input with checkbox" 
                    value="<?= $d['gejala'] ?>" readonly>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input" 
                            value="<?= $d['kode'] ?>" name="<?= $d['id'] ?>" style="margin-left: 0;">
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit">
    </form>
</center>

