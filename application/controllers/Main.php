<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 23:58
 */

/*
 *  Controller principal. responsável por de estruturas de aplicação
*/
class Main extends CI_Controller
{
    /*
     * Action principal.
     */
    public function view($page = 'home', $status = null){
        if (! file_exists(APPPATH.'views/app_pages/'.$page.'.php')){
            /* Erro 404 -> arquivo não encontrado: redireciona a aplicação
               para  a page Welcome personalizada */
            redirect("Welcome/page404");
        }

        $data['title'] = ucfirst($page);                            // Capitalize

        $this->load->view('BaseTemplates/header_template', $data);  // carrega o header
        $this->alertMsg($status);                                   // exibe uma mensagem de alerta
        $this->load->view('app_pages/'.$page, $data);               // carrega a página solicitada
        $this->load->view('BaseTemplates/footer_template');         // carrega o footer

    }

    /*
    * método de exibição de dados sobre os membros
    */
    public function alertMsg($status){
        if ($status == 1){
            $this->load->view('_include/msg_success');   // sucesso
        }elseif ($status == 2){
            $this->load->view('_include/msg_danger');    // erro
        }elseif ($status == 3){
            $this->load->view('_include/msg_warning');   // aviso
        }elseif ($status == 4){
            $this->load->view('_include/msg_danger_db'); // erro de consulta ao db
        }
    }
}