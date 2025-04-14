<?php
    abstract class BookPrototype{
        protected string $topic;
        protected string $name ;

        abstract function __clone();

        public function get_topic(): string{
            return $this->topic;
        }

        public function get_name(): string{
            return $this->name;
        }

        public function set_name(string $new_name){
            $this->name = $new_name;
        }
    }