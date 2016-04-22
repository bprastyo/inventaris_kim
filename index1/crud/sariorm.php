<?php

 class pembelian {

	 private $db;
	 private $table = 'tb_pembelian';

	 public $no_pembelian;
   public $tgl_pembelian;
   public $kode_barang;
   public $jumlah;
   public $Satuan;

	 public function __construct($db) {
		 $this->db = $db;
	 }

	 public function lihatpembelian() {

		 $query = "SELECT * FROM tb_pembelian ORDER BY No_pembelian ASC";

		 $stmt = $this->db->query($query);

		 return $stmt;
	 }

	 public function lihatSebagian($page_position, $item_per_page) {
		 $query = "SELECT * FROM tb_pembelian ORDER BY No_pembelian ASC LIMIT $page_position, $item_per_page";

		 $stmt = $this->db->prepare($query);
		 $stmt->execute(array($page_position, $item_per_page));

		 return $stmt;
	 }

	 public function lihat($id) {
		 $query = "SELECT * FROM ".$this->table." WHERE No_pembelian= $id";

		 $stmt = $this->db->prepare($query);
		 $stmt->execute(array($id));

		 return $stmt;
	 }

	 public function cari($cari) {
		 $query = "SELECT * FROM tb_pembelian  WHERE No_pembelian LIKE '%$cari%'";

		 $r = $this->db->query($query);

		 return $r;
	 }

	 // Buat record baru ke database
	 public function buat() {

		 $query = "INSERT INTO ".$this->table."(Nomor_pembelian,Tanggal_pembelian,Kode_barang,Jumlah,Satuan) VALUES(?,?,?,?,?)";

		 if ($this->cekNpm()){
			$stmt = $this->db->prepare($query);
			$stmt->execute(array("$this->npm", "$this->nama", $this->tgllahir, "$this->jk", "$this->alamat"));

			 if($stmt) {
				 return true;
			 } else {
				 return false;
			 }

		 } else {
			 echo "npm tidak boleh sama";
		 }


	 }

	 public function update() {
		 $query = "UPDATE tb_pembelian SET npm=?, nama=?, tgllahir=?, jenis_kel=?, alamat=? WHERE id = ?";

		 $stmt = $this->db->prepare($query);
		 $stmt->execute(
			 array(
				"$this->npm",
				"$this->nama",
				$this->tgllahir,
				"$this->jk",
				"$this->alamat",
				$this->id)
		 );

		 return $stmt;
	 }

	 // validasi npm
	 public function cekNpm() {

		 $query = "SELECT npm FROM tb_pembelian WHERE npm=?";
		 $ceknpm = $this->db->prepare($query);
		 $ceknpm->execute(array($this->npm));

		 if ($ceknpm->rowCount() == 0) { return true; } else { return false; }
	 }
