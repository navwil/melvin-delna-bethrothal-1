<?php
$finalDate = 'March 29, 2027 11:00:00';
if (isset($detail) && count($detail) > 0) {
    $finalDate = date_format(date_create($detail[0]->date), "F j, Y H:i:s");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ asset('/') }}">
    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Betrothal Invitation" />
    <meta name="keywords" content="betrothal invitation, engagement, digital invitation" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Betrothal Invitation" />
    <meta property="og:site_name" content="Betrothal Invitation" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    @foreach ($wedding as $item)
    <title>{{ $item->name }}</title>
    @endforeach

    <!-- CSS
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/undangan/css/vendor.css">
    <link rel="stylesheet" href="assets/undangan/css/styles.css">
    <link rel="stylesheet" href="assets/undangan/css/gallery-grid.css">

    <style>
        /* Modern Root Variable Color Overrides - Royal Sapphire & Midnight Theme */
        :root {
            --color-1: #1d68bd;
            --color-1-lighter: #60a5fa;
            --color-1-light: #3b82f6;
            --color-1-dark: #1e40af;
            --color-1-darker: #0f2e5a;
            --color-2: #0f2e5a;
            --color-3: #38bdf8;
            --color-bg: #f8faff;
            --color-body: #1e293b;
            --color-btn: #1d68bd;
            --color-btn-primary: #1d68bd;
            --color-btn-stroke: #1d68bd;
        }

        /* Universal Box-Sizing & Viewport Protection */
        *, *::before, *::after {
            box-sizing: border-box;
        }

        /* Smooth continuous scroll */
        html {
            scroll-behavior: smooth;
        }

        html, body {
            max-width: 100vw;
            overflow-x: hidden;
            width: 100%;
        }

        body {
            background-color: #08162b !important;
            color: #f1f5f9 !important;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
        }

        img, video, iframe {
            max-width: 100%;
            height: auto;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', Georgia, serif;
        }

        /* Custom Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #08162b;
        }
        ::-webkit-scrollbar-thumb {
            background: #1d68bd;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3b82f6;
        }

        /* ==================================================
           Hero / Intro Section Modern Styling
           ================================================== */
        .s-intro {
            position: relative;
            min-height: 100vh;
            min-height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
        }

        .s-intro__bg-single {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover !important;
            background-position: center center !important;
        }

        .s-intro__content {
            position: relative;
            z-index: 5;
            text-align: center;
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 6rem 2rem 4rem 2rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.6rem 2.4rem;
            background: rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 9999px;
            font-size: clamp(1.15rem, 3.2vw, 1.35rem);
            letter-spacing: clamp(0.12rem, 0.4vw, 0.25rem);
            text-transform: uppercase;
            color: #ffffff;
            margin-bottom: 2rem;
            font-weight: 600;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            max-width: 92vw;
        }

        .hero-couple-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(3rem, 9vw, 6.4rem);
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 1.5rem 0;
            text-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            letter-spacing: -0.01em;
            line-height: 1.15;
            word-break: break-word;
        }

        .hero-cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1.35rem 3.2rem;
            background: linear-gradient(135deg, #1d68bd 0%, #3b82f6 55%, #60a5fa 100%);
            color: #ffffff !important;
            border-radius: 9999px;
            font-size: clamp(1.45rem, 3.5vw, 1.6rem);
            font-weight: 600;
            letter-spacing: 0.02em;
            text-decoration: none !important;
            border: none;
            box-shadow: 0 12px 30px rgba(29, 104, 189, 0.5);
            transition: all 0.35s ease;
            cursor: pointer;
            max-width: 90vw;
        }

        .hero-cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 36px rgba(29, 104, 189, 0.65);
            background: linear-gradient(135deg, #17549c 0%, #2563eb 55%, #3b82f6 100%);
            color: #ffffff !important;
        }

        /* ==================================================
           Section Container & Continuous Scroll
           ================================================== */
        .s-details {
            background: #08162b;
            padding-top: 2rem;
        }

        .tab-content__item {
            opacity: 1 !important;
            visibility: visible !important;
            height: auto !important;
            position: relative !important;
            top: 0 !important;
            display: block !important;
            padding-top: 5rem;
            margin-bottom: 5rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.15);
            padding-bottom: 5rem;
        }

        #tab-wishes {
            border-bottom: none;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
        }

        /* Modern Floating Nav Bar */
        .tab-nav.scroll-nav {
            position: -webkit-sticky;
            position: sticky;
            top: 15px;
            z-index: 999;
            background: transparent;
            padding: 0.8rem 1rem;
            margin-bottom: 2.5rem;
            width: 100%;
        }

        .tab-nav__list {
            display: flex;
            justify-content: center;
            background: rgba(11, 27, 49, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1.5px solid rgba(59, 130, 246, 0.35);
            border-radius: 9999px;
            padding: 0.5rem;
            gap: 0.5rem;
            max-width: 660px;
            margin: 0 auto;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.4);
            list-style: none;
        }

        .tab-nav__list li {
            flex: 1;
            text-align: center;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }

        .tab-nav__list li a {
            display: block;
            padding: 1rem 1.6rem;
            font-size: 1.35rem;
            letter-spacing: 0.06rem;
            text-transform: uppercase;
            font-weight: 700;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 9999px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .tab-nav__list li:hover a {
            color: #ffffff;
            background: rgba(59, 130, 246, 0.2);
        }

        .tab-nav__list li.active,
        .tab-nav__list li[data-tab-active] {
            background: linear-gradient(135deg, #1d68bd 0%, #3b82f6 100%);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.45);
        }

        .tab-nav__list li.active a,
        .tab-nav__list li[data-tab-active] a {
            color: #ffffff !important;
            background: transparent !important;
        }

        /* Section Headers */
        #tab-couple, #tab-countdown, #tab-event, #tab-gallery, #tab-wishes {
            scroll-margin-top: 100px;
        }

        .tab-content__item-header h2 {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(2.4rem, 6vw, 3.8rem);
            text-transform: uppercase;
            letter-spacing: 0.12rem;
            position: relative;
            display: inline-block;
            padding-bottom: 1.2rem;
            color: #ffffff;
            font-weight: 700;
            text-shadow: 0 2px 14px rgba(0, 0, 0, 0.4);
        }

        .tab-content__item-header h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #1d68bd, #60a5fa);
            border-radius: 9999px;
        }

        /* Unified Container Box */
        .unified-content-box {
            background: rgba(13, 33, 61, 0.7);
            border: 1.5px solid rgba(59, 130, 246, 0.25);
            border-radius: 40px;
            padding: 4.5rem 3rem 4rem 3rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            margin: 2rem auto 3rem auto;
            max-width: 1080px;
            width: 100%;
        }

        /* ==================================================
           Bride & Groom Modern Cards
           ================================================== */
        .bride-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3.5rem;
            max-width: 1040px;
            margin: 0 auto;
            width: 100%;
        }

        .bride-grid__item {
            flex: 1 1 360px;
            max-width: 440px;
            display: flex;
            justify-content: center;
            min-width: 0;
            width: 100%;
        }

        .bride-card {
            position: relative;
            background: radial-gradient(ellipse at 50% 0%, #152d50 0%, #0d203a 65%, #08162b 100%);
            border-radius: 36px;
            border: 1.5px solid rgba(96, 165, 250, 0.25);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.4), inset 0 1px 1px rgba(255, 255, 255, 0.08);
            padding: 4.2rem 3rem 3.6rem 3rem;
            text-align: center;
            max-width: 440px;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .bride-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 26px 60px rgba(59, 130, 246, 0.28), 0 8px 24px rgba(0, 0, 0, 0.4);
            border-color: rgba(147, 197, 253, 0.5);
        }

        /* Card Sheen Reflection */
        .bride-card::before, .event-sample-card::before {
            content: "";
            position: absolute;
            top: -42%;
            left: -30%;
            width: 160%;
            height: 90%;
            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.16) 0%,
                rgba(255, 255, 255, 0.04) 45%,
                rgba(255, 255, 255, 0) 72%
            );
            transform: rotate(-14deg);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
        }

        .bride-card::after, .event-sample-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 10%;
            right: 10%;
            height: 2px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 100%);
            pointer-events: none;
            z-index: 2;
        }

        .bride-card-content, .event-card-body {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .bride-role-badge {
            display: inline-block;
            background: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
            border: 1px solid rgba(147, 197, 253, 0.35);
            border-radius: 9999px;
            padding: 0.4rem 1.6rem;
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: 0.15rem;
            text-transform: uppercase;
            margin-bottom: 1.2rem;
        }

        .bride-card-name {
            font-family: 'Playfair Display', Georgia, serif;
            color: #ffffff !important;
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        .bride-card-img-wrap {
            margin-bottom: 2rem;
            display: inline-block;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 14px 32px rgba(0, 0, 0, 0.35);
            border: 2px solid rgba(96, 165, 250, 0.25);
            width: 100%;
            max-width: 350px;
        }

        .bride-card-img {
            width: 100%;
            max-width: 100%;
            height: 440px;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }

        .bride-card:hover .bride-card-img {
            transform: scale(1.03);
        }

        .bride-card-relation {
            color: #f8fafc !important;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.6rem;
            letter-spacing: 0.01em;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);
        }

        .bride-card-address {
            color: #93c5fd !important;
            font-size: 1.6rem;
            margin-top: 0.4rem;
            line-height: 1.5;
            font-weight: 500;
        }

        /* ==================================================
           Dedicated Countdown / Save The Date Luxury Styling
           ================================================== */
        .countdown-luxury-container {
            position: relative;
            background: radial-gradient(ellipse at 50% 28%, #132a4a 0%, #0c1d35 55%, #061122 100%);
            border-radius: 40px;
            border: 1px solid rgba(59, 130, 246, 0.25);
            box-shadow: 0 24px 60px rgba(6, 17, 34, 0.5), inset 0 1px 1px rgba(255, 255, 255, 0.08);
            padding: 6.5rem 3rem 5.5rem 3rem;
            text-align: center;
            max-width: 900px;
            width: 100%;
            margin: 2rem auto 3rem auto;
            overflow: hidden;
        }

        .countdown-luxury-container::before {
            content: "";
            position: absolute;
            top: -42%;
            left: -30%;
            width: 160%;
            height: 90%;
            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.08) 0%,
                rgba(255, 255, 255, 0.02) 45%,
                rgba(255, 255, 255, 0) 72%
            );
            transform: rotate(-14deg);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
        }

        .countdown-luxury-inner {
            position: relative;
            z-index: 3;
        }

        .countdown-luxury-sub {
            color: #dfba63;
            font-size: clamp(1.15rem, 3.2vw, 1.35rem);
            font-weight: 700;
            letter-spacing: clamp(0.18em, 0.5vw, 0.28em);
            text-transform: uppercase;
            margin-bottom: 2rem;
            display: inline-block;
        }

        .countdown-luxury-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(2.4rem, 6.5vw, 4.4rem);
            font-weight: 700;
            color: #ffffff;
            line-height: 1.25;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin: 0 auto 3.5rem auto;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            max-width: 600px;
        }

        .countdown-luxury-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.8rem;
            max-width: 520px;
            width: 100%;
            margin: 0 auto;
        }

        .countdown-luxury-row {
            display: flex;
            justify-content: center;
            gap: 1.8rem;
            width: 100%;
        }

        .countdown-luxury-box {
            flex: 1 1 0px;
            max-width: 145px;
            aspect-ratio: 1 / 1.05;
            min-height: 125px;
            background: linear-gradient(180deg, rgba(32, 65, 115, 0.55) 0%, rgba(14, 30, 56, 0.75) 100%);
            border: 1.5px solid rgba(223, 186, 99, 0.75);
            border-radius: 22px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem 0.8rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35), inset 0 1px 1px rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
            min-width: 0;
        }

        .countdown-luxury-row.bottom-row .countdown-luxury-box {
            flex: 0 1 calc((100% - 3.6rem) / 3);
            width: calc((100% - 3.6rem) / 3);
            max-width: 145px;
        }

        .countdown-luxury-box:hover {
            transform: translateY(-4px);
            border-color: #dfba63;
            box-shadow: 0 16px 35px rgba(223, 186, 99, 0.25), inset 0 1px 1px rgba(255, 255, 255, 0.2);
        }

        .countdown-luxury-box .luxury-num {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(2.4rem, 5vw, 3.8rem);
            font-weight: 700;
            color: #fef3c7;
            line-height: 1;
            display: block;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .countdown-luxury-box .luxury-lbl {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #cbd5e1;
            margin-top: 0.6rem;
            display: block;
        }

        .countdown-venue-info {
            color: #94a3b8;
            font-size: 1.6rem;
            margin-top: 3.5rem;
            line-height: 1.6;
        }

        .countdown-venue-info strong {
            color: #ffffff;
        }

        .countdown-calendar-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1.35rem 3rem;
            background: linear-gradient(135deg, #1d68bd 0%, #3b82f6 100%);
            color: #ffffff !important;
            border-radius: 9999px;
            font-size: 1.55rem;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            text-decoration: none !important;
            margin-top: 2rem;
            max-width: 320px;
            width: 100%;
        }

        .countdown-calendar-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(59, 130, 246, 0.45);
            background: linear-gradient(135deg, #17549c 0%, #2563eb 100%);
            color: #ffffff !important;
        }

        /* ==================================================
           Events Unified Box & Sample Card
           ================================================== */
        .events-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3.5rem;
            width: 100%;
        }

        .events-grid__item {
            flex: 1 1 360px;
            max-width: 440px;
            display: flex;
            min-width: 0;
            width: 100%;
        }

        .event-sample-card {
            position: relative;
            background: radial-gradient(ellipse at 50% 0%, #152d50 0%, #0d203a 65%, #08162b 100%);
            border-radius: 36px;
            border: 1.5px solid rgba(96, 165, 250, 0.25);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), inset 0 1px 1px rgba(255, 255, 255, 0.08);
            padding: 4.8rem 3.2rem 4.2rem 3.2rem;
            text-align: center;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .event-sample-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 28px 65px rgba(59, 130, 246, 0.28), 0 8px 24px rgba(0, 0, 0, 0.4);
            border-color: rgba(147, 197, 253, 0.5);
        }

        .event-card-heart {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2.2rem;
        }

        .event-card-heart svg {
            width: 40px;
            height: 40px;
            fill: #3b82f6;
            filter: drop-shadow(0 4px 10px rgba(59, 130, 246, 0.45));
        }

        .event-card-title {
            font-family: 'Playfair Display', Georgia, serif;
            color: #ffffff !important;
            font-size: 3.2rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            margin: 0 0 1.6rem 0;
            line-height: 1.25;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.35);
        }

        .event-card-date {
            color: #dfba63 !important;
            font-size: 2.1rem;
            font-weight: 700;
            margin-bottom: 0.4rem;
            letter-spacing: 0.02em;
            text-shadow: 0 1px 8px rgba(223, 186, 99, 0.25);
        }

        .event-card-time {
            color: #93c5fd !important;
            font-size: 1.85rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .event-card-venue {
            color: #f1f5f9 !important;
            font-size: 1.65rem;
            line-height: 1.65;
            font-weight: 500;
            margin-bottom: 0.8rem;
        }

        .event-card-attire {
            color: #cbd5e1 !important;
            font-size: 1.55rem;
            line-height: 1.5;
            font-weight: 500;
            margin-bottom: 3rem;
        }

        .event-card-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 320px;
            padding: 1.45rem 2.8rem;
            background: linear-gradient(135deg, #1d68bd 0%, #3b82f6 55%, #60a5fa 100%);
            color: #ffffff !important;
            border-radius: 9999px;
            font-size: 1.65rem;
            font-weight: 600;
            letter-spacing: 0.01em;
            text-decoration: none !important;
            border: none;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.38);
            transition: all 0.3s ease;
            cursor: pointer;
            margin-top: auto;
        }

        .event-card-btn:hover {
            background: linear-gradient(135deg, #17549c 0%, #2563eb 55%, #3b82f6 100%);
            box-shadow: 0 14px 30px rgba(37, 99, 235, 0.48);
            transform: translateY(-2px);
            color: #ffffff !important;
        }

        /* ==================================================
           Modern Luxury Gallery
           ================================================== */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr));
            gap: 2.4rem;
            max-width: 1040px;
            margin: 0 auto;
            width: 100%;
        }

        .gallery-card-wrap {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            background: #0d203a;
            border: 1.5px solid rgba(59, 130, 246, 0.25);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            width: 100%;
            height: 380px;
            min-height: 320px;
        }

        .gallery-card-wrap:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(59, 130, 246, 0.3);
            border-color: rgba(147, 197, 253, 0.5);
        }

        .gallery-card {
            display: block;
            width: 100%;
            height: 100%;
            min-height: 100%;
            position: relative;
            overflow: hidden;
            text-decoration: none !important;
            cursor: pointer;
        }

        .gallery-card-img {
            width: 100%;
            height: 100%;
            min-height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .gallery-card:hover .gallery-card-img {
            transform: scale(1.06);
        }

        /* ==================================================
           Wishes & Blessings Modern Styling
           ================================================== */
        .wishes-container-box {
            background: rgba(13, 33, 61, 0.7);
            border: 1.5px solid rgba(59, 130, 246, 0.25);
            border-radius: 40px;
            padding: 4.5rem 3rem 4rem 3rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            margin: 2rem auto 3rem auto;
            max-width: 1080px;
            width: 100%;
        }

        .wishes-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            width: 100%;
        }

        .wishes-grid__col {
            min-width: 0;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .wish-form-card {
            background: radial-gradient(ellipse at 50% 0%, #152d50 0%, #0d203a 65%, #08162b 100%);
            border-radius: 28px;
            border: 1.5px solid rgba(96, 165, 250, 0.25);
            padding: 3.5rem 2.8rem;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.35);
            height: 100%;
            width: 100%;
            color: #ffffff;
        }

        .wishes-feed-card {
            background: radial-gradient(ellipse at 50% 0%, #152d50 0%, #0d203a 65%, #08162b 100%);
            border-radius: 28px;
            border: 1.5px solid rgba(96, 165, 250, 0.25);
            padding: 3.5rem 2.8rem;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.35);
            height: 100%;
            display: flex;
            flex-direction: column;
            width: 100%;
            color: #ffffff;
        }

        .wishes-feed-scroll {
            max-height: 440px;
            overflow-y: auto;
            padding-right: 0.8rem;
        }

        .wish-form-card input, .wish-form-card textarea, .wish-form-card select {
            background: rgba(8, 22, 43, 0.75) !important;
            border: 1.5px solid rgba(96, 165, 250, 0.3) !important;
            color: #ffffff !important;
            border-radius: 14px !important;
        }
        .wish-form-card input:focus, .wish-form-card textarea:focus {
            border-color: #3b82f6 !important;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25) !important;
        }
        .wish-form-card label {
            color: #e2e8f0 !important;
            font-weight: 600;
        }
        .wishes-feed-card .text-muted, .wishes-feed-card .empty-state {
            color: #94a3b8 !important;
        }
        .wishes-feed-card .wish-item, .wishes-feed-scroll > div {
            background: rgba(8, 22, 43, 0.6) !important;
            border: 1px solid rgba(59, 130, 246, 0.2) !important;
            border-radius: 16px !important;
            padding: 1.4rem 1.6rem !important;
            margin-bottom: 1.2rem !important;
        }
        .wishes-feed-card .wish-author, .wishes-feed-scroll strong {
            color: #ffffff !important;
            font-weight: 700 !important;
        }
        .wishes-feed-card .wish-time, .wishes-feed-scroll small {
            color: #94a3b8 !important;
        }
        .wishes-feed-card .wish-comment, .wishes-feed-scroll p {
            color: #e2e8f0 !important;
        }

        /* High Visibility Text Guarantees */
        .event-card-title, .bride-card-name {
            color: #ffffff !important;
        }
        .event-card-date {
            color: #dfba63 !important;
        }
        .event-card-time {
            color: #93c5fd !important;
        }
        .event-card-venue {
            color: #f1f5f9 !important;
        }
        .event-card-attire {
            color: #cbd5e1 !important;
        }
        .bride-card-relation {
            color: #f8fafc !important;
        }
        .bride-card-address {
            color: #93c5fd !important;
        }

        /* ==================================================
           Modern Footer
           ================================================== */
        .modern-footer {
            background: #0a192f;
            color: #94a3b8;
            padding: 5rem 2rem 4rem 2rem;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-couple-name {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 2.8rem;
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 0.8rem;
        }

        .footer-event-date {
            color: #60a5fa;
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.1rem;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }

        .footer-copyright {
            font-size: 1.35rem;
            color: #64748b;
        }

        /* Floating Back-to-Top Button */
        .ss-go-top a {
            background: linear-gradient(135deg, #1d68bd, #3b82f6) !important;
            color: #ffffff !important;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4) !important;
            border-radius: 50% !important;
        }

        /* ==================================================
           Comprehensive Responsive Breakpoints
           ================================================== */
        @media (max-width: 992px) {
            .tab-nav.scroll-nav {
                padding: 0.6rem 0.8rem;
            }
            .unified-content-box, .wishes-container-box {
                padding: 3.8rem 2.2rem 3.2rem 2.2rem;
                border-radius: 32px;
            }
        }

        @media (max-width: 768px) {
            /* General page layout */
            .row {
                width: 100% !important;
                padding-left: 1.4rem !important;
                padding-right: 1.4rem !important;
            }

            .tab-content__item {
                padding-top: 3.5rem;
                margin-bottom: 3.5rem;
                padding-bottom: 3.5rem;
            }

            /* Floating swipeable nav bar on mobile */
            .tab-nav.scroll-nav {
                top: 8px;
                padding: 0.4rem 0.6rem;
                margin-bottom: 2rem;
            }
            .tab-nav__list {
                display: flex;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                -ms-overflow-style: none;
                justify-content: flex-start;
                padding: 0.35rem 0.5rem;
                gap: 0.4rem;
                border-radius: 9999px;
                max-width: 100%;
                width: 100%;
                flex-wrap: nowrap;
            }
            .tab-nav__list::-webkit-scrollbar {
                display: none;
            }
            .tab-nav__list li {
                flex: 0 0 auto;
            }
            .tab-nav__list li a {
                padding: 0.8rem 1.4rem;
                font-size: 1.25rem;
                letter-spacing: 0.04rem;
                white-space: nowrap;
            }

            /* Containers */
            .unified-content-box, .wishes-container-box {
                padding: 3rem 1.6rem 2.5rem 1.6rem;
                border-radius: 28px;
                margin: 1.5rem auto 2.5rem auto;
            }

            /* Bride & Groom */
            .bride-grid {
                gap: 2.5rem;
            }
            .bride-grid__item {
                flex: 1 1 100%;
                max-width: 100%;
            }
            .bride-card {
                padding: 3.2rem 1.8rem 2.8rem 1.8rem;
                border-radius: 28px;
            }
            .bride-card-name {
                font-size: clamp(2.4rem, 6.5vw, 3rem);
            }
            .bride-card-img-wrap {
                max-width: 300px;
            }
            .bride-card-img {
                height: auto;
                aspect-ratio: 4/5;
                max-height: 380px;
            }

            /* Countdown */
            .countdown-luxury-container {
                padding: 4.5rem 1.6rem 3.5rem 1.6rem;
                border-radius: 28px;
                margin: 1.5rem auto 2.5rem auto;
            }
            .countdown-luxury-title {
                margin-bottom: 2.5rem;
            }
            .countdown-luxury-grid {
                gap: 1.2rem;
            }
            .countdown-luxury-row {
                gap: 1.2rem;
            }
            .countdown-luxury-box {
                padding: 1.1rem 0.4rem;
                min-height: 95px;
                border-radius: 18px;
            }
            .countdown-luxury-row.bottom-row .countdown-luxury-box {
                flex: 0 1 calc((100% - 2.4rem) / 3);
                width: calc((100% - 2.4rem) / 3);
            }
            .countdown-venue-info {
                font-size: 1.45rem;
                margin-top: 2.8rem;
            }

            /* Events */
            .events-grid {
                gap: 2.2rem;
            }
            .events-grid__item {
                flex: 1 1 100%;
                max-width: 100%;
            }
            .event-sample-card {
                padding: 3.2rem 1.8rem 2.8rem 1.8rem;
                border-radius: 28px;
            }
            .event-card-title {
                font-size: clamp(2.4rem, 6.5vw, 3rem);
            }
            .event-card-btn {
                max-width: 100%;
                font-size: 1.5rem;
                padding: 1.3rem 2rem;
            }

            /* Gallery - 2 columns on tablets */
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 1.5rem !important;
            }
            .gallery-card-wrap {
                height: 280px !important;
                min-height: 240px !important;
                border-radius: 18px !important;
            }

            /* Wishes - Stack vertically */
            .wishes-grid {
                grid-template-columns: 1fr;
                gap: 2.4rem;
            }
            .wish-form-card, .wishes-feed-card {
                padding: 2.6rem 1.6rem;
                border-radius: 24px;
            }

            /* Footer */
            .modern-footer {
                padding: 4rem 1.5rem 3rem 1.5rem;
            }
            .footer-couple-name {
                font-size: 2.4rem;
            }
            .footer-event-date {
                font-size: 1.35rem;
            }

            /* Back to top button */
            .ss-go-top {
                bottom: 20px;
                right: 18px;
            }
            .ss-go-top a {
                width: 44px !important;
                height: 44px !important;
                line-height: 44px !important;
            }
        }

        @media (max-width: 480px) {
            .s-intro__content {
                padding: 4rem 1.2rem 3rem 1.2rem;
            }

            /* Gallery - 1 column on phones */
            .gallery-grid {
                grid-template-columns: 1fr !important;
                gap: 1.8rem !important;
            }
            .gallery-card-wrap {
                height: 360px !important;
                min-height: 300px !important;
                border-radius: 20px !important;
            }

            /* Countdown on small phones */
            .countdown-luxury-container {
                padding: 3.5rem 1.2rem 2.8rem 1.2rem;
                border-radius: 22px;
            }
            .countdown-luxury-grid {
                gap: 0.8rem;
            }
            .countdown-luxury-row {
                gap: 0.8rem;
            }
            .countdown-luxury-box {
                padding: 0.9rem 0.2rem;
                min-height: 85px;
                border-radius: 14px;
            }
            .countdown-luxury-row.bottom-row .countdown-luxury-box {
                flex: 0 1 calc((100% - 1.6rem) / 3);
                width: calc((100% - 1.6rem) / 3);
            }
            .countdown-luxury-box .luxury-num {
                font-size: 2.2rem;
            }
            .countdown-luxury-box .luxury-lbl {
                font-size: 0.95rem;
                letter-spacing: 0.08em;
            }
            .countdown-calendar-btn {
                max-width: 100%;
                padding: 1.25rem 2rem;
                font-size: 1.45rem;
            }

            /* Inputs font-size 16px to prevent iOS auto-zoom */
            input, textarea {
                font-size: 16px !important;
            }
        }
    </style>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="https://www.favicon.cc/logo3d/377601.png" />
    @livewireStyles
</head>

<body id="top" class="ss-preload theme-slides">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro">
        @foreach ($wedding as $item)
        <div class="s-intro__bg-single" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(10, 25, 47, 0.45) 0%, rgba(15, 46, 90, 0.6) 50%, rgba(10, 25, 47, 0.82) 100%), url('{{ url('/storage/' . $item->hero1) }}') no-repeat center center; background-size: cover;"></div>

        <div class="row s-intro__content" style="position: relative; z-index: 5; text-align: center; max-width: 900px; padding: 6rem 2rem 4rem 2rem;">
            <div class="column">

                <div class="hero-badge">
                    <span>✨ The Holy Betrothal ✨</span>
                </div>

                <h1 class="hero-couple-title">
                    {{ $item->name }}
                </h1>

                <div style="margin-top: 3.5rem;">
                    <a href="#tab-couple" class="hero-cta-btn smoothscroll">
                        <span>Open Invitation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" style="vertical-align: middle; margin-left: 8px;">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div> <!-- s-intro__content -->
        @endforeach

        <div class="s-intro__scroll">
            <a href="#tab-couple" class="smoothscroll" style="color: rgba(255, 255, 255, 0.85); font-weight: 600; letter-spacing: 0.15rem; font-size: 1.3rem;">
                Scroll Down &darr;
            </a>
        </div> <!-- s-intro__scroll -->

    </section> <!-- end s-intro -->


    <!-- hidden element
    ================================================== -->
    <div id="hidden" aria-hidden="true" style="opacity: 0;"></div>


    <!-- details
    ================================================== -->
    <section id="details" class="s-details">

        <div class="row">
            <div class="column">

                <nav class="tab-nav scroll-nav">
                    <ul class="tab-nav__list">
                        <li class="active" data-section="tab-couple">
                            <a href="#tab-couple" class="smoothscroll">
                                <span>Bride &amp; Groom</span>
                            </a>
                        </li>
                        <li data-section="tab-countdown">
                            <a href="#tab-countdown" class="smoothscroll">
                                <span>Save The Date</span>
                            </a>
                        </li>
                        <li data-section="tab-event">
                            <a href="#tab-event" class="smoothscroll">
                                <span>Events</span>
                            </a>
                        </li>
                        <li data-section="tab-gallery">
                            <a href="#tab-gallery" class="smoothscroll">
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li data-section="tab-wishes">
                            <a href="#tab-wishes" class="smoothscroll">
                                <span>Wishes</span>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end tab-nav -->

                <div class="tab-content">

                    <!-- 01 - tab couple -->
                    <div id="tab-couple" class='text-center tab-content__item '>

                        <div class="row tab-content__item-header text-center" style="margin-bottom: 2rem;">
                            <div class="column">
                                <h2>Bride &amp; Groom</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column text-center">
                                <p class="desc" style="max-width: 650px; margin: 0 auto 3rem auto; font-size: 1.8rem; color: #cbd5e1;">
                                    Two lives, two hearts, joined together in friendship and love.
                                </p>
                            </div>
                        </div>

                        <div class="bride-box-container">
                            <div class="bride-grid">
                                @foreach ($bride as $item)
                                <div class="bride-grid__item">
                                    <div class="bride-card">
                                        <div class="bride-card-content">
                                            <span class="bride-role-badge">
                                                @if(strtolower($item->gender) == 'male' || str_contains(strtolower($item->name), 'melvin'))
                                                    The Groom
                                                @else
                                                    The Bride
                                                @endif
                                            </span>
                                            <h3 class="bride-card-name">{{ $item->name }}</h3>
                                            <div class="bride-card-img-wrap">
                                                <img src="{{ url('/storage/') }}/{{ $item->photo }}" alt="{{ $item->name }}" class="bride-card-img">
                                            </div>
                                            <p class="bride-card-relation">
                                                {{ $item->child }}
                                            </p>
                                            @if(!empty($item->address))
                                            <p class="bride-card-address">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#60a5fa" viewBox="0 0 16 16" style="vertical-align: middle; margin-right: 5px;">
                                                    <path d="M8 0a5 5 0 0 0-5 5c0 3.75 5 11 5 11s5-7.25 5-11a5 5 0 0 0-5-5zm0 7.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                                                </svg>
                                                {{ $item->address }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div> <!-- end 01 - tab couple -->

                    <!-- 02 - tab countdown / save the date -->
                    <div id="tab-countdown" class="tab-content__item">
                        <div class="row tab-content__item-header text-center" style="margin-bottom: 2rem;">
                            <div class="column">
                                <h2>Save The Date</h2>
                            </div>
                        </div>

                        <div class="countdown-luxury-container">
                            <div class="countdown-luxury-inner">
                                <div class="countdown-luxury-sub">SAVE THE DATE</div>

                                <h3 class="countdown-luxury-title">
                                    COUNTING DOWN<br>
                                    TO OUR SPECIAL<br>
                                    DAY
                                </h3>

                                <!-- Luxury Squircle Countdown Boxes (3 Top + 1 Bottom) -->
                                <div class="countdown-luxury-grid">
                                    <div class="countdown-luxury-row top-row">
                                        <div class="countdown-luxury-box">
                                            <span class="ss-days luxury-num">00</span>
                                            <span class="luxury-lbl">DAYS</span>
                                        </div>
                                        <div class="countdown-luxury-box">
                                            <span class="ss-hours luxury-num">00</span>
                                            <span class="luxury-lbl">HOURS</span>
                                        </div>
                                        <div class="countdown-luxury-box">
                                            <span class="ss-minutes luxury-num">00</span>
                                            <span class="luxury-lbl">MINUTES</span>
                                        </div>
                                    </div>
                                    <div class="countdown-luxury-row bottom-row">
                                        <div class="countdown-luxury-box">
                                            <span class="ss-seconds luxury-num">00</span>
                                            <span class="luxury-lbl">SECONDS</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="countdown-venue-info">
                                    <strong>Monday &bull; March 29, 2027</strong><br>
                                    St. Joseph's Forane Church &bull; Pisharody's Auditorium, Ottapalam
                                </div>

                                <div>
                                    <a href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Holy+Betrothal+-+Melvin+%26+Delna&dates=20270329T053000Z/20270329T073000Z&details=Holy+Betrothal+Ceremony+of+Melvin+and+Delna&location=St.+Joseph+Forane+Church,+Ottapalam" target="_blank" class="countdown-calendar-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                        </svg>
                                        Add to Google Calendar
                                    </a>
                                </div>

                                <p style="font-style: italic; color: #64748b; font-size: 1.45rem; max-width: 580px; margin: 3rem auto 0 auto; line-height: 1.6;">
                                    "Two are better than one, because they have a good return for their labor." &mdash; Ecclesiastes 4:9
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end 02 - tab countdown -->

                    <!-- 03 - tab event -->
                    <div id="tab-event" class='tab-content__item'>

                        <div class="row tab-content__item-header text-center" style="margin-bottom: 2rem;">
                            <div class="column">
                                <h2>Events &amp; Venues</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column text-center">
                                <p class="desc" style="max-width: 650px; margin: 0 auto 2.5rem auto; font-size: 1.8rem; color: #cbd5e1;">
                                    We would be delighted to have you join us in celebrating our Holy Betrothal and Reception.
                                </p>
                            </div>
                        </div>

                        <!-- Entire Event Part in One Attractive Box Container -->
                        <div class="unified-content-box events-unified-box">
                            <div class="events-grid">
                                @foreach ($detail as $item)
                                <div class="events-grid__item">
                                    <div class="event-sample-card">
                                        <div class="event-card-body">
                                            <!-- Blue Heart Icon -->
                                            <div class="event-card-heart">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                                </svg>
                                            </div>

                                            <!-- Event Title -->
                                            <h3 class="event-card-title">{{ $item->type }}</h3>

                                            <!-- Event Date -->
                                            <div class="event-card-date">
                                                {{ date_format(date_create($item->date), "F jS") }}
                                            </div>

                                            <!-- Event Time -->
                                            <div class="event-card-time">
                                                {{ date_format(date_create($item->date), "h:i A") }} Onwards
                                            </div>

                                            <!-- Venue & Address -->
                                            <div class="event-card-venue">
                                                @if(str_contains(strtolower($item->address), 'church'))
                                                    St. Joseph's Forane Church<br>Ottapalam, Palakkad, Kerala
                                                @elseif(str_contains(strtolower($item->address), 'auditorium') || str_contains(strtolower($item->address), 'pisharody'))
                                                    Pisharody's Auditorium<br>Ottapalam, Palakkad, Kerala
                                                @else
                                                    {!! nl2br(e($item->address)) !!}
                                                @endif
                                            </div>

                                            <!-- Attire / Note -->
                                            <div class="event-card-attire">
                                                @if(str_contains(strtolower($item->type), 'betrothal'))
                                                    Traditional &amp; Festive Formal Attire
                                                @else
                                                    Celebration &amp; Feast
                                                @endif
                                            </div>

                                            <!-- Attractive Location Button -->
                                            <a href="{{ $item->maps }}" target="_blank" class="event-card-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                                @if(str_contains(strtolower($item->type), 'reception'))
                                                    Get Auditorium Location
                                                @else
                                                    Get Church Location
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div> <!-- end 02 - tab event -->

                    <!-- 03 - tab gallery -->
                    <div id="tab-gallery" class="tab-content__item">
                        <div class="row tab-content__item-header text-center" style="margin-bottom: 2rem;">
                            <div class="column">
                                <h2>Gallery</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column text-center">
                                <div style="color: #dfba63; font-size: 1.3rem; font-weight: 700; letter-spacing: 0.25rem; text-transform: uppercase; margin-bottom: 1.2rem; display: inline-block;">
                                    ✨ Moments &amp; Memories ✨
                                </div>
                                <p class="desc" style="max-width: 650px; margin: 0 auto 3rem auto; font-size: 1.8rem; color: #cbd5e1;">
                                    Cherished glimpses of our story, celebrations, and unforgettable memories.
                                </p>
                            </div>
                        </div>

                        <div class="unified-content-box tz-gallery modern-gallery">
                            @php
                                $galleryPhotos = [
                                    ['file' => 'engagement.jpeg', 'caption' => 'Melvin & Delna'],
                                    ['file' => 'outing.jpeg', 'caption' => 'Sweet Outing'],
                                    ['file' => 'airpt_1.jpeg', 'caption' => 'Travel Memories'],
                                    ['file' => 'airpt_2.jpeg', 'caption' => 'Journey Together'],
                                    ['file' => 'delna.jpeg', 'caption' => 'Delna Tom'],
                                    ['file' => 'melvin.jpeg', 'caption' => 'Melvin Sabu'],
                                ];

                                if (isset($galery) && count($galery) > 0) {
                                    $item = $galery->first();
                                    $dbPhotos = [
                                        ['file' => $item->gallery1, 'caption' => 'Melvin & Delna'],
                                        ['file' => $item->gallery2, 'caption' => 'Sweet Outing'],
                                        ['file' => $item->gallery3, 'caption' => 'Travel Memories'],
                                        ['file' => $item->gallery4, 'caption' => 'Journey Together'],
                                        ['file' => $item->gallery5, 'caption' => 'Delna Tom'],
                                        ['file' => $item->gallery6, 'caption' => 'Melvin Sabu'],
                                    ];
                                    $validDb = array_filter($dbPhotos, fn($p) => !empty($p['file']));
                                    if (count($validDb) > 0) {
                                        $galleryPhotos = array_values($validDb);
                                    }
                                }
                            @endphp

                            <div class="gallery-grid">
                                @foreach ($galleryPhotos as $photo)
                                <div class="gallery-card-wrap">
                                    <a class="lightbox gallery-card" href="{{ url('/storage/' . $photo['file']) }}" data-caption="{{ $photo['caption'] }}">
                                        <img src="{{ url('/storage/' . $photo['file']) }}" alt="{{ $photo['caption'] }}" class="gallery-card-img">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end 03 - tab gallery -->

                    <!-- 04 - tab wishes -->
                    <div id="tab-wishes" class="tab-content__item">
                        <div class="row tab-content__item-header text-center" style="margin-bottom: 2rem;">
                            <div class="column">
                                <h2>Wishes &amp; Blessings</h2>
                            </div>
                        </div>

                        @foreach ($thank as $item)
                        <p class="text-center" style="font-size: 1.8rem; margin: 0 auto 3rem auto; max-width: 680px; color: #cbd5e1; line-height: 1.6;">
                            {{ $item->note }}
                        </p>
                        @endforeach

                        <div class="wishes-container-box">
                            <div class="wishes-grid">
                                <div class="wishes-grid__col">
                                    <livewire:create-wish>
                                </div>

                                <div class="wishes-grid__col">
                                    <div class="wishes-feed-card">
                                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem; border-bottom: 1.5px solid #f1f5f9; padding-bottom: 1.2rem;">
                                            <h4 style="margin: 0; font-family: 'Playfair Display', Georgia, serif; color: #0f2e5a; font-size: 2.2rem; font-weight: 700;">Recent Blessings</h4>
                                            <span style="font-size: 1.3rem; color: #64748b; font-weight: 600;">Guest Book</span>
                                        </div>
                                        <div class="wishes-feed-scroll">
                                            <livewire:list-wish>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end 04 - tab wishes -->

                </div> <!-- end tab content -->

                <!-- Modern Footer  -->
                <footer class="modern-footer">
                    @foreach ($wedding as $item)
                    <div class="footer-couple-name">{{ $item->name }}</div>
                    @endforeach
                    <div class="footer-event-date">Holy Betrothal &bull; March 29, 2027 &bull; Ottapalam, Palakkad</div>
                    <div class="footer-copyright">
                        <span>With prayers and love from families &bull; &copy; {{ date("Y") }} All Rights Reserved</span>
                    </div>
                </footer>

            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <span>Back to Top</span>
                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                    <path d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z" fill="currentColor"></path>
                </svg>
            </a>
        </div> <!-- end ss-go-top -->

    </section> <!-- end s-details -->


    <!-- Java Script
    ================================================== -->
    <script src="assets/undangan/js/plugins.js"></script>
    <script src="assets/undangan/js/main.js"></script>
    <Script>
        (function(html) {

            'use strict';

            html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

            const cfg = {

                // Countdown Timer Final Date
                finalDate: '<?php echo $finalDate; ?>',
                // MailChimp URL
                mailChimpURL: 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6'

            };

            /* Countdown Timer
             * ------------------------------------------------------ */
            const ssCountdown = function() {

                const finalDate = new Date(cfg.finalDate).getTime();
                const daysSpans = document.querySelectorAll('.ss-days');
                const hoursSpans = document.querySelectorAll('.ss-hours');
                const minutesSpans = document.querySelectorAll('.ss-minutes');
                const secondsSpans = document.querySelectorAll('.ss-seconds');
                let timeInterval;

                if (!daysSpans.length) return;

                function timer() {

                    const now = new Date().getTime();
                    let diff = finalDate - now;

                    if (diff <= 0) {
                        if (timeInterval) {
                            clearInterval(timeInterval);
                        }
                        return;
                    }

                    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                    let minutes = Math.floor((diff / 1000 / 60) % 60);
                    let seconds = Math.floor((diff / 1000) % 60);

                    if (days <= 9) {
                        days = '0' + days;
                    }

                    hours = hours <= 9 ? '0' + hours : hours;
                    minutes = minutes <= 9 ? '0' + minutes : minutes;
                    seconds = seconds <= 9 ? '0' + seconds : seconds;

                    daysSpans.forEach(el => el.textContent = days);
                    hoursSpans.forEach(el => el.textContent = hours);
                    minutesSpans.forEach(el => el.textContent = minutes);
                    secondsSpans.forEach(el => el.textContent = seconds);

                }

                timer();
                timeInterval = setInterval(timer, 1000);
            };

            /* Initialize
             * ------------------------------------------------------ */
            (function ssInit() {
                ssCountdown();

            })();

        })(document.documentElement);
    </Script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery', {
            animation: 'fadeIn',
            noScrollbars: true,
            captions: function(element) {
                return element.getAttribute('data-caption') || element.getElementsByTagName('img')[0].alt;
            }
        });

        // ScrollSpy to automatically highlight active section while scrolling
        document.addEventListener('DOMContentLoaded', function() {
            // Direct smooth-scroll for tab links
            document.querySelectorAll('.tab-nav__list li a').forEach(function(anchor) {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.startsWith('#')) {
                        const targetElem = document.querySelector(targetId);
                        if (targetElem) {
                            e.preventDefault();
                            const navOffset = 80;
                            const elementPosition = targetElem.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - navOffset;
                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            const navItems = document.querySelectorAll('.scroll-nav .tab-nav__list li');
            const sections = document.querySelectorAll('.tab-content__item');
            const navList = document.querySelector('.tab-nav__list');

            function updateActiveNav() {
                const scrollPos = window.pageYOffset + 140;
                let currentId = '';

                sections.forEach(function(section) {
                    const top = section.offsetTop;
                    const height = section.offsetHeight;
                    if (scrollPos >= top && scrollPos < top + height) {
                        currentId = section.getAttribute('id');
                    }
                });

                if (!currentId && sections.length > 0) {
                    if (window.pageYOffset < sections[0].offsetTop) {
                        currentId = sections[0].getAttribute('id');
                    } else {
                        currentId = sections[sections.length - 1].getAttribute('id');
                    }
                }

                navItems.forEach(function(li) {
                    const link = li.querySelector('a');
                    if (link && link.getAttribute('href') === '#' + currentId) {
                        const wasActive = li.classList.contains('active');
                        li.classList.add('active');
                        li.setAttribute('data-tab-active', '');
                        if (!wasActive && navList && window.innerWidth <= 768) {
                            const liLeft = li.offsetLeft;
                            const liWidth = li.offsetWidth;
                            const listWidth = navList.offsetWidth;
                            navList.scrollTo({
                                left: liLeft - (listWidth / 2) + (liWidth / 2),
                                behavior: 'smooth'
                            });
                        }
                    } else {
                        li.classList.remove('active');
                        li.removeAttribute('data-tab-active');
                    }
                });
            }

            window.addEventListener('scroll', updateActiveNav, { passive: true });
            updateActiveNav();
        });
    </script>

    @include('sweetalert::alert')
    @livewireScripts
</body>

</html>