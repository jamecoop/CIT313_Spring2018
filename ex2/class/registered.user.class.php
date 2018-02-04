<?php
class registered extends user {

    public function __construct($user_id, $user_level)
    {
        parent::__construct($user_level);
        $this->user_id = "saralink";
        $this->user_type = "1";
        $this->first_name = "Sara";
        $this->last_name = "Link";
        $this->email_address = "saralink7411@gmail.com";
        $this->user_level = "Regular User";
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