<!DOCTYPE html>
<html lang="teste">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>treinando</title>
</head>
<body>
    <?php 
         require_once "Mamifero.php"; 
         require_once "Reptil.php";
         require_once "Ave.php";
         require_once "Peixe.php";
         require_once "Cachorro.php";
         require_once "Arara.php";
         require_once "Canguru.php";
         require_once "Cobra.php";
         $m =new Mamifero();
         $a=new Ave();
         $re=new Reptil();
         $p=new Peixe();
         $cach=new Cachorro();
         $cang=new Canguru();
         $ara=new Arara();
         $cob=new Cobra();
        
        /* $m->setPeso(31);
        $m->locomover();
        $a->locomover();
        $re->locomover();
        $p->locomover();
        $re->locomover();*/
        $cach->emitirSom();
        $cach->locomover();


        
    ?>
      

</body>
</html>