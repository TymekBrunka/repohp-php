# Funkcja date()
Funkcją, która pozwala na formatowanie w odpowiedni sposób daty i czasu, jest funkcja
date(). Ma ona postać:
`date(format[, znacznik_czasu])`

|Znacznik| Znaczenie |Opis|
|--------|-----------|----|
|a| Użycie określenia „przed południem” (am) lub „po południu” (pm) |am, pm|
|A| Użycie określenia „przed południem” (AM) lub „po południu” (PM) |AM, PM|
|c| Data i czas zgodne z formatem ISO 8601 |2013-03-03T15:25:20|
|d| Dzień miesiąca w formacie z zerem na początku od |01 do 31|
|D| Dzień tygodnia w formacie trzyliterowego skrótu |Mon, Tue|
|F| Pełna nazwa miesiąca |January|
|g| Godzina w formacie dwunastogodzinnym bez zera na początku |od 1 do 12|
|G| Godzina w formacie dwudziestoczterogodzinnym bez zera na początku |od 1 do 24|
|H| Godzina w formacie dwudziestoczterogodzinnym |z zerem na początku|
|od| 01 do 24
|i| Liczba minut z zerem na początku od 01 do 59
|l| Nazwa dnia tygodnia Monday
|m| Miesiąc w postaci liczby dwucyfrowej z zerem na
|początku|
|od| 01 do 12
|s| Liczba sekund z zerem na początku od 01 do 59
|Y| Rok w postaci czterech znaków 2013