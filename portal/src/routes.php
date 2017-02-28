<?php
// Routes

use App\Game;

$app->get('/', function ($request, $response) {
	$gameObj = Game::all();

    return $this->renderer->render($response, 'index.phtml', ["gameObj" => $gameObj]);
});

$app->post('/new', function($request, $response){
	$data = $request->getParsedBody();
	$gameObj = new Game();
	$gameObj->name = $data["name"];
	$gameObj->remain_p_cnt = 3;
	$gameObj->p1_id = $data["player_name"];
	$file = $request->getUploadedFiles()["source"];

	$destfile = "upload/" . uniqid();
	$file->moveTo($destfile);
	$content = readfile($destfile);
	//var_dump($content);
	$gameObj->p1_prog = readfile($destfile);

	unlink($destfile);

	$gameObj->save();
});

//$app->get('/api/v1/games/{id}')


