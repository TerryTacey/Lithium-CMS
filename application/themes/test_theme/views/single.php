

	<section>
		<header>
			<h1>{$article.title} by {$article.author}</h1>
		</header>

		<article>
			<p>{$article.content}</p>
		</article>

		<footer>
			<p><small>Posted {$article.date_posted|date_format:"%b %e, %Y at %l:%M %p"} in {$article.category}</small></p>
		</footer>
	</section>
