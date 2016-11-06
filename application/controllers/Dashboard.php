<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('dashboard');
	}

	public function retrieveSVNData()
	{
		$svn_data = array(
			0 => array(
			    "id" => 2,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/cpu_wb_agent/cpu_wb_agent.svh",
			    "type" => "hdl",
			    "owner" => "sara",
			    "whitespace" => 15,
			    "comments" => 70,
			    "code" => 22,
			    "sloc" => 107,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
		  	1 => array(
			    "id" => 3,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/cpu_wb_agent/cpu_wb_agent_pkg.sv",
			    "type" => "hdl",
			    "owner" => "mohamed",
			    "whitespace" => 2,
			    "comments" => 1,
			    "code" => 7,
			    "sloc" => 10,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			2 => array(
			    "id" => 4,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/cpu_wb_agent/wb_transaction.svh",
			    "type" => "hdl",
			    "owner" => "amir",
			    "whitespace" => 11,
			    "comments" => 19,
			    "code" => 55,
			    "sloc" => 85,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			3 => array(
			    "id" => 5,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/crc_gen.svh",
			    "type" => "hdl",
			    "owner" => "osama",
			    "whitespace" => 4,
			    "comments" => 159,
			    "code" => 9,
			    "sloc" => 172,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			4 => array(
			    "id" => 6,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_agent_pkg.sv",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 10,
			    "comments" => 23,
			    "code" => 37,
			    "sloc" => 70,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			5 => array(
			    "id" => 7,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_if.sv",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 12,
			    "comments" => 30,
			    "code" => 46,
			    "sloc" => 88,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			6 => array(
			    "id" => 8,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_rx_agent.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 16,
			    "comments" => 29,
			    "code" => 28,
			    "sloc" => 73,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			7 => array(
			    "id" => 9,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_rx_cover.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 17,
			    "comments" => 17,
			    "code" => 72,
			    "sloc" => 106,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			8 => array(
			    "id" => 10,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_rx_driver.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 26,
			    "comments" => 40,
			    "code" => 65,
			    "sloc" => 131,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			9 => array(
			    "id" => 11,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_rx_monitor.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 27,
			    "comments" => 42,
			    "code" => 126,
			    "sloc" => 195,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			10 => array(
			    "id" => 12,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_rx_sequence.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 12,
			    "comments" => 82,
			    "code" => 17,
			    "sloc" => 111,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			11 => array(
			    "id" => 13,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_agent.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 15,
			    "comments" => 27,
			    "code" => 23,
			    "sloc" => 65,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			12 => array(
			    "id" => 14,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_cover.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 18,
			    "comments" => 18,
			    "code" => 74,
			    "sloc" => 110,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			13 => array(
			    "id" => 15,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_ctrl_driver.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 31,
			    "comments" => 26,
			    "code" => 74,
			    "sloc" => 131,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			14 => array(
			    "id" => 16,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_ctrl_seq_item.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 7,
			    "comments" => 16,
			    "code" => 9,
			    "sloc" => 32,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			15 => array(
			    "id" => 17,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_driver.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 27,
			    "comments" => 23,
			    "code" => 103,
			    "sloc" => 153,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			16 => array(
			    "id" => 18,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_monitor.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 26,
			    "comments" => 27,
			    "code" => 93,
			    "sloc" => 146,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			17 => array(
			    "id" => 19,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_mii_tx_sequence.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 11,
			    "comments" => 17,
			    "code" => 17,
			    "sloc" => 45,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			18 => array(
			    "id" => 20,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_packet.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 20,
			    "comments" => 42,
			    "code" => 72,
			    "sloc" => 134,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			),
			19 => array(
			    "id" => 21,
			    "timestamp" => "2016-06-08 06:41:12PDT",
			    "file" => "sv/eth_mii_agent/eth_rx_frame.svh",
			    "type" => "hdl",
			    "owner" => "darronm",
			    "whitespace" => 6,
			    "comments" => 18,
			    "code" => 19,
			    "sloc" => 43,
			    "added" => 0,
			    "removed" => 0,
			    "modified" => 0,
			    "churn" => 0
			  )
		);
		print_r(json_encode($svn_data));
	}
}
