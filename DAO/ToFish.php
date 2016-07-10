<?php

/**
 * Created by PhpStorm.
 * User: handyc
 * Date: 10/07/16
 * Time: 12:54
 */
    include 'ConectaBD.php';
    class ToFish extends ConectaBD
    {
        public function PescarDados()
        {
            $arquivo = 'protocolo_jejum_nutricao.xls';
            $tabela = '<table border="1">';
            $tabela .= '<tr>';
            $tabela .= '<td colspan="2">Protoco de Jejum - Nutricao</tr>';
            $tabela .= '</tr>';
            $tabela .= '<tr>';
            $tabela .= '<td><b>Nome</b></td>';
            $tabela .= '<td><b>Email</b></td>';
            $tabela .= '</tr>';

            $pdo = parent::GetConection();
            $tofish = $pdo->prepare("SELECT *FROM DADOS");
            $tofish->execute();
            $dados = $tofish->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($dados as $dd)
            {
                $tabela .='<tr>';
                $tabela .='<td>'.$dd['iddados'].'</td>';
                $tabela .='<td>'.$dd['arq'].'</td>';
                $tabela .='</tr>';
            }
            header('Content-Type: application/x-msexcel');
            header ("Content-Disposition: attachment; filename=\".$arquivo.\"");
            echo $tabela;
        }
}