<?php

namespace Programic\Rules;

use Programic\Rules\Contracts\Rule as RuleContract;

class Rule implements RuleContract
{
    public function base(): array {
        return [];
    }
}
