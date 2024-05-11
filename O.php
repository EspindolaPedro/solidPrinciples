<?php
interface Remuneravel { /* */
    public function remeuneracao();
}
class  ContratoClt implements Remuneravel{
    
    public function remeuneracao() {

    }
}
class Estagio implements Remuneravel {

    public function remeuneracao() {

    }
}
class ContratoPj implements Remuneravel {
    public function remeuneracao() {

    }
}
class FolhaDePagamento {

    public function calcular( Remuneravel $funcionario ) {
            return $funcionario->remuneracao();

    }
}
