<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Products;

class CategoryController extends Controller
{
    public function index()
    {
        //
        //$categorias = Category::all();
        //$categorias = Category::where('nome','Eletronicos')->get();
        //$categorias = Category::where('nome','Eletronicos')->paginate(25);
        $categorias = Category::paginate(25);
        return view(
            'admin.categorias.index',
            compact('categorias')
        );
    }

    public function create()
    {
      
        return view('admin.categorias.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        //
        Category::create($request->all());
        return redirect()->away('/admin/categorias')
            ->with(
                'success',
                'Categoria salva com sucesso!'
            );
    }

    public function show($id)
    {
        //
        $category = Category::find($id);
        return view(
            'admin.categorias.show',
            compact('category')
        );
    }
    public function edit(Category $category)
    {
        // $category = Category::find($id);
     
        dd($category);
        return view(
            'admin.categorias.edit',
            compact('category')
        );
    }
    public function update(UpdateCategoryRequest $request,$id)
    {
        //
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->away('/admin/categorias')
            ->with(
                'success',
                'Categoria atualizada com sucesso!'
            );
    }
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category || $category->produtos()->count() > 0) {
            return redirect()->away('/admin/categorias')
                ->with(
                    'error',
                    'Categoria possui dependentes!'
                );
        }
        $category->delete();
        return redirect()->away('/admin/categorias')
            ->with(
                'success',
                'Categoria removida com suceso!'
            );
    }
}