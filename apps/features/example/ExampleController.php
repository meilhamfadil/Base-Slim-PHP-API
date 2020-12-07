<?php

namespace Features\Example;

use Core\Base\App;
use Core\Base\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController extends Controller
{
    /** @var ExampleModel $model */
    protected $model;

    public function onLoad()
    {
        $this->model = App::load(ExampleModel::class);
    }

    public function example(Request $request, Response $response, array $args)
    {
        $data = $this->model->getData();

        return App::send($data);
    }
}
