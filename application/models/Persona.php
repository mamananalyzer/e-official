<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class Persona Extends CI_Model {

    public function get_persona($persona)
	{
		// $result = $this->db->get($persona)->result();
		// return $result;

        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        $result = $this->db->get($persona)->result_array();
        // $target = $this->db->select('target')->order_by('id',"desc")->limit(1)->get('persona')->result_array();

        return array('data' => $result
        // , 'target' => $target
    );
	}

    public function InsertDataPersona($data) {
        $this->db->insert('persona', $data);
    }

}