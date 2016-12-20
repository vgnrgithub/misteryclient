<?php
namespace AppBundle\Domain\Services;
use AppBundle\Infrastructure\Repositories\AssessmentRepository;

class AssessmentService {
    
    /**
     * @var AssessmentRepository
     */
    private $assessmentRepository;
    
    public function __construct(AssessmentRepository $assessmentRepository){
        $this->assessmentRepository = $assessmentRepository;
    }
    
    
    public function findAll()
    {
        return $this->assessmentRepository->findAll();
    }
}
