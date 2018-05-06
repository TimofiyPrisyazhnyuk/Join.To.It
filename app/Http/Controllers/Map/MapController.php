<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Map;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;


class MapController extends Controller
{

    /**
     * @var array
     */
    public $rules = [
        'address' => 'required|max:100|string',
        'infowindow_content' => 'required|max:100|string',
    ];

    /**
     * Show  view Google Map
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMap()
    {
        $config = array();
        $config['center'] = 'Air Ukraine, Kyiv';
        $config['zoom'] = '10';
        $config['map_height'] = '600px';
        $config['map_width'] = '800px';

        $myMap = new GMaps($config);
        $this->getMarker($myMap);

        $myMap->initialize($config);
        $map = $myMap->create_map();

        return view('map.map', ['map' => $map]);
    }

    /**
     * Select markers from table
     * @param $myMap
     */
    public function getMarker($myMap)
    {
        $marker = array();
        $hetMarkers = Map::all();

        foreach ($hetMarkers as $item) {
            $marker['position'] = $item->address;
            $marker['infowindow_content'] = $item->infowindow_content;

            $myMap->add_marker($marker);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMarkers(Request $request)
    {
        $data = $request->all();
        if (isset($data)) {
            $this->validate($request, $this->rules);
            Map::create([
                'address' => $data['address'],
                'infowindow_content' => $data['infowindow_content'],
                'latitude' => '',
                'longitude' => ''
            ]);
            return redirect()->back()->with('messageSuccess', 'marker add!');
        }
        abort(404);
    }

}
