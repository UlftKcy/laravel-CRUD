<?php

namespace App\Http\Controllers;

use App\Models\PostCrud;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = PostCrud::all();

        return view("index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "description" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(["status" => "warning", "message" => "Hata oluştu"]);
        }

        DB::beginTransaction();
        try {
            $post = new PostCrud();
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();

            $url = route("index");

            DB::commit();
            return response()->json([
                'status' => "success",
                'url' => $url,
            ]);
        } catch (Exception $exception) {
            DB::rollback();
            return response()->json(["status" => "error", "message" => "Hata oluştu"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $post = PostCrud::where("id", $id)->first();

        return view("show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $post = PostCrud::where("id", $id)->first();

        return view("edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "post_id" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(["status" => "warning", "message" => "Hata oluştu"]);
        }

        DB::beginTransaction();
        try {

            /** @var PostCrud $post */
            $post = PostCrud::where("id", $request->post_id)->first();

            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();

            $url = route("index");

            DB::commit();
            return response()->json([
                'status' => "success",
                'url' => $url,
            ]);

        } catch (Exception $exception) {
            DB::rollback();
            return response()->json(["status" => "error", "message" => "Hata oluştu"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = PostCrud::where("id", $id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->route('index');
        }
    }
}
