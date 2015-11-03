<?php
//chdir('..');
include_once './src/Epi.php';
Epi::setPath('base', './src');
Epi::init('api');

/* 라우팅 */
getRoute()->get('/', 'showEndpoints');
getRoute()->get('/version', 'showVersion');
getRoute()->get('/users', 'getUserList', EpiApi::external);

getRoute()->run();


/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */

function getUserList()
{
  return array(
    array('name' => '이연재'),
    array('name' => '허하진'),
    array('name' => '윤서영')
  );
}


function showEndpoints()
{
	$str = "이연재";
	echo "$str";
	echo '$str';
  echo '빠라바라밤 API <br>';
  echo '<ul>
          <li><a href="/api/">/</a> -> (home)</li>
          <li><a href="/api/version">/version</a> -> (print the version of the api)</li>
          <li><a href="/api/users">/users</a> -> (print each user)</li>
        </ul>';
}

function showVersion(){
	echo 3.14159;
}

?>