<?php

require_once 'CRUD.php';

class Produtos extends CRUD {

    protected $table = 'produtos';
    private $nome;
    private $altura;
    private $largura;
    private $profundidade;
    private $descricao;
    private $cor;

    function getNome() {
        return $this->nome;
    }

    function getAltura() {
        return $this->altura;
    }

    function getLargura() {
        return $this->largura;
    }

    function getProfundidade() {
        return $this->profundidade;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCor() {
        return $this->cor;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setLargura($largura) {
        $this->largura = $largura;
    }

    function setProfundidade($profundidade) {
        $this->profundidade = $profundidade;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (nome, altura, largura, profundidade, descricao, cor)"
                . "VALUES(:nome, :altura, :largura, :profundidade, :descricao, :cor)";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':largura', $this->largura);
        $stmt->bindParam(':profundidade', $this->profundidade);
        $stmt->bindParam(':descicao', $this->descricao, PDO::PARAM_STR);
        $stmt->bindParam(':cor', $this->cor, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET nome = :nome, altura = :altura, largura = :largura, "
                . "profundidade = :profundidade, descricao = :descricao, cor = :cor WHERE id = :id";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':largura', $this->largura);
        $stmt->bindParam(':profundidade', $this->profundidade);
        $stmt->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
        $stmt->bindParam(':cor', $this->cor, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}

?>
