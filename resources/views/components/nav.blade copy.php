<header class="sticky top-0 z-40 bg-white/70 backdrop-blur border-b border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <nav class="flex items-center gap-8" aria-label="Primary">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
          <img src="{{ asset('storage/images/azonation-logo.png') }}" alt="Azonation" class="h-7 w-auto">
          <span class="sr-only">Azonation</span>
        </a>

        <ul class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700">
          <li><a href={{ route('home')}} class="hover:text-slate-900">Organization</a></li>
          <li><a href={{ route('home')}} class="hover:text-slate-900">Individual</a></li>
          <li><a href={{ route('pricing')}} class="hover:text-slate-900">Pricing</a></li>
          <li><a href={{ route('home')}} class="hover:text-slate-900">Help</a></li>
        </ul>
      </nav>
      <div class="flex items-center gap-3">
        <a href="https://my.azonation.com/" class="text-sm font-medium text-slate-700 hover:text-slate-900">Log in</a>
        <a href="https://my.azonation.com/signup"
          class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
          Start for free
        </a>
      </div>
    </div>
  </div>
</header>