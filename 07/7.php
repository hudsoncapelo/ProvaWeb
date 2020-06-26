<?php
class SuperHeroi {
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca;
    private $origem;

    public function getId() {
      return $this->id;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getPoderEspecial() {
      return $this->poderEspecial;
    }
    public function getEnergia() {
      return $this->energia;
    }
    public function getForca() {
      return $this->forca;
    }
    public function getOrigem() {
      return $this->Origem;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setPoderEspecial($poderEspecial) {
      $this->poderEspecial = $poderEspecial;
    }
    public function setEnergia($energia) {
      $this->energia = $energia;
    }
    public function setForca($forca) {
      $this->forca = $forca;
    }
    public function setorigem($origem) {
      $this->origem = $origem;
    }
    public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
      $this->id = $id;  
      $this->nome = $nome;
      $this->poderEspecial = $poderEspecial;
      $this->energia = $energia;
      $this->forca = $forca;
      $this->origem = $origem;
    
     }
    }
    class funcoes extends SuperHeroi {
        private $aumentarEnergia;
        private $calcularPoderMedio;
        
        public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem, $aumentarEnergia, $calcularPoderMedio){
            funcoes::setId($id);  
            funcoes::setNome($nome);
            funcoes::setPoderEspecial($poderEspecial);
            funcoes::setEnergia($energia);
            funcoes::setForca($forca);
            funcoes::setOrigem($origem);
            $this->aumentarEnergia = $aumentarEnergia;
            $this->calcularPoderMedio = $calcularPoderMedio;
       
        }
		
    public function aumentarEnergia($energia){   
        return $this->$energia * 111222333;
    }
	
	public function calcularPoderMedio($energia, $forca){
		$poderMedio = $energia + $forca;
		$poderMedio = $poderNovo / 2;
		return $poderMedio;
	}
  }
}

$SuperHeroi = new SuperHeroi('001','Goku', 'FOGO', 1000, 1000, 'SAYAJIN');
$SuperHeroi = new SuperHeroi('002','Kuririn', 'MORRER', 1000, 1000, 'TERRA');
$SuperHeroi = new SuperHeroi('003','Vegeta', 'invejoso', 1000, 1000, 'Aneis de saturno');
$SuperHeroi = new SuperHeroi('004','Bem10', 'Transformar', 1000, 1000, 'Planeta terra');
?>