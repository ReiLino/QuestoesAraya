<?php
class Quadrado {
  private $lado;
  
  public function setLado($lado) {
    $this->lado = $lado;
  }
  
  public function calculaArea() {
    return $this->lado * $this->lado;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $lado = $_POST['lado'];


  $quadrado = new Quadrado();

  
  $quadrado->setLado($lado);

 
  $area = $quadrado->calculaArea();

  
  echo "A área do quadrado é: " . $area;
}
?>

<form method="post" action="">
  <label for="lado">Informe o lado:</label>
  <input type="number" name="lado" required><br>
  
  <input type="submit" value="Calcular">
</form>