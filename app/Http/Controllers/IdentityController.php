<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\IIdentityRepostory;

class IdentityController extends Controller 
{
 private IIdentityRepository $identityRepository;

    public function _construct(IIdentityRepository $identityRepository)
{
    $this->identityRepository = $identityRepository;
}

public function signin(Request $request)
{
    
}

}