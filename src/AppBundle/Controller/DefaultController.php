<?php
namespace AppBundle\Controller;

use AppBundle\Domain\Services\CompanyService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $companies = $this->getCompanyService()->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'urlEncuesta' => $this->get('router')->generate('show_survey'),
            'companies' => $companies,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }



    /**
     * @return CompanyService
     */
    private function getCompanyService()
    {
        return $this->get("company_service");
    }
}
