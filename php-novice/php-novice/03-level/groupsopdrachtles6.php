Voor de groepsopdracht:
8:20
Gokspel
Maak een hoger-lager-gelijk gokspelletje. De regels zijn: je krijgt een willekeurig getal tussen 0 en 10. De gebruiker moet raden of het volgende getal hoger, lager of gelijk is. Als de gebruiker het goed heeft krijgt hij een punt. Heeft hij het fout, dan krijgt hij een strafpunt. Bij 3 strafpunten heeft de gebruiker verloren. Zie de voorbeeldoutput hieronder.
```bash
$ php \hl.php
> Het huidige getal is 9. Hoger, lager of gelijk? (h/l/g)
> h
> Dat is correct! Je krijgt 1 punt.
> Je hebt 1 punten en 0 strafpunten.
> Het huidige getal is 10. Hoger, lager of gelijk? (h/l/g)
> h
> Incorrect. Je krijgt een strafpunt.
> Je hebt 1 punten en 1 strafpunten.
> Het huidige getal is 2. Hoger, lager of gelijk? (h/l/g)
> h
> Dat is correct! Je krijgt 1 punt.
> Je hebt 2 punten en 1 strafpunten.
> Het huidige getal is 4. Hoger, lager of gelijk? (h/l/g)
> h
>  .
> Je hebt 2 punten en 2 strafpunten.
> Het huidige getal is 2. Hoger, lager of gelijk? (h/l/g)
> g
> Incorrect. Je krijgt een strafpunt.
> Je hebt 2 punten en 3 strafpunten.
> Het laatste getal was 0. Game over.
```
Zorg dat de gebruiker niet afgerekend wordt op typfouten. Als er iets anders dan hoger, lager of gelijk wordt getypt, moet de gebruiker zijn input corrigeren voor het spel verder gaat.

<?php

