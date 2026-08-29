<?php
// about.php - About KK LifeWise & Mission
$page_title = 'About Us (మా గురించి) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Learn about KK LifeWise mission, vision, founder philosophy, and our goal to empower Telugu youth with growth mindset.';
$active_page = 'about';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-primary/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 text-primary text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">auto_awesome</span>
            Our Story & Vision
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            About KK LifeWise
        </h1>
        <p class="text-xl font-bold text-on-surface mb-2">
            "ఆలోచన మార్చు • జీవితం మార్చు"
        </p>
        <p class="text-sm sm:text-base text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            తెలుగు ప్రజలలో వ్యక్తిత్వ వికాసం, మానసిక స్థైర్యం, ఆర్థిక క్రమశిక్షణ మరియు ఉన్నత ఆలోచనలను పెంపొందించడమే మా ప్రధాన ధ్యేయం.
        </p>
    </div>

    <!-- Mission & Pillars -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-surface-container rounded-2xl p-6 sm:p-8 border border-white/10 shadow-xl gold-glow">
            <div class="w-12 h-12 rounded-xl bg-primary-container/20 border border-primary/30 text-primary flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-2xl">visibility</span>
            </div>
            <h2 class="text-xl font-bold text-on-surface font-sans mb-2">మా లక్ష్యం (Our Mission)</h2>
            <p class="text-sm text-on-surface-variant leading-relaxed">
                ప్రతి ఒక్కరూ తమ అంతర్గత సామర్థ్యాన్ని గుర్తించి, నిరాశ నుండి ఆశావహ దృక్పథం వైపు అడుగులు వేసేలా అత్యున్నత ప్రాక్టికల్ జ్ఞానాన్ని తెలుగు భాషలో అందించడం.
            </p>
        </div>

        <div class="bg-surface-container rounded-2xl p-6 sm:p-8 border border-white/10 shadow-xl gold-glow">
            <div class="w-12 h-12 rounded-xl bg-primary-container/20 border border-primary/30 text-primary flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-2xl">lightbulb</span>
            </div>
            <h2 class="text-xl font-bold text-on-surface font-sans mb-2">మా సూత్రాలు (Our Core Values)</h2>
            <p class="text-sm text-on-surface-variant leading-relaxed">
                స్పష్టత (Clarity), నిరంతర సాధన (Consistency), నిజాయితీ (Integrity), మరియు ఆచరణాత్మక ఆలోచన (Practical Action).
            </p>
        </div>
    </div>

    <!-- What We Offer -->
    <div class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-xl space-y-6">
        <h2 class="text-2xl font-bold text-primary font-sans">KK LifeWise వేదిక ద్వారా మీకు లభించేవి:</h2>
        
        <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-high/60 border border-white/5">
                <span class="material-symbols-outlined text-amber-400 text-2xl shrink-0 mt-0.5">bolt</span>
                <div>
                    <h3 class="text-base font-bold text-on-surface">రోజువారీ ప్రేరణ & మైండ్‌సెట్ (Motivation)</h3>
                    <p class="text-xs sm:text-sm text-on-surface-variant mt-1">నిరాశను పోగొట్టి క్రమశిక్షణతో కూడిన అలవాట్లను నిర్మించే వ్యాసాలు.</p>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-high/60 border border-white/5">
                <span class="material-symbols-outlined text-emerald-400 text-2xl shrink-0 mt-0.5">payments</span>
                <div>
                    <h3 class="text-base font-bold text-on-surface">ఆర్థిక వివేకం & పెట్టుబడులు (Money)</h3>
                    <p class="text-xs sm:text-sm text-on-surface-variant mt-1">సామాన్యులకు సులభంగా అర్థమయ్యే బడ్జెట్, SIP మరియు సంపద సృష్టి నియమాలు.</p>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-high/60 border border-white/5">
                <span class="material-symbols-outlined text-blue-400 text-2xl shrink-0 mt-0.5">work</span>
                <div>
                    <h3 class="text-base font-bold text-on-surface">కెరీర్ గ్రోత్ & హై ఇన్‌కమ్ స్కిల్స్ (Career)</h3>
                    <p class="text-xs sm:text-sm text-on-surface-variant mt-1">ఇంటర్వ్యూ మెళకువలు, కమ్యూనికేషన్ పవర్ మరియు డిజిటల్ స్కిల్స్ గైడెన్స్.</p>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-high/60 border border-white/5">
                <span class="material-symbols-outlined text-indigo-400 text-2xl shrink-0 mt-0.5">menu_book</span>
                <div>
                    <h3 class="text-base font-bold text-on-surface">పుస్తకాల సంగ్రహం & స్ఫూర్తి కథలు (Books & Stories)</h3>
                    <p class="text-xs sm:text-sm text-on-surface-variant mt-1">అటామిక్ హ్యాబిట్స్, సైకాలజీ ఆఫ్ మనీ మరియు జీవితాన్ని మార్చే ఎపిసోడ్ కథనాలు.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Official Channels Section -->
    <div class="bg-gradient-to-r from-surface-container-high to-surface-container rounded-3xl p-8 border border-primary/30 text-center space-y-6 shadow-2xl">
        <h2 class="text-2xl font-bold text-on-surface font-sans">మమ్మల్ని అనుసరించండి (Join Our Community)</h2>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="https://www.youtube.com/@KKMotivationTelugu" target="_blank" rel="noopener noreferrer" class="btn-gold px-6 py-3 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-2">
                <span class="material-symbols-outlined">smart_display</span>
                YouTube: @KKMotivationTelugu
            </a>
            <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" class="btn-outline-gold px-6 py-3 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-2">
                <span class="material-symbols-outlined">photo_camera</span>
                Instagram: @kkmotivationhub
            </a>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
