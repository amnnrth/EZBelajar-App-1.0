<?php

namespace App\Http\Controllers\User;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Request\User\User\UpdateDetailUserRequest;
use App\Http\Request\User\User\UpdateProfileRequest;
use App\Models\User\DetailUser;
use App\Models\User\User;
use Auth;
use File;
use Illuminate\Http\Request;
use function abort;
use function redirect;
use function view;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)
//            ->orWhereHas('detail_user', function ($query) {
//                $query->where('user_id', Auth::user()->id);
//            })
            ->first();

        return view('pages.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request_profile, UpdateDetailUserRequest $request_detail_user)
    {
        $data_profile = $request_profile->all();
        $data_detail_user = $request_detail_user->all();

        // get photo user
        $get_photo = DetailUser::where('user_id', Auth::user()->id)->first();

        // delete old file from storage
        if(isset($data_detail_user['photo'])){
            $data = 'storage/'.$get_photo['photo'];
            if(File::exists($data)){
                File::delete($data);
            }else{
                File::delete('storage/app/public/'.$get_photo['photo']);
            }
        }

        // store file to storage
        if(isset($data_detail_user['photo'])){
            $data_detail_user['photo'] = $request_detail_user->file('photo')->store(
                'assets/photo', 'public'
            );
        }

        // proses save to user
        $user = User::find(Auth::user()->id);
        $user->update($data_profile);

        // ptoses save to detail user
        $detail_user = DetailUser::find($user->detail_user->id);
        $detail_user->update($data_detail_user);

//        dd($user);
//        dd($detail_user);

//        // proses save to experience
//        $experience_user_id = ExperienceUser::where('detail_user_id', $detail_user['id'])->first();
//        if(isset($experience_user_id)){
//
//            foreach ($data_profile['experience'] as $key => $value) {
//                $experience_user = ExperienceUser::find($key);
//                $experience_user->detail_user_id = $detail_user['id'];
//                $experience_user->experience = $value;
//                $experience_user->save();
//            }
//
//        }else{
//
//            foreach ($data_profile['experience'] as $key => $value) {
//                if(isset($value)){
//                    $experience_user = new ExperienceUser;
//                    $experience_user->detail_user_id = $detail_user['id'];
//                    $experience_user->experience = $value;
//                    $experience_user->save();
//                }
//            }
//
//        }

//        toast()->success('Update has been success');
//        return back();

        redirect()->route('admin.belajar.index')->with('success', 'Update has been success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }

    // custom

    public function delete()
    {
        // get user
        $get_user_photo = DetailUser::where('user_id', Auth::user()->id)->first();
        $path_photo = $get_user_photo['photo'];

        // second update value to null
        $data = DetailUser::find($get_user_photo['id']);
        $data->photo = NULL;
        $data->save();

        // delete file photo
        $data = 'storage/'.$path_photo;
        if(File::exists($data)){
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$path_photo);
        }

//        toast()->success('Delete has been success');
//        return back();

        redirect()->route('admin.profile.index')->with('success', 'Delete has been success');
    }
}
