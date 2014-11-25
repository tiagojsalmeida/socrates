<?php namespace Nsimaria\Socrates;

use \DateTime;

class History
{
    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getLast()
    {
        return $this->items[count($this->items) - 1];
    }

    public function getTotalTimeInJail()
    {
        $difference = null;
        $base = new DateTime();
        $baseClone = clone $base;

        $items = $this->getItems();

        foreach ($items as $item) {

            if (!empty ($difference)) {
                $base->add($difference);
            }

            $in = null;
            $out = null;

            if (!empty ($item->dateIn)) {
                $in = new DateTime($item->dateIn);
            } else {
                $in = new DateTime();
            }

            if (!empty($item->dateOut)) {
                $out = new DateTime($item->dateOut);
            } else {
                $out = new DateTime();
            }


            $difference = $out->diff($in);
        }

        if (!empty ($difference)) {
            $base->add($difference);
        }

        return $baseClone->diff($base)->format('%d days, %h hours, %i minutes and %s seconds');
    }

    public function isStillInJail()
    {
        $last = $this->getLast();

        if (empty($last->dateOut)) {
            return true;
        }

        return false;
    }
}
