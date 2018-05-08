<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return response()->json( Type::all() );
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

		$created = Type::create( $request->all() );

		if( $created )
		{
			return response()->json( [ 'success' => true, 'message' => 'Type created', $created ], 201 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Type not created'], 400 );
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Type  $type
	 * @return \Illuminate\Http\Response
	 */
	public function show( Type $type )
	{
		return response()->json( $type, 200 );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Type  $type
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Type $type )
	{
		return response()->json( $type, 200 );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Type  $type
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Type $type )
	{
		$this->validation( $request );

		$updated = $type->update( $request->all() );

		if( $updated )
		{
			return response()->json( [ 'success' => true, 'message' => 'Type updated', $updated ] , 200 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Type not updated' ], 400 );
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Type  $type
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Type $type )
	{
		$destroyed = $type->destroy();

		if( $destroyed )
		{
			return response()->json( [ 'success' => true, 'message' => 'Type deleted', $type ], 200 );
		} else {
			return response()->json( [ 'success' => false, 'message' => 'Type not deleted' ], 400 );
		}
	}

	public function search( $search )
	{
		$results = Type::where('name', 'like', '%'.$search.'%')
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
