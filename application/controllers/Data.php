<?php
class Data extends CI_Controller
{
    public function index()
    {
        $this->load->view('tampilan_form');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|min_lenght[3]',
            [
                'required' => 'Nama harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );

        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|min_lenght[3]',
            [
                'required' => 'nim harus diisi',
                'min_length' => 'nis terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|min_length[2]',
            [
                'required' => 'kelas Harus diisi',
                'min_length' => 'kelas terlalu pendek'
            ]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('tampilan_form');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
                'jeniskel' => $this->input->post('jeniskel'),
                'ttl' => $this->input->post('ttl'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('tampilan_datasiswa', $data);
        }
    }
}
