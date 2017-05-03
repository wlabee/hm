<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\FriendLink;

class FrlinkController extends Controller
{
    protected $fields = [
        'link_name' => '',
        'link_url' => '',
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
            $data['recordsTotal'] = FriendLink::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = FriendLink::where(function ($query) use ($search) {
                    $query->where('link_name', 'LIKE', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = FriendLink::where(function ($query) use ($search) {
                    $query->where('link_name', 'LIKE', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = FriendLink::count();
                $data['data'] = FriendLink::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.frlink.index');
    }

    public function create() 
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.frlink.create', $data);
    }

    public function store(Request $request) 
    {
        $link = new FriendLink();
       foreach (array_keys($this->fields) as $field) {
            $link->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }
        try {
            $link->save();
        } catch (Exprection $e) {

        }
        return redirect('/admin/frlink')->withSuccess('添加成功！');
    }

    public function edit($id) 
    {
        $link = FriendLink::find((int)$id);
        if(! $link) return redirect('/admin/frlink')->withErrors('找不到数据');

        $data = [];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $link->$field);
        }
        $data['id'] = (int)$id;

        return view('admin.frlink.edit', $data);
    }

    public function update(Request $request, $id) 
    {
        $link = FriendLink::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $link->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }

        $link->save();
        
        return redirect('/admin/frlink')->withSuccess('修改成功！');
    }

    public function destroy($id) 
    {
        $link = FriendLink::find((int)$id);
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
