<?php class Matakuliah extends CI_Controller 
{  
    public function index()     
    {  
        $this->load->view('view-form-matakuliah');     
    }  
    public function cetak()     
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
                     'required' => 'Kode Matakuliah Harus diisi','min_lenght' => 'Kode terlalu pendek']);  
        $this->form_validation->set_rules('nama matkul', 'Nama Matakuliah', 'required|min_length[3]', [
                     'required' => 'Nama Matakuliah Harus diisi','min_lenght' => 'Nama terlalu pendek']);
        $this->form_validation->set_rules('kelas', 'Nama Kelas', 'required|min_length[1]', [
                     'required' => 'Nama Kelas Harus diisi','min_lenght' => 'Nama Kelas terlalu pendek']);
        $this->form_validation->set_rules('nama siswa', 'Nama Siswa', 'required|min_length[3]', [
                     'required' => 'Nama Siswa Harus diisi','min_lenght' => 'Nama terlalu pendek']);  
        if ($this->form_validation->run() != true) {
                     $this->load->view('view-form-matakuliah');         
                 } else {
                    $data = [
                        'kode' => $this->input->post('kode'),
                        'nama matkul' => $this->input->post('nama matkul'),
                        'kelas' => $this->input->post('kelas'),
                        'nama siswa' => $this->input->('nama siswa')
                    ];  
            $this->load->view('view-data-matakuliah', $data);
        }
    }
} 