<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Weakest Link</title>

  <link rel="stylesheet" href="css/background.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
     <h1 class = "announce"> Stadium Scenario
</h1>
<br>
<h1 id = "roundnum" class = "round"> Round 0
</h1>

<br>
<img id = "result" src = "css/img/sec.jpg" style = "display: block; margin: auto; width: 30%;"/>
<br> <br>
<div id = "instr" style = "margin-left: 50px; margin-right: 25px; font-size:20px; width:1000px; font-size:30px;">
You are all working security at a school event. The event is in a stadium, and each person is responsible for security at a certain entrance. The stadium has many entrances. As a security guard, it is up to you to decide how much effort you want to put into searching people. There is a cost to more intense security. You have five options:
<br>
<strong>Option 1</strong>: No security (Zero cost): probability Bane enters: p = 1,     <br>
<strong>Option 2</strong>: Quick check (Cost = 5):  p = .8,    <br>
<strong>Option 3</strong>: Metal detector (Cost = 10): p = .4,   <br>
<strong>Option 4</strong>: Patdown (Cost = 15): p = .2,  <br>
<strong>Option 5</strong>: Full security screening (Cost = 20): p = 0, <br>

Less intense security increases the probability of a criminal (Bane) will enter the event. It is important to note that security is only as strong as the weakest link. 
<br>
This game will have ten rounds. It is important to keep track of your payoff from each round. Make sure to keep track of your utility:
Good luck!
</div>
<br>
<br>
 <div id="contain1" style = "display:inline-block; width:150px; margin-right:50px; height:100px; margin-left:200px;">
  <span class = "label"> Option 1 </p>
    <div id = "count1" class = "counter">
0
    </div>
  </div>
  <div id="contain2" style = "display:inline-block; width:150px; height:50px;  margin-right:50px; margin-left:50px">
  <span class = "label"> Option 2 </p>
    <div id = "count2" class = "counter">
0
    </div>
  </div>
  <div id="contain3" style = "display:inline-block; width:150px; height:50px; margin-right:50px; margin-left:50px">
  <span class = "label"> Option 3 </p>
    <div id = "count3" class = "counter">
0
    </div>
  </div>
  <div id="contain4" style = "display:inline-block; width:150px; height:50px; margin-right:50px; margin-left:50px">
  <span class = "label"> Option 4 </p>
    <div id = "count4" class = "counter">
0
    </div>
  </div>
  <div id="contain5" style = "display:inline-block; width:150px; height:50px; margin-right:50px; margin-left:50px">
  <span class = "label"> Option 5 </p>
    <div id = "count5" class = "counter">
        0
    </div>
  </div>
    <br>
    <br>
    <br>
    <button id = "end" class="btn btn-outline btn-x1">End Round</button>
    <br>
    <br>
    <button id = "reset" class="btn btn-outline btn-x1">New Round</button>
    <br>
    <br>
    <button id = "show" class="btn btn-outline btn-x1">Show Counters</button>
    <br>
    <br>
    <div id = "about" style = "text-align:center">
      Website by Darren Ting, Quang Luu <br> Design by Sterling Edgar, Ben Ball, Quang Luu, Clare Low, Darren Ting, Michael Shames
    </div>
    
<script type="text/javascript" src="https://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src=https://cdn.pubnub.com/sdk/javascript/pubnub.4.0.11.min.js></script>
  <script>
  round = 0;
min = 100;
pubnub = new PubNub({ publishKey : 'pub-c-4b29479c-3ace-45d9-9daf-07a625cd1052', 
            subscribeKey : 'sub-c-da56adfa-4bc9-11e7-a368-0619f8945a4f', uuid: 'dgd' }); //keys UUID IS IMPORTANT NOW

pubnub.subscribe({
        channels: ['game'] 
    });

  pubnub.addListener({

                message: function(obj){
                    //occurs when channellist gets a new message
                    console.log(obj.message);
                    var num = parseInt(obj.message);
                    if(num!=6 && min>num){
                      min = num;
                    }
                    if(document.getElementById("count1")!=null){

                    if(num==0){
                        var b = document.getElementById("count1")

                        b.innerHTML = 1 + parseInt(b.innerHTML)
                    } else if(num==1){
                        var b = document.getElementById("count2")
                        b.innerHTML = 1 + parseInt(b.innerHTML)
                    }else if(num==3){
                        var b = document.getElementById("count3")
                        b.innerHTML = 1 + parseInt(b.innerHTML)
                    }else if(num==4){
                        var b = document.getElementById("count4")
                        b.innerHTML = 1 + parseInt(b.innerHTML)
                    }else if(num==5){
                        var b = document.getElementById("count5")
                        b.innerHTML = 1 + parseInt(b.innerHTML)
                    }
}
                  
                }}
                );
$("#reset").click(function() {
        console.log("hello")
        pubnub.publish({channel : "game", message : "6"}); //send the message to pubnub
        min = 100;
        round++;
        document.getElementById("count1").innerHTML=0;
        document.getElementById("count2").innerHTML=0;
        document.getElementById("count3").innerHTML=0;
        document.getElementById("count4").innerHTML=0;
        document.getElementById("count5").innerHTML=0;
           document.getElementById("count1").style.visibility = "hidden";
        document.getElementById("count2").style.visibility = "hidden";
        document.getElementById("count3").style.visibility = "hidden";
        document.getElementById("count4").style.visibility = "hidden";
        document.getElementById("count5").style.visibility = "hidden";
        document.getElementById("roundnum").innerHTML = "Round "+round;
        var res = document.getElementById("result");
        res.src = "css/img/sec.jpg";


})
$("#end").click(function() {
        console.log("hello")
        
        var bane = get_chance(min);
           document.getElementById("count1").style.visibility = "visible";
        document.getElementById("count2").style.visibility = "visible";
        document.getElementById("count3").style.visibility = "visible";
        document.getElementById("count4").style.visibility = "visible";
        document.getElementById("count5").style.visibility = "visible";
        document.getElementById("count1").innerHTML= payoff(0, bane);
        document.getElementById("count2").innerHTML=payoff(5, bane);
        document.getElementById("count3").innerHTML=payoff(10, bane);
        document.getElementById("count4").innerHTML=payoff(15, bane);
        document.getElementById("count5").innerHTML=payoff(20, bane);

})
$("#show").click(function() {
        console.log("show")
        document.getElementById("count1").style.visibility = "visible";
        document.getElementById("count2").style.visibility = "visible";
        document.getElementById("count3").style.visibility = "visible";
        document.getElementById("count4").style.visibility = "visible";
        document.getElementById("count5").style.visibility = "visible";

})
function get_chance (number)
{
  var chance = 10 - (2 * number);
  var random = Math.floor((Math.random() * 10) + 1);
  var res = document.getElementById("result");
  if (random <= chance)
  {
    res.src = "css/img/Bane.jpg";
    return 1;
  }else{
     res.src = "css/img/happy.jpg";
    return 0;
  }
}

function payoff (effort, Bane_has_entered)
{
  var payoff;
  if (Bane_has_entered){
    payoff = 0 - effort;
  }else{
    payoff = 25 - effort;
  }

  return payoff;
}


  </script>
</body>
</html>