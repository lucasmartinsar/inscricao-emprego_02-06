<?php
namespace Domain\Model;
use Doctrine\Common\Collections\Collection;

class Candidato{

    /**
     * @var int
     */
    private $idCandidato;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $telefone;
    /**
     * @var string
     */
    private $curriculo;
    /**
     * @var Collection
     */
    private $habilidadesTecnicas;
    /**
     * @var Collection
     */
    private $experienciasProfissionais;






}
