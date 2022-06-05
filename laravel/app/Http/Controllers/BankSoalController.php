<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Quiz\Question;
use App\Models\Quiz\Quiz;
use App\Models\Quiz\QuizHeader;
use App\Models\User\User;
use File;
use Illuminate\Http\Request;

//use App\Models\Section;

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

        return redirect()->route('admin.banksoal.index')->withsuccess('success', 'Data berhasil ditambahkan');

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

        return redirect()->back()->withSuccess('Question created successfully');

//        return redirect()->route('pages.Dashboard.banksoal.index')->with('success', 'Data berhasil dihapus');
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

    public function userQuizHome()
    {
        $activeUsers = User::count();

        $questionsCount = Question::where('is_active', '1')->count();

        $banksoals = BankSoal::withCount('questions')
            ->where('is_active', '1')
            ->orderBy('title', 'asc')
            ->get();

        $quizesTaken = QuizHeader::count();

        $userQuizzes = auth()
            ->user()
            ->quizHeaders()
            ->orderBy('id', 'desc')
            ->paginate(10);

        $quizAverage = auth()->user()->quizHeaders()->avg('score');

        return view(
            'pages.Dashboard.quiz.userQuizHome',
            compact(
                'banksoals',
                'activeUsers',
                'questionsCount',
                'quizesTaken',
                'userQuizzes',
                'quizAverage'
            )
        );
    }

    public function deleteUserQuiz($id)
    {
        $quizheader = QuizHeader::findOrFail($id);
        if (auth()->id() == $quizheader->user_id) {
            $quizheader->delete();
            return redirect()->back()
                ->withSuccess("Quiz deleted successfully!");
        }
        return redirect()->back()->withWarning("Can not delete quiz!");
    }

    public function userQuizDetails($id)
    {
        // Answers with alphabetical choice
        $choice = collect(['A', 'B', 'C', 'D']);

        //Get quiz summary record for the given quiz
        $userQuizDetails = QuizHeader::where('id', $id)
            ->with('banksoal')->first();

        //Extract question taken by the users stored as a serialized string while takeing the quiz
        $quizQuestionsList = collect(unserialize($userQuizDetails->questions_taken));

        //Get the actual quiz questiona and answers from Quiz table using quiz_header_id
        $userQuiz = Quiz::where('quiz_header_id', $userQuizDetails->id)
            ->orderBy('question_id', 'ASC')->get();
        //dd($userQuiz);
        //Get the Questions and related answers taken by the user during the quiz
        $quizQuestions = Question::whereIn('id', $quizQuestionsList)->orderBy('id', 'ASC')->with('answers')->get();

        //pass the data using compact to the view to display
        return view(
            'pages.Dashboard.quiz.userQuizDetail',
            compact(
                'userQuizDetails',
                'quizQuestionsList',
                'userQuiz',
                'quizQuestions',
                'choice'
            )
        );
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