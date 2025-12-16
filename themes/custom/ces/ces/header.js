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

              </div>
            </nav></header>
  `;

  // Insert the header at the beginning of the body
  document.body.insertAdjacentHTML('afterbegin', headerContent);
});
