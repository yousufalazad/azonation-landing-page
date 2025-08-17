<x-landing-layout>
  {{-- Hero (no images: gradients + icon cards) --}}
  <section class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0">
      <span class="absolute -top-32 -left-24 h-80 w-80 rounded-full bg-gradient-to-br from-emerald-400/30 via-sky-400/20 to-indigo-400/20 blur-3xl"></span>
      <span class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-gradient-to-tr from-fuchsia-400/20 via-rose-400/20 to-orange-400/20 blur-3xl"></span>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-10 lg:pt-28 lg:pb-20">
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-6">
          <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-[1.05]">
            Run your organisation<br class="hidden sm:block"> in one calm place.
          </h1>
          <p class="mt-6 max-w-xl text-lg text-slate-600">
            Memberships. Meetings. Events. Projects. Billing.
          </p>

          <div class="mt-8 flex items-center gap-3">
            <a href="https://my.azonation.com/signup"
               class="inline-flex items-center rounded-2xl bg-slate-900 px-6 py-3 text-base font-semibold text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400">
              Start for free
            </a>
            <a href="#demo" class="inline-flex items-center font-semibold text-slate-900 hover:underline">
              Watch the app
              <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>

          <p class="mt-4 text-sm text-slate-500">No credit card. 2-minute set-up.</p>
        </div>

        {{-- “App inside” CSS illustration (no images) --}}
        <div class="lg:col-span-6">
          <div class="relative rounded-3xl border border-slate-200 bg-white/60 backdrop-blur p-5 shadow-sm">
            <div class="grid grid-cols-12 gap-4">
              {{-- Left column: Members card --}}
              <div class="col-span-12 md:col-span-6">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                      {{-- Users icon --}}
                      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="3" stroke-width="1.6"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M23 20v-2a4 4 0 0 0-3-3.87M16 3.13a3 3 0 0 1 0 5.74"/>
                      </svg>
                    </span>
                    <div>
                      <p class="text-xs uppercase tracking-wider text-slate-500">Module</p>
                      <h3 class="font-semibold text-slate-900">Members</h3>
                    </div>
                  </div>
                  <div class="mt-4 space-y-3">
                    <div class="h-2 w-2/3 rounded bg-slate-200"></div>
                    <div class="h-2 w-1/2 rounded bg-slate-200"></div>
                    <div class="h-32 rounded-xl border border-slate-200 p-3">
                      <div class="grid grid-cols-3 gap-2">
                        @for ($i=0;$i<6;$i++)
                          <div class="h-10 rounded-lg bg-gradient-to-r from-slate-50 to-slate-100 border border-slate-200"></div>
                        @endfor
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Right column: Meetings + Projects mini cards --}}
              <div class="col-span-12 md:col-span-6 space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
                      {{-- Calendar icon --}}
                      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="1.6"/>
                        <line x1="16" y1="2" x2="16" y2="6" stroke-width="1.6"/>
                        <line x1="8" y1="2" x2="8" y2="6" stroke-width="1.6"/>
                        <line x1="3" y1="10" x2="21" y2="10" stroke-width="1.6"/>
                      </svg>
                    </span>
                    <div>
                      <p class="text-xs uppercase tracking-wider text-slate-500">Module</p>
                      <h3 class="font-semibold text-slate-900">Meetings</h3>
                    </div>
                  </div>
                  <div class="mt-4 grid grid-cols-4 gap-2">
                    @for ($i=0;$i<8;$i++)
                      <div class="h-8 rounded-lg bg-slate-100 border border-slate-200"></div>
                    @endfor
                  </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700">
                      {{-- Kanban icon --}}
                      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <rect x="3" y="3" width="7" height="18" rx="2" stroke-width="1.6"/>
                        <rect x="14" y="3" width="7" height="12" rx="2" stroke-width="1.6"/>
                      </svg>
                    </span>
                    <div>
                      <p class="text-xs uppercase tracking-wider text-slate-500">Module</p>
                      <h3 class="font-semibold text-slate-900">Projects</h3>
                    </div>
                  </div>
                  <div class="mt-4 space-y-2">
                    @for ($i=0;$i<4;$i++)
                      <div class="h-3 rounded bg-slate-200 w-{{ [11,8,10,6][$i] }}/12"></div>
                    @endfor
                    <div class="mt-3 h-2 rounded bg-emerald-300/60 w-7/12"></div>
                  </div>
                </div>
              </div>
            </div>

            {{-- Floating badges --}}
            <div class="hidden sm:block">
              <div class="absolute -right-6 -top-6 rounded-xl border border-slate-200 bg-white px-4 py-2 shadow-sm">
                <span class="inline-flex items-center gap-2 text-sm font-medium text-slate-700">
                  <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span> Live Insights
                </span>
              </div>
              <div class="absolute -left-6 -bottom-6 rounded-xl border border-slate-200 bg-white px-4 py-2 shadow-sm">
                <span class="inline-flex items-center gap-2 text-sm font-medium text-slate-700">
                  <svg class="h-4 w-4 text-amber-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11 3a1 1 0 0 1 2 0v8h6a1 1 0 1 1 0 2h-6v8a1 1 0 1 1-2 0v-8H5a1 1 0 0 1 0-2h6V3z"/></svg>
                  Quick Actions
                </span>
              </div>
            </div>
          </div>
        </div>
        {{-- /Illustration --}}
      </div>
    </div>
  </section>

  {{-- Clients (no logos; clean badges) --}}
  <section aria-label="Clients" class="py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <p class="text-center text-sm font-semibold text-slate-500 uppercase tracking-wider">Trusted by teams worldwide</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        @foreach (['Northwind', 'Acme Co.', 'Globex', 'Umbrella', 'Initech', 'StarkWorks'] as $brand)
          <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-3 py-1.5 text-sm text-slate-700 shadow-sm">
            <svg class="h-4 w-4 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="m5 12 4 4L19 6"/>
            </svg>
            {{ $brand }}
          </span>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Feature mosaic (icons + colour only) --}}
  <section id="features" class="py-16 sm:py-24 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-20">

      {{-- Row 1 --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
            {{-- Users --}}
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="3" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Memberships made simple</h2>
          <p class="mt-4 text-slate-600">Profiles, renewals, roles, activity — tidy and connected.</p>
        </div>
        <div class="lg:col-span-7">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-emerald-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-3 gap-3">
              @for ($i=0;$i<9;$i++)
                <div class="rounded-2xl border border-emerald-100 bg-white p-4">
                  <div class="h-3 w-3/4 rounded bg-slate-200"></div>
                  <div class="mt-2 h-2 w-2/3 rounded bg-slate-100"></div>
                  <div class="mt-4 h-2 w-1/2 rounded bg-emerald-200"></div>
                </div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Row 2 --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
            {{-- Calendar --}}
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="1.6"/>
              <line x1="16" y1="2" x2="16" y2="6" stroke-width="1.6"/>
              <line x1="8" y1="2" x2="8" y2="6" stroke-width="1.6"/>
              <line x1="3" y1="10" x2="21" y2="10" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Meetings without mess</h2>
          <p class="mt-4 text-slate-600">Agendas, attendance, minutes — one flow.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-sky-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-4 gap-2">
              @for ($i=0;$i<12;$i++)
                <div class="h-10 rounded-xl border border-sky-100 bg-white"></div>
              @endfor
            </div>
            <div class="mt-4 h-2 w-1/3 rounded bg-sky-200"></div>
          </div>
        </div>
      </div>

      {{-- Row 3 --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700">
            {{-- Kanban --}}
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <rect x="3" y="3" width="7" height="18" rx="2" stroke-width="1.6"/>
              <rect x="14" y="3" width="7" height="12" rx="2" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Projects & events</h2>
          <p class="mt-4 text-slate-600">Plan, assign, track — stay on time.</p>
        </div>
        <div class="lg:col-span-7">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-indigo-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-3 gap-3">
              @for ($i=0;$i<6;$i++)
                <div class="rounded-2xl border border-indigo-100 bg-white p-4">
                  <div class="h-3 w-2/3 rounded bg-slate-200"></div>
                  <div class="mt-2 h-2 w-1/2 rounded bg-slate-100"></div>
                  <div class="mt-4 h-24 rounded-xl border border-slate-200"></div>
                </div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Row 4 --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
            {{-- Receipt / billing --}}
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M21 8V7a2 2 0 0 0-2-2h-1V3m0 0H6m12 0v2M3 8v11a2 2 0 0 0 2 2h14M3 8h18M7 12h7M7 16h5"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Billing that understands you</h2>
          <p class="mt-4 text-slate-600">Multi-currency, regional pricing, invoices, audit-ready logs.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-5 gap-2">
              @for ($i=0;$i<10;$i++)
                <div class="h-16 rounded-xl border border-amber-100 bg-white"></div>
              @endfor
            </div>
            <div class="mt-4 h-2 w-1/4 rounded bg-amber-300/70"></div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- How it works --}}
  <section id="how-it-works" class="py-16 sm:py-24 bg-slate-50 border-y border-slate-100">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
      <div class="grid gap-8 sm:grid-cols-3">
        <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
          <div class="mx-auto mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-white font-semibold">1</div>
          <h3 class="text-lg font-semibold text-slate-900">Create account</h3>
          <p class="mt-2 text-slate-600">Start free. Import members.</p>
        </div>
        <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
          <div class="mx-auto mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-white font-semibold">2</div>
          <h3 class="text-lg font-semibold text-slate-900">Set up modules</h3>
          <p class="mt-2 text-slate-600">Meetings, projects, billing.</p>
        </div>
        <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
          <div class="mx-auto mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-white font-semibold">3</div>
          <h3 class="text-lg font-semibold text-slate-900">Run & report</h3>
          <p class="mt-2 text-slate-600">One place. Less chaos.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Demo (app “video” placeholder with play button) --}}
  <section id="demo" class="py-16 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
      <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-gradient-to-br from-slate-50 via-white to-slate-50 shadow-sm">
        <div class="aspect-video flex items-center justify-center">
          <button class="group inline-flex items-center gap-3 rounded-2xl border border-slate-300 bg-white/80 px-5 py-3 text-slate-900 backdrop-blur hover:bg-white">
            <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 text-white">
              <svg class="ml-0.5 h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </span>
            <span class="font-semibold">Play demo</span>
          </button>
        </div>
        {{-- Decorative equaliser bars --}}
        <div class="pointer-events-none absolute inset-x-0 bottom-0 flex justify-center gap-1 pb-3">
          @for ($i=0;$i<20;$i++)
            <span class="h-6 w-1 rounded bg-slate-200"></span>
          @endfor
        </div>
      </div>
      <p class="mt-4 text-center text-sm text-slate-600">A two-minute walk-through of Azonation (coming soon).</p>
    </div>
  </section>

  {{-- Testimonials (icons / initials) --}}
  <section id="testimonials" class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center">Teams feel calmer with Azonation</h2>
      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
          ['quote' => 'We consolidated three tools into one. Zero chaos.', 'name' => 'Amelia R.', 'role' => 'Operations Lead', 'color'=>'bg-emerald-100 text-emerald-700'],
          ['quote' => 'Membership renewals finally run themselves.', 'name' => 'Hassan M.', 'role' => 'Secretary', 'color'=>'bg-sky-100 text-sky-700'],
          ['quote' => 'Meetings are on-time and documented. Bliss.', 'name' => 'Sophie L.', 'role' => 'Project Manager', 'color'=>'bg-indigo-100 text-indigo-700'],
        ] as $t)
          <figure class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-center gap-3">
              <span class="inline-flex h-10 w-10 items-center justify-center rounded-full {{ $t['color'] }} font-semibold">
                {{ strtoupper(substr($t['name'],0,1)) }}
              </span>
              <figcaption class="text-sm text-slate-600 font-medium">{{ $t['name'] }} • {{ $t['role'] }}</figcaption>
            </div>
            <blockquote class="mt-4 text-slate-800 text-lg leading-relaxed">
              “{{ $t['quote'] }}”
            </blockquote>
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
      <p class="mt-3 text-xs text-slate-500">Monthly or annual. Cancel any time.</p>
    </div>
  </section>
</x-landing-layout>
