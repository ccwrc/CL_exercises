<?php

namespace CodersLabBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CodersLabBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
