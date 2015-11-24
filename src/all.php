<?php

include __DIR__ . '/History.php';
include __DIR__ . '/HistoryItem.php';

$items = array ();


$items[] = new \Nsimaria\Socrates\HistoryItem(
    array(
        'dateIn' => '2014-11-21 22:00',
        'dateOut' => '2015-11-04 20:00',
        'textIn' => 'José Sócrates was arrested upon his arrival at the Lisbon Airport.',
        'textOut' => 'José Sócrates leaves jail.',
        'sourceIn' => 'http://www.bbc.com/news/world-europe-30160193',
        'sourceOut' => 'https://en.wikipedia.org/wiki/Jos%C3%A9_S%C3%B3crates',
    )
);

$history = new \Nsimaria\Socrates\History($items);
