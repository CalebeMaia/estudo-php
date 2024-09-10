<?php 
    
    $sql=$pdo->query('SELECT * FROM usuario');//agora crio uma variavel $sql podeira ser qualquer nome e atribuio a variavel $pdo onde $pdo recebe uma query que é uma consulta ao banco dados
    $dados=$sql->fetchAll($pdo::FETCH_ASSOC);//chamamos a variavel $sql e juntamos com fetchAll() que tem a funcao de pegar tudo que tem no banco de dados e armazena em uma variavel que chamamos nesse exemplo de $dados
    //pdo::FETCH_ASSOC ELE MOSTRA I VETOR MELHOR NO PRINT_R
    echo "<pre>";
    print_r($dados);
   
    


?>