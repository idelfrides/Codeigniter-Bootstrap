<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 23:58
 */


class Main extends CI_Controller
{

    public function view($page = 'home', $status = null){
        if (! file_exists(APPPATH.'views/app_pages/'.$page.'.php')){
            /* Erro 404 -> arquivo não encontrado: redireciona a aplicação
               para  a page Welcome personalizada */
            redirect("welcome");
        }

        $data['title'] = ucfirst($page);        // Capitalize
        //$data['row'] = $this->dadosMembro();    // recupera dados do membro
       // $dados['row'] = $this->dadosMembro();    // recupera dados do membro

        $this->load->view('BaseTemplates/header_template', $data);
        if ($status == 1){
            $this->load->view('_include/msg_success');
        }elseif ($status == 2){
            $this->load->view('_include/msg_danger');
        }elseif ($status == 3){
            $this->load->view('_include/msg_warning');
        }
        $this->load->view('app_pages/'.$page, $data);
        $this->load->view('BaseTemplates/footer_template', $data);
    }


    // não aplicada
    public function contatarMembro(){
        $this->load->controller('Membro');
        $mbro = new Membro();
        $mbro->contactMember();
    }


    public function dadosMembro(){
        //$this->load->controller('Membro');
        $mbro = new Membro();
        $data = $mbro->showData();
        return $data;
    }


    public function PageNotFound(){
        redirect("welcome");
    }


    /*
     * $this->load->view('BaseTemplates/header_template', $data);
       $this->load->view('app_pages/'.$page, $data);
       $this->load->view('BaseTemplates/footer_template', $data);

     */
}