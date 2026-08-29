<?php
// money.php - KK LifeWise Financial Wisdom Hub
$page_title = 'Money (ఆర్థిక వివేకం) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Telugu Money management, investing in SIP & Mutual Funds, budgeting tips, debt-free living, and building long-term wealth.';
$active_page = 'money';

require_once __DIR__ . '/header.php';
$money_articles = get_articles('money');
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-emerald-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">payments</span>
            Financial Freedom & Wealth Building
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Money (ఆర్థిక వివేకం)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            డబ్బును సంపాదించడం మాత్రమే కాదు; సంపాదించిన ప్రతి రూపాయిని మీ కోసం పనిచేసేలా మార్చి ఆర్థిక స్వాతంత్ర్యం సాధించే కళ.
        </p>
    </div>

    <!-- Financial Calculator / 50-30-20 Interactive Rule Card -->
    <div class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-emerald-500/30 shadow-2xl">
        <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-emerald-400">calculate</span>
            50-30-20 బడ్జెట్ కాలిక్యులేటర్ (Budget Rule)
        </h2>
        <p class="text-xs sm:text-sm text-on-surface-variant mb-6">
            మీ నెలవారీ నికర ఆదాయాన్ని నమోదు చేసి 50-30-20 నిబంధన ప్రకారం ఎంత కేటాయించాలో వెంటనే చూడండి:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
            <div class="md:col-span-5 space-y-3">
                <label class="block text-xs font-bold text-primary uppercase font-sans">మీ నెలవారీ ఆదాయం (రూపాయల్లో)</label>
                <div class="relative">
                    <span class="absolute left-4 top-3.5 text-on-surface-variant font-bold">₹</span>
                    <input type="number" id="income-input" value="50000" class="w-full bg-surface-container-high border border-white/15 rounded-xl py-3 pl-9 pr-4 text-on-surface text-lg font-bold focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                </div>
                <button type="button" id="calc-budget-btn" class="btn-gold w-full py-3 rounded-xl font-bold text-sm">
                    లెక్కించండి (Calculate Budget)
                </button>
            </div>

            <div class="md:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-4 rounded-2xl bg-surface-container-high border border-white/5 text-center">
                    <span class="text-xs font-bold text-blue-400 block mb-1">50% అత్యవసరాలు (Needs)</span>
                    <div id="needs-val" class="text-xl font-extrabold text-on-surface font-sans">₹25,000</div>
                    <span class="text-[11px] text-on-surface-variant block mt-1">ఇంటి అద్దె, రేషన్, బిల్లులు</span>
                </div>

                <div class="p-4 rounded-2xl bg-surface-container-high border border-white/5 text-center">
                    <span class="text-xs font-bold text-amber-400 block mb-1">30% కోరికలు (Wants)</span>
                    <div id="wants-val" class="text-xl font-extrabold text-on-surface font-sans">₹15,000</div>
                    <span class="text-[11px] text-on-surface-variant block mt-1">సినిమాలు, విహారయాత్రలు</span>
                </div>

                <div class="p-4 rounded-2xl bg-surface-container-high border border-emerald-500/30 text-center">
                    <span class="text-xs font-bold text-emerald-400 block mb-1">20% పెట్టుబడి (Savings)</span>
                    <div id="savings-val" class="text-xl font-extrabold text-emerald-300 font-sans">₹10,000</div>
                    <span class="text-[11px] text-on-surface-variant block mt-1">SIP, మ్యూచువల్ ఫండ్స్</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Money Articles -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">ఆర్థిక వివేకం వ్యాసాలు (Money Articles)</h2>
            <span class="text-xs text-on-surface-variant"><?= count($money_articles) ?> వ్యాసాలు</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($money_articles as $art): ?>
                <article class="bg-surface-container rounded-2xl overflow-hidden border border-white/10 shadow-lg gold-glow flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= htmlspecialchars($art['image']) ?>" alt="<?= htmlspecialchars($art['title']) ?>" class="w-full h-full object-cover" loading="lazy">
                            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[11px] text-white">
                                <?= htmlspecialchars($art['read_time']) ?>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-on-surface mb-2 line-clamp-2">
                                <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                    <?= htmlspecialchars($art['title']) ?>
                                </a>
                            </h3>
                            <p class="text-sm text-on-surface-variant line-clamp-3 mb-4 leading-relaxed">
                                <?= htmlspecialchars($art['excerpt']) ?>
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 border-t border-white/5 flex items-center justify-between">
                        <span class="text-xs text-on-surface-variant"><?= htmlspecialchars($art['date']) ?></span>
                        <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="btn-outline-gold px-4 py-1.5 rounded-lg text-xs font-bold">
                            పూర్తిగా చదవండి
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const incomeInput = document.getElementById('income-input');
    const calcBtn = document.getElementById('calc-budget-btn');

    function calculate() {
        const income = parseFloat(incomeInput.value) || 0;
        const needs = Math.round(income * 0.50);
        const wants = Math.round(income * 0.30);
        const savings = Math.round(income * 0.20);

        document.getElementById('needs-val').innerText = '₹' + needs.toLocaleString('en-IN');
        document.getElementById('wants-val').innerText = '₹' + wants.toLocaleString('en-IN');
        document.getElementById('savings-val').innerText = '₹' + savings.toLocaleString('en-IN');
    }

    if (calcBtn) {
        calcBtn.addEventListener('click', calculate);
        incomeInput.addEventListener('input', calculate);
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
