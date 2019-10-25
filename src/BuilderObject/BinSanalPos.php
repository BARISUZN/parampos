<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;

class BinSanalPos implements InterfaceSoapActionMethod
{


    /**
     * @var
     *
     */
    public $BIN,
        $G,
        $soapAction = 'BIN_SanalPos';

    /**
     * BIN_SanalPos constructor.
     * @param $bin: card bin
     */
    public function __construct($bin = "")
    {
        $this->BIN = $bin;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);
    }


    /**
     * @param $bin
     *
     */
    function BinSanalPos($bin = "")
    {
        $this->BIN = $bin;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);

    }


    /**
     * @param mixed $soapAction
     */
    public function setSoapActionMethod($soapAction): void
    {
        $this->soapAction = $soapAction;
    }


    /**
     * @return string
     *
     *
     */

    function getSoapActionMethod(): string
    {

        return $this->soapAction;
    }


}