<?php

require_once "Motorista.php";
require_once "Veiculo.php";
require_once "Viagem.php";

/* =========================
   MOTORISTAS
========================= */

$motorista1 = new Motorista(
    "Polar",
    "12345678901",
    "987654321",
    "20200101" // vencida
);

$motorista2 = new Motorista(
    "Marcos Souza",
    "10987654321",
    "123456789",
    "20281231" // válida
);

/* =========================
   VEICULOS
========================= */

$veiculo1 = new Veiculo(
    "ABC1234",
    "Gol",
    50,
    10
);

$veiculo2 = new Veiculo(
    "XYZ9876",
    "Uno",
    45,
    5
);

/* =========================
   VIAGEM COM CNH VENCIDA
========================= */

echo "<h3>Tentativa 1</h3>";

$viagem1 = new Viagem(
    "São Paulo",
    100,
    $motorista1,
    $veiculo1
);

$viagem1->iniciarViagem();
$viagem1->gerarRelatorio();

/* =========================
   VIAGEM VÁLIDA
========================= */

echo "<hr><h3>Tentativa 2</h3>";

$veiculo2->abastecer(20);

$viagem2 = new Viagem(
    "Rio de Janeiro",
    150,
    $motorista2,
    $veiculo2
);

$viagem2->iniciarViagem();
$viagem2->gerarRelatorio();

?>