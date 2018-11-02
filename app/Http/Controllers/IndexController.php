<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Video;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class IndexController extends Controller
{

    public function articles()
    {
        $data = Article::all();
        foreach($data as $key => $val){
            $val->article_id = Crypt::encrypt($val->article_id);
        }

        return view('articles', [
            'data' => $data
        ]);
    }

    public function articleDetail(Request $request)
    {
        try {
            $id = Crypt::decrypt($request->id);
            $article = Article::where('article_id', $id)->first();
        } catch (DecryptException $e) {
            return redirect('/404');
        }
        return view('articlesDetail', [
            'article' => $article
        ]);
    }

    public function plays()
    {
        $data = Video::all();
        foreach($data as $key => $val){
            $val->video_id = Crypt::encrypt($val->video_id);
        }
        return view('videos', [
            'data' => $data
        ]);
    }

    public function playsDetail(Request $request)
    {
        try {
            $id = Crypt::decrypt($request->id);
            $video = Video::where('video_id', $id)->first();
        } catch (DecryptException $e) {
            return redirect('/404');
        }
        return view('videosDetail', [
            'video' => $video
        ]);
    }

    public function show(Request $request)
    {
        $file = str_replace('\\','/', public_path()).'/videos/oceans.mp4';
        $size = filesize($file);
        header("Content-type: video/mp4");
        header("Accept-Ranges: bytes");
        if(isset($_SERVER['HTTP_RANGE'])){
            header("HTTP/1.1 206 Partial Content");
            list($name, $range) = explode("=", $_SERVER['HTTP_RANGE']);
            list($begin, $end) =explode("-", $range);
            if($end == 0){
                $end = $size - 1;
            }
        }else {
            $begin = 0; $end = $size - 1;
        }

        header("Content-Length: " . ($end - $begin + 1));
        header("Content-Disposition: filename=".basename($file));
        header("Content-Range: bytes ".$begin."-".$end."/".$size);

        $fp = fopen($file, 'rb');

        fseek($fp, $begin);
        while(!feof($fp)) {
            $p = min(1024, $end - $begin + 1);
            $begin += $p;
            echo fread($fp, $p);
        }
        fclose($fp);
    }

    public function error404()
    {
        return view('admin.error404');
    }
}
