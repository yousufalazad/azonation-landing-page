<x-landing-layout>
    {{-- Hero --}}
<section class="relative overflow-hidden">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-10 lg:pt-28 lg:pb-20">
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-6">
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-[1.05]">
          Run your organization<br class="hidden sm:block"> in one calm place.
        </h1>
        <p class="mt-6 max-w-xl text-lg text-slate-600">
          Memberships. Meetings. Events. Projects. Billing.
        </p>

        <div class="mt-8 flex items-center gap-3">
          <a href="{{ route('register') }}"
             class="inline-flex items-center rounded-2xl bg-slate-900 px-6 py-3 text-base font-semibold text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400">
            Start for free
          </a>
          <a href="#video" class="inline-flex items-center font-semibold text-slate-900 hover:underline">
            Watch the app
            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>

        <p class="mt-4 text-sm text-slate-500">No credit card. 2-minute setup.</p>
      </div>

      {{-- “App inside” illustration --}}
      <div class="lg:col-span-6">
        <div class="relative rounded-3xl border border-slate-200 bg-white p-3 shadow-sm">
          <img src="{{ asset('images/hero-app-composition.png') }}"
               alt="Azonation dashboard showing members, meetings, and projects"
               class="w-full h-auto rounded-2xl"
               loading="eager" fetchpriority="high">
          <img src="{{ asset('images/mini-card-members.png') }}" alt="Members card"
               class="hidden sm:block absolute -right-8 top-8 w-40 rotate-3 rounded-xl shadow-md border border-slate-200 bg-white">
          <img src="{{ asset('images/mini-card-events.png') }}" alt="Events card"
               class="hidden sm:block absolute -left-8 bottom-8 w-44 -rotate-3 rounded-xl shadow-md border border-slate-200 bg-white">
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Clients --}}
<section aria-label="Clients" class="py-12 sm:py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <p class="text-center text-sm font-semibold text-slate-500 uppercase tracking-wider">Trusted by teams worldwide</p>
    <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-x-8 gap-y-6 items-center opacity-80">
      @foreach (['logo-1','logo-2','logo-3','logo-4','logo-5','logo-6'] as $logo)
        <img src="{{ asset("images/clients/$logo.svg") }}" alt="Client logo" class="h-8 w-auto mx-auto">
      @endforeach
    </div>
  </div>
</section>

{{-- Feature mosaic (extra illustration scope) --}}
<section id="features" class="py-16 sm:py-24 border-t border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-20">

    {{-- Row 1 --}}
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-5">
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Memberships made simple</h2>
        <p class="mt-4 text-slate-600">Profiles, renewals, roles, activity — tidy and connected.</p>
      </div>
      <div class="lg:col-span-7">
        <figure class="rounded-3xl border border-slate-200 bg-white p-3 shadow-sm">
          <img src="{{ asset('images/features/feature-memberships.png') }}"
               alt="Membership management UI preview"
               class="w-full h-auto rounded-2xl" loading="lazy">
        </figure>
      </div>
    </div>

    {{-- Row 2 --}}
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-5 lg:order-2">
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Meetings without mess</h2>
        <p class="mt-4 text-slate-600">Agendas, attendance, minutes — one flow.</p>
      </div>
      <div class="lg:col-span-7 lg:order-1">
        <figure class="rounded-3xl border border-slate-200 bg-white p-3 shadow-sm">
          <img src="{{ asset('images/features/feature-meetings.png') }}"
               alt="Meetings and agendas UI preview"
               class="w-full h-auto rounded-2xl" loading="lazy">
        </figure>
      </div>
    </div>

    {{-- Row 3 --}}
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-5">
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Projects & events</h2>
        <p class="mt-4 text-slate-600">Plan, assign, track — stay on time.</p>
      </div>
      <div class="lg:col-span-7">
        <figure class="rounded-3xl border border-slate-200 bg-white p-3 shadow-sm">
          <img src="{{ asset('images/features/feature-projects-events.png') }}"
               alt="Projects and events UI preview"
               class="w-full h-auto rounded-2xl" loading="lazy">
        </figure>
      </div>
    </div>

    {{-- Row 4 --}}
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-5 lg:order-2">
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Billing that understands you</h2>
        <p class="mt-4 text-slate-600">Multi-currency, regional pricing, invoices, audit-ready logs.</p>
      </div>
      <div class="lg:col-span-7 lg:order-1">
        <figure class="rounded-3xl border border-slate-200 bg-white p-3 shadow-sm">
          <img src="{{ asset('images/features/feature-billing.png') }}"
               alt="Billing and invoices UI preview"
               class="w-full h-auto rounded-2xl" loading="lazy">
        </figure>
      </div>
    </div>

  </div>
</section>

{{-- How it works (short & bold) --}}
<section id="how-it-works" class="py-16 sm:py-24 bg-slate-50 border-y border-slate-100">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="grid gap-8 sm:grid-cols-3">
      <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
        <h3 class="text-lg font-semibold text-slate-900">1. Create account</h3>
        <p class="mt-2 text-slate-600">Start free. Import members.</p>
      </div>
      <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
        <h3 class="text-lg font-semibold text-slate-900">2. Set up modules</h3>
        <p class="mt-2 text-slate-600">Meetings, projects, billing.</p>
      </div>
      <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
        <h3 class="text-lg font-semibold text-slate-900">3. Run & report</h3>
        <p class="mt-2 text-slate-600">One place. Less chaos.</p>
      </div>
    </div>
  </div>
</section>

{{-- Product video (app inside video) --}}
<section id="video" class="py-16 sm:py-24">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm">
      <div class="aspect-video w-full">
        <video class="h-full w-full" controls playsinline poster="{{ asset('images/video-poster.jpg') }}">
          <source src="{{ asset('videos/azonation-overview.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <p class="mt-4 text-center text-sm text-slate-600">A two-minute walk-through of Azonation.</p>
  </div>
</section>

{{-- Testimonials --}}
<section id="testimonials" class="py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center">Teams feel calmer with Azonation</h2>
    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ([
        ['quote' => 'We consolidated three tools into one. Zero chaos.', 'name' => 'Amelia R.', 'role' => 'Operations Lead'],
        ['quote' => 'Membership renewals finally run themselves.', 'name' => 'Hassan M.', 'role' => 'Secretary'],
        ['quote' => 'Meetings are on-time and documented. Bliss.', 'name' => 'Sophie L.', 'role' => 'Project Manager'],
      ] as $t)
      <figure class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <blockquote class="text-slate-800 text-lg leading-relaxed">“{{ $t['quote'] }}”</blockquote>
        <figcaption class="mt-4 text-sm text-slate-600 font-medium">{{ $t['name'] }} • {{ $t['role'] }}</figcaption>
      </figure>
      @endforeach
    </div>
  </div>
</section>

{{-- Pricing teaser / CTA --}}
<section id="pricing" class="py-16 sm:py-24 bg-slate-50 border-y border-slate-100">
  <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Start free. Upgrade when ready.</h2>
    <p class="mt-4 text-slate-600">Fair pricing for organisations of any size.</p>
    <div class="mt-8 inline-flex rounded-2xl border border-slate-200 bg-white p-2 shadow-sm">
      <a href="https://my.azonation.com/signup" class="inline-flex items-center rounded-xl px-6 py-3 text-base font-semibold bg-slate-900 text-white hover:bg-slate-800">Create account</a>
      <a href="#features" class="inline-flex items-center rounded-xl px-6 py-3 text-base font-semibold text-slate-900 hover:underline">Explore features</a>
    </div>
  </div>
</section>

</x-landing-layout>
