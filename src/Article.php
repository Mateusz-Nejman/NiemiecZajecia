<?php

/**
 * @Entity @Table(name="article")
 */
class Article
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @Column(type="string", length=255)
     */
    protected $title;
    /**
     * @Column(type="string", length=255)
     */
    protected $content;
    /**
     * @ManyToOne(targetEntity="Author", inversedBy="article")
     * @JoinColumn(name="author", referencedColumnName="id")
     */
    protected $author;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
}