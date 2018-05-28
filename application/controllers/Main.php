<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 23:58
 */


class Main extends CI_Controller
{

    public function view($page = 'home'){
        if (! file_exists(APPPATH.'views/app_pages/'.$page.'.php')){
            /* Erro 404 -> arquivo não encontrado: redireciona a aplicação
               para  a page Welcome personalizada */
            redirect("welcome");
        }

        $data['title'] = ucfirst($page);  //Capitalize

        $this->load->view('BaseTemplates/header_template', $data);
        $this->load->view('app_pages/'.$page, $data);
        $this->load->view('BaseTemplates/footer_template', $data);
    }

    // não aplicada
    public function contatarMembro(){
        //$this->load->controller('Membro');
        $mbro = new Membro();
        $mbro->contactMember();
    }


}