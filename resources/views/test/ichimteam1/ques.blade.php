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
    <form action="{{ route('test.store') }}" method="post">
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
		    <button id="submit-btn" class="btn btn-primary btn-lg">Submit</button>
        </div>
        </form>
        <br><br>    

</div>
</body>
<script>
$("#nextquestions").click(function(e) {

var answerGroup_1 = $("#answerGroup_1:checked").val();
var answerGroup_2 = $("#answerGroup_2:checked").val();
var answerGroup_3 = $("#answerGroup_3:checked").val();
var answerGroup_4 = $("#answerGroup_4:checked").val();
var answerGroup_5 = $("#answerGroup_5:checked").val();
var answerGroup_6 = $("#answerGroup_6:checked").val();
var answerGroup_7 = $("#answerGroup_7:checked").val();
var answerGroup_8 = $("#answerGroup_8:checked").val();
var answerGroup_9 = $("#answerGroup_9:checked").val();
var answerGroup_10 = $("#answerGroup_10:checked").val();
var answerGroup_11 = $("#answerGroup_11:checked").val();
var answerGroup_12 = $("#answerGroup_12:checked").val();
var answerGroup_13 = $("#answerGroup_13:checked").val();
var answerGroup_14 = $("#answerGroup_14:checked").val();
var answerGroup_15 = $("#answerGroup_15:checked").val();
var answerGroup_16 = $("#answerGroup_16:checked").val();
var answerGroup_17 = $("#answerGroup_17:checked").val();
var answerGroup_18 = $("#answerGroup_18:checked").val();
var answerGroup_19 = $("#answerGroup_19:checked").val();
var answerGroup_20 = $("#answerGroup_20:checked").val();
var answerGroup_21 = $("#answerGroup_21:checked").val();
var answerGroup_22 = $("#answerGroup_22:checked").val();
var answerGroup_23 = $("#answerGroup_23:checked").val();
var answerGroup_24 = $("#answerGroup_24:checked").val();
var answerGroup_25 = $("#answerGroup_25:checked").val();
var answerGroup_26 = $("#answerGroup_26:checked").val();
var answerGroup_27 = $("#answerGroup_27:checked").val();
var answerGroup_28 = $("#answerGroup_28:checked").val();
var answerGroup_29 = $("#answerGroup_29:checked").val();
var answerGroup_30 = $("#answerGroup_30:checked").val();
var answerGroup_31 = $("#answerGroup_31:checked").val();
var answerGroup_32 = $("#answerGroup_32:checked").val();
var answerGroup_33 = $("#answerGroup_33:checked").val();
var answerGroup_34 = $("#answerGroup_34:checked").val();
var answerGroup_35 = $("#answerGroup_35:checked").val();
var answerGroup_36 = $("#answerGroup_36:checked").val();
var answerGroup_37 = $("#answerGroup_37:checked").val();
var answerGroup_38 = $("#answerGroup_38:checked").val();
var answerGroup_39 = $("#answerGroup_39:checked").val();
var answerGroup_40 = $("#answerGroup_40:checked").val();
var answerGroup_41 = $("#answerGroup_41:checked").val();
var answerGroup_42 = $("#answerGroup_42:checked").val();
var answerGroup_43 = $("#answerGroup_43:checked").val();
var answerGroup_44 = $("#answerGroup_44:checked").val();
var answerGroup_45 = $("#answerGroup_45:checked").val();
var answerGroup_46 = $("#answerGroup_46:checked").val();
var answerGroup_47 = $("#answerGroup_47:checked").val();
var answerGroup_48 = $("#answerGroup_48:checked").val();
var answerGroup_49 = $("#answerGroup_49:checked").val();
var answerGroup_50 = $("#answerGroup_50:checked").val();
var answerGroup_51 = $("#answerGroup_51:checked").val();
var answerGroup_52 = $("#answerGroup_52:checked").val();
var answerGroup_53 = $("#answerGroup_53:checked").val();
var answerGroup_54 = $("#answerGroup_54:checked").val();
var answerGroup_55 = $("#answerGroup_55:checked").val();
var answerGroup_56 = $("#answerGroup_56:checked").val();
var answerGroup_57 = $("#answerGroup_57:checked").val();
var answerGroup_58 = $("#answerGroup_58:checked").val();
var answerGroup_59 = $("#answerGroup_59:checked").val();
var answerGroup_60 = $("#answerGroup_60:checked").val();
var answerGroup_61 = $("#answerGroup_61:checked").val();
var answerGroup_62 = $("#answerGroup_62:checked").val();
var answerGroup_63 = $("#answerGroup_63:checked").val();
var answerGroup_64 = $("#answerGroup_64:checked").val();
var answerGroup_65 = $("#answerGroup_65:checked").val();
var answerGroup_66 = $("#answerGroup_66:checked").val();
var answerGroup_67 = $("#answerGroup_67:checked").val();
var answerGroup_68 = $("#answerGroup_68:checked").val();
var answerGroup_69 = $("#answerGroup_69:checked").val();
var answerGroup_70 = $("#answerGroup_70:checked").val();
var answerGroup_71 = $("#answerGroup_71:checked").val();
var answerGroup_72 = $("#answerGroup_72:checked").val();
var answerGroup_73 = $("#answerGroup_73:checked").val();
var answerGroup_74 = $("#answerGroup_74:checked").val();
var answerGroup_75 = $("#answerGroup_75:checked").val();
var answerGroup_76 = $("#answerGroup_76:checked").val();
var answerGroup_77 = $("#answerGroup_77:checked").val();
var answerGroup_78 = $("#answerGroup_78:checked").val();
var answerGroup_79 = $("#answerGroup_79:checked").val();
var answerGroup_80 = $("#answerGroup_80:checked").val();

$.ajax({
    type: "POST",
    url: "{{ route('test.store') }}",
    data: {[ 
        "_token": "{{ csrf_token() }}",
        "answerGroup_1": answerGroup_1,
        "answerGroup_2": answerGroup_2,
        "answerGroup_3": answerGroup_3,
        "answerGroup_4": answerGroup_4,
        "answerGroup_5": answerGroup_5,
        "answerGroup_6": answerGroup_6,
        "answerGroup_7": answerGroup_7,
        "answerGroup_8": answerGroup_8,
        "answerGroup_9": answerGroup_9,
        "answerGroup_10": answerGroup_10,
        "answerGroup_11": answerGroup_11,
        "answerGroup_12": answerGroup_12,
        "answerGroup_13": answerGroup_13,
        "answerGroup_14": answerGroup_14,
        "answerGroup_15": answerGroup_15,
        "answerGroup_16": answerGroup_16,
        "answerGroup_17": answerGroup_17,
        "answerGroup_18": answerGroup_18,
        "answerGroup_19": answerGroup_19,
        "answerGroup_20": answerGroup_20,
        "answerGroup_21": answerGroup_21,
        "answerGroup_22": answerGroup_22,
        "answerGroup_23": answerGroup_23,
        "answerGroup_24": answerGroup_24,
        "answerGroup_25": answerGroup_25,
        "answerGroup_26": answerGroup_26,
        "answerGroup_27": answerGroup_27,
        "answerGroup_28": answerGroup_28,
        "answerGroup_29": answerGroup_29,
        "answerGroup_30": answerGroup_30,
        "answerGroup_31": answerGroup_31,
        "answerGroup_32": answerGroup_32,
        "answerGroup_33": answerGroup_33,
        "answerGroup_34": answerGroup_34,
        "answerGroup_35": answerGroup_35,
        "answerGroup_36": answerGroup_36,
        "answerGroup_37": answerGroup_37,
        "answerGroup_38": answerGroup_38,
        "answerGroup_39": answerGroup_39,
        "answerGroup_40": answerGroup_40,
        "answerGroup_41": answerGroup_41,
        "answerGroup_42": answerGroup_42,
        "answerGroup_43": answerGroup_43,
        "answerGroup_44": answerGroup_44,
        "answerGroup_45": answerGroup_45,
        "answerGroup_46": answerGroup_46,
        "answerGroup_47": answerGroup_47,
        "answerGroup_48": answerGroup_48,
        "answerGroup_49": answerGroup_49,
        "answerGroup_50": answerGroup_50,
        "answerGroup_51": answerGroup_51,
        "answerGroup_52": answerGroup_52,
        "answerGroup_53": answerGroup_53,
        "answerGroup_54": answerGroup_54,
        "answerGroup_55": answerGroup_55,
        "answerGroup_56": answerGroup_56,
        "answerGroup_57": answerGroup_57,
        "answerGroup_58": answerGroup_58,
        "answerGroup_59": answerGroup_59,
        "answerGroup_60": answerGroup_60,
        "answerGroup_61": answerGroup_61,
        "answerGroup_62": answerGroup_62,
        "answerGroup_63": answerGroup_63,
        "answerGroup_64": answerGroup_64,
        "answerGroup_65": answerGroup_65,
        "answerGroup_66": answerGroup_66,
        "answerGroup_67": answerGroup_67,
        "answerGroup_68": answerGroup_68,
        "answerGroup_69": answerGroup_69,
        "answerGroup_70": answerGroup_70,
        "answerGroup_71": answerGroup_71,
        "answerGroup_72": answerGroup_72,
        "answerGroup_73": answerGroup_73,
        "answerGroup_74": answerGroup_74,
        "answerGroup_75": answerGroup_75,
        "answerGroup_76": answerGroup_76,
        "answerGroup_77": answerGroup_77,
        "answerGroup_78": answerGroup_78,
        "answerGroup_79": answerGroup_79,
        "answerGroup_80": answerGroup_80,

    ]}, 
    success: function( msg ) {
        document.location.href = "{{ route('test.store') }}";
    }
});
e.preventDefault();
});
</script>
</html>


