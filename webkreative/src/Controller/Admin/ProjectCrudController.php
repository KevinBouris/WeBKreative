<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name', 'Title'),
            TextField::new('client_name'),
            BooleanField::new('dev_status'),
            ImageField::new('imagePath')
                ->setUploadDir('public/assets/img/project/')
                ->hideOnIndex(),
            TextField::new('short_description'),
            TextField::new('description'),
            DateField::new('updated_at')->onlyOnIndex(),
            DateField::new('created_at')->onlyOnIndex(),
            AssociationField::new('languages', 'Langages')
                ->setFormTypeOption('choice_label', 'name')
                ->setFormTypeOption('by_reference', false),
            AssociationField::new('tags')
                ->setFormTypeOption('choice_label', 'name')
                ->setFormTypeOption('by_reference', false),
        ];
    }
}
