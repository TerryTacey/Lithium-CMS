
	<section>
		<header>
			<h1>{$page.title} by {$page.author}</h1>
		</h1>

		<article>
			{$page.content}
		</article>

		<footer>
			{$page.date_posted|date_format:"%b %e, %Y at %l:%M %p"}
		</footer>
	</section>
