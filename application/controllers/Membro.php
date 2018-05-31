
<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 24/05/2018
 * Time: 21:58
 *
 * Arquivo class Membro - Controller Membro
 *
 */


class Membro extends CI_Controller
{
    /*
     * método de inserção de dados vindo odo form de contato aos membros
     */
    public function contactMember()
    {
        $numMember = 4;   // numero de membros

        $dadosForm['nome'] = $this->input->post('InputName');
        $dadosForm['email'] = $this->input->post('InputEmail');
        $dadosForm['destinatario'] = $this->input->post('InputDestinat');
        $dadosForm['mensagem'] = $this->input->post('InputMsg');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();

        if ($dadosForm['destinatario'] == 0) {       // para todos os membros

            for ($dest = 1; $dest <= $numMember; $dest++ ){
                $dadosForm['destinatario'] = $dest;
                $dbo->contactAllMember($dadosForm, 0);  // para todos os membros
            }

            redirect('main/view/contato/1');

        }elseif ($dadosForm['destinatario'] >= 1){
            $dbo->contactOneMember($dadosForm);       // para um só  membro
        }else{
            redirect('main/view/contato/3');      // destinatário não selecionado
        }
    }

    /*
     * método de exibição de dados sobre os membros
     */
    public function showData()
    {
        $idMemberInfo = $this->input->post('auxInput');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();
        $row = $dbo->getMemberData($idMemberInfo);

        $dados['nome'] = $row->nome;
        $dados['idade'] = $row->idade;
        $dados['curso'] = $row->curso;
        $dados['vertente'] = $row->vertente;
        $dados['naturalidade'] = $row->naturalidade;
        $dados['hobbies'] = $row->hobbies;
        $dados['objetivoVida'] = $row->objetivoVida;

        $this->load->view('BaseTemplates/header_template');
        $this->load->view('app_pages/showDataMember', $dados);
        $this->load->view('BaseTemplates/footer_template');

    }

}
