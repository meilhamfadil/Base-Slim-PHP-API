<?php

namespace Features\Auth;

use Core\Base\App;
use Core\Base\Controller;
use Slim\Http\Request;
use Slim\Http\Response;
use Valitron\Validator;

class AuthController extends Controller
{

    /** @var AuthModel $model */
    protected $model;

    public function onLoad()
    {
        $this->model = App::load(AuthModel::class);
    }

    public function login(Request $request, Response $response, array $args)
    {
        $body = App::getParsedBody();

        $validator = new Validator((array) $body);
        $validator->rule("required", "username");
        $validator->rule("required", "password");

        if (!$validator->validate())
            return App::sendError("Form incomplete", 400, $validator->errors());

        $candidate = $this->model->getCandidate($body->username);

        if (empty($candidate))
            return App::sendError("Username not found", 404);

        if ($candidate->password != $body->password)
            return App::sendError("Password not match", 404);

        return App::send(array(
            "token" => date("Ymdhis") . time()
        ));
    }
}
