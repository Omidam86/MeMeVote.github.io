<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./parts/heads.php');?>
    <title>MeMeVote - Wallet</title>
    <link rel="stylesheet" href="styles/wallet.css">
</head>
<body>
    <header class="header">
        <div class="site-name">
            <h1>MeMeVote</h1>
        </div>
    </header>

    <main class="main-content">
        <section class="wallet-section">
            <h2 class="coin-name">MeMeCoin</h2>
            
            <div class="coin-balance-container">
                <div class="coin-balance">
                    <div class="balance-wrapper">
                        <span class="balance-amount">1,250</span>
                        <img src="./assets/images/icons/logo.svg" alt="MemeVote Coin svg icon" style="width:30px;">
                    </div>
                    <span class="balance-label">MeMeCoins</span>
                </div>
            </div>
            
            <div class="wallet-actions">
                <div class="action-row">
                    <button class="wallet-button get-button">
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        Get MeMeCoin
                    </button>
                    
                    <button class="wallet-button transfer-button">
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M7 17l10-10M7 7h10v10"></path>
                        </svg>
                        Transfer
                    </button>
                </div>
                
                <div class="action-row">
                    <button class="wallet-button withdraw-button">
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 19l-7-7 7-7M5 12h14"></path>
                        </svg>
                        Withdraw
                    </button>
                </div>
            </div>
        </section>
        
        <div class="divider"></div>
        
        <section class="transaction-section">
            <h3 class="section-title">Transaction History</h3>
            
            <div class="transaction-list">
                <div class="transaction-item">
                    <div class="transaction-info">
                        <span class="transaction-type deposit">Deposit</span>
                        <span class="transaction-date">May 5, 2023</span>
                    </div>
                    <span class="transaction-amount positive">+100 MeMeCoins</span>
                </div>
                
                <div class="transaction-item">
                    <div class="transaction-info">
                        <span class="transaction-type withdrawal">Withdrawal</span>
                        <span class="transaction-date">May 3, 2023</span>
                    </div>
                    <span class="transaction-amount negative">-50 MeMeCoins</span>
                </div>
                
                <div class="transaction-item">
                    <div class="transaction-info">
                        <span class="transaction-type reward">Challenge Reward</span>
                        <span class="transaction-date">May 1, 2023</span>
                    </div>
                    <span class="transaction-amount positive">+200 MeMeCoins</span>
                </div>
            </div>
        </section>
        
        <div class="divider"></div>
        
        <section class="tasks-section">
            <h3 class="section-title">Tasks</h3>
            
            <div class="task-list">
                <div class="task-item">
                    <div class="task-info">
                        <span class="task-name">Join Telegram Channel</span>
                        <span class="task-reward">+10 MeMeCoins</span>
                    </div>
                    <button class="task-button">Start</button>
                </div>
                
                <div class="task-item">
                    <div class="task-info">
                        <span class="task-name">Follow on Twitter</span>
                        <span class="task-reward">+15 MeMeCoins</span>
                    </div>
                    <button class="task-button">Start</button>
                </div>
                
                <div class="task-item">
                    <div class="task-info">
                        <span class="task-name">Share on Social Media</span>
                        <span class="task-reward">+25 MeMeCoins</span>
                    </div>
                    <button class="task-button">Start</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <?php include('./parts/menu-items.php');?>
    </footer>
    <script src="Template/Js/template.js"></script>
    <script src="Js/wallet.js"></script>
</body>
</html>
