<?php

namespace Pim\Bundle\ExtendedAttributeTypeBundle\DataGrid\Extension\Formatter\Property\ProductValue;

use Akeneo\Component\Localization\Presenter\PresenterInterface;
use Pim\Bundle\DataGridBundle\Extension\Formatter\Property\ProductValue\TwigProperty;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Formatter for Text Collection attribute type.
 * Works with a twig template (Resources/views/Property/text_collection.html.twig).
 *
 * @author    JM Leroux <jean-marie.leroux@akeneo.com>
 * @copyright 2016 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class TextCollectionProperty extends TwigProperty
{
    /**
     * {@inheritdoc}
     */
    protected function convertValue($value)
    {
        $result = $this->getBackendData($value);

        return $this->getTemplate()->render(
            [
                'values'    => $result,
                'attribute' => $value['attribute'],
            ]
        );
    }
}
