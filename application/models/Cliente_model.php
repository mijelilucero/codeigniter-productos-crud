<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {
    private $tabla = 'clientes';

    public function __construct()
    {
        parent::__construct();
    }

    public function obtener_todos()
    {
        return $this->db->order_by('apellidos', 'ASC')->get($this->tabla)->result();
    }

    public function obtener($id)
    {
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    public function insertar($datos)
    {
        $datos['created_at'] = date('Y-m-d H:i:s');
        $datos['updated_at'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tabla, $datos);
    }

    public function actualizar($id, $datos)
    {
        $datos['updated_at'] = date('Y-m-d H:i:s');
        return $this->db->where('id', $id)->update($this->table, $datos);
    }

    public function eliminar($id)
    {
        return $this->db->where('id', $id)->delete($this->table);
    }

    public function contar_total()
    {
        return $this->db->count_all($this->tabla);
    }
}