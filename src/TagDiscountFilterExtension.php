<?php namespace Anomaly\TagDiscountFilterExtension;

use Anomaly\TagDiscountFilterExtension\Command\GetColumnValue;
use Anomaly\TagDiscountFilterExtension\Command\GetFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\FilterExtension;
use Anomaly\DiscountsModule\Filter\Extension\Form\FilterExtensionFormBuilder;

/**
 * Class TagDiscountFilterExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\TagDiscountFilterExtension
 */
class TagDiscountFilterExtension extends FilterExtension
{

    /**
     * This extension provides the tag
     * filter for the discounts module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.discounts::filter.tag';

    /**
     * Return the form builder.
     *
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
     * @return FilterExtensionFormBuilder
     */
    public function form(DiscountInterface $discount, FilterInterface $filter = null)
    {
        return $this->dispatch(new GetFormBuilder($this, $discount, $filter));
    }

    /**
     * Return the column value for the table.
     *
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
     * @return string
     */
    public function column(DiscountInterface $discount, FilterInterface $filter)
    {
        return $this->dispatch(new GetColumnValue($this, $discount, $filter));
    }

}
