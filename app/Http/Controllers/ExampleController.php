<?php

namespace App\Http\Controllers;
use App\Repositories\ExampleRepository;
use App\Repositories\Interfaces\IExampleRepository;
class ExampleController extends Controller
{
    
    private IExampleRepository $exampleRepository;
    public function __construct(IExampleRepository $exampleRepository){
        $this->exampleRepository = $exampleRepository; 
    }
    public function index()
    {
        return $this->exampleRepository->getAll();
    }
    public function show($id){
        $result = ['platano','fresa'];
        return $result[$id];
    }
    public function store(Request  $request){
        return response ($request->all(),201);
    }
    public function update($id, Request $request){
        return response(null,204);
    }
    public function destroy($id){
        return response(null,204);
    }
    
    //
}
