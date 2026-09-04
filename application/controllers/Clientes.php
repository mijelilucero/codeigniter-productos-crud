<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['clientes'] = $this->Cliente_model->obtener_todos();
        $this->load->view('templates/header');
        $this->load->view('clientes/index', $data);
        $this->load->view('templates/footer');
    }

    public function crear()
    {
        $this->load->view('templates/header');
        $this->load->view('clientes/crear');
        $this->load->view('templates/footer');
    }

    public function guardar()
    {
        $this->form_validation->set_rules('nombres', 'Nombres', 'required|max_length[100]');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|max_length[100]');
        $this->form_validation->set_rules('dpi', 'DPI', 'required|max_length[20]');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'max_length[20]');
        $this->form_validation->set_rules('direccion', 'Dirección', 'required|max_length[200]');

        if ($this->form_validation->run() === FALSE) {
            $this->crear();
            return;
        }

        $this->Cliente_model->insertar([
            'nombres'   => $this->input->post('nombres'),
            'apellidos' => $this->input->post('apellidos'),
            'dpi'       => $this->input->post('dpi'),
            'telefono'  => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
        ]);

        redirect('clientes');
    }

    public function editar($id)
    {
        $data['cliente'] = $this->Cliente_model->obtener($id);

        if (!$data['cliente']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('clientes/editar', $data);
        $this->load->view('templates/footer');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('nombres', 'Nombres', 'required|max_length[100]');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|max_length[100]');
        $this->form_validation->set_rules('dpi', 'DPI', 'required|max_length[20]');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'max_length[20]');
        $this->form_validation->set_rules('direccion', 'Dirección', 'required|max_length[200]');

        if ($this->form_validation->run() === FALSE) {
            $this->editar($id);
            return;
        }

        $this->Cliente_model->actualizar($id, [
            'nombres'   => $this->input->post('nombres'),
            'apellidos' => $this->input->post('apellidos'),
            'dpi'       => $this->input->post('dpi'),
            'telefono'  => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
        ]);

        redirect('clientes');
    }

    public function eliminar($id)
    {
        $this->Cliente_model->eliminar($id);
        redirect('clientes');
    }
}