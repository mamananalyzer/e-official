<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class Treasure Extends CI_Model {

    public function get_treasure($treasure)
	{
		// $result = $this->db->get($treasure)->result();
		// return $result;

        $this->db->order_by('id_treasure', 'DESC');
        $this->db->limit(5);
        $result = $this->db->get($treasure)->result_array();
        $target = $this->db->select('target')->order_by('id_treasure',"desc")->limit(1)->get('treasure')->result_array();

        return array('data' => $result, 'target' => $target);
	}

    public function InsertDataTreasure($data) {
        $this->db->insert('treasure', $data);
    }

    public function delete_record($id) {
        // Assuming 'your_table' is the name of your database table
        $this->db->where('id_treasure', $id);
        $this->db->delete('treasure');

        // Check if a record was deleted
        return $this->db->affected_rows() > 0;
    }

}