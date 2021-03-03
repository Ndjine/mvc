<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\common\Collection\ArrayCollection;
/**@Entity @CTable(name="user")
 **/
class  User{
    /** @Id @Coulumn(type="integer") @GeneratedValue() **/
    private $id;
    /** @Coulumn(type="string") **/
    private $nom;
    /** @Coulumn(type="string") **/
    private $prenom;
    /** @Coulumn(type="string") **/
    private $email;
    /** @Coulumn(type="string") **/
    private $password;
    /**
     * One user has many lieux. This is the inverse side.
     * @OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;
    /**
     * Many Users have Many Roles.
     * @ManyToMany(targetEntity="Roles", inversedBy="users")
     * @JoinTable(name="users_roles")
     */
    private $roles;
 

    public function __construct(){
        $this->lieux = new ArrayCollection();
        $this->roles = new ArrayCollection();
    }
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getLieux()
    {
        return $this->lieux;
    }


    public function setLieux($lieu)
    {
        $this->lieux = $lieux;
    }

    public function getRoles()
    {
        return $this->roles;
    }


    public function setRoles($roles)
    {
        $this->roles = $roles;
    }



}






?>