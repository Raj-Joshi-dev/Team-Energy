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
    <form action="{{ route('store3') }}" method="post">
    @csrf
        <div class="questions"><h2>Ich im Team - Privater Bereich</h2></div>
        <div class="answerList"><h4>Vorsicht! Bitte wählen Sie <span style="color: red; "><b>nur eine</b></span> Option aus der unten angegebenen Arbeit aus.</h4></div>
        <div class="questions"><h4>Frage 1</h4></div>
        <div class="questions"><h4>These 1: Es gibt eine Art Routine, wann wir anfangen und aufhören mit der Arbeit.</h3></div>
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
            <div class="questions"><h4>These 2: Hier macht jeder seine Arbeit so wie er denkt. Wenn viel anliegt wird viel gearbeitet, wenn es rund läuft, kann man auch früher gehen.</h4></div>
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
        <div class="questions"><h4>These 1: Die Verantwortlichkeiten sind in unserem Team in Arbeitsplatzbeschreibungen geregelt, die auch aktuell gehalten werden.</h4></div>
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
            <div class="questions"><h4>These 2: Hier entscheidet jeder für sich, was nach aktueller Lage und Aufgabenstellung zu tun ist.</h4></div>
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
        <div class="questions"><h4>These 1: Bei uns im Team herrscht eher eine Kultur der Sicherheit als der Freiheit, mit allen Vor- und Nachteilen.</h4></div>
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
            <div class="questions"><h4>These 2: Bei uns im Team herrscht eher eine Kultur der Freiheit als der Sicherheit, mit allen Vor- und Nachteilen.</h4></div>
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
        <div class="questions"><h4>These 1: Die Bitte eines Kollegen um Unterstützung abzulehnen, wäre ein Fauxpas.</h4></div>
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
            <div class="questions"><h4>These 2: Jeder ist grundsätzlich selbst für seine Performance verantwortlich.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn es jemanden mal schlecht geht, sagt er das und bekommt dann auch Unterstützung.</h4></div>
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
            <div class="questions"><h4>These 2: Wenn man schlecht drauf ist, reißt man sich besser zusammen, sonst wird einem das als Schwäche ausgelegt.</h4></div>
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
        <div class="questions"><h4>These 1: Neue Mitarbeitersollen sich eingliedern und uns unterstützen.</h4></div>
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
            <div class="questions"><h4>These 2: Neue Mitarbeiter sollen bei uns frischen Wind bringen und Routinen in Frage stellen.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn jemand krank wird, geht er nach hause, bevor er Andere ansteckt oder es ihn richtig „umhaut“.</h4></div>
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
            <div class="questions"><h4>These 2: Bevor hier jemand wegen Krankheit fehlt, muss er schon auf der Krankenbahre raus getragen werden.</h4></div>
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
        <div class="questions"><h4>These 1: Die Geburtstage der Teammitglieder sind bekannt und werden im angemessenen Rahmen gefeiert.</h4></div>
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
            <div class="questions"><h4>These 2: Geburtstage werden normalerweise nicht gefeiert.</h4></div>
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
        <div class="questions"><h4>These 1: Wir stimmen uns oft ab und wenn jemand hinterher hinkt, bekommt er Unterstützung.</h4></div>
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
            <div class="questions"><h4>These 2: Jeder ist für seinen Job verantwortlich und muss sich zunächst mal selbst helfen. Das schließt nicht aus, dass Dinge neu verteilt werden müssen, wenn jemand zuviel Arbeitslast trägt.</h4></div>
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
        <div class="questions"><h4>These 1: Es gibt auch einige informelle Kontakte in unserem Team. Gelegentlich gehen wir außerhalb der Arbeit aus.</h4></div>
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
            <div class="questions"><h4>These 2: Nach Dienst geht jeder seinen Weg. Privates und Hobbys kommen eh zu kurz.</h4></div>
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

    <div class="questionsBox">
        <div class="questions"><h4>Frage 11</h4></div>
        <div class="questions"><h4>These 1: Wenn jemand krank wird, machen wir die Arbeit soweit möglich für ihn mit.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup11" value="41" id="answerGroup_41">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup11" value="42" id="answerGroup_42">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Wenn jemand krank wird, arbeitet er soweit möglich von zuhause oder er muss schauen, wie er wieder Anschluss findet.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup11" value="43" id="answerGroup_43">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup11" value="44" id="answerGroup_44">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>   

    <div class="questionsBox">
        <div class="questions"><h4>Frage 12</h4></div>
        <div class="questions"><h4>These 1: Wir achten darauf, dass jedes Teammitglied die gleiche Wertschätzung erfährt.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup12" value="45" id="answerGroup_45">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup12" value="46" id="answerGroup_46">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Es ist schon klar, wer bei uns die Leistungsträger sind.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup12" value="47" id="answerGroup_47">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup12" value="48" id="answerGroup_48">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>   

    <div class="questionsBox">
        <div class="questions"><h4>Frage 13</h4></div>
        <div class="questions"><h4>These 1: In Meetings beißen wir uns schon mal an wirklich interessanten Punkten fest. Manchmal sind wir etwas chaotisch.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup13" value="49" id="answerGroup_49">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup13" value="50" id="answerGroup_50">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: In Meetings arbeiten wir die Agenda diszipliniert ab. Manchmal sind wir etwas starr.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup13" value="51" id="answerGroup_51">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup13" value="52" id="answerGroup_52">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>    

    <div class="questionsBox">
        <div class="questions"><h4>Frage 14</h4></div>
        <div class="questions"><h4>These 1: Wir brauchen keine Regeln für Kaffe- oder Spülmaschine. Jeder packt ohne Aufforderung an.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup14" value="53" id="answerGroup_53">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup14" value="54" id="answerGroup_54">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Wir haben klare Verhaltensregeln für das Zusammenleben im Büro/der Arbeit.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup14" value="55" id="answerGroup_55">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup14" value="56" id="answerGroup_56">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  

    <div class="questionsBox">
        <div class="questions"><h4>Frage 15</h4></div>
        <div class="questions"><h4>These 1: Bei uns herrscht eher eine Vertrauenskultur. Wenn z.B. kein Kaffee mehr da ist, bringt ihn der mit, der es am ersten bemerkt.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup15" value="57" id="answerGroup_57">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup15" value="58" id="answerGroup_58">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Wir halten solche Dinge fest. Jeder kommt im Umlauf mal dran. Sonst gibt es erfahrungsgemäß früher oder später Ärger..</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup15" value="59" id="answerGroup_59">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup15" value="60" id="answerGroup_60">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>        

    <div class="questionsBox">
        <div class="questions"><h4>Frage 16</h4></div>
        <div class="questions"><h4>These 1: Die wirklich wichtigen Dinge sind allen klar. Protokolle werden eh nicht gelesen.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup16" value="61" id="answerGroup_61">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup16" value="62" id="answerGroup_62">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Es gibt Protokolle aller wichtigen Sitzungen. Es gibt auch klare Prozedere, z.B. bis wann Tagesordnungspunkte einzureichen sind.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup16" value="63" id="answerGroup_63">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup16" value="64" id="answerGroup_64">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>  

    <div class="questionsBox">
        <div class="questions"><h4>Frage 17</h4></div>
        <div class="questions"><h4>These 1: Bei uns geht es emotional schon mal auf und ab. Wir versuchen aber immer Lösungen zu finden, mit denen alle leben können.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup17" value="65" id="answerGroup_65">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup17" value="66" id="answerGroup_66">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Wenn wir uneins sind, entscheidet der Chef oder wir stimmen nach angemessener Zeit ab, sonst würde ewig diskutiert.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup17" value="67" id="answerGroup_67">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup17" value="68" id="answerGroup_68">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>    

    <div class="questionsBox">
        <div class="questions"><h4>Frage 18</h4></div>
        <div class="questions"><h4>These 1: Bei uns wird es schon mal laut und emotional, aber wir lachen auch kräftig.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup18" value="69" id="answerGroup_69">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup18" value="70" id="answerGroup_70">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Bei uns geht es formell und geschäftsmäßig zu.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup18" value="71" id="answerGroup_71">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup18" value="72" id="answerGroup_72">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>        

    <div class="questionsBox">
        <div class="questions"><h4>Frage 19</h4></div>
        <div class="questions"><h4>These 1: Bei uns gibt es klare Vorgaben. Unsere Aufgabe ist es, die Entscheidungen sauber umzusetzen.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup19" value="73" id="answerGroup_73">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup19" value="74" id="answerGroup_74">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Jeder ist aufgefordert zu widersprechen, auch dem Chef, wenn ihm etwas nicht plausibel erscheint. Tragfähige Entscheidungen entstehen nur in offenen Auseinandersetzungen.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup19" value="75" id="answerGroup_75">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup19" value="76" id="answerGroup_76">Eher Ja</label>
                </li>
            </ul>
        </div>    
        <br><br>

    <div class="questionsBox">
        <div class="questions"><h4>Frage 20</h4></div>
        <div class="questions"><h4>These 1: Bei der Vielzahl der Absprachen kommt es schon mal vor, dass etwas übersehen wird. Wir steuern dann nach.</h4></div>
        <ul class="answerList">
            <li>
                <label>
                    <input type="radio" name="answerGroup20" value="77" id="answerGroup_77">Ja</label>
            </li>
            <li>
                <label>
                    <input type="radio" name="answerGroup20" value="78" id="answerGroup_78">Eher Ja</label>
            </li>
            <li>
        </ul>
    </div>
        <div class="questionsBox">
            <div class="questions"><h4>These 2: Auf Absprachen kann man sich bei uns verlassen. Wir müssen wenig nachsteuern.</h4></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup20" value="79" id="answerGroup_79">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup20" value="80" id="answerGroup_80">Eher Ja</label>
                </li>
            </ul>
        </div><br>  
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
            <div>{{ $errors->first('answerGroup11') }}</div>
            <div>{{ $errors->first('answerGroup12') }}</div>
            <div>{{ $errors->first('answerGroup13') }}</div>
            <div>{{ $errors->first('answerGroup14') }}</div>
            <div>{{ $errors->first('answerGroup15') }}</div>
            <div>{{ $errors->first('answerGroup16') }}</div>
            <div>{{ $errors->first('answerGroup17') }}</div>
            <div>{{ $errors->first('answerGroup18') }}</div>
            <div>{{ $errors->first('answerGroup19') }}</div>
            <div>{{ $errors->first('answerGroup20') }}</div>
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

