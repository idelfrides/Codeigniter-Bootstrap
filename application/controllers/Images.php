<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 28/05/2018
 * Time: 10:28
 */

class Images extends CI_Controller
{

    public function manageImage(){
        // '<?=base_url("static/img/favicon.png");
        $this->load->library('image_lib');

        $config['image_library']  = 'gd2';
        $config['source_image']   = 'http://localhost/Sistem-Codeigniter-Bootstrap/static/img/slide-01.jpg';
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']          = 40;
        $config['height']         = 40;
        $config['maintain_ratio'] = true;
        $config['dynamic_output'] = true;
        $config['quality'] = "100%";

        $this->load->library('image_lib', $config);
        //$this->image_lib->resize();

    }


}