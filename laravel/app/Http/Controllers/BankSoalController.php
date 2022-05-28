<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Belajar;
use App\Models\Section;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

use File;
use Illuminate\Support\Facades\Storage;

class BankSoalController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:bank-soal-list|bank_soal_create|bank_soal-edit|bank_soal-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:bank_soal-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:bank_soal-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:bank_soal-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')){
            $bank_soals = BankSoal::where('title', 'like', '%' . $request->search . '%')
//                ->orWhereHas('belajar', function ($query) use ($request) {
//                    $query->where('title', 'like', '%' . $request->search . '%');
//                })
                ->orWhereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->paginate(5);
        }else{
            $bank_soals = BankSoal::latest()->paginate(5);
        }

        $users = User::all();
        return view('pages.Dashboard.banksoal.index', compact('bank_soals'))->with('i', (request()->input('page', 1) - 1) * 5);


//        $bank_soals = BankSoal::latest()->paginate(5);
//
//        return view('pages.Dashboard.banksoal.index', compact('bank_soals'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Dashboard.banksoal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:bank_soals|min:5|max:255',
//            'description' => 'required|min:5|max:255',
            'filePath' => 'required|mimes:pdf,xlx,docs|max:2048',
        ]);

        $pathFile = $request->file('filePath')->store('public/assets/BankSoal');
        $user_id = auth()->user()->id;  // get the user id
//        $path_soal = $get_user_photo['photo'];


        $post = new BankSoal();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->filePath = $pathFile;
        $post->user_id = $user_id;
        $post->save();

//        if ($request->hasFile('soal')) {
//            foreach ($request->file('soal') as $key => $file) {
//                $path = $file->store('assets/soal');
//                $name = $file->getClientOriginalName();
//
//                $insert[$key]['name'] = $name;
//                $insert[$key]['path'] = $path;
//
//            }
//        }
//
//        if ($request->hasFile('jawaban')) {
//            foreach ($request->file('jawaban') as $key => $file) {
//                $path = $file->store('assets/jawaban');
//                $name = $file->getClientOriginalName();
//
//                $insert[$key]['name'] = $name;
//                $insert[$key]['path'] = $path;
//
//            }
//        }
//
//        File::insert($insert);

//        $input = $request->all();
//
//        if ($soal = $request->file('soal')) {
//            $destinationPath = 'assets/soal';
//            $soalFile = date('YmdHis') . "." . $soal->getClientOriginalExtension();
//            $soal->move($destinationPath, $soalFile);
//            $input['soal'] = "$soalFile";
//        }
//
//        if ($jawaban = $request->file('jawaban')) {
//            $destinationPath = 'assets/jawaban';
//            $jawabanSoal = date('YmdHis') . "." . $jawaban->getClientOriginalExtension();
//            $jawaban->move($destinationPath, $jawabanSoal);
//            $input['jawaban'] = "$jawabanSoal";
//        }
//
//        BankSoal::create($input);

        return redirect()->route('admin.banksoal.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BankSoal $banksoal)
    {
        return view('pages.Dashboard.banksoal.show', compact('banksoal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BankSoal $banksoal)
    {
        return view('pages.Dashboard.banksoal.edit', compact('banksoal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankSoal $banksoal)
    {
        $request->validate([
            'title' => 'required|unique:bank_soals|min:5|max:255',
        ]);

        $input = $request->all();

//        $soalFile = 'assets/soal/'.$banksoal->soal;
//        if(File::exists($soalFile)){
//            File::delete($soalFile);
//        }else{
//            File::delete('assets/soal/'.$banksoal->soal);
//        }

        if ($soal = $request->file('dokumen')) {
            $destinationPath = 'assets/soal';
            $soalFile = date('YmdHis') . "." . $soal->getClientOriginalExtension();
            $soal->move($destinationPath, $soalFile);
            $input['soal'] = "$soalFile";
        }else{
            unset($input['soal']);
        }

//        $jawabanFile = 'assets/jawaban/'.$banksoal->jawaban;
//        if(File::exists($jawabanFile)){
//            File::delete($jawabanFile);
//        }else{
//            File::delete('assets/jawaban/'.$banksoal->jawaban);
//        }

        if ($jawaban = $request->file('jawaban')) {
            $destinationPath = 'assets/jawaban';
            $jawabanSoal = date('YmdHis') . "." . $jawaban->getClientOriginalExtension();
            $jawaban->move($destinationPath, $jawabanSoal);
            $input['jawaban'] = "$jawabanSoal";
        }else{
            unset($input['jawaban']);
        }

        $banksoal->update($input);

        return redirect()->route('admin.banksoal.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankSoal $banksoal)
    {
        $banksoal->delete();

        return redirect()->route('pages.Dashboard.banksoal.index')->with('success', 'Data berhasil dihapus');
    }

    //custom

    function create_quiz()
    {
        return view('pages.Dashboard.banksoal.quiz.create');
    }

    public function detailQuiz(BankSoal $banksoal)
    {
        $questions = $banksoal->questions()->paginate(10);
        return view('pages.Dashboard.banksoal.quiz.detail', compact('questions', 'banksoal'));
    }

//    function getSoal(BankSoal $banksoal){
//        $file=Storage::disk('assets/soal/')->get($banksoal->soal);
//
//        return (new Response($file, 200))
//            ->header('Content-Type', 'pdf');
//    }
//
//    public function downloadSoal(BankSoal $banksoal)
//    {
//        $book = BankSoal::where($banksoal->id)->firstOrFail();
//        $pathToFile = storage_path('assets/soal/' . $banksoal->soal);
//        return response()->download($pathToFile);
//    }
}