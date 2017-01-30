<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BusController extends Controller {

	public function index()
	{
		return view('dashboard');
	}

	public function potongRouteDetail()
	{
		return view('potongroute');
	}	

	public function songteawRouteDetail()
	{
		return view('songteawroute');
	}	

	public function airportBusRouteDetail()
	{
		return view('airportbusroute');
	}	

	public function potongStop()
	{
		return view('potongstop');
	}

	public function songteawStop()
	{
		return view('songteawstop');
	}

	public function airportStop()
	{
		return view('airportstop');
	}

	public function map()
	{
		return view('map');
	}

	public function map1()
	{
		return view('potongroute1');
	}

	public function map2()
	{
		return view('potongroute2');
	}

	public function map3()
	{
		return view('potongroute3');
	}

	public function show($id)
	{
		
	}

}
