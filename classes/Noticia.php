<?php
class Noticia{
    private $id;
    private $titulo;
    private $descricao;
    private $comentarios;
    private $data;
    private $usuario;

    public function setId($id){
        $this->id=$id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }

    public function setComentarios($comentarios){
        $this->comentarios=$comentarios;
    }
    
    public function getComentarios(){
        return $this->comentarios;
    }
    public function setData($data){
        $this->data=$data;
    }
    
        public function getData(){
        return $this->data;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }

    public function index(){
        echo "Página inicial";
    }

    public function listar(){
        $sql = "
            SELECT id_noticia, titulo, descricao, DATE_FORMAT(data_noticia, '%d/%m/%y') AS data,
            (SELECT nome FROM usuario WHERE id_usuario=noticia.id_usuario) AS nome_autor
            FROM noticia
            ORDER BY id_noticia DESC LIMIT 5
        ";
        $conexao = Conexao::getInstance();
        $resultado = $conexao->query($sql);
        $noticias = null;
        while ($noticia = $resultado->fetch(PDO::FETCH_OBJ)) {
            $noticias[] = $noticia;
        }
        include HOME_DIR."view/paginas/noticias/noticia.php";
    }



}


?>