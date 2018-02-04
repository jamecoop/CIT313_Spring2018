<?php
class user {
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    public function __construct($user_level) {

    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}
?>