<div class="my-card">
    <h2>Titolo: {{ $movie->title }}</h2>
    <h3>Titolo Inglese: {{ $movie->original_title }}</h3>
    <h4>Nazione di produzione: {{ $movie->nationality }}</h4>
    <h4>Data di rilascio: {{ $movie->date }}</h4>
    <span>Accoglienza dalla critica: {{ $movie->vote }}</span>
</div>
