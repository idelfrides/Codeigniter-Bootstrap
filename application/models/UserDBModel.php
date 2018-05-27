<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:55
 * Controller de banco de dados. Todas as requisições ao DB passam por UserDBModel
 *
 * -------------------------------------------------------------------------------
 * FORMAS DE CONEXÃO COM O DB:
 *  1: application/config/autoload.php - $autoload['libraries'] = array('database','session');
 *  2: Por meio de um construtor -  $this->load->database();
 */

class UserDBModel extends CI_Model
{
    /* Forma 2 de conectar ao DB. Nesta aplicação porém utiliza a forma 1.
      via arquivo de configuração */

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