<?php
// footer.php - Reusable Footer Component for KK LifeWise
?>

<!-- Reusable Global Footer -->
<footer class="bg-surface-container-lowest border-t border-white/10 mt-20 pt-16 pb-28 md:pb-16 rounded-t-3xl shadow-2xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Brand Info -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-primary-container/20 border border-primary/40 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-lg">auto_awesome</span>
                    </div>
                    <span class="text-2xl font-bold text-primary font-sans">KK LifeWise</span>
                </div>
                <p class="text-on-surface-variant text-sm leading-relaxed">
                    ఆలోచన మార్చు • జీవితం మార్చు. తెలుగులో వ్యక్తిత్వ వికాసం, ఆర్థిక వివేకం, కెరీర్ ఎదుగుదల మరియు స్ఫూర్తిదాయక కథనాల వేదిక.
                </p>
                <p class="text-xs text-on-surface-variant/70 font-sans">
                    © <?= date('Y') ?> KK LifeWise. All rights reserved.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xs font-bold text-on-surface uppercase tracking-widest font-sans mb-4 text-primary">ముఖ్య లింకులు (LINKS)</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="<?= base_url('about.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">chevron_right</span>About (మా గురించి)</a></li>
                    <li><a href="<?= base_url('contact.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">chevron_right</span>Contact (సంప్రదించండి)</a></li>
                    <li><a href="<?= base_url('assessment.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">chevron_right</span>జీవన విశ్లేషణ (Assessment)</a></li>
                    <li><a href="<?= base_url('pdfs.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">chevron_right</span>Free PDFs (ఉచిత ఈ-బుక్స్)</a></li>
                </ul>
            </div>

            <!-- Content Categories -->
            <div>
                <h4 class="text-xs font-bold text-on-surface uppercase tracking-widest font-sans mb-4 text-primary">విభాగాలు (CATEGORIES)</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="<?= base_url('motivation.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-amber-400">bolt</span>Motivation (ప్రేరణ)</a></li>
                    <li><a href="<?= base_url('money.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-emerald-400">payments</span>Money (ఆర్థిక వివేకం)</a></li>
                    <li><a href="<?= base_url('career.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-blue-400">work</span>Career (కెరీర్ గైడెన్స్)</a></li>
                    <li><a href="<?= base_url('stories.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-yellow-400">auto_stories</span>Stories (స్ఫూర్తి కథలు)</a></li>
                    <li><a href="<?= base_url('books.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-indigo-400">menu_book</span>Books (పుస్తకాల సంగ్రహం)</a></li>
                    <li><a href="<?= base_url('videos.php') ?>" class="text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-red-400">smart_display</span>Videos (యూట్యూబ్ వీడియోలు)</a></li>
                </ul>
            </div>

            <!-- Social Channels & Community -->
            <div>
                <h4 class="text-xs font-bold text-on-surface uppercase tracking-widest font-sans mb-4 text-primary">సోషల్ & కమ్యూనిటీ (SOCIAL)</h4>
                <div class="space-y-3">
                    <a href="https://www.youtube.com/@KKMotivationTelugu" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-high border border-red-500/20 hover:border-red-500/50 hover:bg-red-950/20 transition-all text-decoration-none group">
                        <div class="w-9 h-9 rounded-lg bg-red-600/20 text-red-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-xl">smart_display</span>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-on-surface group-hover:text-red-400 font-sans">YouTube Channel</div>
                            <div class="text-xs text-on-surface-variant">@KKMotivationTelugu</div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-high border border-pink-500/20 hover:border-pink-500/50 hover:bg-pink-950/20 transition-all text-decoration-none group">
                        <div class="w-9 h-9 rounded-lg bg-pink-600/20 text-pink-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-xl">photo_camera</span>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-on-surface group-hover:text-pink-400 font-sans">Instagram Hub</div>
                            <div class="text-xs text-on-surface-variant">@kkmotivationhub</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-xs text-on-surface-variant gap-4">
            <div>
                ప్రతిరోజూ మీ ఆలోచనలను సానుకూలంగా మార్చే ఉత్తమ వేదిక • <strong>KK LifeWise</strong>
            </div>
            <div class="flex items-center gap-4 font-sans">
                <a href="<?= base_url('about.php') ?>" class="hover:text-primary transition-colors">About</a>
                <span>•</span>
                <a href="<?= base_url('contact.php') ?>" class="hover:text-primary transition-colors">Contact</a>
                <span>•</span>
                <a href="<?= base_url('assessment.php') ?>" class="hover:text-primary transition-colors">Life Assessment</a>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery 3.7.1 via CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Embedded Quotes and Search Data for Instant Client-side Reactivity -->
<script>
    const allQuotes = <?= json_encode($quotes, JSON_UNESCAPED_UNICODE) ?>;
    let currentQuoteIndex = 0;

    // Toast Notification Helper
    function showToast(message, icon = 'check_circle') {
        const toast = $('#toast-box');
        $('#toast-message').text(message);
        $('#toast-icon').text(icon);
        toast.removeClass('translate-y-20 opacity-0').addClass('translate-y-0 opacity-100');
        setTimeout(() => {
            toast.removeClass('translate-y-0 opacity-100').addClass('translate-y-20 opacity-0');
        }, 3000);
    }

    $(document).ready(function() {
        // Drawer toggle
        $('#drawer-toggle').on('click', function() {
            $('#side-drawer').removeClass('-translate-x-full');
            $('#drawer-backdrop').removeClass('hidden').removeClass('opacity-0').addClass('opacity-100');
            $('body').addClass('overflow-hidden');
        });

        function closeDrawer() {
            $('#side-drawer').addClass('-translate-x-full');
            $('#drawer-backdrop').removeClass('opacity-100').addClass('opacity-0');
            setTimeout(() => {
                $('#drawer-backdrop').addClass('hidden');
                $('body').removeClass('overflow-hidden');
            }, 300);
        }

        $('#drawer-close-btn, #drawer-backdrop').on('click', closeDrawer);

        // Search Modal Handlers
        $('#search-open-btn').on('click', function() {
            $('#search-modal').removeClass('hidden');
            $('#global-search-input').focus();
            $('body').addClass('overflow-hidden');
        });

        $('#search-close-btn').on('click', function() {
            $('#search-modal').addClass('hidden');
            $('body').removeClass('overflow-hidden');
        });

        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDrawer();
                $('#search-modal').addClass('hidden');
                $('#quote-modal').addClass('hidden');
                $('body').removeClass('overflow-hidden');
            }
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                $('#search-open-btn').click();
            }
        });

        // Live Search Handler
        let activeFilter = 'all';

        $('.search-filter-pill').on('click', function() {
            $('.search-filter-pill').removeClass('bg-primary-container/20 text-primary border border-primary/30').addClass('bg-surface-container-high text-on-surface-variant');
            $(this).addClass('bg-primary-container/20 text-primary border border-primary/30').removeClass('bg-surface-container-high text-on-surface-variant');
            activeFilter = $(this).data('filter');
            triggerSearch();
        });

        $('#global-search-input').on('input', function() {
            triggerSearch();
        });

        function triggerSearch() {
            const query = $('#global-search-input').val().trim().toLowerCase();
            const resultsBox = $('#search-results-box');

            if (!query) {
                resultsBox.html('<p class="text-sm text-center text-on-surface-variant py-8">శోధించడానికి కీవర్డ్ నమోదు చేయండి (ఉదా: శ్రీకృష్ణుడు, డబ్బు, పుస్తకాలు, లక్ష్యం)...</p>');
                return;
            }

            // Perform live AJAX search to search.php?q=...
            $.getJSON('<?= base_url('search.php?format=json&q=') ?>' + encodeURIComponent(query), function(data) {
                let filtered = data;
                if (activeFilter !== 'all') {
                    filtered = data.filter(item => item.type === activeFilter);
                }

                if (filtered.length === 0) {
                    resultsBox.html('<div class="text-center py-8 text-on-surface-variant"><span class="material-symbols-outlined text-4xl mb-2 text-primary/50">search_off</span><p>"' + query + '" కి సరిపోయే ఫలితాలు లభించలేదు.</p></div>');
                    return;
                }

                let html = '';
                filtered.forEach(item => {
                    html += `
                        <a href="${item.url}" class="block p-3.5 rounded-xl bg-surface-container-high/60 hover:bg-surface-container-high border border-white/5 hover:border-primary/40 transition-all text-decoration-none group">
                            <div class="flex items-center justify-between mb-1.5">
                                <span class="px-2 py-0.5 rounded text-[11px] font-bold ${item.badge_color}">${item.type_label}</span>
                                <span class="text-xs text-on-surface-variant">${item.category || ''}</span>
                            </div>
                            <h4 class="text-sm sm:text-base font-bold text-on-surface group-hover:text-primary transition-colors">${item.title}</h4>
                            <p class="text-xs text-on-surface-variant line-clamp-2 mt-1">${item.excerpt || ''}</p>
                        </a>
                    `;
                });
                resultsBox.html(html);
            }).fail(function() {
                resultsBox.html('<p class="text-sm text-center text-red-400 py-4">శోధనలో సమస్య ఏర్పడింది. దయచేసి మళ్లీ ప్రయత్నించండి.</p>');
            });
        }

        // Daily Quote Modal
        $('#daily-quote-btn').on('click', function() {
            $('#quote-modal').removeClass('hidden');
            $('body').addClass('overflow-hidden');
        });

        $('#quote-modal-close').on('click', function() {
            $('#quote-modal').addClass('hidden');
            $('body').removeClass('overflow-hidden');
        });

        $('#modal-next-quote-btn').on('click', function() {
            currentQuoteIndex = (currentQuoteIndex + 1) % allQuotes.length;
            const q = allQuotes[currentQuoteIndex];
            $('#modal-quote-text').text(q.quote);
            $('#modal-affirmation-text').text(q.affirmation);
        });

        $('#modal-copy-quote-btn').on('click', function() {
            const quote = $('#modal-quote-text').text().trim();
            const affirm = $('#modal-affirmation-text').text().trim();
            const textToCopy = `"${quote}"\n\nAffirmation: ${affirm}\n\n- KK LifeWise (https://kklifewise.com)`;
            navigator.clipboard.writeText(textToCopy).then(() => {
                showToast('కొటేషన్ కాపీ చేయబడింది!');
            });
        });

        $('#modal-share-quote-btn, .share-quote-btn').on('click', function() {
            const quote = $('#modal-quote-text').text().trim() || "నీ గమ్యం చేరుకునే వరకు అలుపెరుగక సాగిపో. ఓటమి నిన్ను భయపెట్టినా, నీ సంకల్పం దాన్ని జయించాలి.";
            const shareData = {
                title: 'KK LifeWise - నేటి ఆలోచన',
                text: `"${quote}" - KK LifeWise`,
                url: window.location.href
            };

            if (navigator.share) {
                navigator.share(shareData).catch(() => {});
            } else {
                navigator.clipboard.writeText(`"${quote}"\n\n${window.location.href}`).then(() => {
                    showToast('లింక్ & కొటేషన్ కాపీ చేయబడింది!');
                });
            }
        });
    });
</script>

</body>
</html>
