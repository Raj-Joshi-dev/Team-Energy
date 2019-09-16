

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Persönlichkeitstest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .privew {
            margin-bottom: 20px;
        }
        .questionsBox {
            display: block;
            border: solid 1px #e3e3e3;
            padding: 10px 20px 0px;
            box-shadow: inset 0 0 30px rgba(000,000,000,0.1), inset 0 0 4px rgba(255,255,255,1);
            border-radius: 3px;
            margin: 0 10px;
        }.questions {
             background: #007fbe;
             color: #FFF;
             font-size: 22px;
             padding: 8px 30px;
             font-weight: 300;
             margin: 0 -30px 10px;
             position: relative;
         }
        .questions:after {
            background: #1d68a7 no-repeat left 0;
            display: block;
            position: absolute;
            top: 100%;
            width: 9px;
            height: 7px;
            content: '.';
            left: 0;
            text-align: left;
            font-size: 0;
        }
        .questions:after {
            left: auto;
            right: 0;
            background-position: -10px 0;
        }
        .questions:before, .questions:after {
            background: black;
            display: block;
            position: absolute;
            top: 100%;
            width: 9px;
            height: 7px;
            content: '.';
            left: 0;
            text-align: left;
            font-size: 0;
        }
        .answerList {
            margin-bottom: 15px;
        }


        ol, ul {
            list-style: none;
        }
        .answerList li:first-child {
            border-top-width: 0;
        }

        .answerList li {
            padding: 3px 0;
        }
        .answerList label {
            display: block;
            padding: 6px;
            border-radius: 6px;
            border: solid 1px #dde7e8;
            font-weight: 400;
            font-size: 13px;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
        input[type=checkbox], input[type=radio] {
            margin: 4px 0 0;
            margin-top: 1px;
            line-height: normal;
        }
        .questionsRow {
            background: #dee3e6;
            margin: 0 -20px;
            padding: 10px 20px;
            border-radius: 0 0 3px 3px;
        }
        .button, .greyButton {
            background-color: #f2f2f2;
            color: #888888;
            display: inline-block;
            border: solid 3px #cccccc;
            vertical-align: middle;
            text-shadow: 0 1px 0 #ffffff;
            line-height: 27px;
            min-width: 160px;
            text-align: center;
            padding: 5px 20px;
            text-decoration: none;
            border-radius: 0px;
            text-transform: capitalize;
        }
        .questionsRow span {
            float: right;
            display: inline-block;
            line-height: 30px;
            border: solid 1px #aeb9c0;
            padding: 0 10px;
            background: #FFF;
            color: #007fbe;
        }



    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="privew">
        <div class="questionsBox">
            <div class="questions"><h1>Ich im Team - Privater Bereich</h1></div>
            <div class="answerList"><h3>Vorsicht! Bitte wählen Sie <span style="color: red; "><b>nur eine</b></span> Option aus der unten angegebenen Arbeit aus.</h3></div>
            <div class="questions"><h4>Frage 7</h4></div>
            <div class="questions"><h3>These 1: Vertrautes Miteinander ist mir wichtiger als persönliche Interessen.</h3></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup" value="0" id="answerGroup_0">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup" value="1" id="answerGroup_1">Eher Ja</label>
                </li>
                <li>
            </ul>
        </div>
        <div class="questionsBox">
            <div class="questions"><h3>These 2: Meine persönlichen Hobbies und Interessen sind meine stärktste Kraftquelle.</h3></div>
            <ul class="answerList">
                <li>
                    <label>
                        <input type="radio" name="answerGroup" value="2" id="answerGroup_2">Ja</label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="answerGroup" value="3" id="answerGroup_3">Eher Ja</label>
                </li>
            </ul>
        </div>
        <div class="questionsRow"><a href="{{ route('ques8') }}" class="button" id="nextquestions">Nächste</a><a href="{{ route('ques6') }}" class="button" id="nextquestions">Früher</a><span>7 von 20</span></div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>

