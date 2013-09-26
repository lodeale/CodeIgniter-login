<?php 

class Inicio_model extends CI_Model {

	public function validarLogin($user, $pass){
		//SELECT id_user, user, pass
		$this->db->select("id_user, user, privilegio, activo");
		// FROM login2
		$this->db->from("login2");
		// WHERE user = '$user'
		$this->db->where("user = '$user'");
		// AND pass = sha1($pass);
		$this->db->where("password = '" . sha1($pass) . "'");
		$query = $this->db->get();
		if($query->num_rows > 0):
			return $query->result();
		else:
			return FALSE;
		endif;
	}

}

/* End of file inicio_model.php */
/* Location: ./application/models/inicio_model.php */