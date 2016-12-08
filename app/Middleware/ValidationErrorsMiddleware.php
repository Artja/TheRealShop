<?php

namespace Cart\Middleware;

use Slim\Views\Twig;

class ValidationErrorsMiddleware
{
	protected $view;

	public function __construct(Twig $view)
	{
		$this->view=$view;
	}


	public function __invoke($request, $responce, $next)
	{
		if (isset($_SESSION['errors'])) {

			$this->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
			unset($_SESSION['errors']);
		}


		$responce = $next($request, $responce);
		return $responce;
	}


}