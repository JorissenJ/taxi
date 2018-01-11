<?php

class Autos extends CI_Controller {

    public function index() {

        $data['title'] = 'Overzicht autos';
        $data['autos'] = $this->autos_model->get_autos();

        $this->load->view('templates/header');
        $this->load->view('auto/index_view', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {

        $data['title'] = 'Bewerk auto';
        $data['auto'] = $this->autos_model->get_autos($id);
        $data['chauffeurs'] = $this->autos_model->get_chauffeurs();
        
        $this->load->view('templates/header');
        $this->load->view('auto/edit_view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {

        $data['title'] = 'Auto toevoegen';
        $data['chauffeurs'] = $this->autos_model->get_chauffeurs();
        
        $this->form_validation->set_rules('onderhoud','Onderhoud','required');
        $this->form_validation->set_rules('keuring','Keuring','required');
        $this->form_validation->set_rules('nummerplaat','Nummerplaat','required');
        $this->form_validation->set_rules('chauffeur_id','Chauffeur_id','required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('auto/create_view', $data);
            $this->load->view('templates/footer');
        } else {
            $this->autos_model->create_auto();
            redirect('autos');
        }
    }

    public function update(){
    
        $this->autos_model->update_auto(); 
        redirect('autos'); 
    }

    public function delete($id){
        
        $data['title'] = 'Verwijder auto';
        $data['auto'] = $this->autos_model->get_autos($id);
        $data['chauffeurs'] = $this->autos_model->get_chauffeurs();
        
        $this->load->view('templates/header');
        $this->load->view('auto/delete_view', $data);
        $this->load->view('templates/footer');
    }

    public function delete_confirm(){
        
        $this->autos_model->delete_auto();
        redirect('autos');
    }
}

?>