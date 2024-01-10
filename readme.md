# PHP Iscrizione Newsletter

## Milestone 1

Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.
Controllare che la mail  passata in GET sia ben formata e contenga un punto e una chiocciola.
Usare un alert di Bootstrap (il componente HTML/CSS, non alert JS) per mostrare il messaggio di:
- successo: la mail contiene un punto e una chiocciola;
- errore: la mail NON contiene un punto e una chiocciola;

## Milestone 2

Spostare la logica del programma dentro _functions.php_ utilizzando la direttiva _include_

## Bonus

Invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una _thank you_ page dove usiamo la session per mostrare anche l'indirizzo email con cui ci siamo "registrati".