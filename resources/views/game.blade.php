<!DOCTYPE html>
<html>
    <head>
        <title>j goal 2015!</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <SCRIPT LANGUAGE="JavaScript">
        <!-- Original:  Maximilian Stocker (maxstocker@reallyusefulcomputing.com) -->



        <!-- Begin
        var x = "/img/x.jpg";
        // Location of where you uploaded your site's x.jpg image

        var o = "/img/o.jpg";
        // Location of where you uploaded your site's o.jpg image

        var blank = "/img/blank.jpg";
        // Location of where you uploaded your site's /img/blank.jpg image

        var pause = 0;
        var all = 0;
        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var e = 0;
        var f = 0;
        var g = 0;
        var h = 0;
        var i = 0;
        var temp="";
        var ok = 0;
        var cf = 0;
        var choice=9;
        var aRandomNumber = 0;
        var comp = 0;
        var t = 0;
        var wn = 0;
        var ls = 0;
        var ts = 0;
        function help() {
        alert("Welcome to Tic-Tac-Toe!  You play as the X's and the computer is the O's.  Select the square you want to put your X into by clicking them.  You cannot occupy a square that is already occupied. The first player to get three squares in a row wins.  Good Luck!!")
        }
        function logicOne() {
        if ((a==1)&&(b==1)&&(c==1)) all=1;
        if ((a==1)&&(d==1)&&(g==1)) all=1;
        if ((a==1)&&(e==1)&&(i==1)) all=1;
        if ((b==1)&&(e==1)&&(h==1)) all=1;
        if ((d==1)&&(e==1)&&(f==1)) all=1;
        if ((g==1)&&(h==1)&&(i==1)) all=1;
        if ((c==1)&&(f==1)&&(i==1)) all=1;
        if ((g==1)&&(e==1)&&(c==1)) all=1;
        if ((a==2)&&(b==2)&&(c==2)) all=2;
        if ((a==2)&&(d==2)&&(g==2)) all=2;
        if ((a==2)&&(e==2)&&(i==2)) all=2;
        if ((b==2)&&(e==2)&&(h==2)) all=2;
        if ((d==2)&&(e==2)&&(f==2)) all=2;
        if ((g==2)&&(h==2)&&(i==2)) all=2;
        if ((c==2)&&(f==2)&&(i==2)) all=2;
        if ((g==2)&&(e==2)&&(c==2)) all=2;
        if ((a != 0)&&(b != 0)&&(c != 0)&&(d != 0)&&(e != 0)&&(f != 0)&&(g != 0)&&(h != 0)&&(i != 0)&&(all == 0)) all = 3;
        }
        function logicTwo() {
        if ((a==2)&&(b==2)&&(c== 0)&&(temp=="")) temp="C";
        if ((a==2)&&(b== 0)&&(c==2)&&(temp=="")) temp="B";
        if ((a== 0)&&(b==2)&&(c==2)&&(temp=="")) temp="A";
        if ((a==2)&&(d==2)&&(g== 0)&&(temp=="")) temp="G";
        if ((a==2)&&(d== 0)&&(g==2)&&(temp=="")) temp="D";
        if ((a== 0)&&(d==2)&&(g==2)&&(temp=="")) temp="A";
        if ((a==2)&&(e==2)&&(i== 0)&&(temp=="")) temp="I";
        if ((a==2)&&(e== 0)&&(i==2)&&(temp=="")) temp="E";
        if ((a== 0)&&(e==2)&&(i==2)&&(temp=="")) temp="A";
        if ((b==2)&&(e==2)&&(h== 0)&&(temp=="")) temp="H";
        if ((b==2)&&(e== 0)&&(h==2)&&(temp=="")) temp="E";
        if ((b== 0)&&(e==2)&&(h==2)&&(temp=="")) temp="B";
        if ((d==2)&&(e==2)&&(f== 0)&&(temp=="")) temp="F";
        if ((d==2)&&(e== 0)&&(f==2)&&(temp=="")) temp="E";
        if ((d== 0)&&(e==2)&&(f==2)&&(temp=="")) temp="D";
        if ((g==2)&&(h==2)&&(i== 0)&&(temp=="")) temp="I";
        if ((g==2)&&(h== 0)&&(i==2)&&(temp=="")) temp="H";
        if ((g== 0)&&(h==2)&&(i==2)&&(temp=="")) temp="G";
        if ((c==2)&&(f==2)&&(i== 0)&&(temp=="")) temp="I";
        if ((c==2)&&(f== 0)&&(i==2)&&(temp=="")) temp="F";
        if ((c== 0)&&(f==2)&&(i==2)&&(temp=="")) temp="C";
        if ((g==2)&&(e==2)&&(c== 0)&&(temp=="")) temp="C";
        if ((g==2)&&(e== 0)&&(c==2)&&(temp=="")) temp="E";
        if ((g== 0)&&(e==2)&&(c==2)&&(temp=="")) temp="G";
        }
        function logicThree() {
        if ((a==1)&&(b==1)&&(c==0)&&(temp=="")) temp="C";
        if ((a==1)&&(b==0)&&(c==1)&&(temp=="")) temp="B";
        if ((a==0)&&(b==1)&&(c==1)&&(temp=="")) temp="A";
        if ((a==1)&&(d==1)&&(g==0)&&(temp=="")) temp="G";
        if ((a==1)&&(d==0)&&(g==1)&&(temp=="")) temp="D";
        if ((a==0)&&(d==1)&&(g==1)&&(temp=="")) temp="A";
        if ((a==1)&&(e==1)&&(i==0)&&(temp=="")) temp="I";
        if ((a==1)&&(e==0)&&(i==1)&&(temp=="")) temp="E";
        if ((a==0)&&(e==1)&&(i==1)&&(temp=="")) temp="A";
        if ((b==1)&&(e==1)&&(h==0)&&(temp=="")) temp="H";
        if ((b==1)&&(e==0)&&(h==1)&&(temp=="")) temp="E";
        if ((b==0)&&(e==1)&&(h==1)&&(temp=="")) temp="B";
        if ((d==1)&&(e==1)&&(f==0)&&(temp=="")) temp="F";
        if ((d==1)&&(e==0)&&(f==1)&&(temp=="")) temp="E";
        if ((d==0)&&(e==1)&&(f==1)&&(temp=="")) temp="D";
        if ((g==1)&&(h==1)&&(i==0)&&(temp=="")) temp="I";
        if ((g==1)&&(h==0)&&(i==1)&&(temp=="")) temp="H";
        if ((g==0)&&(h==1)&&(i==1)&&(temp=="")) temp="G";
        if ((c==1)&&(f==1)&&(i==0)&&(temp=="")) temp="I";
        if ((c==1)&&(f==0)&&(i==1)&&(temp=="")) temp="F";
        if ((c==0)&&(f==1)&&(i==1)&&(temp=="")) temp="C";
        if ((g==1)&&(e==1)&&(c==0)&&(temp=="")) temp="C";
        if ((g==1)&&(e==0)&&(c==1)&&(temp=="")) temp="E";
        if ((g==0)&&(e==1)&&(c==1)&&(temp=="")) temp="G";
        }
        function clearOut() {
        document.game.you.value="0";
        document.game.computer.value="0";
        document.game.ties.value="0";
        }
        function checkSpace() {
        if ((temp=="A")&&(a==0)) {
        ok=1;
        if (cf==0) a=1;
        if (cf==1) a=2;
        }
        if ((temp=="B")&&(b==0)) {
        ok=1;
        if (cf==0) b=1;
        if (cf==1) b=2;
        }
        if ((temp=="C")&&(c==0)) {
        ok=1;
        if (cf==0) c=1;
        if (cf==1) c=2;
        }
        if ((temp=="D")&&(d==0)) {
        ok=1;
        if (cf==0) d=1;
        if (cf==1) d=2;
        }
        if ((temp=="E")&&(e==0)) {
        ok=1;
        if (cf==0) e=1;
        if (cf==1) e=2;
        }
        if ((temp=="F")&&(f==0)) {
        ok=1
        if (cf==0) f=1;
        if (cf==1) f=2;
        }
        if ((temp=="G")&&(g==0)) {
        ok=1
        if (cf==0) g=1;
        if (cf==1) g=2;
        }
        if ((temp=="H")&&(h==0)) {
        ok=1;
        if (cf==0) h=1;
        if (cf==1) h=2;
        }
        if ((temp=="I")&&(i==0)) {
        ok=1;
        if (cf==0) i=1;
        if (cf==1) i=2;
        }
        }
        function yourChoice(chName) {
        pause = 0;
        if (all!=0) ended();
        if (all==0) {
        cf = 0;
        ok = 0;
        temp=chName;
        checkSpace();
        if (ok==1) {
        document.images[chName].src = x;
        }
        if (ok==0)taken();
        process();
        if ((all==0)&&(pause==0)) myChoice();
           }
        }
        function taken() {
        alert("That square is already occupied.  Please select another square.")
        pause=1;
        }
        function myChoice() {
        temp="";
        ok = 0;
        cf=1;
        logicTwo();
        logicThree();
        checkSpace();
        while(ok==0) {
        aRandomNumber=Math.random()
        comp=Math.round((choice-1)*aRandomNumber)+1;
        if (comp==1) temp="A";
        if (comp==2) temp="B";
        if (comp==3) temp="C";
        if (comp==4) temp="D";
        if (comp==5) temp="E";
        if (comp==6) temp="F";
        if (comp==7) temp="G";
        if (comp==8) temp="H";
        if (comp==9) temp="I";
        checkSpace();
        }
        document.images[temp].src= o;
        process();
        }
        function ended() {
        alert("The game has already ended. To play a new game click the Play Again button.")
        }
        function process() {
        logicOne();
        if (all==1){ alert("You won, congratulations!"); wn++; }
        if (all==2){ alert("Gotcha!  I win!"); ls++; }
        if (all==3){ alert("We tied."); ts++; }
        if (all!=0) {
        document.game.you.value = wn;
        document.game.computer.value = ls;
        document.game.ties.value = ts;
           }
        }
        function playAgain() {
        if (all==0) {
        if(confirm("This will restart the game and clear all the current scores. OK?")) reset();
        }
        if (all>0) reset();
        }
        function reset() {
        all = 0;
        a = 0;
        b = 0;
        c = 0;
        d = 0;
        e = 0;
        f = 0;
        g = 0;
        h = 0;
        i = 0;
        temp="";
        ok = 0;
        cf = 0;
        choice=9;
        aRandomNumber = 0;
        comp = 0;
        document.images.A.src= blank;
        document.images.B.src= blank;
        document.images.C.src= blank;
        document.images.D.src= blank;
        document.images.E.src= blank;
        document.images.F.src= blank;
        document.images.G.src= blank;
        document.images.H.src= blank;
        document.images.I.src= blank;
        if (t==0) { t=2; myChoice(); }
        t--;
        }
        //  End -->
        </script>


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-67916027-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
    <h3>Tic Tac Toe!</h3>
    <center>
    <form name=game>
    <table border=0>
    <td>
    <table border=1>
    <tr>
    <td><a href="javascript:yourChoice('A')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=A alt="Top-Left"></a></td>
    <td><a href="javascript:yourChoice('B')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=B alt="Top-Center"></a></td>
    <td><a href="javascript:yourChoice('C')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=C alt="Top-Right"></a></td>
    </tr>
    <tr>
    <td><a href="javascript:yourChoice('D')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=D alt="Middle-Left"></a></td>
    <td><a href="javascript:yourChoice('E')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=E alt="Middle-Center"></a></td>
    <td><a href="javascript:yourChoice('F')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=F alt="Middle-Right"></a></td>
    </tr>
    <tr>
    <td><a href="javascript:yourChoice('G')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=G alt="Bottom-Left"></a></td>
    <td><a href="javascript:yourChoice('H')"><img src="/img/blank.jpg" border=0 height=100 width=100 name=H alt="Bottom-Center"></a></td>
    <td><a href="javascript:yourChoice('I')"><img src="/img/blank.jpg" border=0 height=100 width=100  name=I alt="Bottom-Right"></a></td>
    </tr>
    </table>
    </td>
    <td>
    <table>
    <tr><td><input type=text size=5 name=you></td><td>You</td></tr>
    <tr><td><input type=text size=5 name=computer></td><td>Computer</td></tr>
    <tr><td><input type=text size=5 name=ties></td><td>Ties</td></tr>
    </table>
    </td>
    </table>
    <input type=button value="Play Again" onClick="playAgain();">
    &nbsp;&nbsp;
    <input type=button value="Game Help" onClick="help();">
    &nbsp;&nbsp;
    <input type=button value="Quit Game" onClick="quitGame();">
    </form>
    </center>
    </body>
</html>