<?php

namespace App\Http\Controllers;

use Alert;
use App\Content;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use Illuminate\Http\Request;

class ContentController extends Controller {

	private $baseDir = 'contents/';
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('create');
	}

	/**
	 * Store a newly created content in storage.
	 *
	 * @param  \App\Http\Request\ContentRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ContentRequest $request) {
		if (\Request::hasFile('file')) {
			$fileName = $this->uploadFile();
			$request->merge(['path' => $fileName]);
		}

		Content::create($request->all());
		Alert::success('New Content Added Successfully', 'Content Added');

		return redirect('/home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		Content::find($id)->delete();
		Alert::success('Content deleted successfully', 'Deleted!');

		return redirect()->back();
	}

	/**
	 * upload files
	 * @return response
	 */
	private function uploadFile() {
		if (\Request::hasFile('file')) {
			$fileOriginalName = \Request::file('file')->getClientOriginalName(); // getting original filename
			$extension = \Request::file('file')->getClientOriginalExtension(); // getting image extension
			$fileName = time() . '-' . $fileOriginalName . $extension; // renameing image
			\Request::file('file')->move($this->baseDir, $fileName); // uploading file to given path

			return $fileName;
		}
	}
}