<?php
session_start();
requireValidSession();

$date =  (new DateTime())->getTimestamp();
$today= strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', ['today' => $today ]);

