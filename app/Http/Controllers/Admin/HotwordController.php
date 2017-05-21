<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hotword;

class HotwordController extends Controller
{
    protected $fields = [
        'name' => '',
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
            $data['recordsTotal'] = Hotword::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Hotword::where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Hotword::where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Hotword::count();
                $data['data'] = Hotword::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.hotword.index');
    }

    public function create() 
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.hotword.create', $data);
    }

    public function store(Request $request) 
    {
        $link = new Hotword();
       foreach (array_keys($this->fields) as $field) {
            $link->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }
        try {
            $link->save();
        } catch (Exprection $e) {

        }
        return redirect('/admin/hotword')->withSuccess('添加成功！');
    }

    public function edit($id) 
    {
        $link = Hotword::find((int)$id);
        if(! $link) return redirect('/admin/hotword')->withErrors('找不到数据');

        $data = [];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $link->$field);
        }
        $data['id'] = (int)$id;

        return view('admin.hotword.edit', $data);
    }

    public function update(Request $request, $id) 
    {
        $link = Hotword::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $link->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }

        $link->save();
        
        return redirect('/admin/hotword')->withSuccess('修改成功！');
    }

    public function destroy($id) 
    {
        $link = Hotword::find((int)$id);
        if ($link) {
            $link->delete();
        } else {
            return redirect()->back()
                ->withErrors("删除失败");
        }

        return redirect()->back()
            ->withSuccess("删除成功");
    }
}
