<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Slider as Slider;
use App\Helper\Uploader as Uploader;
use Storage;

class SliderController extends Controller
{
    protected $fields = [
        'title' => '',
        'image' => '',
        'gourl' => '',
        'start_time' => '0',
        'end_time' => '0',
        'sort' => '',
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
            $data['recordsTotal'] = Slider::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Slider::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Slider::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Slider::count();
                $data['data'] = Slider::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.slider.index');
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

        return view('admin.slider.create', $data);
    }

    /**
     * 添加保存
     * @author 
     * @param 
     * @return 
     */
    public function store(Request $request) 
    {
        $slider = new Slider();
       foreach (array_keys($this->fields) as $field) {
            $slider->$field = is_null($request->get($field)) ? $this->fields[$field] : $request->get($field);
        }
        $file = $request->file('image');
        // 文件是否上传成功
        if ($file && $file->isValid()) {
            $path = $request->file('image')->store('uploads/'.date('Ym'));
            $slider->image =  '/storage/' . $path;
        }

        $slider->start_time = $slider->start_time?:date('Y-m-d H:i:s');
        $slider->end_time = $slider->end_time?:date('Y-m-d H:i:s', time() + 10*365*24*60*60);

        try {
            $slider->save();
        } catch (Exprection $e) {

        }
        return redirect('/admin/slider')->withSuccess('添加成功！');
    }

    /**
     * 修改
     * @author 
     * @param 
     * @return 
     */
    public function edit($id) 
    {
        $slider = Slider::find((int)$id);
        if(! $slider) return redirect('/admin/slider')->withErrors('找不到数据');

        $data = [];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $slider->$field);
        }

        $data['id'] = (int)$id;
        return view('admin.slider.edit', $data);
    }

    /**
     * 修改-保存
     * @author 
     * @param 
     * @return 
     */
    public function update(Request $request, $id) 
    {
        $slider = Slider::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $slider->$field = is_null($request->get($field)) ? $slider->$field : $request->get($field);
        }

        $file = $request->file('image');
        // 文件是否上传成功
        if ($file && $file->isValid()) {
            $path = $request->file('image')->store('uploads/'.date('Ym'));
            $slider->image =  '/storage/' . $path;
        }

        $slider->start_time = $slider->start_time?:date('Y-m-d H:i:s');
        $slider->end_time = $slider->end_time?:date('Y-m-d H:i:s', time() + 10*365*24*60*60);

        $slider->save();
        
        return redirect('/admin/slider')->withSuccess('修改成功！');
    }

    /**
     * description
     * @author 
     * @param 
     * @return 
     */
    public function destroy($id) 
    {
        $slider = Slider::find((int)$id);
        if ($slider) {
            $slider->delete();
        } else {
            return redirect()->back()
                ->withErrors("删除失败");
        }

        return redirect()->back()
            ->withSuccess("删除成功");
    }
}