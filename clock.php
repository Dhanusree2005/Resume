<!DOCTYPE html>
<html>
    <head>
        <title>Digital Clock</title>
    </head>
    <style>
        h1{color:darkblue;}
        .clock-cont{position:absolute;color:grey;top:30%;left:15%;width: 50%;border-radius:10px;
            padding:5% 10%;box-shadow:0 8px 20px rgba(0,0,0,0.3);text-align: center;font-size: 200px;}
        .hour{color:purple;font-weight: bold;}
        .min{color:lightblue;font-weight: normal;}
        .sec{color:palevioletred;font-weight: lighter;}
    </style>
    <script>
        function updateclock(){
            const clock=document.getElementById('digiclock');
                 now=new Date();
                 hour=now.getHours();
                 min=now.getMinutes();
                 sec=now.getSeconds();
            hours="<span class='hour'>"+hour+"</span>";
            minute="<span class='min'>"+min+"</span>";
            second="<span class='sec'>"+sec+"</span>";

            clock.innerHTML=hours+":"+minute+":"+second;
        }
        setInterval(updateclock,1000);
        updateclock();
    </script>
    <body>
        <h1><span>&#x1f552;</span>Clock</h1>
        <div class="clock-cont">
            <div id="digiclock"></div>
        </div>
    </body>
</html>