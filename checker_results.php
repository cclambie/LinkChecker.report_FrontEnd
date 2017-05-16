<div class="results">
    <div class="final_results">
        You entered: <?= $checker->url ?> 
        <br />
        Actual url: <?= $checker->finalUrl ?>
        <br />
        Time: <?= date('d M Y H:i:s') ?>
    </div>

    <div class="details">
        <h2>URL Scan/Lookup Details</h2>
        <br />
        <div class="google">
            <h4>Google Safe Browsing</h4>
            <?php if ($checker->googleOk()): ?>
                <p>Google isn't aware of any instances of phishing, malware, or unwanted software at the specified URL/link.</p>
            <?php else: ?>
                <p>Suspected Phishing – Google has detected possible instances of phishing located somewhere on the specified URL/link or website. Phishing is a forgery/imitation of another website, designed to trick people into sharing personal or financial information, possibly resulting in identity theft or other abuse.</p>
            <?php endif ?>
        </div>

        <div class="phish">
            <h4>PhishTank</h4>
            <?php if ($checker->phishOk()): ?>
                <p>PhishTank doesn't currently report this URL as an active phishing website.</p>
            <?php else: ?>
                <p>Verified Phishing – PhishTank currently reports this URL as actively engaging in phishing. Phishing is a forgery/imitation of another website, designed to trick people into sharing personal or financial information, possibly resulting in identity theft or other abuse.</p>
                <p>Url: <?= $checker->phish['results']['url'] ?></p>
                <p>Verified At: <?= $checker->phish['results']['verified_at'] ?></p>
            <?php endif ?>
        </div>

        <div class="WOT">
            <h4>Web of Trust</h4>
            <?php if (($rep=$checker->wotOk()) == null): ?>
                <p>Web of Trust hasn't collected any/enough ratings on this website to report on its reputation and trustworthiness.</p>
            <?php else: ?>          
                <?php
                var_dump($rep);
                ?>
                <p>
                    Web of Trust reports this website as
                    <?php if ($rep >= 80): ?>                 
                        Excellent
                    <?php elseif ($rep >= 60): ?>
                        Good
                    <?php elseif ($rep >= 40): ?>
                        Unsatisfactory
                    <?php elseif ($rep >= 20): ?>
                        Poor
                    <?php else: ?>
                        Very poor
                    <?php endif ?>
                        (<?=$rep?>)
                </p>
             <?php endif ?>
        </div>
        
        
        <div class="img">
            <h2>Image:</h2>
            <img src='<?=$checker->image?>' />
        </div>
    </div>
</div>