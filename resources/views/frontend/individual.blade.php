{{-- resources/views/individual.blade.php --}}
<x-landing-layout>
  {{-- Breadcrumbs --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Individual</li>
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
            Your work, your memberships — beautifully organised.
          </h1>
          <p class="mt-5 max-w-2xl text-lg text-slate-600">
            Track memberships, meetings, events, projects, attendance, tasks, referrals, and billing — all in one calm place.
          </p>
          <div class="mt-8 flex flex-wrap items-center gap-3">
            <a href="{{ route('register') }}"
               class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
              Create your account
            </a>
            <a href="{{ url('/help#individual-dashboard') }}"
               class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 text-slate-700 hover:bg-slate-50">
              See your dashboard
            </a>
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <ul class="grid grid-cols-2 gap-3 text-sm text-slate-700">
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Memberships</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Connected Organisations</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Meetings & Events</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Projects & Tasks</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Attendance</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Referrals</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Billing & Invoices</li>
              <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span> Privacy & Settings</li>
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
        <a href="#involved" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Getting Involved</a>
        <a href="#my-work" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">My Work</a>
        <a href="#attendance" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Attendance & Tasks</a>
        <a href="#billing" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Billing</a>
        <a href="#profile" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Profile & Privacy</a>
        <a href="#referrals" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Referrals</a>
        <a href="#reports" class="px-3 py-1.5 rounded-lg border border-slate-200 hover:bg-slate-50">Reports</a>
      </div>
    </div>
  </div>

  {{-- Overview --}}
  <section id="overview" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Overview</h2>
      <p class="mt-3 text-slate-600">
        Azonation helps you manage your memberships, schedules, and tasks across organisations. See what’s next, act quickly, and keep a clear history of your participation — all with controls that respect your privacy.
      </p>
    </div>

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      {{-- What you can do --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">What you can do</h3>
        <p class="mt-2 text-sm text-slate-600">Track memberships, tasks, attendance, and billing from one dashboard.</p>
        <a href="{{ route('individual') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Explore Individual →</a>
      </article>
      {{-- Individual Dashboard --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">Individual Dashboard</h3>
        <p class="mt-2 text-sm text-slate-600">Upcoming meetings, projects, connected organisations, and quick links.</p>
        <a href="{{ url('/help#individual-dashboard') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Dashboard guide →</a>
      </article>
      {{-- Profile & Privacy --}}
      <article class="rounded-2xl border border-slate-200 p-6 bg-white">
        <h3 class="font-semibold text-slate-900">Profile & Privacy</h3>
        <p class="mt-2 text-sm text-slate-600">Manage personal info, communication preferences, and visibility.</p>
        <a href="{{ url('/help#profile-privacy') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Profile settings →</a>
      </article>
    </div>
  </section>

  {{-- Getting Involved --}}
  <section id="involved" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Getting Involved</h2>
        <p class="mt-3 text-slate-600">Join or connect to organisations and start contributing.</p>
      </div>

      <div class="mt-10 grid lg:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Join / Connect</h3>
          <p class="mt-2 text-sm text-slate-600">Find organisations, request access, accept invites, and manage links.</p>
          <a href="{{ url('/help#join-organisation') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">How to join →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Committees & Roles</h3>
          <p class="mt-2 text-sm text-slate-600">See where you serve and your current designations.</p>
          <a href="{{ url('/help#committees') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Committees overview →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Tasks</h3>
          <p class="mt-2 text-sm text-slate-600">Personal task list across meetings, events, and projects.</p>
          <a href="{{ url('/help#attendance') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Tasks & RSVPs →</a>
        </div>
      </div>
    </div>
  </section>

  {{-- My Work --}}
  <section id="my-work" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">My Work</h2>
      <p class="mt-3 text-slate-600">Everything you’re involved in, neatly grouped.</p>
    </div>

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Meetings</h3>
        <p class="mt-2 text-sm text-slate-600">See agenda, RSVP, take notes, and view minutes as a participant.</p>
        <a href="{{ url('/help#individual-dashboard') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Meetings in your dashboard →</a>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Events</h3>
        <p class="mt-2 text-sm text-slate-600">View invitations, guest lists, summaries, and actions assigned to you.</p>
        <a href="{{ url('/help#projects-events') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Events overview →</a>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Projects</h3>
        <p class="mt-2 text-sm text-slate-600">Track your assignments, deadlines, and contributions.</p>
        <a href="{{ url('/help#projects-events') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Projects overview →</a>
      </div>
    </div>

    <div class="mt-6 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Connected Organisations</h3>
        <p class="mt-2 text-sm text-slate-600">See and manage the organisations you’re connected with.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Responsible Assets</h3>
        <p class="mt-2 text-sm text-slate-600">View assets where you are the responsible person.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Documents</h3>
        <p class="mt-2 text-sm text-slate-600">Quick access to files shared with you.</p>
        <a href="{{ url('/help#documents') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Document tips →</a>
      </div>
    </div>
  </section>

  {{-- Attendance & Tasks --}}
  <section id="attendance" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Attendance & Tasks</h2>
        <p class="mt-3 text-slate-600">RSVPs, reminders, and completion tracking across meetings, events, and projects.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">RSVP & Reminders</h3>
          <p class="mt-2 text-sm text-slate-600">Respond to invites and get timely reminders.</p>
          <a href="{{ url('/help#attendance') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Attendance guide →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Action Items</h3>
          <p class="mt-2 text-sm text-slate-600">Track assigned actions with due dates and statuses.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">History</h3>
          <p class="mt-2 text-sm text-slate-600">Your attendance timeline and completion history.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Billing --}}
  <section id="billing" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Billing</h2>
      <p class="mt-3 text-slate-600">Subscriptions, payments, and invoices — with regional options.</p>
    </div>

    <div class="mt-10 grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Subscriptions</h3>
        <p class="mt-2 text-sm text-slate-600">Manage your plan and renewal preferences.</p>
        <a href="{{ url('/help#individual-billing') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Billing help →</a>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Payments & Invoices</h3>
        <p class="mt-2 text-sm text-slate-600">See past payments, download invoices, and update methods.</p>
      </div>
      <div class="rounded-2xl border border-slate-200 bg-white p-6">
        <h3 class="font-semibold text-slate-900">Global Methods</h3>
        <p class="mt-2 text-sm text-slate-600">Pay via Stripe, PayPal and more where available.</p>
      </div>
    </div>
  </section>

  {{-- Profile & Privacy --}}
  <section id="profile" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Profile & Privacy</h2>
        <p class="mt-3 text-slate-600">Control your presence and preferences.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Profile</h3>
          <p class="mt-2 text-sm text-slate-600">Personal details, communication preferences, and appearance.</p>
          <a href="{{ url('/help#profile-privacy') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Profile guide →</a>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Notifications</h3>
          <p class="mt-2 text-sm text-slate-600">Email and in-app alerts tailored to you.</p>
          <a href="{{ url('/help#notifications') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Notification settings →</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Referrals --}}
  <section id="referrals" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-3xl">
      <h2 class="text-2xl font-bold text-slate-900">Referrals</h2>
      <p class="mt-3 text-slate-600">Share your code, invite others, and track rewards when they become active.</p>
    </div>

    <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-6">
      <ul class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 text-sm text-slate-700">
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Your unique referral code</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Reward tracking</li>
        <li class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>Top referrers & stats</li>
      </ul>
      <a href="{{ url('/help#referrals') }}" class="mt-4 inline-flex text-sm font-medium text-blue-700 hover:underline">Referral programme →</a>
    </div>
  </section>

  {{-- Reports --}}
  <section id="reports" class="bg-slate-50/60 border-y border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="max-w-3xl">
        <h2 class="text-2xl font-bold text-slate-900">Reports</h2>
        <p class="mt-3 text-slate-600">Understand your activity at a glance.</p>
      </div>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Attendance</h3>
          <p class="mt-2 text-sm text-slate-600">Trends across meetings, events, and projects.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Contributions</h3>
          <p class="mt-2 text-sm text-slate-600">Completed tasks, committee service, and impact.</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="font-semibold text-slate-900">Billing Summary</h3>
          <p class="mt-2 text-sm text-slate-600">Recent invoices, payments, and balances.</p>
        </div>
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
            <a href="{{ url('/help#individual-dashboard') }}"
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
