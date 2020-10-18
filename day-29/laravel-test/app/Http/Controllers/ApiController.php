<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Classes\ThisProject\Project;

class ApiController extends Controller
{
    public function index()
    {
        // the logic of your page will be here
        $query = "
            SELECT *
            FROM `movies`
            ORDER BY `rating` DESC
            LIMIT 10
        ";
        $movies = \DB::select($query);
 
        // as a response we will return an array of data
        return $movies;
    }

    public function projectInfo ()
    {
        
        $project = new Project();
        
        return [
            'url' => Project::getBaseUrl(),
            'project' => $project
        ];
    }

}