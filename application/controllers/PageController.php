<?php defined('BASEPATH') or exit('Acesso nao permitido');

class PageController extends CI_Controller{
    public function view($page = 'home'){

        if (! file_exists(APPPATH.'view/pages/'.$page.'.php')){
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page); //O conteúdo dinamico ficará no diretório pages
        $this->load->view('templates/footer');
    }

    public function index(){
        echo "Teste";
    }
}
