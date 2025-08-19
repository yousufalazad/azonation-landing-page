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
          Azonation helps organisations manage members, events, projects, assets, and finances — all in one secure
          platform.
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
          <li><a href="/contact" class="hover:text-slate-900">Contact us</a></li>
          <li><a href="/about" class="hover:text-slate-900">About us</a></li>
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
        <!-- X (formerly Twitter) -->
        <a href="https://x.com/AzonationWorld" class="hover:text-slate-600" aria-label="X (formerly Twitter)" target="_blank"
          rel="noopener">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <!-- Clean X mark -->
            <path d="M2 2h4.7l5.6 7.9L17.5 2H22l-7.9 10.6L22 22h-4.7l-6-8.4L6.5 22H2l8.1-10.6L2 2z" />
          </svg>
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/company/azonation" class="hover:text-slate-600" aria-label="LinkedIn">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path
              d="M4.983 3.5C4.983 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.483 1.12 2.483 2.5zM.3 22h4.4V7.9H.3V22zM8.3 7.9H4.9V22h4.4v-7.4c0-3.95 5.1-4.27 5.1 0V22H19V13.5c0-6.73-7.4-6.48-8.3-3.17V7.9z" />
          </svg>
        </a>

        <!-- YouTube -->
        <a href="#" class="hover:text-slate-600" aria-label="YouTube">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path
              d="M23.5 6.2a3.01 3.01 0 0 0-2.12-2.13C19.3 3.5 12 3.5 12 3.5s-7.3 0-9.38.57A3.01 3.01 0 0 0 .5 6.2 31.5 31.5 0 0 0 0 12c0 1.98.2 3.93.5 5.8a3.01 3.01 0 0 0 2.12 2.13C4.7 20.5 12 20.5 12 20.5s7.3 0 9.38-.57a3.01 3.01 0 0 0 2.12-2.13c.3-1.87.5-3.82.5-5.8 0-1.98-.2-3.93-.5-5.8zM9.75 15.02V8.98L15.5 12l-5.75 3.02z" />
          </svg>
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/azonationworld/" class="hover:text-slate-600" aria-label="Facebook" target="_blank"
          rel="noopener">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path
              d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.406.593 24 1.325 24h11.497v-9.294H9.846V11.41h2.976V8.797c0-2.94 1.792-4.544 4.41-4.544 1.255 0 2.337.093 2.652.135v3.08h-1.82c-1.43 0-1.706.68-1.706 1.677v2.266h3.41l-.444 3.294h-2.966V24h5.82C23.407 24 24 23.406 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
          </svg>
        </a>
      </div>

    </div>
  </div>
</footer>