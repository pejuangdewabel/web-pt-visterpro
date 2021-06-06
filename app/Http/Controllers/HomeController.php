<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use Illuminate\Http\Request;
use App\Property;

class HomeController extends Controller
{
    public function index()
    {
        // ->paginate(15) ->take(3)
        $jual = Property::where('status2', '1')->latest()->paginate(3);
        $sewa = Property::where('status2', '2')->take(3)->latest()->get();
        $banner = Banner::latest()->get();

        $countJual = Property::where('status2', '1')->count();
        $countsewa = Property::where('status2', '2')->count();

        return view('pages.home', [
            'jual' => $jual,
            'sewa' => $sewa,
            'countJual' => $countJual,
            'countsewa' => $countsewa,
            'banner' => $banner
        ]);
    }

    public function about()
    {
        $data = About::findOrFail('1');
        return view('pages.tentang', [
            'data' => $data
        ]);
    }

    public function dijual()
    {
        $data = Property::where('status2', '1')->latest()->paginate(6);
        return view('pages.dijual', [
            'data'  => $data
        ]);
    }

    public function disewakan()
    {
        $data = Property::where('status2', '2')->latest()->paginate(6);
        return view('pages.disewakan', [
            'data'  => $data
        ]);
    }

    public function dijualDetail($id)
    {
        $detail = Property::where('slug', $id)->firstOrFail();
        return view('pages.detailDijual', [
            'detail' => $detail
        ]);
    }

    public function disewakanDetail($id)
    {
        $detail = Property::where('slug', $id)->firstOrFail();
        return view('pages.detailDisewakan', [
            'detail' => $detail
        ]);
    }

    public function pencarian(Request $request, $wilayah, $jenis)
    {
        if ($wilayah == "semua" and $jenis == "semua") {

            $hasil = Property::where([
                'status2' => '1'
            ])->latest()->get();

            return view('pages.pencarian', [
                'hasil'     => $hasil,
                'wilayah'   => $wilayah,
                'jenis'     => $jenis
            ]);
        } elseif ($wilayah == "semua") {
            if ($jenis == "tanah") {
                $a = "1";
                $jns = "Tanah";
            } else {
                $a = "2";
                $jns = "Bangunan / Rumah";
            }
            $hasil = Property::where([
                'status1' => $a,
                'status2' => '1'
            ])->latest()->get();

            return view('pages.pencarian', [
                'hasil'     => $hasil,
                'wilayah'   => $wilayah,
                'jenis'     => $jns
            ]);
        } elseif ($jenis == "semua") {
            if ($wilayah == "bandar-lampung") {
                $a = "1";
                $wil = "Bandar Lampung";
            } elseif ($wilayah == "lampung-selatan") {
                $a = "2";
                $wil = "Lampung Selatan";
            } elseif ($wilayah == "pesawaran") {
                $a = "3";
                $wil = "Pesawaran";
            }

            $hasil = Property::where([
                'kabkot' => $a,
                'status2' => '1'
            ])->latest()->get();

            return view('pages.pencarian', [
                'hasil' => $hasil,
                'wilayah'   => $wil,
                'jenis' => $jenis
            ]);
        } elseif ($wilayah and $jenis) {

            if ($jenis == "tanah") {
                $a  = "1";
                $jns = "Tanah";
            } elseif ($jenis == "bangunan") {
                $a = "2";
                $jns = "Bangunan / Tanah";
            } else {
                $a = "";
                $jns = "semua";
            }

            if ($wilayah == "bandar-lampung") {
                $b = "1";
                $wil = "Bandar Lampung";
            } elseif ($wilayah == "lampung-selatan") {
                $b = "2";
                $wil = "Lampung Selatan";
            } elseif ($wilayah == "pesawaran") {
                $b = "3";
                $wil = "Pesawaran";
            } else {
                $b = "";
                $wil = "Semua";
            }

            $hasil = Property::where([
                'kabkot'  => $b,
                'status1' => $a,
                'status2' => '1'
            ])->latest()->get();
            return view('pages.pencarian', [
                'hasil'     => $hasil,
                'wilayah'   => $wil,
                'jenis'     => $jns
            ]);
        }
    }
}
