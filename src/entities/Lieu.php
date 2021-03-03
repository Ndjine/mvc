<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\common\Collection\ArrayCollection;
/**
 * @Entity @CTable(name="lieu")
 **/
class  Lieu{
    /** @Id @Coulumn(type="integer") @GeneratedValue() **/
    private $id;
    /** @Coulumn(type="string") **/
    private $nom;
    /** @Coulumn(type="decimal") **/
    private $longitude;
    /** @Coulumn(type="decimal") **/
    private $latitude;
   /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="formation", mappedBy="lieu")
     */
    private $formation;
    /**
     * Many lieux have one user. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="lieux")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

    public function __construct(){
        $this->formations = new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *@param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLongitude()
    {
        return $this->Longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLatiitude()
    {
        return $this->Latiitude;
    }


    public function setLatitude($latitude)
    {
        $this->latitude = $latiitude;
    }


    public function getFormation()
    {
        return $this->formation;
    }


    public function setFormation($formation)
    {
        $this->formation = $formation;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($lieu)
    {
        $this->user = $user;
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