<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The FeedBack Management System </title>
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
    <form class="center-form text-white" method='post' action='lastfeedback'>
		@csrf
        <div class="col12">
        <input type="hidden" value="{{session('email')}}" name='email'>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <center>
        <img src="feedback/images/logo.png" style="height: 200px;">
        </center>
        </div>
        <div class="col-12 space-aut">
            <p>1) How well do you feel the faculty member listened to and considered your feedback?</p>
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
            Poor
        </div>
        <div class="col-12 space-aut">
            <p>2) Did the faculty member respond to your feedback in any way?</p>
            <input type="radio"  name="fed2" value="Verbal response">
            <label for="Verbal response">Verbal response</label><br>
            <input type="radio"  name="fed2" value="Written response">
            <label for="written-response">Written response</label><br>
            <input type="radio"  name="fed2" value="Action response">
            <label for="action-response">Action response</label><br>
            <input type="radio"  name="fed2" value="No response">
            <label for="no-response">No response</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>3) Were there any changes in the course or teaching style that you noticed after providing feedback?</p>
            <input type="radio"  name="fed3" value="Changes to course content">
            <label for="Verbal response">Changes to course content</label><br>
            <input type="radio"  name="fed3" value="Changes to teaching style">
            <label for="written-response">Changes to teaching style</label><br>
            <input type="radio"  name="fed3" value="Changes to assignments or assessments">
            <label for="action-response">Changes to assignments or assessments</label><br>
            <input type="radio"  name="fed3" value="No changes">
            <label for="no-response">No changes</label><br>
        </div>
        
        <div class="col-12 space-aut">
            <p>4) Would you feel comfortable providing feedback to this faculty member again in the future?</p>
            <input type="radio"  name="fed4" value="Yes">
            <label for="Verbal response">Yes</label><br>
            <input type="radio"  name="fed4" value="It depends">
            <label for="action-response">It depends</label><br>
            <input type="radio"  name="fed4" value="No">
            <label for="no-response">No</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>5) Do you feel that the feedback management system adequately captures your thoughts and concerns about the faculty member's teaching?</p>
            <input type="radio" name="fed5" value="Yes">
            <label for="Verbal response">Yes</label><br>
            <input type="radio" name="fed5" value="no">
            <label for="written-response">no</label><br>
        </div>
        <center>
        <input type="hidden" value="LJ" name='faculty'>
        <input class="button1" type="submit" name="submit">
        </center>
        </form>
</body>

</html>