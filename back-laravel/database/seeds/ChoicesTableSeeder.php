<?php

use Illuminate\Database\Seeder;
use App\Choice;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Choice::truncate();

        $faker = \Faker\Factory::create();

        // Choix aventure Alex
        Choice::create([
            'text' => "Un sac avec divers équipements type cordes, torches, briquet, des vivres pour une bonne semaine et même quelques pièces en argent et en bronze",
            'eventFrom_id' => 1,
            'eventTo_id' => 2,
        ]);
        Choice::create([
            'text' => "Une armure enchantée vous permettant de devenir invisible à souhait, une bouteille de vin et une grosse hallebarde vous trouverez bien une bête à occire et manger en route. La raison du plus fort est toujours la meilleure.",
            'eventFrom_id' => 1,
            'eventTo_id' => 2,
        ]);
        Choice::create([
            'text' => "Une armure en cuir, un arc avec une douzaines de flèches, une petite dague, une gourde et une miche de pain un peu rassie",
            'eventFrom_id' => 1,
            'eventTo_id' => 2,
        ]);
        Choice::create([
            'text' => "Vous lui donner un peu des provisions",
            'eventFrom_id' => 2,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Vous lui donner le contenue de votre Bourse",
            'eventFrom_id' => 2,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Vous tenter de l'éliminer pour le fouiller ensuite, il pourrait avoir quelque chose d'utile",
            'eventFrom_id' => 2,
            'eventTo_id' => 3,
        ]);
        Choice::create([
            'text' => "Vous l'ignorer",
            'eventFrom_id' => 2,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Vous vous engouffrez dans le tunnel de Gauche",
            'eventFrom_id' => 4,
            'eventTo_id' => 5,
        ]);
        Choice::create([
            'text' => "Vous décidez d'étudier plus en détail la carte avant de vous lancer dans l'aventure",
            'eventFrom_id' => 4,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Vous décidez de suivre le chemin de droite",
            'eventFrom_id' => 4,
            'eventTo_id' => 10,
        ]);
        Choice::create([
            'text' => "Activer votre armure invisible pour vous approcher du mur",
            'eventFrom_id' => 5,
            'eventTo_id' => 8,
        ]);
        Choice::create([
            'text' => "Chercher un passage dans les alentours",
            'eventFrom_id' => 5,
            'eventTo_id' => 9,
        ]);
        Choice::create([
            'text' => "Vous approcher du mur",
            'eventFrom_id' => 5,
            'eventTo_id' => 10,
        ]);
        Choice::create([
            'text' => "Revenir sur vos pas",
            'eventFrom_id' => 5,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Ne voyant pas d'issue vous décidez de revenir sur vos pas",
            'eventFrom_id' => 8,
            'eventTo_id' => 4,
        ]);
        Choice::create([
            'text' => "Vous décidez d'aller combattre la créature en profitant de votre invisibilité.",
            'eventFrom_id' => 8,
            'eventTo_id' => 11,
        ]);
        Choice::create([
            'text' => "Vous vous approchez du mur à l'opposé de la pièce",
            'eventFrom_id' => 8,
            'eventTo_id' => 12,
        ]);
        Choice::create([
            'text' => "Vous sortez votre poignard et imprégnez de sang la coupe avant de la verser sur le symbole",
            'eventFrom_id' => 12,
            'eventTo_id' => 13,
        ]);
        Choice::create([
            'text' => "Vous revenez sur vos pas la vue du sang ne vous inspire pas confiance",
            'eventFrom_id' => 12,
            'eventTo_id' => 8,
        ]);
        Choice::create([
            'text' => "Vous sortez votre poignard et posez votre main ensanglanté sur le symbole",
            'eventFrom_id' => 12,
            'eventTo_id' => 13,
        ]);
        Choice::create([
            'text' => "Vous descendez l'escalier",
            'eventFrom_id' => 13,
            'eventTo_id' => 14,
        ]);
        Choice::create([
            'text' => "Vous décidez d'intervenir et chargez héroiquement les cultistes",
            'eventFrom_id' => 14,
            'eventTo_id' => 15,
        ]);
        Choice::create([
            'text' => "Vous restez caché et préféré attendre une ouverture avant tout acte irréfléchi",
            'eventFrom_id' => 14,
            'eventTo_id' => 16,
        ]);
        Choice::create([
            'text' => "Vous profitez que leur attention soit focalisé sur la fille qu'il sacrifie pour trouver une autre issue",
            'eventFrom_id' => 14,
            'eventTo_id' => 17,
        ]);
        Choice::create([
            'text' => "Vous les rejoignaient et joigné votre voix au chant plasmonié",
            'eventFrom_id' => 14,
            'eventTo_id' => 18,
        ]);
        Choice::create([
            'text' => "Vous vous réveillez, votre équipement à disparue et vous souffrez d'un sacré mal de crâne. La cellule dans laquelle on vous a jeté s'avère être une énorme grotte. Vous voyez une torche briler dans une autre cavité et décidez de vous en rapprocher.",
            'eventFrom_id' => 15,
            'eventTo_id' => 19,
        ]);
        Choice::create([
            'text' => "Vous vous réveillez, votre équipement à disparue et vous souffrez d'un sacré mal de crâne. La cellule dans laquelle on vous a jeté s'avère être une énorme grotte. Vous voyez une torche briler dans une autre cavité et décidez de vous en rapprocher.",
            'eventFrom_id' => 16,
            'eventTo_id' => 19,
        ]);
        Choice::create([
            'text' => "Vous vous réveillez, votre équipement à disparue et vous souffrez d'un sacré mal de crâne. La cellule dans laquelle on vous a jeté s'avère être une énorme grotte. Vous voyez une torche briler dans une autre cavité et décidez de vous en rapprocher.",
            'eventFrom_id' => 17,
            'eventTo_id' => 19,
        ]);
        Choice::create([
            'text' => "Vous vous réveillez, votre équipement à disparue et vous souffrez d'un sacré mal de crâne. La cellule dans laquelle on vous a jeté s'avère être une énorme grotte. Vous voyez une torche briler dans une autre cavité et décidez de vous en rapprocher.",
            'eventFrom_id' => 18,
            'eventTo_id' => 19,
        ]);
        Choice::create([
            'text' => "Vous décidez de crier pour appeler l'un des gardiens",
            'eventFrom_id' => 19,
            'eventTo_id' => 19,
        ]);
        Choice::create([
            'text' => "Vous retournez dans la salle précédente à la recherche d'un indice qui aurait pu vous échapper",
            'eventFrom_id' => 19,
            'eventTo_id' => 19,
        ]);


        // Boucle sur les aventures
        for ($i = 2; $i <= 4; $i++) {
            // Boucle sur les événements
            for ($j = 1; $j <= 10; $j++) {
                // Boucle sur les choix
                for ($k = 1; $k <= 2; $k++) {
                    $rand = rand(1, 10);
                    Choice::create([
                        'text' => $faker->name,
                        'eventFrom_id' => (($i*10)-1 + $j),
                        'eventTo_id' => (($i*10)-1 + $rand),
                    ]);
                }
            }
        }
    }
}
