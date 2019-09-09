<?php 

!is_array($request) - ova funkcija provjera da varijabla $request nije niz

count($request) - broji sve elemente niza

empty($request[1]) - ispituje da li je element [1] iz niza varijable $request prazan, prazan string, 0 ili ne postoji

in_array($method, ['POST', 'PUT'] - ova fukcija pretražuje niz i traži u njemu vrijednosti parametara, u ovom slučaju da li POST i PUT postoje u nizu $method

error_log() -šalje poruku o greški na serverov error log ili u neku drugu datoteku

!file_exists($dbFile) - provjerava da $dbFile ne postoji kao datoteka ili direktorijum

print_r($input) - ispisuje informacije o varijabli $input

json_decode() - koristi se da dekodira JSON string i konvertuje kodiran string u PHP varijable

file_get_contents() - koristi se da očita datoteka kao string 

file_put_contents() - provjerava da li postoji datoteka u kojoj hoće da ispiše string, ako postoji ispiše ga, ako ne postoji doda novu datoteku

json_encode() - vraća PHP objekat ili string prikazan kao JSON date vrijednosti

http_response_code() - dobija ili postavlja kod statusa HTTP odgovora

$_SERVER - globalna varijabla u PHP koja sadrži informacije o zaglavljima, putanjama i lokacijama skripti, podatke o serveru, prikazuje koji klijent je poslao zahtjev

$_GET - može služiti za prikupljanje podataka koji su poslati preko HTML forme metodom GET i za prikupljanje podataka poslatih u URL. Podaci poslati metodom GET vide se u URL, tako da nije bezbjedno slati password ili bilo kakve osjetljive informacije, imaju limit, može se poslati samo do 2048 karaktera. 

$_POST - služi za prikupljanje podataka koji su poslati preko HTML forme metodom POST, podaci su nevidljivi, šalju se kroz HTTP header tako da bezbjednost podataka zavisi od HTTP protokola (korištenjem HTTPS možete se osigurati da su vaše informacije bezbjedne)
i nema ograničenja koliko podataka je moguće poslati na taj način
