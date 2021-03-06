<!DOCTYPE html>
<html>
 <title>Weakest Link</title>
  <link rel="stylesheet" href="css/background.css">
<head>
    <!--
<style>
body {
    /* The image used */
    background-color: #A8D0E6;
    /* Set a specific height */
    height: 500px; 
font-family: Arial, Helvetica, sans-serif;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-size:24px
}

.button {
    background-color: #374785;
    border: none;
    color: #fffaf0;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
-->
</head>
<body>

<h2>Choose your level of effort. You’re only able to choose once per round, so choose wisely!</h2>
<div>
After each round, write down your payoff. At the end of the ten rounds, add up all of your payoffs. The person with the highest payoff will receive a prize.
</div>
<br>
<br>
<br>
<button id = "one" class="btn btn-outline btn-x1" style = " display: inline-block; margin: 4px 2px;">No security</button>
<button id = "two" class="btn btn-outline btn-x1" style = " display: inline-block; margin: 4px 2px;">Quick check</button>
<button id = "three" class="btn btn-outline btn-x1" style = " display: inline-block; margin: 4px 2px;">Metal detector</button>
<button id = "four" class="btn btn-outline btn-x1" style = " display: inline-block; margin: 4px 2px;"> Patdown</button>
<button id = "five" class="btn btn-outline btn-x1" style = " display: inline-block; margin: 4px 2px;">Full security screening</button>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src=https://cdn.pubnub.com/sdk/javascript/pubnub.4.0.11.min.js></script>
<script>
if($(document).ready()){
pubnub = new PubNub({ publishKey : 'pub-c-4b29479c-3ace-45d9-9daf-07a625cd1052', 
            subscribeKey : 'sub-c-da56adfa-4bc9-11e7-a368-0619f8945a4f', uuid: 'dgd' }); //keys UUID IS IMPORTANT NOW

pubnub.subscribe({
        channels: ['game'] 
    });
lock = false;
one = document.getElementById("one");
two = document.getElementById("two");
three = document.getElementById("three");
four = document.getElementById("four");
five = document.getElementById("five");
  pubnub.addListener({

                message: function(obj){
                    //occurs when channellist gets a new message
                    console.log(obj.message);
                    var num = parseInt(obj.message);
                    
                    if(num==6){
                       lock = false;
                       one.style.background ='#374785';
                       two.style.background ='#374785';
                       three.style.background ='#374785';
                       four.style.background ='#374785';
                       five.style.background ='#374785';
                    }

}
})
    $("#one").click(function() {
        console.log("hello")
        if(!lock){
        pubnub.publish({channel : "game", message : "0"}); //send the message to pubnub
        document.getElementById("one").style.backgroundColor = "#24305E";
        document.getElementById("two").style.backgroundColor = "#f76c6c";
        document.getElementById("three").style.backgroundColor = "#f76c6c";
        document.getElementById("four").style.backgroundColor = "#f76c6c";
        document.getElementById("five").style.backgroundColor = "#f76c6c";
        lock = true;
    }

})
    $("#two").click(function() {
    console.log("tow");
    if(!lock){
        pubnub.publish({channel : "game", message : "1"}) //send the message to pubnub
        document.getElementById("two").style.backgroundColor = "#24305E";
        document.getElementById("one").style.backgroundColor = "#f76c6c";
        document.getElementById("three").style.backgroundColor = "#f76c6c";
        document.getElementById("four").style.backgroundColor = "#f76c6c";
        document.getElementById("five").style.backgroundColor = "#f76c6c";
        lock = true;
}
})
    $("#three").click(function() {
    console.log("thre:");
    if(!lock){
        pubnub.publish({channel : "game", message : "3"}) //send the message to pubnub
         document.getElementById("three").style.backgroundColor = "#24305E";
        document.getElementById("one").style.backgroundColor = "#f76c6c";
        document.getElementById("two").style.backgroundColor = "#f76c6c";
        document.getElementById("four").style.backgroundColor = "#f76c6c";
        document.getElementById("five").style.backgroundColor = "#f76c6c";
        lock = true;
}
})
    $("#four").click(function() {
    console.log("fou");
    if(!lock){
        pubnub.publish({channel : "game", message : "4"}) //send the message to pubnub
       document.getElementById("four").style.backgroundColor = "#24305E";
        document.getElementById("one").style.backgroundColor = "#f76c6c";
        document.getElementById("three").style.backgroundColor = "#f76c6c";
        document.getElementById("two").style.backgroundColor = "#f76c6c";
        document.getElementById("five").style.backgroundColor = "#f76c6c";
        lock = true;
}
})
    $("#five").click(function() {
    console.log("fiv");
    if(!lock){
        pubnub.publish({channel : "game", message : "5"}) //send the message to pubnub
        document.getElementById("five").style.backgroundColor = "#24305E";
        document.getElementById("one").style.backgroundColor = "#f76c6c";
        document.getElementById("three").style.backgroundColor = "#f76c6c";
        document.getElementById("four").style.backgroundColor = "#f76c6c";
        document.getElementById("two").style.backgroundColor = "#f76c6c";
        lock = true;
}
})
}



</script>
</body>
</html>