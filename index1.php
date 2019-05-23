<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Object Constructors JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" type="text/css" rel="stylesheet">
    <H1>Learn about the Ecosystems!</H1>
    <?php echo $_SERVER['DOCUMENT_ROOT']?>
</head>

<body onload="onLoaded()">
    <p id="info"></p>

    <!-- <img class="monkeys" src="images/monkies.jpg">
    <img class="bears" src="images/polarbears.jpg">
    <img class="coyote" src="images/coyotes.jpg"> -->
    <!-- Two buttons-->
    <button class="btn1">Rainforest</button>
    <button class="btn2">Tundra</button>
    <button class="btn3">Desert</button>
    <div class="imagesound">
        <img id="image">
        <input type="button" value="PLAY" onclick="playAudio()">
        
        </input>
        <audio id="audio">
                <source src = "monkey2.mp3">
        </audio>
        <audio id = "audio1">
            <source src = "bear_polar.wav">
        </audio>
        <audio id = "audio2">
            <source src = "Coyote.mp3">
        </audio>
    </div>
    <script>

function ecoSystem(name, weather, animal) {
                this.name = name;
                this.weather = weather;
                this.animal = animal;
                this.info = function () {
                    return ' ' + this.name + ' is ' + this.weather + ' and has ' + this.animal;
                };

            }

            // three instances of ecosystems
            var rainForest = new ecoSystem('rainforest', 'humid', 'monkeys');
            var tundra = new ecoSystem('tundra', 'snowy', 'polar bears');
            var desert = new ecoSystem('desert', 'hot', 'coyotes');

        document.addEventListener('click', function (e) {

if (event.target.classList.contains("btn1")) {
    document.getElementById("image").src = "images/monkies.jpg";
    //    console.log('Ecosystem one is a ' +rainForest.name + ' that is ' + rainForest.weather +  ' that has ' + rainForest.animal);
    document.querySelector('#info').innerHTML = 'The ' + rainForest.info();
    // var buttonClicked = this.event.target.value;
    // console.log("Button was " + buttonClicked);
    var audio = document.getElementById("audio");
  playAudio('audio');
    //    document.querySelector('.monkeys').classList.add('active');
    //    removeClass();
    //    document.querySelector('.bears').classList.remove('active');
    //    document.querySelector('.coyote').classList.remove('active');
} else if (event.target.classList.contains("btn2")) {
    document.getElementById("image").src = "images/polarbears.jpg";
    document.querySelector('#info').innerHTML = 'The ' + tundra.info();
    //    document.querySelector('.bears').classList.toggle('active');
} else if (event.target.classList.contains("btn3")) {
    document.getElementById("image").src = "images/coyotes.jpg";
    document.querySelector('#info').innerHTML = 'The ' + desert.info();
    //    document.querySelector('.coyote').classList.toggle('active');

}
//    


});

           function playAudio(parameter) {
            document.querySelector('.btn1');
               var audio = document.getElementById(parameter);
               audio.play();
           }
        //       var audio1 = document.getElementById("audio1");
        //       var audio2 = document.getElementById("audio2");
        //       var elem = document.getElementById("image");
        //       console.log(elem.src);
        //             if (elem.src == "<?php echo $_SERVER['DOCUMENT_ROOT']?>Object-constructors-Ecosystems/images/monkies.jpg") {
        //                 audio.play();
        //             } else if (elem.src == "file:///C:/xampp/htdocs/Object-constructors-Ecosystems/images/polarbears.jpg") {
        //                 audio1.play();
        //             } else if (elem.src == "file:///C:/xampp/htdocs/Object-constructors-Ecosystems/images/coyotes.jpg") {
        //                 audio2.play();
        //             }
               // let audio = document.getElementById("audio");
               // audio.src="monkey2.mp3";
                   // } else if (elem.src == "images/polarbears.jpg") {
                   //     let audio = document.getElementById("audio");
                     //   audio.src = "bear_polar.wav"
                   // }
            //   } else if(document.getElementById('image').src == "polarbears.jpg") {
            //     let audio = document.getElementById("audio")
            //     audio.src = "bear_polar.wav";
                
                
            
            //}

         
        // Copy the index.html and replace everything inside the onLoad function with your own logic
        // Should have a different constructor (e.g. animal, spaceship, or some other real world entity)
        // Should have two seperate instances of the constructor
        // Btn click event should invoke a function of objects and alert a result

        //Try add a 3rd button and object
        function onLoaded() {
            
            // btn1 Click
            // alert ecosystem1 

            //     let activeArray = Array.from(document.querySelectorAll('.active'));

            //     function removeClass() {
            //         activeArray.forEach(node => {
            //             node.classList.remove('active');
            //         })

            //    };
           

            // btn2 Click
            // alert ecosystem2

            //    document.querySelector('#btn2').addEventListener('click', function(e) {
            //    console.log('Ecosystem two is a ' +tundra.name + ' that is ' +  tundra.weather + ' that has ' + tundra.animal);



            //    });
            //  alert ecosystem3

            //    document.querySelector('#btn3').addEventListener('click', function(e) {
            //    console.log('Ecosystem three is a ' + desert.name + ' that is ' + desert.weather + ' that has ' + desert.animal);



            //    });

            //    Try give the contructor a method called getName that returns both the first and last name as one string

            //    console.log('The ecosystem is a' + rainForest.info());

            document.querySelector('#info').innerHTML = 'Click to see the result appear!';

          

        }
    </script>
</body>

</html>