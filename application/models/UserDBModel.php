
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
            redirect('welcome/page404');                        // não será executada
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

        $sql = "SELECT * FROM tecweb.membro  WHERE membro.idmembro = ?";
        $consulta = $this->db->query($sql, array($member_id));
        if ($consulta){
            $row = $consulta->row();
            if (isset($row)){
                return $row;
            }else{
                redirect('main/view/sobre/4');
            }
        }else{
            redirect('main/view/sobre/4');
        }
    }

}