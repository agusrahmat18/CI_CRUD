<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buku extends CI_Model{
	
   private $_table = "buku";

    public $nama_buku;
    public $datetime;

	public function rules()
    {
        return [
		

            ['field' => 'datetime',
            'label' => 'DateTime',
            'rules' => 'numeric'],

            ['field' => 'nama_buku',
            'label' => 'Nama Buku',
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
        $this->nama_buku = $post["nama_buku"];
		$this->datetime = $datetime;
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
		$datetime=date("Y-m-d H:i:s");
        $post = $this->input->post();
        $this->nama_buku = $post["nama_buku"];
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