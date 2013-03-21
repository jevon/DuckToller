<?php

require_once('../base/ducktoller.phps');

$ducktoller = new DuckToller("../ducktoller.ini");
$duck = null;

if (isset($_GET['feed'])) {
	require_once('./twitterfeed.phps');
	$duck = new TwitterFeed($ducktoller, $_GET['feed']);
} elseif (isset($_GET['avatar'])) {
	require_once('./twitteravatar.phps');
	$duck = new TwitterAvatar($ducktoller, $_GET['avatar']);
}

if ($duck)
	$ducktoller->retrieve($duck);
