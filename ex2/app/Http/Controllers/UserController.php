<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
// UserController.php
public function index()
    {
        $categories = User::all();
        return $categories;
    }

    public function show($id)
    {
        $category = User::find($id);
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
