<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class Admin extends Controller
{
    public function admin()
    {
        $prod = product::all();
        $cat = category::all();
        return view('admin', ['prod' => $prod, 'cat' => $cat]);
    }
    // переотправка на форму создания товара
    public function form()
    {
        $cat = category::all();
        return view('makeprod', ['cat' => $cat]);
    }
    // отправка данных в базу товар
    public function maketovar(Request $request)
    {
        $file = $request->file('img');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('img'), $filename);


        product::create([ //внести в поля базы
            'name' => $request->input('name'),
            'img' => $filename,
            'price' => $request->input('price'),
            'year' => $request->input('year'),
            'country' => $request->input('country'),
            'category' => $request->input('category'),
            'model' => $request->input('model'),
            'colvo' => $request->input('colvo'),
        ]);

        return redirect(route('admin')); //возвращает на страницу админа
    }

    // отправка новой категории в базу
    public function makecategory(Request $request)
    {
        category::create([ //внести в поля базы
            'name' => $request->input('name')
        ]);
        return redirect(route('admin')); //возвращает на страницу админа
    }
    public function proddel($id) //удалить товар
    {

        product::where('id', $id)->delete();
        return redirect(route('admin')); //возвращает на страницу админа
    }

    public function categoriesdel($id) //удалить категорию
    {
        category::where('id', $id)->delete();
        return redirect(route('admin')); //возвращает на страницу админа
    }

    public function prod()
    {
        $cat = category::all();
        return view('createprod', ['cat' => $cat]);
    }
}