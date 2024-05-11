<?php
class A {
    public function getNome() {
        return "Meu nome é A";
    }
}
class B extends A {
    public function getNome() {
        return "Meu nome é B";
    }
}
function imprimeNome(A $obj) {
    return $obj->getNome();
}
$objeto = new A();
$objeto2 = new B();

echo imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2)."<br/>"; /*Se extender uma classe e utilizar o método da classe principal na classe extendida conseguimos utilizar a classe extendida em uma função que espere a primeira classe. */
