<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Casa_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    // public function add($data)
    // {
    //     $this->db->insert('casa', $data);
    //     return $this->db->insert_id();
    // }
    //======================================

    // public function get_all()
    // {
    //     $this->db->select('*');
    //     $this->db->from('casa');
    //     $this->db->order_by('id', 'ASC');
    //     $this->db->limit(7);
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function get_all_welcome()
    // {
    //     $this->db->select('*');
    //     $this->db->from('casa');
    //     $this->db->order_by('id', 'ASC');
    //     $this->db->limit(6);
    //     $query = $this->db->get();
    //     return $query->result();
    // }



    // public function get_allcasas()         #USO  MINI/AME
    // {
    //     $this->db->select('*');
    //     $this->db->from('casa');
    //     $this->db->order_by('id', 'ASC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }



    // public function get_all_content()
    // {
    //     $this->db->select('content');
    //     $this->db->from('casa');
    //     $this->db->order_by('id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }



   // id - descripción - descripcion 2 - tipo - precio - Dormitorio - baño - cochera - metros - date 
   // total = 10
   //======================== [ Casas - Americana ] =====================



   public function get_americana()
   {
       $this->db->select('*');
       $this->db->from('americana');
       $this->db->order_by('metro', 'ASC');
       $this->db->limit(3);
       $query = $this->db->get();
       return $query->result();
   }

   public function get_all_americana()
   {
       $this->db->select('*');
       $this->db->from('americana');
       $this->db->order_by('metro', 'ASC');
       $this->db->limit(6);
       $query = $this->db->get();
       return $query->result();
   }

   public function all_americana()
   {
       $this->db->select('*');
       $this->db->from('americana');
       $this->db->order_by('metro', 'ASC');
       $query = $this->db->get();
       return $query->result();
   }




    //======================== [ Casas - Minimalista ] ===================


    public function get_minimalista()
    {
        $this->db->select('*');
        $this->db->from('minimalista');
        $this->db->order_by('id', 'ASC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_minimalista()
   {
       $this->db->select('*');
       $this->db->from('minimalista');
       $this->db->order_by('id', 'ASC');
       $this->db->limit(6);
       $query = $this->db->get();
       return $query->result();
   }

   




    //======================== [ Casas - Premium ] ========================


    public function get_all_premium()
   {
       $this->db->select('*');
       $this->db->from('premium');
       $this->db->order_by('metro', 'ASC');
       $query = $this->db->get();
       return $query->result();
   }



    public function get_premium()
    {
        $this->db->select('*');
        $this->db->from('premium');
        $this->db->order_by('metro', 'ASC');
        //$this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }




    //======================== [ Casa - Americana / Minimalista / Premium  ] =====================


    public function get_casa_americana($id)
    {
        $sql = "SELECT * FROM `americana` WHERE `id`=$id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_casa_minimalista($id)
    {
        $sql = "SELECT * FROM `minimalista` WHERE `id`=$id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_casa_premium($id)
    {
        $sql = "SELECT * FROM `premium` WHERE `id`=$id";
        $query = $this->db->query($sql);
        return $query->result();
    }



}

 