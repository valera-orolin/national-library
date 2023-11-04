<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Determines availability based on a probability.
     *
     * @return bool True with a 2/3 probability, false with a 1/3 probability.
     */
    private function getIsAvailable()
    {
        return (rand(1, 3) > 1);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Book::factory(20)->create();

        // ‘Y-m-d’
        Book::create([
            'title' => "The Lord of the Rings",
            'authors' => "J.R.R. Tolkien",
            'genres' => "Fantasy, Classics, Fiction, Adventure, Science Fiction Fantasy",
            'release_date' => Carbon::parse('1955-10-20'),
            'is_available' => $this->getIsAvailable(),
            'description' => "One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them

            In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell by chance into the hands of the hobbit Bilbo Baggins.
            
            From Sauron's fastness in the Dark Tower of Mordor, his power spread far and wide. Sauron gathered all the Great Rings to him, but always he searched for the One Ring that would complete his dominion.
            
            When Bilbo reached his eleventy-first birthday he disappeared, bequeathing to his young cousin Frodo the Ruling Ring and a perilous quest: to journey across Middle-earth, deep into the shadow of the Dark Lord, and destroy the Ring by casting it into the Cracks of Doom.
            
            The Lord of the Rings tells of the great quest undertaken by Frodo and the Fellowship of the Ring: Gandalf the Wizard; the hobbits Merry, Pippin, and Sam; Gimli the Dwarf; Legolas the Elf; Boromir of Gondor; and a tall, mysterious stranger called Strider.",
            'cover' => "img/The Lord of the Rings.jpg",
        ]);

        Book::create([
            'title' => "Pride and Prejudice",
            'authors' => "Jane Austen",
            'genres' => "Classics, Fiction, Romance, Historical Fiction, Literature",
            'release_date' => Carbon::parse('1813-01-28'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work \"her own darling child\" and its vivacious heroine, Elizabeth Bennet, \"as delightful a creature as ever appeared in print.\" The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.",
            'cover' => "img/Pride and Prejudice.jpg",
        ]);

        Book::create([
            'title' => "His Dark Materials",
            'authors' => "Philip Pullman",
            'genres' => "Fantasy, Fiction, Young Adult, Childrens, Science Fiction Fantasy",
            'release_date' => Carbon::parse('2000-11-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The Golden Compass, The Subtle Knife, and The Amber Spyglass are available together in one volume perfect for any fan or newcomer to this modern fantasy classic series.

            These thrilling adventures tell the story of Lyra and Will—two ordinary children on a perilous journey through shimmering haunted otherworlds. They will meet witches and armored bears, fallen angels and soul-eating specters. And in the end, the fate of both the living—and the dead—will rely on them.
            
            Phillip Pullman’s spellbinding His Dark Materials trilogy has captivated readers for over twenty years and won acclaim at every turn. It will have you questioning everything you know about your world and wondering what really lies just out of reach.",
            'cover' => "img/His Dark Materials.jpg",
        ]);

        Book::create([
            'title' => "The Hitchhiker's Guide to the Galaxy",
            'authors' => "Douglas Adams",
            'genres' => "Science Fiction, Fiction, Humor, Fantasy, Classics",
            'release_date' => Carbon::parse('1979-10-12'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Seconds before the Earth is demolished to make way for a galactic freeway, Arthur Dent is plucked off the planet by his friend Ford Prefect, a researcher for the revised edition of The Hitchhiker's Guide to the Galaxy who, for the last fifteen years, has been posing as an out-of-work actor.

            Together this dynamic pair begin a journey through space aided by quotes from The Hitchhiker's Guide (\"A towel is about the most massively useful thing an interstellar hitchhiker can have\") and a galaxy-full of fellow travelers: Zaphod Beeblebrox--the two-headed, three-armed ex-hippie and totally out-to-lunch president of the galaxy; Trillian, Zaphod's girlfriend (formally Tricia McMillan), whom Arthur tried to pick up at a cocktail party once upon a time zone; Marvin, a paranoid, brilliant, and chronically depressed robot; Veet Voojagig, a former graduate student who is obsessed with the disappearance of all the ballpoint pens he bought over the years.
            
            Where are these pens? Why are we born? Why do we die? Why do we spend so much time between wearing digital watches? For all the answers stick your thumb to the stars. And don't forget to bring a towel!",
            'cover' => "img/The Hitchhiker's Guide to the Galaxy.jpg",
        ]);

        Book::create([
            'title' => "Harry Potter and the Goblet of Fire",
            'authors' => "J.K. Rowling",
            'genres' => "Young Adult, Fiction, Magic, Childrens, Middle Grade",
            'release_date' => Carbon::parse('2000-07-08'),
            'is_available' => $this->getIsAvailable(),
            'description' => "",
            'cover' => "img/Harry Potter and the Goblet of Fire.jpg",
        ]);

        Book::create([
            'title' => "To Kill a Mockingbird",
            'authors' => "Harper Lee",
            'genres' => "Classics, Fiction, Historical Fiction, School, Literature",
            'release_date' => Carbon::parse('1960-07-11'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it. \"To Kill A Mockingbird\" became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.

            Compassionate, dramatic, and deeply moving, \"To Kill A Mockingbird\" takes readers to the roots of human behavior - to innocence and experience, kindness and cruelty, love and hatred, humor and pathos. Now with over 18 million copies in print and translated into forty languages, this regional story by a young Alabama woman claims universal appeal. Harper Lee always considered her book to be a simple love story. Today it is regarded as a masterpiece of American literature.",
            'cover' => "img/To Kill a Mockingbird.jpg",
        ]);

        Book::create([
            'title' => "Winnie-the-Pooh",
            'authors' => "A.A. Milne",
            'genres' => "Classics, Childrens, Fiction, Fantasy, Animals",
            'release_date' => Carbon::parse('1926-10-14'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The adventures of Christopher Robin and his friends in which Pooh Bear uses a balloon to get honey, Piglet meets a Heffalump, and Eeyore has a birthday.",
            'cover' => "img/Winnie-the-Pooh.jpg",
        ]);

        Book::create([
            'title' => "Nineteen Eighty-Four",
            'authors' => "George Orwell",
            'genres' => "Classics, Fiction, Science Fiction, Dystopia, Literature",
            'release_date' => Carbon::parse('1949-06-08'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The new novel by George Orwell is the major work towards which all his previous writing has pointed. Critics have hailed it as his \"most solid, most brilliant\" work. Though the story of Nineteen Eighty-Four takes place thirty-five years hence, it is in every sense timely. The scene is London, where there has been no new housing since 1950 and where the city-wide slums are called Victory Mansions. Science has abandoned Man for the State. As every citizen knows only too well, war is peace.

            To Winston Smith, a young man who works in the Ministry of Truth (Minitru for short), come two people who transform this life completely. One is Julia, whom he meets after she hands him a slip reading, \"I love you.\" The other is O'Brien, who tells him, \"We shall meet in the place where there is no darkness.\" The way in which Winston is betrayed by the one and, against his own desires and instincts, ultimately betrays the other, makes a story of mounting drama and suspense.",
            'cover' => "img/Nineteen Eighty-Four.jpg",
        ]);

        Book::create([
            'title' => "The Lion, the Witch and the Wardrobe",
            'authors' => "C.S. Lewis",
            'genres' => "Fantasy, Classics, Fiction, Young Adult, Childrens",
            'release_date' => Carbon::parse('1950-10-16'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Narnia… the land beyond the wardrobe door, a secret place frozen in eternal winter, a magical country waiting to be set free.

            Lucy is the first to find the secret of the wardrobe in the professor's mysterious old house. At first her brothers and sister don't believe her when she tells of her visit to the land of Narnia. But soon Edmund, then Peter and Susan step through the wardrobe themselves. In Narnia they find a country buried under the evil enchantment of the White Witch. When they meet the Lion Aslan, they realize they've been called to a great adventure and bravely join the battle to free Narnia from the Witch's sinister spell.",
            'cover' => "img/The Lion, the Witch and the Wardrobe.jpg",
        ]);

        Book::create([
            'title' => "Jane Eyre",
            'authors' => "Charlotte Brontë",
            'genres' => "Classics, Fiction, Romance, Historical Fiction, Gothic",
            'release_date' => Carbon::parse('1847-10-16'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Charlotte Brontë tells the story of orphaned Jane Eyre, who grows up in the home of her heartless aunt, enduring loneliness and cruelty. This troubled childhood strengthens Jane's natural independence and spirit - which prove necessary when she finds employment as a governess to the young ward of Byronic, brooding Mr Rochester. As her feelings for Rochester develop, Jane gradually uncovers Thornfield Hall's terrible secret, forcing her to make a choice. Should she stay with Rochester and live with the consequences, or follow her convictions - even if it means leaving the man she loves? A novel of intense power and intrigue, Jane Eyre dazzled readers with its passionate depiction of a woman's search for equality and freedom.",
            'cover' => "img/Jane Eyre.jpg",
        ]);

        Book::create([
            'title' => "Catch-22",
            'authors' => "Joseph Heller",
            'genres' => "Classics, Fiction, Historical Fiction, War, Humor",
            'release_date' => Carbon::parse('1961-11-10'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Set in Italy during World War II, this is the story of the incomparable, malingering bombardier, Yossarian, a hero who is furious because thousands of people he has never met are trying to kill him. But his real problem is not the enemy—it is his own army, which keeps increasing the number of missions the men must fly to complete their service. Yet if Yossarian makes any attempt to excuse himself from the perilous missions he’s assigned, he’ll be in violation of Catch-22, a hilariously sinister bureaucratic rule: a man is considered insane if he willingly continues to fly dangerous combat missions, but if he makes a formal request to be removed from duty, he is proven sane and therefore ineligible to be relieved.",
            'cover' => "img/Catch-22.jpg",
        ]);

        Book::create([
            'title' => "Wuthering Heights",
            'authors' => "Emily Brontë",
            'genres' => "Classics, Fiction, Romance, Gothic, Historical Fiction",
            'release_date' => Carbon::parse('1847-12-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "At the centre of this novel is the passionate love between Catherine Earnshaw and Heathcliff - recounted with such emotional intensity that a plain tale of the Yorkshire moors acquires the depth and simplicity of ancient tragedy.

            This best-selling Norton Critical Edition is based on the 1847 first edition of the novel. For the Fourth Edition, the editor has collated the 1847 text with several modern editions and has corrected a number of variants, including accidentals. The text is accompanied by entirely new explanatory annotations.
            
            New to the fourth Edition are twelve of Emily Bronte's letters regarding the publication of the 1847 edition of Wuthering Heights as well as the evolution of the 1850 edition, prose and poetry selections by the author, four reviews of the novel, and poetry selections by the author, four reviews of the novel, and Edward Chitham's insightful and informative chronology of the creative process behind the beloved work.
            
            Five major critical interpretations of Wuthering Heights are included, three of them new to the Fourth Edition. A Stuart Daley considers the importance of chronology in the novel. J. Hillis Miller examines Wuthering Heights's problems of genre and critical reputation. Sandra M. Gilbert assesses the role of Victorian Christianity plays in the novel, while Martha Nussbaum traces the novel's romanticism. Finally, Lin Haire-Sargeant scrutinizes the role of Heathcliff in film adaptations of Wuthering Heights.",
            'cover' => "img/Wuthering Heights.jpg",
        ]);

        Book::create([
            'title' => "Birdsong",
            'authors' => "Sebastian Faulks",
            'genres' => "Historical Fiction, Fiction, War, Classics, Historica",
            'release_date' => Carbon::parse('1993-09-27'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Published to international critical and popular acclaim, this intensely romantic yet stunningly realistic novel spans three generations and the unimaginable gulf between the First World War and the present. As the young Englishman Stephen Wraysford passes through a tempestuous love affair with Isabelle Azaire in France and enters the dark, surreal world beneath the trenches of No Man's Land, Sebastian Faulks creates a world of fiction that is as tragic as A Farewell to Arms and as sensuous as The English Patient. Crafted from the ruins of war and the indestructibility of love, Birdsong is a novel that will be read and marveled at for years to come.",
            'cover' => "img/Birdsong.jpg",
        ]);

        Book::create([
            'title' => "Rebecca",
            'authors' => "Daphne du Maurier",
            'genres' => "Classics, Fiction, Mystery, Gothic, Romance",
            'release_date' => Carbon::parse('1938-09-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "\"Last night I dreamt I went to Manderley again...\"

            Ancient, beautiful Manderley, between the rose garden and the sea, is the county's showpiece. Rebecca made it so - even a year after her death, Rebecca's influence still rules there. How can Maxim de Winter's shy new bride ever fill her place or escape her vital shadow?
            
            A shadow that grows longer and darker as the brief summer fades, until, in a moment of climatic revelations, it threatens to eclipse Manderley and its inhabitants completely...",
            'cover' => "img/Rebecca.jpg",
        ]);

        Book::create([
            'title' => "The Catcher in the Rye",
            'authors' => "J.D. Salinger",
            'genres' => "Classics, Fiction, Young Adult, Literature, School",
            'release_date' => Carbon::parse('1951-07-16'),
            'is_available' => $this->getIsAvailable(),
            'description' => "It's Christmas time and Holden Caulfield has just been expelled from yet another school...

            Fleeing the crooks at Pencey Prep, he pinballs around New York City seeking solace in fleeting encounters—shooting the bull with strangers in dive hotels, wandering alone round Central Park, getting beaten up by pimps and cut down by erstwhile girlfriends. The city is beautiful and terrible, in all its neon loneliness and seedy glamour, its mingled sense of possibility and emptiness. Holden passes through it like a ghost, thinking always of his kid sister Phoebe, the only person who really understands him, and his determination to escape the phonies and find a life of true meaning.
            
            The Catcher in the Rye is an all-time classic in coming-of-age literature- an elegy to teenage alienation, capturing the deeply human need for connection and the bewildering sense of loss as we leave childhood behind.",
            'cover' => "img/The Catcher in the Rye.jpg",
        ]);

        Book::create([
            'title' => "The Wind in the Willows",
            'authors' => "Kenneth Grahame",
            'genres' => "Classics, Fiction, Childrens, Fantasy, Animals",
            'release_date' => Carbon::parse('1908-10-08'),
            'is_available' => $this->getIsAvailable(),
            'description' => "“All this he saw, for one moment breathless and intense, vivid on the morning sky; and still, as he looked, he lived; and still, as he lived, he wondered.”

            For more than a century, The Wind in the Willows and its endearing protagonists—Mole, Water Rat, Badger, and, of course, the incorrigible Toad—have enchanted children of all ages. Whether the four friends are setting forth on an exciting adventure, engaging in a comic caper, or simply relaxing by the River Thames, their stories will surprise and captivate you.
            
            Hailed as one of the most enduringly popular works of the twentieth century, this story is a classic of magical fancy and enchanting wit. Penned in lyrical prose, the adventures and misadventures of the book’s intrepid quartet of heroes raise fantasy to the level of myth. Reflecting the freshness of childhood wonder, it still offers adults endless sophistication, substance, and depth.
            
            The animals’ world embodies the author’s wry, whimsical, and unfailingly inventive imagination. It is a world that succeeding generations of both adult and young readers have found irresistible. But why say more? To use the words of the estimable Mr. Toad himself: “Travel, change, interest, excitement!...Come inside.”",
            'cover' => "img/The Wind in the Willows.jpg",
        ]);

        Book::create([
            'title' => "Great Expectations",
            'authors' => "Charles Dickens",
            'genres' => "Classics, Fiction, Literature, Historical Fiction, School",
            'release_date' => Carbon::parse('1860-12-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Great Expectations charts the progress of Pip from childhood through often painful experiences to adulthood, as he moves from the Kent marshes to busy, commercial London, encountering a variety of extraordinary characters ranging from Magwitch, the escaped convict, to Miss Havisham, locked up with her unhappy past and living with her ward, the arrogant, beautiful Estella.

            Pip must discover his true self, and his own set of values and priorities. Whether such values allow one to prosper in the complex world of early Victorian England is the major question posed by Great Expectations, one of Dickens's most fascinating, and disturbing, novels.
            
            This edition includes the original, discarded ending, Dickens's brief working notes, and the serial instalments and chapter divisions in different editions. It also uses the definitive Clarendon text.",
            'cover' => "img/Great Expectations.jpg",
        ]);

        Book::create([
            'title' => "Little Women",
            'authors' => "Louisa May Alcott",
            'genres' => "Classics, Fiction, Historical Fiction, Young Adult, Romance",
            'release_date' => Carbon::parse('1868-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Generations of readers young and old, male and female, have fallen in love with the March sisters of Louisa May Alcott’s most popular and enduring novel, Little Women. Here are talented tomboy and author-to-be Jo, tragically frail Beth, beautiful Meg, and romantic, spoiled Amy, united in their devotion to each other and their struggles to survive in New England during the Civil War.
            It is no secret that Alcott based Little Women on her own early life. While her father, the freethinking reformer and abolitionist Bronson Alcott, hobnobbed with such eminent male authors as Emerson, Thoreau, and Hawthorne, Louisa supported herself and her sisters with \"woman’s work,\” including sewing, doing laundry, and acting as a domestic servant. But she soon discovered she could make more money writing. Little Women brought her lasting fame and fortune, and far from being the \"girl’s book\” her publisher requested, it explores such timeless themes as love and death, war and peace, the conflict between personal ambition and family responsibilities, and the clash of cultures between Europe and America.",
            'cover' => "img/Little Women.jpg",
        ]);

        Book::create([
            'title' => "Captain Corelli's Mandolin",
            'authors' => "Louis de Bernières",
            'genres' => "Fiction, Historical Fiction, Romance, Classics, War",
            'release_date' => Carbon::parse('1994-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "It is 1941 and Captain Antonio Corelli, a young Italian officer, is posted to the Greek island of Cephallonia as part of the occupying forces. At first he is ostracised by the locals, but as a conscientious but far from fanatical soldier, whose main aim is to have a peaceful war, he proves in time to be civilised, humorous - and a consummate musician.

            When the local doctor's daughter's letters to her fiancé - a member of the underground - go unanswered, the working of the eternal triangle seems inevitable. But can this fragile love survive as a war of bestial savagery gets closer and the lines are drawn between invader and defender?",
            'cover' => "img/Captain Corelli's Mandolin.jpg",
        ]);

        Book::create([
            'title' => "War and Peace",
            'authors' => "Leo Tolstoy",
            'genres' => "Classics, Fiction, Historical Fiction, Literature, War",
            'release_date' => Carbon::parse('1867-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "In Russia's struggle with Napoleon, Tolstoy saw a tragedy that involved all mankind.

            War and Peace broadly focuses on Napoleon’s invasion of Russia in 1812 and follows three of the most well-known characters in literature: Pierre Bezukhov, the illegitimate son of a count who is fighting for his inheritance and yearning for spiritual fulfillment; Prince Andrei Bolkonsky, who leaves his family behind to fight in the war against Napoleon; and Natasha Rostov, the beautiful young daughter of a nobleman who intrigues both men.
            
            As Napoleon’s army invades, Tolstoy brilliantly follows characters from diverse backgrounds—peasants and nobility, civilians and soldiers—as they struggle with the problems unique to their era, their history, and their culture. And as the novel progresses, these characters transcend their specificity, becoming some of the most moving—and human—figures in world literature.
            
            
            Tolstoy gave his personal approval to this translation, published here in a new single volume edition, which includes an introduction by Henry Gifford, and Tolstoy's important essay `Some Words about War and Peace'.",
            'cover' => "img/War and Peace.jpg",
        ]);

        Book::create([
            'title' => "Gone with the Wind",
            'authors' => "Margaret Mitchell",
            'genres' => "Classics, Historical Fiction, Fiction, Romance, Historical",
            'release_date' => Carbon::parse('1936-06-30'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Scarlett O'Hara, the beautiful, spoiled daughter of a well-to-do Georgia plantation owner, must use every means at her disposal to claw her way out of the poverty she finds herself in after Sherman's March to the Sea.",
            'cover' => "img/Gone with the Wind.jpg",
        ]);

        Book::create([
            'title' => "Harry Potter and the Philosopher’s Stone",
            'authors' => "J.K. Rowling",
            'genres' => "Fiction, Young Adult, Magic, Childrens, Middle Grade",
            'release_date' => Carbon::parse('1997-06-26'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Harry Potter thinks he is an ordinary boy - until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason ... HARRY POTTER IS A WIZARD!",
            'cover' => "img/Harry Potter and the Philosopher’s Stone.jpg",
        ]);

        Book::create([
            'title' => "Harry Potter and the Chamber of Secrets",
            'authors' => "J.K. Rowling",
            'genres' => "Fantasy, Fiction,Young Adult, Magic, Childrens",
            'release_date' => Carbon::parse('1998-07-02'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Ever since Harry Potter had come home for the summer, the Dursleys had been so mean and hideous that all Harry wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he’s packing his bags, Harry receives a warning from a strange impish creature who says that if Harry returns to Hogwarts, disaster will strike.

            And strike it does. For in Harry’s second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor and a spirit who haunts the girls’ bathroom. But then the real trouble begins – someone is turning Hogwarts students to stone. Could it be Draco Malfoy, a more poisonous rival than ever? Could it possibly be Hagrid, whose mysterious past is finally told? Or could it be the one everyone at Hogwarts most suspects… Harry Potter himself!",
            'cover' => "img/Harry Potter and the Chamber of Secrets.jpg",
        ]);

        Book::create([
            'title' => "Harry Potter and the Prisoner of Azkaban",
            'authors' => "J.K. Rowling",
            'genres' => "Young Adult, Childrens, Middle Grade, Adventure, Science Fiction Fantasy",
            'release_date' => Carbon::parse('1999-07-08'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Harry Potter, along with his best friends, Ron and Hermione, is about to start his third year at Hogwarts School of Witchcraft and Wizardry. Harry can't wait to get back to school after the summer holidays. (Who wouldn't if they lived with the horrible Dursleys?) But when Harry gets to Hogwarts, the atmosphere is tense. There's an escaped mass murderer on the loose, and the sinister prison guards of Azkaban have been called in to guard the school...",
            'cover' => "img/Harry Potter and the Prisoner of Azkaban.jpg",
        ]);

        Book::create([
            'title' => "The Hobbit",
            'authors' => "J.R.R. Tolkien",
            'genres' => "Fantasy, Classics, Fiction, Adventure, Young Adult",
            'release_date' => Carbon::parse('1937-10-21'),
            'is_available' => $this->getIsAvailable(),
            'description' => "In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.
            Written for J.R.R. Tolkien’s own children, The Hobbit met with instant critical acclaim when it was first published in 1937. Now recognized as a timeless classic, this introduction to the hobbit Bilbo Baggins, the wizard Gandalf, Gollum, and the spectacular world of Middle-earth recounts of the adventures of a reluctant hero, a powerful and dangerous ring, and the cruel dragon Smaug the Magnificent. The text in this 372-page paperback edition is based on that first published in Great Britain by Collins Modern Classics (1998), and includes a note on the text by Douglas A. Anderson (2001).",
            'cover' => "img/The Hobbit.jpg",
        ]);

        Book::create([
            'title' => "Tess of the d'Urbervilles",
            'authors' => "Thomas Hardy",
            'genres' => "Classics, Fiction, Literature, Historical Fiction, 19th Century",
            'release_date' => Carbon::parse('1981-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "When Tess Durbeyfield is driven by family poverty to claim kinship with the wealthy D'Urbervilles and seek a portion of their family fortune, meeting her 'cousin' Alec proves to be her downfall. A very different man, Angel Clare, seems to offer her love and salvation, but Tess must choose whether to reveal her past or remain silent in the hope of a peaceful future.",
            'cover' => "img/Tess of the d'Urbervilles.jpg",
        ]);

        Book::create([
            'title' => "Middlemarch",
            'authors' => "George Eliot",
            'genres' => "Classics, Fiction, Historical Fiction, Literature, 19th Century",
            'release_date' => Carbon::parse('1871-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Taking place in the years leading up to the First Reform Bill of 1832, Middlemarch explores nearly every subject of concern to modern life: art, religion, science, politics, self, society, human relationships. Among her characters are some of the most remarkable portraits in English literature: Dorothea Brooke, the heroine, idealistic but naive; Rosamond Vincy, beautiful and egoistic: Edward Casaubon, the dry-as-dust scholar: Tertius Lydgate, the brilliant but morally-flawed physician: the passionate artist Will Ladislaw: and Fred Vincey and Mary Garth, childhood sweethearts whose charming courtship is one of the many humorous elements in the novel's rich comic vein.",
            'cover' => "img/Middlemarch.jpg",
        ]);

        Book::create([
            'title' => "A Prayer for Owen Meany",
            'authors' => "John Irving",
            'genres' => "Fiction, Classics, Contemporary, Literature, Literary Fiction",
            'release_date' => Carbon::parse('1989-03-28'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Eleven-year-old Owen Meany, playing in a Little League baseball game in Gravesend, New Hampshire, hits a foul ball and kills his best friend's mother. Owen doesn't believe in accidents; he believes he is God's instrument. What happens to Owen after that 1953 foul is both extraordinary and terrifying. At moments a comic, self-deluded victim, but in the end the principal, tragic actor in a divine plan, Owen Meany is the most heartbreaking hero John Irving has yet created.",
            'cover' => "img/A Prayer for Owen Meany.jpg",
        ]);

        Book::create([
            'title' => "The Grapes of Wrath",
            'authors' => "John Steinbeck",
            'genres' => "Classics, Fiction, Historical Fiction, Literature, Novels",
            'release_date' => Carbon::parse('1939-04-14'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The Pulitzer Prize-winning epic of the Great Depression, a book that galvanized—and sometimes outraged—millions of readers.

            First published in 1939, Steinbeck’s Pulitzer Prize-winning epic of the Great Depression chronicles the Dust Bowl migration of the 1930s and tells the story of one Oklahoma farm family, the Joads—driven from their homestead and forced to travel west to the promised land of California. Out of their trials and their repeated collisions against the hard realities of an America divided into Haves and Have-Nots evolves a drama that is intensely human yet majestic in its scale and moral vision, elemental yet plainspoken, tragic but ultimately stirring in its human dignity. A portrait of the conflict between the powerful and the powerless, of one man’s fierce reaction to injustice, and of one woman’s stoical strength, the novel captures the horrors of the Great Depression and probes into the very nature of equality and justice in America. At once a naturalistic epic, captivity narrative, road novel, and transcendental gospel, Steinbeck’s powerful landmark novel is perhaps the most American of American Classics.",
            'cover' => "img/The Grapes of Wrath.jpg",
        ]);

        Book::create([
            'title' => "The Story of Tracy Beaker",
            'authors' => "Jacqueline Wilson",
            'genres' => "Childrens, Fiction, Middle Grade,Contemporary, Young Adult",
            'release_date' => Carbon::parse('1991-02-14'),
            'is_available' => $this->getIsAvailable(),
            'description' => "'I'm Tracy Beaker. This is a book all about me. I'd read it if I were you. It's the most incredible dynamic heart-rending story. Honest.'

            Tracy is ten years old. She lives in a Children's Home but would like a real home one day, with a real family. Meet Tracy, follow her story and share her hopes for the future in this beautifully observed, touching and often very funny tale, all told in Tracy's own words.",
            'cover' => "img/The Story of Tracy Beaker.jpg",
        ]);

        Book::create([
            'title' => "Alice's Adventures in Wonderland",
            'authors' => "Lewis Carroll",
            'genres' => "Classics, Fantasy, Fiction, Childrens, Young Adult",
            'release_date' => Carbon::parse('1871-12-27'),
            'is_available' => $this->getIsAvailable(),
            'description' => "\"I can't explain myself, I'm afraid, sir,\" said Alice, \"Because I'm not myself, you see.\"

            When Alice sees a white rabbit take a watch out of its waistcoat pocket she decides to follow it, and a sequence of most unusual events is set in motion. This mini book contains the entire topsy-turvy stories of Alice's Adventures in Wonderland and Through the Looking-Glass, accompanied by practical notes and Martina Pelouso's memorable full-colour illustrations.",
            'cover' => "img/Alice's Adventures in Wonderland.jpg",
        ]);

        Book::create([
            'title' => "One Hundred Years of Solitude",
            'authors' => "Gabriel García Márquez",
            'genres' => "Fiction, Magical Realism, Literature, Fantasy, Novels",
            'release_date' => Carbon::parse('1967-05-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "The brilliant, bestselling, landmark novel that tells the story of the Buendia family, and chronicles the irreconcilable conflict between the desire for solitude and the need for love—in rich, imaginative prose that has come to define an entire genre known as \"magical realism.\"",
            'cover' => "img/One Hundred Years of Solitude.jpg",
        ]);

        Book::create([
            'title' => "The Pillars of the Earth",
            'authors' => "Ken Follett",
            'genres' => "Historical Fiction, Fiction, Historical, Fantasy, Classics",
            'release_date' => Carbon::parse('1989-10-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Ken Follett is known worldwide as the master of split-second suspense, but his most beloved and bestselling book tells the magnificent tale of a twelfth-century monk driven to do the seemingly impossible: build the greatest Gothic cathedral the world has ever known.

            Everything readers expect from Follett is here: intrigue, fast-paced action, and passionate romance. But what makes The Pillars of the Earth extraordinary is the time the twelfth century; the place feudal England; and the subject the building of a glorious cathedral. Follett has re-created the crude, flamboyant England of the Middle Ages in every detail. The vast forests, the walled towns, the castles, and the monasteries become a familiar landscape.
            
            Against this richly imagined and intricately interwoven backdrop, filled with the ravages of war and the rhythms of daily life, the master storyteller draws the reader irresistibly into the intertwined lives of his characters into their dreams, their labors, and their loves: Tom, the master builder; Aliena, the ravishingly beautiful noblewoman; Philip, the prior of Kingsbridge; Jack, the artist in stone; and Ellen, the woman of the forest who casts a terrifying curse. From humble stonemason to imperious monarch, each character is brought vividly to life.
            
            The building of the cathedral, with the almost eerie artistry of the unschooled stonemasons, is the center of the drama. Around the site of the construction, Follett weaves a story of betrayal, revenge, and love, which begins with the public hanging of an innocent man and ends with the humiliation of a king.",
            'cover' => "img/The Pillars of the Earth.jpg",
        ]);

        Book::create([
            'title' => "David Copperfield",
            'authors' => "Charles Dickens",
            'genres' => "Fiction, Classics, Literature, Historical Fiction, 19th Century",
            'release_date' => Carbon::parse('1850-11-1'),
            'is_available' => $this->getIsAvailable(),
            'description' => "David Copperfield is the story of a young man's adventures on his journey from an unhappy and impoverished childhood to the discovery of his vocation as a successful novelist. Among the gloriously vivid cast of characters he encounters are his tyrannical stepfather, Mr Murdstone; his brilliant, but ultimately unworthy school-friend James Steerforth; his formidable aunt, Betsey Trotwood; the eternally humble, yet treacherous Uriah Heep; frivolous, enchanting Dora Spenlow; and the magnificently impecunious Wilkins Micawber, one of literature's great comic creations. In David Copperfield - the novel he described as his 'favourite child' - Dickens drew revealingly on his own experiences to create one of the most exuberant and enduringly popular works, filled with tragedy and comedy in equal measure. This edition uses the text of the first volume publication of 1850, and includes updated suggestions for further reading, original illustrations by 'Phiz', a revised chronology and expanded notes. In his new introduction, Jeremy Tambling discusses the novel's autobiographical elements, and its central themes of memory and identity.",
            'cover' => "img/David Copperfield.jpg",
        ]);

        Book::create([
            'title' => "Charlie and the Chocolate Factory",
            'authors' => "Roald Dahl",
            'genres' => "Fiction, Fantasy, Childrens, Classics, Young Adult",
            'release_date' => Carbon::parse('1964-01-17'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Charlie Bucket's wonderful adventure begins when he finds one of Mr. Willy Wonka's precious Golden Tickets and wins a whole day inside the mysterious chocolate factory. Little does he know the surprises that are in store for him!
            (back cover)",
            'cover' => "img/Charlie and the Chocolate Factory.jpg",
        ]);

        Book::create([
            'title' => "Treasure Island",
            'authors' => "Robert Louis Stevenson",
            'genres' => "Classics, Fiction, Adventure, Historical Fiction, Young Adult",
            'release_date' => Carbon::parse('1882-01-28'),
            'is_available' => $this->getIsAvailable(),
            'description' => "For sheer storytelling delight and pure adventure, Treasure Island has never been surpassed. From the moment young Jim Hawkins first encounters the sinister Blind Pew at the Admiral Benbow Inn until the climactic battle for treasure on a tropic isle, the novel creates scenes and characters that have fired the imaginations of generations of readers. Written by a superb prose stylist, a master of both action and atmosphere, the story centers upon the conflict between good and evil - but in this case a particularly engaging form of evil. It is the villainy of that most ambiguous rogue Long John Silver that sets the tempo of this tale of treachery, greed, and daring. Designed to forever kindle a dream of high romance and distant horizons, Treasure Island is, in the words of G. K. Chesterton, 'the realization of an ideal, that which is promised in its provocative and beckoning map; a vision not only of white skeletons but also green palm trees and sapphire seas.' G. S. Fraser terms it 'an utterly original book' and goes on to write: 'There will always be a place for stories like Treasure Island that can keep boys and old men happy.'",
            'cover' => "img/Treasure Island.jpg",
        ]);

        Book::create([
            'title' => "A Town Like Alice",
            'authors' => "Nevil Shute",
            'genres' => "Fiction, Historical Fiction, Classics, Australia, Romance",
            'release_date' => Carbon::parse('1950-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Nevil Shute's most beloved novel, a tale of love and war, follows its enterprising heroine from the Malayan jungle during World War II to the rugged Australian outback.

            Jean Paget, a young Englishwoman living in Malaya, is captured by the invading Japanese and forced on a brutal seven-month death march with dozens of other women and children. A few years after the war, Jean is back in England, the nightmare behind her. However, an unexpected inheritance inspires her to return to Malaya to give something back to the villagers who saved her life. Jean's travels leads her to a desolate Australian outpost called Willstown, where she finds a challenge that will draw on all the resourcefulness and spirit that carried her through her war-time ordeals.",
            'cover' => "img/A Town Like Alice.jpg",
        ]);

        Book::create([
            'title' => "Persuasion",
            'authors' => "Jane Austen",
            'genres' => "Classics, Fiction, Romance, Historical Fiction, Historical",
            'release_date' => Carbon::parse('1817-12-20'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Persuasion is Jane Austen's last completed novel. She began it soon after she had finished Emma, completing it in August 1816. She died, aged 41, in 1817; Persuasion was published in December that year (but dated 1818). Persuasion is linked to Northanger Abbey not only by the fact that the two books were originally bound up in one volume and published together, but also because both stories are set partly in Bath, a fashionable city with which Austen was well acquainted, having lived there from 1801 to 1805. Besides the theme of persuasion, the novel evokes other topics, such as the Royal Navy, in which two of Jane Austen's brothers ultimately rose to the rank of admiral. As in Northanger Abbey, the superficial social life of Bath-well known to Austen, who spent several relatively unhappy and unproductive years there-is portrayed extensively and serves as a setting for the second half of the book. In many respects Persuasion marks a break with Austen's previous works, both in the more biting, even irritable satire directed at some of the novel's characters and in the regretful, resigned outlook of its otherwise admirable heroine, Anne Elliot, in the first part of the story. Against this is set the energy and appeal of the Royal Navy, which symbolises for Anne and the reader the possibility of a more outgoing, engaged, and fulfilling life, and it is this worldview which triumphs for the most part at the end of the novel.",
            'cover' => "img/Persuasion.jpg",
        ]);

        Book::create([
            'title' => "Dune",
            'authors' => "Frank Herbert",
            'genres' => "Science Fiction, Fiction, Fantasy, Classics,Science Fiction Fantasy",
            'release_date' => Carbon::parse('1965-06-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "Set on the desert planet Arrakis, Dune is the story of the boy Paul Atreides, heir to a noble family tasked with ruling an inhospitable world where the only thing of value is the “spice” melange, a drug capable of extending life and enhancing consciousness. Coveted across the known universe, melange is a prize worth killing for...

            When House Atreides is betrayed, the destruction of Paul’s family will set the boy on a journey toward a destiny greater than he could ever have imagined. And as he evolves into the mysterious man known as Muad’Dib, he will bring to fruition humankind’s most ancient and unattainable dream.",
            'cover' => "img/Dune.jpg",
        ]);

        Book::create([
            'title' => "Good Omens: The Nice and Accurate Prophecies of Agnes Nutter, Witch",
            'authors' => "Terry Pratchett, Neil Gaiman",
            'genres' => "Fantasy, Fiction, Humor, Urban Fantasy, Comedy",
            'release_date' => Carbon::parse('1990-01-01'),
            'is_available' => $this->getIsAvailable(),
            'description' => "According to the Nice and Accurate Prophecies of Agnes Nutter - the world's only totally reliable guide to the future - the world will end on a Saturday. Next Saturday, in fact. Just after tea...

            People have been predicting the end of the world almost from its very beginning, so it’s only natural to be sceptical when a new date is set for Judgement Day. This time though, the armies of Good and Evil really do appear to be massing. The four Bikers of the Apocalypse are hitting the road. But both the angels and demons – well, one fast-living demon and a somewhat fussy angel – would quite like the Rapture not to happen.
            
            And someone seems to have misplaced the Antichrist…",
            'cover' => "img/Good Omens: The Nice and Accurate Prophecies of Agnes Nutter, Witch.jpg",
        ]);

        /*
        Book::create([
            'title' => "",
            'authors' => "",
            'genres' => "",
            'release_date' => Carbon::parse('Y-m-d'),
            'is_available' => true,
            'description' => "",
            'cover' => "img/.jpg",
        ]);
        */
    }
}
