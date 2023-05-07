<!-- This is a therde faaculty of the college to give the dash bord.  -->
<!-- this is a Therde Feed-back for the monika  ma'am (pro:DBMS). -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The FeedBack Management System</title>
    <link href="feedback/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="feedback/css/style.css">
    <link rel="stylesheet" href="feedback/css/slider.css">
    <link href="feedback/css/slick-theme.css" rel="stylesheet">
    <link href="feedback/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<style>
    .button1:hover{
            background-color: yellow;
        }
</style>
<body class="back-login">
    <form class="center-form text-white" method='post' action='feedback3'>
		@csrf
        <div class="col12">
        <input type="hidden" value="{{session('email')}}" name='email'>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <center>
        <img src="feedback/images/mm.jpg" style="height: 200px;">
        </center>
        </div>
        <div class="col-12 space-aut">
            <p>1)How well did Monika Ma'am explain database concepts and management techniques?</p>
            <input type="radio" id="html" name="fed1" value="Excellent">
            Excellent
            <br>
            <input type="radio" id="html" name="fed1" value="Good">
            Good
            <br>
            <input type="radio" id="html" name="fed1" value="Average">
            Average
            <br>
            <input type="radio" id="html" name="fed1" value="Poorly">
            Poorly
        </div>
        <div class="col-12 space-aut">
            <p>2)How effectively did Monika Ma'am provide guidance and support for projects and assignments?</p>
            <input type="radio"  name="fed2" value="Very effectively">
            <label for="Verbal response">Very effectively</label><br>
            <input type="radio"  name="fed2" value="Effectively">
            <label for="written-response">Effectively</label><br>
            <input type="radio"  name="fed2" value="Somewhat effectively">
            <label for="action-response">Somewhat effectively</label><br>
            <input type="radio"  name="fed2" value="Ineffectively">
            <label for="no-response"> Ineffectively</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>3) How approachable and helpful was Monika Ma'am in answering student questions and addressing concerns?</p>
            <input type="radio"  name="fed3" value="Very approachable and helpful">
            <label for="Verbal response">Very approachable and helpful</label><br>
            <input type="radio"  name="fed3" value="Approachable and helpful">
            <label for="written-response">Approachable and helpful</label><br>
            <input type="radio"  name="fed3" value="Somewhat approachable and helpful">
            <label for="action-response">Somewhat approachable and helpful</label><br>
            <input type="radio"  name="fed3" value="Not approachable or helpful">
            <label for="no-response">Not approachable or helpful</label><br>
        </div>
        
        <div class="col-12 space-aut">
            <p>4)How well did Monika Ma'am use real-world examples and scenarios to teach database concepts and applications?</p>
            <input type="radio"  name="fed4" value="Very well">
            <label for="Verbal response">Very well</label><br>
            <input type="radio"  name="fed4" value="Well">
            <label for="action-response">Well</label><br>
            <input type="radio"  name="fed4" value="Average">
            <label for=" Somewhat effective">Average</label><br>
            <input type="radio"  name="fed4" value="Poorly">
            <label for=" Somewhat effective">Poorly</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>5) How satisfied were you with the overall teaching and guidance provided by Monika Ma'am in the Database-Management System course?</p>
            <input type="radio" name="fed5" value="Very satisfied">
            <label for="Verbal response">Very satisfied</label><br>
            <input type="radio" name="fed5" value="Satisfied">
            <label for="written-response">Satisfied</label><br>
            <input type="radio" name="fed5" value="Neutral">
            <label for="Verbal response">Neutral</label><br>
            <input type="radio" name="fed5" value="Dissatisfied">
            <label for="written-response">Dissatisfied</label><br>
            <input type="radio" name="fed5" value="Very dissatisfied">
            <label for="written-response">Very dissatisfied</label><br>
        </div>
        <center>
        <input type="hidden" value="MG" name='faculty'>
        <input class="button1" type="submit" name="submit">
        </center>
    </form>
</body>

</html>