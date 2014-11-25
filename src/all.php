<?php

include __DIR__ . '/History.php';
include __DIR__ . '/HistoryItem.php';

$items = array ();


$items[] = new \Nsimaria\Socrates\HistoryItem(
    array(
        'dateIn' => '2014-11-21 22:00',
        'dateOut' => null,
        'textIn' => 'José Sócrates was arrested upon his arrival at the Lisbon Airport.',
        'textOut' => null,
        'sourceIn' => 'http://www.bbc.com/news/world-europe-30160193',
        'sourceOut' => null,
    )
);

$history = new \Nsimaria\Socrates\History($items);
