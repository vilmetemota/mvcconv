<!DOCTYPE html >
<html >
    <? php  include ( "head.php" ); ?>
    <corpo >
        <? php  include ( "menu.php" ); ?>

        <div  class = " row " >
            <form  method = " post " action = " ../controllers/controllerCreateCarro.php " id = " form " name = " form " class = " col-10 " >
                <div  class = " form-group " >
                    <input  class = " control-form " type = " text " id = " marca " name = " marca " espaço reservado = " marca do carro " foco automático necessário  >
                    <input  class = " control-form " type = " text " id = " modelo " name = " modelo " placeholder = " modelo do carro " necessário >
                    <input  class = " control-form " type = " text " id = " cor " name = " cor " espaço reservado = " cor do carro " necessário >                    
                </div >
                <div  class = " form-group " >
                    <button  type = " submit " class = " btn btn-sucesso " id = " cadastrar " > Cadastrar Carro </ button > 
                </div >            
            </form >   
        </div >

        
    </corpo >

</html >