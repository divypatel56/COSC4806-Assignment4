<?php

class Reminders extends Controller {

   public function index(){
     $reminder = $this->model('Reminder');
     $list_reminders = $reminder->getAll_reminders();
     $this->view('reminders/index', ["reminders" => $list_reminders]);
   }

   public function create(){
     $this->view('reminders/create');
   }
  
}