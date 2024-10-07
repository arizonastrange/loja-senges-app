<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $categorias = Category::paginate(25);
        return view(
            'admin.categorias.index',
            compact('categorias')
        );
    }
    public function create()
    {
        //
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
    public function show(Category $category)
    {
        //
        return view(
            'admin.categorias.show',
            compact('category')
        );
    }
    public function edit(Category $category)
    {
        //
        return view(
            'admin.categorias.edit',
            compact('category')
        );
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
        $category->update($request->all());
        return redirect()->away('/admin/categorias')
            ->with(
                'success',
                'Categoria atualizada com sucesso!'
            );
    }
    public function destroy(Category $category)
    {
        //
        if ($category->produtos()->count() > 0) {
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