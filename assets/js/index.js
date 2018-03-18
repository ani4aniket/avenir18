var portNames = ["coding", "robotics", "photography", "fun", "home", "about", "contact", "sponsors", "register"];

$(function() {

    var nowSlide = 5;

    function slide(x) {
        //alert("hello");
        y = nowSlide;

        if (x != y) {
            if (y > 0) {
                //$('#slide'+y).hide().removeClass('animated fadeInRight').addClass('animated fadeOutLeft');
                $('#menu' + y).removeClass('activeMenu');
            }
            //$('#slide'+x).show().removeClass('animated fadeOutLeft ').addClass('animated fadeInRight');
            $('#menu' + x).addClass('activeMenu');

            coverFlow.flipster('jump', x);

            nowSlide = x;

            var port = portNames[x];

            window.location.hash = port;

        }
    }

    var coverFlow = $('#main').flipster();

    var accessToken = "d40080bd35ab41c9aa69f14baa45f5a1";
    var baseUrl = "https://api.api.ai/v1/";

    if (annyang) {
        // Add our commands to annyang

        annyang.addCommands({ 'coding': function() { slide(0); } });
        annyang.addCommands({ 'go to coding': function() { slide(0); } });
        annyang.addCommands({ 'open coding': function() { slide(0); } });

        annyang.addCommands({ 'robotics': function() { slide(1); } });
        annyang.addCommands({ 'go to robotics': function() { slide(1); } });
        annyang.addCommands({ 'open robotics': function() { slide(1); } });

        annyang.addCommands({ 'photography': function() { slide(2); } });
        annyang.addCommands({ 'go to photography': function() { slide(2); } });
        annyang.addCommands({ 'open photography': function() { slide(2); } });

        annyang.addCommands({ 'fun': function() { slide(3); } });
        annyang.addCommands({ 'go to fun': function() { slide(3); } });
        annyang.addCommands({ 'open fun': function() { slide(3); } });

        annyang.addCommands({ 'home': function() { slide(4); } });
        annyang.addCommands({ 'go to home': function() { slide(4); } });
        annyang.addCommands({ 'open home': function() { slide(4); } });

        annyang.addCommands({ 'about': function() { slide(5); } });
        annyang.addCommands({ 'go to about': function() { slide(5); } });
        annyang.addCommands({ 'open about': function() { slide(5); } });

        annyang.addCommands({ 'contact': function() { slide(6); } });
        annyang.addCommands({ 'go to contact': function() { slide(6); } });
        annyang.addCommands({ 'open contact': function() { slide(6); } });

        annyang.addCommands({ 'sponsors': function() { slide(7); } });
        annyang.addCommands({ 'go to sponsors': function() { slide(7); } });
        annyang.addCommands({ 'open sponsors': function() { slide(7); } });

        annyang.addCommands({ 'register': function() { slide(8); } });
        annyang.addCommands({ 'go to register': function() { slide(8); } });
        annyang.addCommands({ 'open register': function() { slide(8); } });

        annyang.addCallback('resultNoMatch', function(userSaid, commandText, phrases) {

            //curl 'https://api.dialogflow.com/v1/query?v=20170712&query=hello&lang=en&sessionId=4e5c62dd-c47f-4c28-a003-687f3f78fc35&timezone=Asia/Calcutta' -H 'Authorization:Bearer d40080bd35ab41c9aa69f14baa45f5a1'

            $.ajax({
                type: "POST",
                url: baseUrl + "query?v=20170712",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                headers: {
                    "Authorization": "Bearer " + accessToken
                },
                data: JSON.stringify({ query: userSaid[0], lang: "en", sessionId: "somerandomthing" }),
                success: function(data) {
                    //console.log(data);
                    //console.log(data['result']['fulfillment']['speech']);
                    speak(data['result']['fulfillment']['speech'], { pitch: 50, amplitude: 300, speed: 200, wordgap: 5});
                    // setResponse(JSON.stringify(data, undefined, 2));
                },
                error: function() {
                    console.log("error");
                    //setResponse("Internal Server Error");
                }
            });

            annyang.abort();


        });


        annyang.addCallback('resultMatch', function(userSaid, commandText, phrases) {


            annyang.abort();

        });




        // Tell KITT to use annyang
        SpeechKITT.annyang();

        // Define a stylesheet for KITT to use
        SpeechKITT.setStylesheet('//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/1.0.0/themes/flat.css');

        SpeechKITT.rememberStatus(1);


        // Render KITT's interface
        SpeechKITT.vroom();
    }



    var port = window.location.hash;

    if (port == '#coding') {
        slide(0);
    } else if (port == '#robotics') {
        slide(1);
    } else if (port == '#photography') {
        slide(2);
    } else if (port == '#fun') {
        slide(3);
    } else if (port == '#home') {
        slide(4);
    } else if (port == '#about') {
        slide(5);
    } else if (port == '#contact') {
        slide(6);
    } else if (port == '#sponsors') {
        slide(7);
    } else if (port == '#register') {
        slide(8);
    } else {
        slide(4);
    }

});