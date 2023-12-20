<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produkter=array(
            array(
                'titel'=>'Assam',
                'beskrivelse'=>'En robust sort te med fyldig smag og maltede undertoner, perfekt til morgenbrygningen.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Robust sort te fra Indien',
            ),
            array(
                'titel'=>'Ceylon',
                'beskrivelse'=>'En forfriskende sort te med en lys karakter og citrusnoter, ideel til eftermiddagshygge.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Sort te fra Sri Lanka',
            ),
            array(
                'titel'=>'Chai',
                'beskrivelse'=>'En krydret blanding af te og aromatiske krydderier, skaber en varmende og beroligende kop.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Krydret varme fra Indien',
            ),
            array(
                'titel'=>'China Milky Oolong',
                'beskrivelse'=>'En delikat oolong-te med en cremet konsistens og let sødme, for en subtil smagsoplevelse.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Cremet oolong fra Kina',
            ),
            array(
                'titel'=>'China White Snow bud',
                'beskrivelse'=>'En forfinet hvid te med blomstrende aromaer og en let, frugtagtig smag.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Delikat hvid te fra Kina',
            ),
            array(
                'titel'=>'Cool mint',
                'beskrivelse'=>'En forfriskende blanding af grøn te og kølig mynte, perfekt til at køle ned og forfriske.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Grøn te med mynte',
            ),            
            array(
                'titel'=>'Darjeeling',
                'beskrivelse'=>'En elegant sort te med blomsterduft og subtile frugtige noter, fantastisk til teentusiaster.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Elegant sort te fra Indien',
            ),            
            array(
                'titel'=>'Earl Grey',
                'beskrivelse'=>'En klassisk sort te med bergamotteolie, der tilføjer en citrusagtig og blomstrende aroma.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Sort te med citrustoner',
            ),            
            array(
                'titel'=>'Jade Oolong',
                'beskrivelse'=>'En halvfermenteret oolong-te med delikate florale undertoner og en glat smag.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Kinesisk oolong med florale undertoner',
            ),            
            array(
                'titel'=>'Grøn Gunpowder',
                'beskrivelse'=>'En kraftig grøn te med rullede blade og en let røget smag, perfekt til enhver tid på dagen.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Sprudlende grøn te fra Kina',
            ),            
            array(
                'titel'=>'Grøn Sencha',
                'beskrivelse'=>'En forfriskende grøn te med en lys, glat smag og subtile tangy undertoner.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Livlig grøn te fra Japan',
            ),            
            array(
                'titel'=>'Hvid Tempeltræ Te',
                'beskrivelse'=>'En mild hvid te med blomsterduft og en sødlig smag, ideel til afslapning.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Mild hvid te',
            ),            
            array(
                'titel'=>'Jasmin',
                'beskrivelse'=>'En aromatisk grøn te beriget med jasminblomster, der tilføjer en skøn duft og smag.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Kinesisk grøn te med jasminblomster',
            ),            
            array(
                'titel'=>'Jasmin Jade Pearls',
                'beskrivelse'=>'En luksuriøs grøn te, hvor håndrullede perler afgiver en delikat jasminsmag ved brygning.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Jasmininfuseret te',
            ),            
            array(
                'titel'=>'Karamel Te',
                'beskrivelse'=>'En forførende blanding af sort te og karamel, perfekt til at tilfredsstille søde smagsløg.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Sødmefuld sort te med karamelnoter',
            ),            
            array(
                'titel'=>'Lakrids Te',
                'beskrivelse'=>'En unik blanding med lakridsrod, der tilføjer en sødlig og krydret smagsoplevelse.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'En eksotisk blanding fra Middelhavsområdet',
            ),            
            array(
                'titel'=>'Pebermynte Te',
                'beskrivelse'=>'En forfriskende infusion af pebermynteblade, beroligende og opkvikkende på én gang.',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'Frisk pebermynte fra have til kop',
            ),            
            array(
                'titel'=>'Pu Erh',
                'beskrivelse'=>'En jordagtig og fyldig fermenteret te, der forbedrer med alderen og tilbyder unikke smagsnuancer.',
                'type'=>'ren te',
                'koffein'=>'true',
                'undertitel'=>'Aldret te med jordagtige undertoner fra Kina',
            ),            
            array(
                'titel'=>'Rooibos',
                'beskrivelse'=>'En koffeinfri urtete med mild, sød smag og antioxidantrige egenskaber, ideel til aftenafslapning.',
                'type'=>'ren te',
                'koffein'=>'false',
                'undertitel'=>'Naturlig, koffeinfri urtete fra Sydafrika'
            ),            
            array(
                'titel'=>'Min te mix',
                'beskrivelse'=>'Sammensæt din egen te blanding',
                'type'=>'te mix',
                'koffein'=>'true',
                'undertitel'=>'',
            ),

        );

        DB::table('produkter')->insert($produkter);
    }
}
