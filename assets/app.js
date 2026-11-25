import './stimulus_bootstrap.js';
import './styles/app.css';

const ALFRED_QUOTES = [
    "« Bat-Signal activé ! J'ai mis le Bat-Ordinateur sous tension et préparé votre thé Earl Grey, Maître Bruce. »",
    "« Certains hommes veulent juste voir le monde brûler… Moi, je veille à ce que le rôti ne brûle pas. »",
    "« Je me permets de rappeler à Monsieur que la Batmobile n'est pas couverte par l'assurance tous risques. »",
    "« Protocole Batcave enclenché : portes blindées verrouillées, fréquence du Commissaire Gordon sur écoute. »"
];

let toastTimeout = null;

function showAlfredToast(message) {
    const toast = document.getElementById('alfred-toast');
    const toastText = document.getElementById('alfred-toast-text');
    if (!toast || !toastText) return;

    toastText.textContent = message;
    toast.classList.add('show');

    if (toastTimeout) clearTimeout(toastTimeout);
    toastTimeout = setTimeout(() => {
        toast.classList.remove('show');
    }, 4500);
}

function initWayneManorApp() {
    // 1. Persistance du Mode Batcave (Bat-Signal)
    if (sessionStorage.getItem('batcave_mode') === '1') {
        document.body.classList.add('batcave-mode');
    }

    const toggleBatSignal = () => {
        const isActive = document.body.classList.toggle('batcave-mode');
        sessionStorage.setItem('batcave_mode', isActive ? '1' : '0');
        if (isActive) {
            const quote = ALFRED_QUOTES[Math.floor(Math.random() * ALFRED_QUOTES.length)];
            showAlfredToast(quote);
        } else {
            showAlfredToast("« Retour au protocole de jour du Manoir Wayne. »");
        }
    };

    const batBtn = document.getElementById('bat-signal-toggle');
    if (batBtn && !batBtn.dataset.bound) {
        batBtn.dataset.bound = '1';
        batBtn.addEventListener('click', toggleBatSignal);
    }

    const contactBatBtn = document.getElementById('contact-batsignal-btn');
    if (contactBatBtn && !contactBatBtn.dataset.bound) {
        contactBatBtn.dataset.bound = '1';
        contactBatBtn.addEventListener('click', toggleBatSignal);
    }

    // 2. Header Scroll & Menu Mobile
    const header = document.getElementById('main-header');
    const onScroll = () => {
        if (!header) return;
        header.classList.toggle('scrolled', window.scrollY > 30);
    };
    window.removeEventListener('scroll', onScroll);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    const mobileBtn = document.getElementById('mobile-menu-btn');
    const navMenu = document.getElementById('nav-menu');
    if (mobileBtn && navMenu && !mobileBtn.dataset.bound) {
        mobileBtn.dataset.bound = '1';
        mobileBtn.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    }

    // 3. Filtrage des Prestations (Tabs)
    const tabBtns = document.querySelectorAll('.service-tab-btn');
    const serviceCards = document.querySelectorAll('#services-grid .service-card');
    tabBtns.forEach((btn) => {
        if (btn.dataset.bound) return;
        btn.dataset.bound = '1';
        btn.addEventListener('click', () => {
            tabBtns.forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.dataset.filter;

            serviceCards.forEach((card) => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 4. Simulateur de Bat-Intervention
    const missionChips = document.querySelectorAll('.sim-group[data-group="mission"] .sim-chip');
    const extraChips = document.querySelectorAll('.sim-group[data-group="extra"] .sim-chip');
    const locSelect = document.getElementById('sim-location');
    const durSelect = document.getElementById('sim-duration');

    const updateSimulator = () => {
        const activeMission = document.querySelector('.sim-group[data-group="mission"] .sim-chip.selected');
        if (!activeMission || !locSelect || !durSelect) return;

        const baseRate = parseFloat(activeMission.dataset.rate || '850');
        const missionLabel = activeMission.dataset.label || activeMission.textContent.trim();

        const locOption = locSelect.options[locSelect.selectedIndex];
        const locMult = parseFloat(locOption.dataset.mult || '1');
        const locLabel = locOption.dataset.label || locOption.textContent.trim();

        const durOption = durSelect.options[durSelect.selectedIndex];
        const days = parseInt(durSelect.value || '7', 10);
        const durLabel = durOption.dataset.label || durOption.textContent.trim();

        let extraRatePerDay = 0;
        const selectedExtras = [];
        extraChips.forEach((chip) => {
            if (chip.classList.contains('selected')) {
                extraRatePerDay += parseFloat(chip.dataset.rate || '0');
                selectedExtras.push(chip.dataset.label || chip.textContent.trim());
            }
        });

        const total = Math.round((baseRate * locMult + extraRatePerDay) * days);

        const sumMission = document.getElementById('sum-mission');
        const sumLocation = document.getElementById('sum-location');
        const sumDuration = document.getElementById('sum-duration');
        const sumExtras = document.getElementById('sum-extras');
        const sumPrice = document.getElementById('sum-price');
        const bookBtn = document.getElementById('sim-book-btn');

        if (sumMission) sumMission.textContent = missionLabel;
        if (sumLocation) sumLocation.textContent = locLabel;
        if (sumDuration) sumDuration.textContent = durLabel;
        if (sumExtras) {
            sumExtras.textContent = selectedExtras.length > 0
                ? selectedExtras.join(' + ')
                : 'Flegme Britannique Inclus';
        }
        if (sumPrice) {
            sumPrice.textContent = `~ ${total.toLocaleString('fr-FR')} € HT`;
        }
        if (bookBtn) {
            const sujet = `${missionLabel} (${durLabel} - ${locLabel}) — Budget estimé : ${total.toLocaleString('fr-FR')} € HT`;
            bookBtn.href = `/contact?sujet=${encodeURIComponent(sujet)}`;
        }
    };

    missionChips.forEach((chip) => {
        if (chip.dataset.bound) return;
        chip.dataset.bound = '1';
        chip.addEventListener('click', () => {
            missionChips.forEach((c) => c.classList.remove('selected'));
            chip.classList.add('selected');
            updateSimulator();
        });
    });

    extraChips.forEach((chip) => {
        if (chip.dataset.bound) return;
        chip.dataset.bound = '1';
        chip.addEventListener('click', () => {
            chip.classList.toggle('selected');
            updateSimulator();
        });
    });

    if (locSelect && !locSelect.dataset.bound) {
        locSelect.dataset.bound = '1';
        locSelect.addEventListener('change', updateSimulator);
    }
    if (durSelect && !durSelect.dataset.bound) {
        durSelect.dataset.bound = '1';
        durSelect.addEventListener('change', updateSimulator);
    }
    updateSimulator();

    // 5. Boutons de Scénarios Rapides (Page Contact - Démo Étudiants)
    const presetChips = document.querySelectorAll('.preset-chip');
    presetChips.forEach((chip) => {
        if (chip.dataset.bound) return;
        chip.dataset.bound = '1';
        chip.addEventListener('click', () => {
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const msgInput = document.getElementById('message');

            if (nameInput) nameInput.value = chip.dataset.name || '';
            if (emailInput) emailInput.value = chip.dataset.email || '';
            if (msgInput) msgInput.value = chip.dataset.message || '';

            showAlfredToast(`Scénario « ${chip.textContent.trim()} » chargé dans le terminal !`);
        });
    });

    // 6. Modales (vCard & Charte NDA)
    const vcardModal = document.getElementById('vcard-modal');
    const brochureModal = document.getElementById('brochure-modal');

    document.querySelectorAll('.btn-open-vcard').forEach((btn) => {
        if (btn.dataset.bound) return;
        btn.dataset.bound = '1';
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (vcardModal) vcardModal.classList.add('active');
        });
    });

    document.querySelectorAll('.btn-open-brochure').forEach((btn) => {
        if (btn.dataset.bound) return;
        btn.dataset.bound = '1';
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (brochureModal) brochureModal.classList.add('active');
        });
    });

    document.querySelectorAll('[data-close-modal]').forEach((btn) => {
        if (btn.dataset.bound) return;
        btn.dataset.bound = '1';
        btn.addEventListener('click', () => {
            document.querySelectorAll('.modal-overlay.active').forEach((m) => m.classList.remove('active'));
        });
    });

    document.querySelectorAll('.modal-overlay').forEach((overlay) => {
        if (overlay.dataset.bound) return;
        overlay.dataset.bound = '1';
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) overlay.classList.remove('active');
        });
    });
}

document.addEventListener('DOMContentLoaded', initWayneManorApp);
document.addEventListener('turbo:load', initWayneManorApp);
