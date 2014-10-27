<?php
/*
* Penggunaan Constructor
*/
class Mahasiswa
{
  public $nim;
  public $nama;
  public $nilai;

  // Inilah Constructor
  function __construct($nim, $nama, $nilai)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->nilai = $nilai;
  }

  function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }
}

// Instantisasi Class Otomatis Menjalankan Constructor dengan menambahkan nilai property class

$mahasiswa = new Mahasiswa(11212262, 'Nurul Imam', 90);
echo "NIM : ".$mahasiswa->nim."<br />";
echo "Nama : ".$mahasiswa->nama."<br />";
echo "Nilai : ".$mahasiswa->nilai."<br />";
echo "Status : ".$mahasiswa->StatusNilai()."<br />";


/*
* Penggunaan Destructor
*/
class Mobil
{
  // Ini Constructor
  function __construct()
  {
    # code...
  }

  // Ini Destructor
  function __destruct()
  {
    # code...
  }
}
?>