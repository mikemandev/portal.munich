<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\nota;
use Log;
use App\registro;

class portalController extends Controller
{
	public function index()
	{
		return view('index');
	}
	public function encuestas()
	{
		return view('callcenter/encuesta');
	}
	public function encuestaServicio()
	{
		$registro = registro::all();
		return view('callcenter/servicio', compact('registro'));
	}
	/*public function cadaEncuestaServicio(Request $request)
	{
		#dd($request->get('id_registro'));
		#$registro=registro::id($request->get('id_registro'));
		$consulta = registro::where('id_registro',$request->get('id_registro'))->first();
		Log::debug($consulta);
		return view("callcenter/llenado", compact('consulta'));
	}*/
	public function cadaEncuestaServicio($id)
	{
		#Log::debug('------------------------------------------------------------------------------------------------------');
		#Log::debug($id);
		$consulta = registro::where('id_registro',$id)->first();
		#Log::debug('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>');
		#Log::debug($consulta);
		return view("callcenter.llenado", compact('consulta'));
	}
	public function guardaEncuesta()
	{
		return view("Post");
	}
	public function ventas()
	{
		return view('callcenter/ventas');
	}
	public function listaEncuestaServicio()
	{
		#$notas= Nota::all();
		//dd($notas);
		#return view('notas', compact('notas'));
	}
}