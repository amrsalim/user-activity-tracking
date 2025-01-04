<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\Loggable;
use Illuminate\View\View;

class CategoryController extends Controller
{
    use Loggable;
    public function index(): View
    {
        $categories = Category::all();
        $header = 'Categories List';  // تعيين العنوان
        $slot = view('categories.partials.index',compact('categories', 'header' ) );
        return view('categories.partials.index', compact( 'slot' , 'categories'));
    }

    public function create(): View
    {
        $header = 'Create New Category'; // تعيين العنوان ديناميكيًا
        $slot = view('categories.partials.create',compact( 'header' ) );
        return view('categories.partials.create', compact('slot'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::create($validated);
        $this->logActivity('create', 'Category', $category->id, $category->toArray());

        return redirect()->route('categories.index');
    }

    public function show(Category $category): View
    {
        $header = 'Category Details'; // تعيين العنوان ديناميكيًا
        $slot = view('categories.partials.edit',compact( 'header' , 'category' ) );

        return view('categories.partials.show', compact('category', 'solt'));
    }

    public function edit(Category $category): View
    {
        $header = 'Edit Category'; // تعيين العنوان ديناميكيًا
        $slot = view('categories.partials.edit',compact( 'header'  , 'category') );

        return view('categories.partials.edit', compact('slot' , 'category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);
        $this->logActivity('update', 'Category', $category->id, $category->toArray());

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $this->logActivity('delete', 'Category', $category->id, $category->toArray());
        $category->delete();

        return redirect()->route('categories.index');
    }
}
