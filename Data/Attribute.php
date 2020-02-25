<?php

namespace Rfmcube\Customapi\Data;

class Attribute {

    protected $code;
    protected $value;

    function __construct($code, $value) {
        $this->code = $code;
        $this->value = $value;
    }

    /**
     *
     * @return string
     */
    function getCode() {
        return $this->code;
    }

    /**
     *
     * @return mixed
     */
    function getValue() {
        return $this->value;
    }

}
