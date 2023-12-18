<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KollektionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kollektioner=array(
            array(
                'titel'=>'Ren te',
                'beskrivelse'=>'Oplev vores udvalg af ren te, dyrket med omhu og perfektion. Fra delikate hvide teer til kraftige sorte varianter og subtile grønne teer – opdag den autentiske smag af ren te i sin reneste form. Vores samling byder på en unik oplevelse af uforfalsket te-kunst, nøje udvalgt for at tilfredsstille enhver te-entusiast.',
                'seo_tekst'=>'Opdag autentiske og høj kvalitet ren te hos os. Vores ren te kollektion byder på enestående smagsoplevelser med hvide, grønne og sorte teer. Udforsk nu for at finde den perfekte ren te, der passer til din smag og nyd den forfriskende renhed af vores håndplukkede teblade.',
                'billede'=>'https://images.freeimages.com/images/large-previews/42b/tea-bags-1322551.jpg?fmt=webp&w=500'
            ),
            array(
                'titel'=>'Te mix',
                'beskrivelse'=>'Forvæn dig med vores levende og alsidige te mix kollektion. Udforsk spændende kombinationer af smagfulde teer, skabt med omhu for at tilfredsstille enhver smag. Fra forfriskende frugtagtige blandinger til beroligende krydrede varianter – vores te mix kollektion tilbyder en verden af teblandingseventyr, der vil fortrylle dine smagsløg.',
                'seo_tekst'=>'Dyk ned i vores te mix kollektion, en verden af unikke og smagsfulde blandinger. Uanset om du foretrækker frugtagtige, krydrede eller blomsteragtige smagsoplevelser, vil vores te mix kollektion imødekomme dine præferencer. Udforsk vores sortiment nu for at opdage de perfekte teblandinger, der vil forvandle din teoplevelse.',
                'billede'=>'https://images.freeimages.com/images/large-previews/42b/tea-bags-1322551.jpg?fmt=webp&w=500'
            ),
        );

        DB::table('kollektioner')->insert($kollektioner);
    }
}
