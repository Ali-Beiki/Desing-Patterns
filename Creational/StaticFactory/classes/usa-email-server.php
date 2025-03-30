<?php
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'messager.php';
    
    class Usa implements Messager{
        private $user_name ="DO4865#$851DWXC";
        private $password ="#$@@45521^7WXC";
        public function intialize(string $server_ip):string {
            $connection = $server_ip.'/'.$this->user_name.'/'.$this->password;
            return $connection;
        } 

        public function send_email(string $connection,string $receiver,string $message){
            $request = [
                'server_conection'=>$connection,
                'receiver'=> $receiver,
                'message'=>$message
            ];

            echo 'send message from usa-server is success';
            var_dump($request);
        }
    }