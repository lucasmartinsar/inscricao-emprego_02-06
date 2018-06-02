<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario08
 * Date: 19/05/2018
 * Time: 14:06
 */

namespace Domain\Service;

use Domain\Model\Oportunidade;

interface OportunidadeServiceInterface
{
    /**
     * @param Oportunidade $oportunidade
     * return void
     */
    public function salvar(Oportunidade $oportunidade);

    /**
     * @return array
     */

    public function listarTudo();
}