{{-- resources/views/terms.blade.php --}}
<x-landing-layout>
    {{-- Breadcrumbs (optional) --}}
    <nav class="bg-white/70 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
        <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
            <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
            <li aria-hidden="true" class="text-slate-400">/</li>
            <li class="text-slate-900 font-medium">Terms</li>
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
                    Azonation Terms of Service
                </h1>
                <p class="mt-4 text-slate-600">
                    Please read these Terms carefully. By using Azonation, you agree to them.
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
                            <li><a href="#agreement" class="text-slate-600 hover:text-blue-600">1. Agreement</a></li>
                            <li><a href="#definitions" class="text-slate-600 hover:text-blue-600">2. Definitions</a>
                            </li>
                            <li><a href="#eligibility" class="text-slate-600 hover:text-blue-600">3. Eligibility &
                                    Accounts</a></li>
                            <li><a href="#subscriptions" class="text-slate-600 hover:text-blue-600">4. Subscriptions &
                                    Billing</a></li>
                            <li><a href="#acceptable-use" class="text-slate-600 hover:text-blue-600">5. Acceptable
                                    Use</a></li>
                            <li><a href="#customer-data" class="text-slate-600 hover:text-blue-600">6. Customer Data &
                                    IP</a></li>
                            <li><a href="#privacy" class="text-slate-600 hover:text-blue-600">7. Data Protection &
                                    Privacy</a></li>
                            <li><a href="#security" class="text-slate-600 hover:text-blue-600">8. Security & Data
                                    Residency</a></li>
                            <li><a href="#third-party" class="text-slate-600 hover:text-blue-600">9. Third‑Party
                                    Services</a></li>
                            <li><a href="#service-management" class="text-slate-600 hover:text-blue-600">10. Our Service
                                    Management Rights</a></li>
                            <li><a href="#sla-support" class="text-slate-600 hover:text-blue-600">11. Availability &
                                    Support</a></li>
                            <li><a href="#termination" class="text-slate-600 hover:text-blue-600">12. Suspension &
                                    Termination</a></li>
                            <li><a href="#warranties" class="text-slate-600 hover:text-blue-600">13. Disclaimers</a>
                            </li>
                            <li><a href="#liability" class="text-slate-600 hover:text-blue-600">14. Liability</a></li>
                            <li><a href="#indemnity" class="text-slate-600 hover:text-blue-600">15. Indemnity</a></li>
                            <li><a href="#regional" class="text-slate-600 hover:text-blue-600">16. Regional Terms
                                    (EU/UK/USA)</a></li>
                            <li><a href="#changes" class="text-slate-600 hover:text-blue-600">17. Changes to Terms</a>
                            </li>
                            <li><a href="#contact" class="text-slate-600 hover:text-blue-600">18. Contact</a></li>
                        </ul>
                    </div>
                </aside>

                {{-- Main content --}}
                <section class="lg:col-span-8 xl:col-span-9">
                    <div class="prose prose-slate max-w-none">
                        <h2 id="agreement">1. Agreement</h2>
                        <p>
                            These Terms of Service (“Terms”) form a legally binding agreement between you and
                            <strong>Azonation</strong> (“we”, “us”, “our”) governing access to and use of our
                            software‑as‑a‑service
                            platform, websites, mobile/desktop apps, APIs, documentation, and related services
                            (collectively, the “Service”).
                            If you are entering into these Terms on behalf of an organisation, you represent that you
                            have authority to bind
                            that organisation. Our <a href="{{ url('/privacy') }}">Privacy Policy</a> and, where
                            applicable, our
                            <a href="{{ url('/legal/dpa') }}">Data Processing Addendum (DPA)</a> are incorporated by
                            reference.
                        </p>

                        <h2 id="definitions">2. Definitions</h2>
                        <ul>
                            <li><strong>Customer</strong> means the organisation or individual who subscribes to the
                                Service.</li>
                            <li><strong>Authorised Users</strong> are individuals the Customer permits to use the
                                Service.</li>
                            <li><strong>Customer Data</strong> means data submitted to the Service by or for the
                                Customer, including personal data.</li>
                            <li><strong>Personal Data</strong> has the meaning given in applicable data protection laws
                                (e.g. GDPR, UK GDPR, CCPA).</li>
                            <li><strong>Order</strong> means an online sign‑up, plan selection, or written order
                                referencing these Terms.</li>
                        </ul>

                        <h2 id="eligibility">3. Eligibility & Accounts</h2>
                        <p>
                            You must be at least the age of majority in your jurisdiction to create an account. You are
                            responsible for the
                            accuracy of registration information, for maintaining account security, and for all
                            activities under your account.
                            We may require identity or organisational verification to activate or continue access.
                        </p>

                        <h2 id="subscriptions">4. Subscriptions, Pricing & Billing</h2>
                        <p>
                            The Service is offered on a subscription basis with regional, flexible billing (e.g.,
                            monthly, quarterly,
                            half‑yearly, yearly) and multi‑currency pricing (e.g., USD, EUR, GBP, BDT, CNY, INR) as
                            presented at checkout or
                            in your admin console. Fees are based on plan features, active member counts, and other
                            usage metrics set out in
                            the Order. Unless otherwise stated, fees exclude taxes; you are responsible for all
                            applicable taxes, duties, and
                            withholdings. Invoices are typically generated on the first day of each month for the
                            previous period, with payment
                            due on the date stated on the invoice.
                        </p>
                        <p>
                            By providing a payment method, you authorise us (and our payment processors) to charge all
                            fees and applicable
                            taxes. We may update prices or introduce new charges with prior notice in your admin console
                            and/or by email.
                            Price changes take effect in the next billing cycle unless you cancel before renewal.
                        </p>
                        <p>
                            <strong>Trials & Refunds.</strong> If you begin a trial, it will convert to a paid
                            subscription unless cancelled
                            before the trial ends. Except where required by law or expressly stated, <em>fees are
                                non‑refundable</em>.
                        </p>
                        <p>
                            <strong>Late Payments.</strong> We may apply reasonable late fees, suspend access, and/or
                            reduce limits for
                            non‑payment. You remain responsible for all accrued fees.
                        </p>

                        <h2 id="acceptable-use">5. Acceptable Use</h2>
                        <p>
                            You will not: (a) breach any law or the rights of others; (b) upload unlawful, harmful,
                            infringing, or personal data
                            you lack lawful basis to process; (c) interfere with or disrupt the Service; (d) reverse
                            engineer, decompile,
                            or attempt to bypass technical or usage limits; (e) use the Service to build a competing
                            product; (f) resell,
                            sublicense, or share non‑public features except as allowed in your plan; or (g) engage in
                            high‑risk activities
                            where Service failure could cause harm (e.g., medical diagnosis, life support, critical
                            infrastructure), unless we
                            expressly agree in writing.
                        </p>

                        <h2 id="customer-data">6. Customer Data, Ownership & IP</h2>
                        <p>
                            As between the parties, Customer retains all rights to Customer Data. You grant us a
                            worldwide, non‑exclusive,
                            limited licence to host, copy, process, transmit, display, and back up Customer Data solely
                            to provide, maintain,
                            secure, and improve the Service, to comply with law, and to prevent fraud or abuse.
                        </p>
                        <p>
                            We retain all rights in the Service, including software, interfaces, designs, and
                            documentation. Feedback you
                            provide may be used by us without restriction or obligation.
                        </p>

                        <h2 id="privacy">7. Data Protection & Privacy (Global, EU, UK, USA)</h2>
                        <p>
                            We implement privacy and data protection controls designed for global use, including the
                            EU/EEA General Data
                            Protection Regulation (GDPR), the UK GDPR and Data Protection Act 2018, and major US state
                            privacy laws such as
                            the CCPA/CPRA (California), VCDPA (Virginia), CPA (Colorado), CTDPA (Connecticut), and UCPA
                            (Utah), to the extent
                            they apply to our role.
                        </p>
                        <ul>
                            <li>
                                <strong>Roles.</strong> For Customer Data, Customer acts as “controller”/“business” and
                                Azonation acts as
                                “processor”/“service provider”. Our <a href="{{ url('/legal/dpa') }}">DPA</a>
                                (incorporated by reference) governs
                                our processing of Personal Data on your behalf.
                            </li>
                            <li>
                                <strong>Lawful Basis & Instructions.</strong> Customer is responsible for establishing
                                lawful basis, providing
                                required notices, and issuing documented instructions. We will process Personal Data
                                only on your instructions,
                                as set out in the DPA and your admin settings, except where required by law.
                            </li>
                            <li>
                                <strong>Data Subject Requests.</strong> We provide tools and assistance to help you
                                respond to requests
                                (access, deletion, correction, objection, portability) as required by applicable law.
                            </li>
                            <li>
                                <strong>International Transfers.</strong> Where Personal Data is transferred
                                internationally, we rely on
                                appropriate safeguards such as the EU Standard Contractual Clauses (SCCs) and the UK
                                International Data Transfer
                                Addendum, as set out in the DPA. Where applicable, we support participation in
                                recognised transfer frameworks or
                                apply alternative lawful mechanisms.
                            </li>
                            <li>
                                <strong>Sub‑processors.</strong> We use carefully vetted sub‑processors for
                                infrastructure, payments, support,
                                and analytics. A current list is available in your admin area or on request. We enter
                                into written agreements
                                with sub‑processors imposing equivalent protections.
                            </li>
                            <li>
                                <strong>Government & Law Enforcement Requests.</strong> We scrutinise requests, limit
                                disclosure to what is
                                legally required, and, where permitted, notify Customer before disclosure.
                            </li>
                        </ul>

                        <h2 id="security">8. Security, Data Residency, Retention & Deletion</h2>
                        <ul>
                            <li>
                                <strong>Security.</strong> We use industry‑standard measures including encryption in
                                transit (TLS) and at rest,
                                logical isolation, access controls, logging, and regular backups. You are responsible
                                for securing your endpoints,
                                credentials, and user access policies.
                            </li>
                            <li>
                                <strong>Data Residency.</strong> We may offer regional hosting options (e.g., EU/UK/US)
                                where available. Where
                                not available, data may be stored or processed in multiple locations to operate the
                                Service. Residency choices and
                                details are shown in your admin console if your plan includes them.
                            </li>
                            <li>
                                <strong>Incident Response.</strong> We maintain processes to detect, investigate, and
                                remediate security incidents.
                                If a personal data breach affects Customer Data, we will notify you without undue delay
                                and provide relevant
                                information consistent with applicable law and our DPA.
                            </li>
                            <li>
                                <strong>Retention & Deletion.</strong> We retain Customer Data for the subscription term
                                and for a limited period
                                thereafter for backups, audit, and legal compliance. Upon termination or request
                                (subject to legal holds), we will
                                delete or return Customer Data as described in our DPA and admin tools.
                            </li>
                            <li>
                                <strong>Portability & Export.</strong> You can export your data via built‑in tools or by
                                contacting support.
                            </li>
                        </ul>

                        <h2 id="third-party">9. Third‑Party Services</h2>
                        <p>
                            The Service may interoperate with third‑party products (e.g., payment gateways such as
                            Stripe, PayPal, SSLCommerz,
                            Razorpay, Paytm, Alipay, WeChat Pay; communications; analytics). Third‑party terms apply to
                            those products. We are
                            not responsible for third‑party products and may enable/disable integrations at our
                            discretion for security or
                            compliance reasons.
                        </p>

                        <h2 id="service-management">10. Our Service Management Rights (More Control from Azonation)</h2>
                        <ul>
                            <li>
                                <strong>Fair Use & Limits.</strong> We may set or adjust reasonable technical and usage
                                limits (e.g., API rate
                                limits, storage, compute, emails, file sizes) to ensure Service stability and fair
                                access.
                            </li>
                            <li>
                                <strong>Monitoring for Abuse.</strong> We may monitor Service performance and metadata
                                to detect and prevent
                                security threats, fraud, spam, or policy violations. We do not access Customer content
                                except as permitted by the
                                DPA, at your request, or as required by law.
                            </li>
                            <li>
                                <strong>Enforcement.</strong> We may remove content, throttle, disable features, or
                                suspend accounts that violate
                                these Terms or applicable law, or that pose risk to the Service or others. We will
                                notify you when practicable.
                            </li>
                            <li>
                                <strong>Changes to the Service.</strong> We may improve, modify, or discontinue features
                                (including beta features)
                                and will provide notice of material changes that negatively impact core functionality of
                                your plan.
                            </li>
                            <li>
                                <strong>Compliance Verification.</strong> We may request reasonable information to
                                verify compliance with these
                                Terms and applicable laws. Failure to cooperate may result in suspension.
                            </li>
                        </ul>

                        <h2 id="sla-support">11. Availability, Maintenance & Support</h2>
                        <p>
                            We aim for high availability and will schedule maintenance to minimise disruption. Support
                            channels and response
                            times depend on your plan. Beta or experimental features are provided “as is” and may be
                            changed or removed.
                        </p>

                        <h2 id="termination">12. Suspension & Termination</h2>
                        <p>
                            You may terminate at any time via the admin console, effective at the end of your current
                            term unless otherwise
                            stated. We may suspend or terminate for breach (including non‑payment), security risk, or
                            legal compliance. Upon
                            termination, your right to access the Service ends, but certain provisions survive
                            (including ownership, privacy,
                            confidentiality, disclaimers, liability limits, and governing law).
                        </p>

                        <h2 id="warranties">13. Disclaimers</h2>
                        <p>
                            Except as expressly stated, the Service is provided <em>“as is”</em> and <em>“as
                                available”</em>. We disclaim all
                            implied warranties (merchantability, fitness for a particular purpose, non‑infringement, and
                            non‑interference).
                            We do not warrant that the Service will be uninterrupted, error‑free, or that it will meet
                            your requirements.
                        </p>

                        <h2 id="liability">14. Limitation of Liability</h2>
                        <p>
                            To the fullest extent permitted by law, neither party will be liable for any indirect,
                            incidental, special,
                            consequential, cover, or punitive damages, or loss of profits, revenues, data, or goodwill,
                            even if advised of the
                            possibility. Except for your payment obligations, breaches of confidentiality or IP rights,
                            or amounts payable under
                            indemnities, each party’s total aggregate liability arising out of or related to the Service
                            is limited to the fees
                            paid or payable by Customer to Azonation for the Service giving rise to the claim in the
                            <strong>12 months</strong>
                            preceding the event giving rise to liability.
                        </p>

                        <h2 id="indemnity">15. Indemnity</h2>
                        <p>
                            You will defend and indemnify Azonation against third‑party claims arising from (a) your
                            unlawful use of the Service
                            or breach of these Terms; (b) Customer Data or your content; or (c) use with third‑party
                            products in breach of their
                            terms. We will defend and indemnify you against claims that the Service, as provided by us
                            and used per these Terms,
                            infringes third‑party IP rights; we may, at our option, modify the Service, procure rights,
                            or terminate access with
                            a pro‑rata refund for unused prepaid fees.
                        </p>

                        <h2 id="regional">16. Regional Terms</h2>
                        <h3>EU/EEA & UK</h3>
                        <ul>
                            <li>
                                <strong>GDPR & UK GDPR.</strong> Our DPA includes SCCs and the UK IDTA (as applicable).
                                We will assist with DPIAs
                                and consultations as reasonably required. For UK users, these Terms are governed by the
                                laws of England and Wales,
                                and the courts of England and Wales have exclusive jurisdiction, subject to mandatory
                                consumer protections.
                            </li>
                            <li>
                                <strong>Consumer Rights.</strong> If you are a consumer, statutory rights are not
                                affected. Some provisions may not
                                apply to consumers under local law.
                            </li>
                        </ul>
                        <h3>USA</h3>
                        <ul>
                            <li>
                                <strong>State Privacy Laws.</strong> For CCPA/CPRA and similar laws, we act as a
                                “service provider”/“processor”
                                for Customer Data, and we will not sell or share personal information except as
                                permitted by law and the DPA.
                            </li>
                            <li>
                                <strong>Governing Law (Business Customers).</strong> For US business Customers, unless
                                otherwise agreed in writing,
                                these Terms are governed by the laws of the State of Delaware, USA, without regard to
                                conflicts of law. Venue lies
                                in state or federal courts located in Delaware.
                            </li>
                            <li>
                                <strong>Sectoral Laws.</strong> The Service is not intended for HIPAA‑regulated data
                                unless we have executed a BAA
                                with you. You are responsible for determining whether your use requires sector‑specific
                                compliance.
                            </li>
                        </ul>
                        <h3>Global</h3>
                        <ul>
                            <li>
                                <strong>Export Controls.</strong> You represent that you are not subject to embargoes,
                                sanctions, or other trade
                                restrictions and will not use the Service in violation of export control laws.
                            </li>
                            <li>
                                <strong>Local Law Conflicts.</strong> If any provision conflicts with mandatory local
                                law, the mandatory law
                                prevails to the minimum extent required; the remainder of the Terms stay in effect.
                            </li>
                        </ul>

                        <h2 id="changes">17. Changes to Terms</h2>
                        <p>
                            We may update these Terms from time to time. Material changes will be notified via email
                            and/or in‑product notice.
                            Changes take effect on the stated date. If you continue using the Service after the
                            effective date, you accept the
                            updated Terms. If you do not agree, you must stop using the Service and cancel before the
                            change takes effect.
                        </p>

                        <h2 id="contact">18. Contact</h2>
                        <p>
                            Questions about these Terms or data protection? Contact our team at
                            <a href="mailto:legal@azonation.com">legal@azonation.com</a>.
                            You may also write to us at: <em>Azonation, London, United Kingdom</em> (or your local
                            Azonation entity, where
                            applicable).
                        </p>

                        <hr>
                        <p class="text-sm text-slate-500">
                            For processing of personal data on your behalf, our <a href="{{ url('/legal/dpa') }}">Data
                                Processing Addendum</a> applies.
                            By using the Service, you also agree to our <a href="{{ url('/privacy') }}">Privacy
                                Policy</a>.
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