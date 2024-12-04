<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Questions = Question::orderBy('id')->paginate(10);
        $Questions1 = Question::orderBy('id')->get();
        $length = sizeof($Questions1);
        return view('Dashboard/Question/ShowAllQuestions' , compact('Questions' , 'length'));


    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_category($id)
    {
        //
        $Questions = Question::where('qusetionCategory',$id)->Paginate(10);
        $Questions1 = Question::where('qusetionCategory',$id)->get();
        $length = sizeof($Questions1);
      
        return view('Dashboard/Question/ShowAllQuestions' , compact('Questions' , 'length'));



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $correctAnswerNumber=request()->get('correctAnswerNumber');
        
        if($correctAnswerNumber==null){
            $request->validate([
                'correctAnswerNumber' => 'required',
                
            ]);
        }

        $qusetionCategory=request()->get('qusetionCategory');
        
        if($qusetionCategory==null){
            $request->validate([
                'qusetionCategory' => 'required',
                
            ]);
        }

         $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
            
        ]);


        /************************************** save ********************* */
       
        $new_Question= new Question;
        $new_Question->question=$request->question;
        $new_Question->answer1=$request->answer1;
        $new_Question->answer2=$request->answer2;
        $new_Question->answer3=$request->answer3;
        $new_Question->answer4=$request->answer4;
        $new_Question->qusetionCategory=$qusetionCategory;
        $new_Question->correctAnswerNumber=$request->correctAnswerNumber;
            
        $new_Question->save();
      
        
        session()->flash('success' ,'Question Created Successfully');
        return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $question = Question::find($id);
        return view('Dashboard/Question/ShowQuestion' , compact('question'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::find($id);
        return view('Dashboard/Question/EditQuestion' , compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $target_comment = Question::find($id);
        $target_comment->update($data);
        
        session()->flash('success' ,'Question Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $target_id=$id;
        Question::destroy($id);
        return view('Dashboard/Question/DeleteQuestion' , compact('target_id'));
    }
}
