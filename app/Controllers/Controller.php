<?php
namespace App\Controllers;

use App\Models\Menu;
use Database\DBConnection;

 class Controller
{
    protected $db;
    public function __construct(DBConnection $db)
    {
        if(session_status()=== PHP_SESSION_NONE)
        {
        session_start();
        }
        $this->db = $db;
    }
    protected function view(string $path, $params = null)
    {   
        //le content temporairement mise en tampon 
        ob_start();
        //remplacer le . par un separateur de dossier dans le path= blog.show => blog/show
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        //ajout de .php => blog/show.php
        require VIEWS . $path . '.php';
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }
    protected function getDB()
    {
        return $this->db;
    }
    protected function isAdmin()
    {
        if(isset($_SESSION['auth']) && $_SESSION['auth'] === 1 )
        {
            return true;
        }else {
           return header('location: /mvc/login');
        }
    }
}