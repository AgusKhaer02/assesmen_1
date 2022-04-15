<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesmen 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
    <tr>
        <td style="width: 70%;">
            <div class="container" id="1">
                <h1>Form Assesmen 1</h1>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-25">
                            <label for="fnim">NIM</label>
                        </div>
                        <div class="col-45">
                            <input type="text" id="fnim" name="nim" placeholder="Your NIM..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Name</label>
                        </div>
                        <div class="col-45">
                            <input type="text" id="fname" name="name" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lemail">Email</label>
                        </div>
                        <div class="col-25">
                            <input type="email" id="lemail" name="email" placeholder="Your Email..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lwebsite">Website</label>
                        </div>
                        <div class="col-45">
                            <input type="text" id="lwebsite" name="website" placeholder="Your Website..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="comment">Comment</label>
                        </div>
                        <div class="col-75">
                            <textarea id="comment" name="comment" placeholder="Your Comment.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lgender">Gender</label>
                        </div>
                        <div class="col-25">
                            <input type="radio" id="lgender" name="lgender" value="female"> Female
                            <input type="radio" id="lgender" name="gender" value="male"> Male
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lphoto">Upload File</label>
                        </div>
                        <div class="col-45">
                            <input type="file" id="lphoto" name="photo_file" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="lagama">Agama</label>
                        </div>
                        <div class="col-75">
                            <?php
                            
                                $agama = [
                                    "islam",
                                    "kristen",
                                    "katholik",
                                    "budha",
                                    "konghucu",
                                ];

                                foreach ($agama as $value) {
                            ?>
                            <input type="radio" id="lagama" name="agama" value="<?= $value?>"> <?= $value?>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lprodi">Prodi</label>
                        </div>
                        <div class="col-75">
                            <select id="lprodi" name="prodi">
                                <?php
                                
                                    $agama = [
                                        "Teknik Informatika",
                                        "Sistem Informasi",
                                        "Teknik Komputer",
                                        "Manajemen Bisnis",
                                        "Desain Komunikasi Visual",
                                    ];

                                    foreach ($agama as $value) {
                                ?>

                                    <option value="<?= $value?>"><?= $value?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Hapus">
                    </div>
                </form>
            </div>    
        </td>
        <td style="padding-right:20px ;">
        <div class="container">
        <div id="result">
                <?php
                    if(!empty($_POST)){

                        // print_r($_POST);
                        $direktori= "images/";
                        $nama_foto = $_FILES["photo_file"]["name"];
                        $size_foto = $_FILES["photo_file"]["size"];
                        $tipe_foto = $_FILES["photo_file"]["type"];
                        $upload = $direktori.$nama_foto;
                        move_uploaded_file($_FILES["photo_file"]["tmp_name"], $upload);
                    ?>
                        <h2>Your Input</h2>
                        <table>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><?= $_POST['nim']?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?= $_POST['name']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $_POST['email']?></td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>:</td>
                                <td><?= $_POST['website']?></td>
                            </tr>
                            <tr>
                                <td>Komentar</td>
                                <td>:</td>
                                <td><?= $_POST['comment']?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td><?= $_POST['gender']?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?= $_POST['agama']?></td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td><?= $_POST['prodi']?></td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>:</td>
                                <td><img src='<?= $upload?>' width='100' height='100'></td>
                            </tr>
                        </table>
                        

                <?php
                    }

                ?>
            </div>
        </div>

        </td>
    </tr>
</table>
    

</body>
</html>