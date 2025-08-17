{{-- resources/views/frontend/pricing.blade.php --}}
<x-landing-layout>
    <!-- Pricing Page -->
    <main class="relative min-h-screen bg-white">
        <section class="pt-28 pb-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 leading-tight">
                    Pricing that grows with you
                </h1>
                <p class="mt-5 text-base sm:text-lg text-gray-600 max-w-3xl mx-auto">
                    Simple plans for individuals, clubs, and organisations. Switch any time.
                </p>

                <!-- Billing Toggle -->
                <div class="mt-8 inline-flex items-center gap-3 rounded-full border border-gray-200 px-2 py-2">
                    <button id="btn-monthly"
                            class="billing-tab active px-4 py-2 text-sm font-semibold rounded-full transition"
                            data-mode="monthly" aria-pressed="true">
                        Monthly
                    </button>
                    <button id="btn-yearly"
                            class="billing-tab px-4 py-2 text-sm font-semibold rounded-full transition"
                            data-mode="yearly" aria-pressed="false">
                        Yearly <span class="ml-1 inline-block text-xs font-normal text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full">Save 15%</span>
                    </button>
                </div>
            </div>

            <!-- Plans -->
            <div class="max-w-7xl mx-auto mt-12 grid gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- Free -->
                <div class="rounded-2xl border border-gray-200 p-6 sm:p-8 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Free</h3>
                        <span class="text-xs font-medium text-gray-500">Get started</span>
                    </div>
                    <p class="mt-3 text-4xl font-extrabold text-gray-900">
                        £0
                        <span class="block text-xs font-medium text-gray-500">/month</span>
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-gray-700">
                        <li>✔ 1 organisation</li>
                        <li>✔ Up to 5 members</li>
                        <li>✔ Basic profile & contacts</li>
                        <li>✖ Events & projects</li>
                        <li>✖ Finance & billing</li>
                    </ul>
                    <a href="{{ route('register') }}"
                       class="mt-8 block text-center w-full rounded-lg bg-gray-900 text-white font-semibold py-2.5 hover:bg-gray-800">
                        Start free
                    </a>
                </div>

                <!-- Standard -->
                <div class="relative rounded-2xl border border-blue-600 p-6 sm:p-8 shadow-sm hover:shadow-md transition bg-blue-50/40">
                    <div class="absolute -top-3 right-6">
                        <span class="text-[11px] uppercase tracking-wider font-bold bg-blue-600 text-white px-2 py-1 rounded">Popular</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Standard</h3>
                        <span class="text-xs font-medium text-gray-500">For small teams</span>
                    </div>
                    <p class="mt-3 text-4xl font-extrabold text-gray-900">
                        <span class="price price-monthly">£9</span>
                        <span class="price price-yearly hidden">£7.65</span>
                        <span class="block text-xs font-medium text-gray-500">per org / month</span>
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-gray-700">
                        <li>✔ Up to 3 organisations</li>
                        <li>✔ 50 members / org</li>
                        <li>✔ Events & projects</li>
                        <li>✔ Roles & permissions</li>
                        <li>✔ Email notifications</li>
                    </ul>
                    <a href="{{ route('register') }}"
                       class="mt-8 block text-center w-full rounded-lg bg-blue-600 text-white font-semibold py-2.5 hover:bg-blue-500">
                        Choose Standard
                    </a>
                </div>

                <!-- Professional -->
                <div class="rounded-2xl border border-gray-200 p-6 sm:p-8 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Professional</h3>
                        <span class="text-xs font-medium text-gray-500">Growing orgs</span>
                    </div>
                    <p class="mt-3 text-4xl font-extrabold text-gray-900">
                        <span class="price price-monthly">£25</span>
                        <span class="price price-yearly hidden">£21.25</span>
                        <span class="block text-xs font-medium text-gray-500">per org / month</span>
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-gray-700">
                        <li>✔ Unlimited organisations</li>
                        <li>✔ Up to 500 members</li>
                        <li>✔ Finance & billing tools</li>
                        <li>✔ Advanced reports</li>
                        <li>✔ Priority support</li>
                    </ul>
                    <a href="{{ route('register') }}"
                       class="mt-8 block text-center w-full rounded-lg bg-gray-900 text-white font-semibold py-2.5 hover:bg-gray-800">
                        Choose Professional
                    </a>
                </div>

                <!-- Enterprise -->
                <div class="rounded-2xl border border-gray-200 p-6 sm:p-8 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Enterprise</h3>
                        <span class="text-xs font-medium text-gray-500">Large networks</span>
                    </div>
                    <p class="mt-3 text-4xl font-extrabold text-gray-900">
                        Custom
                        <span class="block text-xs font-medium text-gray-500">tailored pricing</span>
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-gray-700">
                        <li>✔ Unlimited members</li>
                        <li>✔ Dedicated success manager</li>
                        <li>✔ Custom integrations</li>
                        <li>✔ SLA & audit logs</li>
                        <li>✔ Onboarding & training</li>
                    </ul>
                    <a href="{{ url('/contact') }}"
                       class="mt-8 block text-center w-full rounded-lg bg-blue-600 text-white font-semibold py-2.5 hover:bg-blue-500">
                        Contact sales
                    </a>
                </div>
            </div>

            <!-- Mini note -->
            <p class="max-w-7xl mx-auto mt-4 text-xs text-gray-500 px-4">
                Prices shown in GBP. Taxes may apply. Yearly = 12 months billed with 15% discount.
            </p>

            <!-- Comparison -->
            <div class="max-w-7xl mx-auto mt-20">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center">Compare features</h2>
                <div class="mt-8 overflow-x-auto rounded-2xl border border-gray-200">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50 text-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">Feature</th>
                            <th class="px-4 py-3 text-center font-semibold">Free</th>
                            <th class="px-4 py-3 text-center font-semibold">Standard</th>
                            <th class="px-4 py-3 text-center font-semibold">Professional</th>
                            <th class="px-4 py-3 text-center font-semibold">Enterprise</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700">
                        <tr>
                            <td class="px-4 py-3">Max organisations</td>
                            <td class="px-4 py-3 text-center">1</td>
                            <td class="px-4 py-3 text-center">3</td>
                            <td class="px-4 py-3 text-center">Unlimited</td>
                            <td class="px-4 py-3 text-center">Unlimited</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Members limit</td>
                            <td class="px-4 py-3 text-center">5</td>
                            <td class="px-4 py-3 text-center">50</td>
                            <td class="px-4 py-3 text-center">500</td>
                            <td class="px-4 py-3 text-center">Unlimited</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Events & projects</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">✔</td>
                            <td class="px-4 py-3 text-center">✔</td>
                            <td class="px-4 py-3 text-center">✔</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Finance module</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">✔</td>
                            <td class="px-4 py-3 text-center">✔</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Reports & insights</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">Basic</td>
                            <td class="px-4 py-3 text-center">Advanced</td>
                            <td class="px-4 py-3 text-center">Advanced</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Support</td>
                            <td class="px-4 py-3 text-center">Community</td>
                            <td class="px-4 py-3 text-center">Standard</td>
                            <td class="px-4 py-3 text-center">Priority</td>
                            <td class="px-4 py-3 text-center">Dedicated</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Audit logs</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">—</td>
                            <td class="px-4 py-3 text-center">✔</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- CTA -->
            <div class="max-w-7xl mx-auto mt-16 text-center">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">Ready to begin?</h3>
                <p class="mt-2 text-gray-600">Join Azonation and manage your organisation with confidence.</p>
                <div class="mt-6 flex items-center justify-center gap-3">
                    <a href="{{ route('register') }}"
                       class="inline-flex items-center justify-center rounded-lg bg-blue-600 text-white font-semibold px-6 py-3 hover:bg-blue-500">
                        Create your account
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center justify-center rounded-lg border border-gray-300 text-gray-900 font-semibold px-6 py-3 hover:bg-gray-50">
                        Talk to sales
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Page script: simple billing toggle (no external deps) -->
    <script>
        (function () {
            const monthlyBtn = document.getElementById('btn-monthly');
            const yearlyBtn  = document.getElementById('btn-yearly');
            const setMode = (mode) => {
                const monthly = mode === 'monthly';
                document.querySelectorAll('.price-monthly').forEach(el => el.classList.toggle('hidden', !monthly));
                document.querySelectorAll('.price-yearly').forEach(el => el.classList.toggle('hidden', monthly));

                // Toggle aria + styles
                [monthlyBtn, yearlyBtn].forEach(b => {
                    const active = b.dataset.mode === mode;
                    b.setAttribute('aria-pressed', active ? 'true' : 'false');
                    b.classList.toggle('active', active);
                    b.classList.toggle('bg-gray-900', active);
                    b.classList.toggle('text-white', active);
                    b.classList.toggle('bg-transparent', !active);
                    b.classList.toggle('text-gray-800', !active);
                });
            };

            monthlyBtn?.addEventListener('click', () => setMode('monthly'));
            yearlyBtn?.addEventListener('click', () => setMode('yearly'));

            // Initialise
            setMode('monthly');
        })();
    </script>
</x-landing-layout>
