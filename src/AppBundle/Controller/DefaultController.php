<?php
namespace AppBundle\Controller;

use AppBundle\Form\CompanyType;
use AppBundle\Entity\Company;
use AppBundle\Entity\Audit;
use AppBundle\Entity\Category;
use AppBundle\Domain\Services\CompanyService;
use AppBundle\Domain\Services\CategoryService;
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
        //categories de la audit
        $categories = $this->getCategoryService()->findAll();

        //build the form
        //$company = new Company();
        //$form = $this->createForm(CompanyType::class, $company);

        //info de la nova audit
        /*$audit = new Audit();
        $auditname = $company->getName();
        $fechaaudit = date('YmdHms');
        $auditfinalname = $auditname.$fechaaudit;
        $audit->setName($auditfinalname);
        $audit->setState('New');
        $audit->setProvinencia('Cliente');
        $planselected = $request->request->get('selectplan');
        $audit->setCategory(intval($planselected));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company->setAgent(1);
            $audit->setCompany($company);

            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->persist($audit);
            $em->flush();

            $this->addFlash(
                'notice',
                'Hemos recibido tu petición. En breves contactaremos contigo, gracias!'
            );

            return $this->redirectToRoute('homepage');
        }*/
        return $this->render('default/index.html.twig', [
            //'urlEncuesta' => $this->get('router')->generate('show_survey'),
            'categories' => $categories,
            //'form' => $form->createView(),
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

    /**
     * @return CategoryService
     */
    private function getCategoryService()
    {
        return $this->get("category_service");
    }
}
