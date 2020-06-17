<? php

motor de classe {
    private  $ potencia ;
    private  $ cilindro ;
     $ chassi privado ;

     função  pública __construct () {
        eco ( "motor criado" );
    }

     função  pública getPotencia () {
        return  $ this -> potencia ;
    }
     função  pública getCilindro () {
        retornar  $ this -> cilindros ;
    }
     função  pública getChassi () {
        retornar  $ this -> chassi ;
    }
     função  pública setPotencia ( $ potencia ) {
        $ this -> potencia = $ potencia ;
    }
     função  pública setCilindro ( $ cilindro ) {
        $ this -> cilindro = $ cilindro ;
    }
     função  pública setChassi ( $ chassi ) {
        $ this -> chassi = $ chassi ;
    }

     função  pública incluir () {
        eco ( "Motor Incluso" );
    }
}