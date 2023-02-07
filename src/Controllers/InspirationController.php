<?php

namespace Prdpspkt\Inspire\Controllers;
use Prdpspkt\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->getQuote();
        return view("inspire::index",['quote' => $quote] );
    }

}
