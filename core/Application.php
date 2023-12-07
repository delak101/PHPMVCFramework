<?php

namespace app\core;
use app\core\Router;
use app\core\Response;
use app\core\Database;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        
        // this is a dummy line to solve a 'access before intialization error'
        $this->controller = new Controller; // or some other default value

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        
        $this->db = new Database($config['db']);
    }
    public function getController()
    {
        return $this->controller;
    }
    public function setController($controller)
    {
        $this->controller = $controller;  
    }
    public function run()
    {
        echo $this->router->resolve();
    }
}