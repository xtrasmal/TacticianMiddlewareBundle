<?php namespace Xtrasmal\TacticianMiddlewareBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Xtrasmal\TacticianBundle\DependencyInjection\TacticianMiddlewareExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TacticianMiddlewareBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    public function getContainerExtension()
    {
        return new TacticianMiddlewareExtension();
    }
}
