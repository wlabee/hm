<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller; 

use App\Models\Category;

class CategoryController extends Controller
{
    protected $fields = [
        'cat_name' => '',
        'pid' => '0',
        'sort' => '0',
    ];

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = array();
            $data['draw'] = $request->get('draw');
            $start = $request->get('start');
            $length = $request->get('length');
            $order = $request->get('order');
            $columns = $request->get('columns');
            $search = $request->get('search');
            $data['recordsTotal'] = Category::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Category::where(function ($query) use ($search) {
                    $query->where('cat_name', 'LIKE', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Category::where(function ($query) use ($search) {
                    $query->where('cat_name', 'LIKE', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Category::count();
                $data['data'] = Category::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.category.index');
    }

    public function create() 
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.category.create', $data);
    }

    public function store(Request $request) 
    {
        $cate = new category();
       foreach (array_keys($this->fields) as $field) {
            $cate->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }
        try {
            $cate->save();
        } catch (Exprection $e) {

        }
        return redirect('/admin/category')->withSuccess('添加成功！');
    }

    public function edit($id) 
    {
        $cate = category::find((int)$id);
        if(! $cate) return redirect('/admin/category')->withErrors('找不到数据');

        $data = [];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $cate->$field);
        }
        $data['id'] = (int)$id;

        return view('admin.category.edit', $data);
    }

    public function update(Request $request, $id) 
    {
        $cate = category::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $cate->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }

        $cate->save();
        
        return redirect('/admin/category')->withSuccess('修改成功！');
    }

    public function destroy($id) 
    {
        $cate = category::find((int)$id);
        if ($cate) {
            $cate->delete();
        } else {
            return redirect()->back()
                ->withErrors("删除失败");
        }

        return redirect()->back()
            ->withSuccess("删除成功");
    }
}