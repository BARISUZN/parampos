<?php

namespace Turkpos\BuilderObject;

use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;

/**
 * Class TpIslemOdeme
 * @package Turkpos\BuilderObject
 * @deprecated
 */
class TpIslemOdeme implements InterfaceSoapActionMethod
{


    public $ff;

    /**
     * @var string
     * private variables
     *
     */
    private $soapAction = 'TP_Islem_Odeme';


    /**
     * TpIslemOdeme constructor.
     * @param $sanalPosId
     * @param $guid
     * @param $krediKartSahibi
     * @param $krediKartNo
     * @param $krediKartSonKullanmaAy
     * @param $krediKartSonKullanmaYil
     * @param $kkCvc
     * @param $kkSahibiGsm
     * @param $hataUrl
     * @param $basariliUrl
     * @param $siparisId
     * @param $siparisAciklama
     * @param $taksit
     * @param $islemtutar
     * @param $toplamTutar
     * @param $islemid
     * @param $ipAdr
     * @param $RefUrl
     * @param $dataBir
     * @param $dataIki
     * @param $dataUc
     * @param $dataDort
     * @param $dataBes
     *
     */
    public function __construct($sanalPosId, $guid, $krediKartSahibi, $krediKartNo, $krediKartSonKullanmaAy, $krediKartSonKullanmaYil, $kkCvc, $kkSahibiGsm, $hataUrl, $basariliUrl, $siparisId, $siparisAciklama, $taksit, $islemtutar, $toplamTutar, $islemid, $ipAdr, $RefUrl, $dataBir, $dataIki, $dataUc, $dataDort, $dataBes)
    {

        $this->SanalPOS_ID = $sanalPosId;
        $this->GUID = $guid;
        $this->KK_Sahibi = $krediKartSahibi;
        $this->KK_No = $krediKartNo;
        $this->KK_SK_Ay = $krediKartSonKullanmaAy;
        $this->KK_SK_Yil = $krediKartSonKullanmaYil;
        $this->KK_CVC = $kkCvc;
        $this->KK_Sahibi_GSM = $kkSahibiGsm;
        $this->Hata_URL = $hataUrl;
        $this->Basarili_URL = $basariliUrl;
        $this->Siparis_ID = $siparisId;
        $this->Siparis_Aciklama = $siparisAciklama;
        $this->Taksit = $taksit;
        $this->Islem_Tutar = $islemtutar;
        $this->Toplam_Tutar = $toplamTutar;
        $this->Islem_Hash = NULL;
        $this->Islem_ID = $islemid;
        $this->IPAdr = $ipAdr;
        $this->Ref_URL = $RefUrl;
        $this->Data1 = $dataBir;
        $this->Data2 = $dataIki;
        $this->Data3 = $dataUc;
        $this->Data4 = $dataDort;
        $this->Data5 = $dataBes;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);


        return $this;

    }




    /**
     * @return string
     *
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }


    /**
     * @param $soapAction
     *
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }
}