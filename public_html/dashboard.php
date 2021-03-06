<html>
    <head>
        <title>DASHBOARD</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/style.css" >
        <script type="text/javascript" src="./js/multistepform.js"></script>
        <script type="text/javascript" src="https://apis.google.com/js/client.js"></script>
        <script type="text/javascript">
            function auth(){
                var config = {
                    'client_id': '1035453567448-gb8kb90sdk1b6q22lpgpnvdfuml02en2.apps.googleusercontent.com',
                    'redirect_uri': 'http://explorations.dev/initialize.php',
                    'scope': [
                        'https://www.googleapis.com/auth/userinfo.profile',
                        'https://www.googleapis.com/auth/glass.timeline',
                        'https://www.googleapis.com/auth/glass.location'
                        ]
                                                                                                                                                                                      };
                                                                                                                                                                                      gapi.auth.authorize(config, function(){
                    console.log('completed login');
                    console.log(gapi.auth.getToken());
                    });
            }
        </script>
    </head>
    <body>
        <div>
            Welcome <?php echo $_POST["name"];?><br>
        </div>
        <br>
        <div>
            <div class="dashcard cta">
                SOS is tracking your:
                <?php  
                    $wsigns = $_POST["warningsigns"];
                ?>
                <ul>
                    <?php foreach($wsigns as $wsign){ ?>
                    <li><?php echo $wsign; ?></li>
                    <?php } ?>
                </ul>
                <br>
            </div>
            <div class="dashcard cta">
                Need to talk?<br>Reach out to a warrior
                <ol id="wlist">
                    <li class="avail" onclick="requestHelp()">Jane Doe</li>
                    <li class="unavail" onclick="warriorUnavailable()">John Doe</li>
                    <li class="avail" onclick="requestHelp()">Ontario Crisis Center</li>
                </ol>
            </div>
            <div class="dashcard cta">
                EMERGENCY?<br><br><br><br>
                <a class="accessbtns" href="javascript:;"  onclick='getLocation()'>Call 911</a><!--a pop-up that sends your location-->
            </div>
            <div class="dashcard cta">
                Need to get away?<br>Start a virtual hang-out<br><br><br>
                <button onclick="auth();" class="accessbtns">Launch</button>
            </div>
            <div class="dashcard cta">
                I Live For:<br><br>
                <?php 
                    $livefor = $_POST["livefor"]; 
                    $reasons = explode(',', $livefor);
                        
                    foreach($reasons as $reason){
                        echo $reason.'<br>';  
                    }
                ?>
            </div>
        </div>
        <div style="clear:both;width:100%;background-color:red;">
            <div id="emergency"></div>
        </div>
        <script>
            function requestHelp(){
                alert("Warrior has been notified. Hang in there!");
            }
            function warriorUnavailable(){
                alert("Sorry, this warrior is unavaiable. Please try someone else");
            }
        </script>
    </body>
</html>
