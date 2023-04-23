<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">	
			<h1><a href="U'sed.php">U's ED</a></h1>
		</div>
			<div class="flex-stretch">
			<input type="search" placeholder="Search" class="form-input">
			</div>
		<div class="flex-stretch"></div>
<nav class="flex-none nav">
		<ul class="container display-flex"> 
			<li class="flex-stretch"><a href="#">Favorites</a></li>
			<li class="flex-stretch"><a href="product_cart.php">Cart</a></li>
			<li class="flex-stretch"><a href="#">Oder Info</a></li>
			<li class="flex-stretch"><a href="#">Account</a></li>
		</ul>
	</nav>
 </div>
</header>

<script>
			const makeNav = (classes='') => {
				const links = ['home','store','about']
				document.write( `
		<div>
			<nav classes="${classes}">
				<ul>
					${links.reduce((r,o,i)=>{
						return r+`<li><a href="#">${o}</a></li>`;
					},'')}
				</ul>
			</nav>
		</div>`);
			}
		</script>