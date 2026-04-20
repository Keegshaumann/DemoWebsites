<?php
$contacts = [
  ['name' => 'Tinus',     'phone' => '082 725 0565', 'tel' => '+27827250565'],
  ['name' => 'Wilco',     'phone' => '082 078 6910', 'tel' => '+27820786910'],
  ['name' => 'Jan Pieter','phone' => '073 781 1908', 'tel' => '+27737811908'],
];
$email = 'skyagdrone@gmail.com';
$pricing = [
  ['range' => '0 – 50 ha',     'price' => 'R250', 'unit' => '/ha'],
  ['range' => '50 – 100 ha',   'price' => 'R220', 'unit' => '/ha'],
  ['range' => '100 – 200 ha',  'price' => 'R200', 'unit' => '/ha'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SkyAg — Licensed Agricultural Drone Spraying</title>
  <meta name="description" content="SkyAg provides fully licensed agricultural crop spraying and fertilizer application by drone. Based in Oranjeville, South Africa." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<!-- animated background -->
<div class="bg-scene" aria-hidden="true">
  <div class="sun"></div>
  <div class="clouds cloud1"></div>
  <div class="clouds cloud2"></div>
  <div class="clouds cloud3"></div>
  <div class="field"></div>
  <div class="mist mist1"></div>
  <div class="mist mist2"></div>
</div>

<!-- flying drones -->
<div class="drone-fly drone-a" aria-hidden="true">
  <div class="drone">
    <div class="arm a1"></div><div class="arm a2"></div>
    <div class="arm a3"></div><div class="arm a4"></div>
    <div class="body"></div>
    <div class="rotor r1"></div><div class="rotor r2"></div>
    <div class="rotor r3"></div><div class="rotor r4"></div>
    <div class="spray"></div>
  </div>
</div>
<div class="drone-fly drone-b" aria-hidden="true">
  <div class="drone small">
    <div class="arm a1"></div><div class="arm a2"></div>
    <div class="arm a3"></div><div class="arm a4"></div>
    <div class="body"></div>
    <div class="rotor r1"></div><div class="rotor r2"></div>
    <div class="rotor r3"></div><div class="rotor r4"></div>
    <div class="spray"></div>
  </div>
</div>

<header class="nav">
  <a href="#home" class="brand">
    <span class="brand-sky">Sky</span><span class="brand-ag">Ag</span>
  </a>
  <nav>
    <a href="#services">Services</a>
    <a href="#pricing">Pricing</a>
    <a href="#coverage">Coverage</a>
    <a href="#contact" class="cta-link">Contact</a>
  </nav>
</header>

<!-- HERO -->
<section id="home" class="hero">
  <div class="hero-inner">
    <span class="badge reveal">Fully Licensed · South Africa</span>
    <h1 class="reveal">
      Precision <span class="grad">Agricultural Drone</span> Spraying
    </h1>
    <p class="lead reveal">
      Professional crop spraying and fertilizer application by drone.
      Even coverage, zero wheel damage, fast turnaround across your fields.
    </p>
    <div class="hero-cta reveal">
      <a href="#contact" class="btn btn-primary">Request a Quote</a>
      <a href="#pricing" class="btn btn-ghost">See Pricing</a>
    </div>
    <div class="stats reveal">
      <div class="stat"><div class="num" data-count="30">0</div><div class="lbl">L / ha flow rate</div></div>
      <div class="stat"><div class="num" data-count="100">0</div><div class="lbl">km free travel</div></div>
      <div class="stat"><div class="num" data-count="3">0</div><div class="lbl">licensed pilots</div></div>
    </div>
  </div>
  <div class="scroll-hint" aria-hidden="true"><span></span></div>
</section>

<!-- SERVICES -->
<section id="services" class="services">
  <div class="section-head reveal">
    <span class="eyebrow">What we do</span>
    <h2>Services built for <span class="grad">modern farms</span></h2>
    <p>Two core offerings, delivered by fully licensed UAV operators.</p>
  </div>

  <div class="cards">
    <article class="card reveal">
      <div class="card-icon">
        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 20h40M12 20l-4 8M52 20l4 8M20 20v-6M32 20v-6M44 20v-6"/>
          <circle cx="16" cy="22" r="3"/><circle cx="32" cy="22" r="3"/><circle cx="48" cy="22" r="3"/>
          <path d="M16 28v8M32 28v8M48 28v8" stroke-dasharray="2 3"/>
          <path d="M12 44h40" stroke-dasharray="3 4"/>
        </svg>
      </div>
      <h3>Drone Spraying</h3>
      <p>Liquid application at 30 L/ha. Uniform droplet coverage with GPS-guided flight paths. Ideal for herbicides, pesticides and foliar feeds.</p>
      <ul>
        <li>GPS-guided swath control</li>
        <li>Works on uneven terrain</li>
        <li>No soil compaction</li>
      </ul>
    </article>

    <article class="card reveal">
      <div class="card-icon">
        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 14h20l-4 28H26z"/>
          <path d="M32 22v14M26 28h12"/>
          <path d="M18 48h28M20 54h24"/>
        </svg>
      </div>
      <h3>Fertilizer Application</h3>
      <p>Dry granular spreading tailored to your field size and crop. Every spreading job is priced per quote based on rate and terrain.</p>
      <ul>
        <li>Custom rate per crop</li>
        <li>Accurate broadcast pattern</li>
        <li>Quoted per job</li>
      </ul>
    </article>
  </div>
</section>

<!-- PRICING -->
<section id="pricing" class="pricing">
  <div class="section-head reveal">
    <span class="eyebrow">Pricing</span>
    <h2>Liquid application <span class="grad">30 L/ha</span></h2>
    <p>Volume-based rates. The bigger the field, the lower the per-hectare cost.</p>
  </div>

  <div class="price-grid">
    <?php foreach ($pricing as $i => $p): ?>
      <div class="price-card reveal <?= $i === 1 ? 'feature' : '' ?>" style="--d: <?= $i * 0.1 ?>s">
        <?php if ($i === 1): ?><span class="tag">Most common</span><?php endif; ?>
        <div class="range"><?= htmlspecialchars($p['range']) ?></div>
        <div class="price"><?= $p['price'] ?><span><?= $p['unit'] ?></span></div>
        <div class="hint">Liquid spray application</div>
      </div>
    <?php endforeach; ?>
  </div>

  <p class="note reveal">Any dry spreading application is calculated per quote.</p>
</section>

<!-- COVERAGE -->
<section id="coverage" class="coverage">
  <div class="section-head reveal">
    <span class="eyebrow">Where we fly</span>
    <h2>Based in <span class="grad">Oranjeville</span></h2>
  </div>

  <div class="coverage-grid">
    <div class="cov-card reveal">
      <div class="cov-ring"><span>0–100 km</span></div>
      <h3>Free Travel</h3>
      <p>No travel fees within a 100 km radius of Oranjeville.</p>
    </div>
    <div class="cov-card reveal">
      <div class="cov-ring alt"><span>100 km+</span></div>
      <h3>R6 / km</h3>
      <p>Beyond 100 km we charge a flat per-kilometre rate for travel.</p>
    </div>
    <div class="cov-card reveal">
      <div class="cov-ring solid"><span>HQ</span></div>
      <h3>Oranjeville, SA</h3>
      <p>Central Free State location — quick dispatch to the Highveld region.</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
  <div class="section-head reveal">
    <span class="eyebrow">Get in touch</span>
    <h2>Ready to <span class="grad">book a spray</span>?</h2>
    <p>Reach out directly. We respond fast during the season.</p>
  </div>

  <div class="contact-grid">
    <?php foreach ($contacts as $c): ?>
      <a class="contact-card reveal" href="tel:<?= $c['tel'] ?>">
        <div class="avatar"><?= strtoupper($c['name'][0]) ?></div>
        <div>
          <div class="cname"><?= htmlspecialchars($c['name']) ?></div>
          <div class="cphone"><?= htmlspecialchars($c['phone']) ?></div>
        </div>
        <svg class="go" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
      </a>
    <?php endforeach; ?>
    <a class="contact-card email reveal" href="mailto:<?= $email ?>">
      <div class="avatar mail">@</div>
      <div>
        <div class="cname">Email</div>
        <div class="cphone"><?= $email ?></div>
      </div>
      <svg class="go" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<footer class="foot">
  <div>© <?= date('Y') ?> SkyAg — Licensed Agricultural Drone Services</div>
  <div class="foot-sub">Oranjeville, South Africa · <?= $email ?></div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
