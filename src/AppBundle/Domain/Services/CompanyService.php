<?php
namespace AppBundle\Domain\Services;
use AppBundle\Infrastructure\Repositories\CompanyRepository;

class CompanyService {
    
    /**
     * @var CompanyRepository
     */
    private $companyRepository;
    
    public function __construct(CompanyRepository $companyRepository){
        $this->companyRepository = $companyRepository;
    }
    
    
    public function findAll()
    {
        return $this->companyRepository->findAll();
    }
}
