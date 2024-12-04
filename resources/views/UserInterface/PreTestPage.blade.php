@extends('layouts/UserInterface_main')

@section('User_content') 
<style>

    .table1{
        text-align:center;
        width:40%;
        margin:30px auto;
    }
</style>
    <div class="container">
            <div class="pre-required">
                <h2 style="margin-bottom: -10px;margin-top: 30px ;">Online Examination Requirements </h2>
                <span style="color:transparent;border-bottom: 1px solid black;">Online Examinatasfafafzczc\x\zxadddadfafadadaddion Requirements</span>

                <p style="margin-top: 10px;">
                    Violation of any these preparations will be flagged during your test by the web proctor,
                     and you may fail your test, and may not be eligible for a refund and be banned from re-taking 
                     the test. Ensure you adhere to the following rules during your test:
                </p>
                <ul>
                    <li>You MUST provide your valid government-issued photo ID when requested.</li>
                    <li>You MUST scan the room with your webcam when directed.</li>
                    <li>You MUST remain directly in front of your webcam for the duration of the test.</li>
                    <li> You MUST NOT have anyone else in the room with you for the duration of your test.</li>
                    <li>You MUST NOT interact or communicate with anyone by any means while testing.</li>
                    <li>You MUST NOT use any other electronic devices (phone, ipod, headphones, MP3 player, 
                        another computer, etc.) while taking the test</li>
                    <li>You MUST NOT use any mobile device or have any mobile device within your eyesight during the test. 
                        A mobile device is used as part of the proctoring method but may not be used during the exam as a reference.</li>
                    <li>You MUST NOT intentionally disable the internet connection while testing.</li>
                </ul>
                <p>
                Violation of any these rules will be flagged during your test by the web proctor, and you may fail your test, and be banned from re-taking the test
                </p>
                <div class="clear"></div>
            </div>

            <div style="margin-top: 40px;" class="about-test">
                <h2 style="margin-bottom: -10px;">About Examination </h2>
                <span style="color:transparent;border-bottom: 1px solid black;">Online Examinatasfsfasdd Requments </span>
                <p style="margin-top: 10px;">
                    Violation of any these preparations will be flagged during your test by the web proctor,
                     and you may fail your test, and may not be eligible for a refund and be banned from re-taking 
                     the test. Ensure you adhere to the following rules during your test:
                </p>
                <ul>
                    <li>You MUST provide your valid government-issued photo ID when requested.</li>
                    <li>You MUST scan the room with your webcam when directed.</li>
                    <li>You MUST remain directly in front of your webcam for the duration of the test.</li>
                    <li> You MUST NOT have anyone else in the room with you for the duration of your test.</li>
                    
                </ul>
                <p>
                Violation of any these rules will be flagged during your test by the web proctor, and you may fail your test, and be banned from re-taking the test
                </p>
                <div class="clear"></div>
            </div>

            <div class="Exams">
            <table class="table table1">
                <th><h2>Exams</h2></th>
                <tr><td ><button style="background-color: #4c3499ef;" class="btn btn-primary btn-block" onclick="window.location.href='{{route('Test.index' ,1 )}}';"> English</button></td></tr>
                <tr><td><button style="background-color: #4c3499ef;"  class="btn btn-primary btn-block" onclick="window.location.href=' {{route('Test.index' ,2 )}}'; "> IQ</button></td></tr>
                <tr><td><button  style="background-color: #4c3499ef;" class="btn btn-primary btn-block" onclick=" window.location.href=' {{route('Test.index' ,3 )}}'; "> Technical</button></td></tr>
            </table>
            </div>

    </div>
@endsection