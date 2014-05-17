<?php
// テスト用関数
class User {

   public $name;
   
   public function __construct($name) {
   
       $this->name = $name;
   }
   
   public function createMassage() {
   
       return "こんにちは {$name} さん！";
   }
}