document.addEventListener("DOMContentLoaded", function () {
    const spinButton = document.getElementById("spin-button");
    const reels = document.querySelectorAll(".single-reel");
    const resultText = document.getElementById("result");

    const symbols = ["🍒", "🍋", "🍊", "🍉", "⭐", "💰"]; 

    function spinReels() {
        let results = [];
        reels.forEach((reel) => {
            let randomSymbol = symbols[Math.floor(Math.random() * symbols.length)];
            reel.textContent = randomSymbol;
            results.push(randomSymbol);
        });

        // win condition logic
        if (results[0] === results[1] && results[1] === results[2]) {
            resultText.textContent = "Congratulations! you won a FREE Spin!";
        } else {
            resultText.textContent = "Try Again to win a FREE Spin!";
        }
    }

    spinButton.addEventListener("click", spinReels);
});
