<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => "/",
                "name" => "home",
                "seo_title" => "BTC mixer",
                "seo_description" => "",
            ],
            [
                "slug" => "/terms",
                "name" => "terms",
                "seo_title" => "Terms",
                "seo_description" => "",
                "content" => '<p>
                        Please read these Terms of Service. These Terms define the conditions of Whir.to (further
                        &quot;Whir&quot;) use. Use of the Whir service, visiting the website, and sending bitcoin
                        anonymously signifies your acceptance of and agreement to these Terms. Whir reserves the
                        right to update these Terms at any moment by posting revised terms on the website. Such
                        changes take effect from the date of their posting on the website. </p>


                    <h2>1. BTC and Whir</h2>
                    <p><strong>1.1 Information on the BTC network</strong></p>
                    <p>Our Service does not send or receive money independently; we only organize the interaction
                        within the BTC network according to the conditions that you specify.</p>
                    <p>Once the BTC network identifies the information on the transaction you have sent, the
                        information is transmitted to other users and companies in the BTC network.</p>
                    <p>The Service cannot be used to terminate BTC transactions or recover money.</p>
                    <p><strong>1.2 BTC risks</strong></p>
                    <p>Whir has no control over and makes no representations as to BTC network security. You
                        acknowledge that the use of the BTC network entails a risk. We cannot hold ourselves
                        responsible for lost profits.</p>
                    <p>The BTC transaction can remain unconfirmed during a certain period (usually less than an
                        hour but occasionally up to several days). It can never be completed if it remains
                        "unconfirmed."</p>
                    <p><strong>1.3 Working arrangements of the Whir service with end customers</strong></p>
                    <p>The Service organizes a non-public transfer from a generated deposit address to the recipient
                        address. The Service is not liable for any operation beyond the scope described on its
                        website or these Terms. These include undue sending of BTC to the service address,
                        resending, or delay in confirmation of your transaction.</p>
                    <p><strong>1.4 Your passwords and security</strong></p>
                    <p>Whir has no access to your BTC wallets which you used for sending or receiving of
                        cryptocurrencies. Consequently, all the responsibility for the use of your wallets lies with
                        you. Should you need any consultation on irregularity, do not hesitate to contact us.</p>
                    <p><strong>1.5 The minimum age for the use of the Service</strong></p>
                    <p>You must be older than 18 years or be of the minimum age required by the current legislation
                        to use the Whir service.</p>
                    <p><strong>1.6 Taxes</strong></p>
                    <p>Taxes are your sole responsibility. You must find out whether BTC or cryptocurrency
                        operations are subject to tax regulations of your region. All issues related to reporting to
                        taxation bodies and taxpaying entirely lie with you. Whir is not responsible for such issues
                        and does not provide consultations on taxation questions, which may arise as a result of
                        executed operations.</p>
                    <h2>2. Service use</h2>
                    <p><strong>2.1. Privacy Policy</strong></p>
                    <p>Please refer to our <a href="/privacy-policy" target="_blank" rel="noopener">Privacy
                            Policy</a> to get an understanding of our confidentiality obligations. You consent to the
                        collection and use of information as described in the Privacy Policy.</p>
                    <p><strong>2.2 Suspension or termination of services</strong></p>
                    <p>Whir reserves the right to suspend or terminate access to services at any time at its
                        discretion, with or without reasons, with or without notification assuming no responsibility
                        whatsoever. For example, services may be suspended or terminated due to the following
                        reasons:</p>
                    <ul>
                        <li>an actual or suspected violation of these Terms;</li>
                        <li>use of the Service in such a manner that is conducive to the legal liability of Whir or
                            service malfunction;
                        </li>
                        <li>planned or unplanned maintenance.</li>
                    </ul>
                    <p><strong>2.3 Unacceptable use</strong></p>
                    <p>You agree that you won`t commit, encourage, or support the committal of:</p>
                    <ul>
                        <li>use of any unauthorized means to access the Whir service or use of any automated process
                            or Service (for example, spider, crawler or periodic caching of information stored or
                            generated by Whir);
                        </li>
                        <li>modification, change, distortion or any other interference in work of the Whir
                            service;
                        </li>
                        <li>disturbing or interference in the operation of servers or networks used by Whir to
                            deliver the services;
                        </li>
                        <li>disabling, overload or degradation of Whir performance (or any other network connected
                            to the Service);
                        </li>
                        <li>use of the Whir service or website for any other purposes other than those expressly
                            provided by these Terms and Privacy Policy;
                        </li>
                        <li>any illegal or fraudulent activity, as well as the use of this Service to legalize
                            illegal income, financing of terrorism, participation in schemes of phishing, forgery or
                            other such falsification or manipulation;
                        </li>
                        <li>spamming, pyramid schemes, or any other activity duplicating unwanted messages should
                            they be commercially oriented or of other nature.
                        </li>
                    </ul>
                    <p><strong>2.4 Service updates</strong></p>
                    <p>At any time, Whir can carry out unscheduled works related to service modification, update,
                        and enhancement. We are liable to add or remove functions and cease activities of the
                        Service and website.</p>
                    <p><strong>2.5 License and restrictions</strong></p>
                    <p>Whir provides you with a personal nontransferable nonexclusive license to use the Service as
                        it is stipulated for you by Whir. This license is provided under conditions and restricted
                        to the provisions, stipulations, and constraints stated in these Terms.</p>
                    <p>In addition to that, such a license is for personal, noncommercial use. You may not copy,
                        modify, create a derivative work of, decompile or otherwise attempt to extract the source
                        code of the Service or any part thereof, exclusive of data permitted by law, or expressly
                        allowed by the Whir platform.</p>
                    <p>These Terms do not provide you with any license or permission to copy, distribute, change, or
                        otherwise use any applications programming interface despite any provisions to the
                        contrary.</p>
                    <p>No property rights or ownership rights related to the Service are not granted to you
                        according to these Terms. Whir reserves all rights that have not been expressly granted.</p>
                    <h2>3. Users</h2>
                    <p><strong>3.1 Responsibilities</strong></p>
                    <p>You are:</p>
                    <ul>
                        <li>solely responsible for nature, quality, and accuracy of user data transferred to the
                            Service;
                        </li>
                        <li>rapidly view and respond to any notifications and requirements related to user data and
                            operations, including any notices sent to you by our help center.
                        </li>
                    </ul>
                    <p>You won`t store or transfer unallowable information, including:</p>
                    <ul>
                        <li>illegal, defamatory, menacing, pornographic, offensive or otherwise unacceptable
                            materials of any kind or nature;
                        </li>
                        <li>any materials encouraging illegal actions which can be a criminal offense or violating
                            intellectual property rights, rights for publicity or personal privacy of others;
                        </li>
                        <li>any materials containing or using software viruses or other harmful or harmless computer
                            codes, files, or programs such as trojan horses, worms, bots, or spyware which may harm,
                            endanger or oppress another person, organization, or Whir.
                        </li>
                    </ul>
                    <h2>4. Limitation of liability</h2>
                    <p><strong>4.1 Restriction of use depending on a region</strong></p>
                    <p>Whir does not permit service usage if it runs counter to the law of the region of your stay.
                        This requirement concerns not only the use of the service functionality but also use cases
                        related to the BTC network.</p>
                    <p>Since Whir does not collect any personal information, including information on your
                        geographic origin, compliance with state legislation is entirely your responsibility. Whir
                        bears no responsibility whatsoever.</p>
                    <p><strong>4.2 Disclaimer of warranties</strong></p>
                    <p>YOUR USE OF THIS SERVICE IS AT YOUR SOLE RISK. WHIR PROVIDES THE WEBSITE AND SERVICE ON AN
                        "AS IS," "WITH ALL FAULTS" AND "AS IS NOW" BASIS. WHIR DOES NOT PROVIDE (AND PURPOSELY
                        DISCLAIMS) ALL STATEMENTS OR WARRANTIES OF ANY KIND, IMPLIED, STATUTORY AND OTHER,
                        INCLUDING, WITHOUT LIMITATION, ANY WARRANTIES OF SMOOTH OPERATION OF THE SERVICE AND ABSENCE
                        OF ERRORS OR MALICIOUS COMPONENTS IMPLEMENTED WITHOUT OUR KNOWLEDGE OR CONSENT BY THE THIRD
                        PARTY.&nbsp;WHIR&nbsp;IS NOT LIABLE FOR ANY LOSSES, WHICH EITHER YOU OR THIRD PARTIES SUFFER
                        AS A RESULT OF THE SERVICE USE.</p>
                    <p>WHIR IS NOT ABLE TO OFFER ANY ASSURANCES OF SATISFACTORY SERVICE QUALITY, ITS FITNESS FOR A
                        PARTICULAR PURPOSE OR NON-INFRINGEMENT OF ANY RIGHTS.</p>
                    <p>SOME JURISDICTIONS DO NOT ALLOW MENTIONED EXCLUSIONS. IN SUCH CASE THESE EXCLUSIONS HAVE NO
                        EFFECT ONLY WITHIN LIMITS PROHIBITED BY CURRENT LEGISLATION.</p>
                    <p><strong>4.3 Limitation of liability</strong></p>
                    <p>TO THE FULL EXTENT PERMITTED UNDER APPLICABLE LAW, UNDER ANY CIRCUMSTANCES NEITHER WHIR NOR
                        EMPLOYEES, AGENTS, PARTNERS, VENDORS, LICENSORS ARE LIABLE FOR ANY CONSEQUENTIAL,
                        INCIDENTAL, DELIBERATE OR OTHER DAMAGE (INCLUDING, WITHOUT LIMITATION, DAMAGE BY LOST
                        PROFIT, REVENUE, REPUTATION) OCCURRED WHEN USING THIS SERVICE.</p>
                    <p>May 1, 2022</p>',
            ],
            [
                "slug" => "/privacy-policy",
                "name" => "privacy-policy",
                "seo_title" => "Privacy policy",
                "seo_description" => "",
                "content" => '<p>
                        To deliver the stated services, Whir is liable to collect and temporarily store private
                        identification information in various forms in the case where a user visits the website,
                        uses the service, or interacts with the help desk. </p>


                    <p>If considered necessary, a user can voluntarily provide us with a name, e-mail address, and
                        information on used bitcoin addresses, for example, in solving issues by our <a
                            href="#" target="_blank" rel="noopener">help center</a>. This information is
                        not mandatory, and we will collect it only if provided voluntarily.</p>
                    <h2>How do we use collected information (NO-LOGS policy)</h2>
                    <p>Whir can collect and use private user data to deliver services under and not beyond the
                        determined liability. Once the services are provided, all data is deleted.</p>
                    <p>All transaction information is deleted after 24 hours. Upon a voluntary initiative of a user,
                        this period may be prolonged for a time required for the settlement of various questions
                        that a user may face.</p>
                    <h2>Non-personal identification information</h2>
                    <p>Whir does not collect non-personal identification information on visitors when they interact
                        with our website. Non-personal identification information may include but are not limited
                        to:</p>
                    <ul>
                        <li>computer type,</li>
                        <li>mobile device,</li>
                        <li>smartphone model,</li>
                        <li>operating system,</li>
                        <li>internet access provider,</li>
                        <li>cellular service provider.</li>
                    </ul>
                    <p>In order to enhance privacy when interacting with our site, we do detect the web browser
                        type. Upon detecting the Tor browser, we display a pop-up window, suggesting you can switch
                        to the Tor (onion) version of our site.</p>
                    <h2>Collection of information by third-party apps</h2>
                    <p>In order to protect your privacy, we do not use third-party apps, such as Google Analytics or
                        Google Webmaster Tools. However, in order to ehnance your privacy when using Whir, you can
                        use the Tor mirror of our website, accessible only through a Tor browser. The main
                        functionality of our service is preserved in the Tor version.</p>
                    <h2>Cookies in web browsers</h2>
                    <p>Whir uses a temporary wh_session cookie file that is automatically deleted when you close
                        your web browser.</p>
                    <h2>How do we protect user information</h2>
                    <p>Whir takes all necessary measures to protect your data in terms of collection, storing and
                        processing, and also security measures to prevent unauthorized access, change, disclosure,
                        or destruction of private identification information and transactional data.</p>
                    <p>Sensitive information and private data exchange between the website and its users is
                        accomplished via the secure SSL channel for communication and encrypted with digital
                        signatures, or via the encrypted Tor network.</p>
                    <h2>Shared use of personal user information</h2>
                    <p>We do not sell, impart, or rent out personal user information to third parties. Please, note
                        that any transactions in the bitcoin network are publicly available, and we have no
                        opportunity to exclude those transactions from the blockchain.</p>
                    <h2>Privacy Policy changes</h2>
                    <p>Whir has a right to update this Privacy Policy at its own and sole discretion at any time. We
                        encourage users to check this page for any changes frequently. You acknowledge and agree
                        that it is your responsibility to view this Privacy Policy and be aware of changes
                        periodically.</p>
                    <h2>Your acceptance of these terms</h2>
                    <p>By using Whir, its Tor mirror, and services, you indicate your consent to this Policy. If you
                        do not agree to this Privacy Policy, please do not use the Whir website or services. Your
                        continued use of the site or services following changes in this Policy constitutes your
                        agreement to such changes.</p>
                    <p>May 1, 2022</p>',
            ],
            [
                "slug" => "/bitcoin-white-paper",
                "name" => "bitcoin-white-paper",
                "seo_title" => "BTC: A Peer-to-Peer Electronic Cash System",
                "seo_description" => "",
                "content" => '<p>
                        Abstract. A purely peer-to-peer version of electronic cash would allow online payments to be
                        sent directly from one party to another without going through a financial institution.
                        Digital signatures provide part of the solution, but the main benefits are lost if a trusted
                        third party is still required to prevent double-spending. We propose a solution to the
                        double-spending problem using a peer-to-peer network. The network timestamps transactions by
                        hashing them into an ongoing chain of hash-based proof-of-work, forming a record that cannot
                        be changed without redoing the proof-of-work. The longest chain not only serves as proof of
                        the sequence of events witnessed, but proof that it came from the largest pool of CPU power.
                        As long as a majority of CPU power is controlled by nodes that are not cooperating to attack
                        the network, they`ll generate the longest chain and outpace attackers. The network itself
                        requires minimal structure. Messages are broadcast on a best effort basis, and nodes can
                        leave and rejoin the network at will, accepting the longest proof-of-work chain as proof of
                        what happened while they were gone.
                        <br/>
                        <br/>Satoshi Nakamoto
                        <br/><a href="#" class="__cf_email__"
                                data-cfemail="ec9f8d98839f848582ac8b8194c28f8381">[email&#160;protected]</a>
                        <br/>www.bitcoin.org </p>


                    <h2>1. Introduction</h2>
                    <p>Commerce on the Internet has come to rely almost exclusively on financial institutions
                        serving as trusted third parties to process electronic payments. While the system works well
                        enough for most transactions, it still suffers from the inherent weaknesses of the trust
                        based model. Completely non-reversible transactions are not really possible, since financial
                        institutions cannot avoid mediating disputes. The cost of mediation increases transaction
                        costs, limiting the minimum practical transaction size and cutting off the possibility for
                        small casual transactions, and there is a broader cost in the loss of ability to make
                        non-reversible payments for non- reversible services. With the possibility of reversal, the
                        need for trust spreads. Merchants must be wary of their customers, hassling them for more
                        information than they would otherwise need. A certain percentage of fraud is accepted as
                        unavoidable. These costs and payment uncertainties can be avoided in person by using
                        physical currency, but no mechanism exists to make payments over a communications channel
                        without a trusted party.</p>
                    <p>What is needed is an electronic payment system based on cryptographic proof instead of trust,
                        allowing any two willing parties to transact directly with each other without the need for a
                        trusted third party. Transactions that are computationally impractical to reverse would
                        protect sellers from fraud, and routine escrow mechanisms could easily be implemented to
                        protect buyers. In this paper, we propose a solution to the double-spending problem using a
                        peer-to-peer distributed timestamp server to generate computational proof of the
                        chronological order of transactions. The system is secure as long as honest nodes
                        collectively control more CPU power than any cooperating group of attacker nodes.</p>
                    <h2>2. Transactions</h2>
                    <p>We define an electronic coin as a chain of digital signatures. Each owner transfers the coin
                        to the next by digitally signing a hash of the previous transaction and the public key of
                        the next owner and adding these to the end of the coin. A payee can verify the signatures to
                        verify the chain of ownership.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-transactions.png" alt="Btc wp transactions"
                                     title="Btc wp transactions"/>
                            </figure>
                        </div>
                    </div>
                    <p>The problem of course is the payee can`t verify that one of the owners did not double-spend
                        the coin. A common solution is to introduce a trusted central authority, or mint, that
                        checks every transaction for double spending. After each transaction, the coin must be
                        returned to the mint to issue a new coin, and only coins issued directly from the mint are
                        trusted not to be double-spent. The problem with this solution is that the fate of the
                        entire money system depends on the company running the mint, with every transaction having
                        to go through them, just like a bank.</p>
                    <p>We need a way for the payee to know that the previous owners did not sign any earlier
                        transactions. For our purposes, the earliest transaction is the one that counts, so we don`t
                        care about later attempts to double-spend. The only way to confirm the absence of a
                        transaction is to be aware of all transactions. In the mint based model, the mint was aware
                        of all transactions and decided which arrived first. To accomplish this without a trusted
                        party, transactions must be publicly announced [1], and we need a system for participants to
                        agree on a single history of the order in which they were received. The payee needs proof
                        that at the time of each transaction, the majority of nodes agreed it was the first
                        received.</p>
                    <h2>3. Timestamp Server</h2>
                    <p>The solution we propose begins with a timestamp server. A timestamp server works by taking a
                        hash of a block of items to be timestamped and widely publishing the hash, such as in a
                        newspaper or Usenet post [2-5]. The timestamp proves that the data must have existed at the
                        time, obviously, in order to get into the hash. Each timestamp includes the previous
                        timestamp in its hash, forming a chain, with each additional timestamp reinforcing the ones
                        before it.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-timestamp-server_1.png"
                                     alt="Btc wp timestamp server" title="Btc wp timestamp server"/>
                            </figure>
                        </div>
                    </div>
                    <h2>4. Proof-of-Work</h2>
                    <p>To implement a distributed timestamp server on a peer-to-peer basis, we will need to use a
                        proof- of-work system similar to Adam Back`s Hashcash [6], rather than newspaper or Usenet
                        posts. The proof-of-work involves scanning for a value that when hashed, such as with
                        SHA-256, the hash begins with a number of zero bits. The average work required is
                        exponential in the number of zero bits required and can be verified by executing a single
                        hash.</p>
                    <p>For our timestamp network, we implement the proof-of-work by incrementing a nonce in the
                        block until a value is found that gives the block`s hash the required zero bits. Once the
                        CPU effort has been expended to make it satisfy the proof-of-work, the block cannot be
                        changed without redoing the work. As later blocks are chained after it, the work to change
                        the block would include redoing all the blocks after it.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-pow.png" alt="Btc wp pow" title="Btc wp pow"/>
                            </figure>
                        </div>
                    </div>
                    <p>The proof-of-work also solves the problem of determining representation in majority decision
                        making. If the majority were based on one-IP-address-one-vote, it could be subverted by
                        anyone able to allocate many IPs. Proof-of-work is essentially one-CPU-one-vote. The
                        majority decision is represented by the longest chain, which has the greatest proof-of-work
                        effort invested in it. If a majority of CPU power is controlled by honest nodes, the honest
                        chain will grow the fastest and outpace any competing chains. To modify a past block, an
                        attacker would have to redo the proof-of-work of the block and all blocks after it and then
                        catch up with and surpass the work of the honest nodes. We will show later that the
                        probability of a slower attacker catching up diminishes exponentially as subsequent blocks
                        are added.</p>
                    <p>To compensate for increasing hardware speed and varying interest in running nodes over time,
                        the proof-of-work difficulty is determined by a moving average targeting an average number
                        of blocks per hour. If they`re generated too fast, the difficulty increases.</p>
                    <h2>5. Network</h2>
                    <p>The steps to run the network are as follows:</p>
                    <ol>
                        <li>New transactions are broadcast to all nodes.</li>
                        <li>Each node collects new transactions into a block.</li>
                        <li>Each node works on finding a difficult proof-of-work for its block.</li>
                        <li>When a node finds a proof-of-work, it broadcasts the block to all nodes.</li>
                        <li>Nodes accept the block only if all transactions in it are valid and not already spent.
                        </li>
                        <li>Nodes express their acceptance of the block by working on creating the next block in the&nbsp;chain,
                            using the hash of the accepted block as the previous hash.
                        </li>
                    </ol>
                    <p>Nodes always consider the longest chain to be the correct one and will keep working on
                        extending it. If two nodes broadcast different versions of the next block simultaneously,
                        some nodes may receive one or the other first. In that case, they work on the first one they
                        received, but save the other branch in case it becomes longer. The tie will be broken when
                        the next proof- of-work is found and one branch becomes longer; the nodes that were working
                        on the other branch will then switch to the longer one.</p>
                    <p>New transaction broadcasts do not necessarily need to reach all nodes. As long as they reach
                        many nodes, they will get into a block before long. Block broadcasts are also tolerant of
                        dropped messages. If a node does not receive a block, it will request it when it receives
                        the next block and realizes it missed one.</p>
                    <h2>6. Incentive</h2>
                    <p>By convention, the first transaction in a block is a special transaction that starts a new
                        coin owned by the creator of the block. This adds an incentive for nodes to support the
                        network, and provides a way to initially distribute coins into circulation, since there is
                        no central authority to issue them. The steady addition of a constant of amount of new coins
                        is analogous to gold miners expending resources to add gold to circulation. In our case, it
                        is CPU time and electricity that is expended.</p>
                    <p>The incentive can also be funded with transaction fees. If the output value of a transaction
                        is less than its input value, the difference is a transaction fee that is added to the
                        incentive value of the block containing the transaction. Once a predetermined number of
                        coins have entered circulation, the incentive can transition entirely to transaction fees
                        and be completely inflation free.</p>
                    <p>The incentive may help encourage nodes to stay honest. If a greedy attacker is able to
                        assemble more CPU power than all the honest nodes, he would have to choose between using it
                        to defraud people by stealing back his payments, or using it to generate new coins. He ought
                        to find it more profitable to play by the rules, such rules that favour him with more new
                        coins than everyone else combined, than to undermine the system and the validity of his own
                        wealth.</p>
                    <h2>7. Reclaiming Disk Space</h2>
                    <p>Once the latest transaction in a coin is buried under enough blocks, the spent transactions
                        before it can be discarded to save disk space. To facilitate this without breaking the
                        block`s hash, transactions are hashed in a Merkle Tree [7][2][5], with only the root
                        included in the block`s hash. Old blocks can then be compacted by stubbing off branches of
                        the tree. The interior hashes do not need to be stored.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-reclaiming-disk-space.png"
                                     alt="Btc wp reclaiming disk space" title="Btc wp reclaiming disk space"/>
                            </figure>
                        </div>
                    </div>
                    <p>A block header with no transactions would be about 80 bytes. If we suppose blocks are
                        generated every 10 minutes, 80 bytes * 6 * 24 * 365 = 4.2MB per year. With computer systems
                        typically selling with 2GB of RAM as of 2008, and Moore`s Law predicting current growth of
                        1.2GB per year, storage should not be a problem even if the block headers must be kept in
                        memory.</p>
                    <h2>8. Simplified Payment Verification</h2>
                    <p>It is possible to verify payments without running a full network node. A user only needs to
                        keep a copy of the block headers of the longest proof-of-work chain, which he can get by
                        querying network nodes until he`s convinced he has the longest chain, and obtain the Merkle
                        branch linking the transaction to the block it`s timestamped in. He can`t check the
                        transaction for himself, but by linking it to a place in the chain, he can see that a
                        network node has accepted it, and blocks added after it further confirm the network has
                        accepted it.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-simplified-payment-verification.png"
                                     alt="Btc wp simplified payment verification"
                                     title="Btc wp simplified payment verification"/>
                            </figure>
                        </div>
                    </div>
                    <p>As such, the verification is reliable as long as honest nodes control the network, but is
                        more vulnerable if the network is overpowered by an attacker. While network nodes can verify
                        transactions for themselves, the simplified method can be fooled by an attacker`s fabricated
                        transactions for as long as the attacker can continue to overpower the network. One strategy
                        to protect against this would be to accept alerts from network nodes when they detect an
                        invalid block, prompting the user`s software to download the full block and alerted
                        transactions to confirm the inconsistency. Businesses that receive frequent payments will
                        probably still want to run their own nodes for more independent security and quicker
                        verification.</p>
                    <h2>9. Combining and Splitting Value</h2>
                    <p>Although it would be possible to handle coins individually, it would be unwieldy to make a
                        separate transaction for every cent in a transfer. To allow value to be split and combined,
                        transactions contain multiple inputs and outputs. Normally there will be either a single
                        input from a larger previous transaction or multiple inputs combining smaller amounts, and
                        at most two outputs: one for the payment, and one returning the change, if any, back to the
                        sender.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-combining-splitting-value.png"
                                     alt="Btc wp combining splitting value"
                                     title="Btc wp combining splitting value"/>
                            </figure>
                        </div>
                    </div>
                    <p>It should be noted that fan-out, where a transaction depends on several transactions, and
                        those transactions depend on many more, is not a problem here. There is never the need to
                        extract a complete standalone copy of a transaction`s history.</p>
                    <h2>10. Privacy</h2>
                    <p>The traditional banking model achieves a level of privacy by limiting access to information
                        to the parties involved and the trusted third party. The necessity to announce all
                        transactions publicly precludes this method, but privacy can still be maintained by breaking
                        the flow of information in another place: by keeping public keys anonymous. The public can
                        see that someone is sending an amount to someone else, but without information linking the
                        transaction to anyone. This is similar to the level of information released by stock
                        exchanges, where the time and size of individual trades, the "tape", is made public, but
                        without telling who the parties were.</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-privacy.png" alt="Btc wp privacy"
                                     title="Btc wp privacy"/>
                            </figure>
                        </div>
                    </div>
                    <p>As an additional firewall, a new key pair should be used for each transaction to keep them
                        from being linked to a common owner. Some linking is still unavoidable with multi-input
                        transactions, which necessarily reveal that their inputs were owned by the same owner. The
                        risk is that if the owner of a key is revealed, linking could reveal other transactions that
                        belonged to the same owner.</p>
                    <h2>11. Calculations</h2>
                    <p>We consider the scenario of an attacker trying to generate an alternate chain faster than the
                        honest chain. Even if this is accomplished, it does not throw the system open to arbitrary
                        changes, such as creating value out of thin air or taking money that never belonged to the
                        attacker. Nodes are not going to accept an invalid transaction as payment, and honest nodes
                        will never accept a block containing them. An attacker can only try to change one of his own
                        transactions to take back money he recently spent.</p>
                    <p>The race between the honest chain and an attacker chain can be characterized as a Binomial
                        Random Walk. The success event is the honest chain being extended by one block, increasing
                        its lead by +1, and the failure event is the attacker`s chain being extended by one block,
                        reducing the gap by -1.</p>
                    <p>The probability of an attacker catching up from a given deficit is analogous to a Gambler`s
                        Ruin problem. Suppose a gambler with unlimited credit starts at a deficit and plays
                        potentially an infinite number of trials to try to reach breakeven. We can calculate the
                        probability he ever reaches breakeven, or that an attacker ever catches up with the honest
                        chain, as follows [8]:</p>
                    <p>p = probability an honest node finds the next block<br/>q = probability the attacker finds
                        the next block<br/>qz = probability the attacker will ever catch up from z blocks behind</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-calculations-1.png" alt="Btc wp calculations"
                                     title="Btc wp calculations"/>
                            </figure>
                        </div>
                    </div>
                    <p>Given our assumption that p &gt; q, the probability drops exponentially as the number of
                        blocks the attacker has to catch up with increases. With the odds against him, if he doesn`t
                        make a lucky lunge forward early on, his chances become vanishingly small as he falls
                        further behind.</p>
                    <p>We now consider how long the recipient of a new transaction needs to wait before being
                        sufficiently certain the sender can`t change the transaction. We assume the sender is an
                        attacker who wants to make the recipient believe he paid him for a while, then switch it to
                        pay back to himself after some time has passed. The receiver will be alerted when that
                        happens, but the sender hopes it will be too late.</p>
                    <p>The receiver generates a new key pair and gives the public key to the sender shortly before
                        signing. This prevents the sender from preparing a chain of blocks ahead of time by working
                        on it continuously until he is lucky enough to get far enough ahead, then executing the
                        transaction at that moment. Once the transaction is sent, the dishonest sender starts
                        working in secret on a parallel chain containing an alternate version of his
                        transaction.</p>
                    <p>The recipient waits until the transaction has been added to a block and z blocks have been
                        linked after it. He doesn`t know the exact amount of progress the attacker has made, but
                        assuming the honest blocks took the average expected time per block, the attacker`s
                        potential progress will be a Poisson distribution with expected value:</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-calculations-2.png" alt="Btc wp calculations"
                                     title="Btc wp calculations"/>
                            </figure>
                        </div>
                    </div>
                    <p>To get the probability the attacker could still catch up now, we multiply the Poisson density
                        for&nbsp;each amount of progress he could have made by the probability he could catch up
                        from that point:</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-calculations-3.png" alt="Btc wp calculations"
                                     title="Btc wp calculations"/>
                            </figure>
                        </div>
                    </div>
                    <p>Rearranging to avoid summing the infinite tail of the distribution...</p>
                    <div class="article-image">
                        <div class="article-img-wrapper">
                            <figure>
                                <img src="/resources/page/image/btc-wp-calculations-4.png" alt="Btc wp calculations"
                                     title="Btc wp calculations"/>
                            </figure>
                        </div>
                    </div>
                    <p>Converting to C code...</p>
                    <p>&nbsp;#include &lt;math.h&gt;<br/>double AttackerSuccessProbability(double q, int
                        z)<br/>{<br/>&nbsp; &nbsp; &nbsp;double p = 1.0 - q;<br/>&nbsp; &nbsp; &nbsp;double lambda =
                        z * (q / p);<br/>&nbsp; &nbsp; &nbsp;double sum = 1.0;<br/>&nbsp; &nbsp; &nbsp;int i,
                        k;<br/>&nbsp; &nbsp; &nbsp;for (k = 0; k &lt;= z; k++)<br/>&nbsp; &nbsp; &nbsp;{<br/>&nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; double poisson = exp(-lambda);<br/>&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; for (i = 1; i &lt;= k; i++)<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;poisson *= lambda / i;<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sum -= poisson * (1 -
                        pow(q / p, z - k));<br/>&nbsp; &nbsp; &nbsp;}<br/>&nbsp; &nbsp; &nbsp;return sum; <br/>}</p>
                    <p>Running some results, we can see the probability drop off exponentially with z.<br/><br/>q=0.1<br/>z=0
                        &nbsp; &nbsp;P=1.0000000<br/>z=1 &nbsp; &nbsp;P=0.2045873<br/>z=2 &nbsp;
                        &nbsp;P=0.0509779<br/>z=3 &nbsp; &nbsp;P=0.0131722<br/>z=4 &nbsp; &nbsp;P=0.0034552<br/>z=5
                        &nbsp; &nbsp;P=0.0009137<br/>z=6 &nbsp; &nbsp;P=0.0002428<br/>z=7 &nbsp;
                        &nbsp;P=0.0000647<br/>z=8 &nbsp; &nbsp;P=0.0000173<br/>z=9 &nbsp; &nbsp;P=0.0000046<br/>z=10
                        &nbsp; P=0.0000012<br/><br/>q=0.3<br/>z=0 &nbsp; &nbsp;P=1.0000000<br/>z=5 &nbsp; &nbsp;P=0.1773523<br/>z=10
                        &nbsp; P=0.0416605<br/>z=15 &nbsp; P=0.0101008<br/>z=20 &nbsp; P=0.0024804<br/>z=25 &nbsp;
                        P=0.0006132<br/>z=30 &nbsp; P=0.0001522<br/>z=35 &nbsp; P=0.0000379<br/>z=40 &nbsp;
                        P=0.0000095<br/>z=45 &nbsp; P=0.0000024<br/>z=50 &nbsp; P=0.0000006<br/><br/>Solving for P
                        less than 0.1%...<br/><br/>P &lt; 0.001<br/>q=0.10 &nbsp; z=5<br/>q=0.15 &nbsp; z=8<br/>q=0.20
                        &nbsp; z=11<br/>q=0.25 &nbsp; z=15<br/>q=0.30 &nbsp; z=24<br/>q=0.35 &nbsp; z=41<br/>q=0.40
                        &nbsp; z=89<br/>q=0.45 &nbsp; z=340</p>
                    <h2>12. Conclusion</h2>
                    <p>We have proposed a system for electronic transactions without relying on trust. We started
                        with the usual framework of coins made from digital signatures, which provides strong
                        control of ownership, but is incomplete without a way to prevent double-spending. To solve
                        this, we proposed a peer-to-peer network using proof-of-work to record a public history of
                        transactions that quickly becomes computationally impractical for an attacker to change if
                        honest nodes control a majority of CPU power. The network is robust in its unstructured
                        simplicity. Nodes work all at once with little coordination. They do not need to be
                        identified, since messages are not routed to any particular place and only need to be
                        delivered on a best effort basis. Nodes can leave and rejoin the network at will, accepting
                        the proof-of-work chain as proof of what happened while they were gone. They vote with their
                        CPU power, expressing their acceptance of valid blocks by working on extending them and
                        rejecting invalid blocks by refusing to work on them. Any needed rules and incentives can be
                        enforced with this consensus mechanism.</p>
                    <h2>References</h2>
                    <p>[1] W. Dai, "b-money," http://www.weidai.com/bmoney.txt, 1998.</p>
                    <p>[2] H. Massias, X.S. Avila, and J.-J. Quisquater, "Design of a secure timestamping service
                        with minimal</p>
                    <p>trust requirements," In 20th Symposium on Information Theory in the Benelux, May 1999.</p>
                    <p>[3] S. Haber, W.S. Stornetta, "How to time-stamp a digital document," In Journal of
                        Cryptology, vol 3, no</p>
                    <p>2, pages 99-111, 1991.</p>
                    <p>[4] D. Bayer, S. Haber, W.S. Stornetta, "Improving the efficiency and reliability of digital
                        time-stamping,"</p>
                    <p>In Sequences II: Methods in Communication, Security and Computer Science, pages 329-334,
                        1993.</p>
                    <p>[5] S. Haber, W.S. Stornetta, "Secure names for bit-strings," In Proceedings of the 4th ACM
                        Conference</p>
                    <p>on Computer and Communications Security, pages 28-35, April 1997.</p>
                    <p>[6] A. Back, "Hashcash - a denial of service counter-measure,"</p>
                    <p>http://www.hashcash.org/papers/hashcash.pdf, 2002.</p>
                    <p>[7] R.C. Merkle, "Protocols for public key cryptosystems," In Proc. 1980 Symposium on
                        Security and</p>
                    <p>Privacy, IEEE Computer Society, pages 122-133, April 1980.</p>
                    <p>[8] W. Feller, "An introduction to probability theory and its applications," 1957.</p>'
            ],
            [
                "slug" => "/affiliates",
                "name" => "affiliates",
                "seo_title" => "Affiliate program",
                "seo_description" => "",
                "content" => "<p>
                        Refer customers and get a % commission from each transaction fee we charge. Join our
                        affiliate program today, promote privacy, and start earning bitcoin. </p>",
            ],
            [
                "slug" => "/faq",
                "name" => "faq",
                "seo_title" => "BTC mixer FAQ",
                "seo_description" => "",
                "content" => '<p>
                        Have questions or concerns about Whir? Find answers to the most common queries below. If you
                        haven`t found topics you`re curious about, you can always contact our customer service. </p>


                    <div class="accordion" id="faq">

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-1">
                                What is Whir? </h3>
                            <div id="tab-1" class="accordion-collapse" aria-labelledby="tab-head-1">
                                <p>Whir is a service that returns privacy to your BTC by utilizing a BTC
                                    mixnig method called CoinJoin. <a href="#" target="_blank"
                                                                      rel="noopener">Learn about CoinJoin</a></p>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-2">
                                What is a BTC mixer? </h3>
                            <div id="tab-2" class="accordion-collapse" aria-labelledby="tab-head-2">
                                <p><strong>A BTC mixer, also known as a BTC tumbler, is a service that is
                                        used to obscure the origin of BTC transactions.</strong> When a BTC
                                    transaction is made, it is recorded on the blockchain, which is a public record
                                    of all BTC transactions. The blockchain allows anyone to see the transaction
                                    history of any BTC address. This can be a problem for people who want to
                                    keep their BTC transactions private, as anyone can see how much money they
                                    have sent and received.</p>
                                <p>A BTC mixer works by taking in BTC from many different people and then
                                    sending out new BTC to different addresses, making it difficult to trace the
                                    original transactions. <strong>This can be useful for people who want to keep
                                        their BTC transactions private for various reasons, such as for privacy
                                        or to protect themselves from being targeted by hackers.</strong></p>
                                <p><a href="#" target="_blank" rel="noopener">Learn
                                        more about BTC mixer</a></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-3">
                                Why should I use a BTC mixer? </h3>
                            <div id="tab-3" class="accordion-collapse" aria-labelledby="tab-head-3">
                                <p>There are a few reasons why someone might want to use a BTC mixer:</p>
                                <p><strong>Privacy. </strong>Using a BTC mixer can help to obscure the origin of
                                    a person`s BTC transactions, which can provide an additional layer of
                                    privacy.</p>
                                <p><strong>Security. </strong>If someone`s BTC address is publicly known, they
                                    may be more vulnerable to hacking attacks. By using a BTC mixer to obscure
                                    the origin of their transactions, they can make it more difficult for hackers to
                                    target them.</p>
                                <p><strong>Anonymity. </strong>Some people may want to use BTC anonymously,
                                    either for personal privacy or to protect themselves from potential
                                    repercussions in countries where BTC is not legal. A BTC mixer can help
                                    to obscure the identity of the person making the transaction.</p>
                                <p><a href="#" target="_blank" rel="noopener">Check out
                                        BTC privacy use cases</a></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-4">
                                Isn`t BTC anonymous? </h3>
                            <div id="tab-4" class="accordion-collapse" aria-labelledby="tab-head-4">
                                <p><strong>BTC is often referred to as an anonymous digital currency, but in
                                        reality, it is only pseudonymous. </strong>While BTC transactions do not
                                    contain any personal information about the people involved, they are still
                                    recorded on the blockchain, which is a public ledger. This means that anyone can
                                    see the transaction history of any BTC address.</p>
                                <p>Therefore, while BTC transactions are not directly linked to a person`s
                                    real-world identity, they can still be traced through other means. For example,
                                    if someone uses their real identity to buy BTC or if they use their BTC
                                    address for other purposes (such as posting it online or associating it with
                                    their online identity), then it may be possible to trace their BTC
                                    transactions back to them.</p>
                                <p><strong>For this reason, some people choose to use a BTC mixer to obscure the
                                        origin of their transactions and provide an additional layer of
                                        anonymity. </strong></p>
                                <p><a href="#" target="_blank" rel="noopener">Learn
                                        more about BTC anonymity</a></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-5">
                                Is Whir anonymous? </h3>
                            <div id="tab-5" class="accordion-collapse" aria-labelledby="tab-head-5">
                                <p><strong>Absolutely. Whir is an anonymous, non-KYC BTC mixing
                                        service. </strong></p>
                                <p>We never ask for user names, email addresses, or other forms of identification.
                                    Additionally, we don&rsquo;t log IP addresses and don&rsquo;t use tracking
                                    scripts.</p>
                                <p>If you need an extra layer of privacy, you can use the Tor version of our service
                                    at
                                    <a href="http://whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion"
                                       target="_blank" rel="noopener">whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion</a>.
                                </p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-6">
                                Do you require KYC? </h3>
                            <div id="tab-6" class="accordion-collapse" aria-labelledby="tab-head-6">
                                <p>Know Your Customer (KYC) is a process that financial institutions and other
                                    regulated companies use to verify the identity of their clients and assess their
                                    potential risks for money laundering or financing terrorism.</p>
                                <p>The KYC process typically involves collecting and verifying personal information
                                    about a customer, such as their name, address, and date of birth. This
                                    information is used to identify the customer and confirm that they are who they
                                    claim to be. In some cases, a company may also ask for additional information or
                                    documents, such as a government-issued ID or proof of address, to complete the
                                    KYC process.</p>
                                <p>The purpose of KYC is to help companies comply with anti-money laundering (AML)
                                    and counter-terrorism financing (CTF) regulations, which require them to have a
                                    thorough understanding of their customers and their financial activities. By
                                    collecting and verifying this information, companies can better identify and
                                    mitigate any potential risks associated with their customers.</p>
                                <p>It is not necessary to do Know Your Customer (KYC) when using BTC as a
                                    currency. BTC is a decentralized digital currency that allows users to send
                                    and receive payments without the need for a central authority or financial
                                    institution. This means that there is no requirement for users to provide
                                    personal information or go through a KYC process when using BTC.</p>
                                <p><strong>Therefore, we do not require users to complete a KYC process in order to
                                        use our platform. </strong></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-7">
                                Are there any BTC mixing limits? </h3>
                            <div id="tab-7" class="accordion-collapse" aria-labelledby="tab-head-7">
                                <p>Whir BTC mixer have limits on the amount of BTC that can be mixed at one
                                    time.</p>
                                <p>The minimum amount you can mix is ' . setting("min_amount_btc", 0.01) . ' BTC.</p>
                                <p>Even though some BTC mixers promise to mix up to 1000 BTC at once,<strong> to
                                        guarantee the best privacy, and legal status of the transactions, Whir limits
                                        each transaction up to ' . setting("max_amount_btc", 1) . ' BTC.</strong></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-8">
                                How long does it take to process transaction? </h3>
                            <div id="tab-8" class="accordion-collapse" aria-labelledby="tab-head-8">
                                <p><strong>As soon as we receive the third confirmation of your transaction, we will
                                        initiate the BTC mixing transaction.</strong></p>
                                <p>If you chose "instant mixing" service, you will receive your mixed BTC within
                                    a few minutes.</p>
                                <p>If you chose a delay, the mixing transaction can potentially take several hours
                                    or more to complete the process.</p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-9">
                                How does a BTC mixer makes BTC private? </h3>
                            <div id="tab-9" class="accordion-collapse" aria-labelledby="tab-head-9">
                                <p><strong>A BTC mixer works by taking in BTC from many different people and
                                        then sending out new BTC to different addresses. </strong>This makes it
                                    difficult to trace the original transactions, as the funds have been mixed with
                                    the funds of many other people.</p>
                                <p>For example, imagine that Alice wants to send 1 BTC to Bob. If Alice sends
                                    the BTC directly from her wallet to Bob`s wallet, the transaction will be
                                    recorded on the blockchain, which is a public ledger of all BTC
                                    transactions. Anyone can see that Alice sent 1 BTC to Bob, and they can also
                                    see the transaction history of both Alice`s and Bob`s BTC addresses.</p>
                                <p>Now imagine that Alice uses a BTC mixer to send the 1 BTC to Bob. The
                                    mixer takes in BTC from Alice and many other people, and then sends out new
                                    BTC to different addresses. This makes it difficult to trace the original
                                    transactions, as the funds have been mixed with the funds of many other people.
                                    Therefore, it is more difficult to see that Alice sent 1 BTC to Bob, as the
                                    transaction is mixed with many other transactions.</p>
                                <p>This privacy-enhancing technique used to mix BTC transactions is referred to
                                    as CoinJoin. CoinJoin works by allowing multiple users to combine their BTC
                                    transactions into a single transaction, making it more difficult to determine
                                    which input corresponds to which output.</p>
                                <p>With CoinJoin, the transactions can be combined into a single transaction with
                                    multiple inputs and outputs. This makes it more difficult to determine which
                                    input corresponds to which output.</p>
                                <p><a href="#" target="_blank" rel="noopener">Learn more about
                                        CoinJoin</a></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-10">
                                Do you keep transaction logs? </h3>
                            <div id="tab-10" class="accordion-collapse" aria-labelledby="tab-head-10">
                                <p><strong>We permanently delete all transaction logs 24 hours after the BTC
                                        mixing transaction is complete. </strong></p>
                                <p>We do not log IP addresses and do not use 3rd party tracking scripts from Google
                                    or Facebook.</p>
                                <p>If privacy is still of concern to you, we recommend using the Tor browser and Tor
                                    version of our service at <a
                                        href="http://whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion"
                                        target="_blank" rel="noopener">whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion</a>.
                                </p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-11">
                                Do you have a Tor version of your site? </h3>
                            <div id="tab-11" class="accordion-collapse" aria-labelledby="tab-head-11">
                                <p>Yes, you can visit our Tor site at <a
                                        href="http://whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion"
                                        target="_blank" rel="noopener">whirtorrgetftvz4g466sjqkegtyi35bjl4bvotfkfossunf5my4x6ad.onion</a>.
                                </p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-12">
                                Is it legal to use a BTC mixer? </h3>
                            <div id="tab-12" class="accordion-collapse" aria-labelledby="tab-head-12">
                                <p>The legal status of BTC mixers varies depending on the specific laws and
                                    regulations of the country in which they are used. In some jurisdictions, the
                                    use of BTC mixers may be legal, while in others it may be illegal or
                                    restricted.</p>
                                <p><strong>In general, BTC mixers are not illegal in and of themselves, as they
                                        are simply a tool that can be used to obscure the origin of BTC
                                        transactions. </strong>However, some countries may have laws or regulations that
                                    prohibit or restrict the use of BTC mixers or similar privacy-enhancing
                                    tools.</p>
                                <p>It is worth noting that while BTC mixers can help to obscure the origin of
                                    BTC transactions, they do not guarantee complete anonymity. It is still
                                    possible for law enforcement or other parties to trace BTC transactions
                                    through other means.</p>
                                <p>If you are considering using a BTC mixer, it is important to understand the
                                    laws and regulations of your jurisdiction and to ensure that you are acting in
                                    compliance with them.</p>
                                <p>Before using Whir, please make sure to read our <a href="/terms"
                                                                                      target="_blank"
                                                                                      rel="noopener">Terms of
                                        service</a>.</p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-13">
                                What about the fees? </h3>
                            <div id="tab-13" class="accordion-collapse" aria-labelledby="tab-head-13">
                                <p><strong>We charge a flat service fee of 1%</strong> and a typical BTC
                                    transaction fee.</p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-14">
                                What does the Transaction ID stand for? </h3>
                            <div id="tab-14" class="accordion-collapse" aria-labelledby="tab-head-14">
                                <p>The transaction ID is a unique identification of your transaction. You can use
                                    the Transaction ID to check the status of your transaction or when contacting
                                    our <a href="#" target="_blank" rel="noopener">customer helpdesk</a>.
                                </p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-15">
                                Can I contact customer support? </h3>
                            <div id="tab-15" class="accordion-collapse" aria-labelledby="tab-head-15">
                                <p>Sure. We are here to help! Please <a href="#" target="_blank"
                                                                        rel="noopener">get in touch with us</a>, and
                                    we will respond asap.</p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-16">
                                Can I send BTC from a mixer to payment processor? </h3>
                            <div id="tab-16" class="accordion-collapse" aria-labelledby="tab-head-16">
                                <p>The payment processor`s BTC address, amount, and QR code are usually valid
                                    only for a few minutes to reflect the rapidly changing fiat-to-crypto exchange
                                    rate. Typically 15 to 20 minutes.</p>
                                <p>Therefore, we do not recommend you send BTC to a crypto payment processors
                                    directly, from a BTC mixer.</p>
                                <p>Instead, we recommend you send BTC to your anonymous wallet first.</p>
                                <p><a href="#" target="_blank" rel="noopener">Learn how to use
                                        Whir with crypto payment processors</a></p></div>
                        </div>


                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tab-head-17">
                                Why should I choose Whir bitcoin mixer? </h3>
                            <div id="tab-17" class="accordion-collapse" aria-labelledby="tab-head-17">
                                <p>Choosing a BTC mixer depends on a variety of factors, such as the specific
                                    needs of the user, the level of privacy and security they require, and the fees
                                    and limits of the mixer.<br/><br/>Some users may prioritize low fees and high
                                    limits, while others may prioritize a high level of privacy and security. It is
                                    important to carefully consider your own needs and requirements when choosing a
                                    BTC mixer.<br/><br/>It is also worth noting that while BTC mixers can
                                    help to obscure the origin of Bitcoin transactions, they do not guarantee
                                    complete anonymity. It is still possible for law enforcement or other parties to
                                    trace Bitcoin transactions through other means. Therefore, it is important to be
                                    cautious when using any Bitcoin mixer, regardless of which one you choose.</p>
                            </div>
                        </div>
                    </div>',
            ]
        ];
        foreach ($data as $page) {
            if (Page::whereName($page['name'])->doesntExist()) {
                Page::create($page);
            }
        }
    }
}
