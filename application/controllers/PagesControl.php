<?php defined('BASEPATH') or exit('Acesso nao permitido');

class PagesControl extends CI_Controller{

    public function view($page = 'PagesView'){

        if (! file_exists(APPPATH.'view/pages/'.$page.'.php')){
            //show_404();
        }

        $arrayData['title'] = ucfirst($page); //Transforma o primeiro caracter em maiusculo

        //O Controlador obtem a página após o processamento do conteúdo definido em $arrayData
        $this->load->view('templates/header', $arrayData);
        $this->load->view('pages/'.$page, $arrayData); //O conteúdo dinamico ficará no diretório pages/
        $this->load->view('templates/footer', $arrayData);
    }

    public function index(){
        $this->view();
    }
}
