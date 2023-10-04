<?php
class User {
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_passwd($color) {
        $this->color = $color;
    }
    function get_passwd() {
        return $this->color;
    }
  }
  $User = new User();
  $User -> set_name('admin');
  $User -> set_passwd('admin');
  //Although it is not a very good method, I used the object structure since there is no database;
?>