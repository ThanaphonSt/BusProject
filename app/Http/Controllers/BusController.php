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
use App\BusstopAirport;
use App\RoadAirport;
use App\RoadPhothong;

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
		$airportbusroute = BusstopAirport::get();
		$roadAirport = RoadAirport::get();
		return view('airportbusroute')
				->with('airportbusroute', $airportbusroute)
				->with('roadAirport', $roadAirport);

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

		$getRoadGo = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขาไป')
			->get();

		$getRoadBack = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขากลับ')
			->get();		

		return view('potongroute1')
			->with('getRouteGoOns', $getRouteGoOn)
			->with('getRouteTurnOns', $getRouteTurnOn)
			->with('getRouteId', $getRouteId)
			->with('getRoadGo', $getRoadGo)
			->with('getRoadBack', $getRoadBack);
	}

	public function map2($id)
	{
		$getRouteGoOn2 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn2 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขากลับ')
			->get();		

		$getRouteId2 = BusstopPhothong::where('busstop_line', $id)->get();

		$getRoadGo2 = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขาไป')
			->get();

		$getRoadBack2 = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขากลับ')
			->get();		

		return view('potongroute2')
			->with('getRouteGoOn2', $getRouteGoOn2)
			->with('getRouteTurnOn2', $getRouteTurnOn2)
			->with('getRouteId2', $getRouteId2)
			->with('getRoadGo2', $getRoadGo2)
			->with('getRoadBack2', $getRoadBack2);
	}

	public function map3($id)
	{
		$getRouteGoOn3 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขาไป')
			->get();

		$getRouteTurnOn3 = RoutePhothong::where('route_line', $id)
			->where('route_trip','=','ขากลับ')
			->get();		

		$getRouteId3 = BusstopPhothong::where('busstop_line', $id)->get();

		$getRoadGo3 = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขาไป')
			->get();

		$getRoadBack3 = RoadPhothong::where('road_line', $id)
			->where('road_trip','=','ขากลับ')
			->get();		

		return view('potongroute3')
			->with('getRouteGoOn3', $getRouteGoOn3)
			->with('getRouteTurnOn3', $getRouteTurnOn3)
			->with('getRouteId3', $getRouteId3)
			->with('getRoadGo3', $getRoadGo3)
			->with('getRoadBack3', $getRoadBack3);
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
