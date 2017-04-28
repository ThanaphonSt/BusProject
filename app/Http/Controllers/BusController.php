<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Position;
use App\RoutePhothong;
use Illuminate\Http\Request;
use App\BusstopPhothong;
use App\Restaurant;
use App\Attractions;
use App\Hotel;
use App\ShoppingMall;

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

	public function recommend()
	{
		$recommend = Attractions::get();
		// dd($recommend);
		return view('recommend')->with('recommend', $recommend);
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
		$getRouteGoOn = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขากลับ')
			->get();	

		$getRouteId = BusstopPhothong::where('busstop_line', $id)->get();
		
		return view('potongroute1')
			->with('getRouteGoOns', $getRouteGoOn)
			->with('getRouteTurnOns', $getRouteTurnOn)
			->with('getRouteId', $getRouteId);
	}

	public function map2($id)
	{
		$getRouteGoOn2 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn2 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขากลับ')
			->get();		

		$getRouteId = BusstopPhothong::where('busstop_line', $id)->get();

		return view('potongroute2')
			->with('getRouteGoOns2', $getRouteGoOn2)
			->with('getRouteTurnOns2', $getRouteTurnOn2)
			->with('getRouteId', $getRouteId);
	}

	public function map3($id)
	{
		$getRouteGoOn3 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn3 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขากลับ')
			->get();		

		$getRouteId = BusstopPhothong::where('busstop_line', $id)->get();

		return view('potongroute3')
			->with('getRouteGoOns3', $getRouteGoOn3)
			->with('getRouteTurnOns3', $getRouteTurnOn3)
			->with('getRouteId', $getRouteId);
	}

	public function recommendShopping()
	{
		$recommendShop = ShoppingMall::get();
		// dd($recommendShop);
		return view('recommendshop')->with('recommendShop', $recommendShop);
	}

	public function recommendHotel()
	{
		$recommendHotel = Hotel::get();
		// dd($recommendHotel);
		return view('recommendhotel')->with('recommendHotel', $recommendHotel);
	}	

	public function recommendRestaurant()
	{
		$recommendRestaurant = Restaurant::get();
		// dd($recommendRestaurant);
		return view('recommendrestaurant')
			->with('recommendRestaurant', $recommendRestaurant);
	}


	public function currentbus($id)
	{
		$position = Position::find($id);
		// dd($position);
		return view('carpotongroute');
		// ->with('position', $position);
	}


}
