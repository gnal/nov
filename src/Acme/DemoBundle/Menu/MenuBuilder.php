<?php

namespace Acme\DemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Msi\CmfBundle\Menu\BaseMenuBuilder;

class MenuBuilder extends BaseMenuBuilder
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $this->getMenu($factory, 'main');

        $menu->setChildrenAttribute('class', 'nav nav-tabs nav-stacked');
        $this->setBootstrapDropdownMenuAttributes($menu);

        return $this->execute($menu);
    }
}
