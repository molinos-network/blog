
<div id="site-container">

<!-- Navbar goes here -->
		<nav>
			<div class="max-w-full mx-auto px-4 z-[1001] bg-white shadow-lg">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="https://molinos.network" class="flex items-center py-4 px-2 no-underline">
								<img src="img/logo_s.png" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-semibold text-gray-500 text-lg">molinos.network</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="https://docs.molinos.network/inicio" class="py-4 px-2 text-gray-500 font-semibold hover:text-[#2288bd] transition duration-300 no-underline">Documentación</a>
							<a href="https://blog.molinos.network" class="py-4 px-2 text-gray-500 font-semibold hover:text-[#2288bd] transition duration-300 no-underline">Blog</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 mr-4 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
              <a href="https://acceso.molinos.network" class="decoration-transparent">~</a>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-[#2288bd] "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="list-none p-0 m-1">
					<li class="border-b border-black"><a href="https://docs.molinos.network/inicio" class="block text-sm px-2 py-4 hover:bg-[#2288bd] transition duration-300 no-underline">Documentación</a></li>
					<li class="border-b border-black"><a href="https://blog.molinos.network" class="block text-sm px-2 py-4 hover:bg-[#2288bd] transition duration-300 no-underline">Blog</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>

<main>