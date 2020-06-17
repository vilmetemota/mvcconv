<!DOCTYPE html >
<html >
    <? php  include ( "head.php" ); ?>
    <corpo>
        <? php  include ( "menu.php" ); ?>

        <div  class = " row " >
            <form  method = " post " action = " ../controllers/controllerCreateMotor.php " id = " form " name = " form " class = " col-10 " >
                <div  class = " form-group " >
                    <input  class = " control-form " type = " text " id = " potencia " name = " potencia " espaço reservado = " potencia do motor " foco automático necessário  >
                    <input  class = " control-form " type = " text " id = " cilindro " name = " cilindro " espaço reservado = " quantidade de cilindros do motor " necessária >
                    <input  class = " control-form " type = " text " id = " chassi " name = " chassi " espaço reservado = " carro " necessário >                    
                </div >
                <div  class = " form-group " >
                    <tipo de botão  = " enviar " class = " btn btn-sucesso " id = " cadastrar " > Cadastrar Motor </ button > 
                </div >            
            </form >   
        </div >


    </corpo >

</html >