<?php
namespace Application\models;
use Application\banco\Database;
require_once '../banco/Database.php';
class Protocolo
{
    public static function post($especie_animal, $justificativa, $resumo_pt, $resumo_en, $data_fim): bool
    {
        $conn = new Database();
        $result = $conn->executeQuery('insert into protocolos (especie_animal, justificativa, resumo_pt, resumo_en, data_fim)
            values (:especie_animal, :justificava, :resumo_pt, :resumo_en, :data_fim);', [':especie_animal' => $especie_animal, ':justificava' => $justificativa, ':resumo_pt' => $resumo_pt, ':resumo_en' => $resumo_en, ':data_fim' => $data_fim]);
        return $result->rowCount() > 0;
    }
}