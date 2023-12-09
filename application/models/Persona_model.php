<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class Persona_model Extends CI_Model {

    public function get_persona($persona)
	{
		// $result = $this->db->get($persona)->result();
		// return $result;

        $this->db->order_by('id', 'ASC');
        $this->db->limit(30);
        $result = $this->db->get($persona)->result_array();
        // $target = $this->db->select('target')->order_by('id',"desc")->limit(1)->get('persona')->result_array();

        return array('data' => $result
        // , 'target' => $target
    );
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