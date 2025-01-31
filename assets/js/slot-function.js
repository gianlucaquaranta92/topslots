document.addEventListener("DOMContentLoaded", function () {
    const spinButton = document.getElementById("spin-button");
    const reels = document.querySelectorAll(".single-reel");
    const resultText = document.getElementById("result");
    const balanceText = document.getElementById("balance");

    const symbols = ["🍒", "🍋", "🍊", "🍉", "⭐", "💰"];
    const spinCost = 5;
    let balance = 100;

    updateBalanceDisplay();

    function spinReels() {
        if (balance < spinCost) {
            resultText.textContent = "Not enough credits! Refresh for more.";
            return;
        }

        balance -= spinCost;
        let results = [];

        reels.forEach((reel) => {
            let randomSymbol = symbols[Math.floor(Math.random() * symbols.length)];
            reel.textContent = randomSymbol;
            results.push(randomSymbol);
        });

        // Win condition: All 3 symbols match
        if (results[0] === results[1] && results[1] === results[2]) {
            resultText.textContent = "You won a FREE Spin! 🎉 🎉 🎉 ";
            balance += spinCost; 
        } else {
            resultText.textContent = "Try Again!";
        }

        updateBalanceDisplay();
    }

    function updateBalanceDisplay() {
        balanceText.textContent = `Balance: ${balance} credits`;
    }

    spinButton.addEventListener("click", spinReels);
});

