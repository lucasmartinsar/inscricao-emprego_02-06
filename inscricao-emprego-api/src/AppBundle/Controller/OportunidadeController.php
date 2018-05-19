<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario08
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;

    use Domain\Model\Oportunidade;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;


    class OportunidadeController extends Controller
    {
        /**
         * @Route("/oportunidade/salvar")
         * @Method("POST")
         * @param Request $request
         */
        public function salvarAction(Request $request)
        {
            $serializerService = $this->get('infra.serializer.service');
            $oportunidadeService = $this->get('app.oportunidade.service');
            try {
                $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
                dump($oportunidade); die;
                $oportunidadeService->salvar($oportunidade);
                dump($oportunidade);die;
            } catch (\Exception $exception) {
                dump($exception->getMessage());die;
            }

            dump("Deu certo"); die;
        }
    }