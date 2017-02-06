Zadania dla frameworka Symfony LTS.

--------------------------------------------------------------------
Zadanie 1

Napisz kontroler, który ma następujące akcje:

    GET /setUsername/{userName} – ma wczytywać dane z sluga i zapisać je do sesji. Powinien też wyświetlić informację o zapisaniu danych w formie komunikatu "Sesja utworzona".
    GET /sayHello/{n} – gdzie n jest liczbą (wartość domyślna to 10)! Ta akcja powinna wczytać z sesji zapisane wcześniej imię i je wyświetlić n razy. Jeżeli w sesji nie ma zapisanego imienia, to powinien wyświetlić napis „Witaj nieznajomy” n razy.
    GET /createCookie/{cookieName}/{coockieValue}/{cookieTime} – gdzie cookieTime jest liczbą (jest to założenie, które ma się znaleźć w routingu). Ma on nastawiać ciasteczko o podanej nazwie na podaną wartość. Ciasteczko ma żyć przez cookieTime minut.
    GET /deleteCookie/{cookieName} – wyświetla zawartość ciasteczka o podanej nazwie i następnie je usuwa. Jeżeli takiego ciasteczka nie ma – powinien wyświetlać informację "Brak ciasteczka".

Do każdej akcji powinien być osobny template.
---------------------------------------------------------------------
Zadanie 2

Napisz następujące modele:

User:
  * id - int Auto_increment, klucz główny,
  * name - napis o długości 100,
  * email - napis o długości 50,
  * password - napis o długości 25,

Tweet:
  * id - int Auto_increment, klucz główny,
  * title - napis o długości 50,
  * tweet_text - napis,

Połącz te modele relacją jeden do wielu (dwukierunkową). W encji User pole odnoszące się do wielu tweetów nazwij tweets. W encji Tweet analogicznie pole odnoszące się do jednej encji User nazwij user.
---------------------------------------------------------------------
Zadanie 3

W repozytorium znajduje się katalog Zadanie3, w którym jest plik modelu Post.php oraz dump z przykładowymi danymi. Utwórz kontroler PostController i dopisz poszczególne akcje wg poniższej specyfikacji.
adres 	opis
/changeTitlePost 	Akcja wczyta post o id 3, zmieni mu tytuł na „Some other title” i zapisze zmiany do bazy
/showFooBarPosts 	Akcja wyświetli liczbę postów o tytule „fooBar” nie uwzględniając wielkości liter
/createPost 	Akcja stworzy nowy post z jakimikolwiek danymi a następnie wyświetli ilość postów w bazie danych
/deletePosts 	Akcja usunie wszystkie posty o ratingu większym niż 5 oraz wyświetli liczbę pozostałych postów

Akcje powinny zwracać requesty i nie posiadać widoków twiga.















