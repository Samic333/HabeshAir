# HabeshAir.com

Premium air charter brokerage platform for Africa, the Middle East, and beyond.
Custom PHP 8 site for Namecheap cPanel shared hosting. No Node.js, no build step.

- Live: https://habeshair.com
- Stack: PHP 8.x · MySQL · vanilla HTML/CSS/JS · PHPMailer (SMTP)
- Repo: https://github.com/Samic333/habeshaair

## Local development

Requires PHP 8.1+ (`brew install php`) and MAMP for MySQL.

```sh
# 1. MAMP: start MySQL on port 8889. Create database `habeshair_local` + user.
# 2. phpMyAdmin → Import database/schema.sql
# 3. Generate an admin password hash and update the seed row:
#    php -r "echo password_hash('YourTempPass', PASSWORD_BCRYPT, ['cost'=>12]);"
#    Run: UPDATE admin_users SET password_hash='<hash>' WHERE id=1;
# 4. Copy includes/config.sample.php → includes/config.php and fill in creds.
# 5. From public_html/, run:
cd public_html
php -S localhost:8000
```

Open `http://localhost:8000/`. Admin: `http://localhost:8000/admin/login.php`.

## Deploying to Namecheap (cPanel)

1. cPanel → MySQL Databases → create db + user with full privileges.
2. cPanel → phpMyAdmin → Import `database/schema.sql`.
3. Generate a real bcrypt hash locally (see above) and update `admin_users`.
4. cPanel → Git Version Control → connect this repo, branch `main`, deploy path
   `/home/<cpuser>/repositories/habeshaair`. The `.cpanel.yml` script copies
   `public_html/` to the public web root automatically on each pull.
5. cPanel File Manager → create `public_html/includes/config.php` with real
   creds (this file is gitignored; deploys never overwrite it).
6. Permissions: dirs 755, files 644, `logs/` writable, `config.php` 600.
7. cPanel → Email Deliverability → enable SPF + DKIM for `habeshair.com`.

## Project structure

```
HabeshAir/
├── .cpanel.yml                # cPanel git auto-deploy script
├── database/
│   ├── schema.sql             # CREATE TABLEs + seed admin
│   └── README.md
└── public_html/
    ├── .htaccess              # HTTPS, friendly URLs, security, gzip, 404
    ├── index.php · services.php · request.php · request-success.php ·
    │   how-it-works.php · about.php · contact.php · contact-success.php ·
    │   faq.php · privacy.php · terms.php · 404.php
    ├── includes/              # bootstrap, db, csrf, validation, mailer, header, footer
    ├── admin/                 # login, dashboard, requests, messages
    ├── assets/css · js · images/
    └── logs/
```

## Reference

- **Canonical brand name: `HabeshAir`** (Habesh + Air). Confirmed 2026-05-29. The
  customer-facing name is hardcoded in `includes/helpers.php` → `brand()` so the
  logo, copyright, schema.org, and `<title>` never drift again. (Production
  `config.php` historically carried `HabeshaAir`; `brand()` overrides it for display.)
- Positioning: **air charter broker, NOT an airline / air carrier.** Never describe
  HabeshAir as an "airline" in customer-facing copy — it is a brokerage. Broker
  disclosures live in the footer, the hero, Terms §2, and the services page.
- Domain (single 'a'): habeshair.com
- Admin email: info@habeshair.com
- Display phone: +1 (307) 289-7191 (Samic Ventures LLC US line — shown in footer/contact strip)
- WhatsApp link target: +1 480 915 9971 (E.164 `14809159971` — kept; wa.me link still goes here)
- Operator language: "HabeshAir arranges flights on behalf of its clients with
  FAA Certified Part 135 air carriers or foreign equivalents."

## 2026-05-29 — Premium pass + legal hardening

- New gold "north-star + orbital" logo (`assets/images/logo.svg`, `favicon.svg`),
  generated favicons (`favicon.ico`, `favicon-32.png`, `apple-touch-icon.png`) and a
  1200×630 social card (`assets/images/og-default.jpg`).
- Scroll-reveal animations, animated hero, count-up metrics, header scroll state,
  gold micro-interactions (`assets/css/style.css`, `assets/js/main.js`). All
  `prefers-reduced-motion` safe; no-JS safe via the early `.js` class.
- Fixed the hero badge that read "Premium Air Charter **Airline**" → "Brokerage".
- Rewrote `terms.php` (broker/DOT Part 295-aligned disclosure, liability, indemnity,
  sanctions, Wyoming governing law) and `privacy.php` (GDPR legal bases + EEA/UK
  rights, CCPA/CPRA, international transfers, retention).
- Fixed broken `og-default.jpg` + `favicon.ico` 404s; enriched schema.org.
