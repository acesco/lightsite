<?php
class Species_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_species($specific_name = FALSE)
{
        if ($specific_name === FALSE)
        {
                $query = $this->db->get('species');
                return $query->result_array();
        }

        $query = $this->db->get_where('species', array('specific_name' => $specific_name));
        return $query->row_array();
}

        public function set_species()
		{
		    $this->load->helper('url');

		    $data = array(
		        'specific_name' => $this->input->post('specific_name'),
		        'name' => $this->input->post('name'),
		        'scientific_name' => $this->input->post('scientific_name'),
		        'min_sunlight_start' => $this->input->post('min_sunlight_start'),
		        'min_sunlight_end' => $this->input->post('min_sunlight_end'),
		        'sunlight_desc' => $this->input->post('sunlight_desc'),
		        'moisture_start' => $this->input->post('moisture_start'),
		        'moisture_end' => $this->input->post('moisture_end'),
		        'moisture_desc' => $this->input->post('moisture_desc'),
		        'lifecyle' => $this->input->post('lifecyle'),
		        'fertilizer_desc' => $this->input->post('fertilizer_desc'),
		        'pH_level' => $this->input->post('pH_level'),
		        'soil_type' => $this->input->post('soil_type'),
		        'plant_desc' => $this->input->post('plant_desc'),
		        'day_temp_start' => $this->input->post('day_temp_start'),
		        'day_temp_end' => $this->input->post('day_temp_end'),
		    );

		    return $this->db->insert('species', $data);
		}
}