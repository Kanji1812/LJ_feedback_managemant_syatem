<!-- This is a First faaculty of the college to give the dash bord.  -->
<!-- this is a First Feed back for the saylesh sir thakker(pro:communication skill). -->
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
    <style>
        .ff 
        {
            color:white;
            font-size:70px;
            margin-top:-80px;
        }
        .button1:hover{
            background-color: yellow;
        }
        </style>
</head>

<body class="back-login">
    <center > <h1 class="ff">FeedBack</h1></center>
    <form class="center-form text-white" method='post' action='feedback1'>
		@csrf
        <div class="col12">
        <input type="hidden" value="{{session('email')}}" name='email'>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <center>
        <img src="feedback/images/st.jpg" style="height: 200px;"><br>
        <label style='color:red'><h3>Communication Skill</h3></label><br>
        </center>
        </div>
        <div class="col-12 space-aut">
            <p>1)How would you rate the Communication skill faculty's ability to explain complex concepts in a simple manner?
                <br>
            </p>
            <input type="radio" id="html" name="fed1" value="excellent" required>
            Excellent
            <br>
            <input type="radio" id="html" name="fed1" value="good">
            Good
            <br>
            <input type="radio" id="html" name="fed1" value="avrage">
            Average
            <br>
            <input type="radio" id="html" name="fed1" value="Poorly">
            Poorly
        </div>
        <div class="col-12 space-aut">
            <p>2) How well did the Communication skill faculty engage with the students during the lectures?</p>
            <input type="radio"  name="fed2" value="Very well" required>
            <label for="Verbal response">Very well</label><br>
            <input type="radio"  name="fed2" value="Well">
            <label for="written-response">Well</label><br>
            <input type="radio"  name="fed2" value="average">
            <label for="action-response">Average</label><br>
            <input type="radio"  name="fed2" value="Poorly">
            <label for="no-response">Poorly</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>3) How would you rate the Communication skill faculty's ability to respond to student questions and feedback?</p>
            <input type="radio"  name="fed3" value="Excellent" required>
            <label for="Verbal response">Excellent</label><br>
            <input type="radio"  name="fed3" value="Good">
            <label for="written-response">Good</label><br>
            <input type="radio"  name="fed3" value="Average">
            <label for="action-response">Average</label><br>
            <input type="radio"  name="fed3" value="Poorly">
            <label for="no-response">Poorly</label><br>
        </div>
        
        <div class="col-12 space-aut">
            <p>4) How effective were the Communication skill faculty's use of teaching aids such as presentations and videos?</p>
            <input type="radio"  name="fed4" value="Very effective" required>
            <label for="Verbal response">Very effective</label><br>
            <input type="radio"  name="fed4" value="Effective">
            <label for="action-response">Effective</label><br>
            <input type="radio"  name="fed4" value="No">
            <label for=" Somewhat effective">No</label><br>
            <input type="radio"  name="fed4" value="Ineffective">
            <label for=" Somewhat effective">Ineffective</label><br>
        </div>

        <div class="col-12 space-aut">
            <p>5) How satisfied were you with the overall teaching and communication skills of the Communication skill faculty?</p>
            <input type="radio" name="fed5" value="Very satisfied" required>
            <label for="Verbal response"> Very satisfied</label><br>
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
        <input type="hidden" value="ST" name='faculty'>
        <input class="button1" type="submit" name="submit">
    </center>
    </form>
</body>

</html>