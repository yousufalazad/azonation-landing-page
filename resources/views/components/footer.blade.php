{{-- resources/views/components/footer.blade.php --}}
<footer class="border-t border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid gap-8 md:grid-cols-3">
      {{-- Brand --}}
      <div class="space-y-3">
         <a href="{{ url('/') }}" class="flex items-center gap-2">
          <img src="{{ asset('storage/images/azonation-logo.png') }}" alt="Azonation" class="h-7 w-auto">
          <span class="sr-only">Azonation</span>
        </a>
        <p class="text-sm text-slate-600 max-w-xs">
          Organisation management solution with a focus on simplicity and efficiency.
        </p>
      </div>

      {{-- Company --}}
      <div>
        <h3 class="text-sm font-semibold text-slate-900 mb-3">Company</h3>
        <ul class="space-y-2 text-sm text-slate-600">
          <li><a href="#features" class="hover:text-slate-900">Features</a></li>
          <li><a href="#pricing" class="hover:text-slate-900">Pricing</a></li>
          <li><a href="#testimonials" class="hover:text-slate-900">Testimonials</a></li>
          <li><a href="#video" class="hover:text-slate-900">Product video</a></li>
        </ul>
      </div>

      {{-- Legal / Contact --}}
      <div>
        <h3 class="text-sm font-semibold text-slate-900 mb-3">Legal</h3>
        <ul class="space-y-2 text-sm text-slate-600">
          <li><a href="/terms" class="hover:text-slate-900">Terms</a></li>
          <li><a href="/privacy" class="hover:text-slate-900">Privacy</a></li>
          <li>
            <a href="mailto:hello@azonation.com" class="hover:text-slate-900">Help Centre</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-8 flex items-center justify-between gap-4">
      <p class="text-xs text-slate-500">© {{ date('Y') }} Azonation. All rights reserved.</p>

      {{-- Social (optional, remove if not needed) --}}
      <div class="flex items-center gap-4 text-slate-400">
        <a href="#" class="hover:text-slate-600" aria-label="Twitter">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M8.29 20c7.547 0 11.675-6.253 11.675-11.675 0-.177 0-.355-.012-.53A8.35 8.35 0 0 0 22 5.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996A4.107 4.107 0 0 0 16.616 4c-2.266 0-4.103 1.837-4.103 4.102 0 .322.036.637.106.938-3.41-.171-6.435-1.804-8.457-4.287a4.09 4.09 0 0 0-.556 2.063 4.105 4.105 0 0 0 1.827 3.417 4.072 4.072 0 0 1-1.858-.513v.052c0 2.025 1.44 3.714 3.353 4.098-.351.095-.721.147-1.103.147-.27 0-.533-.026-.79-.075.533 1.666 2.08 2.878 3.913 2.912A8.233 8.233 0 0 1 2 18.407 11.615 11.615 0 0 0 8.29 20z"/>
          </svg>
        </a>
        <a href="#" class="hover:text-slate-600" aria-label="LinkedIn">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M4.983 3.5C4.983 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.483 1.12 2.483 2.5zM.3 22h4.4V7.9H.3V22zM8.3 7.9H4.9V22h4.4v-7.4c0-3.95 5.1-4.27 5.1 0V22H19V13.5c0-6.73-7.4-6.48-8.3-3.17V7.9z"/>
          </svg>
        </a>
        <a href="#" class="hover:text-slate-600" aria-label="YouTube">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M23.5 6.2a3.01 3.01 0 0 0-2.12-2.13C19.3 3.5 12 3.5 12 3.5s-7.3 0-9.38.57A3.01 3.01 0 0 0 .5 6.2 31.5 31.5 0 0 0 0 12c0 1.98.2 3.93.5 5.8a3.01 3.01 0 0 0 2.12 2.13C4.7 20.5 12 20.5 12 20.5s7.3 0 9.38-.57a3.01 3.01 0 0 0 2.12-2.13c.3-1.87.5-3.82.5-5.8 0-1.98-.2-3.93-.5-5.8zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>
