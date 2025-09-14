{{-- resources/views/help.blade.php --}}
<x-landing-layout>
  {{-- Breadcrumbs --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Help Centre</li>
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
            Help Centre
          </h1>
          <p class="mt-5 max-w-2xl text-lg text-slate-600">
            Quick start guides, best practices, how-tos, and resources for Azonation.
          </p>
          {{-- Simple Search (non-functional placeholder; wire up later) --}}
          <form class="mt-6" role="search" aria-label="Help search">
            <div class="relative max-w-xl">
              <input type="search" name="q" placeholder="Search help topics..."
                     class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 pr-10 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">
              <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-slate-400" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21 21l-4.2-4.2M10.8 18.6a7.8 7.8 0 1 1 0-15.6 7.8 7.8 0 0 1 0 15.6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
          </form>
        </div>
        <div class="lg:col-span-5">
          <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <ul class="grid grid-cols-2 gap-3 text-sm text-slate-700">
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Getting Started</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Best Practices</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Dashboards</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Members & Meetings</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Accounts & Finance</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Videos & Templates</li>
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
        <a href="#getting-started" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Quick Start</a>
        <a href="#best-practices" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Best Practices</a>
        <a href="#org-dashboard" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Organisation Dashboard</a>
        <a href="#individual-dashboard" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Individual Dashboard</a>
        <a href="#add-member" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Add Members</a>
        <a href="#create-meeting" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Create Meetings</a>
        <a href="#manage-accounts" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Accounts & Finance</a>
        <a href="#videos" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Videos</a>
        <a href="#templates" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Templates</a>
        <a href="#support" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Support</a>
        <a href="#faqs" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">FAQs</a>
      </div>
    </div>
  </div>

  {{-- Getting Started --}}
  <section id="getting-started" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Quick Start</h2>
      <p class="mt-3 text-slate-600">Set up your organisation or individual account in minutes.</p>
    </div>

    <div class="mt-10 grid md:grid-cols-2 gap-6">
      <article class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Organisation Setup</h3>
        <ol class="mt-3 space-y-2 text-sm text-slate-600 list-decimal pl-5">
          <li>Create an account and choose <span class="font-medium text-slate-900">Organisation</span>.</li>
          <li>Add basic profile info (name, mission, contact, visibility).</li>
          <li>Invite members and assign roles.</li>
          <li>Create your first meeting or event.</li>
          <li>Set up funds and connect billing (optional).</li>
        </ol>
        <div class="mt-4">
          <a href="{{ url('/help#org-dashboard') }}" class="text-sm font-medium text-blue-700 hover:underline">Go to Org Dashboard guide →</a>
        </div>
      </article>

      <article class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Individual Setup</h3>
        <ol class="mt-3 space-y-2 text-sm text-slate-600 list-decimal pl-5">
          <li>Create an account and complete your profile.</li>
          <li>Join or connect to an organisation.</li>
          <li>Review upcoming meetings/events and RSVP.</li>
          <li>Track tasks and attendance.</li>
          <li>Set notification and privacy preferences.</li>
        </ol>
        <div class="mt-4">
          <a href="{{ url('/help#individual-dashboard') }}" class="text-sm font-medium text-blue-700 hover:underline">Go to Individual Dashboard guide →</a>
        </div>
      </article>
    </div>
  </section>

  {{-- Best Practices --}}
  <section id="best-practices" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Best Practices</h2>
        <p class="mt-3 text-slate-600">Clean data, roles, privacy, and collaboration tips.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Clean Data</h3>
          <ul class="mt-2 text-sm text-slate-600 space-y-2 list-disc pl-5">
            <li>Use consistent member names and IDs.</li>
            <li>Keep membership types and dates accurate.</li>
            <li>Attach documents with clear naming.</li>
          </ul>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Roles & Privacy</h3>
          <ul class="mt-2 text-sm text-slate-600 space-y-2 list-disc pl-5">
            <li>Assign least-privilege roles.</li>
            <li>Use Members-only visibility for sensitive records.</li>
            <li>Review audit trails regularly.</li>
          </ul>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Collaboration</h3>
          <ul class="mt-2 text-sm text-slate-600 space-y-2 list-disc pl-5">
            <li>Publish agendas early and track actions.</li>
            <li>Use summaries for events and projects.</li>
            <li>Export reports monthly for stakeholders.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{-- How-to: Dashboards --}}
  <section id="org-dashboard" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Use the Organisation Dashboard</h2>
      <p class="mt-3 text-slate-600">Navigate summary cards, reports, and quick actions.</p>
    </div>

    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">KPIs</h3><p class="mt-2 text-sm text-slate-600">Membership growth, income vs expenses, attendance.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Schedules</h3><p class="mt-2 text-sm text-slate-600">Upcoming meetings, events, and project milestones.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Quick Actions</h3><p class="mt-2 text-sm text-slate-600">Add member, schedule meeting, create event, record transaction.</p></div>
    </div>
  </section>

  <section id="individual-dashboard" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Use the Individual Dashboard</h2>
        <p class="mt-3 text-slate-600">Track your memberships, tasks, and attendance.</p>
      </div>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">What’s Next</h3><p class="mt-2 text-sm text-slate-600">Upcoming meetings and events with RSVP.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Tasks & Actions</h3><p class="mt-2 text-sm text-slate-600">Assigned items with due dates and status.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Connected Orgs</h3><p class="mt-2 text-sm text-slate-600">Your committees, designations, assets, and documents.</p></div>
      </div>
    </div>
  </section>

  {{-- How-to: Members / Meetings / Finance --}}
  <section id="add-member" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Add Members</h2>
      <p class="mt-3 text-slate-600">Import CSV, add manually, and manage roles.</p>
    </div>

    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Manual Add</h3><p class="mt-2 text-sm text-slate-600">Name, type, join/end dates, ID, reference.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">CSV Import</h3><p class="mt-2 text-sm text-slate-600">Download template, fill columns, upload, validate.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Roles & Access</h3><p class="mt-2 text-sm text-slate-600">Assign roles and set privacy (Public / Members-only / Private).</p></div>
    </div>
  </section>

  <section id="create-meeting" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Create Meetings</h2>
        <p class="mt-3 text-slate-600">Schedule, invite, set agendas, and record minutes.</p>
      </div>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Scheduling</h3><p class="mt-2 text-sm text-slate-600">Date/time, venue, agenda and attachments.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Attendance</h3><p class="mt-2 text-sm text-slate-600">Member/guest attendance, RSVPs, reminders.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Minutes & Actions</h3><p class="mt-2 text-sm text-slate-600">Record minutes, assign actions, track completion.</p></div>
      </div>
    </div>
  </section>

  <section id="manage-accounts" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Manage Accounts & Finance</h2>
      <p class="mt-3 text-slate-600">Income/expense, funds, attachments, and exports.</p>
    </div>

    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Funds</h3><p class="mt-2 text-sm text-slate-600">Create funds and view fund-wise statements.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Transactions</h3><p class="mt-2 text-sm text-slate-600">Income/expense with attachments and notes.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Exports</h3><p class="mt-2 text-sm text-slate-600">CSV, Excel, PDF, and audit logs.</p></div>
    </div>
  </section>

  {{-- Resources --}}
  <section id="videos" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Video Tutorials</h2>
        <p class="mt-3 text-slate-600">Short walkthroughs for common tasks.</p>
      </div>

      {{-- Replace # with real URLs when ready --}}
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-4 hover:shadow-sm">
          <div class="aspect-video rounded-xl bg-slate-100"></div>
          <h3 class="mt-3 font-semibold text-slate-900 group-hover:underline text-sm">Getting Started</h3>
          <p class="text-slate-600 text-sm">Create your account and first steps.</p>
        </a>
        <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-4 hover:shadow-sm">
          <div class="aspect-video rounded-xl bg-slate-100"></div>
          <h3 class="mt-3 font-semibold text-slate-900 group-hover:underline text-sm">Meetings & Minutes</h3>
          <p class="text-slate-600 text-sm">Agenda, attendance, actions.</p>
        </a>
        <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-4 hover:shadow-sm">
          <div class="aspect-video rounded-xl bg-slate-100"></div>
          <h3 class="mt-3 font-semibold text-slate-900 group-hover:underline text-sm">Accounts & Reports</h3>
          <p class="text-slate-600 text-sm">Funds, transactions, exports.</p>
        </a>
      </div>
    </div>
  </section>

  <section id="templates" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Templates</h2>
      <p class="mt-3 text-slate-600">Agenda, minutes, budget, and report templates.</p>
    </div>

    <div class="mt-8 grid md:grid-cols-4 gap-6">
      {{-- Replace URLs with actual download routes/files --}}
      <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-5 hover:bg-slate-50">
        <h3 class="font-semibold text-slate-900 group-hover:underline text-sm">Meeting Agenda</h3>
        <p class="mt-2 text-sm text-slate-600">.docx / .pdf</p>
      </a>
      <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-5 hover:bg-slate-50">
        <h3 class="font-semibold text-slate-900 group-hover:underline text-sm">Meeting Minutes</h3>
        <p class="mt-2 text-sm text-slate-600">.docx / .pdf</p>
      </a>
      <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-5 hover:bg-slate-50">
        <h3 class="font-semibold text-slate-900 group-hover:underline text-sm">Event Budget</h3>
        <p class="mt-2 text-sm text-slate-600">.xlsx</p>
      </a>
      <a href="#" class="group rounded-2xl border border-slate-200 bg-white p-5 hover:bg-slate-50">
        <h3 class="font-semibold text-slate-900 group-hover:underline text-sm">Finance Report</h3>
        <p class="mt-2 text-sm text-slate-600">.xlsx / .pdf</p>
      </a>
    </div>
  </section>

  <section id="support" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Support</h2>
        <p class="mt-3 text-slate-600">Contact, chat, and SLA details.</p>
      </div>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Contact</h3>
          <p class="mt-2 text-sm text-slate-600">Send us a message for product or billing help.</p>
          <a href="{{ route('contact') }}" class="mt-3 inline-flex text-sm font-medium text-blue-700 hover:underline">Open contact form →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Live Chat</h3>
          <p class="mt-2 text-sm text-slate-600">In-app chat during business hours (Mon–Fri).</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">SLA</h3>
          <p class="mt-2 text-sm text-slate-600">Standard response in 1 business day; priority for paid plans.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- FAQs (no JS needed using <details>) --}}
  <section id="faqs" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">FAQs</h2>
      <p class="mt-3 text-slate-600">Common questions answered.</p>
    </div>

    <div class="mt-8 space-y-4">
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">Can I use Azonation for multiple organisations?</summary>
        <p class="mt-3 text-sm text-slate-600">Yes. You can connect to multiple organisations and switch easily from your dashboard.</p>
      </details>
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">Do you support regional billing and currencies?</summary>
        <p class="mt-3 text-sm text-slate-600">Yes. We support flexible regional pricing and common currencies like GBP, USD, EUR, BDT, CNY, and INR.</p>
      </details>
      <details class="rounded-2xl border border-slate-200 bg-white p-5">
        <summary class="cursor-pointer font-medium text-slate-900">How is my data kept private?</summary>
        <p class="mt-3 text-sm text-slate-600">Use role-based permissions and global visibility options (Public, Members-only, Private). We also keep audit trails for sensitive actions.</p>
      </details>
    </div>
  </section>

  {{-- CTA --}}
  <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-blue-500 p-8 sm:p-12 text-white">
      <div class="grid md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-2">
          <h2 class="text-2xl sm:text-3xl font-bold">Need a hand getting set up?</h2>
          <p class="mt-2 text-blue-50">Our team can help you import members, configure roles, and launch fast.</p>
        </div>
        <div class="flex md:justify-end">
          <div class="flex gap-3">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-blue-700 font-semibold hover:bg-blue-50">
              Contact Support
            </a>
            <a href="#getting-started"
               class="inline-flex items-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">
              Quick Start
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
