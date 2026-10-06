<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexteck — Business & AI Strategy Audits for SMEs | IT Roadmaps That Deliver</title>
    <meta name="description"
        content="Nexteck performs end-to-end business audits and builds costed IT & AI roadmaps for SME owners. 25+ years of enterprise IT strategy experience.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script type="application/ld+json">
{"@context":"https://schema.org","@type":"ProfessionalService","name":"Nexteck Consulting",
"description":"End-to-end business, IT strategy and AI readiness audits for SMEs.",
"founder":{"@type":"Person","name":"Mohammed Nasar","jobTitle":"Principal Consultant"},
"areaServed":"United Kingdom"}
</script>
    <style>
        :root {
            --ink: #0C1B33;
            --ink-2: #1E2D4A;
            --muted: #5A6478;
            --line: #E7E4DC;
            --paper: #FFFFFF;
            --cream: #F7F5F0;
            --gold: #B8933F;
            --gold-2: #D9BC7A;
            --red: #C0392B;
            --green: #1E7F4F;
            --shadow: 0 18px 50px -18px rgba(12, 27, 51, .22);
            --radius: 18px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            color: var(--ink);
            background: var(--paper);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden
        }

        h1,
        h2,
        h3,
        .serif {
            font-family: 'Fraunces', Georgia, serif;
            font-weight: 600;
            line-height: 1.12;
            letter-spacing: -.01em
        }

        img {
            max-width: 100%;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .wrap {
            width: min(1180px, 92%);
            margin: 0 auto
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--gold)
        }

        .eyebrow::before {
            content: "";
            width: 26px;
            height: 2px;
            background: var(--gold)
        }

        .sec {
            padding: 96px 0
        }

        .sec-head {
            max-width: 760px;
            margin: 0 auto 56px;
            text-align: center
        }

        .sec-head h2 {
            font-size: clamp(1.9rem, 3.6vw, 2.9rem);
            margin: .9rem 0 1rem
        }

        .sec-head p {
            color: var(--muted);
            font-size: 1.06rem
        }

        .grid {
            display: grid;
            gap: 24px
        }

        .g2 {
            grid-template-columns: repeat(2, 1fr)
        }

        .g3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .g4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            font-weight: 600;
            font-size: .95rem;
            padding: .95rem 1.7rem;
            border-radius: 999px;
            cursor: pointer;
            border: 1.5px solid transparent;
            transition: .25s
        }

        .btn-gold {
            background: var(--gold);
            color: #fff;
            box-shadow: 0 12px 28px -10px rgba(184, 147, 63, .55)
        }

        .btn-gold:hover {
            background: #000;
            transform: translateY(-2px)
        }

        .btn-ghost {
            border-color: var(--ink);
            color: var(--ink);
            background: transparent
        }

        .btn-ghost:hover {
            background: var(--ink);
            color: #fff
        }

        .btn-white {
            background: #fff;
            color: var(--ink)
        }

        .card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
            transition: .3s
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow)
        }

        .tag {
            display: inline-block;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .32rem .7rem;
            border-radius: 999px
        }

        /* ---------- announcement + nav ---------- */
        .topbar {
            background: var(--ink);
            color: #fff;
            font-size: .82rem;
            text-align: center;
            padding: .55rem 1rem;
            position: relative;
            z-index: 60
        }

        .topbar b {
            color: var(--gold-2)
        }

        .topbar .cd {
            font-variant-numeric: tabular-nums;
            font-weight: 700;
            color: var(--gold-2)
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--line)
        }

        .nav-in {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 74px
        }

        .logo {
            font-family: 'Fraunces', serif;
            font-size: 1.55rem;
            font-weight: 700;
            letter-spacing: -.02em
        }

        .logo span {
            color: var(--gold)
        }

        .logo small {
            display: block;
            font-family: 'Inter';
            font-size: .58rem;
            letter-spacing: .34em;
            color: var(--muted);
            font-weight: 600;
            margin-top: -4px
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
            font-size: .92rem;
            font-weight: 500
        }

        .nav-links a {
            color: var(--ink-2);
            position: relative;
        }

        .nav-links a:hover {
            color: var(--gold)
        }

        .nav-cta {
            padding: .68rem 1.35rem
        }

        .burger {
            display: none;
            background: none;
            border: 0;
            font-size: 1.5rem;
            cursor: pointer
        }

        /* ---------- hero ---------- */
        .hero {
            position: relative;
            min-height: 92vh;
            display: flex;
            align-items: center;
            color: #fff;
            overflow: hidden;
            background: var(--ink)
        }

        .hero-media,
        .hero-media video,
        .hero-media .kb {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .hero-media .kb {
            background: url("assets/img/hero-poster.jpg") center/cover;
            animation: kb 26s ease-in-out infinite alternate
        }

        @keyframes kb {
            from {
                transform: scale(1) translateY(0)
            }

            to {
                transform: scale(1.12) translateY(-2%)
            }
        }

        .hero-media video {
            opacity: 0;
            transition: opacity 1.2s
        }

        .hero-media video.on {
            opacity: 1
        }

        .hero-media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg, rgba(8, 17, 34, .93) 0%, rgba(8, 17, 34, .72) 45%, rgba(8, 17, 34, .35) 100%)
        }

        .hero-in {
            position: relative;
            z-index: 2;
            padding: 120px 0 90px
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: rgba(192, 57, 43, .16);
            border: 1px solid rgba(255, 120, 105, .5);
            color: #FFD9D3;
            font-size: .78rem;
            font-weight: 600;
            padding: .45rem 1rem;
            border-radius: 999px;
            margin-bottom: 1.6rem
        }

        .pulse {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #FF6B5B;
            animation: pl 1.6s infinite
        }

        @keyframes pl {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(255, 107, 91, .7)
            }

            55% {
                box-shadow: 0 0 0 9px rgba(255, 107, 91, 0)
            }
        }

        .hero h1 {
            font-size: clamp(2.4rem, 5.4vw, 4.3rem);
            max-width: 16ch;
            margin-bottom: 1.4rem
        }

        .hero h1 em {
            font-style: italic;
            color: var(--gold-2)
        }

        .hero p.lead {
            max-width: 56ch;
            font-size: 1.12rem;
            color: #D9DEE8;
            margin-bottom: 2.2rem
        }

        .hero-ctas {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 3rem
        }

        .hero-chips {
            display: flex;
            gap: 1.6rem;
            flex-wrap: wrap;
            font-size: .85rem;
            color: #C6CDDA
        }

        .hero-chips span {
            display: flex;
            align-items: center;
            gap: .5rem
        }

        .hero-chips svg {
            color: var(--gold-2);
            flex: none
        }

        .hero-scroll {
            position: absolute;
            bottom: 26px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            font-size: .72rem;
            letter-spacing: .3em;
            text-transform: uppercase;
            color: #B8C0CF;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .5rem
        }

        .hero-scroll::after {
            content: "";
            width: 1px;
            height: 38px;
            background: linear-gradient(#B8C0CF, transparent);
            animation: drop 1.8s infinite
        }

        @keyframes drop {
            from {
                transform: scaleY(0);
                transform-origin: top
            }

            to {
                transform: scaleY(1);
                transform-origin: top
            }
        }

        /* ---------- stats ---------- */
        .stats {
            background: var(--cream);
            border-block: 1px solid var(--line)
        }

        .stats .grid {
            gap: 0
        }

        .stat {
            padding: 44px 28px;
            text-align: center;
            border-left: 1px solid var(--line)
        }

        .stat:first-child {
            border-left: 0
        }

        .stat b {
            font-family: 'Fraunces', serif;
            font-size: clamp(2rem, 3.4vw, 2.9rem);
            color: var(--ink);
            display: block
        }

        .stat b i {
            color: var(--gold);
            font-style: normal
        }

        .stat span {
            font-size: .85rem;
            color: var(--muted)
        }

        /* ---------- pain points ---------- */
        .pain-card {
            padding: 30px 26px;
            display: flex;
            flex-direction: column;
            gap: .7rem
        }

        .pain-card .num {
            font-family: 'Fraunces', serif;
            font-size: .95rem;
            color: var(--gold);
            font-weight: 700
        }

        .pain-card h3 {
            font-size: 1.08rem;
            font-family: 'Inter';
            font-weight: 700;
            letter-spacing: -.01em
        }

        .pain-card p {
            font-size: .9rem;
            color: var(--muted)
        }

        .pain-card.hot {
            border-color: #F0C6BF;
            background: linear-gradient(180deg, #FFF7F5, #fff)
        }

        .pain-card .tag {
            align-self: flex-start;
            background: #FBE9E5;
            color: var(--red)
        }

        .pain-card .tag.calm {
            background: #EEF3EE;
            color: var(--green)
        }

        /* ---------- methodology ---------- */
        .method {
            background: var(--ink);
            color: #fff;
            position: relative;
            overflow: hidden
        }

        .method::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("assets/img/analytics.jpg") center/cover;
            opacity: .14
        }

        .method .wrap {
            position: relative
        }

        .method .sec-head p {
            color: #B9C2D2
        }

        .stage {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: var(--radius);
            padding: 32px 28px;
            backdrop-filter: blur(6px)
        }

        .stage .n {
            font-family: 'Fraunces', serif;
            font-size: 2.6rem;
            color: var(--gold-2);
            line-height: 1
        }

        .stage h3 {
            font-size: 1.25rem
        }

        .stage p {
            font-size: .92rem;
            color: #C2CAD8
        }

        .stage .feed {
            font-size: .76rem;
            color: #8E99AD;
            margin-top: auto;
            border-top: 1px dashed rgba(255, 255, 255, .18);
            padding-top: .9rem
        }

        .stage .feed b {
            color: var(--gold-2);
            font-weight: 600
        }

        /* ---------- opportunity table ---------- */
        .opp {
            background: var(--cream)
        }

        .table-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow)
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .88rem
        }

        th {
            background: var(--ink);
            color: #fff;
            text-align: left;
            padding: .95rem 1.1rem;
            font-size: .72rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            font-weight: 600
        }

        td {
            padding: .95rem 1.1rem;
            border-bottom: 1px solid var(--line);
            vertical-align: top
        }

        tr:last-child td {
            border-bottom: 0
        }

        tbody tr:hover {
            background: #FBFAF7
        }

        .score {
            display: inline-block;
            min-width: 34px;
            text-align: center;
            font-weight: 700;
            border-radius: 8px;
            padding: .15rem .4rem
        }

        .s-hi {
            background: #FBE9E5;
            color: var(--red)
        }

        .s-md {
            background: #FBF3E0;
            color: #9A6B12
        }

        .s-lo {
            background: #EAF3ED;
            color: var(--green)
        }

        .pill {
            display: inline-block;
            font-size: .7rem;
            font-weight: 700;
            padding: .2rem .65rem;
            border-radius: 999px;
            background: #EEF1F6;
            color: var(--ink-2)
        }

        /* ---------- about ---------- */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 64px;
            align-items: center
        }

        .portrait {
            position: relative
        }

        .portrait img {
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            width: 100%
        }

        .portrait::after {
            content: "";
            position: absolute;
            inset: -18px auto auto -18px;
            width: 64%;
            height: 64%;
            border: 2px solid var(--gold-2);
            border-radius: var(--radius);
            z-index: -1
        }

        .exp-badge {
            position: absolute;
            bottom: -22px;
            right: -14px;
            background: var(--ink);
            color: #fff;
            border-radius: var(--radius);
            padding: 1.1rem 1.4rem;
            text-align: center;
            box-shadow: var(--shadow)
        }

        .exp-badge b {
            font-family: 'Fraunces', serif;
            font-size: 1.9rem;
            color: var(--gold-2);
            display: block;
            line-height: 1
        }

        .exp-badge span {
            font-size: .7rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #B9C2D2
        }

        .about-copy h2 {
            font-size: clamp(1.9rem, 3.4vw, 2.7rem);
            margin: .9rem 0 1.2rem
        }

        .about-copy p {
            color: var(--muted);
            margin-bottom: 1rem
        }

        .quote {
            border-left: 3px solid var(--gold);
            padding: .4rem 0 .4rem 1.2rem;
            font-family: 'Fraunces', serif;
            font-style: italic;
            font-size: 1.2rem;
            color: var(--ink);
            margin: 1.6rem 0
        }

        .creds {
            display: flex;
            flex-wrap: wrap;
            gap: .6rem;
            margin-top: 1.4rem
        }

        .creds span {
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: .42rem 1rem;
            font-size: .82rem;
            font-weight: 600;
            color: var(--ink-2)
        }

        /* ---------- industries ---------- */
        .ind-card {
            overflow: hidden;
        }

        .ind-card img {
            width: 100%;
            height: 220px;
            display: block;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 768px) {
            .ind-card img {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .ind-card img {
                height: 180px;
            }
        }

        .ind-card {
            position: relative;
            height: 340px;
            border-radius: var(--radius);
            overflow: hidden
        }

        .ind-card img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .8s
        }

        .ind-card:hover img {
            transform: scale(1.07)
        }

        .ind-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(8, 17, 34, 0) 30%, rgba(8, 17, 34, .88))
        }

        .ind-meta {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 22px;
            color: #fff;
            z-index: 2
        }

        .ind-meta h3 {
            font-size: 1.15rem;
            margin-bottom: .3rem
        }

        .ind-meta p {
            font-size: .82rem;
            color: #C9D1DE
        }

        .ind-meta .tag {
            background: rgba(217, 188, 122, .2);
            color: var(--gold-2);
            margin-bottom: .6rem
        }

        /* ---------- risk reversal / why ---------- */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
        }

        .why-card {
            padding: 34px 28px;
            text-align: left
        }

        .why-card .ic {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #F5EFE0;
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.1rem
        }

        .why-card h3 {
            font-size: 1.1rem;
            margin-bottom: .5rem
        }

        .why-card p {
            font-size: .9rem;
            color: var(--muted)
        }

        /* ---------- urgency ---------- */
        .urgency {
            background: linear-gradient(120deg, #14100A, #2A1E0C 55%, #14100A);
            color: #fff;
            position: relative;
            overflow: hidden
        }

        .urgency::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("assets/img/team-meeting.jpg") center/cover;
            opacity: .1
        }

        .urgency .wrap {
            position: relative;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 56px;
            align-items: center
        }

        .urgency h2 {
            font-size: clamp(1.9rem, 3.4vw, 2.7rem);
            margin: .9rem 0 1.1rem
        }

        .urgency h2 em {
            color: var(--gold-2);
            font-style: italic
        }

        .urgency p {
            color: #CBBFA8;
            margin-bottom: 1.6rem
        }

        .cost-list {
            display: grid;
            gap: .8rem;
            margin-bottom: 2rem
        }

        .cost-list div {
            display: flex;
            gap: .8rem;
            align-items: flex-start;
            font-size: .95rem;
            color: #E8E0CE
        }

        .cost-list b {
            color: #FF9A8A
        }

        .timer-card {
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(217, 188, 122, .35);
            border-radius: var(--radius);
            padding: 36px;
            text-align: center;
            backdrop-filter: blur(6px)
        }

        .timer-card h3 {
            font-size: 1rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--gold-2);
            margin-bottom: 1.4rem
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 12px
        }

        .timer div {
            background: #0C1B33;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 14px;
            padding: 14px 8px;
            min-width: 74px
        }

        .timer b {
            font-family: 'Fraunces', serif;
            font-size: 2rem;
            display: block;
            line-height: 1;
            font-variant-numeric: tabular-nums
        }

        .timer span {
            font-size: .62rem;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: #9AA5B8
        }

        .slots {
            margin-top: 1.6rem;
            font-size: .9rem;
            color: #CBBFA8
        }

        .slots .bar {
            height: 8px;
            background: rgba(255, 255, 255, .12);
            border-radius: 99px;
            margin: .6rem auto .4rem;
            max-width: 280px;
            overflow: hidden
        }

        .slots .bar i {
            display: block;
            height: 100%;
            width: 17%;
            background: linear-gradient(90deg, var(--gold-2), #F0D9A0);
            border-radius: 99px
        }

        .slots b {
            color: var(--gold-2)
        }

        /* ---------- final CTA ---------- */
        .final {
            position: relative;
            color: #fff;
            overflow: hidden
        }

        .final img.bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .final::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(100deg, rgba(8, 17, 34, .95), rgba(8, 17, 34, .65))
        }

        .final .wrap {
            position: relative;
            z-index: 2;
            padding: 110px 0;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 56px;
            align-items: center
        }

        .final h2 {
            font-size: clamp(2rem, 4vw, 3.1rem);
            margin-bottom: 1.1rem
        }

        .final h2 em {
            color: var(--gold-2);
            font-style: italic
        }

        .final p {
            color: #C9D1DE;
            margin-bottom: 2rem;
            max-width: 52ch
        }

        /* ---------- footer ---------- */
        footer {
            background: var(--ink);
            color: #9AA5B8;
            font-size: .88rem;
            padding: 64px 0 0
        }

        .foot-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.3fr;
            gap: 40px;
            padding-bottom: 48px
        }

        footer h4 {
            color: #fff;
            font-size: .85rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 1.1rem
        }

        footer a:hover {
            color: var(--gold-2)
        }

        .foot-links {
            display: grid;
            gap: .6rem
        }

        .foot-bottom {
            border-top: 1px solid rgba(255, 255, 255, .1);
            padding: 1.3rem 0;
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            font-size: .78rem
        }

        /* ---------- sticky mobile cta ---------- */
        .sticky-cta {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 70;
            display: none;
            background: rgba(12, 27, 51, .97);
            backdrop-filter: blur(8px);
            padding: .7rem 1rem;
            gap: .8rem;
            align-items: center;
            justify-content: space-between
        }

        .sticky-cta span {
            color: #fff;
            font-size: .8rem
        }

        .sticky-cta .btn {
            padding: .6rem 1.2rem;
            font-size: .85rem
        }

        /* reveal */
        .rv {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity .8s ease, transform .8s ease
        }

        .rv.in {
            opacity: 1;
            transform: none
        }

        @media(max-width:960px) {
            .g4 {
                grid-template-columns: repeat(2, 1fr)
            }

            .g3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .about-grid,
            .urgency .wrap,
            .final .wrap {
                grid-template-columns: 1fr
            }

            .why-grid {
                grid-template-columns: 1fr 1fr
            }

            .nav-links {
                display: none
            }

            .burger {
                display: block
            }

            .foot-grid {
                grid-template-columns: 1fr 1fr
            }

            .sticky-cta {
                display: flex
            }

            .stat {
                border-left: 0;
                border-top: 1px solid var(--line)
            }
        }

        @media(max-width:640px) {

            .g2,
            .g3,
            .g4,
            .why-grid {
                grid-template-columns: 1fr
            }

            .sec {
                padding: 64px 0
            }

            .hero-in {
                padding: 100px 0 80px
            }

            th:nth-child(4),
            td:nth-child(4),
            th:nth-child(6),
            td:nth-child(6) {
                display: none
            }
        }
    </style>
</head>

<body>
    <div class="topbar">Q4 2026 — <b>only 4 audit slots left this quarter.</b> Every week you wait, manual work costs
        you roughly 10+ owner-hours. &nbsp;<span class="cd">Ends in <span id="cd-d">--</span>d <span
                id="cd-h">--</span>h <span id="cd-m">--</span>m <span id="cd-s">--</span>s</span></div>

    <nav>
        <div class="wrap nav-in">
            <a class="logo" href="{{ route('home') }}">Nexte<span>c</span>k<small>STRATEGY &amp; TECHNOLOGY</small></a>
            <div class="nav-links">
                <a href="#audit">The Audit</a>
                <a href="#method">Methodology</a>
                <a href="#nasar">About Nasar</a>
                <a href="#industries">Industries</a>
                <a href="#urgency">Why Now</a>
                <a class="btn btn-gold nav-cta" href="{{ route('landing') }}#book">Book Strategy Call</a>
            </div>
            <button class="burger"
                onclick="document.querySelector('.nav-links').style.display=document.querySelector('.nav-links').style.display==='flex'?'none':'flex';document.querySelector('.nav-links').style.position='absolute';document.querySelector('.nav-links').style.top='74px';document.querySelector('.nav-links').style.left='0';document.querySelector('.nav-links').style.right='0';document.querySelector('.nav-links').style.background='#fff';document.querySelector('.nav-links').style.flexDirection='column';document.querySelector('.nav-links').style.padding='1.2rem';document.querySelector('.nav-links').style.borderBottom='1px solid var(--line)';">☰</button>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-media">
            <div class="kb"></div>

            <video id="heroVideo" autoplay muted loop playsinline preload="auto" poster="assets/img/hero-poster.jpg">
                <source src="https://videos.pexels.com/video-files/3209828/3209828-uhd_2560_1440_25fps.mp4"
                    type="video/mp4">
                <source src="https://videos.pexels.com/video-files/3209828/3209828-hd_1920_1080_25fps.mp4"
                    type="video/mp4">
                <source src="https://videos.pexels.com/video-files/7255750/7255750-hd_1920_1080_25fps.mp4"
                    type="video/mp4">
            </video>

        </div>
        <div class="wrap hero-in">
            <div class="hero-badge"><span class="pulse"></span> Now accepting Q4 2026 engagements — 4 of 6 slots
                remaining</div>
            <h1>Everyone's talking about <em>AI</em>. But is your business actually running on the <em>right
                    technology?</em></h1>
            <p class="lead">Nexteck performs a rigorous, end-to-end business audit — processes, systems, data and people
                — then hands you a costed, prioritised IT &amp; AI roadmap built to hit your business targets. No hype.
                No vendor fluff. Just what works.</p>
            <div class="hero-ctas">
                <a class="btn btn-gold" href="{{ route('landing') }}#book">Book Your Free Strategy Call →</a>
                <a class="btn btn-ghost" style="border-color:rgba(255,255,255,.5);color:#fff" href="#audit">See How the
                    Audit Works</a>
            </div>
            <div class="hero-chips">
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.4">
                        <path d="M20 6L9 17l-5-5" />
                    </svg>25+ years IT strategy experience</span>
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.4">
                        <path d="M20 6L9 17l-5-5" />
                    </svg>Banking · Insurance · Manufacturing · Education · E-commerce</span>
                <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.4">
                        <path d="M20 6L9 17l-5-5" />
                    </svg>Nexteck SME Strategy Toolkit™</span>
            </div>
        </div>
        <div class="hero-scroll">Scroll</div>
    </header>

    <section class="stats">
        <div class="wrap grid g4">
            <div class="stat rv"><b><span data-count="25">0</span><i>+</i></b><span>Years defining IT strategy &amp;
                    roadmaps</span></div>
            <div class="stat rv"><b><span data-count="5">0</span></b><span>Industries — banking to e-commerce</span>
            </div>
            <div class="stat rv"><b><span data-count="40">0</span><i>+</i></b><span>Transformation programmes
                    delivered</span></div>
            <div class="stat rv"><b><span data-count="60">0</span><i>%</i></b><span>Avg. admin hours cut in first 90
                    days</span></div>
        </div>
    </section>

    <section class="sec" id="audit">
        <div class="wrap">
            <div class="sec-head rv">
                <span class="eyebrow">The uncomfortable question</span>
                <h2>Which of these is quietly costing you growth?</h2>
                <p>These are the eight pain points that show up in almost every SME we audit. On our first call we score
                    each one for severity — anything rated 4–5 becomes a line item in your action plan. Be honest with
                    yourself:</p>
            </div>
            <div class="grid g4">
                <div class="card pain-card hot rv"><span class="tag">Most common</span><span class="num">01</span>
                    <h3>Manual processes eating your week</h3>
                    <p>Data entry, invoicing, scheduling — the same steps done by hand, every single week, by people who
                        should be doing higher-value work.</p>
                </div>
                <div class="card pain-card hot rv"><span class="tag">Most common</span><span class="num">02</span>
                    <h3>Disconnected systems &amp; data</h3>
                    <p>The same customer re-typed into four tools. No single source of truth. Reports built by hand from
                        exports at 9pm.</p>
                </div>
                <div class="card pain-card rv"><span class="tag calm">Growth blocker</span><span class="num">03</span>
                    <h3>Operations that won't scale</h3>
                    <p>Quality drops or you become the bottleneck the moment volume doubles. Hiring more people doesn't
                        fix it.</p>
                </div>
                <div class="card pain-card rv"><span class="tag calm">Time drain</span><span class="num">04</span>
                    <h3>Repetitive admin work</h3>
                    <p>Invoices, follow-ups, scheduling — none of it needs your judgement, all of it lands on your desk.
                    </p>
                </div>
                <div class="card pain-card hot rv"><span class="tag">Right now</span><span class="num">05</span>
                    <h3>AI uncertainty</h3>
                    <p>You've heard AI could help but can't tell what's genuine value for your business versus hype with
                        no return.</p>
                </div>
                <div class="card pain-card rv"><span class="num">06</span>
                    <h3>Outdated technology</h3>
                    <p>Legacy software, security risk, and staff quietly building workarounds instead of using the tool
                        properly.</p>
                </div>
                <div class="card pain-card rv"><span class="num">07</span>
                    <h3>Systems that don't talk</h3>
                    <p>Manual exports between tools, duplicate records, errors from keying the same data twice. Sound
                        familiar?</p>
                </div>
                <div class="card pain-card rv"><span class="num">08</span>
                    <h3>Software that can't deliver your idea</h3>
                    <p>Your business model doesn't fit any off-the-shelf tool — growth is capped by what the tools
                        allow.</p>
                </div>
            </div>
            <div class="sec-head rv" style="margin:56px auto 0">
                <p><b>If two or more of these felt familiar, the audit will pay for itself.</b></p>
                <a class="btn btn-gold" href="{{ route('landing') }}#book" style="margin-top:1.2rem">Get Your Business Audited
                    →</a>
            </div>
        </div>
    </section>

    <section class="sec method" id="method">
        <div class="wrap">
            <div class="sec-head rv">
                <span class="eyebrow">The Nexteck Method</span>
                <h2 style="color:#fff">One engagement. Four stages. Zero guesswork.</h2>
                <p>Every engagement runs through the Nexteck SME Strategy &amp; Tracking Toolkit™ — the same diagnostic
                    framework used to define IT strategy for banks, insurers, manufacturers, educators and e-commerce
                    platforms.</p>
            </div>
            <div class="grid g4">
                <div class="stage rv"><span class="n">01</span>
                    <h3>Industry Benchmarking</h3>
                    <p>We score your business against 3–5 recognised leaders in your sector across five lenses: customer
                        experience, technology, marketing, operations and talent — then stage the actions to close each
                        gap.</p>
                    <div class="feed">Toolkit: <b>Industry Benchmark</b> tab — gap scores, staged actions, owners,
                        dates.</div>
                </div>
                <div class="stage rv"><span class="n">02</span>
                    <h3>Competitor Analysis</h3>
                    <p>We map your direct competitors to separate category norms from genuine whitespace — so you
                        differentiate where it actually wins customers, not where everyone else already is.</p>
                    <div class="feed">Toolkit: <b>Competitor Tracker</b> — positioning, pricing, strengths, whitespace.
                    </div>
                </div>
                <div class="stage rv"><span class="n">03</span>
                    <h3>AI, IT &amp; Autonomy Planning</h3>
                    <p>Every owner-dependent process becomes a scored opportunity: impact × urgency, costed per month,
                        sequenced into a 90-day roadmap. You stop doing the work that shouldn't need you.</p>
                    <div class="feed">Toolkit: <b>AI &amp; IT Opportunity Log</b> + <b>SOP &amp; Delegation
                            Register</b>.</div>
                </div>
                <div class="stage rv"><span class="n">04</span>
                    <h3>KPI Governance</h3>
                    <p>Monthly targets vs. actuals across sales, marketing, finance, operations and customer service —
                        reviewed in under 60 minutes a week. Management by exception, not by stress.</p>
                    <div class="feed">Toolkit: <b>KPI Dashboard</b> — weekly review, red flags only.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec opp">
        <div class="wrap">
            <div class="sec-head rv">
                <span class="eyebrow">Sample output</span>
                <h2>This is what your roadmap looks like</h2>
                <p>A real excerpt from a client AI &amp; IT Opportunity Log. Every opportunity is scored <b>Impact ×
                        Urgency</b> and sorted — we tackle the 9–25 band first, so the highest-leverage fixes land in
                    the first 90 days.</p>
            </div>
            <div class="table-card rv">
                <table>
                    <thead>
                        <tr>
                            <th>Business process</th>
                            <th>Manual effort</th>
                            <th>Proposed AI / IT solution</th>
                            <th>Impact × Urgency</th>
                            <th>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Answering sales enquiries</b><br><span style="color:var(--muted);font-size:.8rem">8
                                    hrs/wk · owner heavily involved</span></td>
                            <td>8 hrs/wk</td>
                            <td>CRM + AI lead-qualification chatbot — owner only handles qualified, high-value leads
                            </td>
                            <td>5 × 4 = <span class="score s-hi">20</span></td>
                            <td><span class="pill">Tackle first</span></td>
                        </tr>
                        <tr>
                            <td><b>Re-keying data between booking &amp; accounting</b><br><span
                                    style="color:var(--muted);font-size:.8rem">5 hrs/wk · medium involvement</span></td>
                            <td>5 hrs/wk</td>
                            <td>Zapier/Make integration linking both systems — no one re-types orders into the ledger
                            </td>
                            <td>4 × 5 = <span class="score s-hi">20</span></td>
                            <td><span class="pill">Tackle first</span></td>
                        </tr>
                        <tr>
                            <td><b>Workflow no off-the-shelf tool supports</b><br><span
                                    style="color:var(--muted);font-size:.8rem">10 hrs/wk · owner bottleneck</span></td>
                            <td>10 hrs/wk</td>
                            <td>Custom-built module — owner stops managing it manually in spreadsheets</td>
                            <td>5 × 3 = <span class="score s-md">15</span></td>
                            <td><span class="pill">Quarter 2</span></td>
                        </tr>
                        <tr>
                            <td><b>Weekly invoicing &amp; payment chasing</b><br><span
                                    style="color:var(--muted);font-size:.8rem">4 hrs/wk · bookkeeper</span></td>
                            <td>4 hrs/wk</td>
                            <td>Automated invoicing + reminder sequences, human-approved before sending</td>
                            <td>4 × 3 = <span class="score s-md">12</span></td>
                            <td><span class="pill">Quarter 2</span></td>
                        </tr>
                        <tr>
                            <td><b>Monthly KPI reporting</b><br><span style="color:var(--muted);font-size:.8rem">6
                                    hrs/mo · owner compiles by hand</span></td>
                            <td>6 hrs/mo</td>
                            <td>Live dashboard fed automatically from CRM &amp; finance — reviewed in 60 min/week</td>
                            <td>3 × 2 = <span class="score s-lo">6</span></td>
                            <td><span class="pill">Quarter 3</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="rv" style="text-align:center;color:var(--muted);margin-top:1.6rem;font-size:.92rem">Plus: an SOP
                &amp; Delegation Register, a KPI Dashboard, and a Tool Stack recommendation at Starter / Growth /
                Established tiers — all yours to keep.</p>
        </div>
    </section>

    <section class="sec" id="nasar">
        <div class="wrap about-grid">
            <div class="portrait rv">
                <img src=".\images\nasar1.jpeg" alt="Mohammed Nasar — Principal Consultant, Nexteck">
                <div class="exp-badge"><b>25</b><span>Years<br>Experience</span></div>
            </div>
            <div class="about-copy rv">
                <span class="eyebrow">Your strategist</span>
                <h2>Meet Mohammed Nasar</h2>
                <p>For 25 years, Mohammed has worked inside some of the world's most demanding organisations — top-tier
                    <b>banks, insurance firms, manufacturers, education institutions and e-commerce platforms</b> —
                    defining the IT strategy and roadmaps that hit real business targets, on budget, in defined process.
                </p>
                <p>Today he brings that enterprise discipline to business owners and founders through the Nexteck SME
                    Strategy Toolkit™ — so you get boardroom-grade strategy at SME-scale cost.</p>
                <div class="quote">"Technology should buy you time and growth — not eat both. My job is to find the
                    shortest, cheapest, safest route from where your business is to where you dream it to be."</div>
                <div class="creds">
                    <span>IT Strategy &amp; Roadmaps</span><span>AI Readiness Audits</span><span>Systems
                        Integration</span><span>Custom Development</span><span>Process Automation</span><span>KPI
                        Governance</span>
                </div>
            </div>
        </div>
    </section>

    <section class="sec" style="background:var(--cream);border-block:1px solid var(--line)" id="industries">
        <div class="wrap">
            <div class="sec-head rv">
                <span class="eyebrow">Sector depth</span>
                <h2>Five industries. One standard: results.</h2>
                <p>Enterprise-grade strategy isn't just for enterprises. Nexteck translates two and a half decades of
                    sector experience into practical, affordable moves for growing businesses.</p>
            </div>
            <div class="grid g3">
                <div class="card ind-card rv"><img src=".\images\A3.png" alt="Banking and fintech">
                    <div class="ind-meta"><span class="tag">Banking &amp; Fintech</span>
                        <h3>Secure, compliant, automated</h3>
                        <p>Customer onboarding, fraud-aware workflows, reporting automation.</p>
                    </div>
                </div>
                <div class="card ind-card rv"><img src=".\images\A4.png" alt="Insurance advisory">
                    <div class="ind-meta"><span class="tag">Insurance</span>
                        <h3>From paper to pipeline</h3>
                        <p>Claims triage, broker systems, document intelligence with AI.</p>
                    </div>
                </div>
                <div class="card ind-card rv"><img src=".\images\A5.png" alt="Manufacturing automation">
                    <div class="ind-meta"><span class="tag">Manufacturing</span>
                        <h3>Connected operations</h3>
                        <p>Production data, inventory sync, quality tracking on one dashboard.</p>
                    </div>
                </div>
                <div class="card ind-card rv"><img src=".\images\A6.png" alt="Education campus">
                    <div class="ind-meta"><span class="tag">Education</span>
                        <h3>Learning that scales</h3>
                        <p>Student journeys, admin automation, LMS and knowledge systems.</p>
                    </div>
                </div>
                <div class="card ind-card rv"><img src=".\images\A7.png" alt="E-commerce fulfilment">
                    <div class="ind-meta"><span class="tag">E-commerce</span>
                        <h3>Fulfilment without chaos</h3>
                        <p>Order-to-ledger automation, stock sync, customer service AI.</p>
                    </div>
                </div>
                <div class="card ind-card rv"><img src=".\images\A8.png" alt="Customer service team">
                    <div class="ind-meta"><span class="tag">Professional Services</span>
                        <h3>Clients served brilliantly</h3>
                        <p>Response-time SLAs, AI-drafted replies, escalation-only inboxes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec">
        <div class="wrap">
            <div class="sec-head rv">
                <span class="eyebrow">Risk reversal</span>
                <h2>Why owners trust Nexteck with the keys</h2>
                <p>You're handing someone your processes, your data and your plans. Here's exactly how we make that
                    safe.</p>
            </div>
            <div class="why-grid">
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M9 12l2 2 4-4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg></div>
                    <h3>You own everything</h3>
                    <p>The full toolkit, the roadmap, the dashboards and the documentation are yours to keep — no
                        lock-in, no licences held hostage, ever.</p>
                </div>
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="11" width="18" height="10" rx="2" />
                            <path d="M7 11V7a5 5 0 0110 0v4" />
                        </svg></div>
                    <h3>NDA before we talk numbers</h3>
                    <p>Everything you share on the discovery call is confidential, and we can sign your NDA or ours —
                        before any detail is exchanged.</p>
                </div>
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                        </svg></div>
                    <h3>Costed before you commit</h3>
                    <p>Every recommendation carries a monthly cost estimate and an impact score. You approve the spend;
                        nothing runs away.</p>
                </div>
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 20V10M18 20V4M6 20v-4" />
                        </svg></div>
                    <h3>Enterprise rigour, SME prices</h3>
                    <p>The same frameworks used for banks and insurers, right-sized for founder-led budgets — phased so
                        you never over-spend ahead of value.</p>
                </div>
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                        </svg></div>
                    <h3>Built for your team</h3>
                    <p>SOPs, delegation registers and training are part of the deliverable — so the system outlives any
                        single person, including us.</p>
                </div>
                <div class="card why-card rv">
                    <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg></div>
                    <h3>60-minute weekly reviews</h3>
                    <p>KPI governance by exception: you review red flags in under an hour a week — not buried in reports
                        nobody reads.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec urgency" id="urgency">
        <div class="wrap">
            <div class="rv">
                <span class="eyebrow">The cost of waiting</span>
                <h2>Every month you delay, <em>someone faster is taking your customers.</em></h2>
                <p>AI adoption among SMEs has crossed the early-adopter phase. The gap between businesses running
                    connected, automated operations and those running on spreadsheets compounds every quarter. Here's
                    what delay looks like in numbers:</p>
                <div class="cost-list">
                    <div><b>▸</b><span><b>10+ hours/week</b> of owner time still spent on admin that software should do
                            — roughly £500/week at founder rates.</span></div>
                    <div><b>▸</b><span><b>2× the errors</b> from re-keying data between disconnected systems — and every
                            error costs a customer conversation.</span></div>
                    <div><b>▸</b><span><b>Missed AI leverage</b> your competitors are compounding now — response speed,
                            lead qualification, service quality.</span></div>
                </div>
                <a class="btn btn-gold" href="{{ route('landing') }}#book">Claim a Q4 Audit Slot →</a>
            </div>
            <div class="timer-card rv">
                <h3>Q4 2026 slots close in</h3>
                <div class="timer">
                    <div><b id="cd2-d">--</b><span>Days</span></div>
                    <div><b id="cd2-h">--</b><span>Hours</span></div>
                    <div><b id="cd2-m">--</b><span>Min</span></div>
                    <div><b id="cd2-s">--</b><span>Sec</span></div>
                </div>
                <div class="slots">
                    <div class="bar"><i></i></div>
                    <b>4 of 6</b> audit slots remaining this quarter
                    <div style="margin-top:.8rem;font-size:.78rem">Nexteck takes a maximum of 6 engagements per quarter
                        to protect delivery quality.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="final">
        <img class="bg" src="assets/img/handshake-close.jpg" alt="Partnership handshake">
        <div class="wrap">
            <div class="rv">
                <span class="eyebrow">Your move</span>
                <h2>Let's find out — <em>in one call</em> — what's really holding your business back.</h2>
                <p>A free 45-minute strategy call. We run the diagnostic live, score your pain points, and tell you
                    honestly whether an audit makes sense — including if it doesn't. No pitch theatre, no obligation.
                </p>
                <div class="hero-ctas" style="margin-bottom:0">
                    <a class="btn btn-gold" href="{{ route('landing') }}#book">Book My Free Strategy Call →</a>
                    <a class="btn btn-white" href="#method">Review the Methodology</a>
                </div>
            </div>
            <div></div>
        </div>
    </section>

    <footer>
        <div class="wrap">
            <div class="foot-grid">
                <div>
                    <a class="logo" href="{{ route('home') }}" style="color:#fff">Nexte<span>c</span>k<small
                            style="color:#8E99AD">STRATEGY &amp; TECHNOLOGY</small></a>
                    <p style="margin-top:1rem;max-width:34ch">End-to-end business, IT strategy and AI readiness audits
                        for founders and business owners who want growth without chaos.</p>
                </div>
                <div>
                    <h4>Explore</h4>
                    <div class="foot-links">
                        <a href="#audit">The Audit</a><a href="#method">Methodology</a><a href="#nasar">About
                            Nasar</a><a href="#industries">Industries</a>
                    </div>
                </div>
                <div>
                    <h4>Toolkit</h4>
                    <div class="foot-links">
                        <a href="#method">Client Diagnostic</a><a href="#method">Industry Benchmark</a><a
                            href="#method">Competitor Tracker</a><a href="#method">AI Opportunity Log</a><a
                            href="#method">KPI Dashboard</a>
                    </div>
                </div>
                <div>
                    <h4>Start now</h4>
                    <div class="foot-links">
                        <a href="{{ route('landing') }}#book">Book a free strategy call</a>
                        <a href="mailto:hello@nexteck.co.uk">nasar@nexteck.co.uk</a>
                        <a href="#">+44 (0)78 7917 5585</a>
                    </div>
                </div>
            </div>
            <div class="foot-bottom">
                <span>© 2026 Nexteck Consulting Ltd. All rights reserved.</span>
                <span>Built on the Nexteck SME Strategy &amp; Tracking Toolkit™</span>
            </div>
        </div>
    </footer>
    <div class="sticky-cta"><span><b>4 slots left</b> — Q4 audit closes soon</span><a class="btn btn-gold"
            href="{{ route('landing') }}#book">Book Free Call</a></div>
    <script>
        // ---- countdown to end of Q4 2026 ----
        const target = new Date("2026-12-31T23:59:59+00:00").getTime();
        function tick() {
            let d = target - Date.now(); if (d < 0) d = 0;
            const dd = Math.floor(d / 864e5), hh = Math.floor(d / 36e5) % 24, mm = Math.floor(d / 6e4) % 60, ss = Math.floor(d / 1e3) % 60;
            const set = (id, v) => { const e = document.getElementById(id); if (e) e.textContent = String(v).padStart(2, "0"); };
            set("cd-d", dd); set("cd-h", hh); set("cd-m", mm); set("cd-s", ss);
            set("cd2-d", dd); set("cd2-h", hh); set("cd2-m", mm); set("cd2-s", ss);
        }
        tick(); setInterval(tick, 1000);

        // ---- hero video: fade in when playable, gracefully fall back to Ken Burns image ----
        const v = document.getElementById("heroVideo");
        if (v) {
            v.addEventListener("playing", () => v.classList.add("on"));
            v.addEventListener("error", () => v.remove(), true);
            const p = v.play ? v.play() : null;
            if (p && p.catch) p.catch(() => { });
        }

        // ---- reveal on scroll ----
        const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add("in"); io.unobserve(e.target); } }), { threshold: .12 });
        document.querySelectorAll(".rv").forEach(el => io.observe(el));

        // ---- animated counters ----
        const co = new IntersectionObserver(es => es.forEach(e => {
            if (!e.isIntersecting) return; co.unobserve(e.target);
            const el = e.target, end = +el.dataset.count, suf = el.dataset.suffix || "";
            const t0 = performance.now(), dur = 1600;
            (function step(t) {
                const p = Math.min((t - t0) / dur, 1), ease = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.round(end * ease) + suf; if (p < 1) requestAnimationFrame(step);
            })(t0);
        }), { threshold: .6 });
        document.querySelectorAll("[data-count]").forEach(el => co.observe(el));
    </script>
</body>

</html>