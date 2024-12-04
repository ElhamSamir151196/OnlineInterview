<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Question;
use App\User;


class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $Questions  = Question  ::where('qusetionCategory',$id )->get();

        if((auth()->user()->EnglishFlag =="F" && $id ==1 )|| (auth()->user()->IQFlag =="F" && $id ==2 )|| (auth()->user()->TechnicalFlag =="F" && $id ==3)){
           // dd($id );
            $questions = array();
            /*********************get random index */
            if(sizeof($Questions)>15){
                $min=0; 
                $max=sizeof($Questions)-1; 
                $quantity=15;
                $numbers = range($min, $max);
                shuffle($numbers);
                $items = array();
                $items=array_slice($numbers, 0, $quantity);

                /********************************** Random Array */
                foreach($items as $key => $item){
                    $questions[$key] = $Questions[$item];
                }
            }
            else if(sizeof($Questions) == 15){
                $questions = $Questions;
            }
            else{
                echo "<script>
                        alert('Not available yet');
                        window.location.href='/Pretest';
                    </script>";
            }
            
        }
        else{
            echo "<script>
                    alert('you already take it before');
                    window.location.href='/Pretest';
                </script>";
        }
            
         

         
       

        return view('UserInterface/TestPage' , compact('Questions' , 'questions' , 'id'));

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
        
        $counter = 0;
        foreach($request->CorrectAnswerNumber as $key => $item){

            $fields  = $request->get($key+1);
       
            if($fields == $item){
                $counter++;
              
            }
            
         }
         
         $Grade=($counter / 15)*100;
         if($request->id==1){
            $EnglishGrade=$Grade ."%";
            $grade = array("EnglishGrade"=>$EnglishGrade , "EnglishFlag"=> "T");  
         }elseif($request->id==2){
            $IQGrade=$Grade . "%";
            $grade = array("IQGrade"=>$IQGrade , "IQFlag"=> "T");  
         }else{
            $TechnicalGrade=$Grade . "%";
            $grade = array("TechnicalGrade"=>$TechnicalGrade , "TechnicalFlag"=> "T");  
         }

        $target_user = User::find( auth()->user()->id);
        $target_user->update($grade);
        
        return view('UserInterface/ShowResult' , compact('counter'));
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
    }
}
