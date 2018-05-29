
<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:58
 *
 * Arquivo class Membro - Controller Membro
 * <?php echo $row->nome ;?>
 * <?php echo $row->idade ;?>
 * <?php echo $row->curso ;?>
 * <?php echo $row->vertente ;?>
 * <?php echo $row->naturalidade ;?>
 * <?php echo $row->hobbies ;?>
 * <?php echo $row->objetivoVida ;?>
 */


class Membro extends CI_Controller
{

    public function contactMember()
    {
        $numMember = 10;/ numero de membros

        $dadosForm['nome'] = $this->input->post('InputName');
        $dadosForm['email'] = $this->input->post('InputEmail');
        $dadosForm['destinatario'] = $this->input->post('InputDestinat');
        $dadosForm['mensagem'] = $this->input->post('InputMsg');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();

        if ($dadosForm['destinatario'] == 0) {      // para todos os membros

            for ($dest = 1; $dest <= $numMember; $dest++ ){
                $dadosForm['destinatario'] = $dest;
                $dbo->contactAllMember($dadosForm, 0);  // para todos os membros
            }
            redirect('main/view/contato/1');
        }else{
            $dbo->contactOneMember($dadosForm);  // para um só  membro
        }
    }

    public function showData()
    {
        $idMemberInfo = $this->input->post('auxInput');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();

        $row = $dbo->getMemberData($idMemberInfo);
/*
        echo 'codigo dest:  '.$idMemberInfo.'<br>';
        echo 'Nome: '. $row->nome . '<br>';
        echo 'Idade: '. $row->idade. '<br>';
        echo 'Curso: '.$row->curso. '<br>';
        echo 'Vertente: '.$row->vertente. '<br>';
        echo 'Naturalidade: '.$row->naturalidade. '<br>';
        echo 'Hobby: '.$row->hobbies. '<br>';
        echo 'Objetivo de Vidade:  '.$row->objetivoVida. '<br><br><br>';
*/

        //$this->load->view('app_pages/sobre', $dados);
        //redirect('main/view/sobre', $row);
        return $row;

       // print_r($row);



       // print_r($dbo->getMemberData('wm'));
    }


}
