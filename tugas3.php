<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelatihan</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="inputbarang" align="center">
        <h3>Mendaftar Pelatihan</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>

                    <td>: <input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>Program Pelatihan</td>
                    <td>: <select name="pelatihan" id="">
                            <option value="Junior Web Developer">Junior Web Developer</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Content Creator">Conten Creator</option>
                            <option value="Desaign Multimedia Muda">Desainer Multimedia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tahun Daftar</td>
                    <td>: <select name="tahun" id="">
                            <option selected=”selected”>Tahun</option>
                            <option value="2000"> 2000 </option>
                            <option value="2001"> 2001 </option>
                            <option value="2002"> 2002 </option>
                            <option value="2003"> 2003 </option>
                            <option value="2004"> 2004 </option>
                            <option value="2005"> 2005 </option>
                            <option value="2006"> 2006 </option>
                            <option value="2007"> 2007 </option>
                            <option value="2008"> 2008 </option>
                            <option value="2009"> 2009 </option>
                            <option value="2010"> 2010 </option>
                            <option value="2011"> 2011 </option>
                            <option value="2012"> 2012 </option>
                            <option value="2013"> 2013 </option>
                            <option value="2014"> 2014 </option>
                            <option value="2015"> 2015 </option>
                            <option value="2016"> 2016 </option>
                            <option value="2017"> 2017 </option>
                            <option value="2018"> 2018 </option>
                            <option value="2019"> 2019 </option>
                            <option value="2020"> 2020 </option>
                            <option value="2021"> 2021 </option>
                            <option value="2022"> 2022 </option>
                            <option value="2023"> 2023 </option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Daftar" name="tombol">
        </form>

        <div class="container col-6">
            <table class="table table-success table-striped mt-3">
                <thead>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Program</th>
                    <th>Tahun</th>
                </thead>
                <tbody>
                    <!--  -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="bootstrap-5.2.3-dist/js/jquery-3.6.4.min.js"></script>

    <!-- untuk memmastikan document terload dengan sempurna -->
    <script>
    $(document).ready(function() {
        $("form").submit(function(event) {
            event.preventDefault();
            // alert("Form telah disubmit");
            //console.log("Form telah disubmit");
            var formData = {
                nama: "nama",
                email: "email",
                alamat: "alamat",
                pelatihan: "pelatihan",
                tahun: "tahun"
            }
            $.ajax {
                type = "POST",
                    url = "proses.php",
                    data: formData,
                    succes: function(result) {
                        $("tbody").append(resut);
                    }
            }
        })
    })
    </script>
</body>

</html>