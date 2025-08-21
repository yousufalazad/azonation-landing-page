<x-landing-layout>
  {{-- ===========================
       HERO — previous style (soft colour glows, icon cards)
     =========================== --}}
  <section class="relative overflow-hidden">
    {{-- Ambient glows --}}
    <div class="pointer-events-none absolute inset-0">
      <span class="absolute -top-32 -left-24 h-80 w-80 rounded-full bg-gradient-to-br from-emerald-400/30 via-sky-400/20 to-indigo-400/20 blur-3xl"></span>
      <span class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-gradient-to-tr from-fuchsia-400/20 via-rose-400/20 to-orange-400/20 blur-3xl"></span>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-10 lg:pt-28 lg:pb-20">
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        {{-- Copy --}}
        <div class="lg:col-span-6">
          <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-[1.05]">
            Run your organisation<br class="hidden sm:block"> in one calm place.
          </h1>
          <p class="mt-6 max-w-xl text-lg text-slate-600">
          Azonation brings together memberships, renewals, attendance, meetings, events, projects, accounting, documents and more — so leaders can focus on growth, not paperwork.
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
          <p class="mt-4 text-sm text-slate-500">No credit card. 2‑minute set‑up.</p>
        </div>

        {{-- “App inside” CSS illustration (colourful icon badges) --}}
        <div class="lg:col-span-6">
          <div class="relative rounded-3xl border border-slate-200 bg-white/60 backdrop-blur p-5 shadow-sm">
            <div class="grid grid-cols-12 gap-4">
              {{-- Members --}}
              <div class="col-span-12 md:col-span-6">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="3" stroke-width="1.6"/>
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

              {{-- Meetings + Projects --}}
              <div class="col-span-12 md:col-span-6 space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
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
                  <svg class="h-4 w-4 text-amber-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M11 3a1 1 0 0 1 2 0v8h6a1 1 0 1 1 0 2h-6v8a1 1 0 1 1-2 0v-8H5a1 1 0 0 1 0-2h6V3z"/>
                  </svg>
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

  {{-- ===========================
       CLIENTS
     =========================== --}}
  <section aria-label="Clients" class="py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <p class="text-center text-sm font-semibold text-slate-500 uppercase tracking-wider">Trusted by teams worldwide</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        @foreach (['NBC UK', 'EUOAA', 'Rotary Club', 'EUCC', 'CCAA', 'D‑Forum'] as $brand)
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

  {{-- ===========================
       FEATURES (data from current brief, colours from previous style)
     =========================== --}}
  <section id="features" class="py-16 sm:py-24 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-20">
      {{-- Memberships --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="3" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Memberships made simple</h2>
          <p class="mt-4 text-slate-600">Member list, IDs, types, start/end dates, age, and references — tidy and searchable.</p>
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

      {{-- Committees --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M7 7h10M7 12h10M7 17h7"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Committees & designations</h2>
          <p class="mt-4 text-slate-600">Clear rosters with roles, terms, and responsibilities.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-sky-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-4 gap-2">
              @for ($i=0;$i<12;$i++)
                <div class="h-10 rounded-xl border border-sky-100 bg-white"></div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Meetings --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="1.6"/>
              <line x1="16" y1="2" x2="16" y2="6" stroke-width="1.6"/>
              <line x1="8" y1="2" x2="8" y2="6" stroke-width="1.6"/>
              <line x1="3" y1="10" x2="21" y2="10" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Meetings without mess</h2>
          <p class="mt-4 text-slate-600">Scheduling, attendance (members & guests), minutes, and action tracking.</p>
        </div>
        <div class="lg:col-span-7">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-indigo-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-5 gap-2">
              @for ($i=0;$i<10;$i++)
                <div class="h-10 rounded-xl border border-indigo-100 bg-white"></div>
              @endfor
            </div>
            <div class="mt-4 h-2 w-1/3 rounded bg-indigo-200"></div>
          </div>
        </div>
      </div>

      {{-- Events --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-rose-100 text-rose-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M4 4h16v16H4zM4 9h16"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Events that run themselves</h2>
          <p class="mt-4 text-slate-600">Plan, capture attendance, guest lists, summaries, and follow‑ups.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-rose-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-3 gap-3">
              @for ($i=0;$i<6;$i++)
                <div class="rounded-2xl border border-rose-100 bg-white p-4">
                  <div class="h-3 w-2/3 rounded bg-slate-200"></div>
                  <div class="mt-2 h-2 w-1/2 rounded bg-slate-100"></div>
                  <div class="mt-4 h-24 rounded-xl border border-slate-200"></div>
                </div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Projects --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <rect x="3" y="3" width="7" height="18" rx="2" stroke-width="1.6"/>
              <rect x="14" y="3" width="7" height="12" rx="2" stroke-width="1.6"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Projects, simply done</h2>
          <p class="mt-4 text-slate-600">Schedules, team attendance, guest contributors, summaries, and actions.</p>
        </div>
        <div class="lg:col-span-7">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-4 gap-2">
              @for ($i=0;$i<8;$i++)
                <div class="h-12 rounded-xl border border-amber-100 bg-white"></div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Asset Management --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-fuchsia-100 text-fuchsia-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M3 7h18M6 7V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2M6 7v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Asset lifecycle & ownership</h2>
          <p class="mt-4 text-slate-600">Status, history of responsible persons, and full details in one place.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-fuchsia-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-5 gap-2">
              @for ($i=0;$i<10;$i++)
                <div class="h-16 rounded-xl border border-fuchsia-100 bg-white"></div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Accounting & Funds --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-100 text-cyan-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M4 6h16M4 10h10M4 14h16M4 18h10"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Accounting that fits</h2>
          <p class="mt-4 text-slate-600">Create funds and see separate statements. Income & expense, crystal clear.</p>
        </div>
        <div class="lg:col-span-7">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-cyan-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-6 gap-2">
              @for ($i=0;$i<12;$i++)
                <div class="h-12 rounded-xl border border-cyan-100 bg-white"></div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Documents --}}
      <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-5 lg:order-2">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M14 2H6a2 2 0 0 0-2 2v16l4-3 4 3 4-3 4 3V8z"/>
            </svg>
          </div>
          <h2 class="mt-4 text-2xl sm:text-3xl font-bold text-slate-900">Documents & media</h2>
          <p class="mt-4 text-slate-600">Store files securely. Find them fast.</p>
        </div>
        <div class="lg:col-span-7 lg:order-1">
          <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-4 shadow-sm">
            <div class="grid grid-cols-4 gap-3">
              @for ($i=0;$i<8;$i++)
                <div class="h-24 rounded-2xl border border-amber-100 bg-white"></div>
              @endfor
            </div>
          </div>
        </div>
      </div>

      {{-- Organisation Records (Founders, Year plan, Strategic plan, History, Success stories, Recognition) --}}
      <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @php
            $infoBlocks = [
              ['title' => 'Founders', 'desc' => 'Keep founders’ names & designations neatly.', 'icon' => 'M5 12h14M12 5v14'],
              ['title' => 'Year plan', 'desc' => 'Create and track annual plans.', 'icon' => 'M4 6h16M8 2v4M16 2v4'],
              ['title' => 'Strategic plan', 'desc' => 'Period‑wise strategy, clear outcomes.', 'icon' => 'M3 12h18M3 6h12M3 18h8'],
              ['title' => 'History', 'desc' => 'Your story preserved with dates.', 'icon' => 'M6 12l4 4 8-8'],
              ['title' => 'Success stories', 'desc' => 'Share wins that matter.', 'icon' => 'M12 2l3 7h7l-5.5 4.5L18 22l-6-3.5L6 22l1.5-8L2 9h7z'],
              ['title' => 'Recognition', 'desc' => 'Record awards and recognition.', 'icon' => 'M12 2l3 6 6 .9-4.5 4.3L18 20l-6-3.2L6 20l1.5-6.8L3 8.9 9 8z'],
            ];
          @endphp
          @foreach ($infoBlocks as $b)
            <div class="rounded-2xl border border-slate-200 p-5">
              <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                  <path stroke-width="1.6" d="{{ $b['icon'] }}"/>
                </svg>
              </div>
              <h3 class="mt-4 text-lg font-semibold text-slate-900">{{ $b['title'] }}</h3>
              <p class="mt-1 text-slate-600">{{ $b['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Billing + Reports + Privacy (3-up cards) --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 items-stretch">
        {{-- Billing --}}
        <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-5 sm:p-6 shadow-sm h-full">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M21 8V7a2 2 0 0 0-2-2h-1V3M6 3v2H5a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h14"/>
              <path stroke-width="1.6" d="M7 12h7M7 16h5"/>
            </svg>
          </div>
          <h3 class="mt-4 text-lg sm:text-xl font-bold text-slate-900">Regional, flexible billing</h3>
          <p class="mt-2 text-slate-600">Currencies, areas, and billing cycles that match how you operate.</p>
        </div>

        {{-- Reports --}}
        <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-indigo-50 to-white p-5 sm:p-6 shadow-sm h-full">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M4 19h16M7 16V8m5 8V5m5 11v-6"/>
            </svg>
          </div>
          <h3 class="mt-4 text-lg sm:text-xl font-bold text-slate-900">Reports that matter</h3>
          <p class="mt-2 text-slate-600">Membership growth, income vs. expense, and more — ready to share.</p>
        </div>

        {{-- Privacy --}}
        <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-emerald-50 to-white p-5 sm:p-6 shadow-sm h-full">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-width="1.6" d="M6 10V7a6 6 0 1 1 12 0v3"/>
              <rect x="4" y="10" width="16" height="10" rx="2" stroke-width="1.6"/>
              <path stroke-width="1.6" d="M12 14v3"/>
            </svg>
          </div>
          <h3 class="mt-4 text-lg sm:text-xl font-bold text-slate-900">Data privacy control</h3>
          <p class="mt-2 text-slate-600">Public, members‑only, or private. You decide who sees what.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- ===========================
       HOW IT WORKS
     =========================== --}}
  <section id="how-it-works" class="py-16 sm:py-24 bg-slate-50 border-y border-slate-100">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
      <div class="grid gap-8 sm:grid-cols-3">
        @foreach ([1=>'Create account',2=>'Set up modules',3=>'Run & report'] as $step=>$title)
          <div class="rounded-2xl bg-white border border-slate-200 p-6 text-center">
            <div class="mx-auto mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-white font-semibold">{{ $step }}</div>
            <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
            <p class="mt-2 text-slate-600">
              @if($step===1) Start free. Import members.
              @elseif($step===2) Meetings, projects, billing.
              @else One place. Less chaos. @endif
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- ===========================
       DEMO (video placeholder)
     =========================== --}}
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
        <div class="pointer-events-none absolute inset-x-0 bottom-0 flex justify-center gap-1 pb-3">
          @for ($i=0;$i<20;$i++)
            <span class="h-6 w-1 rounded bg-slate-200"></span>
          @endfor
        </div>
      </div>
      <p class="mt-4 text-center text-sm text-slate-600">A two‑minute walk‑through of Azonation (coming soon).</p>
    </div>
  </section>

  {{-- ===========================
       TESTIMONIALS
     =========================== --}}
  <section id="testimonials" class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center">Teams feel calmer with Azonation</h2>
      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
          ['quote' => 'We consolidated three tools into one. Zero chaos.', 'name' => 'Amelia R.', 'role' => 'Operations Lead', 'color'=>'bg-emerald-100 text-emerald-700'],
          ['quote' => 'Membership renewals finally run themselves.', 'name' => 'Hassan M.', 'role' => 'Secretary', 'color'=>'bg-sky-100 text-sky-700'],
          ['quote' => 'Meetings are on‑time and documented. Bliss.', 'name' => 'Sophie L.', 'role' => 'Project Manager', 'color'=>'bg-indigo-100 text-indigo-700'],
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

  {{-- ===========================
       PRICING / CTA
     =========================== --}}
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
