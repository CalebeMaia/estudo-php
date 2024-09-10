<?php 
       // aqui caso não exista a imagens das capas do jogo entrará essa como padrão 
       function thumb($arq){
        $caminho="fotos/$arq";
        // vou verificar se o caminho existe
        if(is_null($arq)|| !file_exists($caminho)){// essa linha diz se o arquivo que foi passado for nulo ou caminho do arquivo não existir então retorne
            return "fotos/indisponivel.png";// caminho da imagem
        }else{
            return $caminho;  
        }
       }
    ?>