<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah_aktif;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;


class MatakuliahAktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah_aktif = Matakuliah_aktif::get();
        $response = [
            'message' => 'List data matakuliah_aktif',
            'data' => $matakuliah_aktif
        ];
        return response()->json($response, Response::HTTP_OK);
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_dosen' => ['required'],
            'id_matkul' => ['required'],
            'kelas' => ['required'],
            'tahun_ajar' => ['required'],		
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $matakuliah_aktif = Matakuliah_aktif::create($request->all());
            $response = [
                'message' => 'Matakuliah_aktif created',
                'data' => $matakuliah_aktif
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah_aktif = Matakuliah_aktif::findOrFail($id);
        $response = [
            'message' => 'Detail data matakuliah_aktif',
            'data' => $matakuliah_aktif
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matakuliah_aktif = Matakuliah_aktif::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'id_dosen' => ['required'],
            'id_matkul' => ['required'],
            'kelas' => ['required'],
            'tahun_ajar' => ['required'],	
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $matakuliah_aktif->update($request->all());
            $response = [
                'message' => 'Matakuliah_aktif updated',
                'data' => $matakuliah_aktif
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matakuliah_aktif = matakuliah_aktif::findOrFail($id);
        try {
            $matakuliah_aktif->delete();
            $response = [
                'message' => 'matakuliah_aktif deleted',
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }
}
