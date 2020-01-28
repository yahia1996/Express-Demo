<?php

namespace MorivenBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MorivenBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
