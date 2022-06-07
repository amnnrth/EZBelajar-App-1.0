<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Quiz\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class QuestionsController extends Controller
{
    public function createQuestion(BankSoal $banksoal)
    {
        $banksoal = $banksoal;
        return view('pages.Dashboard.banksoal.quiz.create', compact('banksoal'));
    }

    public function detailQuestion(Question $question)
    {
        $answers = $question->answers()->paginate(10);
        return view('pages.Dashboard.banksoal.quiz.show', compact('question', 'answers'));
    }

    public function storeQuestion(BankSoal $bankSoal, Request $request)
    {
//        $bankSoal = BankSoal::where('id', $bankSoal->id)->first();
//        $post = Belajar::find($belajar->id);
//        $bankSoal = BankSoal::find($bankSoal->id);
//        $bankSoal = BankSoal::find($bankSoal->id);

//        $bankSoal = BankSoal::find($bankSoal);

        $bankSoal = $bankSoal;

        $data = $request->validate([
            'question' => ['required', Rule::unique('questions')],
            'explanation' => 'required',
            'is_active' => 'required',
            'answers.*.answer' => 'required',
            'answers.*.is_checked' => 'present'
        ]);


        $question = Question::create([
            'question' => $request->question,
            'explanation' => $request->explanation,
            'is_active' => $request->is_active,
            'user_id' => Auth::id(),
            'bank_soal_id' => Auth::user()->bank_soal()->id,
//            'bank_soal_id' => $bankSoal->id
        ]);

//        dd($question);

//        return $data;
//        return $question;
//        return $bankSoal;

//        dd($question);

        $status = $question->answers()->createMany($data['answers'])->push();

        toast()->success('Question created successfully', 'success');
        return redirect()->route('admin.detailQuiz', $bankSoal->id)
            ->with('Question created successfully');
    }

    function deleteQuestion($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

//        return redirect()->route('admin.banksoal.index');
        return redirect()->route('admin.detailBankSoal', $question->banksoal->id)
            ->with('Question with id: ' . $question->id . ' deleted successfully');
    }
}
