<?php
require_once'';
class RegisterWorker{

    public function firstRegisterWorker($name, $email){
        try{
            $worker = new Worker();
            $result = $worker->insertUser($name, $email);
            return $result;
        }catch (Exception $e) {
            echo 'Exception error: ',  $e->getMessage(), "\n";
        }
    } 
}

?>