const leftImages = document.querySelectorAll(".left-cats");
let leftCatName = document.getElementById("left-cat-name");
let leftCatAge = document.getElementById("left-cat-age");
let leftCatInfo = document.getElementById("left-cat-info");
let leftCatWins = document.getElementById("left-cat-wins");
let leftCatLoss = document.getElementById("left-cat-loss");
let leftCatImg = document.getElementById("left-cat-img");

const rightImages = document.querySelectorAll(".right-cats");
let rightCatName = document.getElementById("right-cat-name");
let rightCatAge = document.getElementById("right-cat-age");
let rightCatInfo = document.getElementById("right-cat-info");
let rightCatWins = document.getElementById("right-cat-wins");
let rightCatLoss = document.getElementById("right-cat-loss");
let rightCatImg = document.getElementById("right-cat-img");

let fightButton = document.getElementById("generateFight");
fightButton.disabled = true;

let rightFighterNum = 0;
let leftFighterNum = 0;

let randomButton = document.getElementById("randomFight");


randomButton.addEventListener('click', randomBtnClick);
function randomBtnClick(event) {
    getRandomFighters();

};


function disableFightButton(){
    if(leftCatName.innerHTML == "Cat Name" || rightCatName.innerHTML == "Cat Name"){
        fightButton.disabled = true;
    } else {
        fightButton.disabled = false;
    }
}

fightButton.addEventListener('click', handleClick);
function handleClick(event) {
    getRandomFighters();
};

leftImages.forEach(element => {
    element.addEventListener('click', handleClick);
    function handleClick(event) {
        if(element.alt == "Figter Box 1" && rightFighterNum != 1){
            var xd = element.parentElement.dataset.info
            console.log(JSON.parse(xd).name)
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 1;
        } else if(element.alt == "Figter Box 2" && rightFighterNum != 2){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 2;
        } else if(element.alt == "Figter Box 3" && rightFighterNum != 3){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 3;
        } else if(element.alt == "Figter Box 4" && rightFighterNum != 4){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 4;
        } else if(element.alt == "Figter Box 5" && rightFighterNum != 5){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 5;
        } else if(element.alt == "Figter Box 6" && rightFighterNum != 6){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 6;
        }
        disableFightButton();
    }
});

rightImages.forEach(element => {
    element.addEventListener('click', handleClick);
    function handleClick(event) {
        if(element.alt == "Figter Box 1" && leftFighterNum != 1){
            var xd = element.parentElement.dataset.info
            console.log(JSON.parse(xd).name)
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 1;
        } else if(element.alt == "Figter Box 2" && leftFighterNum != 2){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 2;
        } else if(element.alt == "Figter Box 3" && leftFighterNum != 3){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 3;
        } else if(element.alt == "Figter Box 4" && leftFighterNum != 4){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 4;
        } else if(element.alt == "Figter Box 5" && leftFighterNum != 5){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 5;
        } else if(element.alt == "Figter Box 6" && leftFighterNum != 6){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 6;
        }
        disableFightButton();
    }
});

function getRandomFighters() {
    var randomLeft = Math.floor(Math.random() * 6) + 1;
    var randomRight = Math.floor(Math.random() * 6) + 1;
    while(randomLeft == randomRight) {
        randomLeft = Math.floor(Math.random() * 6) + 1;
        randomRight = Math.floor(Math.random() * 6) +1;
    }
    console.log(""+randomRight)
    console.log(""+randomLeft)
    leftImages.forEach(element => {
        if(element.alt == "Figter Box 1" && randomLeft == 1){
            var xd = element.parentElement.dataset.info
            console.log(JSON.parse(xd).name)
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 1;
        } else if(element.alt == "Figter Box 2" && randomLeft == 2){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 2;
        } else if(element.alt == "Figter Box 3" && randomLeft == 3){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 3;
        } else if(element.alt == "Figter Box 4" && randomLeft == 4){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 4;
        } else if(element.alt == "Figter Box 5" && randomLeft == 5){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 5;
        } else if(element.alt == "Figter Box 6" && randomLeft == 6){
            var xd = element.parentElement.dataset.info
            leftCatName.innerHTML = JSON.parse(xd).name;
            leftCatAge.innerHTML = JSON.parse(xd).age;
            leftCatInfo.innerHTML = JSON.parse(xd).catInfo;
            leftCatWins.innerHTML = JSON.parse(xd).record.wins;
            leftCatLoss.innerHTML = JSON.parse(xd).record.loss;
            leftCatImg.src = element.src;
            leftFighterNum = 6;
        }
        disableFightButton();
    })
    
    rightImages.forEach(element => {
        if(element.alt == "Figter Box 1" && randomRight == 1){
            var xd = element.parentElement.dataset.info
            console.log(JSON.parse(xd).name)
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 1;
        } else if(element.alt == "Figter Box 2" && randomRight == 2){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 2;
        } else if(element.alt == "Figter Box 3" && randomRight == 3){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 3;
        } else if(element.alt == "Figter Box 4" && randomRight == 4){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 4;
        } else if(element.alt == "Figter Box 5" && randomRight == 5){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 5;
        } else if(element.alt == "Figter Box 6" && randomRight == 6){
            var xd = element.parentElement.dataset.info
            rightCatName.innerHTML = JSON.parse(xd).name;
            rightCatAge.innerHTML = JSON.parse(xd).age;
            rightCatInfo.innerHTML = JSON.parse(xd).catInfo;
            rightCatWins.innerHTML = JSON.parse(xd).record.wins;
            rightCatLoss.innerHTML = JSON.parse(xd).record.loss;
            rightCatImg.src = element.src;
            rightFighterNum = 6;
        }
        disableFightButton();
    })
}

