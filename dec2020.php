<?php

header( 'Content-Type: application/json' );

$resourceId = array_key_exists('resource_id', $_GET ) ? $_GET['resource_id'] : '';
$method = $_SERVER['REQUEST_METHOD'];
$mysqli = new mysqli('127.0.0.1', 'u673876679_api', 'u673876679_api', 'Apiapi11');

switch ( strtoupper( $method ) ) {
	case 'GET':
		$resultado = $mysqli->query("SELECT * FROM Sensores_Dec2020 LIMIT 1; ");
		while ($actor = $resultado->fetch_assoc()) {
			echo json_encode(
				[
					'temp' => $actor['Temperatura'],
					'hum' => $actor['Humedad'],
					'mov' => $actor['Movimiento'],
				]
			);
		}
	break;
	case 'POST':
		$json = file_get_contents( 'php://input' );
		$books[] = json_decode( $json );
		$resultado = $mysqli->query("INSERT INTO Sensores_Dec2020 (".$books[temp].",".$books[hum].",".$books[mov]);
	break;
}