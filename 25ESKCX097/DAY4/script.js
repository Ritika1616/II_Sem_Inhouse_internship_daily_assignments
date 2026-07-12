const strawberry = document.getElementById("strawberry");
const litchi = document.getElementById("litchi");
const result = document.getElementById("result");

let strawberryCount = 0;
let litchiCount = 0;
let totalClick = 0;

const maxClick = 20;

moveFruits();

function randomPosition(){

let x = Math.random()*(window.innerWidth-150);

let y = Math.random()*(window.innerHeight-180);

return{
x,
y
};

}

function moveFruits(){

let p1 = randomPosition();
let p2 = randomPosition();

strawberry.style.left = p1.x+"px";
strawberry.style.top = p1.y+"px";

litchi.style.left = p2.x+"px";
litchi.style.top = p2.y+"px";

}

function gameOver(){

document.body.style.background="#2f3640";

strawberry.style.display="none";
litchi.style.display="none";

result.style.display="block";

result.innerHTML=`
<h2 style="color:white;">GAME OVER</h2>

<p style="color:#00ff99;">
🍓 Strawberry : ${strawberryCount}
</p>

<p style="color:#ff7675;">
🥭 Litchi : ${litchiCount}
</p>

<p style="color:white;">
Total Click : ${totalClick}
</p>
`;

}

strawberry.onclick=function(){

if(totalClick>=maxClick) return;

strawberryCount++;
totalClick++;

if(totalClick==maxClick){
gameOver();
}
else{
moveFruits();
}

}

litchi.onclick=function(){

if(totalClick>=maxClick) return;

litchiCount++;
totalClick++;

if(totalClick==maxClick){
gameOver();
}
else{
moveFruits();
}

}
