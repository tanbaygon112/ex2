<?php
namespace App\Http\Controllers;

use App\Category as AppCategory;
use Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
 // CategoryController.php
 public function index()
    {
        $categories = AppCategory::all();
        return $categories;
    }

    public function show($id)
    {
        $category = AppCategory::find($id);
        return $category;
    }


    public function store(Request $request)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request)
    {
    }
    public function delete($id)
    {
    }
}
