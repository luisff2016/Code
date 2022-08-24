<h3>Ajuda (view)</h3>

<h2>
    <?php
    echo "Ajuda. Help!";
    ?>
</h2>
<ul>
    <li>
        <a href="{{ route('site.principal') }}">Principal</a>
    </li>
    <li>
        <a href="{{ route('site.sobrenos') }}">Sobre-nos</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}">Contato</a>
    </li>
    <li>
        <a href="{{ route('site.ajuda') }}">Ajuda</a>
    </li>
</ul>