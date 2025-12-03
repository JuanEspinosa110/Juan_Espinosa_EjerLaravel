<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $listado['usuarios'] = admin::paginate(6);

        return view('Admin.index', $listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosUsuario = request()->except('_token');
        $datosUsuario['password'] = Hash::make($datosUsuario['password']);
        admin::insert($datosUsuario);
        return redirect('Admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
        return view('Admin.update', compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datos = request()->except(['_token', '_method']);
        admin::where('id', '=', $id)->update($datos);

        $admin = admin::findOrFail($id);
        return view('Admin.update', compact('admin'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        admin::destroy($id);
        return redirect('Admin');
    }
}
