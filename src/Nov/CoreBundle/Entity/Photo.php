<?php

namespace Nov\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Msi\CmfBundle\Doctrine\Extension\Uploadable\UploadableInterface;
use Msi\CmfBundle\Doctrine\Extension\Timestampable\TimestampableInterface;
use Msi\CmfBundle\Tools\Cutter;

/**
 * @ORM\Entity
 */
class Photo implements TimestampableInterface, UploadableInterface
{
    use \Msi\CmfBundle\Doctrine\Extension\Uploadable\Traits\UploadableEntity;
    use \Msi\CmfBundle\Doctrine\Extension\Timestampable\Traits\TimestampableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $published;

    /**
     * @ORM\Column(type="integer")
     */
    protected $position;

    /**
     * @ORM\Column(type="string")
     */
    protected $photo;

    protected $photoFile;

    public function __construct()
    {
        $this->published = false;
        $this->position = time();
    }

    public function getUploadFields()
    {
        return ['photo'];
    }

    public function processPhoto($file)
    {
        $cutter = new Cutter($file);
        $cutter->resize(233, 133)->save('t');
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    public function setPhotoFile($photoFile)
    {
        $this->photoFile = $photoFile;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}
