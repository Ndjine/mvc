<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**@Entity @CTable(name="role")
 **/
class  Roles{
    /** @Id @Coulumn(type="integer") @GeneratedValue() **/
    private $id;
    /** @Coulumn(type="string") **/
    private $nom;
    /**
     * Many Roles have Many users.
     * @ManyToMany(targetEntity="Roles", inversedBy="roles")
     * @JoinTable(name="users_User")
     */
    private $users;

    public function __construct() {
        $this->users = new ArrayCollection();
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
    $this->nom = $nom;
    }
    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers($users)
    {
        $this->users = $users;
    }




}






?>