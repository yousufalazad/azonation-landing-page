{{-- resources/views/help/individual.blade.php --}}
<x-landing-layout>
  {{-- SEO --}}
  @section('title', 'How to Use: Individual | Azonation Help')
  @section('meta')
    <meta name="description" content="Step-by-step guide for individuals to use Azonation — connect to organisations, track meetings, events and projects, manage tasks, attendance, referrals, billing, notifications and privacy." />
  @endsection

  {{-- Breadcrumbs --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li><a href="{{ route('help') }}" class="text-slate-600 hover:text-slate-900">Help Centre</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">How to Use: Individual</li>
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
            How to Use Azonation as an Individual
          </h1>
          <p class="mt-5 max-w-2xl text-lg text-slate-600">
            Connect to organisations, stay on top of meetings, events and projects, manage tasks and attendance, and keep billing, notifications, and privacy under control.
          </p>
          <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="{{ route('individual') }}"
               class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
              Individual Overview
            </a>
            <a href="{{ url('/help#individual-dashboard') }}"
               class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 text-slate-700 hover:bg-slate-50">
              See your Dashboard
            </a>
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="font-semibold text-slate-900">What you’ll achieve</h3>
            <ul class="mt-3 space-y-2 text-sm text-slate-700 list-disc pl-5">
              <li>Complete a clear profile and set preferences.</li>
              <li>Join/connect to organisations and committees.</li>
              <li>Track meetings, events, projects and tasks.</li>
              <li>Keep accurate attendance and action history.</li>
              <li>Use referrals and view rewards.</li>
              <li>Manage subscriptions, payments and invoices.</li>
              <li>Control notifications and privacy at all times.</li>
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
        <a href="#step-profile" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">1. Profile</a>
        <a href="#step-connect" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">2. Connect to Organisations</a>
        <a href="#step-dashboard" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">3. Dashboard</a>
        <a href="#step-work" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">4. Meetings, Events & Projects</a>
        <a href="#step-tasks-attendance" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">5. Tasks & Attendance</a>
        <a href="#step-docs-assets" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">6. Documents & Assets</a>
        <a href="#step-referrals" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">7. Referrals</a>
        <a href="#step-billing" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">8. Billing</a>
        <a href="#step-notifications" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">9. Notifications & Privacy</a>
        <a href="#reports" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">10. Reports</a>
        <a href="#faqs" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">FAQs</a>
      </div>
    </div>
  </div>

  {{-- Prerequisites --}}
  <section id="prerequisites" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Prerequisites</h2>
      <p class="mt-3 text-slate-600">You’ll be set in minutes if you have:</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold text-slate-900">Account</h3><p class="mt-2 text-sm text-slate-600">An Azonation account with verified email.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold text-slate-900">Invites / Access</h3><p class="mt-2 text-sm text-slate-600">Invitations from organisations (or request access).</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold text-slate-900">Schedule</h3><p class="mt-2 text-sm text-slate-600">Upcoming meetings/events you’ll join.</p></div>
    </div>
  </section>

  {{-- Step 1: Profile --}}
  <section id="step-profile" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">1) Complete your Profile</h2>
        <p class="mt-3 text-slate-600">Add your details and preferences so org admins and teammates can collaborate with you effectively.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Personal</h3><p class="mt-2 text-sm text-slate-600">Name, photo, country, time zone, languages.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Preferences</h3><p class="mt-2 text-sm text-slate-600">Communication, appearance, accessibility.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Privacy</h3><p class="mt-2 text-sm text-slate-600">Control visibility of your profile and activity.</p></div>
      </div>
      <a href="{{ url('/help#profile-privacy') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Profile & privacy guide →</a>
    </div>
  </section>

  {{-- Step 2: Connect to Organisations --}}
  <section id="step-connect" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">2) Join or Connect to Organisations</h2>
      <p class="mt-3 text-slate-600">Find organisations you belong to, request access, or accept invites. Your committees and designations appear automatically after approval.</p>
      <a href="{{ url('/help#join-organisation') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">How to join/connect →</a>
    </div>
  </section>

  {{-- Step 3: Dashboard --}}
  <section id="step-dashboard" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">3) Use your Dashboard</h2>
        <p class="mt-3 text-slate-600">See what’s next at a glance—upcoming meetings, events and project assignments with quick links.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">What’s Next</h3><p class="mt-2 text-sm text-slate-600">Upcoming items and RSVP status.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Tasks</h3><p class="mt-2 text-sm text-slate-600">Actions assigned to you with due dates.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Connected Orgs</h3><p class="mt-2 text-sm text-slate-600">Committees, roles, assets, documents.</p></div>
      </div>
      <a href="{{ url('/help#individual-dashboard') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Dashboard guide →</a>
    </div>
  </section>

  {{-- Step 4: Meetings, Events & Projects --}}
  <section id="step-work" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">4) Participate in Meetings, Events & Projects</h2>
      <p class="mt-3 text-slate-600">RSVP, attend, contribute notes, and complete your assigned actions. View minutes and summaries afterwards.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Meetings</h3><p class="mt-2 text-sm text-slate-600">Agenda, minutes, actions.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Events</h3><p class="mt-2 text-sm text-slate-600">Invites, guest lists, summaries.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Projects</h3><p class="mt-2 text-sm text-slate-600">Assignments, deadlines, progress.</p></div>
    </div>
  </section>

  {{-- Step 5: Tasks & Attendance --}}
  <section id="step-tasks-attendance" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">5) Manage Tasks & Attendance</h2>
        <p class="mt-3 text-slate-600">Keep your to-dos tidy and your attendance accurate across meetings, events, and projects.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">RSVP & Reminders</h3><p class="mt-2 text-sm text-slate-600">Accept/decline and get reminders.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Action Items</h3><p class="mt-2 text-sm text-slate-600">Track status and due dates.</p></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">History</h3><p class="mt-2 text-sm text-slate-600">View your attendance timeline.</p></div>
      </div>
      <a href="{{ url('/help#attendance') }}" class="mt-6 inline-flex text-sm font-medium text-blue-700 hover:underline">Attendance help →</a>
    </div>
  </section>

  {{-- Step 6: Documents & Assets --}}
  <section id="step-docs-assets" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">6) Access Documents & Assets</h2>
      <p class="mt-3 text-slate-600">Find files shared with you and view assets where you’re responsible. Respect any sharing/retention policies set by the organisation.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Documents</h3><p class="mt-2 text-sm text-slate-600">Shared folders, versions, downloads.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Assets</h3><p class="mt-2 text-sm text-slate-600">Responsible items, history, status.</p></div>
      <a href="{{ url('/help#documents') }}" class="md:col-span-2 mt-2 inline-flex text-sm font-medium text-blue-700 hover:underline">Document tips →</a>
    </div>
  </section>

  {{-- Step 7: Referrals --}}
  <section id="step-referrals" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">7) Use Referrals</h2>
        <p class="mt-3 text-slate-600">Share your unique referral code, invite others, and track rewards when they become active.</p>
      </div>
      <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6">
        <ul class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 text-sm text-slate-700">
          <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Your code</li>
          <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Reward tracking</li>
          <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Top referrers & stats</li>
        </ul>
        <a href="{{ url('/help#referrals') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Referral programme →</a>
      </div>
    </div>
  </section>

  {{-- Step 8: Billing --}}
  <section id="step-billing" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">8) Manage Billing</h2>
      <p class="mt-3 text-slate-600">Handle subscriptions, payments and invoice downloads — with regional options where available.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Subscriptions</h3><p class="mt-2 text-sm text-slate-600">Choose plan and renewal.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Payments & Invoices</h3><p class="mt-2 text-sm text-slate-600">See history and download invoices.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Global Methods</h3><p class="mt-2 text-sm text-slate-600">Stripe, PayPal and more.</p></div>
      <a href="{{ url('/help#individual-billing') }}" class="md:col-span-3 mt-2 inline-flex text-sm font-medium text-blue-700 hover:underline">Billing help →</a>
    </div>
  </section>

  {{-- Step 9: Notifications & Privacy --}}
  <section id="step-notifications" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-xl font-bold text-slate-900">9) Tune Notifications & Privacy</h2>
        <p class="mt-3 text-slate-600">Control what you’re notified about and who can see your profile and activity.</p>
      </div>
      <div class="mt-8 grid md:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Notifications</h3><p class="mt-2 text-sm text-slate-600">Email and in-app alerts by category and frequency.</p><a href="{{ url('/help#notifications') }}" class="mt-3 inline-flex text-sm font-medium text-blue-700 hover:underline">Notification settings →</a></div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Privacy</h3><p class="mt-2 text-sm text-slate-600">Choose visibility for your profile and shared content.</p><a href="{{ url('/help#profile-privacy') }}" class="mt-3 inline-flex text-sm font-medium text-blue-700 hover:underline">Profile & privacy guide →</a></div>
      </div>
    </div>
  </section>

  {{-- Reports --}}
  <section id="reports" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-xl font-bold text-slate-900">10) View your Reports</h2>
      <p class="mt-3 text-slate-600">Understand your activity across organisations at a glance.</p>
    </div>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Attendance</h3><p class="mt-2 text-sm text-slate-600">Trends across meetings, events, projects.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Contributions</h3><p class="mt-2 text-sm text-slate-600">Completed tasks and roles served.</p></div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6"><h3 class="font-semibold">Billing Summary</h3><p class="mt-2 text-sm text-slate-600">Recent invoices, payments, balances.</p></div>
    </div>
  </section>

  {{-- FAQs --}}
  <section id="faqs" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">FAQs</h2>
        <p class="mt-3 text-slate-600">Helpful answers for individuals.</p>
      </div>
      <div class="mt-8 space-y-4">
        <details class="rounded-2xl border border-slate-200 bg-white p-5">
          <summary class="cursor-pointer font-medium text-slate-900">Can I belong to multiple organisations?</summary>
          <p class="mt-3 text-sm text-slate-600">Yes, you can connect to several organisations and switch from your dashboard.</p>
        </details>
        <details class="rounded-2xl border border-slate-200 bg-white p-5">
          <summary class="cursor-pointer font-medium text-slate-900">How do I find my referral code?</summary>
          <p class="mt-3 text-sm text-slate-600">Go to Referrals in your account. Share the code and track rewards in real time.</p>
        </details>
        <details class="rounded-2xl border border-slate-200 bg-white p-5">
          <summary class="cursor-pointer font-medium text-slate-900">Can I download proof of attendance?</summary>
          <p class="mt-3 text-sm text-slate-600">Yes, export your attendance report or request a verified letter from the host organisation if available.</p>
        </details>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-blue-500 p-8 sm:p-12 text-white">
      <div class="grid md:grid-cols-3 gap-8 items-center">
        <div class="md:col-span-2">
          <h2 class="text-2xl sm:text-3xl font-bold">Own your schedule and progress.</h2>
          <p class="mt-2 text-blue-50">Start free. Upgrade any time. No credit card required.</p>
        </div>
        <div class="flex md:justify-end">
          <div class="flex gap-3">
            <a href="{{ route('register') }}"
               class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-blue-700 font-semibold hover:bg-blue-50">
              Create an account
            </a>
            <a href="{{ route('individual') }}"
               class="inline-flex items-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">
              Individual Overview
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
