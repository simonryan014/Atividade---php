<?php
    class Veiculo {
        // Atributos da classe Veiculo
        public $modelo;
        public $marca;
        public $placa;
        public $ano;
        public $velocidadeAtual = 0;

        // Construtor da classe Veiculo
        public function __construct($modelo, $marca, $placa, $ano) {
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->placa = $placa;
            $this->ano = $ano;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function getPlaca() {
            return $this->placa;
        }

        public function getAno() {
            return $this->ano;
        }

        public function getVelocidadeAtual() {
            return $this->velocidadeAtual;
        }
        
        public function acelerar($velocidade) {
            $this->velocidadeAtual += $velocidade;
        }
        // Método para exibir detalhes da classe Veiculo
        public function exibirDetalhes(){
            echo "Modelo: {$this->getModelo()}<br>";
            echo "Marca: {$this->getMarca()}<br>";
            echo "Placa: {$this->getPlaca()}<br>";
            echo "Ano: {$this->getAno()}<br>";
            echo "Velocidade atual: {$this->getVelocidadeAtual()}<br>";
        }
    }

    class Carro extends Veiculo {
        public $tipoCarro;
        // Construtor da classe Carro
        public function __construct($modelo, $marca, $placa, $ano, $tipoCarro) {
           // Chama o construtor da classe pai
           parent::__construct($modelo, $marca, $placa, $ano);
           $this->tipoCarro = $tipoCarro;

        }

        public function getTipoCarro() {
            return $this->tipoCarro;
        }
        // Método para exibir detalhes da classe Carro
        public function exibirDetalhes() {
            // Chama o método exibirDetalhes da classe pai
            parent::exibirDetalhes();
            echo "Tipo do carro: {$this->getTipoCarro()}<br>";
        }

        public function acelerar($velocidade) {
            parent::acelerar($velocidade);
            echo "O carro está acelerando... vrum vrum!<br>"; // Mensagem de aceleração do Carro
        }
    }

    class Moto extends Veiculo {
        public $tipoMoto;
        // Construtor da classe Moto
        public function __construct($modelo, $marca, $placa, $ano, $tipoMoto) {
            // Chama o construtor da classe pai
            parent::__construct($modelo, $marca, $placa, $ano);
            $this->tipoMoto = $tipoMoto;

        }

        public function getTipoMoto() {
            return $this->tipoMoto;
        }
        // Método para exibir detalhes da classe Moto
        public function exibirDetalhes(){
            // Chama o método exibirDetalhes da classe pai
            parent::exibirDetalhes();
            echo "Tipo da moto: {$this->getTipoMoto()}<br>";
        }

        public function acelerar($velocidade) {
            parent::acelerar($velocidade); 
            echo "A moto ronca e acelera com força! Vrummm!<br>"; // Mensagem de aceleração da moto
        }
    }
?>