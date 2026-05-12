<?php

class Veiculo {
    private string $placa;
    private string $modelo;
    private float $capacidadeTanque;
    private float $combustivelAtual;

    public function __construct(
        string $placa,
        string $modelo,
        float $capacidadeTanque,
        float $combustivelAtual
    ) {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->capacidadeTanque = $capacidadeTanque;
        $this->combustivelAtual = $combustivelAtual;
    }

    public function abastecer(float $litros): void {
        $capacidadeDisponivel = $this->capacidadeTanque - $this->combustivelAtual;

        if ($litros > $capacidadeDisponivel) {
            echo "Valor inválido, ultrapassou a capacidade disponível!<br>";
        } else {
            $this->combustivelAtual += $litros;
            echo "$litros litros foram adicionados ao tanque.<br>";
            echo "Combustível atual: {$this->combustivelAtual} litros.<br>";
        }
    }

    public function viajar(float $distancia): void {
        $consumo = 0.1; // litros por km
        $necessario = $distancia * $consumo;

        if ($this->combustivelAtual <= 0) {
            echo "O carro está sem combustível e não pode viajar.<br>";
            return;
        }

        if ($this->combustivelAtual >= $necessario) {
            $this->combustivelAtual -= $necessario;
            echo "Viagem concluída de {$distancia} km.<br>";
            echo "Combustível restante: {$this->combustivelAtual} litros.<br>";
        } else {
            $distanciaPossivel = $this->combustivelAtual / $consumo;

            echo "Combustível insuficiente.<br>";
            echo "O carro percorreu apenas " . floor($distanciaPossivel) . " km e parou.<br>";

            $this->combustivelAtual = 0;
        }
    }
}

?>