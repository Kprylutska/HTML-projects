const boxes = Array.from(document.getElementsByClassName('box'));
const playText = document.getElementById('text');
const startButton = document.getElementById('startButton');

const spaces = [];
const O_TEXT_PLAYER = "O";
const X_TEXT_PLAYER = "X";
let currentPlayer;

const drawBoard = () => {
    boxes.forEach((box, index) => {

        let styleString = '';

        if (index < 3) {
            styleString += 'border-bottom: 3px solid var(--prettyGreen);';
        }
        if (index % 3 === 0) {
            styleString += 'border-right: 3px solid var(--prettyGreen);';
        }
        if (index % 3 === 2) {
            styleString += 'border-left: 3px solid var(--prettyGreen);';
        }
        if (index > 5) {
            styleString += 'border-top: 3px solid var(--prettyGreen);';
        }

        box.style = styleString;
        box.addEventListener('click', boxClicked);
    })
}

const boxClicked = (e) => {
    const id = e.target.id;
    console.log(id);
    if (!spaces[id]) {
        spaces[id] = currentPlayer;
        e.target.innerText = currentPlayer;

        if (playerHasWon()) {
            text.innerText = `${currentPlayer} wins!!`;
            return;
        }
        currentPlayer = currentPlayer === O_TEXT_PLAYER ? X_TEXT_PLAYER : O_TEXT_PLAYER;
    }
}

const playerHasWon = () => {
    if(spaces[0] === currentPlayer) {
        if(spaces[1] === currentPlayer && spaces[2] === currentPlayer) {
            return true;
        }

        if(spaces[3] === currentPlayer && spaces[6] === currentPlayer) {
            return true;
        }

        if(spaces[4] === currentPlayer && spaces[8] === currentPlayer) {
            return true;
        }
    }

    if(spaces[8] === currentPlayer) {
        if(spaces[2] === currentPlayer && spaces[5] === currentPlayer) {
            return true;
        }

        if(spaces[6] === currentPlayer && spaces[7] === currentPlayer) {
            return true;
        }
    }

    if(spaces[4] === currentPlayer) {
        if(spaces[1] === currentPlayer && spaces[7] === currentPlayer) {
            return true;
        }

        if(spaces[3] === currentPlayer && spaces[5] === currentPlayer) {
            return true;
        }

        if(spaces[4] === currentPlayer && spaces[8] === currentPlayer) {
            return true;
        }
    }
}

const start = () => {
    spaces.forEach((space, index) => {
        spaces[index] = null;
    })

    boxes.forEach(box => {
        box.innerText = '';
    })

    playText.innerText = 'Let the battle begin!';
    
    currentPlayer = O_TEXT_PLAYER;
}

startButton.addEventListener('click', start)

start();
drawBoard();
