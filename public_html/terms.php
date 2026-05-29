<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page = [
    'title'       => 'Terms of Use & Broker Disclosure — HabeshAir',
    'description' => 'Terms of use, air charter broker disclosure, and limitation of liability for the HabeshAir charter coordination platform, operated by Samic Ventures LLC.',
    'canonical'   => url('/terms.php'),
    'schema'      => 'organization',
];
include __DIR__ . '/includes/header.php';
?>
<section class="section">
  <div class="container prose legal">
    <h1>Terms of Use &amp; Broker Disclosure</h1>
    <p class="updated">Last updated: <?= date('F Y') ?>.</p>

    <div class="disclosure-box">
      <h3>Important — HabeshAir is a broker, not an airline</h3>
      <p><?= e(brand()) ?> is an air charter <strong>broker</strong>. It is not a direct or indirect air carrier, does not own or operate aircraft, and does not have operational control of any flight. All air transportation is provided by independent, licensed third-party air carriers (FAA-certificated Part&nbsp;135 operators or their foreign equivalents) that hold operational control of, and full responsibility for, the flight.</p>
    </div>

    <div class="legal-toc" aria-label="Contents">
      <strong>On this page</strong>
      <ul>
        <li><a href="#what">1. What HabeshAir is</a></li>
        <li><a href="#broker">2. Broker status &amp; regulatory disclosure</a></li>
        <li><a href="#quotes">3. Quotes, bookings &amp; confirmation</a></li>
        <li><a href="#availability">4. Operator approval &amp; availability</a></li>
        <li><a href="#payment">5. Pricing, fees &amp; payment</a></li>
        <li><a href="#cancellation">6. Changes, cancellations &amp; refunds</a></li>
        <li><a href="#client">7. Client responsibilities</a></li>
        <li><a href="#safety">8. Safety &amp; operational control</a></li>
        <li><a href="#warranty">9. No warranty</a></li>
        <li><a href="#liability">10. Limitation of liability</a></li>
        <li><a href="#indemnity">11. Indemnification</a></li>
        <li><a href="#forcemajeure">12. Force majeure</a></li>
        <li><a href="#sanctions">13. Sanctions &amp; lawful use</a></li>
        <li><a href="#site">14. Use of this site</a></li>
        <li><a href="#operator">15. Who operates HabeshAir</a></li>
        <li><a href="#law">16. Governing law &amp; disputes</a></li>
        <li><a href="#changes">17. Changes to these terms</a></li>
        <li><a href="#contact">18. Contact</a></li>
      </ul>
    </div>

    <p>These Terms of Use ("Terms") govern your use of this website and the charter coordination services offered by <?= e(brand()) ?>. By submitting a request, contacting us, or otherwise using our services, you agree to these Terms.</p>

    <h2 id="what">1. What HabeshAir is</h2>
    <p><?= e(brand()) ?> is a charter coordination and brokerage platform. We arrange charter flights on behalf of our clients by sourcing and coordinating with third-party aircraft operators and airlines. <?= e(brand()) ?> does not itself operate aircraft and is not an air carrier.</p>

    <h2 id="broker">2. Broker status &amp; regulatory disclosure</h2>
    <p>To the extent applicable law (including U.S. Department of Transportation rules for air charter brokers, 14&nbsp;CFR Part&nbsp;295, and comparable foreign regulations) requires the following disclosures, <?= e(brand()) ?> discloses that:</p>
    <ul class="list-check">
      <li><strong>Broker, not carrier.</strong> <?= e(brand()) ?> acts as an air charter broker that arranges air transportation. It is not a direct or indirect air carrier and does not operate aircraft.</li>
      <li><strong>Capacity.</strong> Unless otherwise agreed in writing for a particular booking, <?= e(brand()) ?> acts as the authorized agent of the client (the charterer) for the purpose of arranging charter air transportation with a direct air carrier.</li>
      <li><strong>Operating carrier.</strong> The flight is performed by a separate, licensed operating air carrier. <?= e(brand()) ?> will identify the operating air carrier(s) to the client before the flight to the extent known, and will notify the client of any change to the operating carrier.</li>
      <li><strong>Insurance.</strong> The operating air carrier is responsible for maintaining aircraft liability insurance as required by applicable regulation. On request, <?= e(brand()) ?> will provide the information it has about the operating carrier and the existence of such insurance.</li>
      <li><strong>Compensation.</strong> <?= e(brand()) ?> is compensated through a coordination fee and/or markup, which is included in the price quoted to the client. There is no charge to submit a request, receive a quote, or speak with a coordinator.</li>
      <li><strong>No operational control.</strong> Operational control of every flight — including airworthiness, crew, dispatch, and the decision to operate — rests solely with the licensed operating air carrier.</li>
    </ul>

    <h2 id="quotes">3. Quotes, bookings &amp; confirmation</h2>
    <p>Quotes are indicative and are not binding until confirmed in writing by the selected operating carrier and acknowledged by you. Submitting a request does not create a binding booking and does not commit you to anything. A charter proceeds only upon your written confirmation and the operator's written acceptance.</p>

    <h2 id="availability">4. Operator approval &amp; availability</h2>
    <p>Final aircraft availability, pricing, and operational approval depend on the licensed operator, applicable regulations, route, airport and overflight permissions, ground handling, weather, and safety considerations. <?= e(brand()) ?> coordinates options and proposes solutions; the operator confirms and performs the flight.</p>

    <h2 id="payment">5. Pricing, fees &amp; payment</h2>
    <p>Quotes are issued in writing and include operator costs and <?= e(brand()) ?>'s coordination fee. Payment terms are stated in the operator agreement and any invoice we issue. Taxes, fees, and charges imposed by authorities or the operator may apply. We do not request or store full payment-card or bank credentials through this website.</p>

    <h2 id="cancellation">6. Changes, cancellations &amp; refunds</h2>
    <p>Changes, cancellations, rescheduling, and refunds follow the operating carrier's policy and the terms of your specific booking, unless otherwise agreed in writing. Some bookings are non-refundable once confirmed. We will help coordinate alternatives where possible.</p>

    <h2 id="client">7. Client responsibilities</h2>
    <ul class="list-check">
      <li>Provide accurate and complete information for your request, passengers, and cargo.</li>
      <li>Ensure all passengers hold valid travel documents, visas, and permissions for the route.</li>
      <li>Declare dangerous goods, hazardous materials, and any special cargo accurately and in advance.</li>
      <li>Comply with the operating carrier's rules, applicable aviation regulations, and the law.</li>
    </ul>

    <h2 id="safety">8. Safety &amp; operational control</h2>
    <p>The operating air carrier is solely responsible for the safe conduct of the flight, including airworthiness, crew qualification, dispatch, weather and route decisions, and compliance with aviation regulations. <?= e(brand()) ?> does not exercise, and cannot exercise, operational control.</p>

    <h2 id="warranty">9. No warranty</h2>
    <p><?= e(brand()) ?> coordinates options and proposes solutions; the operator confirms and performs the flight. While we work with operators we know and trust, we do not warrant operator performance and are not liable for operator acts or omissions. Services and information are provided on an "as is" and "as available" basis.</p>

    <h2 id="liability">10. Limitation of liability</h2>
    <p>To the fullest extent permitted by law, <?= e(brand()) ?>'s aggregate liability arising out of or relating to a charter is limited to the coordination fees actually paid to <?= e(brand()) ?> for the specific flight in question. <?= e(brand()) ?> is not responsible for indirect, incidental, special, consequential, or punitive damages, or for operator-side events including delay, diversion, cancellation, weather, regulatory restrictions, or technical issues.</p>

    <h2 id="indemnity">11. Indemnification</h2>
    <p>You agree to indemnify and hold harmless <?= e(brand()) ?> and Samic Ventures LLC from claims, losses, and expenses arising from your breach of these Terms, your provision of inaccurate information, or your misuse of the services.</p>

    <h2 id="forcemajeure">12. Force majeure</h2>
    <p>No party is liable for failure or delay caused by events beyond reasonable control, including weather, airspace or airport closures, regulatory action, strikes, conflict, or other force-majeure events. Any aviation operation can be affected; we work to minimize impact.</p>

    <h2 id="sanctions">13. Sanctions &amp; lawful use</h2>
    <p>You represent that your use of our services complies with applicable export-control and economic-sanctions laws, and that neither you nor any beneficiary is subject to such sanctions. We may decline or stop coordinating any request that we believe is unlawful, unsafe, sanctioned, or misrepresented.</p>

    <h2 id="site">14. Use of this site</h2>
    <p>Submitting false, misleading, or fraudulent information through any <?= e(brand()) ?> form is prohibited. We may decline service at our discretion. All content on this site is owned by or licensed to Samic Ventures LLC and may not be copied without permission.</p>

    <h2 id="operator">15. Who operates HabeshAir</h2>
    <p><?= e(brand()) ?> is a brand operated by <strong>Samic Ventures LLC</strong>, a Wyoming (USA) limited liability company, 30 N Gould St, Ste N, Sheridan, WY 82801, USA. <?= e(brand()) ?> acts solely as a charter broker and arranges carriage performed by independent, licensed third-party air carriers; it is not itself an air carrier and does not operate aircraft.</p>

    <h2 id="law">16. Governing law &amp; disputes</h2>
    <p>These Terms are governed by the laws of the State of Wyoming, USA, without regard to conflict-of-law principles. The state and federal courts located in Wyoming have exclusive jurisdiction over any dispute, unless applicable law requires otherwise.</p>

    <h2 id="changes">17. Changes to these terms</h2>
    <p>We may update these Terms from time to time. The "Last updated" date above reflects the current version. Continued use of the site after changes constitutes acceptance of the revised Terms.</p>

    <h2 id="contact">18. Contact</h2>
    <p>Questions about these Terms: <a href="mailto:<?= e(cfg('app.email')) ?>"><?= e(cfg('app.email')) ?></a>.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
