<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario08
 * Date: 19/05/2018
 * Time: 14:15
 */

namespace AppBundle\Service;


use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;
use Domain\Service\OportunidadeServiceInterface;

class OportunidadeService implements OportunidadeServiceInterface
{
    /**
     * @var OportunidadeServiceInterface
     */
    private $oportunidadeRepository;

    /**
     * OportunidadeService constructor.
     * @param OportunidadeServiceInterface $oportunidadeRepository
     */
    public function __construct(OportunidadeServiceInterface $oportunidadeRepository)

    {
        $this->oportunidadeRepository = $oportunidadeRepository;
    }
    /**
     * OportunidadeService constructor
     * @param OportunidadeRepositoryInterface $oportunidadeRepository
     */


    /**
     * @param Oportunidade $oportunidade
     * return void
     */
    public function salvar(Oportunidade $oportunidade)
    {
       $this->oportunidadeRepository->salvar($oportunidade);
    }
}
