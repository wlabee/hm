<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Slider as Slider;

class SliderController extends Controller
{
    private $_model = null;

    protected $fields = [
        'title' => '',
        'image' => '',
        'gourl' => '',
        'start_time' => '',
        'end_time' => '',
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
    public function store() 
    {
        
    }

    /**
     * 修改
     * @author 
     * @param 
     * @return 
     */
    public function edit() 
    {
        
    }

    /**
     * 修改-保存
     * @author 
     * @param 
     * @return 
     */
    public function update() 
    {
        
    }

    /**
     * description
     * @author 
     * @param 
     * @return 
     */
    public function destroy() 
    {
        
    }
}