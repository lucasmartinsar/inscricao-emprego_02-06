<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario08
 * Date: 19/05/2018
 * Time: 14:24
 */

namespace Infrastructure\Persistence\Doctrine;


use Doctrine\ORM\EntityRepository;
use Domain\Model\Oportunidade;
use Domain\Service\OportunidadeServiceInterface;


class OportunidadeRepository extends EntityRepository implements OportunidadeServiceInterface
{

    /**
     * @param Oportunidade $oportunidade
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function salvar(Oportunidade $oportunidade)
    {
        $this->getEntityManager()->persist($oportunidade);
        $this->getEntityManager()->flush();

    }

    /**
     * @return array
     */
    public function listarTudo()
    {
        return $this->findAll();
    }
}