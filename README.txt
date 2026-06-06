ELEGANT INTERIORS - Landing Page

DESCRIERE PROIECT
-----------------
ElegantInteriors este o pagina web de tip landing page creata
pentru o agentie de design interior. Pagina prezinta serviciile
agentiei, testimoniale ale clientilor si un formular de contact
functional cu salvare in baza de date.

TEHNOLOGII FOLOSITE
-------------------
- PHP 8.2 (procesare backend + conexiune baza de date)
- MySQL (stocare mesaje din formular)
- HTML5 (structura paginii)
- TailwindCSS via CDN (stilizare si responsivitate)
- XAMPP (server local - Apache + MySQL)

STRUCTURA FISIERE
-----------------
landing-practica/
├── index.php       - Pagina principala (landing page)
├── send.php        - Procesare si salvare formular
├── admin.php       - Panou administrare mesaje
├── db.php          - Conexiune baza de date
├── img/            - Imagini si iconite
└── README.txt      - Documentatie proiect

BAZA DE DATE
------------
Nume: landing_practica
Tabel: messages
Coloane:
  - id          INT, AUTO_INCREMENT, PRIMARY KEY
  - name        VARCHAR(255)
  - email       VARCHAR(255)
  - message     TEXT
  - created_at  TIMESTAMP, DEFAULT CURRENT_TIMESTAMP

PASI DE RULARE
--------------
1. Instaleaza XAMPP
2. Porneste Apache si MySQL din XAMPP Control Panel
3. Copiaza folderul landing-practica in C:\xampp\htdocs\
4. Deschide phpMyAdmin: localhost/phpmyadmin
5. Creaza baza de date: landing_practica
6. Creaza tabelul messages cu coloanele de mai sus
7. Deschide in browser: localhost/landing-practica
8. Pagina de admin: localhost/landing-practica/admin.php

FUNCTIONALITATI
---------------
- Navbar responsive cu meniu hamburger pe mobil
- Sectiune Hero cu imagini suprapuse
- Sectiune testimoniale cu carduri
- Sectiune servicii cu imagini si descrieri
- Sectiune demo video
- Formular de contact cu validare si salvare in MySQL
- Pagina de administrare pentru vizualizarea mesajelor
- Buton admin flotant in coltul din dreapta jos
- Design full responsive (mobil, tableta, desktop)

Proiect realizat in cadrul stagiului de practica - 2026