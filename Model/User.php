<?php

class User extends DB
{
    public $data;
    public $init_id;
    public function __construct(int $id)
    {
        $this->init_id = $id;
        $load_data = $this->get_user_from_DB();
        $this->data = (object) $load_data[0];
    }
    public function get_user_from_DB(): array
    {
        return [];
    }
    public function get_user_comments(): array
    {
        return [];
    }
    public function get_user_posts(): array
    {
        return [];
    }
}
