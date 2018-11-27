<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hospital
 *
 * @author Nathy
 */
class Usuario extends CI_Controller{
   
    public function __construct() {
            parent::__construct();
           
        }
 
        public function autenticar(){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
        
            $this->load->model("Usuario_model");
            $u = $this->Usuario_model->verificarLoginESenha($login, $senha);
        if ($u){
            $this->session->set_userdata("saif_usuario", $u);
            redirect('Principal/inicio');
        }else{
            $this->session->set_flashdata("msg", "Dados incorretos!");
            redirect('Principal/inicial');
        }
        }
         public function sair(){
            $this->session->unset_userdata("usuario");
             redirect("Principal/inicial");
        }
        public function inicio(){
            
            $this->load->view("Home");
        }
       
        
        public function Salvar() {
            
            $n = $_POST["nome"];
            $login =  $_POST["login"];
            $senha = $_POST["senha"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->nome = $n;
            $this->Usuario_model->login = $login;
            md5($this->Usuario_model->senha = $senha);
            $this->Usuario_model->cpf = $cpf;
            $this->Usuario_model->rg = $rg;
            
            $this->Usuario_model->inserir(); 
           
            $this->load->view('Inicial');
        
        }
       
        public function Excluir() {
            
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $this->Usuario_model->delete($id);
            redirect(base_url().'Principal/meus_dados');
        }
            
        public function editar(){
            
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $dados['usuario'] = $this->Usuario_model->recuperarUm($id);
            $this->load->view('editar', $dados);
        }
        
        public function atualizar(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->nome = $_POST["nome"];
            $this->Usuario_model->update();
            redirect('Principal/meus_dados');
        }
        
        
        public function atualizarGuiche(){
            
            $this->load->model('Usuario_model');
            $this->Usuario_model->guiche_atual = $_POST["guiche"];
            $this->Usuario_model->update_guiche();
            redirect('Principal/tela_atendente');
        }
        public function add_Guiche(){
            
            $this->load->model('Sessao_Model');
            $this->Sessao_Model->guiche = $_POST["guiche"];
            $this->Sessao_Model->inserir();
            redirect('Principal/tela_atendente_Nova');
        }
        
}