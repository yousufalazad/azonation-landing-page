<header x-data="{ mobileOpen:false, openMenu:null }"
  x-effect="document.body.classList.toggle('overflow-hidden', mobileOpen)"
  class="sticky top-0 z-50 bg-white/70 backdrop-blur border-b border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <!-- Top bar: grid so mobile Log in can be centered -->
    <div class="flex items-center justify-between h-16">
      <!-- LEFT: Logo + Desktop primary nav -->
      <div class="flex items-center gap-8">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-2">
          <img src="{{ asset('storage/images/azonation-logo.png') }}" alt="Azonation" class="h-7 w-auto">
          <span class="sr-only">Azonation</span>
        </a>

        <!-- Desktop nav (same links, now inline) -->
        <ul class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700" aria-label="Primary">
          <!-- Organization (mega) -->
          <li class="relative" @mouseenter="openMenu = 'org'" @focusin="openMenu = 'org'">
            <a href="{{ route('organization') }}" class="inline-flex items-center gap-2 hover:text-slate-900"
              :aria-expanded="(openMenu==='org').toString()">
              Organization
              <svg class="h-4 w-4 transition-transform duration-200" :class="openMenu==='org' ? 'rotate-180' : ''"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </li>

          <!-- Individual (mega) -->
          <li class="relative" @mouseenter="openMenu = 'ind'" @focusin="openMenu = 'ind'">
            <a href="{{ route('individual') }}" class="inline-flex items-center gap-2 hover:text-slate-900"
              :aria-expanded="(openMenu==='ind').toString()">
              Individual
              <svg class="h-4 w-4 transition-transform duration-200" :class="openMenu==='ind' ? 'rotate-180' : ''"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg> </a>
          </li>

          <!-- Help (mega) -->
          <li class="relative" @mouseenter="openMenu = 'help'" @focusin="openMenu = 'help'">
            <button type="button" class="inline-flex items-center gap-2 hover:text-slate-900"
              :aria-expanded="(openMenu==='help').toString()">
              Help
              <svg class="h-4 w-4 transition-transform duration-200" :class="openMenu==='help' ? 'rotate-180' : ''"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </li>

          <li><a href="{{ route('pricing') }}" class="hover:text-slate-900">Pricing</a></li>
        </ul>
      </div>

      <!-- RIGHT: Mobile Log In + Desktop Auth + Hamburger -->
      <div class="flex items-center gap-3">
        <!-- Mobile Log In pill -->
        <a href="https://my.azonation.com/"
          class="md:hidden inline-flex items-center rounded border border-slate-900 px-4 py-1.5 text-sm text-slate-900">
          Log In
        </a>

        <!-- Desktop auth -->
        <div class="hidden md:flex items-center gap-3">
          <a href="https://my.azonation.com/" class="text-sm font-medium text-slate-700 hover:text-slate-900">Log in</a>
          <a href="https://my.azonation.com/signup"
            class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
            Start for free
          </a>
        </div>

        <!-- Mobile hamburger -->
        <button
          class="md:hidden inline-flex items-center justify-center p-2 rounded border border-slate-300 text-slate-700"
          @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen.toString()" aria-label="Toggle navigation">
          <svg x-show="!mobileOpen" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="mobileOpen" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- FULL-WIDTH MEGA MENU WRAPPER (desktop) -->
  <div class="hidden md:block relative" @keydown.escape.window="openMenu=null">
    <div class="absolute inset-x-0" x-show="openMenu !== null" x-transition.opacity x-cloak @mouseenter=""
      @mouseleave="openMenu=null">
      <div class="pt-2">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="rounded-2xl border border-slate-200 bg-white shadow-lg">
            <!-- ORG PANEL -->
            <div x-show="openMenu==='org'" x-transition.opacity x-cloak class="p-8">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Organisation Overview</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('organization') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">What you can do</span>
                        <p class="text-slate-600">Members, meetings, projects, finance — all in one place.</p>
                      </a></li>
                    <li><a href="{{ url('/help#org-dashboard') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Use the Organisation
                          Dashboard</span>
                        <p class="text-slate-600">Summary cards, quick actions, and KPIs.</p>
                      </a></li>
                    <li><a href="{{ url('/help#roles-permissions') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Roles & Privacy</span>
                        <p class="text-slate-600">Permissions, visibility, and member access control.</p>
                      </a></li>
                  </ul>
                </div>
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Core Workflows</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#add-member') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Add Members</span>
                        <p class="text-slate-600">Manual add, CSV import, membership types.</p>
                      </a></li>
                    <li><a href="{{ url('/help#create-meeting') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Create Meetings</span>
                        <p class="text-slate-600">Agenda, invites, minutes, attendance.</p>
                      </a></li>
                    <li><a href="{{ url('/help#projects-events') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Projects & Events</span>
                        <p class="text-slate-600">Plan, assign, track, and report progress.</p>
                      </a></li>
                  </ul>
                </div>
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Finance & Integrations</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#manage-accounts') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Accounts & Finance</span>
                        <p class="text-slate-600">Income/expense, funds, receipts, exports.</p>
                      </a></li>
                    <li><a href="{{ url('/help#billing') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Billing & Plans</span>
                        <p class="text-slate-600">Plans, invoices, and regional pricing.</p>
                      </a></li>
                    <li><a href="{{ url('/help#integrations') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Payment Integrations</span>
                        <p class="text-slate-600">Stripe, PayPal, SSLCommerz, Razorpay, etc.</p>
                      </a></li>
                  </ul>
                  <div class="mt-6">
                    <a href="{{ route('organization') }}"
                      class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
                      Explore Organisation
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- INDIVIDUAL PANEL -->
            <div x-show="openMenu==='ind'" x-transition.opacity x-cloak class="p-8">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Individual Overview</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('individual') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">What you can do</span>
                        <p class="text-slate-600">Track memberships, tasks, attendance, and billing.</p>
                      </a></li>
                    <li><a href="{{ url('/help#individual-dashboard') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Use the Individual
                          Dashboard</span>
                        <p class="text-slate-600">Upcoming meetings, projects, and quick links.</p>
                      </a></li>
                    <li><a href="{{ url('/help#profile-privacy') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Profile & Privacy</span>
                        <p class="text-slate-600">Manage personal info, preferences, notifications.</p>
                      </a></li>
                  </ul>
                </div>
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Getting Involved</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#join-organisation') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Join or Connect to an
                          Organisation</span>
                        <p class="text-slate-600">Find orgs, request access, accept invites.</p>
                      </a></li>
                    <li><a href="{{ url('/help#attendance') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Attendance & Tasks</span>
                        <p class="text-slate-600">RSVPs, reminders, and completion tracking.</p>
                      </a></li>
                    <li><a href="{{ url('/help#referrals') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Referrals</span>
                        <p class="text-slate-600">Share your code and track rewards.</p>
                      </a></li>
                  </ul>
                </div>
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Billing & Settings</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#individual-billing') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Billing</span>
                        <p class="text-slate-600">Subscriptions, payments, and invoices.</p>
                      </a></li>
                    <li><a href="{{ url('/help#notifications') }}" class="group block p-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-slate-900 group-hover:underline">Notifications</span>
                        <p class="text-slate-600">Email, in-app alerts, and preferences.</p>
                      </a></li>
                  </ul>
                  <div class="mt-6">
                    <a href="{{ route('individual') }}"
                      class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
                      Explore Individual
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- HELP PANEL -->
            <div x-show="openMenu==='help'" x-transition.opacity x-cloak class="p-8">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Getting Started</h3>
                  <ul class="space-y-3 text-sm">
                    <li>
                      <a href="{{ url('/help#getting-started') }}"
                        class="group flex items-start gap-3 p-3 rounded-lg hover:bg-slate-50">
                        <span
                          class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-lg border border-slate-200">1</span>
                        <span>
                          <span class="font-semibold text-slate-900 group-hover:underline">Quick Start</span>
                          <p class="text-slate-600">Set up your organisation or individual account in minutes.</p>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/help#best-practices') }}"
                        class="group flex items-start gap-3 p-3 rounded-lg hover:bg-slate-50">
                        <span
                          class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-lg border border-slate-200">2</span>
                        <span>
                          <span class="font-semibold text-slate-900 group-hover:underline">Best Practices</span>
                          <p class="text-slate-600">Clean data, roles, privacy, and collaboration tips.</p>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">How-to Guides</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#org-dashboard') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Use the Organisation
                          Dashboard</span>
                        <p class="text-slate-600">Navigate summary cards, reports, and quick actions.</p>
                      </a></li>
                    <li><a href="{{ url('/help#individual-dashboard') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Use the Individual Dashboard</span>
                        <p class="text-slate-600">Track your memberships, tasks, and attendance.</p>
                      </a></li>
                    <li><a href="{{ url('/help#add-member') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Add Members</span>
                        <p class="text-slate-600">Import CSV, add manually, and manage roles.</p>
                      </a></li>
                    <li><a href="{{ url('/help#create-meeting') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Create Meetings</span>
                        <p class="text-slate-600">Schedule, invite, set agendas, and record minutes.</p>
                      </a></li>
                    <li><a href="{{ url('/help#manage-accounts') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Manage Accounts & Finance</span>
                        <p class="text-slate-600">Income/expense, funds, attachments, and exports.</p>
                      </a></li>
                  </ul>
                </div>

                <div class="col-span-12 md:col-span-4">
                  <h3 class="text-xs uppercase tracking-widest text-slate-500 mb-3">Resources</h3>
                  <ul class="space-y-3 text-sm">
                    <li><a href="{{ url('/help#videos') }}" class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Video Tutorials</span>
                        <p class="text-slate-600">Short walkthroughs for common tasks.</p>
                      </a></li>
                    <li><a href="{{ url('/help#templates') }}"
                        class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Templates</span>
                        <p class="text-slate-600">Agenda, minutes, budget, and report templates.</p>
                      </a></li>
                    <li><a href="{{ url('/help#support') }}" class="group block p-3 rounded-lg hover:bg-slate-50"><span
                          class="font-semibold text-slate-900 group-hover:underline">Support</span>
                        <p class="text-slate-600">Contact, chat, and SLA details.</p>
                      </a></li>
                  </ul>
                  <div class="mt-6">
                    <a href="{{ route('help') }}"
                      class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
                      Visit Help Centre
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MOBILE PANEL -->
  <div x-show="mobileOpen" x-transition x-cloak
    class="md:hidden fixed inset-x-0 top-16 z-50 border-t border-slate-100 bg-white shadow-lg">
    <div class="max-h-[calc(100dvh-4rem)] overflow-y-auto overscroll-contain px-4 py-4 space-y-4">
      <!-- Organization accordion -->
      <div x-data="{ open:false }" class="border border-slate-200 rounded-xl">
        <button type="button"
          class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-slate-700"
          @click="open = !open" :aria-expanded="open.toString()">
          <span>Organization</span>
          <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" x-collapse x-cloak class="px-2 pb-3">
          <a href="{{ route('organization') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Overview</a>
          <a href="{{ url('/help#org-dashboard') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Use the Organisation
            Dashboard</a>
          <a href="{{ url('/help#add-member') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Add Members</a>
          <a href="{{ url('/help#create-meeting') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Create Meetings</a>
          <a href="{{ url('/help#projects-events') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Projects & Events</a>
          <a href="{{ url('/help#manage-accounts') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Accounts & Finance</a>
        </div>
      </div>

      <!-- Individual accordion -->
      <div x-data="{ open:false }" class="border border-slate-200 rounded-xl">
        <button type="button"
          class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-slate-700"
          @click="open = !open" :aria-expanded="open.toString()">
          <span>Individual</span>
          <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" x-collapse x-cloak class="px-2 pb-3">
          <a href="{{ route('individual') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Overview</a>
          <a href="{{ url('/help#individual-dashboard') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Use the Individual Dashboard</a>
          <a href="{{ url('/help#join-organisation') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Join / Connect to
            Organisation</a>
          <a href="{{ url('/help#attendance') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Attendance & Tasks</a>
          <a href="{{ url('/help#referrals') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Referrals</a>
          <a href="{{ url('/help#individual-billing') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Billing</a>
        </div>
      </div>

      <!-- Help accordion -->
      <div x-data="{ open:false }" class="border border-slate-200 rounded-xl">
        <button type="button"
          class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-slate-700"
          @click="open = !open" :aria-expanded="open.toString()">
          <span>Help</span>
          <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.23 7.21a.75.75 0 011.06.02L10 11.243l3.71-4.01a.75.75 0 111.08 1.04l-4.24 4.58a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" x-collapse x-cloak class="px-2 pb-3">
          <a href="{{ url('/help#org-dashboard') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Use the Organisation
            Dashboard</a>
          <a href="{{ url('/help#individual-dashboard') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Use the Individual Dashboard</a>
          <a href="{{ url('/help#add-member') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Add Members</a>
          <a href="{{ url('/help#create-meeting') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Create Meetings</a>
          <a href="{{ url('/help#manage-accounts') }}"
            class="block rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">Manage Accounts & Finance</a>
          <a href="{{ route('help') }}"
            class="mt-2 inline-flex items-center rounded-lg bg-slate-900 px-3 py-2 text-xs font-semibold text-white hover:bg-slate-800">Visit
            Help Centre</a>
        </div>
      </div>

      <!-- Pricing (aligned like the accordions) -->
      <a href="{{ route('pricing') }}"
        class="block border border-slate-200 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
        Pricing
      </a>

      <div class="flex items-left">

        <a href="https://my.azonation.com/signup"
          class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
          Start for free
        </a>
      </div>
    </div>

  </div>

</header>