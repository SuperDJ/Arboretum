<?php

namespace App\Http\Controllers;

use App\Sex;
use Illuminate\Http\Request;

class SexController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return response()->json( Sex::all() );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request )
	{
		$this->validation( $request );

		$created = Sex::create( $request->all() );

		if( $created )
		{
			return response()->json( [ 'success' => true, 'message' => 'Sex created', $created ], 201 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Sex not created'], 400 );
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Sex  $sex
	 * @return \Illuminate\Http\Response
	 */
	public function show( Sex $sex )
	{
		return response()->json( $sex, 200 );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Sex  $sex
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Sex $sex )
	{
		return response()->json( $sex, 200 );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Sex  $sex
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Sex $sex )
	{
		$this->validation( $request );

		$updated = $sex->update( $request->all() );

		if( $updated )
		{
			return response()->json( [ 'success' => true, 'message' => 'Sex updated', $updated ] , 200 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Sex not updated' ], 400 );
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Sex  $sex
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Sex $sex )
	{
		$destroyed = $sex->destroy();

		if( $destroyed )
		{
			return response()->json( [ 'success' => true, 'message' => 'Sex deleted', $sex ], 200 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Sex not deleted' ], 400 );
		}
	}

	public function search( $search )
	{
		$results = Sex::where('name', 'like', '%'.$search.'%')
			->orWhere('id', $search)
			->get();

		return response()->json( $results );
	}

	private function validation( Request $request )
	{
		$request->validate([
			'name' => 'required'
		]);
	}
}
