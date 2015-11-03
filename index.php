<?php
//chdir('..');
include_once './src/Epi.php';
Epi::setPath('base', './src');
Epi::init('.');

/* 라우팅 */
getRoute()->get('/', 'showEndpoints');
getRoute()->get('/version', 'showVersion');


getRoute()->run();


/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */

function showEndpoints()
{
	$str = "이연재";
	echo "$str";
	echo '$str';
  echo '빠라바라밤 API <br>';
  echo '<ul>
          <li><a href="/">/</a> -> (home)</li>
          <li><a href="/version">/version</a> -> (print the version of the api)</li>
          <li><a href="/users">/users</a> -> (print each user)</li>
        </ul>';
}

function showVersion(){
	echo 3.141592;
}

?>