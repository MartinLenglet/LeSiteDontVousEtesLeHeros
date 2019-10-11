<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Event::truncate();

        $faker = \Faker\Factory::create();

        // Evénements Magdala
        Event::create([
            'text' => 'Vous êtes maintenant dans un chariot, en route vers le temple. En soulevant une bache vous trouvez un coffre que vous ouvrez. Il contient',
            'adventure_id' => 1,
            'start' => true,
        ]);
        Event::create([
            'text' => "En chemin votre chariot est arrêtée par un individu vétue d'une toge violette. Il a le teint blafard et fais la manche.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Il s'avère que l'individu en question était un mage membre d'une secte cannibal",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Après cette rencontre innatendu vous voilà finalement arrivé devant le temple. la végétation à envahi les alentours mais pour autant le temple demeure préserver. Pour un temple abandonné il est étrange que des torches soit disposés à l'entrée. 2 tunnels permettent de pénétrer au sein de la pyramide.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous arrivez dans une salle éclairé par 2 torches à l'opposé de l'endroit ou vous êtes se trouvent un mur avec des inscriptions que vous ne parvenez pas à déchiffrez à cette distance",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous remarquez ce qui vous avez jusqu'à présent échappé la carte comporte 2 épaisseurs, vous tirez votre dague et vous découvrez un petit parchemin avec un étrange symbole, celui d'un homme à la tête de chèvre.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "En suivant le chemin de droite vous débouché sur une",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous appuyez sur la gemme enchassé dans votre armure et vous aprochez prudément du mur. Vous réalisez alors que dans un renfoncement se cache une créature à laquelle vous n'avez pas envie de vous frotter. Il ne semble y avoir aucune issue dans la pièce autre que la porte par laquelle vous êtes rentré.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Si focalisé sur votre recherche vous ne réalisez pas les crétures tapies dans l'ombre qui rode autour de vous. jusqu'à ce qu'un bras puissant et pourvue de griffe vous lacère le dos puis un autre s'enfonce dans votre jambes. Suffoquant à genoux, vous parvenez à vous parvenez à vous retourner, vous ne voyez finalement que 2 yeux rouges luisants et des crocs se refermer sur votre face.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Si focalisé sur le mur vous ne réalisez pas les crétures tapies dans l'ombre qui rode autour de vous. jusqu'à ce qu'un bras puissant et pourvue de griffe vous lacère le dos puis un autre s'enfonce dans votre jambes. Suffoquant à genoux, vous parvenez à vous retourner, vous ne voyez finalement que 2 yeux rouges luisants et des crocs se refermer sur votre face.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous décidez de tenter d'aller étriper la créature. En vous disant . C'était bien tenté seulement vous avez oublié qu'elle dispose d'autres sens que la vue. Votre charge et si bruyante dans votre armure que la créature parvient non sans mal à vous esquiver sans oublier au passage t'emporter une partie de votre visage dans ses griffes",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Sur le mur d'étrange pictogramme sont déssinés et vous remarquez sur le sol une coupole. L'un des symbole est couvert de tache de sang :",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Le mur se met soudain à luir de plus en plus fort et petit à petit un interstice ce crée là où se trouvait le symbole. Vous avancé un découvrait un gigantesque escalier en colimaçon creusé à même la roche. Pour le sonder vous y jeter une veille boite de tabac qui trainait dans votre besace. Plusieurs minutes s'écoule et vous comprenez à quel point le puis est profond. Dans votre soif de richesse, vous vous décidez à prendre l'escalier sans savoir ce qui vous attend plus bas.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous arrivez au bout de l'excalier et déboulé dans une grande salle éclairé. Des adeptes portants la même toges que l'adepte que vous avez rencontré lorsque vous cheminiez sur la charrette. Les cultistes sont en train de procéder à un sacrifice humain. Une jeune fille estla tête posé sur un autel, devant elle se tient [NEMESIS DU PERSONNAGE] prêt à la sacrifier",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Votre courage est hors norme mais malheuresement chargez une horde de fanatique. Avec votre épée et votre énorme paire de était un acte déspérée. Vous parvenez à éliminer quelques disciple mais finissez assomé au cour de la mélée et jeté dans une cellule.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Prudence est mère de sureté. Fort de cette adage vous avez attendue.Malheuresement vous n'aviez pas vue l'adepte qui se tenait derrière vous pendant que vous rodiez. Vous vous réveillez avec un sacré mal de crâne dans une cellule",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "La lacheté n'est pas une qualité mais elle a sauvé bien des hommes. C'est sans doute le discours que vous vous êtes tenue. Malheuresement vous n'aviez pas vue l'adepte qui se tenait derrière vous pendant que vous rodiez. Vous vous réveillez avec un sacré mal de crâne dans une cellule et avec le sentiment d'être un pleutre.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Vous avez sur-estimé vos talents de chanteur ainsi que l'innacuité visuel de vos adversaires . Votre voix et vos vêtements vous ont trahis. Les adeptes vous attrapent et vous jette promptement dans une cellule.",
            'adventure_id' => 1,
            'start' => false,
        ]);
        Event::create([
            'text' => "Il s'agit d'une vaste pièce taillé grossièrement dans la roche. La torche que vous aviez aperçu et en fait suspendu à 4 mètre au dessus du sol par ce qui semble être la seule ouverture de la pièce.",
            'adventure_id' => 1,
            'start' => false,
        ]);

        // And now, let's create a few events in our database:
        // On boucle sur le nombre d'aventure
        for ($j = 2; $j<= 4; $j++) {
            for ($i = 1; $i <= 10; $i++) {
                // On crée un start pour le premier évenement
                if ($i == 1) {
                    $start = true;
                } else {
                    $start = false;
                }
                Event::create([
                    'text' => $faker->sentence,
                    'adventure_id' => $j,
                    'start' => $start,
                ]);
            }
        }
    }
}
