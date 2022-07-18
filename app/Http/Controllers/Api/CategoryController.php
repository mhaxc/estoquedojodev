<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Request\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    private $category;
    
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $cate = $this->category->all();
        return response()->json($cate);
    }

    public function show($id)
    {
        $cate = $this->category->find($id);
        return response()->json($cate);
    }

    public function store(CategoryRequest $request)
    {
  

        $cate = $this->category->create($request->all());
        return response()->json($cate);
    }

    public function update(CategoryRequest $request, $id)
    {

        $cate = $this->category->find($id);
        $cate->update($request->all());
        return response()->json($cate);
    }

    public function delete($category)
    {
        $cate = $this->category->find($id);
        $cate->delete();

        return response()->json('',201);
    }

}