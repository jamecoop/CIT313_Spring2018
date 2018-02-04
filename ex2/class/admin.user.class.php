<?php
class admin extends user {

    public function __construct($user_id, $user_level)
    {
        parent::__construct($user_level);
        $this->user_id = "jamecoop";
        $this->user_type = "2";
        $this->first_name = "James";
        $this->last_name = "Cooper";
        $this->email_address = "jamecoop@iupui.edu";
        $this->user_level = "Administrator";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
        return;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __destruct()
    {

    }
}
?>