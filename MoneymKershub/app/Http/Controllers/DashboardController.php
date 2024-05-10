<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Dashboard;
use App\Models\Post;
use App\Models\Video;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Helpers\YouTubeHelper;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::where('user_id',Auth::id())->latest()->get();
        $videoStudent = Video::latest()->get();
        return view('dashboard.index',compact('videos','videoStudent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videos = Video::where('user_id',Auth::id())->latest()->get();
        return view('dashboard.create',compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "url"=>'required|url',
        ]);
        $videoId = substr($request->url, strrpos($request->url, '/') + 1, 11);
        Video::create([
            'user_id' => Auth::id(),
            "url"=>$videoId
        ]);
        return redirect()->route('dashboard.index')->with('success', 'Video uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard,$id)
    {
       if ($id){
           Video::find($id)->delete();
       }
       return redirect()->route('dashboard.index')->with('success', 'Video deleted successfully.');
    }

    public function postCreate(Request $request)
    {
       $validation =  $request->validate([
            'name'=>'required',
            'amount'=>'numeric',
            'description'=>'required',
        ]);
        $data = $request->all();
        $data['video_id'] = $request->video_id;
        $data['user_id'] = Auth()->id();
        $createPost =  Post::create($data);
        if($createPost){
            $posts = Post::where('video_id',$request->video_id)->orderBy('id','desc')->get();
            $html = view('dashboard.posts',compact('posts'))->render();
        }
        return response()->json([
            'massage'=>'Post created successfully',
            'html'=>$html
        ]);
    }
    public function getPosts(Request $request)
    {
        $posts = Post::where('video_id',$request->id)->orderBy('id','desc')->get();
        $html = view('dashboard.posts',compact('posts'))->render();
        return response()->json(['html' => $html]);
    }

    public function bids($id)
    {
        $post = Post::where('id',$id)->first();
        $bids = Bid::where('post_id',$post->id)->orderBy('id','desc')->get();
        $totalBids = Bid::where('post_id',$post->id)->count();
        return view('dashboard.bids',compact('post','bids','totalBids'));
    }

    public function bidCreate(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'amount'=>'numeric',
            'description'=>'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth()->id();
        Bid::create($data);
        return redirect()->back()->with('success', 'Bid created successfully.');
    }

    public function viewPost($id)
    {
        $posts = Post::where('video_id',$id)->latest()->get();
        return view('dashboard.view-post',compact('posts'));
    }

    public function getBidHtml(Request $request)
    {
        $bids = Bid::where('post_id',$request->id)->get();
        $html = view('dashboard.bide-html',compact('bids'))->render();
        return response()->json(['html' => $html]);
    }
    public function seeVideo($id)
    {
        $videoCustomer = Video::where('url',$id)->first();
        return view('dashboard.index',compact('videoCustomer'));
    }
}
