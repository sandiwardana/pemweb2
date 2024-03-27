<?php

Class Nilai_mahasiswa {
    // Property
    public $matakuliah;
    public $nilai;
    public $nim;
    public $nama;
    
    // Method
    function __construct($_nim, $_nama) {
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function nilai_hasil(){
        if($this->nilai < 35){
            return 'E';
        } elseif ($this->nilai >= 35 && $this->nilai < 55){
            return 'D';
        } elseif ($this->nilai >= 56 && $this->nilai < 69){
            return 'C';
        } elseif ($this->nilai >= 70 && $this->nilai <= 84){
            return 'B';
        } elseif ($this->nilai >= 85 && $this->nilai <= 100){
            return 'A';
        } else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }
}

//Instance Object
$mahasiswa1 = new Nilai_mahasiswa(110223281 ,'Sandi Wardana');
$mahasiswa1->nilai = 95;
$mahasiswa1->matakuliah = 'Pemograman Web';