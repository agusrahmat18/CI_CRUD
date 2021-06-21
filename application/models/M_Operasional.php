<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Operasional extends CI_Model{
	
   private $_table = "operasional";

    public $datetime;
    public $pos;
    public $nopol;
    public $cadangan;
    public $shift;
    public $petugas;
    public $km_sekarang;
    public $km_gantioli;
    public $instruksi_bengkel;
    public $logistik;
    public $kondisi;

	public function rules()
    {
        return [
            ['field' => 'datetime',
            'label' => 'DateTime',
            'rules' => 'numeric'],

            ['field' => 'pos',
            'label' => 'Pos',
            'rules' => 'required'],

            ['field' => 'nopol',
            'label' => 'No. Pol',
            'rules' => 'required'],

            ['field' => 'cadangan',
            'label' => 'Cadangan',
            'rules' => 'required'],

            ['field' => 'shift',
            'label' => 'Shift',
            'rules' => 'required'],

            ['field' => 'petugas',
            'label' => 'Petugas',
            'rules' => 'required'],

            ['field' => 'km_sekarang',
            'label' => 'KM Sekarang',
            'rules' => 'required'],

            ['field' => 'km_gantioli',
            'label' => 'KM Ganti Oli',
            'rules' => 'required'],

            ['field' => 'instruksi_bengkel',
            'label' => 'Instruksi Bengkel',
            'rules' => 'required'],

            ['field' => 'logistik',
            'label' => 'Logistik',
            'rules' => 'required'],

            ['field' => 'kondisi',
            'label' => 'Kondisi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
		$this->db->order_by('id', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
		$datetime=date("Y-m-d H:i:s");
        $post = $this->input->post();
        $this->pos = $post["pos"];
        $this->nopol = $post["nopol"];
        $this->cadangan = $post["cadangan"];
        $this->shift = $post["shift"];
        $this->petugas = $post["petugas"];
        $this->km_sekarang = $post["km_sekarang"];
        $this->km_gantioli = $post["km_gantioli"];
        $this->instruksi_bengkel = $post["instruksi_bengkel"];
        $this->logistik = $post["logistik"];
        $this->kondisi = $post["kondisi"];
        $this->datetime = $datetime;

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
		$datetime=date("Y-m-d H:i:s");
        $post = $this->input->post();
        $this->pos = $post["pos"];
        $this->nopol = $post["nopol"];
        $this->cadangan = $post["cadangan"];
        $this->shift = $post["shift"];
        $this->petugas = $post["petugas"];
        $this->km_sekarang = $post["km_sekarang"];
        $this->km_gantioli = $post["km_gantioli"];
        $this->instruksi_bengkel = $post["instruksi_bengkel"];
        $this->logistik = $post["logistik"];
        $this->kondisi = $post["kondisi"];
		$this->datetime = $datetime;

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
		// $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
	}
	
	public function buat_kode()
    {
        $this->db->select('RIGHT(ma_product.product_id,6) as kode', FALSE);
        $this->db->order_by('product_id','DESC');
        $this->db->limit(1);

        $query=$this->db->get('ma_product');

        if ($query->num_rows()!=0) 
        {
           $data=$query->row();
           $kode=intval($data->kode)+1;
        } 
        else
        {
            $kode=1;
        }
        $kode_max=str_pad($kode,6,"0",STR_PAD_LEFT);
        $kode_jadi='PROD_'.$kode_max;
        return $kode_jadi;
   }
}
?>