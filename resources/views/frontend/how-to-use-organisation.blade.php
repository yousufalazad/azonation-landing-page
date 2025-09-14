{{-- resources/views/help/organisation.blade.php --}}
<x-landing-layout>
  {{-- SEO --}}
  @section('title', 'How to Use: Organisation | Azonation Help')
  @section('meta')
    <meta name="description" content="Step-by-step guide to set up and run your organisation in Azonation — members, committees, meetings, events, projects, assets, accounts, billing, and privacy." />
  @endsection

  {{-- Breadcrumbs --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li><a href="{{ route('help') }}" class="text-slate-600 hover:text-slate-900">Help Centre</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">How to Use: Organisation</li>
    </ol>
  </nav>

  {{-- Hero --}}
  <header id="content" class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0">
      <span class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-blue-500/10 blur-3xl"></span>
      <span class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-blue-400/10 blur-3xl"></span>
    </div>
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-16 pb-10 lg:pt-24 lg:pb-16">
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
          <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
            How to Use Azonation for your Organisation
          </h1>
          <p class="mt-5 max-w-2xl text-lg text-slate-600">
            A practical, step-by-step guide to set up your organisation and run memberships, committees, meetings, events, projects, assets, accounts, and billing — all in one calm place.
          </p>
          <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="{{ route('organization') }}"
               class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
              Organisation Overview
            </a>
            <a href="{{ url('/help#getting-started') }}"
               class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 text-slate-700 hover:bg-slate-50">
              Quick Start
            </a>
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="font-semibold text-slate-900">What you’ll achieve</h3>
            <ul class="mt-3 space-y-2 text-sm text-slate-700 list-disc pl-5">
              <li>Publish an accurate organisation profile.</li>
              <li>Import or add members and assign roles.</li>
              <li>Set up committees and schedule your first meeting.</li>
              <li>Track events & projects with actions and attendance.</li>
              <li>Organise documents & assets with access control.</li>
              <li>Record transactions, manage funds & billing.</li>
              <li>Use dashboards & reports to stay on course.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- Sticky in-page nav --}}
  <div class="border-y border-slate-100 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap gap-3 py-4 text-sm">
        <a href="#prerequisites" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Prerequisites</a>
        <a href="#step-profile" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">1. Org Profile</a>
        <a href="#step-members" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">2. Members & Roles</a>
        <a href="#step-committees" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">3. Committees</a>
        <a href="#step-meetings" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">4. Meetings</a>
        <a href="#step-events-projects" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">5. Events & Projects</a>
        <a href="#step-docs-assets" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">6. Documents & Assets</a>
        <a href="#step-accounts" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">7. Accounts & Funds</a>
        <a href="#step-billing" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">8. Billing & Pricing</a>
        <a href="#step-dashboard-reports" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">9. Dashboard & Reports</a>
        <a href="#step-privacy" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">10. Privacy & Audit</a>
        <a href="#faqs" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">FAQs</a>
      </div>
    </div>
  </div>

  {{-- Prerequisites --}}
  <section id="prerequisites" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Prerequisites</h2>
      <p class="mt-3 text-slate-600">Before you begin, make sure you have:</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Access & Roles</h3>
        <p class="mt-2 text-sm text-slate-600">An admin or manager account to configure settings.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Clean Data</h3>
        <p class="mt-2 text-sm text-slate-600">Member list (CSV), committee structure, and contact info.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Finance Basics</h3>
        <p class="mt-2 text-sm text-slate-600">Initial funds/codes and billing preferences.</p>
      </div>
    </div>
  </section>

  {{-- Step 1: Org Profile --}}
  <section id="step-profile" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">1) Create your Organisation Profile</h2>
        <p class="mt-3 text-slate-600">Add name, short description, mission, vision, scope, logo, and contact details. Set default visibility (Public / Members-only / Private).</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Identity</h3><p class="mt-2 text-sm text-slate-600">Name, logo, cover, country & timezone.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Story</h3><p class="mt-2 text-sm text-slate-600">Mission, vision, and history snapshot.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Visibility</h3><p class="mt-2 text-sm text-slate-600">Default privacy & role-based access.</p></div>
      </div>
      <a href="{{ url('/help#org-dashboard') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Org Dashboard guide →</a>
    </div>
  </section>

  {{-- Step 2: Members & Roles --}}
  <section id="step-members" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">2) Add Members & Assign Roles</h2>
      <p class="mt-3 text-slate-600">Add members manually or import a CSV. Set membership type, ID, join/end dates, and references. Assign roles to control permissions.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Manual Add</h3><p class="mt-2 text-sm text-slate-600">Quickly add single members with full details.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">CSV Import</h3><p class="mt-2 text-sm text-slate-600">Use the template, validate, then import safely.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Roles & Privacy</h3><p class="mt-2 text-sm text-slate-600">Grant least-privilege access; audit changes.</p></div>
    </div>
    <a href="{{ url('/help#add-member') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Add Members guide →</a>
  </section>

  {{-- Step 3: Committees --}}
  <section id="step-committees" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">3) Set up Committees</h2>
        <p class="mt-3 text-slate-600">Create committees, add members with designations, and set tenure. Use this structure for agenda invites and reporting.</p>
      </div>
      <a href="{{ url('/help#committees') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Committees overview →</a>
    </div>
  </section>

  {{-- Step 4: Meetings --}}
  <section id="step-meetings" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">4) Schedule Meetings</h2>
      <p class="mt-3 text-slate-600">Create agendas, invite participants, capture attendance, and record minutes. Assign action items and track completion.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Scheduling</h3><p class="mt-2 text-sm text-slate-600">Date/time, venue, agenda, attachments.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Attendance</h3><p class="mt-2 text-sm text-slate-600">Members and guests, RSVP, reminders.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Minutes & Actions</h3><p class="mt-2 text-sm text-slate-600">Publish minutes and assign owners & due dates.</p></div>
    </div>
    <a href="{{ url('/help#create-meeting') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Create Meetings guide →</a>
  </section>

  {{-- Step 5: Events & Projects --}}
  <section id="step-events-projects" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">5) Run Events & Projects</h2>
        <p class="mt-3 text-slate-600">Plan dates, assign owners, track attendance, and keep summaries. Use action tracking to ensure follow-through.</p>
      </div>
      <a href="{{ url('/help#projects-events') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Projects & Events guide →</a>
    </div>
  </section>

  {{-- Step 6: Documents & Assets --}}
  <section id="step-docs-assets" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">6) Organise Documents & Assets</h2>
      <p class="mt-3 text-slate-600">Store files & media with versioning. Track assets with life-cycle status and responsible person history.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Documents</h3><p class="mt-2 text-sm text-slate-600">Library, sharing, retention policies, exports.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Assets</h3><p class="mt-2 text-sm text-slate-600">Life cycle, assignments, audit trail.</p></div>
    </div>
    <a href="{{ url('/help#documents') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Document controls →</a>
  </section>

  {{-- Step 7: Accounts & Funds --}}
  <section id="step-accounts" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">7) Manage Accounts & Funds</h2>
        <p class="mt-3 text-slate-600">Record income/expense, attach receipts, and generate fund-wise statements. Export CSV/Excel/PDF when needed.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Funds</h3><p class="mt-2 text-sm text-slate-600">Create funds for specific programmes.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Transactions</h3><p class="mt-2 text-sm text-slate-600">Income/expense with categories & attachments.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Statements & Export</h3><p class="mt-2 text-sm text-slate-600">Filter by fund/date and export securely.</p></div>
      </div>
      <a href="{{ url('/help#manage-accounts') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Manage Accounts guide →</a>
    </div>
  </section>

  {{-- Step 8: Billing & Regional Pricing --}}
  <section id="step-billing" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">8) Billing & Regional Pricing</h2>
      <p class="mt-3 text-slate-600">Choose plans (Free/Standard), set billing cycle (Monthly/Quarterly/Half-yearly/Yearly), and configure regional pricing & currencies.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Invoices</h3><p class="mt-2 text-sm text-slate-600">Invoices generate on the 1st; 30-day due date.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Gateways</h3><p class="mt-2 text-sm text-slate-600">Stripe, PayPal, SSLCommerz, Razorpay, Paytm, Alipay, WeChat Pay.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Currencies</h3><p class="mt-2 text-sm text-slate-600">GBP, USD, EUR, BDT, CNY, INR (regional rules apply).</p></div>
    </div>
    <a href="{{ url('/help#billing') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Billing details →</a>
  </section>

  {{-- Step 9: Dashboard & Reports --}}
  <section id="step-dashboard-reports" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">9) Use the Dashboard & Reports</h2>
        <p class="mt-3 text-slate-600">Monitor membership growth, income vs expenses, and attendance. See upcoming meetings/events and quick actions.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">KPIs</h3><p class="mt-2 text-sm text-slate-600">12-month charts for growth and finance.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Schedules</h3><p class="mt-2 text-sm text-slate-600">Upcoming meetings, events, projects.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Exports</h3><p class="mt-2 text-sm text-slate-600">CSV, Excel, PDF for stakeholders.</p></div>
      </div>
      <a href="{{ url('/help#org-dashboard') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Org Dashboard guide →</a>
    </div>
  </section>

  {{-- Step 10: Privacy & Audit --}}
  <section id="step-privacy" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">10) Privacy, Roles & Audit</h2>
      <p class="mt-3 text-slate-600">Use global privacy (Public / Members-only / Private) and role-based permissions. Keep audit trails for sensitive actions.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Roles & Permissions</h3><p class="mt-2 text-sm text-slate-600">Grant only what’s needed; review regularly.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Data Privacy</h3><p class="mt-2 text-sm text-slate-600">Control visibility for members, assets, and documents.</p></div>
    </div>
    <a href="{{ url('/help#roles-permissions') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Roles & privacy guide →</a>
  </section>

  {{-- Tips & Troubleshooting --}}
  <section class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Best Practices</h3>
          <ul class="mt-2 text-sm text-slate-600 space-y-2 list-disc pl-5">
            <li>Standardise names, IDs, and file naming.</li>
            <li>Publish agendas early; track actions tightly.</li>
            <li>Export monthly summaries for boards.</li>
          </ul>
          <a href="{{ url('/help#best-practices') }}" class="mt-3 inline-flex text-sm font-medium text-blue-700 hover:underline">Best practices →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Common Issues</h3>
          <ul class="mt-2 text-sm text-slate-600 space-y-2 list-disc pl-5">
            <li>Imports failing: validate CSV headers & types.</li>
            <li>Missing access: check role & visibility.</li>
            <li>Report gaps: confirm date ranges & filters.</li>
          </ul>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Need Help?</h3>
          <p class="mt-2 text-sm text-slate-600">Contact support — we can assist with imports, role setup, and billing configuration.</p>
          <a href="{{ route('contact') }}" class="mt-3 inline-flex text-sm font-medium text-blue-700 hover:underline">Contact Support →</a>
        </div>
      </div>
    </div>
  </section>

  {{-- FAQs --}}
  <section id="faqs" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">FAQs</h2>
      <p class="mt-3 text-slate-600">Answers to common questions about running an organisation in Azonation.</p>
    </div>
    <div class="mt-8 space-y-4">
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">Can I restrict access to sensitive documents?</summary>
        <p class="mt-3 text-sm text-slate-600">Yes. Set visibility to Members-only or Private and grant role-based access. All changes are auditable.</p>
      </details>
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">How do invoices and due dates work?</summary>
        <p class="mt-3 text-sm text-slate-600">Invoices generate on the 1st of each month for the previous month; payment is due in 30 days.</p>
      </details>
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">Can I track guest attendance?</summary>
        <p class="mt-3 text-sm text-slate-600">Yes. Meetings, events, and projects support guest attendance alongside members.</p>
      </details>
    </div>
  </section>

  {{-- CTA --}}
  <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-blue-500 p-8 sm:p-12 text-white">
      <div class="grid md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-2">
          <h2 class="text-2xl sm:text-3xl font-bold">Ready to run your organisation in one calm place?</h2>
          <p class="mt-2 text-blue-50">Start free. Upgrade any time. No credit card required.</p>
        </div>
        <div class="flex md:justify-end">
          <div class="flex gap-3">
            <a href="{{ route('register') }}"
               class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-blue-700 font-semibold hover:bg-blue-50">
              Create an account
            </a>
            <a href="{{ route('organization') }}"
               class="inline-flex items-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">
              Organisation Overview
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Back to top --}}
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16">
    <a href="#content" class="inline-flex text-sm text-slate-600 hover:text-slate-900">Back to top ↑</a>
  </div>
</x-landing-layout>
