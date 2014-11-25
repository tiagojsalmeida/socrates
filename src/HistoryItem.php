<?php namespace Nsimaria\Socrates;


class HistoryItem
{
    public $dateIn;
    public $dateOut;
    public $textIn;
    public $textOut;
    public $sourceIn;
    public $sourceOut;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }

        return;
    }
}
