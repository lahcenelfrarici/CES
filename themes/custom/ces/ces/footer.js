document.addEventListener('DOMContentLoaded', function () {
  // Create header HTML content
  const footerContent = `
     <footer class="relative bg-slate-950 border-t border-white/10 py-16">
              <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-12">
                  <div>
                    <div
                      class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-sparkles w-7 h-7 text-white" aria-hidden="true">
                        <path
                          d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                        </path>
                        <path d="M20 2v4"></path>
                        <path d="M22 4h-4"></path>
                        <circle cx="4" cy="20" r="2"></circle>
                      </svg></div>
                    <p class="text-gray-400 text-sm">Excellence en équipement professionnel</p>
                  </div>
                  <div>
                    <h4 class="text-white mb-4">Navigation</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                      <li><button class="hover:text-cyan-400 transition-colors">Accueil</button></li>
                      <li><button class="hover:text-cyan-400 transition-colors">Qui sommes-nous</button></li>
                      <li><a href="#services" class="hover:text-cyan-400 transition-colors">Services</a></li>
                      <li><a href="#news" class="hover:text-cyan-400 transition-colors">Actualités</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4 class="text-white mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                      <li>Casablanca, Maroc</li>
                      <li>contact@ces.ma</li>
                    </ul>
                  </div>
                  <div>
                    <h4 class="text-white mb-4">Suivez-nous</h4>
                    <div class="flex gap-3">
                      <div
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors">
                        F</div>
                      <div
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors">
                        T</div>
                      <div
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors">
                        I</div>
                      <div
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors">
                        L</div>
                    </div>
                  </div>
                </div>
                <div class="border-t border-white/10 pt-8 text-center text-gray-500 text-sm">© 2024 CES - Tous droits
                  réservés</div>
              </div>
            </footer>
  `;

  // Insert the header at the beginning of the body
  document.body.insertAdjacentHTML('afterbegin', footerContent);
});
