<?php
interface Aves { /*Principios da segregação da interface diz que os métodos essenciais que vão ser utilizado pela classe que está usando eles.*/
    public function setLocation($lat, $lng);
    public function render();
}
interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}
class AvesQueVoam implements Aves {
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}
class Pinguin implements Aves{ /*Neste pinguim não voa, então a classe que será essencial é apenas a classe Aves*/
    public function setLocation($lat, $lng) {}
    public function render() {}
}

function renderAves(Aves $aves) {
    $aves->render();
}