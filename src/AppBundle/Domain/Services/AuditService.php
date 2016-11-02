<?php
namespace AppBundle\Domain\Services;
use AppBundle\Infrastructure\Repositories\AuditRepository;

class AuditService {
    
    /**
     * @var CompanyRepository
     */
    private $auditRepository;
    
    public function __construct(AuditRepository $auditRepository){
        $this->auditRepository = $auditRepository;
    }
    
    
    public function findAll()
    {
        return $this->auditRepository->findAll();
    }
}
