
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
        $dadosForm['nome'] = $this->input->post('InputName');
        $dadosForm['email'] = $this->input->post('InputEmail');
        $dadosForm['destinatario'] = $this->input->post('InputDestinat');
        $dadosForm['mensagem'] = $this->input->post('InputMsg');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();

        if ($dadosForm['destinatario'] == 0) {

        }
        $dbo->contactMemberData($dadosForm);
    }

    public function gerMemberData()
    {

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();
        print_r($dbo->showData('obama'));
        print_r($dbo->showData('papai'));
        print_r($dbo->showData('wm'));
    }
}
