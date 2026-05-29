<?php
/**
 * schema-org.php — emits a JSON-LD <script> based on $page['schema'].
 * Called from header.php.
 */

function render_schema_org(): void {
    global $page;
    $key  = $page['schema'] ?? 'organization';
    $base = (string)cfg('app.base_url', 'https://habeshair.com');
    $org  = [
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        'name'     => brand(),
        'legalName'=> 'Samic Ventures LLC',
        'url'      => $base,
        'logo'     => $base . '/assets/images/logo.svg',
        'image'    => $base . '/assets/images/og-default.jpg',
        'email'    => (string)cfg('app.email', 'info@habeshair.com'),
        'telephone'=> (string)cfg('app.whatsapp_display', '+1 (307) 289-7191'),
        'description' => 'Premium air charter brokerage coordinating VIP, cargo, humanitarian, and emergency flights across Africa, the Middle East, and beyond. HabeshAir is an air charter broker, not a direct air carrier.',
        'areaServed'  => ['Africa', 'Middle East', 'Europe'],
        'sameAs'      => ['https://samicventures.com'],
        'parentOrganization' => [
            '@type' => 'Organization',
            'name'  => 'Samic Ventures LLC',
            'url'   => 'https://samicventures.com',
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress'   => '30 N Gould St, Ste N',
            'addressLocality' => 'Sheridan',
            'addressRegion'   => 'WY',
            'postalCode'      => '82801',
            'addressCountry'  => 'US',
        ],
    ];

    $blocks = [$org];

    if ($key === 'home' || $key === 'organization') {
        // Just the org block
    } elseif ($key === 'service') {
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'Service',
            'serviceType' => 'Air Charter Brokerage',
            'provider' => ['@type' => 'Organization', 'name' => $org['name']],
            'areaServed' => 'Africa, Middle East, and global routes',
            'description' => 'VIP, cargo, humanitarian, emergency medevac, and group charter flight coordination through a vetted global network of licensed operators and airlines.',
        ];
    } elseif ($key === 'contactpage') {
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'ContactPage',
            'name'     => 'Contact HabeshAir',
            'url'      => $base . '/contact.php',
        ];
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'ContactPoint',
            'contactType' => 'customer service',
            'email'    => $org['email'],
            'telephone'=> $org['telephone'],
            'availableLanguage' => ['English', 'Amharic'],
            'areaServed' => 'Worldwide',
        ];
    } elseif ($key === 'faqpage' && !empty($page['faq']) && is_array($page['faq'])) {
        $items = [];
        foreach ($page['faq'] as $qa) {
            $items[] = [
                '@type' => 'Question',
                'name'  => $qa['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa['a']],
            ];
        }
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'FAQPage',
            'mainEntity' => $items,
        ];
    }

    foreach ($blocks as $b) {
        echo "<script type=\"application/ld+json\">" . json_encode($b, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>\n";
    }
}
