<?php

namespace Drupal\user_controller\Controller;

class UserController {
    public function page(){
        $users = array(
            array('name'=>'Arun','email'=>'Arun@hcl.com'),
            array('name'=>'Aswin','email'=>'Aswin@hcl.com'),
            array('name'=>'Hari','email'=>'Hari@hcl.com'),
            array('name'=>'Janani','email'=>'Janani@hcl.com'),
            array('name'=>'Sudha','email'=>'Sudha@hcl.com')
        );
        return array(
            '#theme'=>'user_list',
            '#users'=>$users,
            '#title'=> 'User List'
        );
    }
}

?>