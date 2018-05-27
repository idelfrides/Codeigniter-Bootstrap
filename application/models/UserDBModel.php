<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:55
 */

class UserDBModel extends CI_Model
{
    // conexao com banco. o mesmo pode ser feito no caminho:
    // application/config/autoload.php - $autoload['libraries'] = array('database','session');

    /* public function __construct(){
        $this->load->database();
    }*/

    /* Códigos de controle de alert:
     * 1 -> Operação realizada c/ sucesso
     * 2 -> Erro ao realizar operação
     * 3 -> Aviso
     */

    public function contactMemberData($dada = null){
        if ($dada == null){
            show_404();     // não será executada
        }else{
             $query = $this->db->insert('membro', $dada);
        }

        if ($query){
            redirect('main/view/home/1');   // ok
        }else{
            redirect('main/view/home/2');   // config alert aqui: erro ao inserir dados na tabela membro
        }
    }

    //Função para recuperar udados dos membros
    public function showData($member_name = null) {
        if ($member_name !== null) {
            $query = $this->db->get('membro');  // tabela: empresario
            return $query->result_array();
        }

        $query = $this->db->get_where('membro', array('nome' => $member_name));

        return $query->row_array();

        /*
            $sql = "SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?";
            $this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
        */
    }


}