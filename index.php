<?php
  session_start();
  if (isset ($_SESSION['count'])){
    $_SESSION['count'] += 1;
  }
  else{
    $_SESSION['count'] = 1;
  }
  if ($_SESSION['count'] == 5){
    $_SESSION['count'] = 1;
  }

  echo $_SESSION['count'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>


<body style="font-family: sans-serif">
  <h2>Trial Data Collection: N-back Test</h2>
  <h4>Collect accuracy data and time of response with reference to audio file</h4>

<audio id="1" src="pointer1.wav"></audio>
<audio id="2" src="nopointer2.wav"></audio>
<audio id="3" src="nopointer3.wav"></audio>
<audio id="4" src="pointer4.wav"></audio>


<a href = "https://redcap.vanderbilt.edu/surveys/?s=W34KFPDHMDPRAD8N" id = "survey" target = "_blank" style = "display: none;">Survey Link</a>


<audio id="right" src="good.mp3"></audio>
<audio id="wrong" src="wrong.mp3"></audio>

<img id = "a" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterA.png"  style = "display:none;" onclick = "isGood()">
<img id = "b" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterB.png"  style = "display:none;" onclick = "isGood()">
<img id = "c" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterC.png"  style = "display:none;" onclick = "isGood()">
<img id = "d" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterD.png"  style = "display:none;" onclick = "isGood()">
<img id = "e" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterE.png"  style = "display:none;" onclick = "isGood()">
<img id = "h" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterH.png"  style = "display:none;" onclick = "isGood()">
<img id = "i" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterI.png"  style = "display:none;" onclick = "isGood()">
<img id = "k" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterK.png"  style = "display:none;" onclick = "isGood()">
<img id = "l" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterL.png"  style = "display:none;" onclick = "isGood()">
<img id = "m" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterM.png"  style = "display:none;" onclick = "isGood()">
<img id = "o" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterO.png"  style = "display:none;" onclick = "isGood()">
<img id = "p" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterP.png"  style = "display:none;" onclick = "isGood()">
<img id = "r" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterR.png"  style = "display:none;" onclick = "isGood()">
<img id = "s" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterS.png"  style = "display:none;" onclick = "isGood()">
<img id = "t" src = "https://raw.githubusercontent.com/AnanthSankaralingam/N2-Back/main/letterT.png"  style = "display:none;" onclick = "isGood()">

<video id = "video1" src = "Video 1.mp4" onclick = "isGood()" onended = "document.getElementById('start').style.display = 'block';"></video>
<video id = "video2" src = "Video 2.mp4" onclick = "isGood()" onended = "document.getElementById('start').style.display = 'block';"></video>

<div>
    <button id = "start" onclick="start()" style = "display:none;">Start Audio and Nback Test</button>
</div>
<br>

  <div id = "parent">
    <div id = "container">
      <div id = "rectangle">
        <Button id = "high" onclick = "level = this.id; levelNum = 1;">High</Button>
        <Button id = "medium" onclick = "level = this.id; levelNum = 1;">Medium</Button>
        <Button id = "low" onclick = "level = this.id; levelNum = 1;">Low</Button>
        <Button id = "none" onclick = "level = this.id; levelNum = 1;">None</Button>
        <Button id = "bp" onclick = "dataTransfer(this.id, 1)">Blood Pressure</Button>
        <Button id = "hr" onclick = "dataTransfer(this.id, 1)">Heart Rate</Button>
        <Button id = "temp" onclick = "dataTransfer(this.id, 1)">Temperature</Button>
        <Button id = "ventilation" onclick = "dataTransfer(this.id, 1)">Ventilation</Button>
        <Button id = "perfusion" onclick = "dataTransfer(this.id, 1)">Perfusion</Button>
        <Button id = "drugdelivery" onclick = "dataTransfer(this.id, 1)">Drug Delivery</Button>
        <Button id = "oxygenation" onclick = "dataTransfer(this.id, 1)">Oxygenation</Button>
        <Button id = "failure" onclick = "dataTransfer(this.id, 1)">Failure</Button>
      </div>
      <div id = "centered">Patient 1</div>
    </div>

    <div>
      <Button id = "display_image" onclick = "isGood()">
      </Button>
    </div>

    <div id = "container">
      <div id = "rectangle2">
        <Button id = "high" onclick = "level = this.id; levelNum = 2;">High</Button>
        <Button id = "medium" onclick = "level = this.id; levelNum = 2;">Medium</Button>
        <Button id = "low" onclick = "level = this.id; levelNum = 2;">Low</Button>
        <Button id = "none" onclick = "level = this.id; levelNum = 2;">None</Button>
        <Button id = "bp" onclick = "dataTransfer(this.id, 2)">Blood Pressure</Button>
        <Button id = "hr" onclick = "dataTransfer(this.id, 2)">Heart Rate</Button>
        <Button id = "temp" onclick = "dataTransfer(this.id, 2)">Temperature</Button>
        <Button id = "ventilation" onclick = "dataTransfer(this.id, 2)">Ventilation</Button>
        <Button id = "perfusion" onclick = "dataTransfer(this.id, 2)">Perfusion</Button>
        <Button id = "drugdelivery" onclick = "dataTransfer(this.id, 2)">Drug Delivery</Button>
        <Button id = "oxygenation" onclick = "dataTransfer(this.id, 2)">Oxygenation</Button>
        <Button id = "failure" onclick = "dataTransfer(this.id, 2)">Failure</Button>


      </div>
      <div id = "centered">Patient 2</div>
    </div>
  </div>
<script>
  var video;
  var demo;
  var visitCount = <?php echo $_SESSION['count']?>;
  if (visitCount == 1){
    demo = document.getElementById(visitCount);
    video = document.getElementById('video1');
    document.getElementById('video2').style.display = 'none';
  }
  else if (visitCount == 2){
    demo = document.getElementById(visitCount);
    video = document.getElementById('video2');
    document.getElementById('video1').style.display = 'none';
  }
  else if (visitCount == 3){
    demo = document.getElementById(visitCount);
    video = document.getElementById('video2');
    document.getElementById('video1').style.display = 'none';
  }
  else if (visitCount == 4){
    demo = document.getElementById(visitCount);
    video = document.getElementById('video1');
    document.getElementById('video2').style.display = 'none';
  }

  var runs = 0;
  var rows = ["CSV Data File"];
  var temp1;
  var temp2;
  var displaying = 4;
  var letter;
  var letters = Array(document.getElementById("a"), document.getElementById("b"), document.getElementById("c"), document.getElementById("d"), document.getElementById("e"), document.getElementById("h"), document.getElementById("i"), document.getElementById("k"), document.getElementById("l"), document.getElementById("m"), document.getElementById("o"), document.getElementById("p"), document.getElementById("r"), document.getElementById("s"), document.getElementById("t"));

  function run(){

    const interval = setInterval(() => {
        runs++;
        if (runs == 1){
          temp1 = Math.floor(Math.random()*15);
          display(temp1);
          console.log(temp1);
        }
        else if (runs == 2){
          temp2 = Math.floor(Math.random()*15);
          display(temp2);
          console.log(temp2);
        }
        else if (demo.currentTime > 30){
          demo.pause();
          var csvContent = "";

          rows.forEach(function(row) {
            if (typeof row[0] === "number"){
                        csvContent += row.join(',') + "\n";
                    }
            else{
              csvContent += row + "\n";
            }
          });
          var hiddenElement = document.createElement('a');
          hiddenElement.href = 'data:attachment/text,' + encodeURI(csvContent);
          hiddenElement.target = '_blank';
          hiddenElement.download = 'alarm_trial_data.csv';
          hiddenElement.click();

          clearInterval(interval);
          document.getElementById('survey').style.display = "block";

        }
        else{
          displaying = Math.floor(Math.random()*15);
          letter = letters[displaying];
          letter.style.display = "block";
          window.setTimeout("letter.style.display='none';", 1500);

          setTimeout(() => {
            if (runs % 2 == 0){
              temp2 = displaying;
            }
            else{
              temp1 = displaying;
            }
          }, 1499)

        }
      }, 3000)



    }

  function isGood(){
    console.log(temp1, temp2, displaying);
    if (runs == 0){
        video.play();//error
    }
    else if ((!demo.paused || demo.currentTime) && runs > 2){
      if (runs %2 == 0){
        if (temp2 == displaying){
          document.getElementById('right').play();
          rows.push(['right'])
          console.log("right1");
        }
        else{
          document.getElementById('wrong').play();
          rows.push(['wrong'])
          console.log("wrong1");
        }
      }
      else{
        if (temp1 === displaying){
          document.getElementById('right').play();
          rows.push(["right"])
          console.log("right2");
        }
        else{
          document.getElementById('wrong').play();
          rows.push(["wrong"])
          console.log("wrong2");
        }
      }
    }

  }


  function display(num){
    letter = letters[num];
    letter.style.display = "block";
    window.setTimeout("letter.style.display='none';", 1500);
  }

  function start(){
    video.style.display = "none";
    demo.play();
    run();
  }
  //var random = Math.floor((Math.random()*4)+1);
  var level;
  var levelNum;
  /*var video;
  var demo = document.getElementById(random);
  if (random == 1 || random == 4){
    video = document.getElementById("video1");
    document.getElementById('video2').style.display = 'none';
  }
  else{
    video = document.getElementById("video2")
    document.getElementById('video1').style.display = 'none';
  }*/
  function dataTransfer(button_id, patientNum){
    var timestamp = demo.currentTime;
    var min = Math.floor(timestamp / 60);
    var sec = Math.floor(timestamp %60);

    if (timestamp == 0){
      return;
    }
    var patientNum;
    if (levelNum != patientNum){
      console.log("Can't select buttons from different patients!");
      return;
    }
    rows.push([min, sec, level, button_id, patientNum]);
    console.log(min,"min ",sec, "sec", ", ", level, button_id, ", ",patientNum);

  }

</script>
</body>

</html>
