<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depr
 *
 * @ORM\Table(name="de_pr")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeprRepository")
 */
class Depr
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rfim", type="string", length=16, nullable=false)
     */
    private $rfim;

    /**
     * @var string
     *
     * @ORM\Column(name="noca", type="string", length=12, nullable=true)
     */
    private $noca;

    /**
     * @var string
     *
     * @ORM\Column(name="node", type="string", length=10, nullable=false)
     */
    private $node;

    /**
     * @var string
     *
     * @ORM\Column(name="cdld", type="string", length=3, nullable=true)
     */
    private $cdld;

    /**
     * @var string
     *
     * @ORM\Column(name="nopt", type="string", length=10, nullable=true)
     */
    private $nopt;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="string", length=10, nullable=true)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="noch", type="string", length=6, nullable=true)
     */
    private $noch;

    /**
     * @var string
     *
     * @ORM\Column(name="nopc", type="string", length=7, nullable=true)
     */
    private $nopc;

    /**
     * @var int
     *
     * @ORM\Column(name="tyca", type="integer", nullable=true, nullable=true)
     */
    private $tyca;

    /**
     * @var string
     *
     * @ORM\Column(name="tyde", type="string", length=2, nullable=true)
     */
    private $tyde;

    /**
     * @var int
     *
     * @ORM\Column(name="etpr", type="integer", nullable=true)
     */
    private $etpr;

    /**
     * @var string
     *
     * @ORM\Column(name="dtpr", type="string", length=8, nullable=true)
     */
    private $dtpr;

    /**
     * @var string
     *
     * @ORM\Column(name="hhpr", type="string", length=8, nullable=true)
     */
    private $hhpr;

    /**
     * @var string
     *
     * @ORM\Column(name="stpu", type="string", length=2, nullable=true)
     */
    private $stpu;

    /**
     * @var string
     *
     * @ORM\Column(name="uspu", type="string", length=2, nullable=true)
     */
    private $uspu;

    /**
     * @var int
     *
     * @ORM\Column(name="etaq", type="integer", nullable=true)
     */
    private $etaq;

    /**
     * @var string
     *
     * @ORM\Column(name="dtaq", type="string", length=8, nullable=true)
     */
    private $dtaq;

    /**
     * @var string
     *
     * @ORM\Column(name="hhaq", type="string", length=8, nullable=true)
     */
    private $hhaq;

    /**
     * @var string
     *
     * @ORM\Column(name="usaq", type="string", length=8, nullable=true)
     */
    private $usaq;

    /**
     * @var string
     *
     * @ORM\Column(name="star", type="string", length=2, nullable=true)
     */
    private $star;

    /**
     * @return string
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * @param string $star
     */
    public function setStar($star)
    {
        $this->star = $star;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="dtprint", type="string", length=8, nullable=true)
     */
    private $dtprint;

    /**
     * @var string
     *
     * @ORM\Column(name="hhprint", type="string", length=8, nullable=true)
     */
    private $hhprint;

    /**
     * @var string
     *
     * @ORM\Column(name="usprint", type="string", length=8, nullable=true)
     */
    private $usprint;

    /**
     * @var string
     *
     * @ORM\Column(name="stprint", type="string", length=2, nullable=true)
     */
    private $stprint;

    /**
     * @var int
     *
     * @ORM\Column(name="etct", type="integer", nullable=true)
     */
    private $etct;

    /**
     * @var string
     *
     * @ORM\Column(name="dtct", type="string", length=255, nullable=true)
     */
    private $dtct;

    /**
     * @var string
     *
     * @ORM\Column(name="hhct", type="string", length=8, nullable=true)
     */
    private $hhct;

    /**
     * @var string
     *
     * @ORM\Column(name="usct", type="string", length=8, nullable=true)
     */
    private $usct;

    /**
     * @var string
     *
     * @ORM\Column(name="stct", type="string", length=2, nullable=true)
     */
    private $stct;

    /**
     * @var string
     *
     * @ORM\Column(name="dtval", type="string", length=8, nullable=true)
     */
    private $dtval;

    /**
     * @var string
     *
     * @ORM\Column(name="hhval", type="string", length=8, nullable=true)
     */
    private $hhval;

    /**
     * @var string
     *
     * @ORM\Column(name="dtpc", type="string", length=8, nullable=true)
     */
    private $dtpc;

    /**
     * @var string
     *
     * @ORM\Column(name="hhpc", type="string", length=8, nullable=true)
     */
    private $hhpc;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=true)
     */
    private $prio;

    /**
     * @var int
     *
     * @ORM\Column(name="etec", type="integer", nullable=true)
     */
    private $etec;

    /**
     * @var int
     *
     * @ORM\Column(name="etsa", type="integer", nullable=true)
     */
    private $etsa;

    /**
     * @var int
     *
     * @ORM\Column(name="rjpr", type="integer", nullable=true)
     */
    private $rjpr;

    /**
     * @var int
     *
     * @ORM\Column(name="nolo", type="integer", nullable=true)
     */
    private $nolo;

    /**
     * @var int
     *
     * @ORM\Column(name="fiim", type="string", length=12, nullable=true)
     */
    private $fiim;

    /**
     * @var string
     *
     * @ORM\Column(name="nenm1", type="string", length=50, nullable=true)
     */
    private $nenm1;

    /**
     * @var string
     *
     * @ORM\Column(name="pol_carte", type="string", length=2, nullable=true)
     */
    private $polCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="nenm2", type="string", length=55, nullable=true)
     */
    private $nenm2;

    /**
     * @var string
     *
     * @ORM\Column(name="nepr1", type="string", length=46, nullable=true)
     */
    private $nepr1;

    /**
     * @var string
     *
     * @ORM\Column(name="nepr2", type="string", length=55, nullable=true)
     */
    private $nepr2;

    /**
     * @var string
     *
     * @ORM\Column(name="sx", type="string", length=1, nullable=true)
     */
    private $sx;

    /**
     * @var string
     *
     * @ORM\Column(name="dtns", type="string", length=10, nullable=true)
     */
    private $dtns;

    /**
     * @var string
     *
     * @ORM\Column(name="ldns", type="string", length=53, nullable=true)
     */
    private $ldns;

    /**
     * @var string
     *
     * @ORM\Column(name="tlde", type="string", length=5, nullable=true)
     */
    private $tlde;

    /**
     * @var string
     *
     * @ORM\Column(name="ocrb1", type="string", length=36, nullable=true)
     */
    private $ocrb1;

    /**
     * @var string
     *
     * @ORM\Column(name="ocrb2", type="string", length=36, nullable=true)
     */
    private $ocrb2;

    /**
     * @var string
     *
     * @ORM\Column(name="inph", type="string", length=2, nullable=true)
     */
    private $inph;

    /**
     * @var string
     *
     * @ORM\Column(name="adr1", type="string", length=68, nullable=true)
     */
    private $adr1;

    /**
     * @var string
     *
     * @ORM\Column(name="adr2", type="string", length=76, nullable=true)
     */
    private $adr2;

    /**
     * @var string
     *
     * @ORM\Column(name="dtdval", type="string", length=10, nullable=true)
     */
    private $dtdval;

    /**
     * @var string
     *
     * @ORM\Column(name="dtfval", type="string", length=10, nullable=true)
     */
    private $dtfval;

    /**
     * @var int
     *
     * @ORM\Column(name="flf2", type="integer", nullable=true)
     */
    private $flf2;

    /**
     * @var string
     *
     * @ORM\Column(name="libld", type="string", length=71, nullable=true)
     */
    private $libld;

    /**
     * @var int
     *
     * @ORM\Column(name="flcl", type="integer", nullable=true)
     */
    private $flcl;

    /**
     * @var int
     *
     * @ORM\Column(name="adr3", type="string",length=68, nullable=true)
     */
    private $adr3;

    /**
     * @var int
     *
     * @ORM\Column(name="adr4", type="string",length=76, nullable=true)
     */
    private $adr4;

    /**
     * @var int
     *
     * @ORM\Column(name="flag_tes", type="integer", nullable=false)
     */
    private $flag_tes;

    /**
     * @var int
     *
     * @ORM\Column(name="numdemande", type="string",length=17, nullable=true)
     */
    private $numdemande;

    /**
     * @var int
     *
     * @ORM\Column(name="numordreproduction", type="string",length=10, nullable=true)
     */
    private $numordreproduction;

    /**
     * @var int
     *
     * @ORM\Column(name="codeanomalie", type="string",length=2, nullable=true)
     */
    private $codeanomalie;

    /**
     * @var int
     *
     * @ORM\Column(name="commentaireanomalie", type="integer", nullable=true)
     */
    private $commentaireanomalie;

    /**
     * @var int
     *
     * @ORM\Column(name="ugf", type="string",length=5, nullable=true)
     */
    private $ugf;

    /**
     * @var int
     *
     * @ORM\Column(name="ugf_adresse", type="string",length=170, nullable=true)
     */
    private $ugf_adresse;

    /**
     * @return int
     */
    public function getUgf()
    {
        return $this->ugf;
    }

    /**
     * @param int $ugf
     */
    public function setUgf($ugf)
    {
        $this->ugf = $ugf;
    }

    /**
     * @return int
     */
    public function getUgfAdresse()
    {
        return $this->ugf_adresse;
    }

    /**
     * @param int $ugf_adresse
     */
    public function setUgfAdresse($ugf_adresse)
    {
        $this->ugf_adresse = $ugf_adresse;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="cvu_station", type="string",length=32, nullable=true)
     */
    private $cvu_station;

    /**
     * @var int
     *
     * @ORM\Column(name="tf7_file_name", type="string",length=25, nullable=true)
     */
    private $tf7_file_name;

    /**
     * @var int
     *
     * @ORM\Column(name="dttf7", type="string",length=8, nullable=true)
     */
    private $dttf7;

    /**
     * @var int
     *
     * @ORM\Column(name="hhtf7", type="string",length=8, nullable=true)
     */
    private $hhtf7;

    /**
     * @var int
     *
     * @ORM\Column(name="retouche_auto", type="string",length=14, nullable=true)
     */
    private $retouche_auto;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rfim
     *
     * @param string $rfim
     *
     * @return Depr
     */
    public function setRfim($rfim)
    {
        $this->rfim = $rfim;

        return $this;
    }

    /**
     * Get rfim
     *
     * @return string
     */
    public function getRfim()
    {
        return $this->rfim;
    }

    /**
     * Set noca
     *
     * @param string $noca
     *
     * @return Depr
     */
    public function setNoca($noca)
    {
        $this->noca = $noca;

        return $this;
    }

    /**
     * Get noca
     *
     * @return string
     */
    public function getNoca()
    {
        return $this->noca;
    }

    /**
     * Set node
     *
     * @param string $node
     *
     * @return Depr
     */
    public function setNode($node)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * Get node
     *
     * @return string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Set cdld
     *
     * @param string $cdld
     *
     * @return Depr
     */
    public function setCdld($cdld)
    {
        $this->cdld = $cdld;

        return $this;
    }

    /**
     * Get cdld
     *
     * @return string
     */
    public function getCdld()
    {
        return $this->cdld;
    }

    /**
     * Set nopt
     *
     * @param string $nopt
     *
     * @return Depr
     */
    public function setNopt($nopt)
    {
        $this->nopt = $nopt;

        return $this;
    }

    /**
     * Get nopt
     *
     * @return string
     */
    public function getNopt()
    {
        return $this->nopt;
    }

    /**
     * Set nota
     *
     * @param string $nota
     *
     * @return Depr
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set noch
     *
     * @param string $noch
     *
     * @return Depr
     */
    public function setNoch($noch)
    {
        $this->noch = $noch;

        return $this;
    }

    /**
     * Get noch
     *
     * @return string
     */
    public function getNoch()
    {
        return $this->noch;
    }

    /**
     * Set nopc
     *
     * @param string $nopc
     *
     * @return Depr
     */
    public function setNopc($nopc)
    {
        $this->nopc = $nopc;

        return $this;
    }

    /**
     * Get nopc
     *
     * @return string
     */
    public function getNopc()
    {
        return $this->nopc;
    }

    /**
     * Set tyca
     *
     * @param integer $tyca
     *
     * @return Depr
     */
    public function setTyca($tyca)
    {
        $this->tyca = $tyca;

        return $this;
    }

    /**
     * Get tyca
     *
     * @return int
     */
    public function getTyca()
    {
        return $this->tyca;
    }

    /**
     * Set tyde
     *
     * @param string $tyde
     *
     * @return Depr
     */
    public function setTyde($tyde)
    {
        $this->tyde = $tyde;

        return $this;
    }

    /**
     * Get tyde
     *
     * @return string
     */
    public function getTyde()
    {
        return $this->tyde;
    }

    /**
     * Set etpr
     *
     * @param integer $etpr
     *
     * @return Depr
     */
    public function setEtpr($etpr)
    {
        $this->etpr = $etpr;

        return $this;
    }

    /**
     * Get etpr
     *
     * @return int
     */
    public function getEtpr()
    {
        return $this->etpr;
    }

    /**
     * Set dtpr
     *
     * @param string $dtpr
     *
     * @return Depr
     */
    public function setDtpr($dtpr)
    {
        $this->dtpr = $dtpr;

        return $this;
    }

    /**
     * Get dtpr
     *
     * @return string
     */
    public function getDtpr()
    {
        return $this->dtpr;
    }

    /**
     * Set hhpr
     *
     * @param string $hhpr
     *
     * @return Depr
     */
    public function setHhpr($hhpr)
    {
        $this->hhpr = $hhpr;

        return $this;
    }

    /**
     * Get hhpr
     *
     * @return string
     */
    public function getHhpr()
    {
        return $this->hhpr;
    }

    /**
     * Set stpu
     *
     * @param string $stpu
     *
     * @return Depr
     */
    public function setStpu($stpu)
    {
        $this->stpu = $stpu;

        return $this;
    }

    /**
     * Get stpu
     *
     * @return string
     */
    public function getStpu()
    {
        return $this->stpu;
    }

    /**
     * Set uspu
     *
     * @param string $uspu
     *
     * @return Depr
     */
    public function setUspu($uspu)
    {
        $this->uspu = $uspu;

        return $this;
    }

    /**
     * Get uspu
     *
     * @return string
     */
    public function getUspu()
    {
        return $this->uspu;
    }

    /**
     * Set etaq
     *
     * @param integer $etaq
     *
     * @return Depr
     */
    public function setEtaq($etaq)
    {
        $this->etaq = $etaq;

        return $this;
    }

    /**
     * Get etaq
     *
     * @return int
     */
    public function getEtaq()
    {
        return $this->etaq;
    }

    /**
     * Set dtaq
     *
     * @param string $dtaq
     *
     * @return Depr
     */
    public function setDtaq($dtaq)
    {
        $this->dtaq = $dtaq;

        return $this;
    }

    /**
     * Get dtaq
     *
     * @return string
     */
    public function getDtaq()
    {
        return $this->dtaq;
    }

    /**
     * Set hhaq
     *
     * @param string $hhaq
     *
     * @return Depr
     */
    public function setHhaq($hhaq)
    {
        $this->hhaq = $hhaq;

        return $this;
    }

    /**
     * Get hhaq
     *
     * @return string
     */
    public function getHhaq()
    {
        return $this->hhaq;
    }

    /**
     * Set usaq
     *
     * @param string $usaq
     *
     * @return Depr
     */
    public function setUsaq($usaq)
    {
        $this->usaq = $usaq;

        return $this;
    }

    /**
     * Get usaq
     *
     * @return string
     */
    public function getUsaq()
    {
        return $this->usaq;
    }

    /**
     * Set staq
     *
     * @param string $staq
     *
     * @return Depr
     */
    public function setStaq($staq)
    {
        $this->staq = $staq;

        return $this;
    }

    /**
     * Get staq
     *
     * @return string
     */
    public function getStaq()
    {
        return $this->staq;
    }

    /**
     * Set dtprint
     *
     * @param string $dtprint
     *
     * @return Depr
     */
    public function setDtprint($dtprint)
    {
        $this->dtprint = $dtprint;

        return $this;
    }

    /**
     * Get dtprint
     *
     * @return string
     */
    public function getDtprint()
    {
        return $this->dtprint;
    }

    /**
     * Set hhprint
     *
     * @param string $hhprint
     *
     * @return Depr
     */
    public function setHhprint($hhprint)
    {
        $this->hhprint = $hhprint;

        return $this;
    }

    /**
     * Get hhprint
     *
     * @return string
     */
    public function getHhprint()
    {
        return $this->hhprint;
    }

    /**
     * Set usprint
     *
     * @param string $usprint
     *
     * @return Depr
     */
    public function setUsprint($usprint)
    {
        $this->usprint = $usprint;

        return $this;
    }

    /**
     * Get usprint
     *
     * @return string
     */
    public function getUsprint()
    {
        return $this->usprint;
    }

    /**
     * Set stprint
     *
     * @param string $stprint
     *
     * @return Depr
     */
    public function setStprint($stprint)
    {
        $this->stprint = $stprint;

        return $this;
    }

    /**
     * Get stprint
     *
     * @return string
     */
    public function getStprint()
    {
        return $this->stprint;
    }

    /**
     * Set etct
     *
     * @param integer $etct
     *
     * @return Depr
     */
    public function setEtct($etct)
    {
        $this->etct = $etct;

        return $this;
    }

    /**
     * Get etct
     *
     * @return int
     */
    public function getEtct()
    {
        return $this->etct;
    }

    /**
     * Set dtct
     *
     * @param string $dtct
     *
     * @return Depr
     */
    public function setDtct($dtct)
    {
        $this->dtct = $dtct;

        return $this;
    }

    /**
     * Get dtct
     *
     * @return string
     */
    public function getDtct()
    {
        return $this->dtct;
    }

    /**
     * Set hhct
     *
     * @param string $hhct
     *
     * @return Depr
     */
    public function setHhct($hhct)
    {
        $this->hhct = $hhct;

        return $this;
    }

    /**
     * Get hhct
     *
     * @return string
     */
    public function getHhct()
    {
        return $this->hhct;
    }

    /**
     * Set usct
     *
     * @param string $usct
     *
     * @return Depr
     */
    public function setUsct($usct)
    {
        $this->usct = $usct;

        return $this;
    }

    /**
     * Get usct
     *
     * @return string
     */
    public function getUsct()
    {
        return $this->usct;
    }

    /**
     * Set stct
     *
     * @param string $stct
     *
     * @return Depr
     */
    public function setStct($stct)
    {
        $this->stct = $stct;

        return $this;
    }

    /**
     * Get stct
     *
     * @return string
     */
    public function getStct()
    {
        return $this->stct;
    }

    /**
     * Set dtval
     *
     * @param string $dtval
     *
     * @return Depr
     */
    public function setDtval($dtval)
    {
        $this->dtval = $dtval;

        return $this;
    }

    /**
     * Get dtval
     *
     * @return string
     */
    public function getDtval()
    {
        return $this->dtval;
    }

    /**
     * Set hhval
     *
     * @param string $hhval
     *
     * @return Depr
     */
    public function setHhval($hhval)
    {
        $this->hhval = $hhval;

        return $this;
    }

    /**
     * Get hhval
     *
     * @return string
     */
    public function getHhval()
    {
        return $this->hhval;
    }

    /**
     * Set dtpc
     *
     * @param string $dtpc
     *
     * @return Depr
     */
    public function setDtpc($dtpc)
    {
        $this->dtpc = $dtpc;

        return $this;
    }

    /**
     * Get dtpc
     *
     * @return string
     */
    public function getDtpc()
    {
        return $this->dtpc;
    }

    /**
     * Set hhpc
     *
     * @param string $hhpc
     *
     * @return Depr
     */
    public function setHhpc($hhpc)
    {
        $this->hhpc = $hhpc;

        return $this;
    }

    /**
     * Get hhpc
     *
     * @return string
     */
    public function getHhpc()
    {
        return $this->hhpc;
    }

    /**
     * Set prio
     *
     * @param integer $prio
     *
     * @return Depr
     */
    public function setPrio($prio)
    {
        $this->prio = $prio;

        return $this;
    }

    /**
     * Get prio
     *
     * @return int
     */
    public function getPrio()
    {
        return $this->prio;
    }

    /**
     * Set etec
     *
     * @param integer $etec
     *
     * @return Depr
     */
    public function setEtec($etec)
    {
        $this->etec = $etec;

        return $this;
    }

    /**
     * Get etec
     *
     * @return int
     */
    public function getEtec()
    {
        return $this->etec;
    }

    /**
     * Set etsa
     *
     * @param integer $etsa
     *
     * @return Depr
     */
    public function setEtsa($etsa)
    {
        $this->etsa = $etsa;

        return $this;
    }

    /**
     * Get etsa
     *
     * @return int
     */
    public function getEtsa()
    {
        return $this->etsa;
    }

    /**
     * Set rjpr
     *
     * @param integer $rjpr
     *
     * @return Depr
     */
    public function setRjpr($rjpr)
    {
        $this->rjpr = $rjpr;

        return $this;
    }

    /**
     * Get rjpr
     *
     * @return int
     */
    public function getRjpr()
    {
        return $this->rjpr;
    }

    /**
     * Set nolo
     *
     * @param integer $nolo
     *
     * @return Depr
     */
    public function setNolo($nolo)
    {
        $this->nolo = $nolo;

        return $this;
    }

    /**
     * Get nolo
     *
     * @return int
     */
    public function getNolo()
    {
        return $this->nolo;
    }

    /**
     * Set fiim
     *
     * @param integer $fiim
     *
     * @return Depr
     */
    public function setFiim($fiim)
    {
        $this->fiim = $fiim;

        return $this;
    }

    /**
     * Get fiim
     *
     * @return int
     */
    public function getFiim()
    {
        return $this->fiim;
    }

    /**
     * Set nenm1
     *
     * @param string $nenm1
     *
     * @return Depr
     */
    public function setNenm1($nenm1)
    {
        $this->nenm1 = $nenm1;

        return $this;
    }

    /**
     * Get nenm1
     *
     * @return string
     */
    public function getNenm1()
    {
        return $this->nenm1;
    }

    /**
     * Set polCarte
     *
     * @param string $polCarte
     *
     * @return Depr
     */
    public function setPolCarte($polCarte)
    {
        $this->polCarte = $polCarte;

        return $this;
    }

    /**
     * Get polCarte
     *
     * @return string
     */
    public function getPolCarte()
    {
        return $this->polCarte;
    }

    /**
     * Set nenm2
     *
     * @param string $nenm2
     *
     * @return Depr
     */
    public function setNenm2($nenm2)
    {
        $this->nenm2 = $nenm2;

        return $this;
    }

    /**
     * Get nenm2
     *
     * @return string
     */
    public function getNenm2()
    {
        return $this->nenm2;
    }

    /**
     * Set nepr1
     *
     * @param string $nepr1
     *
     * @return Depr
     */
    public function setNepr1($nepr1)
    {
        $this->nepr1 = $nepr1;

        return $this;
    }

    /**
     * Get nepr1
     *
     * @return string
     */
    public function getNepr1()
    {
        return $this->nepr1;
    }

    /**
     * Set nepr2
     *
     * @param string $nepr2
     *
     * @return Depr
     */
    public function setNepr2($nepr2)
    {
        $this->nepr2 = $nepr2;

        return $this;
    }

    /**
     * Get nepr2
     *
     * @return string
     */
    public function getNepr2()
    {
        return $this->nepr2;
    }

    /**
     * Set sx
     *
     * @param string $sx
     *
     * @return Depr
     */
    public function setSx($sx)
    {
        $this->sx = $sx;

        return $this;
    }

    /**
     * Get sx
     *
     * @return string
     */
    public function getSx()
    {
        return $this->sx;
    }

    /**
     * Set dtns
     *
     * @param string $dtns
     *
     * @return Depr
     */
    public function setDtns($dtns)
    {
        $this->dtns = $dtns;

        return $this;
    }

    /**
     * Get dtns
     *
     * @return string
     */
    public function getDtns()
    {
        return $this->dtns;
    }

    /**
     * Set ldns
     *
     * @param string $ldns
     *
     * @return Depr
     */
    public function setLdns($ldns)
    {
        $this->ldns = $ldns;

        return $this;
    }

    /**
     * Get ldns
     *
     * @return string
     */
    public function getLdns()
    {
        return $this->ldns;
    }

    /**
     * Set tlde
     *
     * @param string $tlde
     *
     * @return Depr
     */
    public function setTlde($tlde)
    {
        $this->tlde = $tlde;

        return $this;
    }

    /**
     * Get tlde
     *
     * @return string
     */
    public function getTlde()
    {
        return $this->tlde;
    }

    /**
     * Set ocrb1
     *
     * @param string $ocrb1
     *
     * @return Depr
     */
    public function setOcrb1($ocrb1)
    {
        $this->ocrb1 = $ocrb1;

        return $this;
    }

    /**
     * Get ocrb1
     *
     * @return string
     */
    public function getOcrb1()
    {
        return $this->ocrb1;
    }

    /**
     * Set ocrb2
     *
     * @param string $ocrb2
     *
     * @return Depr
     */
    public function setOcrb2($ocrb2)
    {
        $this->ocrb2 = $ocrb2;

        return $this;
    }

    /**
     * Get ocrb2
     *
     * @return string
     */
    public function getOcrb2()
    {
        return $this->ocrb2;
    }

    /**
     * Set inph
     *
     * @param string $inph
     *
     * @return Depr
     */
    public function setInph($inph)
    {
        $this->inph = $inph;

        return $this;
    }

    /**
     * Get inph
     *
     * @return string
     */
    public function getInph()
    {
        return $this->inph;
    }

    /**
     * Set adr1
     *
     * @param string $adr1
     *
     * @return Depr
     */
    public function setAdr1($adr1)
    {
        $this->adr1 = $adr1;

        return $this;
    }

    /**
     * Get adr1
     *
     * @return string
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Set adr2
     *
     * @param string $adr2
     *
     * @return Depr
     */
    public function setAdr2($adr2)
    {
        $this->adr2 = $adr2;

        return $this;
    }

    /**
     * Get adr2
     *
     * @return string
     */
    public function getAdr2()
    {
        return $this->adr2;
    }

    /**
     * Set dtdval
     *
     * @param string $dtdval
     *
     * @return Depr
     */
    public function setDtdval($dtdval)
    {
        $this->dtdval = $dtdval;

        return $this;
    }

    /**
     * Get dtdval
     *
     * @return string
     */
    public function getDtdval()
    {
        return $this->dtdval;
    }

    /**
     * Set dtfval
     *
     * @param string $dtfval
     *
     * @return Depr
     */
    public function setDtfval($dtfval)
    {
        $this->dtfval = $dtfval;

        return $this;
    }

    /**
     * Get dtfval
     *
     * @return string
     */
    public function getDtfval()
    {
        return $this->dtfval;
    }

    /**
     * Set flf2
     *
     * @param integer $flf2
     *
     * @return Depr
     */
    public function setFlf2($flf2)
    {
        $this->flf2 = $flf2;

        return $this;
    }

    /**
     * Get flf2
     *
     * @return int
     */
    public function getFlf2()
    {
        return $this->flf2;
    }

    /**
     * Set libld
     *
     * @param string $libld
     *
     * @return Depr
     */
    public function setLibld($libld)
    {
        $this->libld = $libld;

        return $this;
    }

    /**
     * Get libld
     *
     * @return string
     */
    public function getLibld()
    {
        return $this->libld;
    }

    /**
     * Set flcl
     *
     * @param integer $flcl
     *
     * @return Depr
     */
    public function setFlcl($flcl)
    {
        $this->flcl = $flcl;

        return $this->$flcl;
    }

    /**
     * @return int
     */
    public function getFlcl()
    {
        return $this->flcl;
    }

    /**
     * Get adr3
     *
     * @return int
     */
    public function getAdr3()
    {
        return $this->adr3;
    }

    /**
     * Set adr3
     *
     * @param integer $adr3
     *
     * @return Depr
     */
    public function setAdr3($adr3)
    {
        $this->adr3 = $adr3;

        return $this;
    }

    /**
     * Set adr4
     *
     * @param integer $adr4
     *
     * @return Depr
     */
    public function setAdr4($adr4)
    {
        $this->adr4 = $adr4;

        return $this;
    }

    /**
     * Get adr4
     *
     * @return int
     */
    public function getAdr4()
    {
        return $this->adr4;
    }

    /**
     * @return int
     */
    public function getFlagTes()
    {
        return $this->flag_tes;
    }

    /**
     * @param int $flag_tes
     */
    public function setFlagTes($flag_tes)
    {
        $this->flag_tes = $flag_tes;
    }

    /**
     * @return int
     */
    public function getNumdemande()
    {
        return $this->numdemande;
    }

    /**
     * @param int $numdemande
     */
    public function setNumdemande($numdemande)
    {
        $this->numdemande = $numdemande;
    }

    /**
     * @return int
     */
    public function getNumordreproduction()
    {
        return $this->numordreproduction;
    }

    /**
     * @param int $numordreproduction
     */
    public function setNumordreproduction($numordreproduction)
    {
        $this->numordreproduction = $numordreproduction;
    }

    /**
     * @return int
     */
    public function getCodeanomalie()
    {
        return $this->codeanomalie;
    }

    /**
     * @param int $codeanomalie
     */
    public function setCodeanomalie($codeanomalie)
    {
        $this->codeanomalie = $codeanomalie;
    }

    /**
     * @return int
     */
    public function getCommentaireanomalie()
    {
        return $this->commentaireanomalie;
    }

    /**
     * @param int $commentaireanomalie
     */
    public function setCommentaireanomalie($commentaireanomalie)
    {
        $this->commentaireanomalie = $commentaireanomalie;
    }

    /**
     * @return int
     */
    public function getUgh()
    {
        return $this->ugh;
    }

    /**
     * @param int $ugh
     */
    public function setUgh($ugh)
    {
        $this->ugh = $ugh;
    }

    /**
     * @return int
     */
    public function getUghAdresse()
    {
        return $this->ugh_adresse;
    }

    /**
     * @param int $ugh_adresse
     */
    public function setUghAdresse($ugh_adresse)
    {
        $this->ugh_adresse = $ugh_adresse;
    }

    /**
     * @return int
     */
    public function getCvuStation()
    {
        return $this->cvu_station;
    }

    /**
     * @param int $cvu_station
     */
    public function setCvuStation($cvu_station)
    {
        $this->cvu_station = $cvu_station;
    }

    /**
     * @return int
     */
    public function getTf7FileName()
    {
        return $this->tf7_file_name;
    }

    /**
     * @param int $tf7_file_name
     */
    public function setTf7FileName($tf7_file_name)
    {
        $this->tf7_file_name = $tf7_file_name;
    }

    /**
     * @return int
     */
    public function getDttf7()
    {
        return $this->dttf7;
    }

    /**
     * @param int $dttf7
     */
    public function setDttf7($dttf7)
    {
        $this->dttf7 = $dttf7;
    }

    /**
     * @return int
     */
    public function getHhtf7()
    {
        return $this->hhtf7;
    }

    /**
     * @param int $hhtf7
     */
    public function setHhtf7($hhtf7)
    {
        $this->hhtf7 = $hhtf7;
    }

    /**
     * @return int
     */
    public function getRetoucheAuto()
    {
        return $this->retouche_auto;
    }

    /**
     * @param int $retouche_auto
     */
    public function setRetoucheAuto($retouche_auto)
    {
        $this->retouche_auto = $retouche_auto;
    }



}

