<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->senha=$senha;
    }
    
    public function getSenha(){
        return $this->senha;
    }


    public function index(){
        $this->listar();
    }

    public function listar(){
        include HOME_DIR."view/paginas/usuarios/listar.php";
    }

    public function criar(){
        include HOME_DIR."view/paginas/usuarios/form_usuario.php";
    }

    public function salvar(){
        echo "Pronto para salvar";
        /* setar os dados do usuario */
        if(isset($_POST["enviar"])){
            if(empty($_POST["id"])){
                $this->senha="info123";

            }else{
                $sql="UPDATE usuario SET nome=".$_POST["nome"].", ".$_POST["email"];
            }
            

        }
       
        
        /* Salvar no banco de dados através da classe Conexao */
        /* Gerar mensagem */
        /*Recaregar a página. */
    }

    public function exibir($id){
        echo "O id do usuario é".$id;
    }

    public function login(){

    }

    public function autenticar(){

    }
}