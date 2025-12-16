document.addEventListener('DOMContentLoaded', function () {
  // Create header HTML content
  const headerContent = `
<header>
        <nav class="fixed top-6 z-50 transition-all duration-300 left-0 right-0 px-[5%]" style="transform: none;">
              <div
                class="bg-transparent max-w-7xl mx-auto flex items-center justify-between transition-all duration-300">
       <a href="/"
   class="flex items-center gap-3"
   style="transform: none;">
  <img
    src="./assets/images/logo.png"
    alt="CES Logo"
    class="transition-all duration-300 h-16">
</a>

                <div class="hidden md:flex items-center gap-8">

  <a href="/"
     class="text-sm relative group text-cyan-400 transition-colors">
    Accueil
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-full"></span>
  </a>

  <a href="/qui-sommes-nous"
     class="text-sm relative group text-white/70 hover:text-white transition-colors">
    Qui sommes-nous
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
  </a>

  <a href="/nos-marques"
     class="text-sm relative group text-white/70 hover:text-white transition-colors">
    Nos marques
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
  </a>

  <!-- Dropdown trigger -->
  <div class="relative">
    <a href="/produits"
       class="text-sm relative group flex items-center gap-1 text-white/70 hover:text-white transition-colors">
      Produits
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2">
        <path d="m6 9 6 6 6-6"></path>
      </svg>
      <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
    </a>
  </div>

  <a href="/showroom"
     class="text-sm relative group text-white/70 hover:text-white transition-colors">
    Showroom
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
  </a>

  <a href="/references"
     class="text-sm relative group text-white/70 hover:text-white transition-colors">
    Références
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
  </a>

  <a href="/actualites"
     class="text-sm relative group text-white/70 hover:text-white transition-colors">
    Actualités
    <span class="absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full"></span>
  </a>

  <a href="/contact"
     class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-6 py-2 rounded-full text-sm">
    Contact
  </a>

</div>
<button id="click_mobile" class="md:hidden text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6" aria-hidden="true"><path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path></svg></button>
                        <div class="show__menu hidden fixed top-24 left-4 right-4 z-40 bg-slate-900/95 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-6 md:hidden" style="opacity: 1; transform: none;"><div class="flex flex-col gap-4"><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Accueil</button><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Qui sommes-nous</button><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Nos marques</button><div><button class="w-full text-left py-3 px-4 rounded-xl transition-colors flex items-center justify-between bg-cyan-500/20 text-cyan-400">Produits<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down w-4 h-4 transition-transform" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button><div class="ml-4 mt-2 space-y-2"><button class="w-full text-left py-2 px-4 rounded-xl transition-colors text-sm text-white/70 hover:bg-white/5 hover:text-white">Matériel neuf</button><button class="w-full text-left py-2 px-4 rounded-xl transition-colors text-sm text-white/70 hover:bg-white/5 hover:text-white">Matériel rénové</button></div></div><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Showroom</button><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Références</button><button class="text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5">Actualités</button><a href="#contact" class="text-white hover:bg-white/5 py-3 px-4 rounded-xl transition-colors">Contact</a><button class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-6 py-3 rounded-full mt-2">Commencer</button></div></div>
             
</div>
              
            </nav>
            

            </header>
  `;

  // Insert the header at the beginning of the body
  document.body.insertAdjacentHTML('afterbegin', headerContent);
});
