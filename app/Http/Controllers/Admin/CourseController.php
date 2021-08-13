<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'price', 'small_desc', 'img')->orderBy('id', 'desc')->paginate(5);
        return view('admin.courses.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data['cats'] = Cat::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        return view('admin.courses.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'price' => 'required|integer',
            'desc' => 'required|string',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'required|image|mimes:png,jpeg,jpg'
        ]);
        $image = $data['img']->hashName();
        Image::make($data['img'])->resize(950, 520)->save(public_path('uploads/courses/' . $image));
        $data['img'] = $image;
        Course::create($data);
        return redirect(route('admin.courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int id
     * @return Application|Factory|View
     */
    public function show($course_id)
    {
        $data['course'] = Course::findOrFail($course_id);
        return view('admin.courses.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $data['course'] = Course::findOrFail($id);
        $data['cats'] = Cat::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        return view('admin.courses.edit')->with($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {

        $data = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'price' => 'required|integer',
            'desc' => 'required|string',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'nullable|image|mimes:png,jpeg,jpg'
        ]);

        $oldImage = Course::findOrFail($request->id)->img;
        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete('courses/' . $oldImage);
            $image = $data['img']->hashName();
            Image::make($data['img'])->resize(950, 520)->save(public_path('uploads/courses/' . $image));;
            $data['img'] = $image;
        } else {
            $data['img'] = $oldImage;
        }
        Course::findOrFail($request->id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $oldImage = Course::findOrFail($request->id)->img;
        Storage::disk('uploads')->delete('courses/' . $oldImage);
        Course::findOrFail($request->id)->delete();
        return back();
    }
}
