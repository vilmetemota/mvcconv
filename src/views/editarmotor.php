<!DOCTYPE HTML >
<html >
    <? php  include ( "head.php" ) ?>
    <corpo >
        <? php  include ( "menu.php" ) ?>
        <? php  require_once ( "../controllers/controllerUpdateMotor.php" ); ?>

        <div  class = " row " >
            <form  method = " post " action = " ../controllers/controllerUpdateMotor.php " id = " form " name = " form " class = " col-10 " >
                <div  class = " form-group " >
                <input  class = " control-form " type = " text " id = " potencia " name = " potencia " espaço reservado = " potencia do motor " foco automático necessário  >
                    <input  class = " control-form " type = " text " id = " cilindro " name = " cilindro " espaço reservado = " quantidade de cilindros do motor " necessária >
                    <input  class = " control-form " type = " text " id = " chassi " name = " chassi " espaço reservado = " carro " necessário >   
                </div >
                <div  class = " form-group " >
                <input  type = " hidden " id = " idMotor " name = " idMotor " value = " <? php  echo  $ editar -> getId (); ?> " >                                       
                    <tipo de botão  = " enviar " classe = " btn btn-sucesso " id = " editar " nome = " enviar " valor = " editar " > Editar Motor </ button > 
                </div >            
            </form >   
        </div >

    </corpo >
</html >