{{-- resources/views/organization.blade.php --}}
<x-landing-layout>
  {{-- Optional: Breadcrumbs --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Organisation</li>
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
            Everything your organisation needs — in one calm place.
          </h1>
          <p class="mt-5 max-w-2xl text-lg text-slate-600">
            Members, committees, meetings, projects, events, assets, finance, documents and more — Azonation brings all of your work together with privacy and controls you can trust.
          </p>
          <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="{{ route('register') }}"
               class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
              Get started free
            </a>
            <a href="{{ url('/help#org-dashboard') }}"
               class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 text-slate-700 hover:bg-slate-50">
              See how it works
            </a>
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <ul class="grid grid-cols-2 gap-3 text-sm text-slate-700">
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Memberships & Renewals
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Committees & Roles
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Meetings & Minutes
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Events & Projects
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Assets & Documents
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Accounting & Funds
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Regional Billing
              </li>
              <li class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Privacy & Controls
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- On-page quick navigation --}}
  <div class="border-y border-slate-100 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap gap-3 py-4 text-sm">
        <a href="#overview" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Overview</a>
        <a href="#core-workflows" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Core Workflows</a>
        <a href="#finance" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Finance & Billing</a>
        <a href="#records" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Records</a>
        <a href="#plans" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Plans & Strategy</a>
        <a href="#reports-privacy" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Reports & Privacy</a>
        <a href="#integrations" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Integrations</a>
      </div>
    </div>
  </div>

  {{-- Overview --}}
  <section id="overview" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Overview</h2>
      <p class="mt-3 text-slate-600">
        Azonation centralises your organisation’s work. Create members and teams, schedule meetings and events, manage projects, track assets, keep documents safe, and stay on top of accounts and billing — all with audit trails and privacy controls.
      </p>
    </div>

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      {{-- What you can do --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">What you can do</h3>
        <p class="mt-2 text-sm text-slate-600">
          Members, meetings, projects, finance — all in one place with quick actions and clear dashboards.
        </p>
        <a href="{{ route('organization') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Explore Organisation →</a>
      </article>

      {{-- Org Dashboard --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">Organisation Dashboard</h3>
        <p class="mt-2 text-sm text-slate-600">
          Key stats, upcoming schedules, and health indicators at a glance.
        </p>
        <a href="{{ url('/help#org-dashboard') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">How the dashboard works →</a>
      </article>

      {{-- Roles & Privacy --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">Roles & Privacy</h3>
        <p class="mt-2 text-sm text-slate-600">
          Fine-grained permissions, visibility settings, member access control, and data privacy.
        </p>
        <a href="{{ url('/help#roles-permissions') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Roles & permissions guide →</a>
      </article>
    </div>
  </section>

  {{-- Core Workflows --}}
  <section id="core-workflows" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Core Workflows</h2>
        <p class="mt-3 text-slate-600">The building blocks your team will use every day.</p>
      </div>

      <div class="mt-10 grid lg:grid-cols-3 gap-6">
        {{-- Memberships --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Memberships</h3>
          <p class="mt-2 text-sm text-slate-600">Member list, joining & end dates, IDs, types, age, references; growth trends & renewals.</p>
          <a href="{{ url('/help#add-member') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Add members →</a>
        </div>

        {{-- Committees --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Committees</h3>
          <p class="mt-2 text-sm text-slate-600">Committee structure, member assignments, designations, and tenure history.</p>
          <a href="{{ url('/help#committees') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Manage committees →</a>
        </div>

        {{-- Meetings --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Meetings</h3>
          <p class="mt-2 text-sm text-slate-600">Scheduling, agenda, attendance (members/guests), minutes, and action tracking.</p>
          <a href="{{ url('/help#create-meeting') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Create meetings →</a>
        </div>

        {{-- Events --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Events</h3>
          <p class="mt-2 text-sm text-slate-600">Plan, invite, track attendance, guest lists, summaries, and follow-up actions.</p>
          <a href="{{ url('/help#projects-events') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Events best practices →</a>
        </div>

        {{-- Projects --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Projects</h3>
          <p class="mt-2 text-sm text-slate-600">Scheduling, milestones, assignments, attendance logs, summaries, and action items.</p>
          <a href="{{ url('/help#projects-events') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Projects guide →</a>
        </div>

        {{-- Assets & Documents --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Assets & Documents</h3>
          <p class="mt-2 text-sm text-slate-600">Asset life cycle & responsible person history. File & media library with versions.</p>
          <a href="{{ url('/help#documents') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Document library →</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Finance & Billing --}}
  <section id="finance" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Finance & Billing</h2>
      <p class="mt-3 text-slate-600">Clear accounting and flexible regional billing built-in.</p>
    </div>

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      {{-- Accounting --}}
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Accounts & Funds</h3>
        <p class="mt-2 text-sm text-slate-600">Income/expense tracking, fund creation, and fund-wise statements with exports.</p>
        <a href="{{ url('/help#manage-accounts') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Manage accounts →</a>
      </div>

      {{-- Billing & Plans --}}
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Billing & Plans</h3>
        <p class="mt-2 text-sm text-slate-600">Free + standard plans. Monthly, quarterly, half-yearly, yearly. Invoices & due dates.</p>
        <a href="{{ url('/help#billing') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Billing details →</a>
      </div>

      {{-- Regional Pricing --}}
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Regional Pricing</h3>
        <p class="mt-2 text-sm text-slate-600">Flexible regional billing with multiple currencies (GBP, USD, EUR, BDT, CNY, INR).</p>
        <a href="{{ url('/help#regional-pricing') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Regional setup →</a>
      </div>
    </div>
  </section>

  {{-- Records: Founders, History, Success, Recognition --}}
  <section id="records" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Records</h2>
        <p class="mt-3 text-slate-600">Keep the important stories and acknowledgements organised.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-4 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Founders</h3>
          <p class="mt-2 text-sm text-slate-600">Maintain founders’ names and designations separately.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">History</h3>
          <p class="mt-2 text-sm text-slate-600">Organisation history with optional images and documents.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Success Stories</h3>
          <p class="mt-2 text-sm text-slate-600">Capture outcomes and impact with rich summaries.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Recognition</h3>
          <p class="mt-2 text-sm text-slate-600">Track awards, certifications, and press mentions.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Plans & Strategy --}}
  <section id="plans" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Plans & Strategy</h2>
      <p class="mt-3 text-slate-600">Create and manage your short- and long-term plans.</p>
    </div>

    <div class="mt-10 grid md:grid-cols-2 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Year Plan</h3>
        <p class="mt-2 text-sm text-slate-600">Create year-wise plans with milestones, owners, and status.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Strategic Plan</h3>
        <p class="mt-2 text-sm text-slate-600">Define period-wise strategic goals and track progress.</p>
      </div>
    </div>
  </section>

  {{-- Reports & Privacy --}}
  <section id="reports-privacy" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Reports & Privacy</h2>
        <p class="mt-3 text-slate-600">Visibility with control.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Membership Growth</h3>
          <p class="mt-2 text-sm text-slate-600">Track growth by month, type, and source.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Income vs Expenses</h3>
          <p class="mt-2 text-sm text-slate-600">Compare trends, drill into funds and categories.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Other Reports</h3>
          <p class="mt-2 text-sm text-slate-600">Attendance, assets, projects/events summaries, and exports.</p>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Data Privacy Control</h3>
          <p class="mt-2 text-sm text-slate-600">Global privacy setups: Private, Public, Members-only. Role-based access and audit trails.</p>
          <a href="{{ url('/help#roles-permissions') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Privacy & roles →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Documents & Media</h3>
          <p class="mt-2 text-sm text-slate-600">Granular sharing, versioning, and retention policies.</p>
          <a href="{{ url('/help#documents') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Document controls →</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Integrations --}}
  <section id="integrations" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Payment Integrations</h2>
      <p class="mt-3 text-slate-600">Connect Stripe, PayPal, SSLCommerz, Razorpay, Paytm, Alipay, WeChat Pay and more for global payments.</p>
    </div>

    <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-6">
      <ul class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 text-sm text-slate-700">
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Stripe</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>PayPal</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>SSLCommerz</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Razorpay</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Paytm</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Alipay</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>WeChat Pay</li>
      </ul>
      <a href="{{ url('/help#integrations') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Integration setup guide →</a>
    </div>
  </section>

  {{-- CTA --}}
  <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-blue-500 p-8 sm:p-12 text-white">
      <div class="grid md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-2">
          <h2 class="text-2xl sm:text-3xl font-bold">Run your organisation in one calm place.</h2>
          <p class="mt-2 text-blue-50">Start free. Upgrade any time. No credit card required.</p>
        </div>
        <div class="flex md:justify-end">
          <div class="flex gap-3">
            <a href="{{ route('register') }}"
               class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-blue-700 font-semibold hover:bg-blue-50">
              Create an account
            </a>
            <a href="{{ url('/help#org-dashboard') }}"
               class="inline-flex items-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">
              Learn more
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
