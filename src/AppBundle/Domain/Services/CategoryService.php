<?php
namespace AppBundle\Domain\Services;
use AppBundle\Infrastructure\Repositories\CategoryRepository;

class CategoryService {
    
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;
    
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    
    
    public function findAll()
    {
        return $this->categoryRepository->findAll();
    }
}
