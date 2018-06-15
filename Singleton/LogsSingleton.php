<?php

namespace Singleton;

class LogsSingleton
{
    /** 
     * @var self $instancia Instâcnia da Classe de logs
     */
    protected static $instancia;

    /*
     * Usar o metodo construtor como privado evita que possa ser feito new LogsSingleton
     * Uma vez que ele só pode ser instanciado dentro da própria classe
     */
    private function __construct()
    {

    }

    public function gravarLogs(array $dados)
    {
        $nomeArquivo = 'logs.txt';

        $logsAnteriores = [];

        //Verifica se o arquivo está vazio, se não obtem os logs anteriores
        if(filesize($nomeArquivo) > 0) {
            $conteudoArquivo = file_get_contents($nomeArquivo);

            $logsAnteriores = json_decode($conteudoArquivo, true);
        }

        $logsAnteriores[] = $dados;

        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));

        fclose($arquivo);
    }

    public static function obterInstancia(): self
    {
        //Verificamos se existe a própria instancia
        if(empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }
}