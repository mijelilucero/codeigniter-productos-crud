<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->library(['form_validation', 'session']);
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
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('nombres', 'Nombres', 'required|max_length[100]');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|max_length[100]');
            $this->form_validation->set_rules('dpi', 'DPI', 'required|max_length[20]');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'max_length[20]');
            $this->form_validation->set_rules('direccion', 'Dirección', 'required|max_length[200]');

            if ($this->form_validation->run()) {
                $this->Cliente_model->insertar([
                    'nombres'   => $this->input->post('nombres'),
                    'apellidos' => $this->input->post('apellidos'),
                    'dpi'       => $this->input->post('dpi'),
                    'telefono'  => $this->input->post('telefono'),
                    'direccion' => $this->input->post('direccion'),
                ]);

                $this->session->set_flashdata('mensaje', 'Cliente creado correctamente.');
                redirect('clientes');
                return;
            }
        }

        $this->load->view('templates/header');
        $this->load->view('clientes/crear');
        $this->load->view('templates/footer');
    }

    public function editar($id)
    {
        $cliente = $this->Cliente_model->obtener($id);

        if (!$cliente) {
            show_404();
            return;
        }

        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('nombres', 'Nombres', 'required|max_length[100]');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|max_length[100]');
            $this->form_validation->set_rules('dpi', 'DPI', 'required|max_length[20]');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'max_length[20]');
            $this->form_validation->set_rules('direccion', 'Dirección', 'required|max_length[200]');

            if ($this->form_validation->run()) {
                $this->Cliente_model->actualizar($id, [
                    'nombres'   => $this->input->post('nombres'),
                    'apellidos' => $this->input->post('apellidos'),
                    'dpi'       => $this->input->post('dpi'),
                    'telefono'  => $this->input->post('telefono'),
                    'direccion' => $this->input->post('direccion'),
                ]);

                $this->session->set_flashdata('mensaje', 'Cliente actualizado correctamente.');
                redirect('clientes');
                return;
            }

            $cliente->nombres   = $this->input->post('nombres');
            $cliente->apellidos = $this->input->post('apellidos');
            $cliente->dpi       = $this->input->post('dpi');
            $cliente->telefono  = $this->input->post('telefono');
            $cliente->direccion = $this->input->post('direccion');
        }

        $this->load->view('templates/header');
        $this->load->view('clientes/editar', ['cliente' => $cliente]);
        $this->load->view('templates/footer');
    }

    public function eliminar($id)
    {
        $this->Cliente_model->eliminar($id);
        $this->session->set_flashdata('mensaje', 'Cliente eliminado correctamente.');
        redirect('clientes');
    }
}