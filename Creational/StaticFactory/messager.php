<?php
    interface Messager{
        public function intialize(string $server_ip) :string ;
        public function send_email(string $connection,string $receiver,string $message);
    }