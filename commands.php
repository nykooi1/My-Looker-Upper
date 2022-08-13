<?php

$command = json_decode(file_get_contents('php://input'));

//receive command, check if command exists already

$commands = array();
$commands["OPEN"] = array();
$commands["CUSTOM"] = array();

//$commands["OPEN"]["INSTAGRAM"] = https://instagram.com

$commandsFile = fopen("./commands.json", "w") or die("Unable to open file!");
$commandsTemplate = json_encode($commands);
fwrite($commandsFile, $commandsTemplate);
fclose($commandsFile);

/******

    if it doesn't create a new command
    
    open the json file, add an element to the json array of commands
    
    ie: "CREATE NEW CODING PROJECT"
    
    adds commands["CREATE A NEW CODING PROJECT"] = c9.noah.kim link, cloud9 aws link, 
*/

/******
    
    if it does, then return the link(s) for that specific command

    specifically it will do this by opening the json file with the array of commands, 
    and get the link for that command
    
    ie: commands["OPEN INSTAGRAM"]
    
    returns https://instagram.com

*/


//on the frontend (this.responseText) it will receive the links and use javascript to open them in the browser

?>
