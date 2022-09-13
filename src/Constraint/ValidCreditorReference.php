<?php declare(strict_types=1);

namespace Sprain\SwissQrBill\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * @internal
 */
final class ValidCreditorReference extends Constraint
{
    /**
     * @var string
     */
    public $message = 'The string "{{ string }}" is not a valid Creditor Reference.';
}
