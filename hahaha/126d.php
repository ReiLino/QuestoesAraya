<?php
class Triangulo {
  private $base;
  private $altura;
  
  public function setBase($base) {
    $this->base = $base;
  }
  
  public function setAltura($altura) {
    $this->altura = $altura;
  }
  
  public function calculaArea() {
    return ($this->base * $this->altura) / 2;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $base = $_POST['base'];
  $altura = $_POST['altura'];

  
  $triangulo = new Triangulo();

  
  $triangulo->setBase($base);
  $triangulo->setAltura($altura);

 
  $area = $triangulo->calculaArea();

  
  echo "A área do triângulo é: " . $area;
}
?>


<form method="post" action="">
  <label for="base">Informe a base:</label>
  <input type="number" name="base" required><br>
  
  <label for="altura">Informe a altura:</label>
  <input type="number" name="altura" required><br>
  
  <input type="submit" value="Calcular">
</form>