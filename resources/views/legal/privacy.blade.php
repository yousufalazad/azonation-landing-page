{{-- resources/views/privacy.blade.php --}}
<x-landing-layout>
    {{-- Breadcrumb --}}
    <nav class="bg-white/70 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
        <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
            <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
            <li aria-hidden="true" class="text-slate-400">/</li>
            <li class="text-slate-900 font-medium">Privacy Policy</li>
        </ol>
    </nav>

    {{-- Header --}}
    <header class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0">
            <span
                class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-gradient-to-br from-blue-400/15 via-sky-300/10 to-indigo-300/10 blur-3xl"></span>
            <span
                class="absolute -bottom-24 -right-12 h-60 w-60 rounded-full bg-gradient-to-tr from-indigo-400/10 via-blue-400/10 to-sky-400/10 blur-3xl"></span>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-16 pb-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.08]">
                    Azonation Privacy Policy
                </h1>
                <p class="mt-4 text-slate-600">
                    We value your privacy and are committed to protecting your personal data across the globe.
                </p>
                <p class="mt-2 text-sm text-slate-500">
                    Last updated: {{ now()->format('j F Y') }}
                </p>
            </div>
        </div>
    </header>

    {{-- Body --}}
    <main id="content" class="relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-24">
            <div class="grid lg:grid-cols-12 gap-10">
                {{-- Sidebar TOC --}}
                <aside class="lg:col-span-4 xl:col-span-3">
                    <div class="sticky top-24 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <h2 class="text-sm font-semibold text-slate-900">On this page</h2>
                        <ul class="mt-3 space-y-2 text-sm">
                            <li><a href="#intro" class="text-slate-600 hover:text-blue-600">1. Introduction</a></li>
                            <li><a href="#who-we-are" class="text-slate-600 hover:text-blue-600">2. Who We Are</a></li>
                            <li><a href="#data-collected" class="text-slate-600 hover:text-blue-600">3. Data We
                                    Collect</a></li>
                            <li><a href="#how-used" class="text-slate-600 hover:text-blue-600">4. How We Use Data</a>
                            </li>
                            <li><a href="#legal-basis" class="text-slate-600 hover:text-blue-600">5. Legal Basis
                                    (GDPR/UK GDPR)</a></li>
                            <li><a href="#sharing" class="text-slate-600 hover:text-blue-600">6. Sharing &
                                    Sub-processors</a></li>
                            <li><a href="#cookies" class="text-slate-600 hover:text-blue-600">7. Cookies & Tracking</a>
                            </li>
                            <li><a href="#transfers" class="text-slate-600 hover:text-blue-600">8. International
                                    Transfers</a></li>
                            <li><a href="#retention" class="text-slate-600 hover:text-blue-600">9. Data Retention &
                                    Deletion</a></li>
                            <li><a href="#rights" class="text-slate-600 hover:text-blue-600">10. Your Rights</a></li>
                            <li><a href="#security" class="text-slate-600 hover:text-blue-600">11. Security Measures</a>
                            </li>
                            <li><a href="#children" class="text-slate-600 hover:text-blue-600">12. Children’s
                                    Privacy</a></li>
                            <li><a href="#regional" class="text-slate-600 hover:text-blue-600">13. Regional Notices
                                    (EU/UK/USA)</a></li>
                            <li><a href="#changes" class="text-slate-600 hover:text-blue-600">14. Changes to this
                                    Policy</a></li>
                            <li><a href="#contact" class="text-slate-600 hover:text-blue-600">15. Contact Us</a></li>
                        </ul>
                    </div>
                </aside>

                {{-- Main content --}}
                <section class="lg:col-span-8 xl:col-span-9">
                    <div class="prose prose-slate max-w-none">
                        <h2 id="intro">1. Introduction</h2>
                        <p>
                            This Privacy Policy explains how <strong>Azonation</strong> collects, uses, shares, and
                            protects your personal data when
                            you use our software-as-a-service platform, websites, mobile/desktop apps, and related
                            services (the “Service”).
                            We comply with global privacy regulations, including the EU General Data Protection
                            Regulation (GDPR), UK GDPR, the
                            California Consumer Privacy Act (CCPA/CPRA), and other major frameworks.
                        </p>

                        <h2 id="who-we-are">2. Who We Are</h2>
                        <p>
                            Azonation is a SaaS organisation management solution headquartered in London, UK, with a
                            global presence. We act
                            as a <em>controller</em> for personal data we collect directly and as a
                            <em>processor/service provider</em> for data
                            processed on behalf of our customers.
                        </p>

                        <h2 id="data-collected">3. Data We Collect</h2>
                        <ul>
                            <li><strong>Account Data:</strong> name, email, phone, organisation details, login
                                credentials.</li>
                            <li><strong>Payment Data:</strong> billing details, payment method info (processed securely
                                via third-party gateways).</li>
                            <li><strong>Usage Data:</strong> log files, device info, IP addresses, browser type, pages
                                visited.</li>
                            <li><strong>Content Data:</strong> information you upload such as member records, meeting
                                notes, events, projects.</li>
                            <li><strong>Support Data:</strong> communication with our team.</li>
                        </ul>

                        <h2 id="how-used">4. How We Use Data</h2>
                        <p>We process data to:</p>
                        <ul>
                            <li>Provide and operate the Service.</li>
                            <li>Bill and manage subscriptions.</li>
                            <li>Secure and monitor performance of the Service.</li>
                            <li>Respond to requests and provide support.</li>
                            <li>Comply with legal obligations.</li>
                            <li>Improve features and develop new services.</li>
                            <li>Communicate updates, offers, or compliance notices (you may opt-out where applicable).
                            </li>
                        </ul>

                        <h2 id="legal-basis">5. Legal Basis (GDPR/UK GDPR)</h2>
                        <p>We rely on the following legal bases when processing personal data in the EU/UK:</p>
                        <ul>
                            <li><strong>Contractual necessity</strong> (to provide the Service you subscribed to).</li>
                            <li><strong>Legal obligations</strong> (e.g., financial record keeping).</li>
                            <li><strong>Legitimate interests</strong> (e.g., service improvements, fraud prevention).
                            </li>
                            <li><strong>Consent</strong> (e.g., for marketing emails or cookies where required).</li>
                        </ul>

                        <h2 id="sharing">6. Sharing & Sub-processors</h2>
                        <p>
                            We do not sell your personal data. We may share information with trusted sub-processors such
                            as:
                        </p>
                        <ul>
                            <li>Cloud hosting and storage providers.</li>
                            <li>Payment processors (Stripe, PayPal, SSLCommerz, Razorpay, Paytm, Alipay, WeChat Pay).
                            </li>
                            <li>Analytics and support tools.</li>
                        </ul>
                        <p>
                            All sub-processors are under contractual obligations to maintain equivalent data protection
                            standards.
                        </p>

                        <h2 id="cookies">7. Cookies & Tracking</h2>
                        <p>
                            We use cookies and similar technologies to provide core functionality, improve performance,
                            and analyse usage.
                            Where required by law, you will see a consent banner allowing you to accept or reject
                            optional cookies.
                        </p>

                        <h2 id="transfers">8. International Transfers</h2>
                        <p>
                            Personal data may be transferred internationally. For EU/UK users, we rely on Standard
                            Contractual Clauses (SCCs),
                            the UK International Data Transfer Addendum, and other lawful safeguards. Where possible, we
                            offer regional hosting
                            options.
                        </p>

                        <h2 id="retention">9. Data Retention & Deletion</h2>
                        <p>
                            We retain data as long as necessary for your subscription and for limited periods thereafter
                            for backup, audit,
                            and legal compliance. You may request deletion or export of your data via the admin console
                            or by contacting us.
                        </p>

                        <h2 id="rights">10. Your Rights</h2>
                        <p>Depending on your region, you may have rights to:</p>
                        <ul>
                            <li>Access, correct, or delete your personal data.</li>
                            <li>Port your data to another provider.</li>
                            <li>Restrict or object to processing.</li>
                            <li>Withdraw consent where processing is based on consent.</li>
                            <li>Lodge a complaint with a supervisory authority.</li>
                        </ul>

                        <h2 id="security">11. Security Measures</h2>
                        <p>
                            We apply industry-standard security including TLS encryption, access controls, monitoring,
                            backups, and incident
                            response processes. You are responsible for securing your credentials and devices.
                        </p>

                        <h2 id="children">12. Children’s Privacy</h2>
                        <p>
                            Our Service is not directed to children under 16 (or the age of digital consent in your
                            region). We do not knowingly
                            collect their personal data. If you believe a child has provided data, please contact us for
                            removal.
                        </p>

                        <h2 id="regional">13. Regional Notices</h2>
                        <h3>EU/UK</h3>
                        <p>
                            We comply with GDPR and UK GDPR. Our DPA (available on request or via your admin panel)
                            governs processing of
                            Customer Data where we act as a processor. Supervisory authority: ICO (UK).
                        </p>
                        <h3>USA</h3>
                        <p>
                            Under CCPA/CPRA, we act as a “service provider” and will not sell or share personal
                            information except as permitted
                            by law. You may exercise rights to access or delete data as described above.
                        </p>
                        <h3>Global</h3>
                        <p>
                            For other jurisdictions, we apply equivalent privacy controls and will adapt practices as
                            local laws require.
                        </p>

                        <h2 id="changes">14. Changes to this Policy</h2>
                        <p>
                            We may update this Privacy Policy from time to time. Significant changes will be notified
                            via email or in-product
                            notice. Continued use after the effective date constitutes acceptance.
                        </p>

                        <h2 id="contact">15. Contact Us</h2>
                        <p>
                            If you have questions or requests regarding privacy, please email:
                            <a href="mailto:privacy@azonation.com">privacy@azonation.com</a> or write to us at:
                            <em>Azonation, London, United Kingdom</em>.
                        </p>

                        <hr>
                        <p class="text-sm text-slate-500">
                            This Privacy Policy is part of our <a href="{{ url('/terms') }}">Terms of Service</a>. For
                            processing of personal
                            data on your behalf, please also review our <a href="{{ url('/legal/dpa') }}">Data
                                Processing Addendum (DPA)</a>.
                        </p>
                    </div>

                    {{-- Back to top --}}
                    <div class="mt-10">
                        <a href="#content"
                            class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-700 hover:border-blue-300">
                            <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 4l-7 7h4v7h6v-7h4z" />
                            </svg>
                            Back to top
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </main>
</x-landing-layout>