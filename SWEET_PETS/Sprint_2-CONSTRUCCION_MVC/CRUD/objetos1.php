<?php 
 class Aprendiz{
  private $documento;
  private $nombre;
  private $ficha;
  private $sissalud;
//setters y getters
 function __construct($documento,$nombre,$ficha){
    $this->documento=$documento;
    $this->nombre=$nombre;
    $this->ficha=$ficha;
   // $sissalud=new SistemaSalud();
 }
//reemplazar los 3 setters por uno
function setter($atributo,$valor){
    $this->$atributo=$valor;
}

//  function setDocumento($documento){
//     $this->documento=$documento;
//  }
//  function setNombre($nombre){
//      $this->nombre=$nombre;
// }
// function setFicha($ficha){
//      $this->ficha=$ficha;
// }
//reemplazar tres getter por uno 
//Este parámetro necesita solo el string del nombre
//ejemplo "documento"
function getter($nombreAtributo){
    return $this->$nombreAtributo;
}

// function getDocumento(){
//     return $this->documento;
// }
// function getNombre(){
//     return $this->nombre;
// }
// function getFicha(){
//     return $this->ficha;
// }

}
$ob=new Aprendiz(654321,"Maria Iribarne",2142345);
//Uso de getter x atributo
 //echo $ob->getDocumento().'<br>';
 //echo $ob->getNombre().'<br>';
 //echo $ob->getFicha().'<br>';

 //uso de getter abreviado
 echo $ob->getter("nombre").'<br>';
 echo $ob->getter("ficha").'<br>';
 echo $ob->getter("documento").'<br>';
 //uso de setters abreviados
$ob->setter("documento",99999);
$ob->setter("nombre","Paola Turbay");
$ob->setter("ficha",2142329);
echo $ob->getter("nombre").'<br>';
echo $ob->getter("ficha").'<br>';
echo $ob->getter("documento").'<br>';
//uso de setters x atributo
 //  $ob->setDocumento(123456);
//  $ob->setNombre("Maria Ramirez");
//  $ob->setFicha(2142329);
//  //echo $ob->getDocumento().'<br>';
 //echo $ob->getNombre().'<br>';
 //echo $ob->getFicha();
 
 //var_dump($ob);
// $num=10;
// $num2=3.2;
// $nombre="maria";
// $vec=[1,2,3,4,5];
// echo var_dump($num);
// echo var_dump($num2);
// echo var_dump($nombre);
// echo var_dump($vec);

?>