<? php

classe  Carro {
     $ chassi privado ;
    private  $ marca ;
    private  $ modelo ;
    private  $ cor ;

     função  pública __construct () {
        echo ( "Carro criado!" );
    }

     função  pública getChassi () {
        retornar  $ this -> $ chassi ;
    }
     função  pública getMarca () {
        retornar  $ this -> $ marca ;
    }
     função  pública getModelo () {
        retornar  $ this -> $ modelo ;
    }
     função  pública getCor () {
        retornar  $ this -> $ cor ;
    }

     função  pública setChassi ( $ chassi ) {
        $ this -> $ chassi = $ chassi ;
    }
     função  pública setMarca ( $ marca ) {
        $ this -> $ marca = $ marca ;
    }
     função  pública setModelo ( $ modelo ) {
        $ this -> $ modelo = $ modelo ;
    }
     função  pública setCor ( $ cor ) {
        $ this -> $ cor = $ cor ;
    }

     função  pública incluir () {
        eco ( "carro incluso" );
    }

}