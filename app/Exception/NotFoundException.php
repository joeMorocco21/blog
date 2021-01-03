<?php
namespace App\Exception;
//exception class fournis avec php
use Exception;
use Throwable;
//persanolisez l'erreur 404
class NotFoundException extends Exception
{
    public function __construct($message = "", $code=0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function Exception404()
    {
        //le bon statut reseau 404
        http_response_code(404);
        require VIEWS . 'errors/404.php';
    }
}