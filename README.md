<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Wymagania Laravel
- PHP >= 8.2
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer

#### Instalacja
- Pobierz repozytorium
- Uruchom komendę ```composer install``` aby zainstalować dependencje

## Treść zadania

Wyświetl 100 liczb, dla liczb podzielnych przez 3 niech wyświetli tekst "Fizz", dla liczb podzielnych przez 5 "Buzz", a dla liczb podzielnych jednocześnie przez 3 oraz 5 "FizzBuzz".

## Zadanie

#### Komendy
```php artisan fizzbuzz``` - będzie wyświetlać liczby od 1 do 100, jesli liczba jest podzielna przez 3 to zamiast liczby pojawi się Fizz, jeśli przez 5 to Buzz, jeśli przez 3 i 5 to FizzBuzz.

```php artisan fizzbuzz {number}``` czyli np. ```php artisan fizzbuzz 6``` sprawdzi liczbę 6 i w zależności od tego przez co liczba jest podzielna wyświetli odpowiedni tekst(Fizz, Buzz albo FizzBuzz), jeśli nie jest podzielna przez 3 ani przez 5 wyświetli ponownie wpisaną liczbę czyli 6.

#### Endpoints

Aby wystartować serwer należy użyć komendy ```php artisan serve``` co powinno uruchomić serwer pod lokalnym adresem: http://127.0.0.1:8000/

```/``` Zwraca Json w którym znajdują się liczby od 1 do 100 podobnie jak komenda bez argumentu czyli, jesli liczba jest podzielna przez 3 to dopisze jej wartość Fizz, jeśli przez 5 to Buzz, jeśli przez 3 i 5 to FizzBuzz. Jeśli nie jest podzielna przez 3 ani przez 5 doda jej wartość pustego stringa.


```/{number}``` czyli np. ```/6``` podobnie jak komenda z parametrem, sprawdzi podaną liczbę, w tym przypadku 6 i zależności od tego przez co liczba jest podzielna doda jej odpowiednią wartość(Fizz, Buzz albo FizzBuzz), jeśli nie jest podzielna przez 3 ani przez 5 doda jej wartość pustego stringa.
