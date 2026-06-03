<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $appName }} | Vercel Deploy Test</title>
        <style>
            :root {
                color-scheme: dark;
                --bg: #07111f;
                --bg-2: #0f1b31;
                --card: rgba(10, 18, 35, 0.78);
                --card-border: rgba(148, 163, 184, 0.18);
                --text: #f8fafc;
                --muted: #94a3b8;
                --accent: #22c55e;
                --accent-2: #38bdf8;
                --shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                min-height: 100vh;
                font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                color: var(--text);
                background:
                    radial-gradient(circle at top left, rgba(56, 189, 248, 0.24), transparent 26%),
                    radial-gradient(circle at 85% 12%, rgba(34, 197, 94, 0.18), transparent 22%),
                    linear-gradient(160deg, var(--bg), var(--bg-2) 62%, #020617);
                display: grid;
                place-items: center;
                padding: 24px;
            }

            .shell {
                width: min(100%, 960px);
                position: relative;
            }

            .glow {
                position: absolute;
                inset: auto auto -110px -80px;
                width: 260px;
                height: 260px;
                border-radius: 999px;
                background: rgba(56, 189, 248, 0.18);
                filter: blur(40px);
                pointer-events: none;
            }

            .card {
                position: relative;
                overflow: hidden;
                border: 1px solid var(--card-border);
                border-radius: 28px;
                background: var(--card);
                backdrop-filter: blur(18px);
                box-shadow: var(--shadow);
                padding: clamp(24px, 5vw, 56px);
            }

            .topline {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                align-items: center;
                margin-bottom: 28px;
            }

            .badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 10px 14px;
                border-radius: 999px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                background: rgba(15, 23, 42, 0.64);
                color: var(--muted);
                font-size: 14px;
                line-height: 1;
            }

            .dot {
                width: 10px;
                height: 10px;
                border-radius: 999px;
                background: var(--accent);
                box-shadow: 0 0 0 6px rgba(34, 197, 94, 0.15);
            }

            h1 {
                margin: 0;
                font-size: clamp(2.2rem, 6vw, 5rem);
                line-height: 0.95;
                letter-spacing: -0.06em;
                max-width: 11ch;
            }

            .lede {
                margin: 18px 0 0;
                max-width: 60ch;
                font-size: clamp(1rem, 2.2vw, 1.15rem);
                line-height: 1.7;
                color: var(--muted);
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 16px;
                margin-top: 32px;
            }

            .metric {
                padding: 18px;
                border-radius: 20px;
                background: rgba(15, 23, 42, 0.68);
                border: 1px solid rgba(148, 163, 184, 0.14);
            }

            .metric span {
                display: block;
                color: var(--muted);
                font-size: 13px;
                letter-spacing: 0.06em;
                text-transform: uppercase;
                margin-bottom: 10px;
            }

            .metric strong {
                display: block;
                font-size: 17px;
                font-weight: 650;
                line-height: 1.35;
                word-break: break-word;
            }

            .actions {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                margin-top: 32px;
            }

            .button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 48px;
                padding: 0 18px;
                border-radius: 14px;
                border: 1px solid transparent;
                font-weight: 600;
                text-decoration: none;
                transition: transform 160ms ease, border-color 160ms ease, background 160ms ease;
            }

            .button:hover {
                transform: translateY(-1px);
            }

            .button.primary {
                background: linear-gradient(135deg, var(--accent-2), var(--accent));
                color: #03111f;
            }

            .button.secondary {
                background: rgba(15, 23, 42, 0.7);
                color: var(--text);
                border-color: rgba(148, 163, 184, 0.18);
            }

            .footer {
                margin-top: 36px;
                color: var(--muted);
                font-size: 14px;
                display: flex;
                flex-wrap: wrap;
                gap: 12px 20px;
            }

            .footer code {
                font: inherit;
                color: var(--text);
            }

            @media (max-width: 820px) {
                .grid {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }

            @media (max-width: 560px) {
                body {
                    padding: 14px;
                }

                .card {
                    border-radius: 22px;
                    padding: 22px;
                }

                .grid {
                    grid-template-columns: 1fr;
                }

                h1 {
                    max-width: none;
                }
            }
        </style>
    </head>
    <body>
        <main class="shell">
            <div class="glow"></div>
            <section class="card">
                <div class="topline">
                    <div class="badge"><span class="dot"></span> Vercel deploy test</div>
                    <div class="badge">{{ $environment }}</div>
                    <div class="badge">{{ $host }}</div>
                </div>

                <h1>{{ $appName }} is live on Vercel</h1>
                <p class="lede">
                    Ini halaman test deploy untuk memastikan routing, rendering Blade, dan runtime PHP di Vercel berjalan benar.
                    Jika halaman ini muncul, deployment awal sudah sukses.
                </p>

                <div class="grid">
                    <div class="metric">
                        <span>Laravel</span>
                        <strong>{{ $laravelVersion }}</strong>
                    </div>
                    <div class="metric">
                        <span>PHP</span>
                        <strong>{{ $phpVersion }}</strong>
                    </div>
                    <div class="metric">
                        <span>Environment</span>
                        <strong>{{ $environment }}</strong>
                    </div>
                    <div class="metric">
                        <span>Host</span>
                        <strong>{{ $host }}</strong>
                    </div>
                </div>

                <div class="actions">
                    <a class="button primary" href="/healthz">Check health</a>
                    <a class="button secondary" href="https://vercel.com/docs" target="_blank" rel="noreferrer">Vercel docs</a>
                </div>

                <div class="footer">
                    <div>Root route: <code>/</code></div>
                    <div>Health route: <code>/healthz</code></div>
                </div>
            </section>
        </main>
    </body>
</html>