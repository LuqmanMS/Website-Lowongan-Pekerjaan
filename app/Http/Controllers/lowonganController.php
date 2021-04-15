<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Level;

class lowonganController extends Controller
{
    public function tambah()
    {
    return view('folder/formlowongan');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('vacancies')->insert([
		'Job_COde' => $request->Job_COde,
		'Job_Name' => $request->Job_Name,
		'Requirement' => $request->Requirement
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/lowongan/show');
	}
	 
	public function show()
    {
		$lowongan = DB::table('vacancies')->get();
 
    	// mengirim data pegawai ke view index
    	return view('folder/tampillowongan',['lowongan' => $lowongan]);
    }

	// method untuk hapus data pegawai
    public function delete($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('vacancies')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	    return redirect('/lowongan/show');
	}

	// method untuk edit data pegawai
    public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$lowongan = DB::table('vacancies')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('folder/formeditlowongan',['lowongan' => $lowongan]);
 
}

    public function editSave(Request $request)
{
	// update data pegawai
	DB::table('vacancies')->where('id',$request->id)->update([
		'Job_COde' => $request->Job_COde,
		'Job_Name' => $request->Job_Name,
		'Requirement' => $request->Requirement
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/lowongan/show');
}

	public function tambahUser()
    {
		$data = DB::table('vacancies')->get();		
        return view('folder/pendaftar',['Job_COde' => $data]);
	}

	    // method untuk insert data ke table pegawai
	public function storeUser(Request $request)
	{
		// insert data ke table pegawai
		   DB::table('user')->insert([
			'Name' => $request->Name,
			'Gender' => $request->Gender,
			'Address' => $request->Address,
			'Job' => $request->Job
		   ]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pendaftar/show');
	}

	public function showUser()
    {
		$pendaftar = DB::table('user')->get();
 
    	$pendaftar = DB::table('user')
            ->join('vacancies', 'user.Job', '=', 'vacancies.Job_COde')
            ->select('user.*', 'vacancies.Job_COde', 'vacancies.Job_Name', 'vacancies.Requirement')
			->get();
    	return view('folder/tampiluser',['pendaftar' => $pendaftar]);
    }
	

			// method untuk hapus data pegawai
	public function deleteUser($id)
	{
			// menghapus data pegawai berdasarkan id yang dipilih
		   DB::table('user')->where('id_user',$id)->delete();
				
			// alihkan halaman ke halaman pegawai
		return redirect('/pendaftar/show');
	}

	public function editUser($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pendaftaran = DB::table('user')->where('id_user',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('folder/formedituser',['pendaftar' => $pendaftaran]);
	 
	}

	public function editSaveUser(Request $request)
	{
		// update data pegawai
		DB::table('user')->where('id_user',$request->id_user)->update([
			'Name' => $request->Name,
			'Gender' => $request->Gender,
			'Address' => $request->Address,
			'Job' => $request->Job
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pendaftar/show');
		
	}

	// public function data()
	// {
	// 	$data = DB::table('user')->join('vacancies','user.id_user','vacancies.Job_COde')->get();
	// 	return view('folder/pendaftar',compact('folder/pendaftar'),['Job_COde' => $data]);
	// }

	public function data()
	{
		// $data = DB::table('user')
    	// ->select('Name')
    	// ->join('vacancies', 'vacancies.Job_COde', '=', 'user.id_user')
    	// ->get();

		// $data = DB::table('user')
        //     ->join('vacancies', 'user.id_user', '=', 'vacancies.id')
        //     ->select('user.*', 'vacancies.Job_COde', 'vacancies.id')
		// 	->get();	
		$data = DB::table('vacancies')->get();
		
		return view('folder/pendaftar',compact('folder/pendaftar'),['Job_COde' => $data]);
			
	}
		
	
	
	



}
