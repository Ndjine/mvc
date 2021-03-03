<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**@Entity @CTable(name="formation")
**/
//use Doctrine\common\Collection\ArrayCollection;
class  Formation{
/** @Id @Coulumn(type="integer") @GeneratedValue() **/
    public $id;
    /** @Coulumn(type="string") **/
    private $nom;
    /** @Coulumn(type="string") **/
    private $date;
    /** @Coulumn(type="integer") **/
    private $duree;
    /**
     * Many formations have one lieu. This is the owning side.
     * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @JoinColumn(name="lieu_id", referencedColumnName="id")
     */
    private $lieu;
    

    public function __construct() {

    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getLieu()
    {
        return $this->lieu;
    }


    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    


}






?>