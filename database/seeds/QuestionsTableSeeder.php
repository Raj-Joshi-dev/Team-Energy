<?php

use App\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'tid' => 1,
            'kat_id' => 1,
            'these1' => 'Ich habe meinen privaten Bereich weitgehend durchdacht und geordnet. Um mich richtig wohl zu fühlen brauche ich ein gewisses Maß an Berechenbarkeit und Sicherheit.',
            'these2' => 'Im privaten Bereich bin ich eher spontan und flexibel. Mein Privatbereich soll Aufregendes und Überraschungen bieten.',
            'ques_id' => 1

        ]);

        DB::table('questions')->insert([
            'tid' => 2,
            'kat_id' => 1,
            'these1' => 'Wenn ich mich mit Freunden treffen will, machen wir meist einen Termin aus.',
            'these2' => 'Mit Freunden treffe ich mich meist spontan?',
            'ques_id' => 2

        ]);

        DB::table('questions')->insert([
            'tid' => 3,
            'kat_id' => 1,
            'these1' => 'Ich bevorzuge ausgesuchte Bekanntschaften und Gespräche mit Tiefgang.',
            'these2' => 'Mich interessieren neue Bekanntschaften und schnell ins Gespräch zu kommen.',
            'ques_id' => 3

        ]);

        DB::table('questions')->insert([
            'tid' => 4,
            'kat_id' => 1,
            'these1' => 'Ich fahre gerne an ein bekanntes und bewährtes Urlaubsziel zurück. Da weiß ich was ich habe.',
            'these2' => 'Im Urlaub suche ich neue unbekannte Ziele. Mich reizt das Neue.',
            'ques_id' => 4

        ]);

        DB::table('questions')->insert([
            'tid' => 5,
            'kat_id' => 1,
            'these1' => 'Bei uns zuhause gibt es ein paar feste Regeln (Essenszeiten, Familienzeiten, ..), die uns helfen ein erfülltes Familienleben zu haben.',
            'these2' => 'Bei uns zuhause geht es vor allem nach Zweckmäßigkeit. Wer Hunger hat, isst etwas, .. usw.',
            'ques_id' => 5

        ]);

        DB::table('questions')->insert([
            'tid' => 6,
            'kat_id' => 1,
            'these1' => 'Wenn wir in einer großen Gruppe Essen gehen, finde ich es eine schöne Geste, wenn wir die Rechnung durch die Anzahl der Köpfe teilen – auch wenn ich mehr zahle als ich konsumiert habe.',
            'these2' => 'Mir ist es lieber, wenn jeder seine eigene Rechnung zahlt. Ich will weder von anderen „subventioniert“ werden, noch für andere mitzahlen.',
            'ques_id' => 6

        ]);

        DB::table('questions')->insert([
            'tid' => 7,
            'kat_id' => 1,
            'these1' => 'Ich spende gerne und oft.',
            'these2' => 'Wenn Personen unverschuldet in Not geraten helfe ich gezielt.',
            'ques_id' => 7

        ]);

        DB::table('questions')->insert([
            'tid' => 8,
            'kat_id' => 1,
            'these1' => 'Geld ist Mittel zum Zweck. In einer Notlage würde ich Freunden und Angehörigen helfen oder mir helfen lassen.',
            'these2' => 'Ein finanzielles Polster ist wichtig für die Unabhängigkeit. Jeder ist verantwortlich für Notlagen vorzusorgen.',
            'ques_id' => 8

        ]);

        DB::table('questions')->insert([
            'tid' => 9,
            'kat_id' => 1,
            'these1' => 'Manchmal halte ich notwendige Kritik zurück, weil ich Andere nicht verletzen will.',
            'these2' => 'Für eine wirklich gute und stabile Beziehung halte ich es für notwendig, dass ich auch offen die Meinung sage.',
            'ques_id' => 9

        ]);

        DB::table('questions')->insert([
            'tid' => 10,
            'kat_id' => 1,
            'these1' => 'Jeder hat mal einen schlechten Tag. Dafür zeige ich auch Verständnis.',
            'these2' => 'Auch als Privatperson bin ich Rollenwerwartungen ausgesetzt. Schwäche und Rückzug akzeptiere ich nicht.',
            'ques_id' => 10

        ]);

        DB::table('questions')->insert([
            'tid' => 11,
            'kat_id' => 1,
            'these1' => 'Die Welt wird besser, wenn jeder mehr auf seine Mitmenschen eingeht.',
            'these2' => 'Die Welt wird besser, wenn jeder bei sich selbst anfängt, Dinge besser zu machen.',
            'ques_id' => 11

        ]);

        DB::table('questions')->insert([
            'tid' => 12,
            'kat_id' => 1,
            'these1' => 'Vertrautes Miteinander ist mir wichtiger als persönliche Interessen.',
            'these2' => 'Meine persönlichen Hobbies und Interessen sind meine stärktste Kraftquelle.',
            'ques_id' => 12

        ]);

        DB::table('questions')->insert([
            'tid' => 13,
            'kat_id' => 1,
            'these1' => 'Wenn jemand aus meinem Bekanntenkreis ein Problem hat, bin ich oft ein Ansprechpartner, der Trost spendet.',
            'these2' => 'Ich versuche Hilfe zur Selbsthilfe zu geben. Am Ende muss jeder lernen, sich selbst zu helfen.',
            'ques_id' => 13

        ]);

        DB::table('questions')->insert([
            'tid' => 14,
            'kat_id' => 1,
            'these1' => 'Beim Skifahren sollte der Langsamste das Tempo bestimmen.',
            'these2' => 'Es sollten Leistungsgruppen gebildet werden. Man kann sich ja in Abständen treffen.',
            'ques_id' => 14

        ]);

        DB::table('questions')->insert([
            'tid' => 15,
            'kat_id' => 1,
            'these1' => 'Man sollte Dinge ausdiskutieren, bis ein Kompromiss gefunden ist, mit dem Alle leben können.',
            'these2' => 'Wenn nach einer angemessenen Zeit keine Einigung zu erzielen ist, sollte einfach abgestimmt werden.',
            'ques_id' => 15

        ]);

        DB::table('questions')->insert([
            'tid' => 16,
            'kat_id' => 1,
            'these1' => 'Auf Schwächere muss man Rücksicht nehmen.',
            'these2' => 'Auch Schwächere müssen sich bemühen und dürfgen es sich nicht bequem machen.',
            'ques_id' => 16

        ]);

        DB::table('questions')->insert([
            'tid' => 17,
            'kat_id' => 1,
            'these1' => 'Ich vertraue meinem Partner/meinem besten Freund 100% und hinterfrage nicht.',
            'these2' => 'Jeder Mensch ist Versuchungen ausgesetzt. Es ist weltfremd und unverantwortlich, blind zu vertrauen.',
            'ques_id' => 17

        ]);

        DB::table('questions')->insert([
            'tid' => 18,
            'kat_id' => 1,
            'these1' => 'In Liebesfragen orientiere ich mich rein nach meinem Bauchgefühl.',
            'these2' => 'Eine langfristig erfüllende Beziehung ist nur möglich, wenn gleichartige Grundhaltungen und gemeinsame Ziele gegeben sind.',
            'ques_id' => 18

        ]);

        DB::table('questions')->insert([
            'tid' => 19,
            'kat_id' => 1,
            'these1' => 'Wenn ich unerwartet gute Freunde treffe, kann es sein, dass ich mal richtig „abstürze“ und am nächsten Tag zu nichts zu gebrauchen bin.',
            'these2' => 'Dienst ist Dienst und Schnaps ist Schnaps. Ich kann richtig feiern, aber am nächsten Tag stehe ich wie eine „1“ in der Arbeit und erfülle 100% meine Pflicht.',
            'ques_id' => 19

        ]);

        DB::table('questions')->insert([
            'tid' => 20,
            'kat_id' => 1,
            'these1' => 'Im Sport tobe ich mich so richtig aus.',
            'these2' => 'Im Sport habe ich ein Trainingsprogramm und ein klares Ziel.',
            'ques_id' => 20

        ]);

        DB::table('questions')->insert([
            'tid' => 21,
            'kat_id' => 2,
            'these1' => 'Ich bestätige wichtige Sachverhalte gerne schriftlich, z.B. mit einer kurzen E-Mail, vor allem weil man alles nachvollziehen kann und eine sichere Grundlage für die weitere Arbeit hat.',
            'these2' => 'Ich kommuniziere am liebsten mündlich. Die Situationen und Schwerpunkte ändern sich so schnell, dass man oft heute Dinge ganz anders beurteilen muss als gestern.',
            'ques_id' => 1

        ]);

        DB::table('questions')->insert([
            'tid' => 22,
            'kat_id' => 2,
            'these1' => 'Eine Firma kann nur funktionieren, wenn sich die Mitarbeiter an Regeln und Vorgaben halten.',
            'these2' => 'Eine Firma kann nur im Wettbewerb bestehen, wenn jeder Mitarbeiter zu jeder Zeit beurteilt, ob die Einhaltung einer Regel im gegebenen Einzelfall sinnvoll ist.',
            'ques_id' => 2
        ]);

        DB::table('questions')->insert([
            'tid' => 23,
            'kat_id' => 2,
            'these1' => 'In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Teams haben.',
            'these2' => 'In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Einzelnen haben.',
            'ques_id' => 3

        ]);

        DB::table('questions')->insert([
            'tid' => 24,
            'kat_id' => 2,
            'these1' => 'Am liebsten entwickle ich die Anforderungen an meinen Arbeitsbereich in enger Abstimmung und im Dialog mit den Kollegen.',
            'these2' => 'Am liebsten arbeite ich selbstständig, selbstverständlich auf Basis klarer Ziele und koordiniert mit den betroffenen Kollegen.',
            'ques_id' => 4

        ]);

        DB::table('questions')->insert([
            'tid' => 25,
            'kat_id' => 2,
            'these1' => 'Auf private Belange und Belastungen sollte im Beruf Rücksicht genommen werden. Das zahlt sich langfristig aus.',
            'these2' => 'Kurzfristig wird man Rücksicht nehmen, aber generell muss jeder seinen privaten Bereich so regeln, dass er im Beruf voll leistungsfähig ist. Bei Ungleichbehandlung entsteht Neid und Missgunst.',
            'ques_id' => 5

        ]);

        DB::table('questions')->insert([
            'tid' => 26,
            'kat_id' => 2,
            'these1' => 'Es ist eine Bringschuld Kollegen zu helfen, wenn sie nicht zurecht kommen.',
            'these2' => 'Mittel- und langfristig erzieht ständige Hilfe zu Unselbstständigkeit. Es ist eine Holschuld fehlendes Wissen zu ergänzen.',
            'ques_id' => 6

        ]);

        DB::table('questions')->insert([
            'tid' => 27,
            'kat_id' => 2,
            'these1' => 'Ich stecke auch mal zurück, damit Kollegen, die sich nicht so gut in Szene setzen können, zum Zuge kommen.',
            'these2' => 'Ich vertrete die Belange meines Fachbereiches klar und deutlich. Wenn das jeder tut kommen wir zum besten Gesamtergebnis.',
            'ques_id' => 7

        ]);

        DB::table('questions')->insert([
            'tid' => 28,
            'kat_id' => 2,
            'these1' => 'Ich denke, das gesprochene Wort sollte unter Kollegen gelten. Wenn alles aufgeschrieben und abgesichert wird, entsteht eine Misstrauenskultur.',
            'these2' => 'Wichtige Absprachen sollten schriftlich fixiert werden. So wird die Gefahr von Missverständnissen vermindert.',
            'ques_id' => 8

        ]);

        DB::table('questions')->insert([
            'tid' => 29,
            'kat_id' => 2,
            'these1' => 'Für den Erfolg unseres Teams ist entscheidend, dass wir zusammenhalten und „Beziehungskisten“ schnell und gut ausgeräumt werden.',
            'these2' => 'Für den Erfolg unseres Teams ist entscheidend, dass die Ziele klar sind und entsprechende Maßnahmen sauber umgesetzt werden.',
            'ques_id' => 9

        ]);

        DB::table('questions')->insert([
            'tid' => 30,
            'kat_id' => 2,
            'these1' => 'Je nach Tagesform gebe ich mal mehr Gas und mal weniger. Am Ende stimmt natürlich das Ergebnis.',
            'these2' => 'Ich habe eine Vorstellung bis wann ich welchen Teil der Arbeit erledigt haben will und fahre gut damit, mich daran zu halten.',
            'ques_id' => 10

        ]);

        DB::table('questions')->insert([
            'tid' => 31,
            'kat_id' => 3,
            'these1' => 'Die Verantwortlichkeiten sind in unserem Team in Arbeitsplatzbeschreibungen geregelt, die auch aktuell gehalten werden.',
            'these2' => 'Hier entscheidet jeder für sich, was nach aktueller Lage und Aufgabenstellung zu tun ist.',
            'ques_id' => 1

        ]);

        DB::table('questions')->insert([
            'tid' => 32,
            'kat_id' => 3,
            'these1' => 'Bei uns im Team herrscht eher eine Kultur der Sicherheit als der Freiheit, mit allen Vor- und Nachteilen.',
            'these2' => 'Bei uns im Team herrscht eher eine Kultur der Freiheit als der Sicherheit, mit allen Vor- und Nachteilen.',
            'ques_id' => 2

        ]);

        DB::table('questions')->insert([
            'tid' => 33,
            'kat_id' => 3,
            'these1' => 'Bei uns gibt es klare Vorgaben. Unsere Aufgabe ist es, die Entscheidungen sauber umzusetzen.',
            'these2' => 'Jeder ist aufgefordert zu widersprechen, auch dem Chef, wenn ihm etwas nicht plausibel erscheint. Tragfähige Entscheidungen entstehen nur in offenen Auseinandersetzungen.',
            'ques_id' => 3

        ]);

        DB::table('questions')->insert([
            'tid' => 34,
            'kat_id' => 3,
            'these1' => 'Neue Mitarbeiter sollen sich eingliedern und uns unterstützen.',
            'these2' => 'Neue Mitarbeiter sollen bei uns frischen Wind bringen und Routinen in Frage stellen.',
            'ques_id' => 4
        ]);

        DB::table('questions')->insert([
            'tid' => 35,
            'kat_id' => 3,
            'these1' => 'Es gibt eine Art Routine, wann wir anfangen und aufhören mit der Arbeit.',
            'these2' => 'Hier macht jeder seine Arbeit so wie er denkt. Wenn viel anliegt wird viel gearbeitet, wenn es rund läuft, kann man auch früher gehen.',
            'ques_id' => 5

        ]);

        DB::table('questions')->insert([
            'tid' => 36,
            'kat_id' => 3,
            'these1' => 'Die Bitte eines Kollegen um Unterstützung abzulehnen, wäre ein Fauxpas.',
            'these2' => 'Jeder ist grundsätzlich selbst für seine Performance verantwortlich.',
            'ques_id' => 6
        ]);

        DB::table('questions')->insert([
            'tid' => 37,
            'kat_id' => 3,
            'these1' => 'Wir stimmen uns oft ab und wenn jemand hinterher hinkt, bekommt er Unterstützung',
            'these2' => 'Jeder ist für seinen Job verantwortlich und muss sich zunächst mal selbst helfen. Das schließt nicht aus, dass Dinge neu verteilt werden müssen, wenn jemand zuviel Arbeitslast trägt.',
            'ques_id' => 7
        ]);

        DB::table('questions')->insert([
            'tid' => 38,
            'kat_id' => 3,
            'these1' => 'Wenn jemand krank wird, machen wir die Arbeit soweit möglich für ihn mit.',
            'these2' => 'Wenn jemand krank wird, arbeitet er soweit möglich von zuhause oder er muss schauen, wie er wieder Anschluss findet.',
            'ques_id' => 8
        ]);

        DB::table('questions')->insert([
            'tid' => 39,
            'kat_id' => 3,
            'these1' => 'Wenn jemand krank wird, geht er nach Hause, bevor er Andere ansteckt oder es ihn richtig „umhaut“.',
            'these2' => 'Bevor hier jemand wegen Krankheit fehlt, muss er schon auf der Krankenbahre raus getragen werden.',
            'ques_id' => 9
        ]);

        DB::table('questions')->insert([
            'tid' => 40,
            'kat_id' => 3,
            'these1' => 'Wir brauchen keine Regeln für Kaffee oder Spülmaschine. Jeder packt ohne Aufforderung an.',
            'these2' => 'Wir haben klare Verhaltensregeln für das Zusammenleben im Büro/der Arbeit.',
            'ques_id' => 10
        ]);
        DB::table('questions')->insert([
            'tid' => 41,
            'kat_id' => 3,
            'these1' => 'Die Geburtstage der Teammitglieder sind bekannt und werden im angemessenen Rahmen gefeiert.',
            'these2' => 'Geburtstage werden normalerweise nicht gefeiert.',
            'ques_id' => 11
        ]);

        DB::table('questions')->insert([
            'tid' => 42,
            'kat_id' => 3,
            'these1' => 'Es gibt auch einige informelle Kontakte in unserem Team. Gelegentlich gehen wir außerhalb der Arbeit aus.',
            'these2' => 'Nach Dienst geht jeder seinen Weg. Privates und Hobbys kommen eh zu kurz.',
            'ques_id' => 12
        ]);

        DB::table('questions')->insert([
            'tid' => 43,
            'kat_id' => 3,
            'these1' => 'Wir achten darauf, dass jedes Teammitglied die gleiche Wertschätzung erfährt.',
            'these2' => 'Es ist schon klar, wer bei uns die Leistungsträger sind.',
            'ques_id' => 13
        ]);

        DB::table('questions')->insert([
            'tid' => 44,
            'kat_id' => 3,
            'these1' => 'Wenn es jemanden mal schlecht geht, sagt er das und bekommt dann auch Unterstützung.',
            'these2' => 'Wenn man schlecht drauf ist, reißt man sich besser zusammen, sonst wird einem das als Schwäche ausgelegt.',
            'ques_id' => 14
        ]);

        DB::table('questions')->insert([
            'tid' => 45,
            'kat_id' => 3,
            'these1' => 'Die wirklich wichtigen Dinge sind allen klar. Protokolle werden eh nicht gelesen.',
            'these2' => 'Es gibt Protokolle aller wichtigen Sitzungen. Es gibt auch klare Prozedere, z.B. bis wann Tagesordnungspunkte einzureichen sind.',
            'ques_id' => 15
        ]);

        DB::table('questions')->insert([
            'tid' => 46,
            'kat_id' => 3,
            'these1' => 'Bei uns herrscht eher eine Vertrauenskultur. Wenn z.B. kein Kaffee mehr da ist, bringt ihn der mit, der es am ersten bemerkt.',
            'these2' => 'Wir halten solche Dinge fest. Jeder kommt im Umlauf mal dran. Sonst gibt es erfahrungsgemäß früher oder später Ärger.',
            'ques_id' => 16
        ]);

        DB::table('questions')->insert([
            'tid' => 47,
            'kat_id' => 3,
            'these1' => 'Bei uns geht es emotional schon mal auf und ab. Wir versuchen aber immer Lösungen zu finden, mit denen alle leben können.',
            'these2' => 'Wenn wir uneins sind, entscheidet der Chef oder wir stimmen nach angemessener Zeit ab, sonst würde ewig diskutiert.',
            'ques_id' => 17
        ]);

        DB::table('questions')->insert([
            'tid' => 48,
            'kat_id' => 3,
            'these1' => 'Bei uns wird es schon mal laut und emotional, aber wir lachen auch kräftig.',
            'these2' => 'Bei uns geht es formell und geschäftsmäßig zu.',
            'ques_id' => 18
        ]);

        DB::table('questions')->insert([
            'tid' => 49,
            'kat_id' => 3,
            'these1' => 'In Meetings beißen wir uns schon mal an wirklich interessanten Punkten fest. Manchmal sind wir etwas chaotisch.',
            'these2' => 'In Meetings arbeiten wir die Agenda diszipliniert ab. Manchmal sind wir etwas starr.',
            'ques_id' => 19
        ]);

        DB::table('questions')->insert([
            'tid' => 50,
            'kat_id' => 3,
            'these1' => 'Bei der Vielzahl der Absprachen kommt es schon mal vor, dass etwas übersehen wird. Wir steuern dann nach.',
            'these2' => 'Auf Absprachen kann man sich bei uns verlassen. Wir müssen wenig nachsteuern.',
            'ques_id' => 20
        ]);


    }
}
