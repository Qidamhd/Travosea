<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travosea extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_feedback'); // Load the m_feedback model
    }

    public function index()
    {
        $data['images'] = $this->m_feedback->getdata(); // Load data from the m_feedback model
        $this->load->view('tmp_header');
        $this->load->view('v_index', $data); // Pass $data to the view
        $this->load->view('v_package', $data); // Pass $data to the view
        $this->load->view('v_features');
        $this->load->view('v_kontak');
        $this->load->view('v_footer');
    }

    // Packages
    public function pramuka()
    {
        $data['judul'] = 'Pramuka';
        $this->load->view('tmp_header');
        $this->load->view('packages/pramuka', $data);
        $this->load->view('v_footer');
    }

    public function pari()
    {
        $data['judul'] = 'Pari';
        $this->load->view('tmp_header');
        $this->load->view('packages/pari', $data);
        $this->load->view('v_footer');
    }

    public function dolphin()
    {
        $data['judul'] = 'Dolphin';
        $this->load->view('tmp_header');
        $this->load->view('packages/dolphin', $data);
        $this->load->view('v_footer');
    }

    public function untungjawa()
    {
        $data['judul'] = 'Untung Jawa';
        $this->load->view('tmp_header');
        $this->load->view('packages/untungjawa', $data);
        $this->load->view('v_footer');
    }

    public function tidung()
    {
        $data['judul'] = 'Tidung';
        $this->load->view('tmp_header');
        $this->load->view('packages/tidung', $data);
        $this->load->view('v_footer');
    }

    public function bidadari()
    {
        $data['judul'] = 'Bidadari';
        $this->load->view('tmp_header');
        $this->load->view('packages/bidadari', $data);
        $this->load->view('v_footer');
    }

    public function macan()
    {
        $data['judul'] = 'Macan';
        $this->load->view('tmp_header');
        $this->load->view('packages/macan', $data);
        $this->load->view('v_footer');
    }

    public function pelangi()
    {
        $data['judul'] = 'Pelangi';
        $this->load->view('tmp_header');
        $this->load->view('packages/pelangi', $data);
        $this->load->view('v_footer');
    }

    public function success()
    {
        $this->load->view('feedbackSuccess');
    }

    public function failed()
    {
        $this->load->view('feedbackFailed');
    }

    public function simpan()
    {
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $data = array(
            'email' => $email,
            'feedback' => $pesan,
        );

        $save = $this->m_feedback->save($data); // Save data using m_feedback model
        if ($save) {
            redirect('travosea/success', 'refresh');
        } else {
            redirect('travosea/failed');
        }
    }
}
