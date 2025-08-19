<x-landing-layout>
  {{-- ========= Breadcrumbs ========= --}}
  <nav class="bg-white/60 backdrop-blur border-b border-slate-100" aria-label="Breadcrumb">
    <ol class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center gap-2 py-3 text-sm">
      <li><a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900">Home</a></li>
      <li aria-hidden="true" class="text-slate-400">/</li>
      <li class="text-slate-900 font-medium">Contact</li>
    </ol>
  </nav>

  {{-- ========= Hero ========= --}}
  <header class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0">
      <span class="absolute -top-24 -left-20 h-80 w-80 rounded-full bg-gradient-to-br from-blue-400/20 via-sky-300/15 to-indigo-300/15 blur-3xl"></span>
      <span class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-gradient-to-tr from-indigo-400/15 via-blue-400/15 to-sky-400/15 blur-3xl"></span>
    </div>
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-14 pb-8 sm:pt-20 sm:pb-12 lg:pt-24 lg:pb-16">
      <div class="max-w-3xl">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
          Contact <span class="text-blue-600">Azonation</span>
        </h1>
        <p class="mt-4 sm:mt-6 text-base sm:text-lg text-slate-600 max-w-2xl">
          Questions about memberships, meetings, events, projects or billing? Send us a message and we’ll get back quickly.
        </p>
      </div>
    </div>
  </header>

  {{-- ========= Content ========= --}}
  <main>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
        {{-- Contact Details --}}
        <aside class="col-span-12 lg:col-span-4">
          <div class="space-y-6 lg:sticky lg:top-24">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm">
              <h2 class="text-base font-semibold text-slate-900">Reach us</h2>
              <ul class="mt-4 space-y-4 text-sm">
                <li class="flex items-start gap-3 break-words">
                  <svg class="h-5 w-5 mt-0.5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="1.5" d="M2 5.5C2 4.12 3.12 3 4.5 3h2A2.5 2.5 0 0 1 9 5.5v1A2.5 2.5 0 0 1 6.5 9H6a9 9 0 0 0 9 9v-.5A2.5 2.5 0 0 1 17.5 15h1A2.5 2.5 0 0 1 21 17.5v2A2.5 2.5 0 0 1 18.5 22C10.49 22 4 15.51 4 7.5 4 6.12 5.12 5 6.5 5H7"/></svg>
                  <div>
                    <div class="text-slate-500">Mobile</div>
                    <a href="tel:+447570772929" class="font-medium text-slate-900 hover:text-blue-700">+44 7570 772929</a>
                  </div>
                </li>
                <li class="flex items-start gap-3 break-words">
                  <svg class="h-5 w-5 mt-0.5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="1.5" d="M4 6h16v12H4z"/><path stroke-width="1.5" d="M22 6l-10 7L2 6"/></svg>
                  <div>
                    <div class="text-slate-500">Email</div>
                    <a href="mailto:info@azonation.com" class="font-medium text-slate-900 hover:text-blue-700 break-words">info@azonation.com</a>
                  </div>
                </li>
                <li class="flex items-start gap-3 break-words">
                  <svg class="h-5 w-5 mt-0.5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="1.5" d="M12 2v20M2 12h20"/></svg>
                  <div>
                    <div class="text-slate-500">Website</div>
                    <a href="https://azonation.com" class="font-medium text-slate-900 hover:text-blue-700 break-words" rel="noopener">azonation.com</a>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <svg class="h-5 w-5 mt-0.5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="1.5" d="M3 10.5C3 6.36 6.36 3 10.5 3h3A7.5 7.5 0 0 1 21 10.5v3A7.5 7.5 0 0 1 13.5 21h-3A7.5 7.5 0 0 1 3 13.5v-3Z"/></svg>
                  <div>
                    <div class="text-slate-500">Address</div>
                    <div class="font-medium text-slate-900">Tower Hamlets, London, UK</div>
                  </div>
                </li>
              </ul>

              <div class="mt-6 flex flex-wrap items-center gap-3">
                <a href="https://www.facebook.com/azonationworld/" target="_blank" rel="noopener" aria-label="Azonation on Facebook" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 hover:border-blue-600 hover:text-blue-600">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.15 8.44 9.94v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.5-3.89 3.8-3.89 1.1 0 2.25.2 2.25.2v2.48h-1.27c-1.25 0-1.64.78-1.64 1.58v1.9h2.79l-.45 2.9h-2.34V22c4.78-.79 8.44-4.94 8.44-9.94z"/></svg>
                </a>
                <a href="https://x.com/AzonationWorld" target="_blank" rel="noopener" aria-label="Azonation on X" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 hover:border-blue-600 hover:text-blue-600">
                  <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.76l-4.66-6.1L4.9 22H2l7.06-8.07L2 2h6.76l4.29 5.61L18.244 2Zm-1.184 18h1.75L7.01 4h-1.8l11.85 16Z"/></svg>
                </a>
              </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-sm">
              <h3 class="text-base font-semibold text-slate-900">Support hours</h3>
              <p class="mt-2 text-sm text-slate-600">Mon–Fri, 9:00–17:00 (UK time)</p>
            </div>
          </div>
        </aside>

        {{-- Contact Form --}}
        <section class="col-span-12 lg:col-span-8">
          <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-8 shadow-sm">
            <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Send a message</h2>
            <p class="mt-2 text-sm text-slate-600">We typically reply within one business day.</p>

            {{-- Success Message --}}
            @if (session('success'))
              <div class="mt-6 flex items-start gap-3 rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800">
                <svg class="h-5 w-5 flex-shrink-0 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <p class="break-words">{{ session('success') }}</p>
              </div>
            @endif

            {{-- Error / Warning Messages --}}
            @if ($errors->any())
              <div class="mt-6 flex items-start gap-3 rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-800">
                <svg class="h-5 w-5 flex-shrink-0 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" />
                </svg>
                <ul class="list-disc pl-5 space-y-1">
                  @foreach ($errors->all() as $error)
                    <li class="break-words">{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="mt-8 space-y-6">
              @csrf

              {{-- Honeypot --}}
              <input type="text" name="website" class="sr-only" tabindex="-1" autocomplete="off" aria-hidden="true">

              {{-- Full name + Email --}}
              <div class="sm:flex sm:gap-6">
                <div class="sm:w-1/2">
                  <label for="full_name" class="block text-sm font-medium text-slate-700">Full name *</label>
                  <input id="full_name" name="full_name" type="text" required
                         value="{{ old('full_name') }}" autocomplete="name"
                         class="mt-2 h-11 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                         placeholder="Your name">
                </div>

                <div class="sm:w-1/2 mt-5 sm:mt-0">
                  <label for="email" class="block text-sm font-medium text-slate-700">Email *</label>
                  <input id="email" name="email" type="email" required
                         value="{{ old('email') }}" autocomplete="email"
                         class="mt-2 h-11 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                         placeholder="you@example.com"
                         pattern="^[^\s@]+@[^\s@]+\.[^\s@]{2,}$">
                </div>
              </div>

              {{-- Phone + Subject --}}
              <div class="sm:flex sm:gap-6">
                <div class="sm:w-1/2">
                  <label for="phone" class="block text-sm font-medium text-slate-700">Phone</label>
                  <input id="phone" name="phone" type="tel"
                         value="{{ old('phone') }}"
                         class="mt-2 h-11 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                         placeholder="+44…">
                </div>

                <div class="sm:w-1/2 mt-5 sm:mt-0">
                  <label for="subject" class="block text-sm font-medium text-slate-700">Subject *</label>
                  <input id="subject" name="subject" type="text" required
                         value="{{ old('subject') }}"
                         class="mt-2 h-11 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                         placeholder="How can we help?">
                </div>
              </div>

              {{-- Message --}}
              <div>
                <label for="message" class="block text-sm font-medium text-slate-700">Message *</label>
                <textarea id="message" name="message" rows="6" required
                          class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                          placeholder="Share a few details…">{{ old('message') }}</textarea>
              </div>

              {{-- Consent --}}
              <div class="flex items-start gap-3">
                <input id="consent" name="consent" type="checkbox" value="1" required
                       class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-600">
                <label for="consent" class="text-sm text-slate-600">
                  I consent to Azonation using my details to respond to this enquiry. See our
                  <a href="{{ url('/privacy') }}" class="text-blue-700 hover:underline">privacy policy</a>.
                </label>
              </div>

              {{-- Submit --}}
              <div class="pt-1">
                <button type="submit"
                        class="w-full sm:w-auto inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                  Send message
                </button>
              </div>

              {{-- Alt contact --}}
              <p class="text-xs text-slate-500 break-words">
                Prefer email? Write to <a href="mailto:info@azonation.com" class="text-blue-700 hover:underline">info@azonation.com</a>
                or call <a href="tel:+447570772929" class="text-blue-700 hover:underline">+44 7570 772929</a>.
              </p>
            </form>
          </div>
        </section>
      </div>
    </section>
  </main>
</x-landing-layout>
