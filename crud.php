<?php
    
    /**
     * Biblioteca CRUD para arquivos
     *
     * Descrição: Este script faz algo incrível e útil.
     * Autor: Seu Nome
     * Versão: 1.0
     * Data de Criação: 13 de março de 2024
     *
     * Uso:
     * 1. Execute o script via linha de comando ou servidor web.
     * 2. Forneça os parâmetros necessários (se houver).
     * 3. Observe os resultados mágicos acontecerem!
     * 
     * Notas:
     * - Certifique-se de ter o PHP instalado.
     * - Este script é apenas um exemplo e não faz nada real.
    */

    /**
     * Insere dados em um arquivo.
     *
     * Esta função insere os dados fornecidos em um arquivo especificado.
     *
     * @param string $file O caminho completo para o arquivo onde os dados serão inseridos.
     * @param array $data Um array associativo contendo os dados a serem inseridos. 
     * @return bool Retorna true se a inserção for bem-sucedida.
     * 
     */
    function insert(string $file, array $data) :bool {
        
        $archive = fopen($file.".txt", "a+");

        $string = implode(" - ", $data);
        
        fwrite($archive, $string."\n");

        fclose($archive);

        return true;
    }


    function read(string $file){

        $allData = file($file.".txt");

        if($allData){
            $data = [];    
            foreach($allData as $row){
                $line = explode(" - ", $row);
                $data[] = $line;
            }

            return $data;
        }else{
            return false;
        }
    }

    function delete(string $file, int $key){

        $allData = file($file.".txt");

        if(isset($allData[$key])){
            unset($allData[$key]);
        }else{
            return false;
        }

        unlink($file.".txt");
        
        $archive = fopen($file.".txt", "a+");

        $string = implode("", $allData);
        
        fwrite($archive, $string);

        fclose($archive);

        return true;

    }


    function update(string $file, int $key, array $newData){

        $allData = file($file.".txt");

        if(isset($allData[$key])){
            $allData[$key] = implode(" - ", $newData)."\n";
        }else{
            return false;
        }

        unlink($file.".txt");
        
        $archive = fopen($file.".txt", "a+");

        $string = implode("", $allData);
        
        fwrite($archive, $string);

        fclose($archive);

        return true;
        
    
    }





?>
