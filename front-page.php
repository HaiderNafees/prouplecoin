<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Prouple Crypto Airdrop</h1>
        <p>Join our revolutionary crypto airdrop campaign. Get up to 1000 PRPL tokens worth $500. Limited time opportunity for early adopters and crypto enthusiasts.</p>
        <div class="hero-buttons">
            <a href="#" class="btn btn-primary">
                <i class="fas fa-gift"></i> Claim Airdrop
            </a>
            <?php 
            // Get the whitepaper page URL
            $whitepaper_page = get_posts([
                'post_type' => 'page',
                'name' => 'whitepaper',
                'posts_per_page' => 1
            ]);
            
            if ($whitepaper_page) {
                $whitepaper_url = get_permalink($whitepaper_page[0]->ID);
            } else {
                $whitepaper_url = home_url('/whitepaper/');
            }
            ?>
            <a href="<?php echo esc_url($whitepaper_url); ?>" class="btn btn-outline-light">
                <i class="fas fa-file-alt"></i> Whitepaper
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Airdrop Details</h2>
            <p>Simple steps to participate in our airdrop program</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3>Connect Wallet</h3>
                    <p>Connect your Web3 wallet (MetaMask, Trust Wallet) to verify your eligibility.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Complete Tasks</h3>
                    <p>Follow our social media, join community, and complete simple tasks to qualify.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Receive Tokens</h3>
                    <p>Get PRPL tokens directly to your wallet after successful verification.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Token Info Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>PRPL Token Details</h2>
                <p class="mb-4">Join the future of decentralized finance with Prouple Token (PRPL)</p>
                <div class="token-info">
                    <div class="info-item">
                        <i class="fas fa-chart-pie"></i>
                        <div>
                            <h4>Total Supply</h4>
                            <p>1,000,000,000 PRPL</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-gift"></i>
                        <div>
                            <h4>Airdrop Allocation</h4>
                            <p>5,000,000 PRPL (0.5%)</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-user-friends"></i>
                        <div>
                            <h4>Participants</h4>
                            <p>5,000 Winners</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3>Register for Airdrop</h3>
                    <div id="airdrop-messages"></div>
                    <form id="airdrop-registration-form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="wallet_address" required
                                placeholder="Wallet Address (BEP-20)">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" required
                                placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telegram" required
                                placeholder="Telegram Username">
                        </div>
                        <?php wp_nonce_field('airdrop_registration', 'airdrop_registration_nonce'); ?>
                        <button type="submit" class="btn btn-dark w-100">Submit Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add this temporarily for debugging -->
<div style="display:none">
    <?php
    $whitepaper = get_page_by_path('whitepaper');
    if ($whitepaper) {
        echo 'Whitepaper found: ' . get_permalink($whitepaper->ID);
    } else {
        echo 'Whitepaper not found';
    }
    ?>
</div>

<?php get_footer(); ?> 