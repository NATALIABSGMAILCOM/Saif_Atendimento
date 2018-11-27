<?php


class Sessao_Model extends CI_Model{
    public $id;
    public $qnt_fichas;
    public $datahora;
    public $guiche;
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserir() {
        $dado = array("guiche"=>$this->guiche);
        $this->db->insert('saif_sessao', $dado);
     
    }
    
   public function Mostrar() {
            $this->Sessao_Model->getAll();
             return $this->db->get('saif_sessao')->row();
        }
    public function recuperarpenultimo() {
        $this->db->order_by('id','desc');
        $query = $this->db->get('saif_sessao');
        return $query->next_row();
    }
    public function RecuperarUltimo(){
        $this->db->order_by('id','desc');
        $query = $this->db->get('saif_sessao');
        return $query->row();
    }
    public function RecuperarUltimoUsuario(){
        $this->db->order_by('id','desc');
        $query = $this->db->get('saif_usuario');
        return $query->row();
    }

    public function recuperar(){
        $this->db->order_by('datahora');
        $query = $this->db->get('saif_sessao');
        return $query->result();
    }
    
    public function atualizarFicha($id, $guiche) {
        $this->db->where('id', $id);
        $this->db->query("UPDATE saif_sessao set ficha_atual = ficha_atual+1, guiche_anterior = guiche, guiche = $guiche");
           
    }
    
    public function atualizarFichaN($id, $guiche) {
        $this->db->where('id', $id);
        $this->db->query("UPDATE saif_sessao set ficha_atual = ficha_atual+1, guiche_anterior = guiche = $guiche");
           
    }
     public function atualizarGuiche($id) {
        $this->db->where('id', $id);
        $this->db->query('UPDATE saif_sessao set ficha_atual = ficha_atual+1');
        
        /*$this->db->set('ficha_atual', 'ficha_atual+1');
        $this->db->where('id','12');
        $this->db->update('sessao');*/
        
    }
}
