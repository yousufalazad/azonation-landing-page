
<x-landing-layout>

{{-- Optional: Breadcrumbs --}}
<nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
  <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
    <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
    <li aria-hidden="true" class="text-slate-400">/</li>
    <li class="text-slate-900 font-medium">About</li>
  </ol>
</nav>

{{-- Hero --}}
<header id="content" class="relative overflow-hidden">
  <div class="pointer-events-none absolute inset-0">
    <span class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-gradient-to-br from-blue-400/15 via-sky-300/10 to-indigo-300/10 blur-3xl"></span>
    <span class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-gradient-to-tr from-indigo-400/10 via-blue-400/10 to-sky-400/10 blur-3xl"></span>
  </div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-24 pb-14 lg:pt-32 lg:pb-20">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">
      <div class="lg:col-span-7">
        <h1 class="text-5xl sm:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.05]">
          About <span class="text-blue-700">Azonation</span>
        </h1>
        <p class="mt-6 max-w-2xl text-lg text-slate-600">
          A calm, modern workspace where organisations manage memberships, meetings, events, projects, assets, accounting, documents—and reporting—in one place.
        </p>

        <nav aria-label="In-page" class="mt-6">
          <ul class="flex flex-wrap gap-3 text-sm">
            <li><a href="#mission" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">Mission</a></li>
            <li><a href="#what-we-do" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">What we do</a></li>
            <li><a href="#story" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">Our story</a></li>
            <li><a href="#values" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">Values</a></li>
            <li><a href="#trust" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">Trust & privacy</a></li>
            <li><a href="#faq" class="inline-flex items-center rounded-full border border-slate-300 px-3 py-1.5 text-slate-700 hover:bg-slate-50">FAQ</a></li>
          </ul>
        </nav>

        <div class="mt-8 flex flex-wrap items-center gap-3">
          <a href="https://my.azonation.com/signup" class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold shadow-sm hover:bg-blue-700 transition">
            Start for free
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 text-slate-700 font-semibold hover:bg-slate-50 transition">
            Talk to us
          </a>
        </div>

        <dl class="mt-10 grid grid-cols-2 gap-6 max-w-xl">
          <div class="rounded-2xl border border-slate-200 p-5">
            <dt class="text-sm text-slate-500">All-in-one modules</dt>
            <dd class="mt-1 text-2xl font-bold text-slate-900">15</dd>
          </div>
          <div class="rounded-2xl border border-slate-200 p-5">
            <dt class="text-sm text-slate-500">Privacy-first</dt>
            <dd class="mt-1 text-2xl font-bold text-slate-900">GDPR-ready</dd>
          </div>
        </dl>
      </div>

      {{-- App tiles illustration --}}
      <div class="lg:col-span-5" aria-hidden="true">
        <div class="grid grid-cols-3 sm:grid-cols-4 gap-4">
          @php
            $tiles = [
              'Membership','Committees','Meetings','Events','Projects','Assets',
              'Accounting','Documents','Founders','Year plan','Strategic plan',
              'History','Success','Recognition','Billing','Reports','Privacy'
            ];
          @endphp
          @foreach($tiles as $label)
            <div class="aspect-square rounded-2xl border border-slate-200 bg-white p-4 flex flex-col justify-between hover:shadow-sm transition">
              <div class="h-6 w-6 rounded-md bg-blue-600/10 flex items-center justify-center">
                <svg viewBox="0 0 24 24" class="h-4 w-4" aria-hidden="true">
                  <path d="M4 7h16M4 12h10M4 17h16" class="stroke-blue-600" stroke-width="2" fill="none" stroke-linecap="round"/>
                </svg>
              </div>
              <span class="text-[11px] font-medium text-slate-700">{{ $label }}</span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</header>

{{-- Mission & Vision --}}
<section id="mission" class="py-16 lg:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
      <article class="rounded-3xl border border-slate-200 p-8 lg:p-10">
        <h2 class="text-2xl font-bold text-slate-900">Our mission</h2>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Help every organisation run smoothly by unifying essential operations in one privacy-first platform.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-200 p-8 lg:p-10">
        <h2 class="text-2xl font-bold text-slate-900">Our vision</h2>
        <p class="mt-4 text-slate-600 leading-relaxed">
          A world where teams focus on impact—not admin—because their tools are simple, connected and trustworthy.
        </p>
      </article>
    </div>
  </div>
</section>

{{-- What we do --}}
{{-- What we do --}}
<section id="what-we-do" class="py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl">
      <h2 class="text-3xl font-bold text-slate-900">What we do</h2>
      <p class="mt-4 text-slate-600">Azonation is an organisation management SaaS. Core areas include:</p>
    </header>

    <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
        // Tiny inline icon set (stroke="currentColor" so Tailwind color works)
        $icons = [
          'id-card' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="12" r="2"/><path d="M13 10h5M13 14h5"/></svg>',
          'users' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/><circle cx="11" cy="7" r="3"/><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M17 3a3 3 0 1 1 0 6"/></svg>',
          'calendar' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 3v4M16 3v4M3 11h18"/><rect x="3" y="5" width="18" height="16" rx="2"/></svg>',
          'megaphone' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 11l11-4v10L3 13v-2z"/><path d="M14 7v10"/><path d="M9 15v2a3 3 0 0 0 3 3"/></svg>',
          'kanban' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="7" height="16" rx="2"/><rect x="14" y="4" width="7" height="10" rx="2"/></svg>',
          'cube' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 8v8l9 5 9-5V8"/></svg>',
          'banknotes' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="6" width="18" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/><path d="M7 9h.01M17 15h.01"/></svg>',
          'document' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M7 3h7l5 5v13a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M14 3v5h5"/></svg>',
          'medal' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M8 14l4 7 4-7"/></svg>',
          'calendar-range' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 3v4M16 3v4M3 11h18"/><rect x="3" y="5" width="18" height="16" rx="2"/><rect x="7" y="15" width="10" height="2" rx="1"/></svg>',
          'target' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="currentColor" stroke="none"/></svg>',
          'book-open' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 4v16"/><path d="M12 4c-2-1-5-1-7 0v16c2-1 5-1 7 0"/><path d="M12 4c2-1 5-1 7 0v16c-2-1-5-1-7 0"/></svg>',
          'trophy' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 4h8v3a4 4 0 0 1-8 0V4z"/><path d="M6 4H4a3 3 0 0 0 3 5"/><path d="M18 4h2a3 3 0 0 1-3 5"/><path d="M12 11v5"/><path d="M9 21h6"/></svg>',
          'globe' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c3 4 3 14 0 18M12 3c-3 4-3 14 0 18"/></svg>',
          'chart-bar' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18"/><rect x="6" y="13" width="3" height="6" rx="1"/><rect x="11" y="9" width="3" height="10" rx="1"/><rect x="16" y="5" width="3" height="14" rx="1"/></svg>',
        ];

        $features = [
          ['Membership', 'Member IDs, types, dates, references, age', 'id-card'],
          ['Committees', 'Structure teams and designations', 'users'],
          ['Meetings', 'Schedule, attendance, minutes, actions', 'calendar'],
          ['Events', 'Plan, track attendance, summaries, actions', 'megaphone'],
          ['Projects', 'Plan, capture progress, guests, actions', 'kanban'],
          ['Assets', 'Lifecycle, responsible history, details', 'cube'],
          ['Accounting', 'Funds, services, statements by fund', 'banknotes'],
          ['Documents', 'Secure files & media library', 'document'],
          ['Founders', 'Founders and designations', 'medal'],
          ['Year plan', 'Create and track annual plans', 'calendar-range'],
          ['Strategic plan', 'Multi-period strategy & progress', 'target'],
          ['History & stories', 'History and success stories', 'book-open'],
          ['Recognition', 'Awards & recognition records', 'trophy'],
          ['Regional billing', 'Area-based, flexible, multi-currency', 'globe'],
          ['Reports & privacy', 'Growth, finance and data control', 'chart-bar'],
        ];
      @endphp

      @foreach($features as [$title,$desc,$icon])
        <article class="rounded-2xl border border-slate-200 p-6 hover:shadow-sm transition">
          <div class="h-9 w-9 rounded-lg bg-blue-600/10 flex items-left justify-left text-blue-600">
            {!! $icons[$icon] !!}
          </div>
          <h3 class="mt-4 font-semibold text-slate-900">{{ $title }}</h3>
          <p class="mt-2 text-sm text-slate-600">{{ $desc }}.</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

{{-- Story timeline --}}
<section id="story" class="py-16 lg:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl">
      <h2 class="text-3xl font-bold text-slate-900">Our story</h2>
      <p class="mt-4 text-slate-600">Built in London for modern organisations—serving teams globally.</p>
    </header>

    <ol class="mt-10 relative border-l border-slate-200 pl-6">
      <li class="mb-10 ml-2">
        <div class="absolute -left-[9px] mt-1 h-4 w-4 rounded-full bg-blue-600"></div>
        <time class="text-xs uppercase tracking-wide text-slate-500">2023</time>
        <h3 class="mt-1 font-semibold text-slate-900">Idea & early prototypes</h3>
        <p class="mt-2 text-slate-600">We mapped end-to-end organisational workflows and built the first unified models.</p>
      </li>
      <li class="mb-10 ml-2">
        <div class="absolute -left-[9px] mt-1 h-4 w-4 rounded-full bg-blue-600"></div>
        <time class="text-xs uppercase tracking-wide text-slate-500">2024</time>
        <h3 class="mt-1 font-semibold text-slate-900">Private beta</h3>
        <p class="mt-2 text-slate-600">Real-world pilots refined privacy, reporting and regional billing.</p>
      </li>
      <li class="ml-2">
        <div class="absolute -left-[9px] mt-1 h-4 w-4 rounded-full bg-blue-600"></div>
        <time class="text-xs uppercase tracking-wide text-slate-500">2025</time>
        <h3 class="mt-1 font-semibold text-slate-900">Public launch</h3>
        <p class="mt-2 text-slate-600">Azonation is available with 15 connected modules and GDPR-ready controls.</p>
      </li>
    </ol>
  </div>
</section>

{{-- Values --}}
<section id="values" class="py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl">
      <h2 class="text-3xl font-bold text-slate-900">What we value</h2>
    </header>

    <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @php
        $values = [
          ['Simplicity', 'Less noise, more signal. Clear interfaces that get out of your way.'],
          ['Trust', 'Privacy by design and transparent data controls.'],
          ['Reliability', 'Solid engineering and predictable operations.'],
          ['Progress', 'Iterate with our users to keep improving.'],
        ];
      @endphp
      @foreach($values as [$title,$desc])
        <article class="rounded-2xl border border-slate-200 p-6">
          <h3 class="font-semibold text-slate-900">{{ $title }}</h3>
          <p class="mt-2 text-sm text-slate-600">{{ $desc }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

{{-- Trust & Privacy --}}
<section id="trust" class="py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-8 items-start">
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold text-slate-900">Trust & privacy</h2>
        <p class="mt-4 text-slate-600">
          Data privacy sits at the centre of Azonation. You control visibility with Private, Members-only or Public settings.
          We support regional billing and transparent audit trails across core modules.
        </p>
        <ul class="mt-6 space-y-3 text-slate-700">
          <li class="flex gap-3">
            <span class="mt-1 h-5 w-5 rounded-md bg-blue-600/10 flex items-center justify-center">
              <svg viewBox="0 0 24 24" class="h-3.5 w-3.5" aria-hidden="true"><path d="M6 12l4 4 8-8" class="stroke-blue-600" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            GDPR-ready data practices and role-based access.
          </li>
          <li class="flex gap-3">
            <span class="mt-1 h-5 w-5 rounded-md bg-blue-600/10 flex items-center justify-center">
              <svg viewBox="0 0 24 24" class="h-3.5 w-3.5" aria-hidden="true"><path d="M6 12l4 4 8-8" class="stroke-blue-600" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Organisation-wide auditability across meetings, events and projects.
          </li>
          <li class="flex gap-3">
            <span class="mt-1 h-5 w-5 rounded-md bg-blue-600/10 flex items-center justify-center">
              <svg viewBox="0 0 24 24" class="h-3.5 w-3.5" aria-hidden="true"><path d="M6 12l4 4 8-8" class="stroke-blue-600" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Region-sensitive billing with multi-currency support.
          </li>
        </ul>
      </div>

      <aside class="rounded-2xl border border-slate-200 p-6">
        <h3 class="font-semibold text-slate-900">Need a security review?</h3>
        <p class="mt-2 text-sm text-slate-600">We’re happy to share details of our approach to privacy and data handling.</p>
        <a href="mailto:security@azonation.com" class="mt-4 inline-flex items-center rounded-xl bg-blue-600 px-4 py-2 text-white font-semibold hover:bg-blue-700 transition">
          Email security@azonation.com
        </a>
      </aside>
    </div>
  </div>
</section>

{{-- Logos / Recognition --}}
{{-- <section class="py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl border border-slate-200 p-10">
      <p class="text-center text-slate-600">Trusted by forward-thinking organisations</p>
      <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
        @for ($i = 1; $i <= 6; $i++)
          <img
            src="{{ asset('images/client-' . $i . '.png') }}"
            alt="Client logo {{ $i }} for Azonation"
            class="h-10 w-full object-contain bg-slate-50 rounded-md p-2"
            loading="lazy"
            width="240"
            height="40"
          >
        @endfor
      </div>
    </div>
  </div>
</section> --}}

{{-- FAQ --}}
<section id="faq" class="py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl">
      <h2 class="text-3xl font-bold text-slate-900">Frequently asked questions</h2>
    </header>
    <div class="mt-8 space-y-4">
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center justify-between text-slate-900 font-medium">
          What is Azonation?
          <span class="ml-2 text-slate-400 group-open:rotate-180 transition">▾</span>
        </summary>
        <p class="mt-3 text-slate-600">Azonation is a modern SaaS that unifies core organisation operations—memberships, meetings, events, projects, assets, accounting and documents—so teams can run everything in one place.</p>
      </details>
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center justify-between text-slate-900 font-medium">
          Is Azonation GDPR-ready?
          <span class="ml-2 text-slate-400 group-open:rotate-180 transition">▾</span>
        </summary>
        <p class="mt-3 text-slate-600">Yes. Azonation is privacy-first with role-based access and visibility controls including Private, Members-only and Public.</p>
      </details>
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center justify-between text-slate-900 font-medium">
          How is billing handled?
          <span class="ml-2 text-slate-400 group-open:rotate-180 transition">▾</span>
        </summary>
        <p class="mt-3 text-slate-600">Regional, flexible billing with multi-currency support and transparent statements by fund.</p>
      </details>
    </div>
  </div>
</section>

</x-landing-layout>
