<?php

namespace App\Controller\Admin;

use App\Entity\Language;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LanguageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Language::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name'),
            ImageField::new('logoPath')->onlyOnForms()->setUploadDir('public/assets/img/logo/'),
            TextField::new('css_class')->onlyOnForms(),
            DateTimeField::new('created_at')->onlyOnIndex(),
            DateTimeField::new('updated_at')->onlyOnIndex(),
            AssociationField::new('projects')
                ->setFormTypeOption('choice_label', 'name')
                ->setFormTypeOption('by_reference', false)
        ];
    }
}
