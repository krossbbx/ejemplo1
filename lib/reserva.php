<?php

class reserva{
    private $name;
    private $email;
    private $source_region;
    private $language;
    private $check_in;
    private $check_out;
    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getSource_region() {
        return $this->source_region;
    }

    function getLanguage() {
        return $this->language;
    }

    function getCheck_in() {
        return $this->check_in;
    }

    function getCheck_out() {
        return $this->check_out;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSource_region($source_region) {
        $this->source_region = $source_region;
    }

    function setLanguage($language) {
        $this->language = $language;
    }

    function setCheck_in($check_in) {
        $this->check_in = $check_in;
    }

    function setCheck_out($check_out) {
        $this->check_out = $check_out;
    }

    function __construct($name, $email, $source_region, $language, $check_in, $check_out) {
        $this->name = $name;
        $this->email = $email;
        $this->source_region = $source_region;
        $this->language = $language;
        $this->check_in = $check_in;
        $this->check_out = $check_out;
    }
}

