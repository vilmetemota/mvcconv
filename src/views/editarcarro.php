<!DOCTYPE HTML >
<html >
    <? php  include ( "head.php" ) ?>
    <corpo >
        <? php  include ( "menu.php" ) ?>
        <? php  require_once ( "../controllers/controllerUpdateCarro.php" ); ?>

        <div  class = " row " >
            <form  method = " post " action = " ../controllers/controllerUpdateCarro.php " id = " form " name = " form " class = " col-10 " >
                <div  class = " form-group " >
                    <input  class = " control-form " type = " text " id = " marca " name = " marca " espaço reservado = " marca do carro " foco automático necessário  >
                    <input  class = " control-form " type = " text " id = " modelo " name = " modelo " placeholder = " modelo do carro " necessário >
                    <input  class = " control-form " type = " text " id = " cor " name = " cor " espaço reservado = " cor do carro " necessário > 
                </div >
                <div  class = " form-group " >
                <input  type = " hidden " id = " chassi " name = " chassi " value = " <? php  echo  $ editar -> getChassi (); ?> " >                                       
                    <button  type = " submit " class = " btn btn-sucesso " id = " editar " name = " submit " value = " editar " > Editar Carro </ button > 
                </div >            
            </form >   
        </div >

    </corpo >
</html >