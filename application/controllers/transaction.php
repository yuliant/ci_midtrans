<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transaction extends CI_Controller
{

	/**
	 * Untuk menge-check transaksi pembayaran secara manual
	 */


	public function __construct()
	{
		parent::__construct();

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: PUT, GET, POST");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, COntent-Type, Accept");

		$params = array('server_key' => 'SB-Mid-server-m5SZQgX5EZPdBhD1-5ixUE_l', 'production' => false);
		$this->load->library('veritrans');
		$this->load->model('Snapmodel');
		$this->veritrans->config($params);
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('transaction');
	}

	public function process()
	{
		$order_id = $this->input->post('order_id');
		$action = $this->input->post('action');
		switch ($action) {
			case 'status':
				$this->status($order_id);
				break;
			case 'approve':
				$this->approve($order_id);
				break;
			case 'expire':
				$this->expire($order_id);
				break;
			case 'cancel':
				$this->cancel($order_id);
				break;
		}
	}

	public function status($order_id)
	{
		echo 'test get status </br>';
		echo '<pre>';
		print_r($this->veritrans->status($order_id));
		echo '</pre>';

		$response = $this->veritrans->status($order_id);

		$data = [
			'transaction_status' => $response->transaction_status,
			'status_message' => $response->status_message
		];

		$update_data = $this->Snapmodel->updateData($data, $order_id);

		if ($update_data) {
			echo "berhasil diupdate";
		} else {
			echo "gagal update";
		}

		echo "<br>";
		echo "<a href=" . base_url() . ">";
		echo "Kembali";
		echo "</a>";
	}

	public function cancel($order_id)
	{
		echo 'test cancel trx </br>';
		echo $this->veritrans->cancel($order_id);
	}

	public function approve($order_id)
	{
		echo 'test get approve </br>';
		print_r($this->veritrans->approve($order_id));
	}

	public function expire($order_id)
	{
		echo 'test get expire </br>';
		print_r($this->veritrans->expire($order_id));
	}
}
