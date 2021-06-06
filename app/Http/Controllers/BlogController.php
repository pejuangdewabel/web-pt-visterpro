<?php

namespace App\Http\Controllers;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::take(4)->latest()->get();
        $artikel = Blog::latest()->get();
        return view('blog.index', [
            'blog'      => $data,
            'artikel'   => $artikel
        ]);
    }
    public function artikelSemua()
    {
        $artikel = Blog::latest()->get();
        dd($artikel);
    }
    public function detail($slug)
    {
        $result = Blog::where('slug', $slug)->get();
        foreach ($result as $r) :
            $data = array(
                'judul'         => $r->title,
                'image-thub'    => $r->imgblog,
                'tgl'           => Carbon::parse($r->created_at)->format('d F Y'),
                'dec'           => $r->description,
                'slug'          => $r->slug
            );
        endforeach;
        $recent = DB::table('blogs')
            ->select('*')
            ->where('slug', '!=', $slug)
            ->get();

        return view('blog.detail', [
            'data'      => $data,
            'result'    => $result,
            'recent'    => $recent
        ]);
    }
}
