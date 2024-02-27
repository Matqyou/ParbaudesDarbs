### Teorija
 - **Kas ir API?** API atšifrējums: Appilcation Programming Interface, tas ir interfeiss ar kura palīdzibu programma var komunicēt viena ar otru.

 - **Kā deklarēt mainīgo PHP?** Lai deklarētu mainīgo izmanto dolāru simbolu $ un nosaukumu: `$mainigais`.

 - **Kādu arhitektūru izmanto Laravel, paskaidrojums kā tas strādā?** MVC arhitektūra, atšifrējums: Model, View, Controller. Modeļus izmanto, lai iegūtu datus no datu bāzes, tos saglabātu, atjauninātu un dzēstu. Modelis parasti attēlo vienu tabulu datubāzē(ORM). Pirms ievadīšanas datubāzē, tiek veikta validācija. Views ir atbildīgs par datu attēlošanu lietotājam. Controller ir proxys starp modeļiem un views, validē un sagatavo datus. 

 - **Kas ir ORM, kāpēc to izmanto tīra SQL vietā?** ORM atšifrējums: Object-Relational Mapping, datus transportē ar objektu palīdzību. Šis attelošanas veids izmanto datu struktūru datu integrācijas iemesliem un vienkāršībai.

 - **Ekvivalents ORM pieprasījums, kur iegūst lietotājus ar reitingu virs 4** \
`$users = User::where('rating', '>', 4)->get();` \
Lietotājus saglabā mainīgajā `$users`, izmanto modeli `User`, meklē pēc lauka `where`, salīdzina ar operatoru `>`, salīdzina ar `4`.

 
