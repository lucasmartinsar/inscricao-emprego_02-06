<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario08
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;
use Doctrine\ORM\Mapping\Table;
use JMS\Serializer\Annotation as Serializer;



class Oportunidade
{

    /**
     * @var \int
     */
    private $idOportunidade;

    /**
     * @var string
     */

    private $descricao;

    /**
     * @var \DateTime
     */
    private $periodoInicial;

    /**
    * @var \DateTime
    */
    private $periodoFinal;

    /**
     * @var \DateTime
     */

    private $qtdVagas;
    /**
     * Oportunidade constructor.
     * @param int $idOportunidade
     * @param string $descricao
     * @param \DateTime $periodoInicial
     * @param \DateTime $periodoFinal
     */



    public function __construct($idOportunidade,
                                $descricao,
                                \DateTime $periodoInicial,
                                \DateTime $periodoFinal)
    {
        $this->idOportunidade = $idOportunidade;
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @param \DateTime $periodoInicial
     */
    public function setPeriodoInicial($periodoInicial)
    {
        $this->periodoInicial = $periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }

    /**
     * @param \DateTime $periodoFinal
     */
    public function setPeriodoFinal($periodoFinal)
    {
        $this->periodoFinal = $periodoFinal;
    }

}