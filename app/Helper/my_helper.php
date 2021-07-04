<?php

use App\Models\User;

function ALL_USERS()
{
	$onlineUsers = User::activeUser()->get();
	return $onlineUsers;
}

function ONLINE_USERS()
{
	$onlineUsers = User::online()->get();
	return $onlineUsers;
}

function OFFLINE_USERS()
{
	$offlineUsers = User::offline()->get();
	return $offlineUsers;
}