<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prokum;
use App\Profile;
use App\ProkumDaerah;

class PageController extends Controller
{
    public function welcome(Request $request)
    {
        // menangkap data pencarian
		$search = $request->search;
		$search2 = $request->search2;
		$search3 = $request->search3;
		$search4 = $request->search4;
 
        // mengambil data dari table prokumda sesuai pencarian data
        if($search || $search2 || $search3 || $search4){
            $prokumda = ProkumDaerah::where([
                ['bentuk','like',"%".$search."%"],
                ['no_per','like',"%".$search2."%"],
                ['tahun','like',"%".$search3."%"],
                ['judul','like',"%".$search4."%"],
            ])
            ->paginate(10);
            return redirect()->route('produk-hukum-daerah.prokumda', ['prokumda' => $prokumda]);
        }else{
            $prokum = Prokum::latest()->paginate(8);
            return view('pages.welcome', ['prokum'=>$prokum]);
        }
    }

    public function profile()
    {
        $profile = Profile::findOrFail(1);
        return view('pages.profile', ['profile' => $profile]);
    }

    public function berita()
    {
        return view('pages.berita');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function prokum(Request $request)
    {

        // $prokum = Prokum::when($request->q, 
        // function ($query) use ($request) {
        //     $query->where('judul', 'LIKE', "%{$request->q}%")
        //           ->orWhere('tahun', 'LIKE', "%{$request->q}%");
        //     })->get();
        // return view('pages.produk-hukum', compact('prokum'));

        $prokum = Prokum::latest()->paginate(10);

        $filterKeyword = $request->get('q');

        if($filterKeyword){
        $prokum = Prokum::where('judul', 'LIKE', "%$filterKeyword%")->paginate(10);
        }
        return view('pages.produk-hukum', ['prokum' => $prokum]);
    }
}
