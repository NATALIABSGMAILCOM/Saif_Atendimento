<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function _construct(){
            parent::__construct();
            
        }
	public function index(){
            $this->load->view("Inicial");
        }
        public function inicial(){
            $this->load->view("Inicial");
        }

        public function inicio(){
            $this->load->view("Home");
        }
        
        
        public function atualizar_guiche(){
            $this->load->view("Atualizar_guiche");
        }
        
        
        public function add_guiche(){
            $this->load->view("Adicionar_guiche");
            
            
        }
        
        public function tela_atendente(){
           
            $this->load->model('Sessao_Model');
            $dados["qnt"] = $this->Sessao_Model->RecuperarUltimo();
            $this->load->view("Tela_do_atendente", $dados);
        }
        
        public function tela_atendente_Nova(){
            
             $this->load->model('Sessao_Model');
             $dados["qnt"] = $this->Sessao_Model->RecuperarUltimo();
             $this->load->view("Tela_do_atendente_Nova", $dados);
        }
        public function meus_dados(){
           $this->load->model('Usuario_model');
           $saif_usuario["saif_usuario"] = $this->Usuario_model->RecuperarUltimo();
           
           $this->load->view("Meus_dados", $saif_usuario);
        }
        
        public function cadastro_atendente(){
            $this->load->view("Cadastro_do_atendente");
        }
        
        public function Painel(){
            $this->load->model('Sessao_Model');
            $dados["qnt"] = $this->Sessao_Model->RecuperarUltimo();
            $dados["p"] = $this->Sessao_Model->recuperarpenultimo(); 
            $this->load->view("Painel",$dados);
        }
        
      
        public function Visualizar_atendentes(){
            $this->load->view("Visualizar_atendentes");
        }
        
       
        public function editar_cpf(){
            $this->load->view("Editar_cpf");
        }
        
        public function editar_email(){
            $this->load->view("Editar_email");
        }
        
        public function editar_nome(){
            $this->load->view("Editar_nome");
        }
        
        public function editar_rg(){
            $this->load->view("Editar_rg");
        }
        
        public function proximaFicha($id, $guiche){
            $this->load->model('Sessao_Model');
            $this->Sessao_Model->atualizarFicha($id, $guiche);
            redirect('principal/tela_atendente');
        }
        public function proximaFichaN($id, $guiche){
            $this->load->model('Sessao_Model');
            $this->Sessao_Model->atualizarFichaN($id, $guiche);
            redirect('principal/tela_atendente_Nova');
        }
        
        public function atualizar_nome(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->nome = $_POST["nome"];
            $this->Usuario_model->id = $_POST["id"];
            $this->Usuario_model->update_nome();
            redirect('principal/meus_dados');
        }
        public function atualizar_email(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->login = $_POST["login"];
            $this->Usuario_model->update_email();
            redirect('principal/meus_dados');
        }
        public function atualizar_cpf(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->cpf = $_POST["cpf"];
            $this->Usuario_model->update_cpf();
            redirect('principal/meus_dados');
        }
        public function atualizar_rg(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->rg = $_POST["rg"];
            $this->Usuario_model->update_rg();
            redirect('principal/meus_dados');
        }
    
       
}
