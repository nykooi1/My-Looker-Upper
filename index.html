<!DOCTYPE html>
<!-- chrome://flags/#unsafely-treat-insecure-origin-as-secure -->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
        <style>
            body{
                width: 100vw;
                height: 100vh;
                background-color: black;
                background-image: url("ironman.jpg");
                background-position: center;
                background-size: contain;
                font-family: 'Roboto Mono', monospace;
            }
            .consoleParent{
                background-color: rgb(0,0,0,0.4);
                height: 100vh;
            }
            h1{
                color: white;
            }
            #nykooiConsole{
                padding-top: 20px;
                color: white;
            }
            /* modal styling */
            .modal-dialog{
                max-width: 100vw;
                margin: 0 !important;
            }
            .modal-content{
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.3);
                color: white;
            }
            .modal-body{
                text-align: left;
            }
            #exitButton{
                color: white;
            }
            #commandInput, #linkInput{
                width: 30vw;
            }
            /* console button styling */
            .consoleButton{
                position: absolute;
                top: 15px;
                right: 15px;
            }
        </style>
        <title>Voice Commands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <center>
            <div class="consoleParent">
                <h1 style="padding-top: 15px;">Nykooi</h1>
                <!-- Command Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nykooi Management Console</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span id="exitButton" aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <!-- Select Which Command Type you are adding -->
                          <label for="commandType">Choose a command type:</label>
                          <select name="commandType" id="commandType">
                              <option value="OPEN">Open</option>
                              <option value="CUSTOM">Custom</option>
                            </select>
                          <br>
                          <!-- After selecting the command type, state what you want to open-->
                          <label for="actualCommand">Create your command</label>
                          <input id="commandInput" name="actualCommand" style="text-transform:uppercase;">
                          <br>
                          <!--  After creating your command, add link that you want to connect to the command-->
                          <label for="commandLink">Set the link(s) for your command</label>
                          <input id="linkInput" name="commandLink">
                          <br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- onclick, save the command - run saveCommand() -->
                        <button type="button" class="btn btn-primary" onclick="saveCommand()">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Tabs Management Modal -->
                <!-- TO BE CREATED -->
                
                <!--Logs Responses -->
                <div id="nykooiConsole"></div>
                <!-- Button trigger modal -->
                <button class="consoleButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch Management Console
                </button>
            </div>
        </center>
        <script>
            function nkTrim(x) {
                return x.replace(/^\s+|\s+$/gm,'');
            }
        </script>
        
        <!-- speech recognition handling -->
        <script>
            
            /* save the command to the file as well as the link */
            function saveCommand(){
                
            }
        
        
            /****** NOTES ******
            IDEAS:
            
            can configure a function that will allow me to add my own sites without 
            me having to hardcode every single command.
            
            EXAMPLE: 
            IF first word is open, look at second word, and check if that word 
            is linked to a certain site. If it is open that site. Allow me to manage which sites I have
            through the command bot as well.
            
            in general, all OPEN tab commands should only have one function and be completely responsive
            
            idea 2:
            
            also allow me to search things in google without typing
            
            https://stackoverflow.com/questions/16649167/how-to-launch-a-google-search-in-a-new-tab-or-window-from-javascript
            
            Command would be "look up" or "google" + [question I ask]
            
            notes:
            
            in general most of this responsiveness will have to be based on splicing the string and looking
            for specific keywords
            
            "Real AI", natural language for developers
            convert this to use Wit.AI
            https://discover.bot/bot-talk/guide-to-bot-buiding-frameworks/wit-ai/#:~:text=How%20machine%20learning%20works%20in,existing%20intents%20from%20the%20community.
            
            how to run desktop applications from the browser?
            https://stackoverflow.com/questions/471581/how-to-map-a-custom-protocol-to-an-application-on-the-mac
            
            The 2 main functions I want to implement for this is OPEN [site] and LOOK UP [question]
            For the OPEN [site] the user will most likely make custom commands for that, im not sure how accurate it will be for websites, but I can test that
            For the LOOK UP [question] the user will say "look up" [question] which will then open that link in a new tab showing the options 
            (basically the equivalent of typing in the search bar but without having to go to google, you can even do it from your home screen)
            
            NEW
            pretty much all the commands will be handled in the back end now. 
            There will literally just be one or 2 javascript functions for the voice command link management
            
            if I want to add some type of tab management I am going to have to do that all in the front end,
            but that should be relatively easy, it isn't a "custom command".
            
            need to fix the array of tabs opened by the bot
            
            send the command to php, php will do all the checking
            
            ***** END NOTES *******/
            
            window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
            
            //checks if speak recognition is supported
            if ('SpeechRecognition' in window) {
               console.log("Speech Recognition Supported"); 
            } else {
                console.log("Speech Recognition Not Supported");
            }
            
            //holds the recognition class
            const recognition = new window.SpeechRecognition();
            
            /*
            var msg = new SpeechSynthesisUtterance();
            var voices = window.speechSynthesis.getVoices();
            
            function nkSay(m) {
                console.log(voices);
                  msg.voice = voices[50];
                  msg.text = m;
                  speechSynthesis.speak(msg);
                msg.onend = function(e) {
                    restartService();
                }
            }*/
            

            
            //continously listens for voice input
            recognition.continuous = true;
            
            //holds the number of command given in a given session
            var commandCounter = 0;
            
            function restartService(){
                console.log('Speech recognition service disconnected');
                recognition.start();
                commandCounter = 0;
            }
            
            var nkTabsOpened = [];
            
            //as soon as the speech recognition automatically times out, start it back up again
            recognition.addEventListener('end', restartService);
            
            var nkConsoleLogs = "";
            
            //recognizes commands, registers when the command is over
            recognition.onresult = (event) => {
                
                console.log(event.results);
                
                //holds the original command
                const noahCommand = event.results[commandCounter][0].transcript.trim();
                
                //increment the command counter
                commandCounter++;
                
                //original form of command
                console.log("actual command: " + noahCommand);
            
                //converts the commmand to all upper case
                var upperNoahCommand = noahCommand.toUpperCase();
                
                //splits each word into an element in an array
                var commandArray = upperNoahCommand.split(" ");
                
                console.log(commandArray);
                
                //LOOK UP command (will open tab with google results for your question after "LOOK UP")
                if((commandArray[0] == "LOOK" && commandArray[1] == "UP") || commandArray[0] == "SEARCH"){
                    
                    //stores the actual question
                    var question = "";
                    
                    if(commandArray[0] == "LOOK"){
                        var i = 2;
                    } else {
                        var i = 1;
                    }
                    
                    //builds the questions string (excludes the "LOOK" and "UP")
                    for(i; i < commandArray.length; i++){
                        question += commandArray[i] + " ";
                    }
                    
                    //search the question on Google
                    nkTabsOpened.push(window.open('http://google.com/search?q=' + question.toLowerCase(), '_blank'));
                    
                    //print the interaction to the console
                    nkConsoleLogs += "<div>Nykooi: Searching question on Google!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
                
                
                //GO TO command (will open the specified website in a new tab)
                if(commandArray[0] == "GO" && commandArray[1] == "TO"){
                    
                    //stores the actual question
                    var url = "";
                    
                    //builds the questions string (excludes the "LOOK" and "UP")
                    for(i = 2; i < commandArray.length; i++){
                        url += commandArray[i] + " ";
                    }
                    
                    //search the question on Google
                    nkTabsOpened.push(window.open('https://' + url.toLowerCase(), '_blank'));
                    
                    //print the interaction to the console
                    nkConsoleLogs += "<div>Nykooi: Going to " + url.toLowerCase() + "!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
                
                if(upperNoahCommand == "OPEN A NEW TAB"){
                    //my command
                    console.log("my command: " + upperNoahCommand);
                    
                    //pc response
                    console.log("computer response: " + "Opening a new tab!");
                    
                    //opening a new tab
                    nkTabsOpened.push(window.open("https://www.google.com", '_blank'));
                    
                    nkConsoleLogs += "<div>Nykooi: Opened a new tab!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
                
                
                if(upperNoahCommand == "CLOSE TAB" || upperNoahCommand == "CLOSE ALL TABS"){
                    //close most recent tab
                    if(upperNoahCommand == "CLOSE TAB"){
                        nkTabsOpened[nkTabsOpened.length - 1].close();   
                        nkTabsOpened.pop();    
                    }
                    //close all tabs
                    else {
                        for(i = nkTabsOpened.length - 1; i > 0; i--){
                            nkTabsOpened[i].close();
                            nkTabsOpened.pop();
                        }
                    }
                }
                
                
                
                function nkKill(){
                    //get rid of looping event listener
                    recognition.removeEventListener("end", restartService);
                    
                    //stop listening
                    recognition.stop();
                }
                
                //STOP LISTENING for more commands
                if(upperNoahCommand == "STOP LISTENING"){
                    
                    nkConsoleLogs += "<div>Nykooi: I have stopped listening for further commands</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                    
                    nkKill();
                }
                
                //HANDLES GREETINGS "Good" [morning ,afternoon, evening, night]
                if(commandArray[0] == "GOOD"){
                    
                    //my command
                    console.log("my command: " + upperNoahCommand);
                    
                    //pc response
                    console.log("computer response: " + "Good Morning Noah!");
                    
                    nkConsoleLogs += "<div>Nykooi: Good " + commandArray[1].toLowerCase()  + " Noah!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                    
                    if(upperNoahCommand == "GOOD NIGHT"){
                        nkKill();    
                    }
                }
                
                //If I ask what you are, tell me
                if(upperNoahCommand == "WHAT ARE YOU"){
                    
                    //my command
                    console.log("my question: " + upperNoahCommand);
                    
                    //pc response
                    console.log("computer response: " + "I am a Google Chrome command bot built by Noah Kim");
                    
                    nkConsoleLogs += "<div>Nykooi: I am a Google Chrome command bot system built by Noah Kim</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
                
                if(upperNoahCommand == "OPEN CANVAS"){
                    //my command
                    console.log("my command: " + upperNoahCommand);
                    
                    //pc response
                    console.log("computer response: " + "Opening canvas login portal!");
                    
                    //opening a new tab
                    window.open("http://www.smc.edu/ACG/DistanceEducation/Canvas/Pages/Login.aspx", '_blank');
                    
                    nkConsoleLogs += "<div>Nykooi: Opened Canvas login portal!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
                
                if(upperNoahCommand == "OPEN DREAM TEAM"){
                    //my command
                    console.log("my command: " + upperNoahCommand);
                    
                    //pc response
                    console.log("computer response: " + "Opening dreamteam enviroment!");
                    
                    //opening a new tab
                    window.open("https://us-west-2.console.aws.amazon.com/cloud9/ide/965d2aec28c9478998bc20e7c2d86b41", '_blank');
                
                    nkConsoleLogs += "<div>Nykooi: Opened dreamteam IDE!</div><br>";
                    document.getElementById("nykooiConsole").innerHTML = nkConsoleLogs;
                }
            }
            
             
            
            //initializes the speech recognition
            recognition.start();
        </script>
    </body> 
</html>
