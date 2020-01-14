<?php

/**
 * @Entity @Table(name="author")
 */
class Author
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @Column(type="string", length=255)
     */
    protected $first_name;
    /**
     * @Column(type="string", length=255)
     */
    protected $surname;

    /**
     * @OneToMany(targetEntity="Article", mappedBy="author")
     * 
     */
    protected $articles;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
}