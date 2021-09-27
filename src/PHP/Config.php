<?php

class Config
{
    private $table_padding;

    private $table_size;

    private $table_font;

    private $table_font_size;

    private $table_primary_color;

    private $table_secondary_color;

    private $table_enabled;

    public function table_padding(): float
    {
        return $this -> table_padding;
    }

    public function table_size(): float 
    {
        return $this -> table_size;
    }

    public function table_font(): float
    {
        return $this -> table_font;
    }

    public function table_font_size(): float
    {
        return $this -> table_font_size;
    }

    public function table_primary_color(): string
    {
        return $this -> table_primary_color;
    }

    public function table_secondary_color(): string
    {
        return $this -> table_secondary_color;
    }
}

?>