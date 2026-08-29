<?php
// stories.php - KK LifeWise Telugu Inspiring Stories Hub
$page_title = 'Stories (స్ఫూర్తి కథలు) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Inspiring Telugu moral stories, life lessons, zen wisdom, and real-life success tales in episodic format.';
$active_page = 'stories';

require_once __DIR__ . '/header.php';
$all_stories = get_stories();
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-yellow-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-500/20 text-yellow-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">auto_stories</span>
            Moral Wisdom & Inspiring Narratives
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Stories (స్ఫూర్తి కథలు)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            జీవిత సత్యాలను, నిశ్శబ్ద శ్రమ యొక్క గొప్పదనాన్ని మరియు మనోబలాన్ని చాటిచెప్పే అద్భుతమైన ఎపిసోడ్ కథనాలు.
        </p>
    </div>

    <!-- Stories List Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($all_stories as $st): ?>
            <div class="bg-surface-container rounded-3xl overflow-hidden border border-white/10 shadow-xl gold-glow flex flex-col justify-between">
                <div>
                    <div class="relative h-56 overflow-hidden">
                        <img src="<?= htmlspecialchars($st['image']) ?>" alt="<?= htmlspecialchars($st['title']) ?>" class="w-full h-full object-cover" loading="lazy">
                        <div class="absolute top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1 rounded-lg text-xs font-bold text-yellow-300 border border-white/10">
                            <?= count($st['episodes']) ?> Episodes Series
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-md px-2.5 py-1 rounded text-xs text-white">
                            <?= htmlspecialchars($st['read_time']) ?>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8">
                        <h2 class="text-xl sm:text-2xl font-bold text-on-surface mb-3 hover:text-primary transition-colors">
                            <a href="<?= base_url('story-detail.php?slug=' . $st['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                <?= htmlspecialchars($st['title']) ?>
                            </a>
                        </h2>

                        <div class="p-4 rounded-xl bg-surface-container-high/70 border-l-4 border-primary mb-6">
                            <span class="text-[11px] font-bold text-primary uppercase block mb-1">కథ నీతి (Moral Lesson)</span>
                            <p class="text-xs sm:text-sm text-on-surface-variant italic leading-relaxed">
                                "<?= htmlspecialchars($st['moral']) ?>"
                            </p>
                        </div>

                        <!-- Episode preview list -->
                        <div class="space-y-2 mb-4">
                            <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider block">ఎపిసోడ్స్ (Episodes):</span>
                            <?php foreach ($st['episodes'] as $ep): ?>
                                <a href="<?= base_url('story-detail.php?slug=' . $st['slug'] . '&episode=' . $ep['episode']) ?>" class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-xs text-on-surface-variant hover:text-primary transition-all text-decoration-none">
                                    <span class="font-medium"><?= htmlspecialchars($ep['title']) ?></span>
                                    <span class="material-symbols-outlined text-sm">play_arrow</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="px-6 sm:px-8 pb-6 pt-2 border-t border-white/5 flex items-center justify-between">
                    <span class="text-xs text-on-surface-variant"><?= htmlspecialchars($st['author']) ?></span>
                    <a href="<?= base_url('story-detail.php?slug=' . $st['slug']) ?>" class="btn-gold px-5 py-2 rounded-xl text-xs font-bold shadow-md">
                        పూర్తి కథ చదవండి
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
