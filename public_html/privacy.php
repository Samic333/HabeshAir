<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page = [
    'title'       => 'Privacy Policy — HabeshAir',
    'description' => 'How HabeshAir (operated by Samic Ventures LLC) collects, uses, shares, and protects the information you provide, including GDPR and California privacy rights.',
    'canonical'   => url('/privacy.php'),
    'schema'      => 'organization',
];
include __DIR__ . '/includes/header.php';
?>
<section class="section">
  <div class="container prose legal">
    <h1>Privacy Policy</h1>
    <p class="updated">Last updated: <?= date('F Y') ?>.</p>

    <div class="legal-toc" aria-label="Contents">
      <strong>On this page</strong>
      <ul>
        <li><a href="#who">1. Who we are</a></li>
        <li><a href="#collect">2. What we collect</a></li>
        <li><a href="#use">3. How we use it</a></li>
        <li><a href="#bases">4. Legal bases (GDPR)</a></li>
        <li><a href="#sharing">5. Sharing &amp; disclosure</a></li>
        <li><a href="#transfers">6. International data transfers</a></li>
        <li><a href="#retention">7. Retention</a></li>
        <li><a href="#security">8. Security</a></li>
        <li><a href="#cookies">9. Cookies</a></li>
        <li><a href="#rights">10. Your rights</a></li>
        <li><a href="#gdpr">11. EEA / UK rights (GDPR)</a></li>
        <li><a href="#ccpa">12. California rights (CCPA/CPRA)</a></li>
        <li><a href="#children">13. Children's privacy</a></li>
        <li><a href="#contact">14. Contact</a></li>
      </ul>
    </div>

    <h2 id="who">1. Who we are</h2>
    <p><?= e(brand()) ?> is a brand operated by <strong>Samic Ventures LLC</strong>, a Wyoming (USA) limited liability company, 30 N Gould St, Ste N, Sheridan, WY 82801, USA, which is the data controller for information collected through this site.</p>

    <h2 id="collect">2. What we collect</h2>
    <p>When you request a charter, contact us, or use this site, we collect: your name, email, phone, organization (if provided), trip details (route, dates, payload, special requirements), preferred contact method, message content, and basic technical data (IP address, user agent, timestamps) for security and rate-limiting.</p>

    <h2 id="use">3. How we use it</h2>
    <ul class="list-check">
      <li>To respond to your charter request and source aircraft options.</li>
      <li>To coordinate the flight with the selected operator on your behalf.</li>
      <li>To communicate with you about your request via your preferred contact method.</li>
      <li>To keep records for operational, accounting, and legal compliance.</li>
      <li>To prevent abuse and fraud (rate-limiting, anti-spam).</li>
    </ul>

    <h2 id="bases">4. Legal bases (GDPR)</h2>
    <p>Where the EU/UK General Data Protection Regulation applies, we process your personal data on these legal bases:</p>
    <ul class="list-check">
      <li><strong>Contract / pre-contract steps</strong> — to handle your request and arrange a charter.</li>
      <li><strong>Legitimate interests</strong> — to operate, secure, and improve our services and prevent abuse.</li>
      <li><strong>Legal obligation</strong> — to meet record-keeping, tax, and regulatory requirements.</li>
      <li><strong>Consent</strong> — where you have given it (you may withdraw consent at any time).</li>
    </ul>

    <h2 id="sharing">5. Sharing &amp; disclosure</h2>
    <p>To deliver a charter, we share necessary details (route, dates, passenger/cargo information, contact details) with the licensed charter operator or airline selected for your flight. We also use trusted service providers (for example, email delivery and hosting) that process data on our behalf under appropriate safeguards. We may disclose information where required by law. We do <strong>not</strong> sell or rent your personal information, and we do not share it for third-party marketing.</p>

    <h2 id="transfers">6. International data transfers</h2>
    <p>We operate from the United States and coordinate flights across Africa, the Middle East, and beyond. Your information may be processed in, or transferred to, countries (including the USA) whose data-protection laws differ from those in your country. Where required, we rely on appropriate safeguards (such as standard contractual clauses) for cross-border transfers.</p>

    <h2 id="retention">7. Retention</h2>
    <p>Charter request and contact records are retained for as long as needed for operational, regulatory, and accounting purposes, and then deleted or anonymized. You may request deletion of your records at any time by emailing <a href="mailto:<?= e(cfg('app.email')) ?>"><?= e(cfg('app.email')) ?></a>; we will action requests subject to legal retention requirements.</p>

    <h2 id="security">8. Security</h2>
    <p>Data is transmitted over HTTPS and stored on access-controlled servers. We use industry-standard practices including hashed administrative credentials, prepared database statements, and CSRF protections. No method of transmission or storage is completely secure, but we work to protect your information.</p>

    <h2 id="cookies">9. Cookies</h2>
    <p>We use a single session cookie to keep your form submission state and protect against cross-site request forgery. We do not use third-party advertising or tracking cookies, and we do not run cross-site behavioural advertising.</p>

    <h2 id="rights">10. Your rights</h2>
    <p>Subject to applicable law, you may request access to, correction of, or deletion of your personal information, and you may object to or restrict certain processing. Contact <a href="mailto:<?= e(cfg('app.email')) ?>"><?= e(cfg('app.email')) ?></a> and we will respond within the time required by law.</p>

    <h2 id="gdpr">11. EEA / UK rights (GDPR)</h2>
    <p>If you are in the European Economic Area or the United Kingdom, you have the rights to access, rectify, erase, restrict, and port your data, to object to processing based on legitimate interests, and to withdraw consent. You also have the right to lodge a complaint with your local data-protection supervisory authority.</p>

    <h2 id="ccpa">12. California rights (CCPA/CPRA)</h2>
    <p>If you are a California resident, you have the right to know what personal information we collect and how we use it, to request access to or deletion of that information, to correct inaccurate information, and to not be discriminated against for exercising your rights. We do <strong>not</strong> sell or "share" personal information as those terms are defined under California law. To exercise these rights, contact <a href="mailto:<?= e(cfg('app.email')) ?>"><?= e(cfg('app.email')) ?></a>.</p>

    <h2 id="children">13. Children's privacy</h2>
    <p>Our services are intended for adults arranging air travel. We do not knowingly collect personal information from children. If you believe a child has provided us information, contact us and we will delete it.</p>

    <h2 id="contact">14. Contact</h2>
    <p>Questions about this policy, or to exercise your rights: <a href="mailto:<?= e(cfg('app.email')) ?>"><?= e(cfg('app.email')) ?></a>.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
