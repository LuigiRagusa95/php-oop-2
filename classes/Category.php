<?php
class Category extends Product
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_product_name()
    {
        return parent::get_name();
    }

    public function get_name()
    {
        return $this->name;
    }
}
