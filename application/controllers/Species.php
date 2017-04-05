<?php
class Species extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('species_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['species'] = $this->species_model->get_species();
                $data['title'] = 'Species archive';

                $this->load->view('templates/header', $data);
                $this->load->view('species/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($specific_name = NULL)
        {
                $data['species_item'] = $this->species_model->get_species(urldecode($specific_name));

                if (empty($data['species_item']))
                {
                        show_404();
                }

                $data['title'] = $data['species_item']['specific_name'];

                $this->load->view('templates/header', $data);
                $this->load->view('species/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a species item';

            $this->form_validation->set_rules('specific_name', 'Specific Name', 'required');
            $this->form_validation->set_rules('name', 'Family Name', 'required');
            $this->form_validation->set_rules('scientific_name', 'Scientific Name', 'required');
            $this->form_validation->set_rules('min_sunlight_start', 'Start of Min Sunlight Range', 'required');
            $this->form_validation->set_rules('min_sunlight_end', 'End of Min Sunlight Range', 'required');
            $this->form_validation->set_rules('moisture_start', 'Start of Moisture Range', 'required');
            $this->form_validation->set_rules('moisture_end', 'End of Moisture Range', 'required');
            $this->form_validation->set_rules('pH_level', 'Ideal pH Level', 'required');
            $this->form_validation->set_rules('day_temp_start', 'Start of Day Temperature Range', 'required');
            $this->form_validation->set_rules('day_temp_end', 'End of Day Temperature Range', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('species/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->species_model->set_species();
                $this->load->view('species/success');
            }
        }
}