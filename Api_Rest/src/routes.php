<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/*$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

$app->get('/users/people-by-id/{id}', function(Request $request, Response $response, array $args){

	$id = $request->getAttribute('id');
	$db_PDO = $this->db;
	$result = $db_PDO->query ("select * from tbl_people where id = $id");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));

});

$app->post('/users/add-people', function(Request $request, Response $response, array $args){

	$data = $request->getParsedBody();
	$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
	$lastname = filter_var($data['lastname'], FILTER_SANITIZE_STRING);
	$ssn = filter_var($data['ssn'], FILTER_SANITIZE_STRING);
	$birthdate = filter_var($data['birthdate'], FILTER_SANITIZE_STRING);

	$db_PDO = $this->db;
	$result = $db_PDO->query("insert into tbl_people(name, lastname, ssn, birthdate)
VALUES('$name','$lastname', '$ssn', '$birthdate')");

		$id = $db_PDO->lastInsertId();
		$result = $db_PDO->query ("select * from tbl_people where id = $id");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));


});


$app->get('/users/all-people', function(Request $request, Response $response, array $args){

	$db_PDO = $this->db;
	$result = $db_PDO->query ("select * from tbl_people");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));

});



$app->get('/users/people-by-lastname/{lastname}', function(Request $request, Response $response, array $args){

	$lastname = $request->getAttribute('lastname');
	$db_PDO = $this->db;
	$result = $db_PDO->query ("select * from tbl_people where lastname like '%$lastname%'");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));

});


	$app->delete('/users/delete-by-ssn/{ssn}', function(Request $request, Response $response, array $args){

		$ssn = $request->getAttribute('ssn');
		$db_PDO = $this->db;
		$result = $db_PDO->query (" delete from tbl_people where ssn = $ssn");

		$message = array(
			"status" => true,
			"message" => "the user has been deleted"
			);

		return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($message));
	});

		$app->get('/users/order-people-by-lastname ', function(Request $request, Response $response, array $args){

	$db_PDO = $this->db;
	$result = $db_PDO->query ("select * from tbl_people order by lastname asc ");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));

});

	$app->get('/users/people-by-ssn/{ssn}', function(Request $request, Response $response, array $args){

	$ssn = $request->getAttribute('ssn');
	$db_PDO = $this->db;
	$result = $db_PDO->query (" select id, name, lastname, ssn, birthdate, TIMESTAMPDIFF(YEAR,birthdate,CURDATE()) as age from tbl_people WHERE ssn = $ssn");

	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"],
			"age" => $row["age"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));

});



$app->put('/users/update-lastname-by-id/{id}', function(Request $request, Response $response, array $args){

	$id = $request->getAttribute('id');

	$data = $request->getParsedBody();
	$lastname = filter_var($data['lastname'], FILTER_SANITIZE_STRING);

	$db_PDO = $this->db;
	$result = $db_PDO->query("update tbl_people set lastname = '$lastname' where id = $id");
		$result = $db_PDO->query ("select * from tbl_people where id = $id");

		$users = array();
	foreach ($result as $row){
		$users[] = array(
			"id" => $row["id"],
			"name" => $row["name"],
			"lastname" => $row["lastname"],
			"ssn" => $row["ssn"],
			"birthdate" => $row["birthdate"]
			);
	}
	return $response->withStatus(200)->withHeader('Content-Type', 'application/json')->write(json_encode($users));


});