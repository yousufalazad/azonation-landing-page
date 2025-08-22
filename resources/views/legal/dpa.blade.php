{{-- resources/views/dpa.blade.php --}}
<x-landing-layout>
  {{-- Breadcrumb --}}
  <nav class="bg-white/70 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Data Processing Addendum</li>
    </ol>
  </nav>

  {{-- Header --}}
  <header class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0">
      <span class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-gradient-to-br from-blue-400/15 via-sky-300/10 to-indigo-300/10 blur-3xl"></span>
      <span class="absolute -bottom-24 -right-12 h-60 w-60 rounded-full bg-gradient-to-tr from-indigo-400/10 via-blue-400/10 to-sky-400/10 blur-3xl"></span>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-16 pb-10">
      <div class="max-w-3xl">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.08]">
          Azonation Data Processing Addendum (DPA)
        </h1>
        <p class="mt-4 text-slate-600">
          This DPA forms part of the Terms of Service and governs Azonation’s processing of Personal Data on behalf of the Customer.
        </p>
        <p class="mt-2 text-sm text-slate-500">Last updated: {{ now()->format('j F Y') }}</p>
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
              <li><a href="#scope" class="text-slate-600 hover:text-blue-600">1. Scope & Relationship</a></li>
              <li><a href="#definitions" class="text-slate-600 hover:text-blue-600">2. Definitions</a></li>
              <li><a href="#instructions" class="text-slate-600 hover:text-blue-600">3. Processing on Instructions</a></li>
              <li><a href="#confidentiality" class="text-slate-600 hover:text-blue-600">4. Confidentiality</a></li>
              <li><a href="#security" class="text-slate-600 hover:text-blue-600">5. Security (TOMs)</a></li>
              <li><a href="#subprocessors" class="text-slate-600 hover:text-blue-600">6. Sub‑processors</a></li>
              <li><a href="#assistance" class="text-slate-600 hover:text-blue-600">7. Assistance & DPIAs</a></li>
              <li><a href="#breach" class="text-slate-600 hover:text-blue-600">8. Breach Notification</a></li>
              <li><a href="#audits" class="text-slate-600 hover:text-blue-600">9. Audits & Reports</a></li>
              <li><a href="#transfers" class="text-slate-600 hover:text-blue-600">10. International Transfers</a></li>
              <li><a href="#return-delete" class="text-slate-600 hover:text-blue-600">11. Return & Deletion</a></li>
              <li><a href="#us-privacy" class="text-slate-600 hover:text-blue-600">12. US State Privacy (Service Provider)</a></li>
              <li><a href="#records" class="text-slate-600 hover:text-blue-600">13. Records & Cooperation</a></li>
              <li><a href="#liability" class="text-slate-600 hover:text-blue-600">14. Liability & Priority</a></li>
              <li><a href="#term" class="text-slate-600 hover:text-blue-600">15. Term & Termination</a></li>
              <li><a href="#annex-a" class="text-slate-600 hover:text-blue-600">Annex A — Details of Processing</a></li>
              <li><a href="#annex-b" class="text-slate-600 hover:text-blue-600">Annex B — Technical & Organisational Measures</a></li>
              <li><a href="#annex-c" class="text-slate-600 hover:text-blue-600">Annex C — Sub‑processors</a></li>
              <li><a href="#annex-d" class="text-slate-600 hover:text-blue-600">Annex D — SCCs & UK IDTA</a></li>
            </ul>
          </div>
        </aside>

        {{-- Main --}}
        <section class="lg:col-span-8 xl:col-span-9">
          <div class="prose prose-slate max-w-none">
            <p class="text-sm text-slate-500">
              Capitalised terms not defined here have the meaning given in the <a href="{{ url('/terms') }}">Terms of Service</a> or the
              <a href="{{ url('/privacy') }}">Privacy Policy</a>.
            </p>

            <h2 id="scope">1. Scope & Relationship</h2>
            <p>
              This DPA applies where Azonation processes Personal Data on behalf of Customer under the Service. Customer is the
              “Controller” (or “Business”) and Azonation is the “Processor” (or “Service Provider/Processor”) with respect to
              Customer Data containing Personal Data.
            </p>

            <h2 id="definitions">2. Definitions</h2>
            <ul>
              <li><strong>Applicable Data Protection Laws</strong>: GDPR, UK GDPR, Data Protection Act 2018, CCPA/CPRA and other US state privacy laws, and any similar laws worldwide.</li>
              <li><strong>Personal Data</strong>: any information relating to an identified or identifiable natural person.</li>
              <li><strong>Processing</strong>: any operation performed on Personal Data as defined by applicable law.</li>
              <li><strong>Sub‑processor</strong>: any third party engaged by Azonation to process Personal Data for the Service.</li>
            </ul>

            <h2 id="instructions">3. Processing on Documented Instructions</h2>
            <p>
              Azonation will process Personal Data only on documented instructions from Customer, including as set out in this
              DPA, the Agreement, and Customer’s in‑product settings, except where required by law (in which case Azonation will
              inform Customer unless legally prohibited).
            </p>

            <h2 id="confidentiality">4. Confidentiality</h2>
            <p>
              Azonation ensures that personnel authorised to process Personal Data are bound by confidentiality obligations and
              receive appropriate data protection and security training.
            </p>

            <h2 id="security">5. Security (Technical & Organisational Measures)</h2>
            <p>
              Azonation implements and maintains appropriate technical and organisational measures (TOMs) designed to protect
              Personal Data against accidental or unlawful destruction, loss, alteration, unauthorised disclosure or access, as
              described in <a href="#annex-b">Annex B</a>.
            </p>

            <h2 id="subprocessors">6. Sub‑processors</h2>
            <ul>
              <li>Customer provides a general authorisation for Azonation to engage Sub‑processors listed in <a href="#annex-c">Annex C</a> (as updated over time).</li>
              <li>Azonation will impose on Sub‑processors data protection obligations no less protective than those in this DPA.</li>
              <li>Azonation will notify Customer of material Sub‑processor changes via the admin console or email and allow reasonable objection where required by law.</li>
            </ul>

            <h2 id="assistance">7. Assistance, Data Subject Requests & DPIAs</h2>
            <p>
              Taking into account the nature of processing, Azonation will assist Customer (through appropriate technical and
              organisational measures) in fulfilling obligations to respond to requests from data subjects and regulators,
              and in conducting data protection impact assessments and prior consultations where required.
            </p>

            <h2 id="breach">8. Personal Data Breach Notification</h2>
            <p>
              Azonation will notify Customer without undue delay after becoming aware of a Personal Data Breach affecting
              Customer Data and will provide information reasonably available to assist Customer in meeting breach‑notification
              obligations.
            </p>

            <h2 id="audits">9. Audits & Reports</h2>
            <p>
              Azonation will make available information necessary to demonstrate compliance with this DPA, including independent
              audit reports or certifications (where available), and will allow and contribute to audits conducted by Customer or
              an independent auditor mandated by Customer, subject to reasonable advance notice, confidentiality, frequency and
              scope limitations to protect security, privacy, and trade secrets.
            </p>

            <h2 id="transfers">10. International Transfers</h2>
            <p>
              Where Azonation or its Sub‑processors transfer Personal Data internationally, Azonation will implement appropriate
              safeguards. For transfers from the EEA/Switzerland, the EU Standard Contractual Clauses (SCCs) (Controller‑to‑Processor or Processor‑to‑Processor, as applicable) are incorporated by reference as set out in <a href="#annex-d">Annex D</a>.
              For UK transfers, the UK International Data Transfer Addendum (IDTA) (or UK Addendum to SCCs) is incorporated.
            </p>

            <h2 id="return-delete">11. Return & Deletion</h2>
            <p>
              Upon termination of the Service or upon Customer’s written request, Azonation will delete or return Personal Data
              (at Customer’s choice) and delete existing copies within a reasonable period, unless retention is required by law.
              Deletions from backups occur per standard backup cycles.
            </p>

            <h2 id="us-privacy">12. US State Privacy — Service Provider/Processor</h2>
            <p>
              For Customer Data subject to CCPA/CPRA or similar US state laws, Azonation acts as a “Service Provider”/“Processor”
              and will (a) process Personal Data solely to provide the Service; (b) not sell or share Personal Data; (c) not
              combine Personal Data with other data except as permitted by law or to provide the Service; and (d) enable Customer
              to meet consumer rights requests as described above.
            </p>

            <h2 id="records">13. Records & Cooperation</h2>
            <p>
              Azonation will maintain records of processing as required by law and will reasonably cooperate with competent
              supervisory authorities regarding the Service’s processing of Personal Data.
            </p>

            <h2 id="liability">14. Liability & Priority</h2>
            <p>
              Each party’s liability arising out of or in connection with this DPA is subject to the limitations and exclusions
              of liability set forth in the Agreement. In the event of conflict between this DPA and the Agreement, this DPA
              prevails to the extent of the conflict with respect to data protection obligations. The SCCs/UK IDTA prevail over
              this DPA where applicable.
            </p>

            <h2 id="term">15. Term & Termination</h2>
            <p>
              This DPA takes effect on the date Customer accepts the Agreement and remains in force for the duration that
              Azonation processes Personal Data on behalf of Customer, and thereafter as necessary to wind down processing or
              comply with legal obligations.
            </p>

            <hr class="my-10">

            <h2 id="annex-a">Annex A — Details of Processing</h2>
            <p><strong>Subject Matter:</strong> Provision of the Azonation SaaS platform and related services.</p>
            <p><strong>Duration:</strong> Subscription term and any data‑retention periods defined by the Agreement or law.</p>
            <p><strong>Nature & Purpose:</strong> Hosting, storage, backup, support, analytics, communications, and other processing necessary to deliver the Service.</p>
            <p><strong>Types of Personal Data:</strong> Names, emails, phone numbers, organisation details, user IDs, activity logs, membership IDs, attendance records, documents/media uploaded, billing data (processed by payment providers), and other data submitted by Customer.</p>
            <p><strong>Categories of Data Subjects:</strong> Customer’s representatives and end users (e.g., members, staff, volunteers, guests, attendees), and other individuals whose data Customer inputs.</p>
            <p><strong>Processing Activities:</strong> Collection, recording, organisation, structuring, storage, adaptation, retrieval, consultation, use, disclosure by transmission (to authorised parties), alignment, restriction, erasure, and destruction.</p>

            <h2 id="annex-b">Annex B — Technical & Organisational Measures (TOMs)</h2>
            <ul>
              <li><strong>Governance & Policies:</strong> Documented security and privacy policies; personnel training; least‑privilege access.</li>
              <li><strong>Access Controls:</strong> Authentication, role‑based access, MFA for privileged operations, session management.</li>
              <li><strong>Encryption:</strong> TLS for data in transit; industry‑standard encryption at rest for primary data stores and backups.</li>
              <li><strong>Network Security:</strong> Firewalls, VPC isolation, endpoint hardening, vulnerability management, patching cadence.</li>
              <li><strong>Application Security:</strong> Secure SDLC, code review, dependency scanning, secrets management, logging.</li>
              <li><strong>Operational Security:</strong> Monitoring, alerting, audit logs, anti‑abuse and rate‑limit controls.</li>
              <li><strong>Data Management:</strong> Segregation/tenant isolation, backup/restore procedures, tested DR plan, data minimisation.</li>
              <li><strong>Incident Response:</strong> Defined triage, investigation and remediation; breach notification workflows.</li>
              <li><strong>Physical Security:</strong> Cloud datacentres with access controls, CCTV, environmental safeguards (via hosting providers).</li>
              <li><strong>Vendor Management:</strong> Risk assessment and contractual controls for Sub‑processors; periodic reviews.</li>
            </ul>

            <h2 id="annex-c">Annex C — Sub‑processors</h2>
            <p>
              Azonation uses vetted Sub‑processors for infrastructure, storage, analytics, payments, and support. A current list is
              available in the admin console or on request from <a href="mailto:privacy@azonation.com">privacy@azonation.com</a>.
              Typical categories include:
            </p>
            <ul>
              <li>Cloud infrastructure and CDN providers</li>
              <li>Database, queue, cache, and search services</li>
              <li>Email delivery and support ticketing</li>
              <li>Analytics/monitoring services</li>
              <li>Payment gateways (e.g., Stripe, PayPal, SSLCommerz, Razorpay, Paytm, Alipay, WeChat Pay)</li>
            </ul>

            <h2 id="annex-d">Annex D — Standard Contractual Clauses (SCCs) & UK IDTA</h2>
            <p>
              For transfers of Personal Data from the EEA/Switzerland to third countries without an adequacy decision, the EU
              Commission Standard Contractual Clauses (Module 2: Controller‑to‑Processor and Module 3: Processor‑to‑Processor)
              are incorporated by reference between Customer (data exporter) and Azonation (data importer) as applicable.
            </p>
            <p>
              For UK transfers, the International Data Transfer Addendum (IDTA) or the UK Addendum to the SCCs is incorporated
              by reference. The parties agree that: (i) the SCCs/Addendum apply solely to the extent required by law; (ii) the
              details of processing in <a href="#annex-a">Annex A</a> and the TOMs in <a href="#annex-b">Annex B</a> fill the
              relevant appendices; (iii) the competent supervisory authority is determined by the exporter’s location (for UK,
              the ICO); and (iv) the governing law and forum are those required by the SCCs/IDTA.
            </p>
            <p>
              If there is conflict between this DPA and the SCCs/UK IDTA, the SCCs/UK IDTA prevail for cross‑border transfers.
            </p>

            <hr>
            <p class="text-sm text-slate-500">
              This DPA forms part of and is subject to the <a href="{{ url('/terms') }}">Terms of Service</a>. For additional information, see our
              <a href="{{ url('/privacy') }}">Privacy Policy</a>.
            </p>
          </div>

          {{-- Back to top --}}
          <div class="mt-10">
            <a href="#content"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-700 hover:border-blue-300">
              <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 4l-7 7h4v7h6v-7h4z"/>
              </svg>
              Back to top
            </a>
          </div>
        </section>
      </div>
    </div>
  </main>
</x-landing-layout>
