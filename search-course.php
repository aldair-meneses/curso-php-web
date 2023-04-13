<?php

require 'vendor/autoload.php';

use Aldrick\SearchBooks\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;



$httpClient = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($httpClient, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach ($cursos as $curso){
    exibeMensagem($curso);
}
