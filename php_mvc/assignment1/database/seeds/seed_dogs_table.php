<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_dogs_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert(
            [
                'image' => 'bian_mu.jpg',
                'name' => 'Border Collie',
                'other_names' => 'Border Colley',
                'origin' => 'United Kingdom',
                'male_weight' => '14-20 kg (31–44 lb)',
                'female_weight' => '12-19 kg (26–42 lb)',
                'life_span' => 12,
                'category_id' => 1,
                'legitimacy' => 'No limit',
                'description' => "In general, border collies are medium-sized dogs with a moderate amount of 
                coat, which is more often thick and prone to shedding. They have a double coat that varies 
                from smooth to rough and is occasionally curled. While black and white is the most commonly 
                seen color pattern of the Border Collie, the breed appears in just about any color and pattern
                known to occur in dogs. Some of these include black tricolor (black/tan/white), liver and white, 
                and red tricolor (red/tan/white) which have also been seen regularly, and other colours such as 
                blue, lilac, red merle, blue merle, brindle, and Australian red (also known as ee red, blonde, 
                recessive red, or gold) which is seen less frequently. Some border collies may also have 
                single-color coats."
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'de_mu.jpg',
                'name' => 'German Shepherd',
                'other_names' => 'Alsatian wolf dog, Berger Allemand, Deutscher, Schäferhund',
                'origin' => 'Germany',
                'male_weight' => '30–40 kg (66–88 lb)',
                'female_weight' => '22–32 kg (49–71 lb)',
                'life_span' => 11,
                'category_id' => 1,
                'legitimacy' => 'Areas limited',
                'description' => 'German Shepherds are medium to large-sized dogs. The breed standard height 
                at the withers is 60–65 cm (24–26 in) for males, and 55–60 cm (22–24 in) for females. German 
                Shepherds are longer than they are tall, with an ideal proportion of 10 to ​8 1⁄2. The AKC 
                official breed standard does not set a standard weight range. They have a domed forehead, a 
                long square-cut muzzle with strong jaws and a black nose. The eyes are medium-sized and brown. 
                The ears are large and stand erect, open at the front and parallel, but they often are pulled 
                back during movement. A German Shepherd has a long neck, which is raised when excited and lowered 
                when moving at a fast pace as well as stalking. The tail is bushy and reaches to the hock.'
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'xun_xue.jpg',
                'name' => 'Bloodhound',
                'other_names' => 'Chien de St. Hubert, St. Hubert Hound',
                'origin' => 'Belgium & United Kingdom',
                'male_weight' => '46–54 kg (101–119 lb)',
                'female_weight' => '40–48 kg (88–106 lb)',
                'life_span' => 10,
                'category_id' => 2,
                'legitimacy' => 'No limit',
                'description' => 'The Bloodhound is a large scenthound, originally bred for hunting deer, wild 
                boar and, since the Middle Ages, for tracking people. Believed to be descended from hounds once 
                kept at the Abbey of Saint-Hubert, Belgium, it is known to French speakers as le chien de 
                Saint-Hubert. A more literal name in French for the bloodhound is le chien de sang. This breed 
                is famed for its ability to discern human scent over great distances, even days later. Its 
                extraordinarily keen sense of smell is combined with a strong and tenacious tracking instinct, 
                producing the ideal scenthound, and it is used by police and law enforcement all over the world 
                to track escaped prisoners, missing people, and lost pets.'
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'ling_ti.jpg',
                'name' => 'Italian Greyhound',
                'other_names' => 'Italian Sighthound, Piccolo levriero Italiano',
                'origin' => 'Italy',
                'male_weight' => '<5 kg',
                'female_weight' => '<5 kg',
                'life_span' => 12,
                'category_id' => 2,
                'legitimacy' => 'No limit',
                'description' => 'IGs are Greyhounds in miniature—more slender, but a Greyhound’s equal in grace 
                and elegance. Standing ideally 13 to 15 inches at the shoulder, they present the sleek, curving 
                lines common to all coursing hounds. Distinguishing features are the long, fine-boned legs. IGs 
                combine the attentiveness of lapdogs with the complexity of ancient, aristocratic hounds. Bred 
                for centuries to be doting companions and jesters, these high-stepping charmers refuse to be 
                ignored. “On the whole,” writes an IG expert, “the breed would much rather be in your lap or bed 
                than on the floor.” They are, though, true sighthounds and will bolt after quick-moving prey at 
                the drop of a cat. A short-coat, low-fat breed, IGs require extra care in cold weather'
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'gao_jia_suo.jpg',
                'name' => 'Caucasian Shepherd',
                'other_names' => 'Caucasian Ovcharka, Gampr',
                'origin' => 'Armenia, Dagestan',
                'male_weight' => '>50 kg (110 lb)',
                'female_weight' => '>45 kg (100 lb)',
                'life_span' => 11,
                'category_id' => 3,
                'legitimacy' => 'Areas limited',
                'description' => "The Caucasian Shepherd Dog is a loyal guardian to the core. These dogs were 
                bred to help shepherds in the Caucasus Mountain region keep their flocks safe from predators 
                like wolves and bears. They often use these instincts in modern times to act as watchdogs and 
                protectors, though they are sometimes overly apprehensive around strangers and don't take well 
                to other animals entering their territory, including other dogs. Smart but headstrong, the massive 
                Caucasian Shepherd Dog needs an experienced trainer that can handle an independent attitude with 
                firm boundaries and patience. They are not high energy dogs, but their size demands space, making 
                them ill-suited for apartment life. A yard with a solid, high fence is ideal. Although they aren't 
                known for barking more than most dogs, they will alert owners to any dangers, even in the middle 
                of the night, and their bark is quite loud. Caucasian Shepherd Dogs can make excellent family 
                companions and should be indoors with their humans as much as possible. They should not be chained 
                up outside, as this is a recipe for creating an aggressive, dangerous dog. With proper training, 
                they can make loving family pets and guardians, and some have even been trained as therapy dogs."
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'zang_ao.jpg',
                'name' => 'Tibetan Mastiff',
                'other_names' => 'Chinese: Zang Ao',
                'origin' => 'China',
                'male_weight' => '45-73 kg (100-161 lb)',
                'female_weight' => '34-54 kg (75-119 lb)',
                'life_span' => 16,
                'category_id' => 3,
                'legitimacy' => 'Areas limited',
                'description' => "The Tibetan Mastiff known as 'Do-Khyi in Tibetan, reflects its use as a guardian 
                of herds, flocks, tents, villages, monasteries and palaces, much as the Old English Bandog (also 
                meaning tied dog) was a dog tied outside the home as a guardian. However, in nomad camps and in 
                villages, the 'Do-Khyi is traditionally allowed to run loose at night. This dog is known for its 
                loyalty and has been used as a nomad dog for thousands of years. The guardian type from which the 
                modern Tibetan Mastiff breed has been derived was known across the ancient world by many names. 
                Bhote Kukur in Nepali as bhote means someone from Tibet and kukur means dog. The Chinese name for 
                the breed is Zàng áo (Cantonese: Tzong ngou), meaning 'Tibetan Mastiff-dog'. In Mongolia, this 
                dog is called a bankhar."
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'la_bu_la_duo.jpg',
                'name' => 'Labrador Retriever',
                'other_names' => 'Labrador',
                'origin' => 'United Kingdom',
                'male_weight' => '29–36 kg (65–80 lb)',
                'female_weight' => '25–32 kg (55–70 lb)',
                'life_span' => 11,
                'category_id' => 4,
                'legitimacy' => 'No limit',
                'description' => 'The Labrador Retriever, Labrador, or Lab is a medium-large breed of retriever-gun 
                dog. The Labrador is the most popular breed of dog in many countries around the world. A favourite 
                disability assistance breed in many countries, Labradors are frequently trained to aid those with 
                blindness or autism, act as a therapy dog, or perform screening and detection work for law enforcement 
                and other official agencies. The breed is best known for their obedience, loyalty, and playful composure. 
                Additionally, they are prized as sporting and hunting dogs. Ancestors include a breed used in Newfoundland 
                as fishing dogs, that would help in bringing in the fishing nets and retrieve fish that had gotten away.'
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'jin_mao.jpg',
                'name' => 'Golden Retriever',
                'other_names' => 'None',
                'origin' => 'United Kingdom',
                'male_weight' => '65–75 lb (29–34 kg)',
                'female_weight' => '55–65 lb (25–29 kg)',
                'life_span' => 11,
                'category_id' => 4,
                'legitimacy' => 'No limit',
                'description' => "The Golden Retriever is a medium-large gun dog that was bred to retrieve shot waterfowl, 
                such as ducks and upland game birds, during hunting and shooting parties. The name 'retriever' refers to 
                the breed's ability to retrieve shot game undamaged due to their soft mouth. Golden retrievers have an 
                instinctive love of water, and are easy to train to basic or advanced obedience standards. They are a 
                long-coated breed, with a dense inner coat that provides them with adequate warmth in the outdoors, and 
                an outer coat that lies flat against their bodies and repels water. Golden retrievers are well suited to 
                residency in suburban or country environments. They shed copiously, particularly at the change of seasons, 
                and require fairly regular grooming. The Golden Retriever was originally bred in Scotland in the mid-19th 
                century."
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'mei_dou.jpg',
                'name' => 'American Bulldog',
                'other_names' => 'Southern White, White English, Old Southern White',
                'origin' => 'United States',
                'male_weight' => '34–52 kg (75–115 lb)',
                'female_weight' => '27–41 kg (60–90 lb)',
                'life_span' => 13,
                'category_id' => 5,
                'legitimacy' => 'No limit',
                'description' => "The American Bulldog is a stocky, well built, strong-looking dog, with a large head and 
                a muscular build. The shoulders and chest tend to be the most muscular parts of the American Bulldog. Its 
                coat is short and generally smooth, requiring little maintenance except a bath every few weeks. The breed 
                is a light to moderate shedder. Colors, while historically predominantly white with patches of red, black, 
                or brindle, have grown in recent years to include many color patterns including black, red, brown, fawn, 
                and all shades of brindle. The color conformation is quite varied, but solid black or any degree of merle 
                is considered a cosmetic fault, and a blue color is a disqualification by the National Kennel Club Breed 
                Standard. Black pigmentation on the nose and eye rims is traditionally preferred, with only some pink allowed. 
                Eye color is usually brown, but heterochromia also occurs, although this is also considered a cosmetic fault."
            ]
        );

        DB::table('dogs')->insert(
            [
                'image' => 'fa_dou.jpg',
                'name' => 'French Bulldog',
                'other_names' => 'Bouledogue',
                'origin' => '	France',
                'male_weight' => '<13 kg (28 lb)',
                'female_weight' => '<13 kg (28 lb)',
                'life_span' => 12,
                'category_id' => 5,
                'legitimacy' => 'No limit',
                'description' => 'The AKC Standard weight for a French Bulldog is maximum 28 pounds. The head of a French 
                bulldog should be square shaped and large along with ears that symbolized bat ears. French bulldogs are 
                also known as a flat faced breed. Eyes that are AKC Standard approved for French Bulldogs are dark and 
                almost to the point of being black. Blue eyed French bulldogs are not AKC approved. The coat of a French 
                bulldog should short haired and fine and silky. Acceptable colors under the breed standard are the various 
                shades of brindle, fawn, cream or white with brindle patches (known as "pied"). The fawn colors can be any 
                light through red. The most common colors are brindle, then fawn, with pieds being less common than the other 
                colors. The breed clubs do not recognize any other colors or patterns. This is because some colors come linked 
                with genetic health problems not usually found in the breed. These include blue coloration, which is linked 
                with a form of alopecia (hair loss or baldness), sometimes known as "Blue Dog Alopecia".'
            ]
        );
    }
}
