<?php

class Reminder {

  public function __construct() {

  }

  public function getAll_reminders() {
    $db = db_connect();
    $statement = $db->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function get_reminder($id) {
    $db = db_connect();
    //Add Update query
  }
}  
?>