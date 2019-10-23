<?php


namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpIslemIptalIade implements InterfaceSoapActionMethod
{

    /**
     * @var
     *
     *
     */
    public $GUID,
        $Durum,
        $Tutar,
        $Dekont_ID;


    /**
     * @var string
     *
     */
    private $soapAction = 'TP_Islem_Iptal_Iade';


    public function __construct($guid, $durum, $dekontId, $tutar)
    {

        $this->GUID = $guid;
        $this->Durum = $durum;
        $this->Tutar = $tutar;
        $this->Dekont_ID = $dekontId;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);
    }


    /**
     * @return string
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }


    /**
     * @param $soapAction
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }

}