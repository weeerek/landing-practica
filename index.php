<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElegantInteriors</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-800">

    <nav class="fixed top-0 w-full bg-white border-b border-gray-100 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <div class="flex items-center gap-2">
                <img src="img/logo.svg" alt="" class="w-6 h-6">
                <img src="img/ElegantInteriors.svg" alt="" class="h-5">
            </div>

            <ul class="hidden md:flex gap-8 text-sm text-black items-center">
                <li><a href="#" id="nav_home" class="hover:text-gray-500 transition">Home</a></li>
                <li><a href="#about" id="nav_about" class="hover:text-gray-500 transition">About</a></li>
                <li>
                    <a href="#resources" id="nav_resources" class="hover:text-gray-500 transition flex items-center gap-1">
                        Resources
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </li>
                <li><a href="#contact" id="nav_contact" class="hover:text-gray-500 transition">Contact</a></li>
            </ul>

            <div class="hidden md:flex items-center gap-3">
                <button onclick="toggleLang()" id="lang_btn"
                    class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-gray-400 transition text-xs font-bold">
                    RO
                </button>
                <a href="#" id="nav_login" class="border border-gray-300 text-black px-5 py-2 rounded-full text-sm font-medium hover:border-gray-400 transition">
                    Login
                </a>
                <a href="#contact" id="nav_started" class="bg-green-500 text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-green-600 transition">
                    Get started
                </a>
            </div>

            <button class="md:hidden flex flex-col gap-1.5 p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <span class="w-6 h-0.5 bg-black block"></span>
                <span class="w-6 h-0.5 bg-black block"></span>
                <span class="w-6 h-0.5 bg-black block"></span>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-4 flex flex-col gap-4">
            <a href="#" id="nav_home_mobile" class="text-sm text-black hover:text-gray-500">Home</a>
            <a href="#about" id="nav_about_mobile" class="text-sm text-black hover:text-gray-500">About</a>
            <a href="#resources" id="nav_resources_mobile" class="text-sm text-black hover:text-gray-500">Resources</a>
            <a href="#contact" id="nav_contact_mobile" class="text-sm text-black hover:text-gray-500">Contact</a>
            <div class="flex gap-3 pt-2">
                <a href="#" id="nav_login_mobile" class="border border-gray-300 text-black px-4 py-2 rounded-full text-sm">Login</a>
                <a href="#contact" id="nav_started_mobile" class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">Get started</a>
            </div>
            <button onclick="toggleLang()" id="lang_btn_mobile"
                class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-gray-400 transition text-xs font-bold">
                RO
            </button>
        </div>
    </nav>

    <section class="pt-32 pb-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 id="hero_title" class="text-3xl md:text-5xl font-bold text-black leading-tight mb-4">
                Sophisticated Designs<br>for Modern Living
            </h1>
            <p id="hero_sub1" class="text-gray-500 text-sm mb-1">Elegant Designs, Exceptional Results,</p>
            <p id="hero_sub2" class="text-gray-500 text-sm mb-8">Elevating Your Home's Aesthetic.</p>
            <a href="#contact" id="hero_btn" class="bg-green-500 text-white px-8 py-3 rounded-full font-medium hover:bg-green-600 transition inline-block mb-12">
                Get started →
            </a>

            <div class="hidden md:block relative w-full" style="height: 520px;">
                <div class="absolute right-0 top-0 w-7/12 h-96 rounded-2xl overflow-hidden" style="z-index: 2;">
                    <img src="img/img1.svg" alt="Interior 1" class="w-full h-full object-cover">
                </div>
                <div class="absolute left-0 bottom-0 w-7/12 h-96 rounded-2xl overflow-hidden" style="z-index: 1;">
                    <img src="img/img2.svg" alt="Interior 2" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:hidden flex flex-col gap-4">
                <img src="img/img1.svg" alt="Interior 1" class="w-full h-56 object-cover rounded-2xl">
                <img src="img/img2.svg" alt="Interior 2" class="w-full h-56 object-cover rounded-2xl">
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 id="test_title" class="text-2xl font-bold text-black mb-3">What our clients say</h2>
            <p id="test_sub" class="text-gray-400 text-sm mb-12">Our clients rave about the transformation of their spaces, highlighting our attention to detail and creative flair.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="flex flex-col items-center border border-gray-200 rounded-2xl p-8">
                    <img src="img/John Carter.svg" alt="John Carter" class="w-32 h-32 rounded-full object-cover mb-6">
                    <h4 class="font-bold text-gray-900 text-xl mb-3">John Carter</h4>
                    <p id="test1_text" class="text-gray-400 text-sm text-center leading-relaxed mb-6">
                        Our living room was completely transformed! The team captured our vision perfectly and exceeded our expectations.
                    </p>
                    <div class="flex gap-3 mt-auto">
                        <img src="img/icon1.svg" alt="">
                        <img src="img/icon2.svg" alt="">
                        <img src="img/icon3.svg" alt="">
                    </div>
                </div>

                <div class="flex flex-col items-center border border-gray-200 rounded-2xl p-8">
                    <img src="img/Sophie Moore.svg" alt="Sophie Moore" class="w-32 h-32 rounded-full object-cover mb-6">
                    <h4 class="font-bold text-gray-900 text-xl mb-3">Sophie Moore</h4>
                    <p id="test2_text" class="text-gray-400 text-sm text-center leading-relaxed mb-6">
                        Professional and creative! The design process was smooth, and the results are stunning. Highly recommend their services.
                    </p>
                    <div class="flex gap-3 mt-auto">
                        <img src="img/icon1.svg" alt="">
                        <img src="img/icon2.svg" alt="">
                        <img src="img/icon3.svg" alt="">
                    </div>
                </div>

                <div class="flex flex-col items-center border border-gray-200 rounded-2xl p-8">
                    <img src="img/Matt Cannon.svg" alt="Matt Cannon" class="w-32 h-32 rounded-full object-cover mb-6">
                    <h4 class="font-bold text-gray-900 text-xl mb-3">Matt Cannon</h4>
                    <p id="test3_text" class="text-gray-400 text-sm text-center leading-relaxed mb-6">
                        Their attention to detail and commitment to quality turned our house into a home we love. Outstanding work!
                    </p>
                    <div class="flex gap-3 mt-auto">
                        <img src="img/icon1.svg" alt="">
                        <img src="img/icon2.svg" alt="">
                        <img src="img/icon3.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="resources" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 id="serv_title" class="text-3xl font-bold text-black mb-3">Our Services</h2>
            <p id="serv_sub" class="text-gray-400 text-sm mb-12">We offer bespoke interior design solutions tailored to your needs, ensuring every space is both beautiful and functional.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="rounded-2xl overflow-hidden text-left border border-gray-200">
                    <img src="img/img3.svg" alt="Living Room" class="w-full h-72 object-cover">
                    <div class="p-5">
                        <p id="serv1_text" class="text-gray-500 text-sm leading-relaxed">
                            Discover our curated collection of chairs and furniture, designed to blend comfort with exquisite style. Each piece is crafted with meticulous attention to detail.
                        </p>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden text-left border border-gray-200">
                    <img src="img/img4.svg" alt="Kitchen" class="w-full h-72 object-cover">
                    <div class="p-5">
                        <p id="serv2_text" class="text-gray-500 text-sm leading-relaxed">
                            Explore our elegant range of table furniture, perfectly combining form and function. From dining tables to coffee tables, each piece enhances your space.
                        </p>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden text-left border border-gray-200">
                    <img src="img/img5.svg" alt="Bedroom" class="w-full h-72 object-cover">
                    <div class="p-5">
                        <p id="serv3_text" class="text-gray-500 text-sm leading-relaxed">
                            Transform your bedroom with our stylish bed furniture, designed for both comfort and sophistication with durable materials and elegant finishes.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <p id="demo_label" class="text-gray-400 text-xs tracking-widest uppercase mb-2">Watch Our Demo for Confirmation</p>
                <h2 id="demo_title" class="text-2xl md:text-3xl font-bold mb-3" style="color: #4a4580;">Based on our demo video, discover our services in action.</h2>
                <p id="demo_sub" class="text-gray-400 text-sm">Our plan reflects the quality and craftsmanship we deliver.</p>
            </div>

            <div class="flex flex-col md:flex-row gap-6 items-stretch">

                <div class="flex-1 relative rounded-2xl overflow-hidden" style="min-height: 300px;">
                    <img src="img/img3.svg" alt="Demo" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white bg-opacity-80 rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition">
                            <span class="text-gray-700 text-2xl ml-1">▶</span>
                        </div>
                    </div>
                </div>

                <div class="flex-1 border border-gray-200 rounded-2xl p-8 md:p-10 flex flex-col justify-center items-start">
                    <p class="text-3xl md:text-4xl font-bold mb-6 text-left" style="color: #9b9bc4;">facebook</p>
                    <p id="demo_text" class="text-gray-600 text-sm leading-relaxed mb-6 text-left">
                        Watch our demo video to experience our design solutions firsthand. See how we bring creativity and precision to each project. This video showcases our commitment to quality and attention to detail. Get a clear understanding of how our services can transform your space.
                    </p>
                    <p id="demo_name" class="font-bold text-gray-800 text-left">John Carter</p>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row gap-12 items-start">

            <div class="flex-1">
                <p id="contact_label" class="text-gray-400 text-xs tracking-widest uppercase mb-3">Contact Us</p>
                <h2 id="contact_title" class="text-2xl md:text-3xl font-bold mb-4" style="color: #4a4580;">
                    Ready to start your<br>design journey?
                </h2>
                <p id="contact_sub" class="text-gray-400 text-sm leading-relaxed mb-8">
                    Contact us today to discuss your ideas and needs. Our team is here to provide personalized solutions and expert advice. Let's bring your vision to life with a consultation tailored just for you.
                </p>

                <?php if (isset($_GET['success'])): ?>
                    <div class="bg-green-100 text-green-700 px-4 py-3 rounded-xl text-sm mb-4">
                        Mesajul a fost trimis cu succes! Te vom contacta în curând.
                    </div>
                <?php elseif (isset($_GET['error'])): ?>
                    <div class="bg-red-100 text-red-700 px-4 py-3 rounded-xl text-sm mb-4">
                        A apărut o eroare. Te rugăm să încerci din nou.
                    </div>
                <?php endif; ?>

                <form action="send.php" method="POST" class="flex flex-col gap-4">
                    <input type="text" name="name" id="contact_name" required placeholder="Name"
                        class="w-full px-4 py-3 rounded-xl text-sm focus:outline-none transition"
                        style="background-color: #f0f0f8; border: none;">
                    <input type="email" name="email" id="contact_email" required placeholder="Email"
                        class="w-full px-4 py-3 rounded-xl text-sm focus:outline-none transition"
                        style="background-color: #f0f0f8; border: none;">
                    <textarea name="message" id="contact_msg" required rows="4" placeholder="Please type your message here..."
                        class="w-full px-4 py-3 rounded-xl text-sm focus:outline-none transition resize-none"
                        style="background-color: #f0f0f8; border: none;"></textarea>
                    <div>
                        <button type="submit" id="contact_btn"
                            class="text-white px-8 py-3 rounded-full font-medium transition"
                            style="background-color: #5c5a9e;">
                            Send message
                        </button>
                    </div>
                </form>
            </div>

            <div class="hidden md:block flex-1 relative" style="min-height: 580px;">
                <img src="img/img7.svg" alt="Background"
                     class="absolute rounded-2xl object-cover"
                     style="width: 75%; height: 110%; top: -8%; right: -200px; z-index: 1;">
                <img src="img/img6.svg" alt="Interior"
                     class="absolute rounded-2xl object-cover"
                     style="width: 100%; height: 85%; top: 5%; left: 0; z-index: 2;">
            </div>

            <div class="md:hidden w-full">
                <img src="img/img6.svg" alt="Interior" class="w-full h-64 object-cover rounded-2xl">
            </div>

        </div>
    </section>

    <footer class="bg-white border-t border-gray-100 py-8">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="img/logo.svg" alt="" class="w-6 h-6">
                <img src="img/ElegantInteriors.svg" alt="" class="h-5">
            </div>
            <p id="footer_copy" class="text-gray-400 text-sm text-center">© 2025 ElegantInteriors. All rights reserved.</p>
        </div>
    </footer>

    <a href="admin.php" id="admin_btn"
       class="fixed bottom-6 right-6 bg-white border border-gray-200 text-gray-500 px-4 py-2 rounded-full text-sm font-medium shadow-md hover:shadow-lg hover:text-gray-800 transition z-50">
        🔒 Admin
    </a>

<script>
const translations = {
    en: {
        nav_home: "Home", nav_about: "About", nav_resources: "Resources",
        nav_contact: "Contact", nav_login: "Login", nav_started: "Get started",
        nav_home_mobile: "Home", nav_about_mobile: "About",
        nav_resources_mobile: "Resources", nav_contact_mobile: "Contact",
        nav_login_mobile: "Login", nav_started_mobile: "Get started",
        hero_title: "Sophisticated Designs<br>for Modern Living",
        hero_sub1: "Elegant Designs, Exceptional Results,",
        hero_sub2: "Elevating Your Home's Aesthetic.",
        hero_btn: "Get started →",
        test_title: "What our clients say",
        test_sub: "Our clients rave about the transformation of their spaces, highlighting our attention to detail and creative flair.",
        test1_text: "Our living room was completely transformed! The team captured our vision perfectly and exceeded our expectations.",
        test2_text: "Professional and creative! The design process was smooth, and the results are stunning. Highly recommend their services.",
        test3_text: "Their attention to detail and commitment to quality turned our house into a home we love. Outstanding work!",
        serv_title: "Our Services",
        serv_sub: "We offer bespoke interior design solutions tailored to your needs, ensuring every space is both beautiful and functional.",
        serv1_text: "Discover our curated collection of chairs and furniture, designed to blend comfort with exquisite style. Each piece is crafted with meticulous attention to detail.",
        serv2_text: "Explore our elegant range of table furniture, perfectly combining form and function. From dining tables to coffee tables, each piece enhances your space.",
        serv3_text: "Transform your bedroom with our stylish bed furniture, designed for both comfort and sophistication with durable materials and elegant finishes.",
        demo_label: "Watch Our Demo for Confirmation",
        demo_title: "Based on our demo video, discover our services in action.",
        demo_sub: "Our plan reflects the quality and craftsmanship we deliver.",
        demo_text: "Watch our demo video to experience our design solutions firsthand. See how we bring creativity and precision to each project. This video showcases our commitment to quality and attention to detail. Get a clear understanding of how our services can transform your space.",
        demo_name: "John Carter",
        contact_label: "Contact Us",
        contact_title: "Ready to start your<br>design journey?",
        contact_sub: "Contact us today to discuss your ideas and needs. Our team is here to provide personalized solutions and expert advice. Let's bring your vision to life with a consultation tailored just for you.",
        contact_name: "Name", contact_email: "Email",
        contact_msg: "Please type your message here...",
        contact_btn: "Send message",
        footer_copy: "© 2025 ElegantInteriors. All rights reserved.",
        admin_btn: "🔒 Admin", lang_btn: "RO", lang_btn_mobile: "RO"
    },
    ro: {
        nav_home: "Acasă", nav_about: "Despre", nav_resources: "Servicii",
        nav_contact: "Contact", nav_login: "Autentificare", nav_started: "Începe acum",
        nav_home_mobile: "Acasă", nav_about_mobile: "Despre",
        nav_resources_mobile: "Servicii", nav_contact_mobile: "Contact",
        nav_login_mobile: "Autentificare", nav_started_mobile: "Începe acum",
        hero_title: "Designuri Sofisticate<br>pentru Locuințe Moderne",
        hero_sub1: "Designuri Elegante, Rezultate Excepționale,",
        hero_sub2: "Ridicând Estetica Casei Tale.",
        hero_btn: "Începe acum →",
        test_title: "Ce spun clienții noștri",
        test_sub: "Clienții noștri sunt entuziasmați de transformarea spațiilor lor, evidențiind atenția noastră la detalii și creativitate.",
        test1_text: "Livingul nostru a fost complet transformat! Echipa a înțeles perfect viziunea noastră și a depășit toate așteptările.",
        test2_text: "Profesioniști și creativi! Procesul de design a fost fluid, iar rezultatele sunt uimitoare. Recomand cu căldură serviciile lor.",
        test3_text: "Atenția lor la detalii și angajamentul față de calitate au transformat casa noastră într-un cămin pe care îl iubim. Muncă remarcabilă!",
        serv_title: "Serviciile Noastre",
        serv_sub: "Oferim soluții de design interior personalizate, adaptate nevoilor tale, asigurând că fiecare spațiu este atât frumos cât și funcțional.",
        serv1_text: "Descoperă colecția noastră de scaune și mobilier, conceput să îmbine confortul cu stilul rafinat. Fiecare piesă este creată cu atenție meticuloasă la detalii.",
        serv2_text: "Explorează gama noastră elegantă de mobilier pentru sufragerie, combinând perfect forma cu funcționalitatea. De la mese de dining până la măsuțe de cafea.",
        serv3_text: "Transformă dormitorul tău cu mobilierul nostru stilat, conceput atât pentru confort cât și pentru sofisticare, cu materiale durabile și finisaje elegante.",
        demo_label: "Urmărește Demo-ul Nostru",
        demo_title: "Descoperă serviciile noastre în acțiune prin videoclipul demonstrativ.",
        demo_sub: "Planul nostru reflectă calitatea și măiestria pe care o oferim.",
        demo_text: "Urmărește videoclipul nostru demo pentru a experimenta soluțiile noastre de design. Vezi cum aducem creativitate și precizie în fiecare proiect. Acest video prezintă angajamentul nostru față de calitate și atenția la detalii.",
        demo_name: "Ion Popescu",
        contact_label: "Contactează-ne",
        contact_title: "Gata să începi<br>călătoria ta în design?",
        contact_sub: "Contactează-ne astăzi pentru a discuta ideile și nevoile tale. Echipa noastră este pregătită să ofere soluții personalizate și sfaturi de specialitate.",
        contact_name: "Nume", contact_email: "Email",
        contact_msg: "Scrie mesajul tău aici...",
        contact_btn: "Trimite mesajul",
        footer_copy: "© 2025 ElegantInteriors. Toate drepturile rezervate.",
        admin_btn: "🔒 Admin", lang_btn: "EN", lang_btn_mobile: "EN"
    }
};

let currentLang = localStorage.getItem('lang') || 'en';

function applyLang(lang) {
    const t = translations[lang];
    const ids = ['nav_home','nav_about','nav_resources','nav_contact','nav_login',
        'nav_started','nav_home_mobile','nav_about_mobile','nav_resources_mobile',
        'nav_contact_mobile','nav_login_mobile','nav_started_mobile','hero_title',
        'hero_sub1','hero_sub2','hero_btn','test_title','test_sub','test1_text',
        'test2_text','test3_text','serv_title','serv_sub','serv1_text','serv2_text',
        'serv3_text','demo_label','demo_title','demo_sub','demo_text','demo_name',
        'contact_label','contact_title','contact_sub','contact_btn','footer_copy',
        'admin_btn','lang_btn','lang_btn_mobile'];

    ids.forEach(id => {
        const el = document.getElementById(id);
        if (el) el.innerHTML = t[id];
    });

    document.getElementById('contact_name').placeholder = t.contact_name;
    document.getElementById('contact_email').placeholder = t.contact_email;
    document.getElementById('contact_msg').placeholder = t.contact_msg;

    currentLang = lang;
    localStorage.setItem('lang', lang);
}

function toggleLang() {
    applyLang(currentLang === 'en' ? 'ro' : 'en');
}

applyLang(currentLang);
</script>

</body>
</html>