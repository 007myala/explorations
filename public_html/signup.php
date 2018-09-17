<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <link type="text/css" rel="stylesheet" href="./css/style.css">
        <script type="text/javascript" src="https://apis.google.com/js/client.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="./js/multistepform.js"></script>
    </head>
    <body>
        <!--Add a form to collect a name and password-->
        <h5>SOS: Emotion AI</h5>
        <form id="selfcare" action="./dashboard.php" method="post">
        <br>
            <div class="tab">
                <h1>Tell us a little about yourself :)</h1>
                I am <input type="text" name="name" class="sctxt"> ,<br>
                <br>
                a    <input type="number" name="age" class="sctxt"> year old<br>
                <br>
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="other">Other<br>
            </div>
            <div class="tab">
                <h3>Warning signs: What are you are concerned about?</h3>
                <input type="checkbox" name="warningsigns" value="isolation" oninput="this.className = ''">Isolation<br>
                <input type="checkbox" name="warningsigns" value="drinking" oninput="this.className = ''">Drinking<br>
                <input type="checkbox" name="warningsigns" value="insomnia" oninput="this.className = ''">Insomnia<br>
                <input type="checkbox" name="warningsigns" value="activity" oninput="this.className = ''">Activity Level<br>
                <input type="checkbox" name="warningsigns" value="exercise" oninput="this.className = ''">Exercise<br>
                <input type="checkbox" name="warningsigns" value="overeating" oninput="this.className = ''">Overeating<br>
                <input type="checkbox" name="warningsigns" value="undereating" oninput="this.className = ''">Not eating<br>
            </div>
            <div class="tab">
                <h3>What do you live for?</h3>
                <textarea name="livefor" placeholder="I live for..." class="sctxt"></textarea><br>
            </div>
            <div class="tab">
                <h3>Pick some self-care activities:</h3>
                <textarea name="scactivities" placeholder="When things are hard I like to..." class="sctxt"></textarea><br>
            </div>
            <!--Form navigation buttons-->
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!--Create a circular progress indicator, showing user what part of the process they are in-->
            <div style="text-align:center; margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </body>
</html>

