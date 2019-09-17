<?php
class NewsControl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NewsModels'); //Instancia o model, que realiza a conexao com o banco
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['news'] = $this->NewsModels->getNews();

        if (empty($data['news'])) {
            echo "Banco de dados vazio";
        }

        $data['title'] = 'News';
        $this->load->view('templates/header', $data);
        $this->load->view('news/NewsView', $data);
        $this->load->view('templates/footer', $data);
    }

    public function testBd()
    {
        $teste = mysqli_connect('127.0.0.1', 'root', 'root', 'codeigniter') or die('Nao foi');
        $result = $teste->query('SELECT * FROM news');
        while ($row = $result->fetch_assoc()) {
            echo "</br>";
            print_r($row);
            echo "</br>";
        }
    }
}
