<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3 col-3">
        <form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select class="form-select mt-5" aria-label="Default select example">
                <option selected>Program Pelatihan</option>
                <option value="jwd">Junior Developer</option>
                <option value="dm">Digital Marketing</option>
                <option value="cc">Content Creator</option>
                <option value="dmm">Designer Multimedia Muda</option>
            </select>
            <div class="mb-3 mt-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tahun Daftar</option>
                    <?php
                            $now=date("Y");
                            for ($a=2000;$a<=$now;$a++){
                                echo "<option value='$a'>" . $a . "</option>";
                            }
                        ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
    </div>
</body>

</html>