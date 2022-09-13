<?php declare(strict_types=1);

namespace Sprain\SwissQrBill\PaymentPart\Output\Element;

/**
 * @internal
 */
final class Text implements OutputElementInterface
{
    /**
     * @var string
     */
    private $text;

    public static function create(string $text): self
    {
        $element = new self();
        $element->text = $text;

        return $element;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
