<?php
class Retangulo {
  private $largura;
  private $altura;
  
  public function setLargura($largura) {
    $this->largura = $largura;
  }
  
  public function setAltura($altura) {
    $this->altura = $altura;
  }
  
  public function calculaArea() {
    return $this->largura * $this->altura;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $largura = $_POST['largura'];
  $altura = $_POST['altura'];

  $retangulo = new Retangulo();

  $retangulo->setLargura($largura);
  $retangulo->setAltura($altura);

  $area = $retangulo->calculaArea();

  echo "A área do retângulo é: " . $area;
}
?>

<form method="post" action="">
  <label for="largura">Informe a largura:</label>
  <input type="number" name="largura" required><br>
  
  <label for="altura">Informe a altura:</label>
  <input type="number" name="altura" required><br>
  
  <input type="submit" value="Calcular">
</form>