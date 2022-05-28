<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Question;
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
        return view('pages.Dashboard.banksoal.show', compact('question', 'answers'));
    }

    public function storeQuestion(BankSoal $bankSoal, Request $request)
    {
//        $bankSoal = Question::where('bank_soal_id', $bankSoal->id)->get();
//        $bankSoal = BankSoal::where('id', $bankSoal->id)->first();
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
            'bank_soal_id' => $bankSoal->id,
        ]);

        dd($question);

        $status = $question->answers()->createMany($data['answers'])->push();
        return redirect()->route('detailBankSoal', $bankSoal->id)
            ->withSuccess('Question created successfully');
    }

    function deleteQuestion($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('detailBankSoal', $question->banksoal->id)
            ->withSuccess('Question with id: ' . $question->id . ' deleted successfully');
    }
}
