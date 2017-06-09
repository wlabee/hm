<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Topic as Topic;
use App\Helper\Uploader as Uploader;
use Storage;

class TopicController extends Controller
{
    protected $fields = [
        'title' => '',
        'description' => '',
    ];

    /**
     * 列表
     * @author 
     * @param 
     * @return 
     */
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
            $data['recordsTotal'] = Topic::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Topic::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Topic::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Topic::count();
                $data['data'] = Topic::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.topic.index');
    }

    /**
     * 添加
     * @author 
     * @param 
     * @return 
     */
    public function create() 
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.topic.create', $data);
    }

    /**
     * 添加保存
     * @author 
     * @param 
     * @return 
     */
    public function store(Request $request) 
    {
        $Topic = new Topic();
       foreach (array_keys($this->fields) as $field) {
            $Topic->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }

        try {
            $Topic->save();
        } catch (Exprection $e) {

        }
        return redirect('/admin/topic')->withSuccess('添加成功！');
    }

    /**
     * 修改
     * @author 
     * @param 
     * @return 
     */
    public function edit($id) 
    {
        $Topic = Topic::find((int)$id);
        if(! $Topic) return redirect('/admin/topic')->withErrors('找不到数据');

        $data = [];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $Topic->$field);
        }

        $data['id'] = (int)$id;
        return view('admin.topic.edit', $data);
    }

    /**
     * 修改-保存
     * @author 
     * @param 
     * @return 
     */
    public function update(Request $request, $id) 
    {
        $Topic = Topic::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $Topic->$field = is_null($request->get($field)) ? $Topic->$field : $request->get($field);
        }

        $Topic->save();
        
        return redirect('/admin/topic')->withSuccess('修改成功！');
    }

    /**
     * description
     * @author 
     * @param 
     * @return 
     */
    public function destroy($id) 
    {
        $Topic = Topic::find((int)$id);
        if ($Topic) {
            $Topic->delete();
        } else {
            return redirect()->back()
                ->withErrors("删除失败");
        }

        return redirect()->back()
            ->withSuccess("删除成功");
    }
}