<?php

if (!empty($_POST['nama'])) {
    $mhs = new Mahasiswa($_POST['nim'], $_POST['nama']);
    $data_mhs = $mhs->tampilkan_mahasiswa();
}

class Mahasiswa
{

    private $data_mahasiswa;

    public function __construct($nim, $nama)
    {
        $this->data_mahasiswa = [
            "nim" => $nim,
            "nama" => $nama
        ];
    }

    public function tampilkan_mahasiswa()
    {

        $mahasiswa = "Nama : " . $this->data_mahasiswa['nama'] . "<br>NIM : " . $this->data_mahasiswa['nim'] . "";
        return $mahasiswa;
    }
}

?>



<html>

<body>
    <form action="" method="POST">
        Nama: <input type="text" name="nama"><br>
        NIM: <input type="text" name="nim"><br>
        <input type="submit">
    </form>
    <div>
        <?php if (isset($data_mhs)) {
            echo $data_mhs;
        } ?>
    </div>
</body>

</html>
