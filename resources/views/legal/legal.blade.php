{{-- resources/views/legal.blade.php --}}
<x-landing-layout>
  {{-- Breadcrumb --}}
  <nav class="bg-white/70 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Legal</li>
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
          Legal Centre
        </h1>
        <p class="mt-4 text-slate-600">
          Find all Azonation legal documents in one place. Transparent, up to date, and easy to read.
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
        {{-- Sidebar --}}
        <aside class="lg:col-span-4 xl:col-span-3">
          <div class="sticky top-24 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <h2 class="text-sm font-semibold text-slate-900">On this page</h2>
            <ul class="mt-3 space-y-2 text-sm">
              <li><a href="#essentials" class="text-slate-600 hover:text-blue-600">Essential Documents</a></li>
              <li><a href="#compliance" class="text-slate-600 hover:text-blue-600">Compliance & Privacy</a></li>
              <li><a href="#security" class="text-slate-600 hover:text-blue-600">Security & Sub‑processors</a></li>
              <li><a href="#faq" class="text-slate-600 hover:text-blue-600">FAQs</a></li>
              <li><a href="#contact" class="text-slate-600 hover:text-blue-600">Contact Legal</a></li>
            </ul>
          </div>
        </aside>

        {{-- Main --}}
        <section class="lg:col-span-8 xl:col-span-9 space-y-16">
          {{-- Essentials --}}
          <section id="essentials">
            <h2 class="text-2xl font-bold text-slate-900">Essential Documents</h2>
            <p class="mt-2 text-slate-600">Start here. These documents govern how you use Azonation and how we handle your data.</p>

            <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
              {{-- Terms --}}
              <a href="{{ url('/terms') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Terms of Service</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-blue-50 text-blue-700 border border-blue-100">Core</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  Your agreement with Azonation: use, billing, liability, and governance.
                </p>
                <p class="mt-3 text-xs text-slate-500">Updated {{ now()->format('j M Y') }}</p>
              </a>

              {{-- Privacy --}}
              <a href="{{ url('/privacy') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Privacy Policy</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-blue-50 text-blue-700 border border-blue-100">Core</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  How we collect, use, share, and protect personal data worldwide.
                </p>
                <p class="mt-3 text-xs text-slate-500">Updated {{ now()->format('j M Y') }}</p>
              </a>

              {{-- DPA --}}
              <a href="{{ url('/legal/dpa') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Data Processing Addendum (DPA)</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-blue-50 text-blue-700 border border-blue-100">Core</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  Contractual terms for processing Customer Data (GDPR/UK GDPR/CCPA).
                </p>
                <p class="mt-3 text-xs text-slate-500">Updated {{ now()->format('j M Y') }}</p>
              </a>
            </div>
          </section>

          {{-- Compliance --}}
          <section id="compliance">
            <h2 class="text-2xl font-bold text-slate-900">Compliance & Privacy</h2>
            <p class="mt-2 text-slate-600">Transparency pages that summarise our approach and link back to the legal docs.</p>

            <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
              {{-- GDPR Summary --}}
              <a href="{{ url('/gdpr') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <h3 class="text-lg font-semibold text-slate-900">GDPR Compliance</h3>
                <p class="mt-2 text-sm text-slate-600">
                  Our commitment to EU/UK GDPR: principles, rights, hosting, and transfers.
                </p>
                <p class="mt-3 text-xs text-slate-500">Updated {{ now()->format('j M Y') }}</p>
              </a>

              {{-- Cookie Policy (optional placeholder) --}}
              <a href="{{ url('/legal/cookies') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Cookie Policy</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-slate-50 text-slate-700 border border-slate-200">Optional</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  Explains cookies, analytics, and your choices (consent banner supported).
                </p>
                <p class="mt-3 text-xs text-slate-500">Add this route when ready</p>
              </a>

              {{-- Data Requests (optional placeholder) --}}
              <a href="{{ url('/legal/requests') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Data Requests</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-slate-50 text-slate-700 border border-slate-200">Optional</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  How to exercise access, deletion, portability, or objection rights.
                </p>
                <p class="mt-3 text-xs text-slate-500">Add this route when ready</p>
              </a>
            </div>
          </section>

          {{-- Security & Sub-processors --}}
          <section id="security">
            <h2 class="text-2xl font-bold text-slate-900">Security & Sub‑processors</h2>
            <p class="mt-2 text-slate-600">
              We publish details about our security posture and vendors that help us run Azonation.
            </p>

            <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
              {{-- Security Overview (optional placeholder) --}}
              <a href="{{ url('/legal/security') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Security Overview</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-slate-50 text-slate-700 border border-slate-200">Optional</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  Encryption, access controls, backups, incident response, and DR.
                </p>
                <p class="mt-3 text-xs text-slate-500">Add this route when ready</p>
              </a>

              {{-- Sub-processors (optional placeholder) --}}
              <a href="{{ url('/legal/subprocessors') }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition">
                <div class="flex items-start justify-between">
                  <h3 class="text-lg font-semibold text-slate-900">Sub‑processors</h3>
                  <span class="rounded-full px-2 py-0.5 text-[11px] font-medium bg-slate-50 text-slate-700 border border-slate-200">Optional</span>
                </div>
                <p class="mt-2 text-sm text-slate-600">
                  Our current vendor list for hosting, payments, analytics, and support.
                </p>
                <p class="mt-3 text-xs text-slate-500">Add this route when ready</p>
              </a>
            </div>
          </section>

          {{-- FAQs --}}
          <section id="faq">
            <h2 class="text-2xl font-bold text-slate-900">Frequently Asked Questions</h2>
            <div class="mt-6 divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white">
              <details class="p-5 group">
                <summary class="flex cursor-pointer list-none items-center justify-between">
                  <span class="font-medium text-slate-900">Do I need to sign the DPA?</span>
                  <svg class="h-5 w-5 text-slate-400 group-open:rotate-180 transition" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
                </summary>
                <p class="mt-3 text-slate-600 text-sm">
                  If you are an organisation processing personal data with Azonation, yes. The DPA governs our processor obligations and is incorporated into your subscription.
                </p>
              </details>

              <details class="p-5 group">
                <summary class="flex cursor-pointer list-none items-center justify-between">
                  <span class="font-medium text-slate-900">Where can I host my data?</span>
                  <svg class="h-5 w-5 text-slate-400 group-open:rotate-180 transition" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
                </summary>
                <p class="mt-3 text-slate-600 text-sm">
                  We provide global infrastructure and offer regional hosting options (e.g., EU/UK/US) on eligible plans. See your admin console or contact support.
                </p>
              </details>

              <details class="p-5 group">
                <summary class="flex cursor-pointer list-none items-center justify-between">
                  <span class="font-medium text-slate-900">How do I submit a data subject request?</span>
                  <svg class="h-5 w-5 text-slate-400 group-open:rotate-180 transition" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
                </summary>
                <p class="mt-3 text-slate-600 text-sm">
                  Use the tools in your admin console to export or delete data, or contact <a class="text-blue-700 hover:underline" href="mailto:privacy@azonation.com">privacy@azonation.com</a>.
                </p>
              </details>
            </div>
          </section>

          {{-- Contact --}}
          <section id="contact">
            <h2 class="text-2xl font-bold text-slate-900">Contact Legal</h2>
            <p class="mt-2 text-slate-600">
              Questions about our legal documents or privacy practices? We’re here to help.
            </p>
            <div class="mt-4 flex flex-wrap gap-3">
              <a href="mailto:legal@azonation.com" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-700 hover:border-blue-300">
                <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm-1.4 3L12 12.47 5.4 7h13.2z"/></svg>
                legal@azonation.com
              </a>
              <a href="{{ url('/privacy') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-700 hover:border-blue-300">
                <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"/></svg>
                Read Privacy Policy
              </a>
            </div>
          </section>

          {{-- Back to top --}}
          <div class="pt-2">
            <a href="#content"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-700 hover:border-blue-300">
              <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-7 7h4v7h6v-7h4z"/></svg>
              Back to top
            </a>
          </div>
        </section>
      </div>
    </div>
  </main>
</x-landing-layout>
