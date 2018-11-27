<?php


class Usuario_model extends CI_Model{
    public $id;
    public $nome;
    public $senha;
    public $login;
    public $cpf;
    public $rg;
    public $guiche_atual;
    

    public function __construct() {
        parent::__construct();
    }
    
    public function inserir(){
        $dados = array("nome" =>$this->nome,"senha"=>$this->senha,"login"=>$this->login,"cpf"=>$this->cpf,"rg"=>$this->rg);
        $this->db->insert('saif_usuario', $dados);
    }
    
    public function ultimoId(){
        return $this->db->insert_id();
    }
    
     public function recuperar(){     
        $this->db->order_by('nome','datahora');
        $query = $this->db->get('usuario');
        return $query->result();
    }
    
     public function recuperarUm($id){
        $this->db->where('id',$id);
        $query = $this->db->get('saif_usuario');
        return $query->row();
    }
    public function RecuperarUltimo(){
        $this->db->order_by('id','desc');
        $query = $this->db->get('saif_usuario');
        return $query->row();
    }
    
    public function update_guiche(){ 
        $u = $this->session->userdata('saif_usuario');
        $u->guiche_atual = $this->guiche_atual;
        $this->session->userdata('saif_usuario', $u);
        
        $this->db->where('id', $u->id);
        $this->db->set('guiche_atual', $this->guiche_atual);
        $this->db->update('saif_usuario');
    }
    
    public function update_nome(){ 
        $u = $this->session->userdata('saif_usuario');
        $this->db->where('id', $u->id);
        $this->db->set('nome', $this->nome);
        $u->nome = $this->nome;
        $this->db->update('saif_usuario');
    }
    public function update_email(){ 
        $u = $this->session->userdata('saif_usuario');
        $this->db->where('id', $u->id);
        $this->db->set('login', $this->login);
        $u->login = $this->login;
        $this->db->update('saif_usuario');
    }
    public function update_cpf(){ 
        $u = $this->session->userdata('saif_usuario');
        $this->db->where('id', $u->id);
        $this->db->set('cpf', $this->cpf);
        $u->cpf = $this->cpf;
        $this->db->update('saif_usuario');
    }
    public function update_rg(){ 
        $u = $this->session->userdata('saif_usuario');
        $this->db->where('id', $u->id);
        $this->db->set('rg', $this->rg);
        $u->rg = $this->rg;
        $this->db->update('saif_usuario');
    }
    public function verificarLoginESenha($login, $senha){
        $this->db->where("login", $login);
        $this->db->where("senha", $senha);
        $r = $this->db->get("saif_usuario");
        return $r->row();
    }
    
   public function get_todos_usuarios(){
        $query = $this->db->get("saif_usuario");
        return $query->result();
    }
   
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('saif_usuario');
    }
}
