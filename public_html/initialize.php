<!DOCTYPE html>
<html>
    <head>
        <title>Initialize Set-Up Questionnaire</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="./js/multistepform.js"></script>
    </head>
    <body>
        <h1>Initializing the set-up questionnaire</h1>
        <form id="selfcare" action="">
            <h1>Self-care Checklist</h1> 
            <!-- Each tab represents a 'page' of the form-->
            <div class="tab">Isolation:
                <p>How many hours a week of face-to-face interaction do you want?</p>
                <p><input placeholder="Hours..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Drinking:
                <p>How many drinks do you have a day?</p>
                <p><input placeholder="Drinks..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Insomnia:
                <p>How many hours of sleep do you need a night?</p>
                <p><input placeholder="Sleep..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Activity Level:
                <p>How many hours of daily activity do you want?</p>
                <p><input placeholder="Activity..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Exercise:
                <p>How much exercise a week are you aiming for?</p>
                <p><input placeholder="Exercise..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Eating:
                <p>How much food are you eating?</p>
                <p><input placeholder="Eating..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Trigger words:
                <p>How much food are you eating?</p>
                <p><input placeholder="Words..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Trigger thoughts:
                <p>What kind of negative thoughts do you have?</p>
                <p><input placeholder="Thoughts..." oninput="this.className = ''"></p>
            </div>
            <div class="tab">Self-care activities:
                <p>Pick at least one self-care activity you are interested in</p>
                <p><input placeholder="Self-care..." oninput="this.className = ''"></p>
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
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
        <a href="./calibrate.php">Continue</a>
    </body>
</html>
