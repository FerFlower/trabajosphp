<?php
class alumno{
private $nombres; 
private $idalumno;
//function __construct($nombres,$idalumno){
  //$this ->nombres = $nombres;
  //$this -> idalumno = $idalumno;
//}
public function setnombres ($nombres){
    $this-> nombres  = $nombres;

}
public function getnombres(){
    return $this->nombres;
}
public function setidalumno ($idalumno){
    $this-> idalumno  = $idalumno;

}
public function getidalumno(){
    return $this->idalumno;
}

}
class notahab extends alumno{
  private $notaH1 ;
  private $notaH2 ;
  private $notaH3 ;
  private $notaH4 ;
  private $examenfi;
  private $trabajofi;
  private $participa;
  private $notafinal1;
  //function __construct($examenfi,$notaH,$trabajofi,$participa){

    //$this -> examenfi = $examenfi;
    //$this -> notasH = $notaH;
    //$this -> trabajofi= $trabajofi;
    //$this -> participa= $participa;
  //}
  public function setnotaH1 ($notaH1){
    $this-> notaH1 = $notaH1;

}
public function setnotaH2 ($notaH2){
    $this-> notaH2 = $notaH2;

}
public function setnotaH3 ($notaH3){
    $this-> notaH3 = $notaH3;

}
public function setnotaH4 ($notaH4){
    $this-> notaH4 = $notaH4;

}
    public function setexamefi ($examenfi){
        $this-> examenfi = $examenfi;
    
    }
    public function getexamenfi(){
        return $this->examenfi;
    }
    public function setnotasH ($notaH){
        $this-> notasH  = $notaH;
    
    }
    public function getnotasH(){
        return $this->notasH;
    }
    public function settrabajofi($trabajofi){
        $this-> trabajofi = $trabajofi;
    }
    public function gettrabajofi(){
        return $this->trabajofi;
    
    }
    public function setparticipa($participa){
        $this-> participa = $participa;
    }
    public function getparticipa(){
        return $this->participa;
    }
    public function notafinal(){
        
          $notahabilidad = (($this->notaH1+$this->notaH2+$this->notaH3+$this->notaH4) /4)*0.5;
          $notaexamen   = $this->examenfi*0.15;
          $notatrabajon  = $this->trabajofi*0.15;
          $notaparticipa = $this->participa*0.20;
          $notafinal1 = $notahabilidad+$notaexamen+$notatrabajon+$notaparticipa;
          return $notafinal1;

        
    } 
    public function imprimir(){
        $notahabilidades = ($this->notaH1+$this->notaH2+$this->notaH3+$this->notaH4) /4;
        echo "Nombre del Alumno : ".$this->getnombres()."<br>id del alumno: ".$this->getidalumno();
        echo"<br>";
        echo "<br>Notas de habilidades: ".$notahabilidades;
        echo "<br>";
        echo "<br>UNIDAD 1 :".$this->notaH1;
        echo "<br>UNIDAD 2 :".$this->notaH2;
        echo "<br>UNIDAD 3 :".$this->notaH3;
        echo "<br>UNIDAD 4 :".$this->notaH4;
        echo "<br></br>";
        echo "Examen final:".$this->examenfi;
        echo "<br></br>";
        echo "Trabajo final:".$this->trabajofi;
        echo "<br></br>";
        echo "Participacion:".$this->participa;
        echo "<br></br>";
        $l = $this->notafinal();
        echo "Nota final ".$l;
        
    }
 
}
$a = new notahab ();
$a->setnombres("Fernando Gomez Cazorla");
$a->setidalumno(12314);
$a->setnotaH1(12);
$a->setnotaH2(13);
$a->setnotaH3(16);
$a->setnotaH4(15);
$a->setexamefi(15);
$a->settrabajofi(16);
$a->setparticipa(18);

$a->imprimir();
      


 


?>