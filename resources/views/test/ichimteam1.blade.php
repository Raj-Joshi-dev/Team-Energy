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
    <form action="{{ route('store') }}" method="post">
    @csrf
        <div class="questions"><h2>Ich im Team - Privater Bereich</h2></div>
        <div class="answerList"><h4>Vorsicht! Bitte wählen Sie <span style="color: red; "><b>nur eine</b></span> Option aus der unten angegebenen Arbeit aus.</h4></div>
        <div class="questions"><h4>Frage 1</h4></div>
        <div class="questions"><h4>These 1: Ich fahre gerne an ein bekanntes und bewährtes Urlaubsziel zurück. Da weiß ich was ich habe.</h3></div>
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
            <div class="questions"><h4>These 2: Im Urlaub suche ich neue unbekannte Ziele. Mich reizt das Neue.</h4></div>
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
        <div class="questions"><h4>These 1: Ich bevorzuge ausgesuchte Bekanntschaften und Gespräche mit Tiefgang.</h4></div>
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
            <div class="questions"><h4>These 2: Mich interessieren neue Bekanntschaften und schnell ins Gespräch zu kommen.</h4></div>
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
        <div class="questions"><h4>These 1: Jeder hat mal einen schlechten Tag. Dafür zeige ich auch Verständnis.</h4></div>
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
            <div class="questions"><h4>These 2: Auch als Privatperson bin ich Rollenwerwartungen ausgesetzt. Schwäche und Rückzug akzeptiere ich nicht.</h4></div>
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
        <div class="questions"><h4>These 1: Ich habe meinen privaten Bereich weitgehend durchdacht und geordnet. Um mich richtig wohl zu fühlen brauche ich ein gewisses Maß an Berechenbarkeit und Sicherheit.</h4></div>
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
            <div class="questions"><h4>These 2: Im privaten Bereich bin ich eher spontan und flexibel. Mein Privatbereich soll Aufregendes und Überraschungen bieten.</h4></div>
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
        <div class="questions"><h4>These 1: Bei uns zuhause gibt es ein paar feste Regeln (Essenszeiten, Familienzeiten,..), die uns helfen ein erfülltes Familienleben zu haben.</h4></div>
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
            <div class="questions"><h4>These 2: Bei uns zuhause geht es vor allem nach Zweckmäßigkeit. Wer Hunger hat, isst etwas, .. usw.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn wir in einer großen Gruppe Essen gehen, finde ich es eine schöne Geste, wenn wir die Rechnung durch die Anzahl der Köpfe teilen – auch wenn ich mehr zahle als ich konsumiert habe.</h4></div>
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
            <div class="questions"><h4>These 2: Mir ist es lieber, wenn jeder seine eigene Rechnung zahlt. Ich will weder von anderen „subventioniert“ werden, noch für andere mitzahlen.</h4></div>
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
        <div class="questions"><h4>These 1: Vertrautes Miteinander ist mir wichtiger als persönliche Interessen.</h4></div>
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
            <div class="questions"><h4>These 2: Meine persönlichen Hobbies und Interessen sind meine stärktste Kraftquelle.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn ich mich mit Freunden treffen will, machen wir meist einen Termin aus.</h4></div>
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
            <div class="questions"><h4>These 2: Mit Freunden treffe ich mich meist spontan?</h4></div>
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
        <div class="questions"><h4>These 1: Geld ist Mittel zum Zweck. In einer Notlage würde ich Freunden und Angehörigen helfen oder mir helfen lassen</h4></div>
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
            <div class="questions"><h4>These 2: Ein finanzielles Polster ist wichtig für die Unabhängigkeit. Jeder ist verantwortlich für Notlagen vorzusorgen.</h4></div>
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
        <div class="questions"><h4>These 1: Die Welt wird besser, wenn jeder mehr auf seine Mitmenschen eingeht.</h4></div>
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
            <div class="questions"><h4>These 2: Die Welt wird besser, wenn jeder bei sich selbst anfängt, Dinge besser zu machen.</h4></div>
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
        <div class="questions"><h4>These 1: Manchmal halte ich notwendige Kritik zurück, weil ich Andere nicht verletzen will.</h4></div>
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
            <div class="questions"><h4>These 2: Für eine wirklich gute und stabile Beziehung halte ich es für notwendig, dass ich auch offen die Meinung sage.</h4></div>
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
        <div class="questions"><h4>These 1: Auf Schwächere muss man Rücksicht nehmen.</h4></div>
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
            <div class="questions"><h4>These 2: Auch Schwächere müssen sich bemühen und dürfgen es sich nicht bequem machen.</h4></div>
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
        <div class="questions"><h4>These 1: Im Sport tobe ich mich so richtig aus.</h4></div>
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
            <div class="questions"><h4>These 2: Im Sport habe ich ein Trainingsprogramm und ein klares Ziel.</h4></div>
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
        <div class="questions"><h4>These 1: Man sollte Dinge ausdiskutieren, bis ein Kompromiss gefunden ist, mit dem Alle leben können.</h4></div>
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
            <div class="questions"><h4>These 2: Wenn nach einer angemessenen Zeit keine Einigung zu erzielen ist, sollte einfach abgestimmt werden.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn jemand aus meinem Bekanntenkreis ein Problem hat, bin ich oft ein Ansprechpartner, der Trost spendet.</h4></div>
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
            <div class="questions"><h4>These 2: Ich versuche Hilfe zur Selbsthilfe zu geben. Am Ende muss jeder lernen, sich selbst zu helfen.</h4></div>
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
        <div class="questions"><h4>These 1: Ich vertraue meinem Partner/meinem besten Freund 100% und hinterfrage nicht.</h4></div>
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
            <div class="questions"><h4>These 2: Jeder Mensch ist Versuchungen ausgesetzt. Es ist weltfremd und unverantwortlich, blind zu vertrauen.</h4></div>
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
        <div class="questions"><h4>These 1: Beim Skifahren sollte der Langsamste das Tempo bestimmen.</h4></div>
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
            <div class="questions"><h4>These 2: Es sollten Leistungsgruppen gebildet werden. Man kann sich ja in Abständen treffen.</h4></div>
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
        <div class="questions"><h4>These 1: In Liebesfragen orientiere ich mich rein nach meinem Bauchgefühl.</h4></div>
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
            <div class="questions"><h4>These 2: Eine langfristig erfüllende Beziehung ist nur möglich, wenn gleichartige Grundhaltungen und gemeinsame Ziele gegeben sind.</h4></div>
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
        <div class="questions"><h4>These 1: Ich spende gerne und oft.</h4></div>
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
            <div class="questions"><h4>These 2: Wenn Personen unverschuldet in Not geraten helfe ich gezielt.</h4></div>
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
        <div class="questions"><h4>These 1: Wenn ich unerwartet gute Freunde treffe, kann es sein, dass ich mal richtig „abstürze“ und am nächsten Tag zu nichts zu gebrauchen bin.</h4></div>
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
            <div class="questions"><h4>These 2: Dienst ist Dienst und Schnaps ist Schnaps. Ich kann richtig feiern, aber am nächsten Tag stehe ich wie eine „1“ in der Arbeit und erfülle 100% meine Pflicht.</h4></div>
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

