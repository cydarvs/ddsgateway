<?php

namespace App\Http\Controllers;

//use App\User;
use App\Models\User;  // <-- your model is located insired Models Folder
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser;  // <-- use to standardized our code for api response
use Illuminate\Http\Request;  // <-- handling http request in lumen
use DB; // <-- if your not using lumen eloquent you can use DB component in lumen

Class UserController extends Controller {
    // use to add your Traits ApiResponser
    use ApiResponser;

    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function getUsers(){

    
    }
    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    public function add(Request $request ){
        
    }

    /**
     * Obtains and show one user
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

    }

       /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        
    }

}



