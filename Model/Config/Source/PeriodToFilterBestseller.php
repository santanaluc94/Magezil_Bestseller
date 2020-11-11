<?php

namespace Magezil\Bestseller\Model\Config\Source;

class PeriodToFilterBestseller implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'year',
                'label' => __('Year')
            ],
            [
                'value' => 'month',
                'label' => __('Month')
            ],
            [
                'value' => 'day',
                'label' => __('Day')
            ],
        ];
    }
}
