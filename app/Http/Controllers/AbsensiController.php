<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Member;
use App\Models\Company;

use Illuminate\Http\Request;
use DB;
use Carbon;


class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::where('kehadiran', 'hadir')->get();
        $company = Company::all();
        return view('absensi.index', compact('member', 'company'));
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
      $this->validate($request, [
        'member_id'
      ]);
      DB::beginTransaction();

      try {
          $data = Absensi::create([
            'member_id' => $member->id,
          ]);

        DB::commit();
        return redirect('/asbensi');

      } catch (Exception $e) {
          DB::rollBack();
          dd($e);
          return redirect(url()->previous());
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::where('kehadiran', 'hadir')->first();  
        $absensi = Absensi::all();
        $company = Company::all();
        return view('absensi.show', compact('member', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request,[
            'absensi'
        ]);

        $member = Member::where('kehadiran', 'hadir');
        $absensi = Absensi::all();
        DB::beginTransaction();

        try {
            if($request->has('absensi')) {
                $data = [
                    'absensi' => $request->absensi,
                ];
            } elseif ($member->absensi == 'Masuk') {
                $absensi->update([
                    'masuk' => now(),
                ]); 
            }

            $member->update($data);
            DB::commit();

            return redirect('/home');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect(url()->previous());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
