<?php
class Aeroporto {
  private $nome;
  private $cidade;

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($cidade) {
    $this->cidade = $cidade;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $cidade = $_POST['cidade'];

  $aeroporto = new Aeroporto();

  
  $aeroporto->setNome($nome);
  $aeroporto->setCidade($cidade);

 
  echo "Nome do aeroporto: " . $aeroporto->getNome() . "<br>";
  echo "Cidade do aeroporto: " . $aeroporto->getCidade() . "<br>";
}
?>

<form method="post" action="">
  <label for="nome">Nome do aeroporto:</label>
  <input type="text" name="nome" required><br>
  
  <label for="cidade">Cidade do aeroporto:</label>
  <input type="text" name="cidade" required><br>
  
  <input type="submit" value="Enviar">
</form>