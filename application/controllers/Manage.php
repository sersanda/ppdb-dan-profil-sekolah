<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $users = $this->session->userdata('email');
        $this->load->model(['Main_model', 'Kredit_model', 'debit_model']);
        $this->load->helper('tgl_indo');

        $user = $this->db->get_where('karyawan', ['email' => $users])->row_array();
        if ($user['role_id'] == '5') {
            redirect('siswa');
        } elseif ($user['role_id'] !== '1') {
            redirect('karyawan');
        } elseif ($user['role_id'] < '1') {
            redirect('auth/blocked');
        }

        if (!$users) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             Silahkan masuk terlebih dahulu!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
         </div>');
            redirect('auth/admin');
        }
    }

    public function month()
    {
        $data['menu'] = 'menu-2';
        $data['title'] = 'Data Bulan';
        $data['user'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] =  $this->db->get('website')->row_array();

        $this->db->order_by('id', 'ASC');
        $data['month'] =  $this->db->get('month')->result_array();

        $this->form_validation->set_rules('bulan', 'Bulan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar_admin', $data);
            $this->load->view('template/topbar_admin', $data);
            $this->load->view('admin/manage/month', $data);
            $this->load->view('template/footer_admin');
        } else {
            $nama = $this->input->post('bulan');

            $data = [
                'month_name' => $nama,
            ];
            $this->db->insert('month', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data bulan <strong>' . $nama . '</strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('manage/month');
        }
    }

    public function period()
    {
        $data['menu'] = 'menu-2';
        $data['title'] = 'Data Periode';
        $data['user'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] =  $this->db->get('website')->row_array();

        $this->db->order_by('id', 'ASC');
        $data['period'] =  $this->db->get('period')->result_array();

        $this->form_validation->set_rules('period_start', 'Periode Awal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar_admin', $data);
            $this->load->view('template/topbar_admin', $data);
            $this->load->view('admin/manage/period', $data);
            $this->load->view('template/footer_admin');
        } else {

            $data = [
                'period_start' =>  $this->input->post('period_start'),
                'period_end' => $this->input->post('period_end'),
                'period_status' => $this->input->post('status')

            ];
            $this->db->insert('period', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data periode berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('manage/period');
        }
    }


	// kredit view in list
	public function Keluaran($offset = NULL)
	{
        $data['menu'] = 'menu-2';
        $data['user'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] =  $this->db->get('website')->row_array();
		// Apply Filter
		// Get $_GET variable
		$f = $this->input->get(NULL, TRUE);

		$data['f'] = $f;

		$params = array();
		// Nip
		if (isset($f['n']) && !empty($f['n']) && $f['n'] != '') {
			$params['kredit_desc'] = $f['n'];
		}

		$params['limit'] = 5;
		$params['offset'] = $offset;
		$data['kredit'] = $this->Kredit_model->get($params);

		$data['title'] = 'Pengeluaran Umum';
		$this->load->view('template/header', $data);
        if ($data['user']['role_id'] !== '1') {
            $this->load->view('template/sidebar_karyawan', $data);
        }else{
            $this->load->view('template/sidebar_admin', $data);
        }
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('admin/manage/keluaran', $data);
        $this->load->view('template/footer_admin');
	}

	// Add kredit and Update
	public function add_keluaran($id = NULL)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kredit_date', 'Tanggal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kredit_value', 'Nilai', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kredit_desc', 'Keterangan', 'trim|required|xss_clean');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
		$data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

		if ($_POST and $this->form_validation->run() == TRUE) {

			if ($this->input->post('kredit_id')) {
				$params['kredit_id'] = $this->input->post('kredit_id');
			} else {
				$params['kredit_input_date'] = date('Y-m-d H:i:s');
			}

			$params['kredit_date'] = $this->input->post('kredit_date');
			$params['kredit_value'] = $this->input->post('kredit_value');
			$params['kredit_desc'] = $this->input->post('kredit_desc');
			$params['kredit_last_update'] = date('Y-m-d H:i:s');
			$params['user_user_id'] = $this->session->userdata('uid');

			$status = $this->Kredit_model->add($params);
			$paramsupdate['kredit_id'] = $status;
			$this->Kredit_model->add($paramsupdate);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pengeluaran berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
			redirect('manage/keluaran');
		} else {
			redirect('manage/keluaran');
		}
	}



	// debit view in list
	public function masukan($offset = NULL)
	{
        $data['menu'] = 'menu-2';
        $data['user'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] =  $this->db->get('website')->row_array();
		// Apply Filter
		// Get $_GET variable
		$f = $this->input->get(NULL, TRUE);

		$data['f'] = $f;

		$params = array();
		// Nip
		if (isset($f['n']) && !empty($f['n']) && $f['n'] != '') {
			$params['debit_desc'] = $f['n'];
		}

		$params['limit'] = 5;
		$params['offset'] = $offset;
		$data['debit'] = $this->debit_model->get($params);

		$data['title'] = 'Pemasukan Umum';
		$this->load->view('template/header', $data);
        if ($data['user']['role_id'] !== '1') {
            $this->load->view('template/sidebar_karyawan', $data);
        }else{
            $this->load->view('template/sidebar_admin', $data);
        }
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('admin/manage/masukan', $data);
        $this->load->view('template/footer_admin');
	}

	// Add debit and Update
	public function add_masukan($id = NULL)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('debit_date', 'Tanggal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('debit_value', 'Nilai', 'trim|required|xss_clean');
		$this->form_validation->set_rules('debit_desc', 'Keterangan', 'trim|required|xss_clean');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
		$data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

		if ($_POST and $this->form_validation->run() == TRUE) {

			if ($this->input->post('debit_id')) {
				$params['debit_id'] = $this->input->post('debit_id');
			} else {
				$params['debit_input_date'] = date('Y-m-d H:i:s');
			}

			$params['debit_date'] = $this->input->post('debit_date');
			$params['debit_value'] = $this->input->post('debit_value');
			$params['debit_desc'] = $this->input->post('debit_desc');
			$params['debit_last_update'] = date('Y-m-d H:i:s');
			$params['user_user_id'] = $this->session->userdata('uid');

			$status = $this->debit_model->add($params);
			$paramsupdate['debit_id'] = $status;
			$this->debit_model->add($paramsupdate);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pengeluaran berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
			redirect('manage/masukan');
		} else {
			redirect('manage/masukan');
		}
	}


}
