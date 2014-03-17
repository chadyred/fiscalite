<?php

namespace Fiscalite\GestionFiscaliteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Fiscalite\GestionFiscaliteBundle\DependencyInjection\Compiler\AddDbalCacheConfigurationPass;

class FiscaliteGestionFiscaliteBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new AddDbalCacheConfigurationPass());
    }

}
