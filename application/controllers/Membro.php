
<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:58
 *
 * Arquivo class Membro - Controller Membro
 */


class Membro extends CI_Controller
{

    public function contactMember()
    {
        $numMember = 4;   // numero de membros

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
            redirect('main/view/home/1');
        }else{
            $dbo->contactOneMember($dadosForm);  // para um só  membro
        }
    }

    public function getMemberData()
    {
        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();
        print_r($dbo->showData('obama'));
        print_r($dbo->showData('papai'));
        print_r($dbo->showData('wm'));
    }
}
