<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Trainer;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
Use Image;

class TrainerController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Application|Factory|View
	 */
	public function index()
	{
		$data['trainers'] = Trainer::all()->sortByDesc('id');
		return view('admin.trainers.index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Application|Factory|View
	 */
	public function create()
	{
		return view('admin.trainers.create');
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
			'spec' => 'required|string|max:50',
			'phone' => 'nullable|string|max:20',
			'img' => 'required|image|mimes:png,jpeg,jpg'
		]);
		$image = $data['img']->hashName();
		Image::make($data['img'])->resize(70, 70)->save(base_path() . '/public/uploads/trainers/' . $image);;
		$data['img'] = $image;
		Trainer::create($data);
		return redirect(route('admin.trainers.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int id
	 * @return Application|Factory|View
	 */
	public function show($trainer_id)
	{
		$data['trainer'] = Trainer::findOrFail($trainer_id);
		return view('admin.trainers.show')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return Application|Factory|View
	 */
	public function edit(int $id)
	{
		$data['cat'] = Trainer::findOrFail($id);
		return view('admin.trainers.edit')->with($data);
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
            'spec' => 'required|string|max:50',
            'phone' => 'nullable|string|max:20',
            'img' => 'nullable|image|mimes:png,jpeg,jpg'
		]);


        $image = $data['img']->hashName();
        Image::make($data['img'])->resize(60, 60)->save(base_path() . '/public/uploads/trainers/' . $image);;
        $data['img'] = $image;

		Trainer::findOrFail($request->id)->update($data);
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
		Trainer::findOrFail($request->id)->delete();
		return back();
	}
}
