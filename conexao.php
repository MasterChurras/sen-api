<?php 
    class Conexao {
         var $c;

         function conectar(){
             $this->c = new mysqli("localhost", "root", "usbw", "sen-db");
             if($this->c->connect_error) {
                 die("Erro ao conectar".$this->c->connect_error);
             }
         }
     }

?>