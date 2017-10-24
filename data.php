<?php 
class data {
public $nama ;
public $kelas ;
public $jenis_kelamin ;
public $alamat ;

	public function __construct ($nama,$kelas,$jenis_kelamin,$alamat)		{
		
		$this->nama = $nama ;
		$this->kelas= $kelas ;
		$this->jenis_kelamin = $jenis_kelamin ;
		$this->alamat = $alamat ;
		

	}
	    public function get_nama ()
	{
		return $this->nama ;
	}
	public function get_kelas()
	{
		return $this->kelas ;
	}
	public function get_jenis_kelamin ()
	{
		return $this->jenis_kelamin ;
	}
	public function get_alamat()
	{
		return $this->alamat ;
	}

}
?>