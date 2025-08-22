{{-- resources/views/gdpr.blade.php --}}
<x-landing-layout>
  {{-- Breadcrumb --}}
  <nav class="bg-white/70 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">GDPR Compliance</li>
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
          Our GDPR Commitment
        </h1>
        <p class="mt-4 text-slate-600">
          Azonation is fully committed to the principles of the EU General Data Protection Regulation (GDPR) and UK GDPR.
          Protecting your data and privacy is at the heart of our service.
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
              <li><a href="#overview" class="text-slate-600 hover:text-blue-600">1. Overview</a></li>
              <li><a href="#principles" class="text-slate-600 hover:text-blue-600">2. GDPR Principles We Follow</a></li>
              <li><a href="#your-rights" class="text-slate-600 hover:text-blue-600">3. Your Data Rights</a></li>
              <li><a href="#security" class="text-slate-600 hover:text-blue-600">4. Security & Hosting</a></li>
              <li><a href="#transfers" class="text-slate-600 hover:text-blue-600">5. International Transfers</a></li>
              <li><a href="#subprocessors" class="text-slate-600 hover:text-blue-600">6. Sub-processors</a></li>
              <li><a href="#resources" class="text-slate-600 hover:text-blue-600">7. Resources & Legal Docs</a></li>
            </ul>
          </div>
        </aside>

        {{-- Main --}}
        <section class="lg:col-span-8 xl:col-span-9">
          <div class="prose prose-slate max-w-none">

            <h2 id="overview">1. Overview</h2>
            <p>
              GDPR (and the UK GDPR) sets out strict rules for how organisations must collect, use, and protect personal data.
              Azonation is designed with compliance in mind — whether you are based in the EU, UK, USA, or anywhere globally.
            </p>

            <h2 id="principles">2. GDPR Principles We Follow</h2>
            <ul>
              <li><strong>Lawfulness, fairness & transparency:</strong> we process data only with lawful basis and provide clear information.</li>
              <li><strong>Purpose limitation:</strong> we only use your data for the purposes you agreed to.</li>
              <li><strong>Data minimisation:</strong> we collect only the data we need to provide the service.</li>
              <li><strong>Accuracy:</strong> we keep personal data accurate and up to date.</li>
              <li><strong>Storage limitation:</strong> we retain data only as long as necessary.</li>
              <li><strong>Integrity & confidentiality:</strong> we use strong security to protect your data.</li>
            </ul>

            <h2 id="your-rights">3. Your Data Rights</h2>
            <p>
              As an EU/UK resident, you have the following rights under GDPR:
            </p>
            <ul>
              <li>Access to your personal data.</li>
              <li>Correction of inaccurate data.</li>
              <li>Deletion of your data (“right to be forgotten”).</li>
              <li>Restriction or objection to processing.</li>
              <li>Data portability (export your data).</li>
              <li>Withdraw consent at any time.</li>
              <li>File a complaint with your supervisory authority (e.g., the ICO in the UK).</li>
            </ul>

            <h2 id="security">4. Security & Hosting</h2>
            <p>
              We use industry-standard encryption, access controls, and monitoring to protect your data.
              Depending on your subscription plan, we also offer EU/UK regional hosting options to help you meet residency requirements.
            </p>

            <h2 id="transfers">5. International Data Transfers</h2>
            <p>
              When personal data is transferred outside the EU/UK, we use approved safeguards such as the
              <em>EU Standard Contractual Clauses (SCCs)</em> and the <em>UK International Data Transfer Addendum</em>.
              These ensure your data remains protected wherever it is processed.
            </p>

            <h2 id="subprocessors">6. Sub-processors</h2>
            <p>
              Like most SaaS providers, we rely on trusted third-party partners (e.g., hosting, payments, analytics).
              All sub-processors are vetted and bound by written agreements requiring GDPR-level data protection.
              You can view our current list in your Azonation admin console or by request.
            </p>

            <h2 id="resources">7. Resources & Legal Docs</h2>
            <p>
              For full legal details of how we process data under GDPR and other privacy laws, please see:
            </p>
            <ul>
              <li><a href="{{ url('/privacy') }}">Privacy Policy</a> — full details of our data practices.</li>
              <li><a href="{{ url('/terms') }}">Terms of Service</a> — legal agreement for using Azonation.</li>
              <li><a href="{{ url('/legal/dpa') }}">Data Processing Addendum (DPA)</a> — contract for Customers where we act as Processor.</li>
            </ul>

            <hr>
            <p class="text-sm text-slate-500">
              This GDPR page is provided for transparency and reassurance only.
              For legally binding terms, please review our <a href="{{ url('/privacy') }}">Privacy Policy</a> and <a href="{{ url('/legal/dpa') }}">DPA</a>.
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
