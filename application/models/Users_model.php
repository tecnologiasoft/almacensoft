<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {



    function validar_usuario($datos)
	{
        $this->db->select("u.*,r.modules");
        $this->db->from('user u');
        $this->db->where('u.username',$datos['username']);
        $this->db->where('u.password',md5($datos['password']));
        $this->db->where('u.company_id',$datos['company_id']);
        //$this->db->where('u.type',$post['type']);
        $this->db->where('u.status','1');
        $this->db->join('rights r', 'u.id = r.user_id','left');
        $this->db->limit(1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit;
		if($query->num_rows() == 1)
		{
            $row = $query->row();
                     //  var_dump($row)

            $session_connect = array(

                 'admin_id'         => $row->id,
                 'username'         => $row->username,
                 //'admin_profile_image'        => $result->profile_image,
                 'admin_email'         => $row->email,
                 'admin_role'         => $row->role,
                 'admin_login'         => '1',
                 //'ROL_CODIGO'     => $row->ROL_CODIGO,
                // 'PERMISOS'       => explode(",",$row->PERMISOS),
                // 'U_CLAVE'  => $row->U_CLAVE,
                // 'DESCRIPCION'    => $row->DESCRIPCION,
                // 'ESTADO'         => $row->ESTADO,
                 'CONECTADO'      => TRUE
             );

             $this->session->set_userdata($session_connect);

       //  echo $this->db->last_query();
            return $session_connect;
		}
		else
		{
			return false;
		}
	}


}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */