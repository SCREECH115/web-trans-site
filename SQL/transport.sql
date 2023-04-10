-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Kwi 2023, 13:59
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `transport`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `contact`
--

INSERT INTO `contact` (`id`, `firstName`, `lastName`, `phone`, `message`) VALUES
(1, 'Patryk', 'Ostry', 565788760, 'Cześć,\r\n\r\nile kosztuje kilometr?\r\n\r\nPozdrawiam'),
(2, 'Marek', 'Jackowski', 567567433, 'Dzień dobry,\r\n\r\nproszę o kontakt.\r\n\r\nPozdrawiam'),
(3, 'Gregory', 'Maksymilianowicz', 567342145, 'Dzień dobry,\r\n\r\nJak co roku obchody lanego poniedziałku w Bełchatowie wywołują wiele emocji. Święto to jest, co prawda, uświęcone tradycją, jednakże są ludzie, którzy zdecydowanie przesadzają z hołdowaniem tej jednej tradycji. \"Świństwo, kiedyś to dziewcz'),
(4, 'Maciej', 'Dąbrowski', 567555432, 'Dzień dobry,\r\n\r\nW ubiegłym roku śmigus - dyngus okazał się wyjątkowo mokry i wyjątkowo brzemienny w skutkach. W wyniku \"niewinnych\" igraszek z wodą doszło do wypadku samochodowego, w wyniku którego jedna osoba doznała poważnych obrażeń kręgosłupa. Było to'),
(5, 'Robert', 'Kobyłko', 764542142, 'Dzień dobry,\r\n\r\nWczoraj o godzinie osiemnastej odbyło się zebranie Stowarzyszenia Bełchatowskich Rodzin, na którym omawiano drażniący problem lanego poniedziałku. Wysunięto także propozycję, aby na ulicę wyszły prewencyjnie liczniejsze niż zwykle patrole '),
(6, 'Maciej', 'Pazdan', 656789013, 'Dzień dobry,\r\n\r\nTymczasem sama młodzież mówi, że nic złego się nigdy nie dzieje. \"My się oblewamy między sobą, serio. Na pewno do żadnego dorosłego kolesia z butlami nie przylecimy. Nie wiem, czemu wszyscy tak się tego poniedziałku boją!\". Koledzy mojego '),
(7, 'Ksawery', 'Wiśniewski', 666512340, 'Dzień dobry,\r\n\r\nNie ulega wątpliwości, że temat lanego poniedziałku wywołał liczne komentarze i wątpliwości, zarówno po stronie amatorów tego tradycyjnego polskiego obrzędu, jak i po stronie bełchatowian obawiających się o swoje bezpieczeństwo. Obecnie mo'),
(8, 'Oskar', 'Tyszkiewicz', 674321421, 'Dzień dobry,\r\n\r\nSzkolenie Word przeznaczone jest dla osób mających już doświadczenie w pracy w edytorem teksu MS Word. Zakłada się, iż osoba pracowała w edytorze i chciałaby poznać nowe funkcjonalności i przyspieszyć pracę korzystając z nowych narzędzi i '),
(9, 'Kamil', 'Biegun', 512457896, 'Dzień dobry,\r\n\r\nSzkolenie MS Word – Szkolenie przeznaczone jest dla osób mających już doświadczenie w pracy w edytorem teksu MS Word. Zakłada się, iż osoba pracowała w edytorze i chciałaby poznać nowe funkcjonalności i przyspieszyć pracę korzystając z now'),
(11, 'Kamila', 'Kornel', 512457863, 'Dzień dobry,\r\n\r\nPewnie zastanawiacie się jak używać nagłówków oraz paragrafów przy większej ilości tekstu. W takim razie podajmy jakiś bardziej życiowy przykład niż nudne opisy mojej strony. Skonstruujmy prosty artykuł do gazety, takiej bardziej  poczytne'),
(12, 'Tymoteusz', 'Malewski', 512474123, 'Dzień dobry,\r\n\r\nTytuł już mamy, to teraz tekst. Tekst w zasadzie moglibyśmy wymyślić jakiś na poczekaniu, na ale z drugiej strony to na razie przymiarka, w końcu to nagłówki i zdjęcia się sprzedają, a nie treść. Skorzystajmy w takim razie z wypełniacza te'),
(13, 'Ksawery', 'Gilski', 545212369, 'Dzień dobry,\r\n\r\nZanim strona zostanie wypełniona tekstem mija czasem bardzo dużo czasu (nawet nie zdajecie sobie sprawy), a projekt ma być gotowy na już.  Żeby zobaczyć jak strona/projekt wygląda z tekstem, a przy braku tekstu właściwego, korzystamy z got'),
(14, 'Mikołaj', 'Gurzieński', 565895474, 'Dzień dobry,\r\n\r\nZa wypełniacz tekstu może posłużyć nam tak na prawdę cokolwiek, oby tekst był wystarczająco długi na nasze potrzeby. Mogą to być nasze wypracowania  ze szkoły, teksty, które sami kiedyś pisaliśmy na różne potrzeby, dosłownie wszystko. Mogą');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `address`, `phone`) VALUES
(4, 'Filip', 'Kozioł', 'Gdynia', 73033115030),
(5, 'Sabina', 'Leszczyńska', 'Gdańsk', 85091399804),
(6, 'Bernadeta', 'Małecka', 'Bielsko-Biała', 13292838488),
(7, 'Roman', 'Sikora', 'Siedlce', 37121156176),
(8, 'Elwira', 'Janik', 'Skierniewice', 90053001509),
(9, 'Olivia', 'Janik', 'Elbląg', 92050946063),
(10, 'Joachim', 'Witkowski', 'Łódź', 17290757714),
(11, 'Walenty', 'Maj', 'Siedlce', 92060386415),
(12, 'Weronika', 'Gajda', 'Tychy', 51101181204),
(13, 'Aleks', 'Olejnik', 'Nowy Sącz', 7310931293),
(14, 'Anna', 'Dąbrowska', 'Chorzów', 15271567365),
(15, 'Cecylia', 'Bednarek', 'Dąbrowa Górnicza', 49111278722),
(16, 'Janina', 'Wrona', 'Rybnik', 92052044042),
(17, 'Damian', 'Chmielewski', 'Siemianowice Śląskie', 38033008278),
(18, 'Oleksandr', 'Kwiatkowski', 'Skierniewice', 98050911016),
(19, 'Mirosława', 'Witkowska', 'Jelenia Góra', 49122095783),
(20, 'Grażyna', 'Dobrowolska', 'Tarnobrzeg', 56032947260),
(21, 'Andrii', 'Owczarek', 'Elbląg', 77040670238),
(22, 'Bruno', 'Socha', 'Katowice', 91043089118);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `license` enum('a','b','c') NOT NULL,
  `salary` bigint(10) NOT NULL,
  `PESEL` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `drivers`
--

INSERT INTO `drivers` (`id`, `firstName`, `lastName`, `address`, `phone`, `license`, `salary`, `PESEL`) VALUES
(1, 'Marek', 'Janewski', 'Lublin, Rozłączna 34', 575256234, 'b', 3500, 87908956743),
(4, 'Konrad', 'Śpiworski', 'Warszawa, KED 47/24a', 541214541, 'c', 4000, 98521545231),
(5, 'Oskar', 'Skaliszewski', 'Szczecin, Pustynna 11a', 652125558, 'c', 6000, 89561452145),
(6, 'Maciek', 'Tomaszuk', 'Rzeszów, Raciborska 2b/2z', 854512569, 'b', 4800, 78542369695),
(7, 'Piotr', 'Maleńczuk', 'Katowice, Unii Lubelskiej 15/1', 652125232, 'c', 5000, 85412147878),
(8, 'Kamil', 'Manowski', 'Radom, Stejna 54/12', 652121454, 'c', 6500, 98565212541),
(9, 'Kacper', 'Kolewski', 'Warszawa, Obrońców Pokoju 34a', 652322363, 'c', 5600, 99851214541),
(10, 'Tymon', 'Zalewski', 'Nowy Sącz, Struga 33', 636212547, 'c', 4770, 80212014547),
(11, 'Olaf', 'Nowicki', 'Tychy, Konopnickiej 31', 523258020, 'c', 5000, 87451203021),
(12, 'Zdzisław', 'Wasilewski', 'Chorzów, Różana', 652321457, 'c', 4000, 80214512014),
(13, 'Helena', 'Wróblewska', 'Zamość, Leśna 13/2a', 521245001, 'b', 3600, 87012145202);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hired`
--

CREATE TABLE `hired` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `deadline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `hired`
--

INSERT INTO `hired` (`id`, `type`, `driver`, `customer`, `deadline`) VALUES
(3, 'Bus', 'Marek Fesiński', 'Microsoft', '17-06-2022'),
(4, 'Cieżarówka', 'Ksawery Wiśniewski', 'Praha', '22-10-2023'),
(5, 'Dostawczy', 'Oskar Malecki', 'Apple', '20-12-2022'),
(6, 'Bus', 'Kamil Gałęziak', 'Amazon', '23-01-2023'),
(7, 'Ciężarówka', 'Kamila Cichocka', 'Disney', '01-02-2024'),
(8, 'Samochód', 'Stefania Brzezińska', 'Nina Pawlik', '13-06-2023'),
(9, 'Bus', 'Adela Krawczyk', 'Eugenia Bielecka', '01-01-2023'),
(10, 'Van 9-os', 'Antoni Kosiński', 'Paweł Żak', '18-09-2022'),
(11, 'Ciężarówka', 'Sergiusz Jankowski', 'Zuzanna Król', '25-12-2022'),
(12, 'Samochód', 'Zbigniew Sokołowski', 'Nataliia Baranowska', '01-12-2022'),
(13, 'Ciężarówka', 'Adela Jóźwiak', 'Serhii Kaczmarczyk', '21-09-2023');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(1, 'Janek', 'Kowalski', 'm', 'janek@kowalski.com', 'janek', 123456789),
(2, 'Mariusz', 'Mana', 'f', 'marek@mana.com', 'marek', 123456789),
(3, 'Mariusz2', 'Mana2', 'f', 'marek2@mana.com', 'marek2', 123456789);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `registrationcustomers`
--

CREATE TABLE `registrationcustomers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `registrationcustomers`
--

INSERT INTO `registrationcustomers` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(1, 'Adrian', 'Nadrzeczny', 'm', 'adrian@nad.com', 'adrian', 521459874);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `weight` bigint(10) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ticket`
--

INSERT INTO `ticket` (`id`, `start`, `end`, `cargo`, `weight`, `phone`) VALUES
(2, 'Poznań', 'Rzeszów', 'Kostka brukowa', 24, 565789567),
(3, 'Warszawa', 'Rzeszów', 'Cegła brukowa', 2500, 576786534),
(4, 'Rzeszów', 'Gdańsk', 'Samochód', 1600, 567434567),
(5, 'Katowice', 'Radom', 'Deski sosnowe', 900, 564324563),
(6, 'Poznań', 'Białystok', 'Sprzęt komputerowy', 300, 767899844),
(7, 'Szczecin', 'Rzeszów', 'Sosna', 2400, 555676821),
(8, 'Lublin', 'Katowice', 'Trzy auta', 4500, 556431121),
(9, 'Katowice', 'Wilkowice', 'Suplementy', 600, 566576864),
(10, 'Warszawa', 'Berlin', 'Meble', 3000, 565787691),
(11, 'Lublin', 'Praga', 'Motocykle', 900, 565787578),
(12, 'Radom', 'Szczecin', 'Meble', 5000, 567863412);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `registration` varchar(8) NOT NULL,
  `category` enum('a','b','c') NOT NULL,
  `yearOfPurchase` bigint(5) NOT NULL,
  `equipment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `model`, `type`, `registration`, `category`, `yearOfPurchase`, `equipment`) VALUES
(1, 'Renault', 'Master', 'Ciężarowy', 'LUB12345', 'c', 2011, 'Tempomat, Poduszki, ViaToll'),
(3, 'Renault', 'Master', 'Ciężarowy', 'WWA12574', 'c', 2009, 'Tempomat, Viatoll, Opony zimowe'),
(4, 'Renault', 'Master', 'Ciężarowy', 'RZE25673', 'c', 2023, 'Tempomat, Poduszki, Komputer pokładowy'),
(5, 'Renault', 'Master', 'Ciężarowy', 'LUB76590', 'c', 2015, 'Tempomat, ViaToll, Rozszerzona kabina'),
(6, 'Iveco', 'Daily', 'Ciężarowy', 'GDA58753', 'c', 2021, 'Premium'),
(7, 'Iveco', 'Daily', 'Ciężarowy', 'POZ16547', 'c', 2001, 'Standard'),
(8, 'Iveco', 'Daily', 'Ciężarowy', 'KRA69004', 'c', 2013, 'Premium Plus'),
(9, 'Iveco', 'Daily', 'Ciężarowy', 'WAR56621', 'c', 2005, 'Premium Extra'),
(10, 'Iveco', 'Daily', 'Ciężarowy', 'LUB78780', 'c', 2010, 'Standard Extended'),
(11, 'Iveco', 'Daily', 'Ciężarowy', 'POZ67350', 'c', 2017, 'Premium'),
(12, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67782', 'b', 2019, 'Standard'),
(13, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67783', 'b', 2019, 'Standard'),
(14, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67784', 'b', 2019, 'Standard'),
(15, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67785', 'b', 2019, 'Standard'),
(16, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67786', 'b', 2019, 'Standard'),
(17, 'Mercedes', 'Sprinter', 'Dostawczy', 'LUB67787', 'b', 2020, 'Standard');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `hired`
--
ALTER TABLE `hired`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `registrationcustomers`
--
ALTER TABLE `registrationcustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `hired`
--
ALTER TABLE `hired`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `registrationcustomers`
--
ALTER TABLE `registrationcustomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
