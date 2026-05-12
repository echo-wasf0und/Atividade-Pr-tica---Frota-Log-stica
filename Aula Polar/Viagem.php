<?php

class Viagem {
    private string $destino;
    private float $distanciaTotal;
    private Motorista $motorista;
    private Veiculo $veiculo;
    private bool $iniciada = false;

    public function __construct(
        string $destino,
        float $distanciaTotal,
        Motorista $motorista,
        Veiculo $veiculo
    ) {
        $this->destino = $destino;
        $this->distanciaTotal = $distanciaTotal;
        $this->motorista = $motorista;
        $this->veiculo = $veiculo;
    }

    public function iniciarViagem(): void {
        $dataAtual = date("dmY");
        $validade = $this->motorista->getValidadeCnh();

        if ($validade < $dataAtual) {
            echo "Motorista não está apto. CNH vencida.<br>";
            return;
        }

        echo "Viagem iniciada para {$this->destino}.<br>";
        $this->veiculo->viajar($this->distanciaTotal);
        $this->iniciada = true;
    }

    public function gerarRelatorio(): void {
        echo "<hr>";
        echo "RELATÓRIO DA VIAGEM<br>";
        echo "Destino: {$this->destino}<br>";
        echo "Distância Total: {$this->distanciaTotal} km<br>";
        echo "Motorista: " . $this->motorista->getNome() . "<br>";
        echo "CPF: " . $this->motorista->getCpf() . "<br>";
        echo "CNH: " . $this->motorista->getCnh() . "<br>";

        if ($this->iniciada) {
            echo "Status: Viagem realizada.<br>";
        } else {
            echo "Status: Viagem não iniciada.<br>";
        }
    }
}

?>