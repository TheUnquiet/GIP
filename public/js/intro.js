function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
};

const words = ["amazing", "fast","new", "helpful"];
const el = document.getElementById("typewriter");

let sleepTime = 100;

let currentIndex = 0;

const writeloop = async () => {
    while(true) {
        let currentWord = words[currentIndex];

        for (let i = 0; i < currentWord.length; i++) {
            el.innerText = currentWord.substring(0, i + 1);
            await sleep(sleepTime);
        }

        await sleep(sleepTime * 10);

        for (let i = currentWord.length; i > 0; i--) {
            el.innerText = currentWord.substring(0, i - 1);
            await sleep(sleepTime);
        }

        await sleep(sleepTime * 5);

        if (currentIndex === words.length - 1) {
            currentIndex = 0;
        } 
        else {
            currentIndex++;
        }
    };
};

writeloop();

console.log('it is connected');
const list = ["Joker", "Min Min", "Terry", "Byleth"];

let blink = document.getElementById('blink');

setInterval(function () {
    blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
}, 1000);
