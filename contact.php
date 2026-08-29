<?php
// contact.php - Contact KK LifeWise Team
$page_title = 'Contact Us (సంప్రదించండి) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Get in touch with KK LifeWise for inquiries, feedback, collaboration, and community support.';
$active_page = 'contact';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-primary/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 text-primary text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">mail</span>
            Get In Touch
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Contact Us (సంప్రదించండి)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-xl mx-auto leading-relaxed">
            మీ సలహాలు, సందేహాలు లేదా భాగస్వామ్యం కోసం మమ్మల్ని సంప్రదించండి. మీ ఫీడ్‌బ్యాక్ మాకు ఎంతో విలువైంది.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Contact Information Side -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-surface-container rounded-3xl p-6 sm:p-8 border border-white/10 shadow-xl space-y-6">
                <h2 class="text-xl font-bold text-primary font-sans">నేరుగా కలవండి</h2>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-primary-container/20 text-primary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">alternate_email</span>
                        </div>
                        <div>
                            <span class="text-xs text-on-surface-variant block">ఈమెయిల్ (Email)</span>
                            <span class="text-sm font-semibold text-on-surface">contact@kklifewise.com</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-400 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">smart_display</span>
                        </div>
                        <div>
                            <span class="text-xs text-on-surface-variant block">యూట్యూబ్ (YouTube)</span>
                            <a href="https://www.youtube.com/@KKMotivationTelugu" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-primary hover:underline">@KKMotivationTelugu</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-xl bg-pink-600/20 text-pink-400 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">photo_camera</span>
                        </div>
                        <div>
                            <span class="text-xs text-on-surface-variant block">ఇన్‌స్టాగ్రామ్ (Instagram)</span>
                            <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-primary hover:underline">@kkmotivationhub</a>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-white/5">
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        సాధారణంగా మేము 24-48 గంటల్లో మీ సందేశాలకు స్పందిస్తాము.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-7">
            <div class="bg-surface-container rounded-3xl p-6 sm:p-8 border border-white/10 shadow-xl">
                <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans mb-6">సందేశాన్ని పంపండి (Send a Message)</h2>

                <form id="contact-form" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-primary uppercase font-sans mb-1.5">మీ పూర్తి పేరు (Full Name)</label>
                        <input type="text" id="contact-name" required placeholder="ఉదా: రాజేష్ కుమార్" class="w-full bg-surface-container-high border border-white/15 rounded-xl py-3 px-4 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-primary uppercase font-sans mb-1.5">ఈమెయిల్ చిరునామా (Email Address)</label>
                        <input type="email" id="contact-email" required placeholder="name@example.com" class="w-full bg-surface-container-high border border-white/15 rounded-xl py-3 px-4 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-primary uppercase font-sans mb-1.5">విషయం (Subject)</label>
                        <select id="contact-subject" class="w-full bg-surface-container-high border border-white/15 rounded-xl py-3 px-4 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                            <option value="general">సాధారణ సమాచారం (General Query)</option>
                            <option value="feedback">ఫీడ్‌బ్యాక్ / సలహాలు (Feedback)</option>
                            <option value="collaboration">భాగస్వామ్యం (Collaboration / Video Request)</option>
                            <option value="counseling">జీవన విశ్లేషణ సహాయం (Life Guidance)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-primary uppercase font-sans mb-1.5">మీ సందేశం (Your Message)</label>
                        <textarea id="contact-msg" rows="4" required placeholder="మీ సందేశాన్ని ఇక్కడ స్పష్టంగా నమోదు చేయండి..." class="w-full bg-surface-container-high border border-white/15 rounded-xl py-3 px-4 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none"></textarea>
                    </div>

                    <button type="submit" id="submit-contact-btn" class="btn-gold w-full py-3.5 rounded-xl font-bold text-sm flex items-center justify-center gap-2 shadow-lg">
                        <span class="material-symbols-outlined text-lg">send</span>
                        సందేశం పంపండి (Submit Message)
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = document.getElementById('submit-contact-btn');
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> పంపబడుతోంది...';
            
            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> సందేశం అందింది!';
                form.reset();
                if (typeof showToast === 'function') {
                    showToast('ధన్యవాదాలు! మీ సందేశం విజయవంతంగా అందింది.');
                }
                setTimeout(() => {
                    btn.innerHTML = '<span class="material-symbols-outlined text-lg">send</span> సందేశం పంపండి (Submit Message)';
                }, 3000);
            }, 1000);
        });
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
