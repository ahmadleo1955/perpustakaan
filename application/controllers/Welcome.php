<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('blank');
	}
	
	public function Home()
	{
		$this->load->view('header');
		$this->load->view('blank');
	}
	public function Anggota ()
	{
		$this->load->view('header');
		$this->load->view('creatanggota');
	}
	public function DaftarJadiAnggota()
	{
		$this->load->view('header');
		$this->load->view('creatanggota');
		
	}
	public function AnggotaTerdaftar()
	{
		$this->load->view('header');
		$this->load->view('readanggota');
	}
	public function CariAnggota()
	{
		$this->load->view('header');
		$this->load->view('updateanggota');
	}
	public function HapusAnggota()
	{
		$this->load->view('header');
		$this->load->view('HapusAnggota');
	}
	public function Pustaka()
	{
		$this->load->view('header');
		$this->load->view('creatpustaka');
	}
		public function DaftarPustaka()
	{
		$this->load->view('header');
		$this->load->view('creatpustaka');
	}
		public function PustakaTerdaftar()
	{
		$this->load->view('header');
		$this->load->view('readpustaka');
	}
		public function CariPustaka()
	{
		$this->load->view('header');
		$this->load->view('updatepustaka');
	}
		public function HapusPustaka()
	{
		$this->load->view('header');
		$this->load->view('hapuspustaka');
	}
	public function Pustakawan()
	{
		$this->load->view('header');
		$this->load->view('blank');
	}
	public function DaftarPustakawan()
	{
		$this->load->view('header');
		$this->load->view('creatpustakawan');
	}
	public function PustakawanTerdaftar()
	{
		$this->load->view('header');
		$this->load->view('readpustakawan');
	}
	public function CariPustakawan()
	{
		$this->load->view('header');
		$this->load->view('updatepustakawan');
	}
	public function HapusDaftarPustakawan()
	{
		$this->load->view('header');
		$this->load->view('hapuspustakawan');
	}
	public function Transaksi()
	{
		$this->load->view('header');
	}
	public function LayananPeminjamanBuku()
	{
		$this->load->view('header');
		$this->load->view('creattransaksi');
	}
	public function DaftarBukuYangTelahDipinjam()
	{
		$this->load->view('header');
		$this->load->view('readtransaksi');
	}
	public function UbahInformasiPinjam()
	{
		$this->load->view('header');
		$this->load->view('updatetransaksi');
	}
	public function HapusDaftarPeminjaman()
	{
		$this->load->view('header');
		$this->load->view('hapustransaksi');
	}
	public function About()
	{
		$this->load->view('header');
		$this->load->view('about');
	}
	
}
