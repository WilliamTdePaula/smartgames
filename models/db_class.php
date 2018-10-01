<?php
/*
      Autor:William Tristão de Paula
      Data de Modificação:27/09/2018
      Obs:Essa Classe é a conexao com o banco de dados
  */

  class Mysql_db{
    private $server;
    private $user;
    private $password;
    private $dataBaseName;


    //método construtor
    public function __construct(){
      $this->server = "localhost";/*Ip do servidor*/
      $this->user = "root";/*usuário do mysql*/
      $this->password = "";/*senha do mysql*/
      $this->dataBaseName = "smartgame";/*nome do banco de dados*/
    }

    public function Conectar(){//Abre a conexao com DB utilizando a biblioteca PDO
      try{
          $conexao = new PDO("mysql:host=".$this->server.';dbname='.$this->dataBaseName,$this->user,$this->password);
          return $conexao;
      }catch(PDOException $Error){
          echo("Erro ao conectar no BD.)
              Linha do Erro:".$Error->getLine()."
              Mensagem do Erro:".$Error->getMessage());
      }
    }

    public function Desconectar(){//Elimina a conexao com o DB
        $conexao = null;
    }
  }




 ?>
