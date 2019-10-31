@extends('layouts.app');

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Persönlichkeitstest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/ques.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="privew">
    <div class="questionsBox">
    <form action="{{ route('store2') }}" method="post">
    @csrf
        <div class="questions"><h2>Ich im Team - Privater Bereich</h2></div>
        <div class="answerList"><h4>Vorsicht! Bitte wählen Sie <span style="color: red; "><b>nur eine</b></span> Option aus der unten angegebenen Arbeit aus.</h4></div>
        <div class="questions"><h4>Frage 1</h4></div>
        <div class="questions"><h4>These 1: Eine Firma kann nur funktionieren, wenn sich die Mitarbeiter an Regeln und Vorgaben halten.</h3></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup1" value="1" id="answerGroup_1">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup1" value="2" id="answerGroup_2">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Eine Firma kann nur im Wettbewerb bestehen, wenn jeder Mitarbeiter zu jeder Zeit beurteilt, ob die Einhaltung einer Regel im gegebenen Einzelfall sinnvoll ist.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup1" value="3" id="answerGroup_3">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup1" value="4" id="answerGroup_4">Eher Ja</label>
                </li>
            </ul>
        </div>
        <br><br>

    <div class="questionsBox">
        <div class="questions"><h4>Frage 2</h4></div>
        <div class="questions"><h4>These 1: Es ist eine Bringschuld Kollegen zu helfen, wenn sie nicht zurecht kommen.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup2" value="5" id="answerGroup_5">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup2" value="6" id="answerGroup_6">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Mittel- und langfristig erzieht ständige Hilfe zu Unselbstständigkeit. Es ist eine Holschuld fehlendes Wissen zu ergänzen.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup2" value="7" id="answerGroup_7">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup2" value="8" id="answerGroup_8">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>

    <div class="questionsBox">
        <div class="questions"><h4>Frage 3</h4></div>
        <div class="questions"><h4>These 1: Ich bestätige wichtige Sachverhalte gerne schriftlich, z.B. mit einer kurzen E-Mail, vor allem weil man alles nachvollziehen kann und eine sichere Grundlage für die weitere Arbeit hat.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup3" value="9" id="answerGroup_9">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup3" value="10" id="answerGroup_10">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Ich kommuniziere am liebsten mündlich. Die Situationen und Schwerpunkte ändern sich so schnell, dass man oft heute Dinge ganz anders beurteilen muss als gestern.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup3" value="11" id="answerGroup_11">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup3" value="12" id="answerGroup_12">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  

    <div class="questionsBox">
        <div class="questions"><h4>Frage 4</h4></div>
        <div class="questions"><h4>These 1: Ich stecke auch mal zurück, damit Kollegen, die sich nicht so gut in Szene setzen können, zum Zuge kommen.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup4" value="13" id="answerGroup_13">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup4" value="14" id="answerGroup_14">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Ich vertrete die Belange meines Fachbereiches klar und deutlich. Wenn das jeder tut kommen wir zum besten Gesamtergebnis.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup4" value="15" id="answerGroup_15">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup4" value="16" id="answerGroup_16">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  
    
    <div class="questionsBox">
        <div class="questions"><h4>Frage 5</h4></div>
        <div class="questions"><h4>These 1: In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Teams haben.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup5" value="17" id="answerGroup_17">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup5" value="18" id="answerGroup_18">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Einzelnen haben.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup5" value="19" id="answerGroup_19">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup"5 value="20" id="answerGroup_20">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>

    <div class="questionsBox">
        <div class="questions"><h4>Frage 6</h4></div>
        <div class="questions"><h4>These 1: Am liebsten entwickle ich die Anforderungen an meinen Arbeitsbereich in enger Abstimmung und im Dialog mit den Kollegen.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup6" value="21" id="answerGroup_21">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup6" value="22" id="answerGroup_22">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Am liebsten arbeite ich selbstständig, selbstverständlich auf Basis klarer Ziele und koordiniert mit den betroffenen Kollegen.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup6" value="23" id="answerGroup_23">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup6" value="24" id="answerGroup_24">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>    

    <div class="questionsBox">
        <div class="questions"><h4>Frage 7</h4></div>
        <div class="questions"><h4>These 1: Auf private Belange und Belastungen sollte im Beruf Rücksicht genommen werden. Das zahlt sich langfristig aus.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup7" value="25" id="answerGroup_25">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup7" value="26" id="answerGroup_26">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Kurzfristig wird man Rücksicht nehmen, aber generell muss jeder seinen privaten Bereich so regeln, dass er im Beruf voll leistungsfähig ist. Bei Ungleichbehandlung entsteht Neid und Missgunst.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup7" value="27" id="answerGroup_27">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup7" value="28" id="answerGroup_28">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  

    <div class="questionsBox">
        <div class="questions"><h4>Frage 8</h4></div>
        <div class="questions"><h4>These 1: Für den Erfolg unseres Teams ist entscheidend, dass wir zusammenhalten und „Beziehungskisten“ schnell und gut ausgeräumt werden.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup8" value="29" id="answerGroup_29">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup8" value="30" id="answerGroup_30">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Für den Erfolg unseres Teams ist entscheidend, dass die Ziele klar sind und entsprechende Maßnahmen sauber umgesetzt werden.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup8" value="31" id="answerGroup_31">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup8" value="32" id="answerGroup_32">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  

    <div class="questionsBox">
        <div class="questions"><h4>Frage 9</h4></div>
        <div class="questions"><h4>These 1: Ich denke, das gesprochene Wort sollte unter Kollegen gelten. Wenn alles aufgeschrieben und abgesichert wird, entsteht eine Misstrauenskultur.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup9" value="33" id="answerGroup_33">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup9" value="34" id="answerGroup_34">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Wichtige Absprachen sollten schriftlich fixiert werden. So wird die Gefahr von Missverständnissen vermindert.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup9" value="35" id="answerGroup_35">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup9" value="36" id="answerGroup_36">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>      
    
    <div class="questionsBox">
        <div class="questions"><h4>Frage 10</h4></div>
        <div class="questions"><h4>These 1: Je nach Tagesform gebe ich mal mehr Gas und mal weniger. Am Ende stimmt natürlich das Ergebnis.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup10" value="37" id="answerGroup_37">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup10" value="38" id="answerGroup_38">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: ch habe eine Vorstellung bis wann ich welchen Teil der Arbeit erledigt haben will und fahre gut damit, mich daran zu halten.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup10" value="39" id="answerGroup_39">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup10" value="40" id="answerGroup_40">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  
        <div class="container text-center bottom">
            <div>{{ $errors->first('answerGroup1') }}</div>
            <div>{{ $errors->first('answerGroup2') }}</div>
            <div>{{ $errors->first('answerGroup3') }}</div>
            <div>{{ $errors->first('answerGroup4') }}</div>
            <div>{{ $errors->first('answerGroup5') }}</div>
            <div>{{ $errors->first('answerGroup6') }}</div>
            <div>{{ $errors->first('answerGroup7') }}</div>
            <div>{{ $errors->first('answerGroup8') }}</div>
            <div>{{ $errors->first('answerGroup9') }}</div>
            <div>{{ $errors->first('answerGroup10') }}</div>
         </div> 
        <div class="container text-center bottom">
		    <button id="submit-btn" class="btn btn-primary btn-lg" value="data">Submit</button>
        </div>
        </form>
        <br><br>    

</div>
</body>
</html>

@endsection

