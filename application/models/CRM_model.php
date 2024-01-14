<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class CRM_model Extends CI_Model {

    public function get_contact($contact) {
		// $result = $this->db->get($contact)->result();
		// return $result;

        $this->db->order_by('id_crm', 'ASC');
        $this->db->limit(30);
        $result = $this->db->get($contact)->result_array();
        // $target = $this->db->select('target')->order_by('id',"desc")->limit(1)->get('persona')->result_array();

        return array('data' => $result
        // , 'target' => $target
        );
	}

    public function getUserById($id_user) {
        // Assuming you have a 'users' table in your database
        $query = $this->db->get_where('user', array('id_user' => $id_user));

        // Return the user details if found, otherwise return false
        return $query->row_array();
    }

    public function InsertDataPersona($data) {
        $this->db->insert('persona', $data);
    }

    public function delete_record($id) {
        // Assuming 'your_table' is the name of your database table
        $this->db->where('id', $id);
        $this->db->delete('user');

        // Check if a record was deleted
        return $this->db->affected_rows() > 0;
    }

}