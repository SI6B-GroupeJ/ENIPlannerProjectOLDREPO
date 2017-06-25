<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelecalendrier
 *
 * @ORM\Table(name="ModeleCalendrier")
 * @ORM\Entity
 */
class Modelecalendrier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdModeleCalendrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodelecalendrier;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleModele", type="string", length=50, nullable=false)
     */
    private $libellemodele;



    /**
     * Get idmodelecalendrier
     *
     * @return integer
     */
    public function getIdmodelecalendrier()
    {
        return $this->idmodelecalendrier;
    }

    /**
     * Set libellemodele
     *
     * @param string $libellemodele
     *
     * @return Modelecalendrier
     */
    public function setLibellemodele($libellemodele)
    {
        $this->libellemodele = $libellemodele;

        return $this;
    }

    /**
     * Get libellemodele
     *
     * @return string
     */
    public function getLibellemodele()
    {
        return $this->libellemodele;
    }
}
