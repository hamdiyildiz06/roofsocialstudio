<?php

class Slide_model extends HY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "slides";
    }
}
