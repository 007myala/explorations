<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
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
        <!--Enter a form here to get the user's name and password-->
        <button onclick="auth();">Authorize</button>
    </body>
</html>
