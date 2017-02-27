<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Position;
use App\RoutePhothong;
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

	public function map1($id)
	{
		$getRouteGoOn = RoutePhothong::where('route_line','=','1')
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn = RoutePhothong::where('route_line','=','1')
			->where('route_trip','=','ขากลับ')
			->get();

		return view('potongroute1')
			->with('getRouteGoOns', $getRouteGoOn)
			->with('getRouteTurnOns', $getRouteTurnOn);
	}

	public function map2()
	{
		return view('potongroute2');
	}

	public function map3()
	{
		return view('potongroute3');
	}

	public function potongShopping()
	{
		return view('potongstopshop');
	}

	public function potongHotel()
	{
		return view('potongstophotel');
	}	

	public function potongRestaurant()
	{
		return view('potongstoprestaurant');
	}


	public function currentbus($id)
	{
		$position = Position::find($id);
		// dd($position);
		return view('carpotongroute')->with('position', $position);
	}


}
