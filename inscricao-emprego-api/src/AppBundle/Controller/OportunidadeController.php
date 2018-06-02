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
    use Symfony\Component\HttpFoundation\Response;


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
                #dump($oportunidade); die;
                $oportunidadeService->salvar($oportunidade);
               #dump($oportunidade);die;
            } catch (\Exception $exception) {
                return new Response($exception->getMessage(),  400);
                #dump($exception->getMessage());die;
            }
                return new Response ("Operação concluída com sucesso!");
            #dump("Deu certo"); die;
        }

        ##aqui abaixo fazemos a rota
        /**
         * @Route("/oportunidade/listar")
         */
        public function getOportunidadesAction()
        {
            $oportunidadeService = $this->get('app.oportunidade.service');
            $serializerService = $this->get('infra.serializer.service');
            try {
                $oportunidades = $oportunidadeService->listarTudo();
                //dump($oportunidades); die;
            }catch (\Exception $exception){
                return new Response($exception->getMessage(),  400);
            }
            return new Response($serializerService->toJsonByGroups($oportunidades));
        }
    }