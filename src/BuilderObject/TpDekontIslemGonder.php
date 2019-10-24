<?php


namespace Turkpos\BuilderObject;


class TpDekontIslemGonder implements InterfaceSoapActionMethod
{

    /***
     * @var
     *
     *
     */
    public $GUID,
        $Dekont_ID,
        $E_Posta,
        $G;


    private $soapAction = 'TP_Islem_Dekont_Gonder';


    function __construct($guid, $decontId, $email)
    {

        $this->GUID = $guid;
        $this->Dekont_ID = $decontId;
        $this->E_Posta = $email;
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