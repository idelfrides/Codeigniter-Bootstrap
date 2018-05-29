
<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:55
 * Controller de banco de dados. Todas as requisições ao DB passam por UserDBModel
 *
 * --------------------------------------------------------------------------------------
 * FORMAS DE CONEXÃO COM O DB:
 *  1: application/config/autoload.php - $autoload['libraries'] = array('database','session');
 *  2: Por meio de um construtor -  $this->load->database();
 */

class UserDBModel extends CI_Model
{
    /* Forma 2 de conectar ao DB. Nesta aplicação porém utiliza a forma 1.
     * via arquivo de configuração
    /*
    /* public function __construct(){
        $this->load->database();
    }*/


    /* Códigos de controle de alert:
     * 1 -> Operação realizada c/ sucesso
     * 2 -> Erro ao realizar operação
     * 3 -> Aviso
     */

    // guarda mensagem enviada para um único membro
    public function contactOneMember($dada = null){
        if ($dada == null){
            show_404();                        // não será executada
        }else{
           $query = $this->db->insert('contatounico', $dada);
        }
        if ($query){
            redirect('main/view/contato/1');   // consulta bem sucedida
        }else{
            redirect('main/view/contato/2');   // config alert aqui: erro ao inserir dados na tabela membro
        }
    }

    // salva mensagem para todos os membros
    public function contactAllMember($dada = null, $errorFlag = 0){

        $query = $this->db->insert('contatounico', $dada);

        if ($query){
            $errorFlag = 0;
        }else{
            $errorFlag = $errorFlag + 1;
            redirect('main/view/contato/2');       // config alert aqui: erro ao inserir dados na tabela membro
        }
    }

    //Função para recuperar udados dos membros
    public function getMemberData($member_id) {

        /*$tabela = $this->db->get('membro');          // tabela: empresario
          $query = $this->db->get_where('membro', array('idmembro' => $member_id));
          return $query->row(); */

        /*
            $sql = "SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?";
            $this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
        */

        //$query = $this->db->query("SELECT * FROM tecweb.membro WHERE $iember_id ==;");
        $sql = "SELECT * FROM tecweb.membro  WHERE membro.idmembro = ?";
        $query = $this->db->query($sql, array($member_id));
        if ($query){
            $row = $query->row();
            return $row;
        }else{
            $error = $this->db->error(); // Has keys 'code' and 'message'
            echo $error;
        }

    }

}