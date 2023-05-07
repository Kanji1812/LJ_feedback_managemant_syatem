<!-- This is a Fourth faaculty of the college to give the dash bord.  -->
<!-- this is a Fourth Feed back for the priyank maam (Linux and laravel). -->
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
    <form class="center-form text-white" method='post' action='feedback4'>
		@csrf
        <div class="col12">
        <input type="hidden" value="{{session('email')}}" name='email'>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <center>
        <img src="feedback/images/pj.png" style="height: 200px;">
        </center>
        </div>
        <div class="col-12 space-aut">
            <p>1)How well did Priyanka Ma'am prepare for each class and deliver the course material?</p>
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
            <p>2) How effectively did Priyanka Ma'am use visual aids and resources to teach Ubuntu and Laravel concepts?</p>
            <input type="radio"  name="fed2" value="Very effectively">
            <label for="Verbal response">Very effectively</label><br>
            <input type="radio"  name="fed2" value="Effectively">
            <label for="written-response">Effectively</label><br>
            <input type="radio"  name="fed2" value="Somewhat effectively">
            <label for="action-response">Somewhat effectively</label><br>
            <input type="radio"  name="fed2" value="Ineffectively">
            <label for="no-response">Ineffectively</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>3)How helpful were the online resources and materials provided by Priyanka Ma'am, such as slides, videos, and code samples?</p>
            <input type="radio"  name="fed3" value="Very helpful">
            <label for="Verbal response">Very helpful</label><br>
            <input type="radio"  name="fed3" value="Helpful">
            <label for="written-response">Helpful</label><br>
            <input type="radio"  name="fed3" value="Somewhat helpful">
            <label for="action-response">Somewhat helpful</label><br>
            <input type="radio"  name="fed3" value="Not helpful">
            <label for="no-response">Not helpful</label><br>
        </div>
        
        <div class="col-12 space-aut">
            <p>4)How well did Priyanka Ma'am explain Ubuntu and Laravel syntax and concepts?</p>
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
            <p>5) How effective was Priyanka Ma'am in providing feedback and constructive criticism on student work?</p>
            <input type="radio" name="fed5" value="Very effective">
            <label for="Verbal response">Very effective</label><br>
            <input type="radio" name="fed5" value="Effective">
            <label for="written-response">Effective</label><br>
            <input type="radio" name="fed5" value="Somewhat effective">
            <label for="Verbal response">Somewhat effective</label><br>
            <input type="radio" name="fed5" value="Ineffective">
            <label for="written-response">Ineffective</label><br>
        </div>
        <!-- This is a faculty name or subject. -->
        <center>
        <input type="hidden" value="PM" name='faculty'>
        <input class="button1" type="submit" name="submit">
        </center>
    </form>
</body>

</html>