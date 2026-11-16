<?php

namespace App\NativeComponents\Layouts;

use Native\Mobile\Edge\Layouts\Builders\NavBar;
use Native\Mobile\Edge\Layouts\Builders\Tab;
use Native\Mobile\Edge\Layouts\Builders\TabBar;
use Native\Mobile\Edge\Layouts\NativeLayout;
use Native\Mobile\Edge\NativeComponent;

class AppTabsLayout extends NativeLayout
{
    public function navBar(NativeComponent $screen): ?NavBar
    {
        return NavBar::make()->title($screen->navTitle());
    }

    public function tabBar(NativeComponent $screen): ?TabBar
    {
        return TabBar::make()
            ->activeColor(theme('primary'))
            ->add(Tab::link('Chats', '/chats', icon: 'chat'))
            ->add(Tab::link('Friends', '/friends', icon: 'group'))
            ->add(Tab::link('Profile', '/profile', icon: 'person'));
    }
}
