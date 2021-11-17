function kustuta(){
    var t=document.getElementById("tahvel").getContext("2d")
    t.clearRect(0,0,600,600);//x,y ширина,высота
}

//joon(линия)

function joonistaJoon(){
    var t=document.getElementById("tahvel").getContext("2d")
    //lihtne joon
    t.beginPath();
    t.moveTo(10,110); //x,y
    t.lineTo(100,30);
    t.stroke();

    //joon valge värviga ja laiusega
    t.beginPath();
    t.strokeStyle="white";
    t.lineWidth=3;
    t.moveTo(10,10); //x,y alguspunkt
    t.lineTo(100,30);// x,y lõppunkt
    t.stroke();
}

//ring
function joonistaRing(){
    var  t=document.getElementById("tahvel").getContext("2d")
    //ring
    t.beginPath();
    t.strokeStyle="black";
    t.arc(120,100,50,0, 2*Math.PI, true);//x, y , R. arc-duga
    t.stroke();

    //täidetud ring 2
    t.beginPath();
    t.fillStyle="red";
    t.arc(120,100,25,0, 2*Math.PI, true);//x, y , R. arc-duga
    t.fill();
}

function joonistaRuut(){
    var  t=document.getElementById("tahvel").getContext("2d")
    var laius=document.getElementById("laius").value
    var korgus=document.getElementById("korgus").value
    t.fillStyle="red";
    t.fillRect(80,100,laius,korgus);// x, y, laius,

}

function nogi(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#003333";
    t.fillRect(100,95,30,50)

    t.fillStyle="#003333";
    t.fillRect(131,95,30,50)

    t.fillStyle="#f58b8b";
    t.fillRect(131,143,30,10)

    t.fillStyle="#f58b8b";
    t.fillRect(100,143,30,10)

    t.fillStyle="black";
    t.fillRect(130,95,1,100)

    t.fillStyle="#855757";
    t.fillRect(120,147,10,3)

    t.fillStyle="#855757";
    t.fillRect(100,147,10,3)

    t.fillStyle="#855757";
    t.fillRect(131,147,10,3)

    t.fillStyle="#855757";
    t.fillRect(151,147,10,3)

    t.fillStyle="black";
    t.fillRect(101,95,60,3)

    t.fillStyle="black";
    t.fillRect(122,98,17,3)

    t.fillStyle="black";
    t.fillRect(139,101,5,10)

    t.fillStyle="black";
    t.fillRect(117,101,5,10)

}

function telo(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#003333";
    t.fillRect(100,50,61,45)

    t.fillStyle="#f58b8b";
    t.fillRect(112,50,37,3)

    t.fillStyle="#f58b8b";
    t.fillRect(117,53,27,3)

    t.fillStyle="#f58b8b";
    t.fillRect(123,56,15,3)

    t.fillStyle="#006666";
    t.fillRect(149,50,6,3)

    t.fillStyle="#006666";
    t.fillRect(106,50,6,3)

    t.fillStyle="#006666";
    t.fillRect(111,53,6,3)

    t.fillStyle="#006666";
    t.fillRect(144,53,6,3)

    t.fillStyle="#006666";
    t.fillRect(144,53,6,3)

    t.fillStyle="#006666";
    t.fillRect(138,56,6,3)

    t.fillStyle="#006666";
    t.fillRect(117,56,6,3)

    t.fillStyle="#006666";
    t.fillRect(123,59,15,3)

    t.fillStyle="black";
    t.fillRect(100,50,1,45)

    t.fillStyle="black";
    t.fillRect(159,50,1,45)




}

function sheja(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#f7ada9";
    t.fillRect(111,47,40,3)
}

function golova(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#f09797";
    t.fillRect(105,25,51,23)

}

function lico(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#d39298";
    t.fillRect(119,42,24,3)

    t.fillStyle="#b46d6c";
    t.fillRect(119,39,6,3)

    t.fillStyle="#b46d6c";
    t.fillRect(137,39,6,3)

    t.fillStyle="#f5cbcc";
    t.fillRect(119,36,24,3)

    t.fillStyle="#ffffff";
    t.fillRect(143,33,6,3)

    t.fillStyle="#ffffff";
    t.fillRect(113,33,6,3)

    t.fillStyle="#000001";
    t.fillRect(149,33,7,3)

    t.fillStyle="#000001";
    t.fillRect(105,33,7,3)
}

function povjazka(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#0000cc";
    t.fillRect(105,30,51,3)
}

function ruki(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#003333";
    t.fillRect(70,50,30,45)

    t.fillStyle="#f58b8b";
    t.fillRect(70,95,30,7)

    t.fillStyle="#855757";
    t.fillRect(70,99,10,3)

    t.fillStyle="#855757";
    t.fillRect(90,99,10,3)

    t.fillStyle="#003333";
    t.fillRect(160,50,30,45)

    t.fillStyle="#f58b8b";
    t.fillRect(160,95,30,7)

    t.fillStyle="#855757";
    t.fillRect(160,99,10,3)

    t.fillStyle="#855757";
    t.fillRect(180,99,10,3)

}

function zadnii_plan(){
    var t=document.getElementById("tahvel").getContext("2d")

    t.fillStyle="#009600";
    t.fillRect(0,100,400,100)

    t.fillStyle="#004c00";
    t.fillRect(45,130,6,7)

    t.fillStyle="#004c00";
    t.fillRect(250,120,6,7)

    t.fillStyle="#004c00";
    t.fillRect(60,110,6,7)

    t.fillStyle="#004c00";
    t.fillRect(115,120,6,7)


    t.fillStyle="#664133";
    t.fillRect(220,55,35,60)

    t.fillStyle="#004c00";
    t.fillRect(200,20,110,50)

    t.fillStyle="white";
    t.fillRect(20,20,60,7)

    t.fillStyle="white";
    t.fillRect(38,15,30,7)

    t.fillStyle="white";
    t.fillRect(140,10,60,7)

    t.fillStyle="white";
    t.fillRect(146,14,30,7)
}