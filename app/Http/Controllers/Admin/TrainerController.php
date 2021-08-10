<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Trainer;
use Illuminate\View\View;
use Intervention\Image;

class TrainerController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Application|Factory|View
	 */
	public function index()
	{
		$data['cats'] = Trainer::all()->sortByDesc('id');
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
	 * @return Application
	 */
	public function store(Request $request): Application
	{
		$data = $request->validate([
			'name' => 'required|string|max:20'
		]);

		Trainer::create($data);
		return redirect(route('admin.trainers.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int id
	 * @return Application|Factory|View
	 */
	public function show($cat_id)
	{
		$data['cat'] = Trainer::findOrFail($cat_id);
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
			'name' => 'required|string|max:20'
		]);

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